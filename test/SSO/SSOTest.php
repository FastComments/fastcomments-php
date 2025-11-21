<?php

namespace FastComments\Client\Test\SSO;

use FastComments\SSO\FastCommentsSSO;
use FastComments\SSO\SecureSSOPayload;
use FastComments\SSO\SecureSSOUserData;
use FastComments\SSO\SimpleSSOUserData;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for FastComments SSO functionality.
 */
class SSOTest extends TestCase
{
    private const API_KEY = 'test-api-key-12345';
    private const USER_ID = 'test-user-123';
    private const EMAIL = 'test@example.com';
    private const USERNAME = 'testuser';
    private const AVATAR = 'https://example.com/avatar.jpg';

    /**
     * Test creating a verification hash.
     */
    public function testCreateVerificationHash(): void
    {
        $timestamp = (int) round(microtime(true) * 1000);
        $userData = 'test_data_base64';

        $result = SecureSSOPayload::createVerificationHash(self::API_KEY, $timestamp, $userData);

        $this->assertNotEmpty($result);
        $this->assertEquals(64, strlen($result));
    }

    /**
     * Test creating SecureSSOUserData.
     */
    public function testCreateSecureSSOUserData(): void
    {
        $user = SecureSSOUserData::create(self::USER_ID, self::EMAIL, self::USERNAME, self::AVATAR);

        $this->assertEquals(self::USER_ID, $user->id);
        $this->assertEquals(self::EMAIL, $user->email);
        $this->assertEquals(self::USERNAME, $user->username);
        $this->assertEquals(self::AVATAR, $user->avatar);
    }

    /**
     * Test creating SimpleSSOUserData.
     */
    public function testCreateSimpleSSOUserData(): void
    {
        $user = SimpleSSOUserData::create(self::USER_ID, self::EMAIL, self::AVATAR);

        $this->assertEquals(self::USER_ID, $user->username);
        $this->assertEquals(self::EMAIL, $user->email);
        $this->assertEquals(self::AVATAR, $user->avatar);
    }

    /**
     * Test creating secure SSO token.
     */
    public function testCreateSecureSSO(): void
    {
        $user = SecureSSOUserData::create(self::USER_ID, self::EMAIL, self::USERNAME, self::AVATAR);
        $sso = FastCommentsSSO::createSecure(self::API_KEY, $user);

        $token = $sso->prepareToSend();
        $this->assertNotEmpty($token);

        // Verify the token is valid JSON
        $decoded = json_decode($token, true);
        $this->assertIsArray($decoded);
        $this->assertArrayHasKey('userDataJSONBase64', $decoded);
        $this->assertArrayHasKey('verificationHash', $decoded);
        $this->assertArrayHasKey('timestamp', $decoded);

        // Verify the verification hash is 64 characters
        $this->assertEquals(64, strlen($decoded['verificationHash']));

        // Verify we can decode the user data
        $userDataDecoded = json_decode(base64_decode($decoded['userDataJSONBase64']), true);
        $this->assertEquals(self::USER_ID, $userDataDecoded['id']);
        $this->assertEquals(self::EMAIL, $userDataDecoded['email']);
        $this->assertEquals(self::USERNAME, $userDataDecoded['username']);
        $this->assertEquals(self::AVATAR, $userDataDecoded['avatar']);
    }

    /**
     * Test creating simple SSO token.
     */
    public function testCreateSimpleSSO(): void
    {
        $user = SimpleSSOUserData::create(self::USER_ID, self::EMAIL, self::AVATAR);
        $sso = new FastCommentsSSO(null, $user);

        $token = $sso->prepareToSend();
        $this->assertNotEmpty($token);

        // Verify the token is valid JSON
        $decoded = json_decode($token, true);
        $this->assertIsArray($decoded);
        $this->assertArrayHasKey('username', $decoded);
        $this->assertArrayHasKey('email', $decoded);
        $this->assertArrayHasKey('avatar', $decoded);

        // Verify the values
        $this->assertEquals(self::USER_ID, $decoded['username']);
        $this->assertEquals(self::EMAIL, $decoded['email']);
        $this->assertEquals(self::AVATAR, $decoded['avatar']);
    }
}
