# FastComments\Client\HiddenApi

FastComments PHP API Client - A SDK for interacting with the FastComments API

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**uploadImageOptions()**](HiddenApi.md#uploadImageOptions) | **OPTIONS** /upload-image/{tenantId} |  |


## `uploadImageOptions()`

```php
uploadImageOptions($tenant_id): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\HiddenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string

try {
    $result = $apiInstance->uploadImageOptions($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HiddenApi->uploadImageOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
