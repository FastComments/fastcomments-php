<?php

namespace FastComments\SSO;

/**
 * Main class for FastComments SSO integration.
 */
class FastCommentsSSO
{
    /**
     * @var SecureSSOPayload|null
     */
    private $secureSSOPayload;

    /**
     * @var SimpleSSOUserData|null
     */
    private $simpleSSOUserData;

    /**
     * @var string|null
     */
    private $cachedToken;

    /**
     * The login URL for the user.
     * @var string|null
     */
    public $loginURL;

    /**
     * The logout URL for the user.
     * @var string|null
     */
    public $logoutURL;

    /**
     * Callback invoked on login.
     * @var callable|null
     */
    public $loginCallback;

    /**
     * Callback invoked on logout.
     * @var callable|null
     */
    public $logoutCallback;

    /**
     * Constructor for secure SSO.
     *
     * @param SecureSSOPayload|null $secureSSOPayload Secure SSO payload
     * @param SimpleSSOUserData|null $simpleSSOUserData Simple SSO user data
     */
    public function __construct($secureSSOPayload = null, $simpleSSOUserData = null)
    {
        $this->secureSSOPayload = $secureSSOPayload;
        $this->simpleSSOUserData = $simpleSSOUserData;
    }

    /**
     * Static factory method to create secure SSO instance.
     *
     * @param string $apiKey FastComments API key
     * @param SecureSSOUserData $secureSSOUserData User data
     * @return FastCommentsSSO
     * @throws \Exception If hash generation fails
     */
    public static function createSecure(string $apiKey, SecureSSOUserData $secureSSOUserData): FastCommentsSSO
    {
        $timestamp = round(microtime(true) * 1000);
        $userDataString = base64_encode(json_encode($secureSSOUserData));
        $hash = SecureSSOPayload::createVerificationHash($apiKey, $timestamp, $userDataString);
        return new FastCommentsSSO(new SecureSSOPayload($userDataString, $hash, $timestamp));
    }

    /**
     * Create SSO with login/logout URLs.
     *
     * @param SecureSSOPayload $secureSSOPayload Secure SSO payload
     * @param string $loginURL Login URL
     * @param string $logoutURL Logout URL
     * @return FastCommentsSSO
     */
    public static function createWithUrls(
        SecureSSOPayload $secureSSOPayload,
        string $loginURL,
        string $logoutURL
    ): FastCommentsSSO {
        $instance = new FastCommentsSSO($secureSSOPayload);
        $instance->loginURL = $loginURL;
        $instance->logoutURL = $logoutURL;
        return $instance;
    }

    /**
     * Create SSO with login/logout callbacks.
     *
     * @param SimpleSSOUserData $simpleSSOUserData Simple SSO user data
     * @param callable $loginCallback Login callback
     * @param callable $logoutCallback Logout callback
     * @return FastCommentsSSO
     */
    public static function createWithCallbacks(
        SimpleSSOUserData $simpleSSOUserData,
        callable $loginCallback,
        callable $logoutCallback
    ): FastCommentsSSO {
        $instance = new FastCommentsSSO(null, $simpleSSOUserData);
        $instance->loginCallback = $loginCallback;
        $instance->logoutCallback = $logoutCallback;
        return $instance;
    }

    /**
     * Creates a token from the SSO data.
     *
     * @return string JSON token
     */
    private function createToken(): string
    {
        if ($this->secureSSOPayload !== null) {
            return json_encode($this->secureSSOPayload);
        }
        return json_encode($this->simpleSSOUserData);
    }

    /**
     * Prepares the SSO token to be sent to FastComments.
     *
     * @return string The token
     */
    public function prepareToSend(): string
    {
        if ($this->cachedToken === null) {
            $this->cachedToken = $this->createToken();
        }
        return $this->cachedToken;
    }

    /**
     * Get the secure SSO payload.
     *
     * @return SecureSSOPayload|null
     */
    public function getSecureSSOPayload(): ?SecureSSOPayload
    {
        return $this->secureSSOPayload;
    }

    /**
     * Get the simple SSO user data.
     *
     * @return SimpleSSOUserData|null
     */
    public function getSimpleSSOUserData(): ?SimpleSSOUserData
    {
        return $this->simpleSSOUserData;
    }

    /**
     * Set the secure SSO payload.
     *
     * @param SecureSSOPayload $secureSSOPayload Secure SSO payload
     * @return void
     */
    public function setSecureSSOPayload(SecureSSOPayload $secureSSOPayload): void
    {
        $this->secureSSOPayload = $secureSSOPayload;
        $this->resetToken();
    }

    /**
     * Set the simple SSO user data.
     *
     * @param SimpleSSOUserData $simpleSSOUserData Simple SSO user data
     * @return void
     */
    public function setSimpleSSOUserData(SimpleSSOUserData $simpleSSOUserData): void
    {
        $this->simpleSSOUserData = $simpleSSOUserData;
        $this->resetToken();
    }

    /**
     * Resets the cached token.
     *
     * @return void
     */
    public function resetToken(): void
    {
        $this->cachedToken = null;
    }
}