# FastComments PHP SDK

This repository contains official PHP libraries for integrating with FastComments.

## Structure

This repository is organized into multiple PHP packages:

- **client**: Generated API client for interacting with FastComments API
- **sso**: Implementation of FastComments SSO (Single Sign-On) functionality

## Installation

Each package can be installed separately using Composer:

### API Client

```bash
composer require fastcomments/client
```

### SSO

```bash
composer require fastcomments/sso
```

## Usage

### API Client

The client package provides a comprehensive API for interacting with FastComments:

```php
use OpenAPI\Client\Api\PublicApi;
use OpenAPI\Client\Configuration;

$apiInstance = new PublicApi();

// Get comments for a page
try {
    $result = $apiInstance->getCommentsPublic(
        'YOUR_TENANT_ID',
        [
            'urlId' => 'your-page-identifier'
        ]
    );
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling API: ', $e->getMessage(), PHP_EOL;
}
```

### SSO

The SSO package provides Single Sign-On functionality:

```php
use FastComments\SSO\FastCommentsSSO;
use FastComments\SSO\SecureSSOUserData;

// Create user data
$userData = new SecureSSOUserData('user-123');
$userData->email = 'user@example.com';
$userData->username = 'username123';
$userData->avatar = 'https://example.com/avatar.png';

// Create secure SSO with your API key
$sso = FastCommentsSSO::createSecure('your-api-key', $userData);

// Get the token to pass to the FastComments widget
$token = $sso->prepareToSend();
```

## Documentation

For detailed documentation of the FastComments API, please refer to:
- [FastComments API Documentation](https://docs.fastcomments.com/guide-api.html)
- [FastComments SSO Documentation](https://docs.fastcomments.com/guide-sso.html)

## Development

### Client

The client package contains generated code from the OpenAPI specification.
**DO NOT MANUALLY MODIFY ANY FILES IN THE CLIENT DIRECTORY.**

To update the API client, use the update script:

```bash
./update.sh
```

### SSO

The SSO package is manually maintained. When making changes, be sure to:

1. Follow PSR coding standards
2. Add appropriate tests
3. Update documentation

## License

This project is licensed under the MIT License - see the LICENSE file for details.