<?php

namespace FastComments\Client\Test\SSO;

use FastComments\Client\Api\DefaultApi;
use FastComments\Client\Api\PublicApi;
use FastComments\Client\Configuration;
use FastComments\Client\Model\CommentData;
use FastComments\SSO\FastCommentsSSO;
use FastComments\SSO\SecureSSOUserData;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

/**
 * Integration tests for FastComments SSO functionality.
 *
 * IMPORTANT: These tests require the following environment variables:
 * - FASTCOMMENTS_API_KEY: Your FastComments API key
 * - FASTCOMMENTS_TENANT_ID: Your FastComments tenant ID
 */
class SSOIntegrationTest extends TestCase
{
    private string $apiKey;
    private string $tenantId;

    protected function setUp(): void
    {
        $this->apiKey = getenv('FASTCOMMENTS_API_KEY');
        $this->tenantId = getenv('FASTCOMMENTS_TENANT_ID');

        if (empty($this->apiKey)) {
            $this->markTestSkipped('FASTCOMMENTS_API_KEY environment variable is required');
        }
        if (empty($this->tenantId)) {
            $this->markTestSkipped('FASTCOMMENTS_TENANT_ID environment variable is required');
        }
    }

    /**
     * Get current timestamp in milliseconds.
     */
    private function getTimestamp(): int
    {
        return (int) round(microtime(true) * 1000);
    }

    /**
     * Test PublicAPI with no SSO.
     */
    public function testPublicAPINoSSO(): void
    {
        $config = Configuration::getDefaultConfiguration();
        // $config->setHost('https://eu.fastcomments.com'); // Uncomment to use EU endpoint
        $apiInstance = new PublicApi(new Client(), $config);

        $response = $apiInstance->getCommentsPublic(
            $this->tenantId,
            'sdk-test-page'
        );

        $this->assertNotNull($response);
    }

    /**
     * Test PublicAPI with secure SSO.
     */
    public function testPublicAPIWithSecureSSO(): void
    {
        $timestamp = $this->getTimestamp();

        $user = SecureSSOUserData::create(
            'test-user-' . $timestamp,
            'test-' . $timestamp . '@fctest.com',
            'testuser' . $timestamp,
            'https://example.com/avatar.jpg'
        );

        $sso = FastCommentsSSO::createSecure($this->apiKey, $user);
        $token = $sso->prepareToSend();

        $config = Configuration::getDefaultConfiguration();
        // $config->setHost('https://eu.fastcomments.com'); // Uncomment to use EU endpoint
        $publicApi = new PublicApi(new Client(), $config);

        // Create a comment
        $commentData = new CommentData();
        $commentData->setUrl('https://example.com/test-page');
        $commentData->setUrlId('sdk-test-php');
        $commentData->setComment('Test from PHP SDK');
        $commentData->setCommenterName($user->username);
        $commentData->setDate($timestamp);

        $createResponse = $publicApi->createCommentPublic(
            $this->tenantId,
            'sdk-test-php',
            'test-' . $timestamp,
            $commentData,
            null,
            $token
        );

        $this->assertNotNull($createResponse);

        // Get comments with SSO
        $getResponse = $publicApi->getCommentsPublic(
            $this->tenantId,
            'sdk-test-php',
            null,
            null,
            $token
        );

        $this->assertNotNull($getResponse);
    }

    /**
     * Test DefaultAPI with API key authentication.
     */
    public function testDefaultAPIWithAPIKey(): void
    {
        $timestamp = $this->getTimestamp();
        $testUrlId = 'sdk-test-php-defaultapi-' . $timestamp;

        // Step 1: Create a comment using PUBLIC API with SSO
        echo "\nStep 1: Creating test comment with PUBLIC API + SSO...\n";

        $user = SecureSSOUserData::create(
            'test-user-' . $timestamp,
            'test-' . $timestamp . '@fctest.com',
            'testuser' . $timestamp,
            'https://example.com/avatar.jpg'
        );

        $sso = FastCommentsSSO::createSecure($this->apiKey, $user);
        $token = $sso->prepareToSend();

        $publicConfig = Configuration::getDefaultConfiguration();
        // $publicConfig->setHost('https://eu.fastcomments.com'); // Uncomment to use EU endpoint
        $publicApi = new PublicApi(new Client(), $publicConfig);

        $commentData = new CommentData();
        $commentData->setUrl('https://example.com/test-page');
        $commentData->setUrlId($testUrlId);
        $commentData->setComment('Test from PHP SDK at ' . $timestamp);
        $commentData->setCommenterName($user->username);
        $commentData->setDate($timestamp);

        $createResponse = $publicApi->createCommentPublic(
            $this->tenantId,
            $testUrlId,
            'test-' . $timestamp,
            $commentData,
            null,
            $token
        );

        $this->assertNotNull($createResponse);
        echo "✓ Comment created successfully\n";

        // Step 2: Fetch comments using AUTHENTICATED DefaultAPI with API key
        echo "Step 2: Fetching comments with DefaultAPI using API key authentication...\n";

        $defaultConfig = Configuration::getDefaultConfiguration();
        // $defaultConfig->setHost('https://eu.fastcomments.com'); // Uncomment to use EU endpoint
        $defaultConfig->setApiKey('x-api-key', $this->apiKey);
        $defaultApi = new DefaultApi(new Client(), $defaultConfig);

        $getResponse = $defaultApi->getComments(
            $this->tenantId,
            null,  // page
            null,  // limit
            null,  // skip
            null,  // asTree
            null,  // skipChildren
            null,  // limitChildren
            null,  // maxTreeDepth
            $testUrlId  // urlId
        );

        $this->assertNotNull($getResponse);

        // Verify status is success
        $status = $getResponse->getStatus();
        $this->assertNotNull($status, 'Expected status field to be present');
        $this->assertEquals('success', $status, 'Expected success status');

        // The API should return the comments array with our comment
        $comments = $getResponse->getComments();
        $this->assertNotNull($comments, 'Expected comments field to be present in response');
        echo "✓ Retrieved " . count($comments) . " comments with DefaultAPI\n";

        // Verify we got at least one comment back (the one we just created)
        $this->assertGreaterThanOrEqual(1, count($comments), 'Expected at least 1 comment (the one we created)');

        echo "✓ Successfully verified DefaultAPI authentication with API key works!\n";
    }

    /**
     * Test end-to-end: Create and fetch comment with SSO.
     */
    public function testPublicAPICreateAndFetch(): void
    {
        $timestamp = $this->getTimestamp();
        $testUrlId = 'sdk-test-php-create-fetch-' . $timestamp;

        // Step 1: Create a comment using PUBLIC API with SSO
        echo "\nStep 1: Creating comment with PUBLIC API + SSO...\n";

        $user = SecureSSOUserData::create(
            'test-user-' . $timestamp,
            'test-' . $timestamp . '@fctest.com',
            'testuser' . $timestamp,
            'https://example.com/avatar.jpg'
        );

        $sso = FastCommentsSSO::createSecure($this->apiKey, $user);
        $token = $sso->prepareToSend();

        $publicConfig = Configuration::getDefaultConfiguration();
        // $publicConfig->setHost('https://eu.fastcomments.com'); // Uncomment to use EU endpoint
        $publicApi = new PublicApi(new Client(), $publicConfig);

        $commentData = new CommentData();
        $commentData->setUrl('https://example.com/test-page');
        $commentData->setUrlId($testUrlId);
        $commentData->setComment('Test from PHP SDK at ' . $timestamp);
        $commentData->setCommenterName($user->username);
        $commentData->setDate($timestamp);

        $createResponse = $publicApi->createCommentPublic(
            $this->tenantId,
            $testUrlId,
            'test-' . $timestamp,
            $commentData,
            null,
            $token
        );

        $this->assertNotNull($createResponse);
        echo "✓ Comment created successfully\n";

        // Step 2: Fetch the comment back using PUBLIC API with SSO
        echo "Step 2: Fetching comments for page '" . $testUrlId . "' with SSO...\n";

        $getResponse = $publicApi->getCommentsPublic(
            $this->tenantId,
            $testUrlId,
            null,  // page
            null,  // limit
            $token  // ssoToken
        );

        $this->assertNotNull($getResponse);

        // Verify the API call was successful - no error code should be present
        $code = $getResponse->getCode();
        $reason = $getResponse->getReason();
        $this->assertNull($code, 'Expected no error code, but got: ' . ($code ?? 'none'));
        $this->assertNull($reason, 'Expected no error reason, but got: ' . ($reason ?? 'none'));

        // The API should return the comments array with our comment
        $comments = $getResponse->getComments();
        $this->assertNotNull($comments, 'Expected comments field to be present in response');
        echo "✓ Retrieved " . count($comments) . " comments\n";

        // Verify we got at least one comment back (the one we just created)
        $this->assertGreaterThanOrEqual(1, count($comments), 'Expected at least 1 comment (the one we created)');

        // Verify the comment contains our unique text
        $foundOurComment = false;
        foreach ($comments as $comment) {
            $commentText = $comment->getCommentHtml();
            if ($commentText && strpos($commentText, (string)$timestamp) !== false) {
                $foundOurComment = true;
                echo "✓ Found our comment: " . $commentText . "\n";
                break;
            }
        }

        $this->assertTrue($foundOurComment, 'Expected to find our comment with timestamp ' . $timestamp);
        echo "✓ Successfully verified end-to-end create and fetch with SSO authentication\n";
    }
}
