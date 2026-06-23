# FastComments\Client\DefaultApi



All URIs are relative to https://fastcomments.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDomainConfig()**](DefaultApi.md#addDomainConfig) | **POST** /api/v1/domain-configs |  |
| [**addHashTag()**](DefaultApi.md#addHashTag) | **POST** /api/v1/hash-tags |  |
| [**addHashTagsBulk()**](DefaultApi.md#addHashTagsBulk) | **POST** /api/v1/hash-tags/bulk |  |
| [**addPage()**](DefaultApi.md#addPage) | **POST** /api/v1/pages |  |
| [**addSSOUser()**](DefaultApi.md#addSSOUser) | **POST** /api/v1/sso-users |  |
| [**aggregate()**](DefaultApi.md#aggregate) | **POST** /api/v1/aggregate |  |
| [**aggregateQuestionResults()**](DefaultApi.md#aggregateQuestionResults) | **GET** /api/v1/question-results-aggregation |  |
| [**blockUserFromComment()**](DefaultApi.md#blockUserFromComment) | **POST** /api/v1/comments/{id}/block |  |
| [**bulkAggregateQuestionResults()**](DefaultApi.md#bulkAggregateQuestionResults) | **POST** /api/v1/question-results-aggregation/bulk |  |
| [**changeTicketState()**](DefaultApi.md#changeTicketState) | **PATCH** /api/v1/tickets/{id}/state |  |
| [**combineCommentsWithQuestionResults()**](DefaultApi.md#combineCommentsWithQuestionResults) | **GET** /api/v1/question-results-aggregation/combine/comments |  |
| [**createEmailTemplate()**](DefaultApi.md#createEmailTemplate) | **POST** /api/v1/email-templates |  |
| [**createFeedPost()**](DefaultApi.md#createFeedPost) | **POST** /api/v1/feed-posts |  |
| [**createModerator()**](DefaultApi.md#createModerator) | **POST** /api/v1/moderators |  |
| [**createQuestionConfig()**](DefaultApi.md#createQuestionConfig) | **POST** /api/v1/question-configs |  |
| [**createQuestionResult()**](DefaultApi.md#createQuestionResult) | **POST** /api/v1/question-results |  |
| [**createSubscription()**](DefaultApi.md#createSubscription) | **POST** /api/v1/subscriptions |  |
| [**createTenant()**](DefaultApi.md#createTenant) | **POST** /api/v1/tenants |  |
| [**createTenantPackage()**](DefaultApi.md#createTenantPackage) | **POST** /api/v1/tenant-packages |  |
| [**createTenantUser()**](DefaultApi.md#createTenantUser) | **POST** /api/v1/tenant-users |  |
| [**createTicket()**](DefaultApi.md#createTicket) | **POST** /api/v1/tickets |  |
| [**createUserBadge()**](DefaultApi.md#createUserBadge) | **POST** /api/v1/user-badges |  |
| [**createVote()**](DefaultApi.md#createVote) | **POST** /api/v1/votes |  |
| [**deleteComment()**](DefaultApi.md#deleteComment) | **DELETE** /api/v1/comments/{id} |  |
| [**deleteDomainConfig()**](DefaultApi.md#deleteDomainConfig) | **DELETE** /api/v1/domain-configs/{domain} |  |
| [**deleteEmailTemplate()**](DefaultApi.md#deleteEmailTemplate) | **DELETE** /api/v1/email-templates/{id} |  |
| [**deleteEmailTemplateRenderError()**](DefaultApi.md#deleteEmailTemplateRenderError) | **DELETE** /api/v1/email-templates/{id}/render-errors/{errorId} |  |
| [**deleteHashTag()**](DefaultApi.md#deleteHashTag) | **DELETE** /api/v1/hash-tags/{tag} |  |
| [**deleteModerator()**](DefaultApi.md#deleteModerator) | **DELETE** /api/v1/moderators/{id} |  |
| [**deleteNotificationCount()**](DefaultApi.md#deleteNotificationCount) | **DELETE** /api/v1/notification-count/{id} |  |
| [**deletePage()**](DefaultApi.md#deletePage) | **DELETE** /api/v1/pages/{id} |  |
| [**deletePendingWebhookEvent()**](DefaultApi.md#deletePendingWebhookEvent) | **DELETE** /api/v1/pending-webhook-events/{id} |  |
| [**deleteQuestionConfig()**](DefaultApi.md#deleteQuestionConfig) | **DELETE** /api/v1/question-configs/{id} |  |
| [**deleteQuestionResult()**](DefaultApi.md#deleteQuestionResult) | **DELETE** /api/v1/question-results/{id} |  |
| [**deleteSSOUser()**](DefaultApi.md#deleteSSOUser) | **DELETE** /api/v1/sso-users/{id} |  |
| [**deleteSubscription()**](DefaultApi.md#deleteSubscription) | **DELETE** /api/v1/subscriptions/{id} |  |
| [**deleteTenant()**](DefaultApi.md#deleteTenant) | **DELETE** /api/v1/tenants/{id} |  |
| [**deleteTenantPackage()**](DefaultApi.md#deleteTenantPackage) | **DELETE** /api/v1/tenant-packages/{id} |  |
| [**deleteTenantUser()**](DefaultApi.md#deleteTenantUser) | **DELETE** /api/v1/tenant-users/{id} |  |
| [**deleteUserBadge()**](DefaultApi.md#deleteUserBadge) | **DELETE** /api/v1/user-badges/{id} |  |
| [**deleteVote()**](DefaultApi.md#deleteVote) | **DELETE** /api/v1/votes/{id} |  |
| [**flagComment()**](DefaultApi.md#flagComment) | **POST** /api/v1/comments/{id}/flag |  |
| [**getAuditLogs()**](DefaultApi.md#getAuditLogs) | **GET** /api/v1/audit-logs |  |
| [**getCachedNotificationCount()**](DefaultApi.md#getCachedNotificationCount) | **GET** /api/v1/notification-count/{id} |  |
| [**getComment()**](DefaultApi.md#getComment) | **GET** /api/v1/comments/{id} |  |
| [**getComments()**](DefaultApi.md#getComments) | **GET** /api/v1/comments |  |
| [**getDomainConfig()**](DefaultApi.md#getDomainConfig) | **GET** /api/v1/domain-configs/{domain} |  |
| [**getDomainConfigs()**](DefaultApi.md#getDomainConfigs) | **GET** /api/v1/domain-configs |  |
| [**getEmailTemplate()**](DefaultApi.md#getEmailTemplate) | **GET** /api/v1/email-templates/{id} |  |
| [**getEmailTemplateDefinitions()**](DefaultApi.md#getEmailTemplateDefinitions) | **GET** /api/v1/email-templates/definitions |  |
| [**getEmailTemplateRenderErrors()**](DefaultApi.md#getEmailTemplateRenderErrors) | **GET** /api/v1/email-templates/{id}/render-errors |  |
| [**getEmailTemplates()**](DefaultApi.md#getEmailTemplates) | **GET** /api/v1/email-templates |  |
| [**getFeedPosts()**](DefaultApi.md#getFeedPosts) | **GET** /api/v1/feed-posts |  |
| [**getHashTags()**](DefaultApi.md#getHashTags) | **GET** /api/v1/hash-tags |  |
| [**getModerator()**](DefaultApi.md#getModerator) | **GET** /api/v1/moderators/{id} |  |
| [**getModerators()**](DefaultApi.md#getModerators) | **GET** /api/v1/moderators |  |
| [**getNotificationCount()**](DefaultApi.md#getNotificationCount) | **GET** /api/v1/notifications/count |  |
| [**getNotifications()**](DefaultApi.md#getNotifications) | **GET** /api/v1/notifications |  |
| [**getPageByURLId()**](DefaultApi.md#getPageByURLId) | **GET** /api/v1/pages/by-url-id |  |
| [**getPages()**](DefaultApi.md#getPages) | **GET** /api/v1/pages |  |
| [**getPendingWebhookEventCount()**](DefaultApi.md#getPendingWebhookEventCount) | **GET** /api/v1/pending-webhook-events/count |  |
| [**getPendingWebhookEvents()**](DefaultApi.md#getPendingWebhookEvents) | **GET** /api/v1/pending-webhook-events |  |
| [**getQuestionConfig()**](DefaultApi.md#getQuestionConfig) | **GET** /api/v1/question-configs/{id} |  |
| [**getQuestionConfigs()**](DefaultApi.md#getQuestionConfigs) | **GET** /api/v1/question-configs |  |
| [**getQuestionResult()**](DefaultApi.md#getQuestionResult) | **GET** /api/v1/question-results/{id} |  |
| [**getQuestionResults()**](DefaultApi.md#getQuestionResults) | **GET** /api/v1/question-results |  |
| [**getSSOUserByEmail()**](DefaultApi.md#getSSOUserByEmail) | **GET** /api/v1/sso-users/by-email/{email} |  |
| [**getSSOUserById()**](DefaultApi.md#getSSOUserById) | **GET** /api/v1/sso-users/by-id/{id} |  |
| [**getSSOUsers()**](DefaultApi.md#getSSOUsers) | **GET** /api/v1/sso-users |  |
| [**getSubscriptions()**](DefaultApi.md#getSubscriptions) | **GET** /api/v1/subscriptions |  |
| [**getTenant()**](DefaultApi.md#getTenant) | **GET** /api/v1/tenants/{id} |  |
| [**getTenantDailyUsages()**](DefaultApi.md#getTenantDailyUsages) | **GET** /api/v1/tenant-daily-usage |  |
| [**getTenantPackage()**](DefaultApi.md#getTenantPackage) | **GET** /api/v1/tenant-packages/{id} |  |
| [**getTenantPackages()**](DefaultApi.md#getTenantPackages) | **GET** /api/v1/tenant-packages |  |
| [**getTenantUser()**](DefaultApi.md#getTenantUser) | **GET** /api/v1/tenant-users/{id} |  |
| [**getTenantUsers()**](DefaultApi.md#getTenantUsers) | **GET** /api/v1/tenant-users |  |
| [**getTenants()**](DefaultApi.md#getTenants) | **GET** /api/v1/tenants |  |
| [**getTicket()**](DefaultApi.md#getTicket) | **GET** /api/v1/tickets/{id} |  |
| [**getTickets()**](DefaultApi.md#getTickets) | **GET** /api/v1/tickets |  |
| [**getUser()**](DefaultApi.md#getUser) | **GET** /api/v1/users/{id} |  |
| [**getUserBadge()**](DefaultApi.md#getUserBadge) | **GET** /api/v1/user-badges/{id} |  |
| [**getUserBadgeProgressById()**](DefaultApi.md#getUserBadgeProgressById) | **GET** /api/v1/user-badge-progress/{id} |  |
| [**getUserBadgeProgressByUserId()**](DefaultApi.md#getUserBadgeProgressByUserId) | **GET** /api/v1/user-badge-progress/user/{userId} |  |
| [**getUserBadgeProgressList()**](DefaultApi.md#getUserBadgeProgressList) | **GET** /api/v1/user-badge-progress |  |
| [**getUserBadges()**](DefaultApi.md#getUserBadges) | **GET** /api/v1/user-badges |  |
| [**getVotes()**](DefaultApi.md#getVotes) | **GET** /api/v1/votes |  |
| [**getVotesForUser()**](DefaultApi.md#getVotesForUser) | **GET** /api/v1/votes/for-user |  |
| [**patchDomainConfig()**](DefaultApi.md#patchDomainConfig) | **PATCH** /api/v1/domain-configs/{domainToUpdate} |  |
| [**patchHashTag()**](DefaultApi.md#patchHashTag) | **PATCH** /api/v1/hash-tags/{tag} |  |
| [**patchPage()**](DefaultApi.md#patchPage) | **PATCH** /api/v1/pages/{id} |  |
| [**patchSSOUser()**](DefaultApi.md#patchSSOUser) | **PATCH** /api/v1/sso-users/{id} |  |
| [**putDomainConfig()**](DefaultApi.md#putDomainConfig) | **PUT** /api/v1/domain-configs/{domainToUpdate} |  |
| [**putSSOUser()**](DefaultApi.md#putSSOUser) | **PUT** /api/v1/sso-users/{id} |  |
| [**renderEmailTemplate()**](DefaultApi.md#renderEmailTemplate) | **POST** /api/v1/email-templates/render |  |
| [**replaceTenantPackage()**](DefaultApi.md#replaceTenantPackage) | **PUT** /api/v1/tenant-packages/{id} |  |
| [**replaceTenantUser()**](DefaultApi.md#replaceTenantUser) | **PUT** /api/v1/tenant-users/{id} |  |
| [**saveComment()**](DefaultApi.md#saveComment) | **POST** /api/v1/comments |  |
| [**saveCommentsBulk()**](DefaultApi.md#saveCommentsBulk) | **POST** /api/v1/comments/bulk |  |
| [**sendInvite()**](DefaultApi.md#sendInvite) | **POST** /api/v1/moderators/{id}/send-invite |  |
| [**sendLoginLink()**](DefaultApi.md#sendLoginLink) | **POST** /api/v1/tenant-users/{id}/send-login-link |  |
| [**unBlockUserFromComment()**](DefaultApi.md#unBlockUserFromComment) | **POST** /api/v1/comments/{id}/un-block |  |
| [**unFlagComment()**](DefaultApi.md#unFlagComment) | **POST** /api/v1/comments/{id}/un-flag |  |
| [**updateComment()**](DefaultApi.md#updateComment) | **PATCH** /api/v1/comments/{id} |  |
| [**updateEmailTemplate()**](DefaultApi.md#updateEmailTemplate) | **PATCH** /api/v1/email-templates/{id} |  |
| [**updateFeedPost()**](DefaultApi.md#updateFeedPost) | **PATCH** /api/v1/feed-posts/{id} |  |
| [**updateModerator()**](DefaultApi.md#updateModerator) | **PATCH** /api/v1/moderators/{id} |  |
| [**updateNotification()**](DefaultApi.md#updateNotification) | **PATCH** /api/v1/notifications/{id} |  |
| [**updateQuestionConfig()**](DefaultApi.md#updateQuestionConfig) | **PATCH** /api/v1/question-configs/{id} |  |
| [**updateQuestionResult()**](DefaultApi.md#updateQuestionResult) | **PATCH** /api/v1/question-results/{id} |  |
| [**updateSubscription()**](DefaultApi.md#updateSubscription) | **PATCH** /api/v1/subscriptions/{id} |  |
| [**updateTenant()**](DefaultApi.md#updateTenant) | **PATCH** /api/v1/tenants/{id} |  |
| [**updateTenantPackage()**](DefaultApi.md#updateTenantPackage) | **PATCH** /api/v1/tenant-packages/{id} |  |
| [**updateTenantUser()**](DefaultApi.md#updateTenantUser) | **PATCH** /api/v1/tenant-users/{id} |  |
| [**updateUserBadge()**](DefaultApi.md#updateUserBadge) | **PUT** /api/v1/user-badges/{id} |  |


## `addDomainConfig()`

```php
addDomainConfig($tenant_id, $add_domain_config_params): \FastComments\Client\Model\AddDomainConfigResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$add_domain_config_params = new \FastComments\Client\Model\AddDomainConfigParams(); // \FastComments\Client\Model\AddDomainConfigParams


try {
    $result = $apiInstance->addDomainConfig($tenant_id, $add_domain_config_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addDomainConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **add_domain_config_params** | [**\FastComments\Client\Model\AddDomainConfigParams**](../Model/AddDomainConfigParams.md)|  | |

### Return type

[**\FastComments\Client\Model\AddDomainConfigResponse**](../Model/AddDomainConfigResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addHashTag()`

```php
addHashTag($create_hash_tag_body, $tenant_id): \FastComments\Client\Model\CreateHashTagResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$create_hash_tag_body = new \FastComments\Client\Model\CreateHashTagBody(); // \FastComments\Client\Model\CreateHashTagBody
$tenant_id = 'tenant_id_example'; // string


try {
    $result = $apiInstance->addHashTag($create_hash_tag_body, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addHashTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **create_hash_tag_body** | [**\FastComments\Client\Model\CreateHashTagBody**](../Model/CreateHashTagBody.md)|  | [optional] |

### Return type

[**\FastComments\Client\Model\CreateHashTagResponse**](../Model/CreateHashTagResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addHashTagsBulk()`

```php
addHashTagsBulk($bulk_create_hash_tags_body, $tenant_id): \FastComments\Client\Model\BulkCreateHashTagsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$bulk_create_hash_tags_body = new \FastComments\Client\Model\BulkCreateHashTagsBody(); // \FastComments\Client\Model\BulkCreateHashTagsBody
$tenant_id = 'tenant_id_example'; // string


try {
    $result = $apiInstance->addHashTagsBulk($bulk_create_hash_tags_body, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addHashTagsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | [optional] |
| **bulk_create_hash_tags_body** | [**\FastComments\Client\Model\BulkCreateHashTagsBody**](../Model/BulkCreateHashTagsBody.md)|  | [optional] |

### Return type

[**\FastComments\Client\Model\BulkCreateHashTagsResponse**](../Model/BulkCreateHashTagsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addPage()`

```php
addPage($tenant_id, $create_api_page_data): \FastComments\Client\Model\AddPageAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_api_page_data = new \FastComments\Client\Model\CreateAPIPageData(); // \FastComments\Client\Model\CreateAPIPageData


try {
    $result = $apiInstance->addPage($tenant_id, $create_api_page_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_api_page_data** | [**\FastComments\Client\Model\CreateAPIPageData**](../Model/CreateAPIPageData.md)|  | |

### Return type

[**\FastComments\Client\Model\AddPageAPIResponse**](../Model/AddPageAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addSSOUser()`

```php
addSSOUser($tenant_id, $create_apisso_user_data): \FastComments\Client\Model\AddSSOUserAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_apisso_user_data = new \FastComments\Client\Model\CreateAPISSOUserData(); // \FastComments\Client\Model\CreateAPISSOUserData


try {
    $result = $apiInstance->addSSOUser($tenant_id, $create_apisso_user_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addSSOUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_apisso_user_data** | [**\FastComments\Client\Model\CreateAPISSOUserData**](../Model/CreateAPISSOUserData.md)|  | |

### Return type

[**\FastComments\Client\Model\AddSSOUserAPIResponse**](../Model/AddSSOUserAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aggregate()`

```php
aggregate($tenant_id, $aggregation_request, $options): \FastComments\Client\Model\AggregateResponse
```



Aggregates documents by grouping them (if groupBy is provided) and applying multiple operations. Different operations (e.g. sum, countDistinct, avg, etc.) are supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$aggregation_request = new \FastComments\Client\Model\AggregationRequest(); // \FastComments\Client\Model\AggregationRequest
$options = [
    'parent_tenant_id' => 'parent_tenant_id_example', // string
    'include_stats' => True, // bool
];


try {
    $result = $apiInstance->aggregate($tenant_id, $aggregation_request, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aggregate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **aggregation_request** | [**\FastComments\Client\Model\AggregationRequest**](../Model/AggregationRequest.md)|  | |
| **parent_tenant_id** | **string**|  | [optional] |
| **include_stats** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\AggregateResponse**](../Model/AggregateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aggregateQuestionResults()`

```php
aggregateQuestionResults($tenant_id, $options): \FastComments\Client\Model\AggregateQuestionResultsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'question_id' => 'question_id_example', // string
    'question_ids' => array('question_ids_example'), // string[]
    'url_id' => 'url_id_example', // string
    'time_bucket' => new \FastComments\Client\Model\\FastComments\Client\Model\AggregateTimeBucket(), // \FastComments\Client\Model\AggregateTimeBucket
    'start_date' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime
    'force_recalculate' => True, // bool
];


try {
    $result = $apiInstance->aggregateQuestionResults($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->aggregateQuestionResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **question_id** | **string**|  | [optional] |
| **question_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **url_id** | **string**|  | [optional] |
| **time_bucket** | [**\FastComments\Client\Model\AggregateTimeBucket**](../Model/.md)|  | [optional] |
| **start_date** | **\DateTime**|  | [optional] |
| **force_recalculate** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\AggregateQuestionResultsResponse**](../Model/AggregateQuestionResultsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blockUserFromComment()`

```php
blockUserFromComment($tenant_id, $id, $block_from_comment_params, $options): \FastComments\Client\Model\BlockSuccess
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$block_from_comment_params = new \FastComments\Client\Model\BlockFromCommentParams(); // \FastComments\Client\Model\BlockFromCommentParams
$options = [
    'user_id' => 'user_id_example', // string
    'anon_user_id' => 'anon_user_id_example', // string
];


try {
    $result = $apiInstance->blockUserFromComment($tenant_id, $id, $block_from_comment_params, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->blockUserFromComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **block_from_comment_params** | [**\FastComments\Client\Model\BlockFromCommentParams**](../Model/BlockFromCommentParams.md)|  | |
| **user_id** | **string**|  | [optional] |
| **anon_user_id** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\BlockSuccess**](../Model/BlockSuccess.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkAggregateQuestionResults()`

```php
bulkAggregateQuestionResults($tenant_id, $bulk_aggregate_question_results_request, $force_recalculate): \FastComments\Client\Model\BulkAggregateQuestionResultsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$bulk_aggregate_question_results_request = new \FastComments\Client\Model\BulkAggregateQuestionResultsRequest(); // \FastComments\Client\Model\BulkAggregateQuestionResultsRequest
$force_recalculate = True; // bool


try {
    $result = $apiInstance->bulkAggregateQuestionResults($tenant_id, $bulk_aggregate_question_results_request, $force_recalculate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bulkAggregateQuestionResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **bulk_aggregate_question_results_request** | [**\FastComments\Client\Model\BulkAggregateQuestionResultsRequest**](../Model/BulkAggregateQuestionResultsRequest.md)|  | |
| **force_recalculate** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\BulkAggregateQuestionResultsResponse**](../Model/BulkAggregateQuestionResultsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeTicketState()`

```php
changeTicketState($tenant_id, $user_id, $id, $change_ticket_state_body): \FastComments\Client\Model\ChangeTicketStateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$user_id = 'user_id_example'; // string
$id = 'id_example'; // string
$change_ticket_state_body = new \FastComments\Client\Model\ChangeTicketStateBody(); // \FastComments\Client\Model\ChangeTicketStateBody


try {
    $result = $apiInstance->changeTicketState($tenant_id, $user_id, $id, $change_ticket_state_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->changeTicketState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **user_id** | **string**|  | |
| **id** | **string**|  | |
| **change_ticket_state_body** | [**\FastComments\Client\Model\ChangeTicketStateBody**](../Model/ChangeTicketStateBody.md)|  | |

### Return type

[**\FastComments\Client\Model\ChangeTicketStateResponse**](../Model/ChangeTicketStateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `combineCommentsWithQuestionResults()`

```php
combineCommentsWithQuestionResults($tenant_id, $options): \FastComments\Client\Model\CombineQuestionResultsWithCommentsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'question_id' => 'question_id_example', // string
    'question_ids' => array('question_ids_example'), // string[]
    'url_id' => 'url_id_example', // string
    'start_date' => new \DateTime('2013-10-20T19:20:30+01:00'), // \DateTime
    'force_recalculate' => True, // bool
    'min_value' => 3.4, // float
    'max_value' => 3.4, // float
    'limit' => 3.4, // float
];


try {
    $result = $apiInstance->combineCommentsWithQuestionResults($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->combineCommentsWithQuestionResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **question_id** | **string**|  | [optional] |
| **question_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **url_id** | **string**|  | [optional] |
| **start_date** | **\DateTime**|  | [optional] |
| **force_recalculate** | **bool**|  | [optional] |
| **min_value** | **float**|  | [optional] |
| **max_value** | **float**|  | [optional] |
| **limit** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\CombineQuestionResultsWithCommentsResponse**](../Model/CombineQuestionResultsWithCommentsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailTemplate()`

```php
createEmailTemplate($tenant_id, $create_email_template_body): \FastComments\Client\Model\CreateEmailTemplateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_email_template_body = new \FastComments\Client\Model\CreateEmailTemplateBody(); // \FastComments\Client\Model\CreateEmailTemplateBody


try {
    $result = $apiInstance->createEmailTemplate($tenant_id, $create_email_template_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_email_template_body** | [**\FastComments\Client\Model\CreateEmailTemplateBody**](../Model/CreateEmailTemplateBody.md)|  | |

### Return type

[**\FastComments\Client\Model\CreateEmailTemplateResponse**](../Model/CreateEmailTemplateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFeedPost()`

```php
createFeedPost($tenant_id, $create_feed_post_params, $options): \FastComments\Client\Model\CreateFeedPostsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_feed_post_params = new \FastComments\Client\Model\CreateFeedPostParams(); // \FastComments\Client\Model\CreateFeedPostParams
$options = [
    'broadcast_id' => 'broadcast_id_example', // string
    'is_live' => True, // bool
    'do_spam_check' => True, // bool
    'skip_dup_check' => True, // bool
];


try {
    $result = $apiInstance->createFeedPost($tenant_id, $create_feed_post_params, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createFeedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_feed_post_params** | [**\FastComments\Client\Model\CreateFeedPostParams**](../Model/CreateFeedPostParams.md)|  | |
| **broadcast_id** | **string**|  | [optional] |
| **is_live** | **bool**|  | [optional] |
| **do_spam_check** | **bool**|  | [optional] |
| **skip_dup_check** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\CreateFeedPostsResponse**](../Model/CreateFeedPostsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createModerator()`

```php
createModerator($tenant_id, $create_moderator_body): \FastComments\Client\Model\CreateModeratorResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_moderator_body = new \FastComments\Client\Model\CreateModeratorBody(); // \FastComments\Client\Model\CreateModeratorBody


try {
    $result = $apiInstance->createModerator($tenant_id, $create_moderator_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createModerator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_moderator_body** | [**\FastComments\Client\Model\CreateModeratorBody**](../Model/CreateModeratorBody.md)|  | |

### Return type

[**\FastComments\Client\Model\CreateModeratorResponse**](../Model/CreateModeratorResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createQuestionConfig()`

```php
createQuestionConfig($tenant_id, $create_question_config_body): \FastComments\Client\Model\CreateQuestionConfigResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_question_config_body = new \FastComments\Client\Model\CreateQuestionConfigBody(); // \FastComments\Client\Model\CreateQuestionConfigBody


try {
    $result = $apiInstance->createQuestionConfig($tenant_id, $create_question_config_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createQuestionConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_question_config_body** | [**\FastComments\Client\Model\CreateQuestionConfigBody**](../Model/CreateQuestionConfigBody.md)|  | |

### Return type

[**\FastComments\Client\Model\CreateQuestionConfigResponse**](../Model/CreateQuestionConfigResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createQuestionResult()`

```php
createQuestionResult($tenant_id, $create_question_result_body): \FastComments\Client\Model\CreateQuestionResultResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_question_result_body = new \FastComments\Client\Model\CreateQuestionResultBody(); // \FastComments\Client\Model\CreateQuestionResultBody


try {
    $result = $apiInstance->createQuestionResult($tenant_id, $create_question_result_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createQuestionResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_question_result_body** | [**\FastComments\Client\Model\CreateQuestionResultBody**](../Model/CreateQuestionResultBody.md)|  | |

### Return type

[**\FastComments\Client\Model\CreateQuestionResultResponse**](../Model/CreateQuestionResultResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubscription()`

```php
createSubscription($tenant_id, $create_api_user_subscription_data): \FastComments\Client\Model\CreateSubscriptionAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_api_user_subscription_data = new \FastComments\Client\Model\CreateAPIUserSubscriptionData(); // \FastComments\Client\Model\CreateAPIUserSubscriptionData


try {
    $result = $apiInstance->createSubscription($tenant_id, $create_api_user_subscription_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_api_user_subscription_data** | [**\FastComments\Client\Model\CreateAPIUserSubscriptionData**](../Model/CreateAPIUserSubscriptionData.md)|  | |

### Return type

[**\FastComments\Client\Model\CreateSubscriptionAPIResponse**](../Model/CreateSubscriptionAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTenant()`

```php
createTenant($tenant_id, $create_tenant_body): \FastComments\Client\Model\CreateTenantResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_tenant_body = new \FastComments\Client\Model\CreateTenantBody(); // \FastComments\Client\Model\CreateTenantBody


try {
    $result = $apiInstance->createTenant($tenant_id, $create_tenant_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_tenant_body** | [**\FastComments\Client\Model\CreateTenantBody**](../Model/CreateTenantBody.md)|  | |

### Return type

[**\FastComments\Client\Model\CreateTenantResponse**](../Model/CreateTenantResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTenantPackage()`

```php
createTenantPackage($tenant_id, $create_tenant_package_body): \FastComments\Client\Model\CreateTenantPackageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_tenant_package_body = new \FastComments\Client\Model\CreateTenantPackageBody(); // \FastComments\Client\Model\CreateTenantPackageBody


try {
    $result = $apiInstance->createTenantPackage($tenant_id, $create_tenant_package_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createTenantPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_tenant_package_body** | [**\FastComments\Client\Model\CreateTenantPackageBody**](../Model/CreateTenantPackageBody.md)|  | |

### Return type

[**\FastComments\Client\Model\CreateTenantPackageResponse**](../Model/CreateTenantPackageResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTenantUser()`

```php
createTenantUser($tenant_id, $create_tenant_user_body): \FastComments\Client\Model\CreateTenantUserResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_tenant_user_body = new \FastComments\Client\Model\CreateTenantUserBody(); // \FastComments\Client\Model\CreateTenantUserBody


try {
    $result = $apiInstance->createTenantUser($tenant_id, $create_tenant_user_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createTenantUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_tenant_user_body** | [**\FastComments\Client\Model\CreateTenantUserBody**](../Model/CreateTenantUserBody.md)|  | |

### Return type

[**\FastComments\Client\Model\CreateTenantUserResponse**](../Model/CreateTenantUserResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTicket()`

```php
createTicket($tenant_id, $user_id, $create_ticket_body): \FastComments\Client\Model\CreateTicketResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$user_id = 'user_id_example'; // string
$create_ticket_body = new \FastComments\Client\Model\CreateTicketBody(); // \FastComments\Client\Model\CreateTicketBody


try {
    $result = $apiInstance->createTicket($tenant_id, $user_id, $create_ticket_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **user_id** | **string**|  | |
| **create_ticket_body** | [**\FastComments\Client\Model\CreateTicketBody**](../Model/CreateTicketBody.md)|  | |

### Return type

[**\FastComments\Client\Model\CreateTicketResponse**](../Model/CreateTicketResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUserBadge()`

```php
createUserBadge($tenant_id, $create_user_badge_params): \FastComments\Client\Model\APICreateUserBadgeResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_user_badge_params = new \FastComments\Client\Model\CreateUserBadgeParams(); // \FastComments\Client\Model\CreateUserBadgeParams


try {
    $result = $apiInstance->createUserBadge($tenant_id, $create_user_badge_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createUserBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_user_badge_params** | [**\FastComments\Client\Model\CreateUserBadgeParams**](../Model/CreateUserBadgeParams.md)|  | |

### Return type

[**\FastComments\Client\Model\APICreateUserBadgeResponse**](../Model/APICreateUserBadgeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVote()`

```php
createVote($tenant_id, $comment_id, $direction, $options): \FastComments\Client\Model\VoteResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$direction = 'direction_example'; // string
$options = [
    'user_id' => 'user_id_example', // string
    'anon_user_id' => 'anon_user_id_example', // string
];


try {
    $result = $apiInstance->createVote($tenant_id, $comment_id, $direction, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createVote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **direction** | **string**|  | |
| **user_id** | **string**|  | [optional] |
| **anon_user_id** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\VoteResponse**](../Model/VoteResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteComment()`

```php
deleteComment($tenant_id, $id, $options): \FastComments\Client\Model\DeleteCommentResult
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$options = [
    'context_user_id' => 'context_user_id_example', // string
    'is_live' => True, // bool
];


try {
    $result = $apiInstance->deleteComment($tenant_id, $id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **context_user_id** | **string**|  | [optional] |
| **is_live** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\DeleteCommentResult**](../Model/DeleteCommentResult.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDomainConfig()`

```php
deleteDomainConfig($tenant_id, $domain): \FastComments\Client\Model\DeleteDomainConfigResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$domain = 'domain_example'; // string


try {
    $result = $apiInstance->deleteDomainConfig($tenant_id, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteDomainConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **domain** | **string**|  | |

### Return type

[**\FastComments\Client\Model\DeleteDomainConfigResponse**](../Model/DeleteDomainConfigResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailTemplate()`

```php
deleteEmailTemplate($tenant_id, $id): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->deleteEmailTemplate($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailTemplateRenderError()`

```php
deleteEmailTemplateRenderError($tenant_id, $id, $error_id): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$error_id = 'error_id_example'; // string


try {
    $result = $apiInstance->deleteEmailTemplateRenderError($tenant_id, $id, $error_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteEmailTemplateRenderError: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **error_id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteHashTag()`

```php
deleteHashTag($tag, $delete_hash_tag_request_body, $tenant_id): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tag = 'tag_example'; // string
$delete_hash_tag_request_body = new \FastComments\Client\Model\DeleteHashTagRequestBody(); // \FastComments\Client\Model\DeleteHashTagRequestBody
$tenant_id = 'tenant_id_example'; // string


try {
    $result = $apiInstance->deleteHashTag($tag, $delete_hash_tag_request_body, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteHashTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **delete_hash_tag_request_body** | [**\FastComments\Client\Model\DeleteHashTagRequestBody**](../Model/DeleteHashTagRequestBody.md)|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteModerator()`

```php
deleteModerator($tenant_id, $id, $send_email): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$send_email = 'send_email_example'; // string


try {
    $result = $apiInstance->deleteModerator($tenant_id, $id, $send_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteModerator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **send_email** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNotificationCount()`

```php
deleteNotificationCount($tenant_id, $id): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->deleteNotificationCount($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteNotificationCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePage()`

```php
deletePage($tenant_id, $id): \FastComments\Client\Model\DeletePageAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->deletePage($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deletePage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\DeletePageAPIResponse**](../Model/DeletePageAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePendingWebhookEvent()`

```php
deletePendingWebhookEvent($tenant_id, $id): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->deletePendingWebhookEvent($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deletePendingWebhookEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteQuestionConfig()`

```php
deleteQuestionConfig($tenant_id, $id): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->deleteQuestionConfig($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteQuestionConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteQuestionResult()`

```php
deleteQuestionResult($tenant_id, $id): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->deleteQuestionResult($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteQuestionResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSSOUser()`

```php
deleteSSOUser($tenant_id, $id, $options): \FastComments\Client\Model\DeleteSSOUserAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$options = [
    'delete_comments' => True, // bool
    'comment_delete_mode' => 'comment_delete_mode_example', // string
];


try {
    $result = $apiInstance->deleteSSOUser($tenant_id, $id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteSSOUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **delete_comments** | **bool**|  | [optional] |
| **comment_delete_mode** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\DeleteSSOUserAPIResponse**](../Model/DeleteSSOUserAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubscription()`

```php
deleteSubscription($tenant_id, $id, $user_id): \FastComments\Client\Model\DeleteSubscriptionAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$user_id = 'user_id_example'; // string


try {
    $result = $apiInstance->deleteSubscription($tenant_id, $id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **user_id** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\DeleteSubscriptionAPIResponse**](../Model/DeleteSubscriptionAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTenant()`

```php
deleteTenant($tenant_id, $id, $sure): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$sure = 'sure_example'; // string


try {
    $result = $apiInstance->deleteTenant($tenant_id, $id, $sure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **sure** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTenantPackage()`

```php
deleteTenantPackage($tenant_id, $id): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->deleteTenantPackage($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteTenantPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTenantUser()`

```php
deleteTenantUser($tenant_id, $id, $options): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$options = [
    'delete_comments' => 'delete_comments_example', // string
    'comment_delete_mode' => 'comment_delete_mode_example', // string
];


try {
    $result = $apiInstance->deleteTenantUser($tenant_id, $id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteTenantUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **delete_comments** | **string**|  | [optional] |
| **comment_delete_mode** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserBadge()`

```php
deleteUserBadge($tenant_id, $id): \FastComments\Client\Model\APIEmptySuccessResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->deleteUserBadge($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteUserBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIEmptySuccessResponse**](../Model/APIEmptySuccessResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVote()`

```php
deleteVote($tenant_id, $id, $edit_key): \FastComments\Client\Model\VoteDeleteResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$edit_key = 'edit_key_example'; // string


try {
    $result = $apiInstance->deleteVote($tenant_id, $id, $edit_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteVote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **edit_key** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\VoteDeleteResponse**](../Model/VoteDeleteResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flagComment()`

```php
flagComment($tenant_id, $id, $options): \FastComments\Client\Model\FlagCommentResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$options = [
    'user_id' => 'user_id_example', // string
    'anon_user_id' => 'anon_user_id_example', // string
];


try {
    $result = $apiInstance->flagComment($tenant_id, $id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->flagComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **user_id** | **string**|  | [optional] |
| **anon_user_id** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\FlagCommentResponse**](../Model/FlagCommentResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuditLogs()`

```php
getAuditLogs($tenant_id, $options): \FastComments\Client\Model\GetAuditLogsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'limit' => 3.4, // float
    'skip' => 3.4, // float
    'order' => new \FastComments\Client\Model\\FastComments\Client\Model\SORTDIR(), // \FastComments\Client\Model\SORTDIR
    'after' => 3.4, // float
    'before' => 3.4, // float
];


try {
    $result = $apiInstance->getAuditLogs($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAuditLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **limit** | **float**|  | [optional] |
| **skip** | **float**|  | [optional] |
| **order** | [**\FastComments\Client\Model\SORTDIR**](../Model/.md)|  | [optional] |
| **after** | **float**|  | [optional] |
| **before** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetAuditLogsResponse**](../Model/GetAuditLogsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCachedNotificationCount()`

```php
getCachedNotificationCount($tenant_id, $id): \FastComments\Client\Model\GetCachedNotificationCountResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getCachedNotificationCount($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCachedNotificationCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetCachedNotificationCountResponse**](../Model/GetCachedNotificationCountResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComment()`

```php
getComment($tenant_id, $id): \FastComments\Client\Model\APIGetCommentResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getComment($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIGetCommentResponse**](../Model/APIGetCommentResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComments()`

```php
getComments($tenant_id, $options): \FastComments\Client\Model\APIGetCommentsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'page' => 56, // int
    'limit' => 56, // int
    'skip' => 56, // int
    'as_tree' => True, // bool
    'skip_children' => 56, // int
    'limit_children' => 56, // int
    'max_tree_depth' => 56, // int
    'url_id' => 'url_id_example', // string
    'user_id' => 'user_id_example', // string
    'anon_user_id' => 'anon_user_id_example', // string
    'context_user_id' => 'context_user_id_example', // string
    'hash_tag' => 'hash_tag_example', // string
    'parent_id' => 'parent_id_example', // string
    'direction' => new \FastComments\Client\Model\\FastComments\Client\Model\SortDirections(), // \FastComments\Client\Model\SortDirections
    'from_date' => 56, // int
    'to_date' => 56, // int
];


try {
    $result = $apiInstance->getComments($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **page** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **as_tree** | **bool**|  | [optional] |
| **skip_children** | **int**|  | [optional] |
| **limit_children** | **int**|  | [optional] |
| **max_tree_depth** | **int**|  | [optional] |
| **url_id** | **string**|  | [optional] |
| **user_id** | **string**|  | [optional] |
| **anon_user_id** | **string**|  | [optional] |
| **context_user_id** | **string**|  | [optional] |
| **hash_tag** | **string**|  | [optional] |
| **parent_id** | **string**|  | [optional] |
| **direction** | [**\FastComments\Client\Model\SortDirections**](../Model/.md)|  | [optional] |
| **from_date** | **int**|  | [optional] |
| **to_date** | **int**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIGetCommentsResponse**](../Model/APIGetCommentsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainConfig()`

```php
getDomainConfig($tenant_id, $domain): \FastComments\Client\Model\GetDomainConfigResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$domain = 'domain_example'; // string


try {
    $result = $apiInstance->getDomainConfig($tenant_id, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDomainConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **domain** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetDomainConfigResponse**](../Model/GetDomainConfigResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainConfigs()`

```php
getDomainConfigs($tenant_id): \FastComments\Client\Model\GetDomainConfigsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string


try {
    $result = $apiInstance->getDomainConfigs($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getDomainConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetDomainConfigsResponse**](../Model/GetDomainConfigsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailTemplate()`

```php
getEmailTemplate($tenant_id, $id): \FastComments\Client\Model\GetEmailTemplateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getEmailTemplate($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetEmailTemplateResponse**](../Model/GetEmailTemplateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailTemplateDefinitions()`

```php
getEmailTemplateDefinitions($tenant_id): \FastComments\Client\Model\GetEmailTemplateDefinitionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string


try {
    $result = $apiInstance->getEmailTemplateDefinitions($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEmailTemplateDefinitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetEmailTemplateDefinitionsResponse**](../Model/GetEmailTemplateDefinitionsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailTemplateRenderErrors()`

```php
getEmailTemplateRenderErrors($tenant_id, $id, $skip): \FastComments\Client\Model\GetEmailTemplateRenderErrorsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$skip = 3.4; // float


try {
    $result = $apiInstance->getEmailTemplateRenderErrors($tenant_id, $id, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEmailTemplateRenderErrors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetEmailTemplateRenderErrorsResponse**](../Model/GetEmailTemplateRenderErrorsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailTemplates()`

```php
getEmailTemplates($tenant_id, $skip): \FastComments\Client\Model\GetEmailTemplatesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$skip = 3.4; // float


try {
    $result = $apiInstance->getEmailTemplates($tenant_id, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEmailTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetEmailTemplatesResponse**](../Model/GetEmailTemplatesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedPosts()`

```php
getFeedPosts($tenant_id, $options): \FastComments\Client\Model\GetFeedPostsResponse
```



req tenantId afterId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'after_id' => 'after_id_example', // string
    'limit' => 56, // int
    'tags' => array('tags_example'), // string[]
];


try {
    $result = $apiInstance->getFeedPosts($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getFeedPosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **after_id** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **tags** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetFeedPostsResponse**](../Model/GetFeedPostsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHashTags()`

```php
getHashTags($tenant_id, $page): \FastComments\Client\Model\GetHashTagsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$page = 3.4; // float


try {
    $result = $apiInstance->getHashTags($tenant_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getHashTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **page** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetHashTagsResponse**](../Model/GetHashTagsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getModerator()`

```php
getModerator($tenant_id, $id): \FastComments\Client\Model\GetModeratorResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getModerator($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getModerator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetModeratorResponse**](../Model/GetModeratorResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getModerators()`

```php
getModerators($tenant_id, $skip): \FastComments\Client\Model\GetModeratorsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$skip = 3.4; // float


try {
    $result = $apiInstance->getModerators($tenant_id, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getModerators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetModeratorsResponse**](../Model/GetModeratorsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotificationCount()`

```php
getNotificationCount($tenant_id, $options): \FastComments\Client\Model\GetNotificationCountResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'user_id' => 'user_id_example', // string
    'url_id' => 'url_id_example', // string
    'from_comment_id' => 'from_comment_id_example', // string
    'viewed' => True, // bool
    'type' => 'type_example', // string
];


try {
    $result = $apiInstance->getNotificationCount($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getNotificationCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |
| **url_id** | **string**|  | [optional] |
| **from_comment_id** | **string**|  | [optional] |
| **viewed** | **bool**|  | [optional] |
| **type** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetNotificationCountResponse**](../Model/GetNotificationCountResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotifications()`

```php
getNotifications($tenant_id, $options): \FastComments\Client\Model\GetNotificationsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'user_id' => 'user_id_example', // string
    'url_id' => 'url_id_example', // string
    'from_comment_id' => 'from_comment_id_example', // string
    'viewed' => True, // bool
    'type' => 'type_example', // string
    'skip' => 3.4, // float
];


try {
    $result = $apiInstance->getNotifications($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |
| **url_id** | **string**|  | [optional] |
| **from_comment_id** | **string**|  | [optional] |
| **viewed** | **bool**|  | [optional] |
| **type** | **string**|  | [optional] |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetNotificationsResponse**](../Model/GetNotificationsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPageByURLId()`

```php
getPageByURLId($tenant_id, $url_id): \FastComments\Client\Model\GetPageByURLIdAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$url_id = 'url_id_example'; // string


try {
    $result = $apiInstance->getPageByURLId($tenant_id, $url_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPageByURLId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetPageByURLIdAPIResponse**](../Model/GetPageByURLIdAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPages()`

```php
getPages($tenant_id): \FastComments\Client\Model\GetPagesAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string


try {
    $result = $apiInstance->getPages($tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetPagesAPIResponse**](../Model/GetPagesAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPendingWebhookEventCount()`

```php
getPendingWebhookEventCount($tenant_id, $options): \FastComments\Client\Model\GetPendingWebhookEventCountResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'comment_id' => 'comment_id_example', // string
    'external_id' => 'external_id_example', // string
    'event_type' => 'event_type_example', // string
    'type' => 'type_example', // string
    'domain' => 'domain_example', // string
    'attempt_count_gt' => 3.4, // float
];


try {
    $result = $apiInstance->getPendingWebhookEventCount($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPendingWebhookEventCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | [optional] |
| **external_id** | **string**|  | [optional] |
| **event_type** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |
| **domain** | **string**|  | [optional] |
| **attempt_count_gt** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetPendingWebhookEventCountResponse**](../Model/GetPendingWebhookEventCountResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPendingWebhookEvents()`

```php
getPendingWebhookEvents($tenant_id, $options): \FastComments\Client\Model\GetPendingWebhookEventsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'comment_id' => 'comment_id_example', // string
    'external_id' => 'external_id_example', // string
    'event_type' => 'event_type_example', // string
    'type' => 'type_example', // string
    'domain' => 'domain_example', // string
    'attempt_count_gt' => 3.4, // float
    'skip' => 3.4, // float
];


try {
    $result = $apiInstance->getPendingWebhookEvents($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPendingWebhookEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | [optional] |
| **external_id** | **string**|  | [optional] |
| **event_type** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |
| **domain** | **string**|  | [optional] |
| **attempt_count_gt** | **float**|  | [optional] |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetPendingWebhookEventsResponse**](../Model/GetPendingWebhookEventsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuestionConfig()`

```php
getQuestionConfig($tenant_id, $id): \FastComments\Client\Model\GetQuestionConfigResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getQuestionConfig($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getQuestionConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetQuestionConfigResponse**](../Model/GetQuestionConfigResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuestionConfigs()`

```php
getQuestionConfigs($tenant_id, $skip): \FastComments\Client\Model\GetQuestionConfigsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$skip = 3.4; // float


try {
    $result = $apiInstance->getQuestionConfigs($tenant_id, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getQuestionConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetQuestionConfigsResponse**](../Model/GetQuestionConfigsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuestionResult()`

```php
getQuestionResult($tenant_id, $id): \FastComments\Client\Model\GetQuestionResultResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getQuestionResult($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getQuestionResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetQuestionResultResponse**](../Model/GetQuestionResultResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuestionResults()`

```php
getQuestionResults($tenant_id, $options): \FastComments\Client\Model\GetQuestionResultsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'url_id' => 'url_id_example', // string
    'user_id' => 'user_id_example', // string
    'start_date' => 'start_date_example', // string
    'question_id' => 'question_id_example', // string
    'question_ids' => 'question_ids_example', // string
    'skip' => 3.4, // float
];


try {
    $result = $apiInstance->getQuestionResults($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getQuestionResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | [optional] |
| **user_id** | **string**|  | [optional] |
| **start_date** | **string**|  | [optional] |
| **question_id** | **string**|  | [optional] |
| **question_ids** | **string**|  | [optional] |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetQuestionResultsResponse**](../Model/GetQuestionResultsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSSOUserByEmail()`

```php
getSSOUserByEmail($tenant_id, $email): \FastComments\Client\Model\GetSSOUserByEmailAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$email = 'email_example'; // string


try {
    $result = $apiInstance->getSSOUserByEmail($tenant_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSSOUserByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **email** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetSSOUserByEmailAPIResponse**](../Model/GetSSOUserByEmailAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSSOUserById()`

```php
getSSOUserById($tenant_id, $id): \FastComments\Client\Model\GetSSOUserByIdAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getSSOUserById($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSSOUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetSSOUserByIdAPIResponse**](../Model/GetSSOUserByIdAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSSOUsers()`

```php
getSSOUsers($tenant_id, $skip): \FastComments\Client\Model\GetSSOUsersResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$skip = 56; // int


try {
    $result = $apiInstance->getSSOUsers($tenant_id, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSSOUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **skip** | **int**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetSSOUsersResponse**](../Model/GetSSOUsersResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptions()`

```php
getSubscriptions($tenant_id, $user_id): \FastComments\Client\Model\GetSubscriptionsAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$user_id = 'user_id_example'; // string


try {
    $result = $apiInstance->getSubscriptions($tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetSubscriptionsAPIResponse**](../Model/GetSubscriptionsAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenant()`

```php
getTenant($tenant_id, $id): \FastComments\Client\Model\GetTenantResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getTenant($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetTenantResponse**](../Model/GetTenantResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantDailyUsages()`

```php
getTenantDailyUsages($tenant_id, $options): \FastComments\Client\Model\GetTenantDailyUsagesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'year_number' => 3.4, // float
    'month_number' => 3.4, // float
    'day_number' => 3.4, // float
    'skip' => 3.4, // float
];


try {
    $result = $apiInstance->getTenantDailyUsages($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTenantDailyUsages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **year_number** | **float**|  | [optional] |
| **month_number** | **float**|  | [optional] |
| **day_number** | **float**|  | [optional] |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetTenantDailyUsagesResponse**](../Model/GetTenantDailyUsagesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantPackage()`

```php
getTenantPackage($tenant_id, $id): \FastComments\Client\Model\GetTenantPackageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getTenantPackage($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTenantPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetTenantPackageResponse**](../Model/GetTenantPackageResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantPackages()`

```php
getTenantPackages($tenant_id, $skip): \FastComments\Client\Model\GetTenantPackagesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$skip = 3.4; // float


try {
    $result = $apiInstance->getTenantPackages($tenant_id, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTenantPackages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetTenantPackagesResponse**](../Model/GetTenantPackagesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantUser()`

```php
getTenantUser($tenant_id, $id): \FastComments\Client\Model\GetTenantUserResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getTenantUser($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTenantUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetTenantUserResponse**](../Model/GetTenantUserResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenantUsers()`

```php
getTenantUsers($tenant_id, $skip): \FastComments\Client\Model\GetTenantUsersResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$skip = 3.4; // float


try {
    $result = $apiInstance->getTenantUsers($tenant_id, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTenantUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetTenantUsersResponse**](../Model/GetTenantUsersResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTenants()`

```php
getTenants($tenant_id, $options): \FastComments\Client\Model\GetTenantsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'meta' => 'meta_example', // string
    'skip' => 3.4, // float
];


try {
    $result = $apiInstance->getTenants($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTenants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **meta** | **string**|  | [optional] |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetTenantsResponse**](../Model/GetTenantsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTicket()`

```php
getTicket($tenant_id, $id, $user_id): \FastComments\Client\Model\GetTicketResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$user_id = 'user_id_example'; // string


try {
    $result = $apiInstance->getTicket($tenant_id, $id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTicket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **user_id** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetTicketResponse**](../Model/GetTicketResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTickets()`

```php
getTickets($tenant_id, $options): \FastComments\Client\Model\GetTicketsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'user_id' => 'user_id_example', // string
    'state' => 3.4, // float
    'skip' => 3.4, // float
    'limit' => 3.4, // float
];


try {
    $result = $apiInstance->getTickets($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |
| **state** | **float**|  | [optional] |
| **skip** | **float**|  | [optional] |
| **limit** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetTicketsResponse**](../Model/GetTicketsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($tenant_id, $id): \FastComments\Client\Model\GetUserResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getUser($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetUserResponse**](../Model/GetUserResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserBadge()`

```php
getUserBadge($tenant_id, $id): \FastComments\Client\Model\APIGetUserBadgeResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getUserBadge($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIGetUserBadgeResponse**](../Model/APIGetUserBadgeResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserBadgeProgressById()`

```php
getUserBadgeProgressById($tenant_id, $id): \FastComments\Client\Model\APIGetUserBadgeProgressResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string


try {
    $result = $apiInstance->getUserBadgeProgressById($tenant_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserBadgeProgressById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIGetUserBadgeProgressResponse**](../Model/APIGetUserBadgeProgressResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserBadgeProgressByUserId()`

```php
getUserBadgeProgressByUserId($tenant_id, $user_id): \FastComments\Client\Model\APIGetUserBadgeProgressResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$user_id = 'user_id_example'; // string


try {
    $result = $apiInstance->getUserBadgeProgressByUserId($tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserBadgeProgressByUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIGetUserBadgeProgressResponse**](../Model/APIGetUserBadgeProgressResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserBadgeProgressList()`

```php
getUserBadgeProgressList($tenant_id, $options): \FastComments\Client\Model\APIGetUserBadgeProgressListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'user_id' => 'user_id_example', // string
    'limit' => 3.4, // float
    'skip' => 3.4, // float
];


try {
    $result = $apiInstance->getUserBadgeProgressList($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserBadgeProgressList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |
| **limit** | **float**|  | [optional] |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIGetUserBadgeProgressListResponse**](../Model/APIGetUserBadgeProgressListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserBadges()`

```php
getUserBadges($tenant_id, $options): \FastComments\Client\Model\APIGetUserBadgesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$options = [
    'user_id' => 'user_id_example', // string
    'badge_id' => 'badge_id_example', // string
    'type' => 3.4, // float
    'displayed_on_comments' => True, // bool
    'limit' => 3.4, // float
    'skip' => 3.4, // float
];


try {
    $result = $apiInstance->getUserBadges($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getUserBadges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |
| **badge_id** | **string**|  | [optional] |
| **type** | **float**|  | [optional] |
| **displayed_on_comments** | **bool**|  | [optional] |
| **limit** | **float**|  | [optional] |
| **skip** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIGetUserBadgesResponse**](../Model/APIGetUserBadgesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVotes()`

```php
getVotes($tenant_id, $url_id): \FastComments\Client\Model\GetVotesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$url_id = 'url_id_example'; // string


try {
    $result = $apiInstance->getVotes($tenant_id, $url_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getVotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetVotesResponse**](../Model/GetVotesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVotesForUser()`

```php
getVotesForUser($tenant_id, $url_id, $options): \FastComments\Client\Model\GetVotesForUserResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$url_id = 'url_id_example'; // string
$options = [
    'user_id' => 'user_id_example', // string
    'anon_user_id' => 'anon_user_id_example', // string
];


try {
    $result = $apiInstance->getVotesForUser($tenant_id, $url_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getVotesForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |
| **anon_user_id** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetVotesForUserResponse**](../Model/GetVotesForUserResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchDomainConfig()`

```php
patchDomainConfig($tenant_id, $domain_to_update, $patch_domain_config_params): \FastComments\Client\Model\PatchDomainConfigResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$domain_to_update = 'domain_to_update_example'; // string
$patch_domain_config_params = new \FastComments\Client\Model\PatchDomainConfigParams(); // \FastComments\Client\Model\PatchDomainConfigParams


try {
    $result = $apiInstance->patchDomainConfig($tenant_id, $domain_to_update, $patch_domain_config_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchDomainConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **domain_to_update** | **string**|  | |
| **patch_domain_config_params** | [**\FastComments\Client\Model\PatchDomainConfigParams**](../Model/PatchDomainConfigParams.md)|  | |

### Return type

[**\FastComments\Client\Model\PatchDomainConfigResponse**](../Model/PatchDomainConfigResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchHashTag()`

```php
patchHashTag($tag, $update_hash_tag_body, $tenant_id): \FastComments\Client\Model\UpdateHashTagResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tag = 'tag_example'; // string
$update_hash_tag_body = new \FastComments\Client\Model\UpdateHashTagBody(); // \FastComments\Client\Model\UpdateHashTagBody
$tenant_id = 'tenant_id_example'; // string


try {
    $result = $apiInstance->patchHashTag($tag, $update_hash_tag_body, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchHashTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag** | **string**|  | |
| **tenant_id** | **string**|  | [optional] |
| **update_hash_tag_body** | [**\FastComments\Client\Model\UpdateHashTagBody**](../Model/UpdateHashTagBody.md)|  | [optional] |

### Return type

[**\FastComments\Client\Model\UpdateHashTagResponse**](../Model/UpdateHashTagResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPage()`

```php
patchPage($tenant_id, $id, $update_api_page_data): \FastComments\Client\Model\PatchPageAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_api_page_data = new \FastComments\Client\Model\UpdateAPIPageData(); // \FastComments\Client\Model\UpdateAPIPageData


try {
    $result = $apiInstance->patchPage($tenant_id, $id, $update_api_page_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_api_page_data** | [**\FastComments\Client\Model\UpdateAPIPageData**](../Model/UpdateAPIPageData.md)|  | |

### Return type

[**\FastComments\Client\Model\PatchPageAPIResponse**](../Model/PatchPageAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSSOUser()`

```php
patchSSOUser($tenant_id, $id, $update_apisso_user_data, $update_comments): \FastComments\Client\Model\PatchSSOUserAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_apisso_user_data = new \FastComments\Client\Model\UpdateAPISSOUserData(); // \FastComments\Client\Model\UpdateAPISSOUserData
$update_comments = True; // bool


try {
    $result = $apiInstance->patchSSOUser($tenant_id, $id, $update_apisso_user_data, $update_comments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->patchSSOUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_apisso_user_data** | [**\FastComments\Client\Model\UpdateAPISSOUserData**](../Model/UpdateAPISSOUserData.md)|  | |
| **update_comments** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\PatchSSOUserAPIResponse**](../Model/PatchSSOUserAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putDomainConfig()`

```php
putDomainConfig($tenant_id, $domain_to_update, $update_domain_config_params): \FastComments\Client\Model\PutDomainConfigResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$domain_to_update = 'domain_to_update_example'; // string
$update_domain_config_params = new \FastComments\Client\Model\UpdateDomainConfigParams(); // \FastComments\Client\Model\UpdateDomainConfigParams


try {
    $result = $apiInstance->putDomainConfig($tenant_id, $domain_to_update, $update_domain_config_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putDomainConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **domain_to_update** | **string**|  | |
| **update_domain_config_params** | [**\FastComments\Client\Model\UpdateDomainConfigParams**](../Model/UpdateDomainConfigParams.md)|  | |

### Return type

[**\FastComments\Client\Model\PutDomainConfigResponse**](../Model/PutDomainConfigResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSSOUser()`

```php
putSSOUser($tenant_id, $id, $update_apisso_user_data, $update_comments): \FastComments\Client\Model\PutSSOUserAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_apisso_user_data = new \FastComments\Client\Model\UpdateAPISSOUserData(); // \FastComments\Client\Model\UpdateAPISSOUserData
$update_comments = True; // bool


try {
    $result = $apiInstance->putSSOUser($tenant_id, $id, $update_apisso_user_data, $update_comments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putSSOUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_apisso_user_data** | [**\FastComments\Client\Model\UpdateAPISSOUserData**](../Model/UpdateAPISSOUserData.md)|  | |
| **update_comments** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\PutSSOUserAPIResponse**](../Model/PutSSOUserAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renderEmailTemplate()`

```php
renderEmailTemplate($tenant_id, $render_email_template_body, $locale): \FastComments\Client\Model\RenderEmailTemplateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$render_email_template_body = new \FastComments\Client\Model\RenderEmailTemplateBody(); // \FastComments\Client\Model\RenderEmailTemplateBody
$locale = 'locale_example'; // string


try {
    $result = $apiInstance->renderEmailTemplate($tenant_id, $render_email_template_body, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->renderEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **render_email_template_body** | [**\FastComments\Client\Model\RenderEmailTemplateBody**](../Model/RenderEmailTemplateBody.md)|  | |
| **locale** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\RenderEmailTemplateResponse**](../Model/RenderEmailTemplateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceTenantPackage()`

```php
replaceTenantPackage($tenant_id, $id, $replace_tenant_package_body): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$replace_tenant_package_body = new \FastComments\Client\Model\ReplaceTenantPackageBody(); // \FastComments\Client\Model\ReplaceTenantPackageBody


try {
    $result = $apiInstance->replaceTenantPackage($tenant_id, $id, $replace_tenant_package_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->replaceTenantPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **replace_tenant_package_body** | [**\FastComments\Client\Model\ReplaceTenantPackageBody**](../Model/ReplaceTenantPackageBody.md)|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceTenantUser()`

```php
replaceTenantUser($tenant_id, $id, $replace_tenant_user_body, $update_comments): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$replace_tenant_user_body = new \FastComments\Client\Model\ReplaceTenantUserBody(); // \FastComments\Client\Model\ReplaceTenantUserBody
$update_comments = 'update_comments_example'; // string


try {
    $result = $apiInstance->replaceTenantUser($tenant_id, $id, $replace_tenant_user_body, $update_comments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->replaceTenantUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **replace_tenant_user_body** | [**\FastComments\Client\Model\ReplaceTenantUserBody**](../Model/ReplaceTenantUserBody.md)|  | |
| **update_comments** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveComment()`

```php
saveComment($tenant_id, $create_comment_params, $options): \FastComments\Client\Model\APISaveCommentResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_comment_params = new \FastComments\Client\Model\CreateCommentParams(); // \FastComments\Client\Model\CreateCommentParams
$options = [
    'is_live' => True, // bool
    'do_spam_check' => True, // bool
    'send_emails' => True, // bool
    'populate_notifications' => True, // bool
];


try {
    $result = $apiInstance->saveComment($tenant_id, $create_comment_params, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->saveComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_comment_params** | [**\FastComments\Client\Model\CreateCommentParams**](../Model/CreateCommentParams.md)|  | |
| **is_live** | **bool**|  | [optional] |
| **do_spam_check** | **bool**|  | [optional] |
| **send_emails** | **bool**|  | [optional] |
| **populate_notifications** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APISaveCommentResponse**](../Model/APISaveCommentResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveCommentsBulk()`

```php
saveCommentsBulk($tenant_id, $create_comment_params, $options): \FastComments\Client\Model\SaveCommentsBulkResponse[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$create_comment_params = array(new \FastComments\Client\Model\CreateCommentParams()); // \FastComments\Client\Model\CreateCommentParams[]
$options = [
    'is_live' => True, // bool
    'do_spam_check' => True, // bool
    'send_emails' => True, // bool
    'populate_notifications' => True, // bool
];


try {
    $result = $apiInstance->saveCommentsBulk($tenant_id, $create_comment_params, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->saveCommentsBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_comment_params** | [**\FastComments\Client\Model\CreateCommentParams[]**](../Model/CreateCommentParams.md)|  | |
| **is_live** | **bool**|  | [optional] |
| **do_spam_check** | **bool**|  | [optional] |
| **send_emails** | **bool**|  | [optional] |
| **populate_notifications** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\SaveCommentsBulkResponse[]**](../Model/SaveCommentsBulkResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendInvite()`

```php
sendInvite($tenant_id, $id, $from_name): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$from_name = 'from_name_example'; // string


try {
    $result = $apiInstance->sendInvite($tenant_id, $id, $from_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sendInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **from_name** | **string**|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendLoginLink()`

```php
sendLoginLink($tenant_id, $id, $redirect_url): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$redirect_url = 'redirect_url_example'; // string


try {
    $result = $apiInstance->sendLoginLink($tenant_id, $id, $redirect_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sendLoginLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **redirect_url** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unBlockUserFromComment()`

```php
unBlockUserFromComment($tenant_id, $id, $un_block_from_comment_params, $options): \FastComments\Client\Model\UnblockSuccess
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$un_block_from_comment_params = new \FastComments\Client\Model\UnBlockFromCommentParams(); // \FastComments\Client\Model\UnBlockFromCommentParams
$options = [
    'user_id' => 'user_id_example', // string
    'anon_user_id' => 'anon_user_id_example', // string
];


try {
    $result = $apiInstance->unBlockUserFromComment($tenant_id, $id, $un_block_from_comment_params, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->unBlockUserFromComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **un_block_from_comment_params** | [**\FastComments\Client\Model\UnBlockFromCommentParams**](../Model/UnBlockFromCommentParams.md)|  | |
| **user_id** | **string**|  | [optional] |
| **anon_user_id** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\UnblockSuccess**](../Model/UnblockSuccess.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unFlagComment()`

```php
unFlagComment($tenant_id, $id, $options): \FastComments\Client\Model\FlagCommentResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$options = [
    'user_id' => 'user_id_example', // string
    'anon_user_id' => 'anon_user_id_example', // string
];


try {
    $result = $apiInstance->unFlagComment($tenant_id, $id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->unFlagComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **user_id** | **string**|  | [optional] |
| **anon_user_id** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\FlagCommentResponse**](../Model/FlagCommentResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateComment()`

```php
updateComment($tenant_id, $id, $updatable_comment_params, $options): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$updatable_comment_params = new \FastComments\Client\Model\UpdatableCommentParams(); // \FastComments\Client\Model\UpdatableCommentParams
$options = [
    'context_user_id' => 'context_user_id_example', // string
    'do_spam_check' => True, // bool
    'is_live' => True, // bool
];


try {
    $result = $apiInstance->updateComment($tenant_id, $id, $updatable_comment_params, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **updatable_comment_params** | [**\FastComments\Client\Model\UpdatableCommentParams**](../Model/UpdatableCommentParams.md)|  | |
| **context_user_id** | **string**|  | [optional] |
| **do_spam_check** | **bool**|  | [optional] |
| **is_live** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailTemplate()`

```php
updateEmailTemplate($tenant_id, $id, $update_email_template_body): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_email_template_body = new \FastComments\Client\Model\UpdateEmailTemplateBody(); // \FastComments\Client\Model\UpdateEmailTemplateBody


try {
    $result = $apiInstance->updateEmailTemplate($tenant_id, $id, $update_email_template_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_email_template_body** | [**\FastComments\Client\Model\UpdateEmailTemplateBody**](../Model/UpdateEmailTemplateBody.md)|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFeedPost()`

```php
updateFeedPost($tenant_id, $id, $feed_post): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$feed_post = new \FastComments\Client\Model\FeedPost(); // \FastComments\Client\Model\FeedPost


try {
    $result = $apiInstance->updateFeedPost($tenant_id, $id, $feed_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateFeedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **feed_post** | [**\FastComments\Client\Model\FeedPost**](../Model/FeedPost.md)|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateModerator()`

```php
updateModerator($tenant_id, $id, $update_moderator_body): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_moderator_body = new \FastComments\Client\Model\UpdateModeratorBody(); // \FastComments\Client\Model\UpdateModeratorBody


try {
    $result = $apiInstance->updateModerator($tenant_id, $id, $update_moderator_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateModerator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_moderator_body** | [**\FastComments\Client\Model\UpdateModeratorBody**](../Model/UpdateModeratorBody.md)|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNotification()`

```php
updateNotification($tenant_id, $id, $update_notification_body, $user_id): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_notification_body = new \FastComments\Client\Model\UpdateNotificationBody(); // \FastComments\Client\Model\UpdateNotificationBody
$user_id = 'user_id_example'; // string


try {
    $result = $apiInstance->updateNotification($tenant_id, $id, $update_notification_body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_notification_body** | [**\FastComments\Client\Model\UpdateNotificationBody**](../Model/UpdateNotificationBody.md)|  | |
| **user_id** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateQuestionConfig()`

```php
updateQuestionConfig($tenant_id, $id, $update_question_config_body): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_question_config_body = new \FastComments\Client\Model\UpdateQuestionConfigBody(); // \FastComments\Client\Model\UpdateQuestionConfigBody


try {
    $result = $apiInstance->updateQuestionConfig($tenant_id, $id, $update_question_config_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateQuestionConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_question_config_body** | [**\FastComments\Client\Model\UpdateQuestionConfigBody**](../Model/UpdateQuestionConfigBody.md)|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateQuestionResult()`

```php
updateQuestionResult($tenant_id, $id, $update_question_result_body): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_question_result_body = new \FastComments\Client\Model\UpdateQuestionResultBody(); // \FastComments\Client\Model\UpdateQuestionResultBody


try {
    $result = $apiInstance->updateQuestionResult($tenant_id, $id, $update_question_result_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateQuestionResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_question_result_body** | [**\FastComments\Client\Model\UpdateQuestionResultBody**](../Model/UpdateQuestionResultBody.md)|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscription()`

```php
updateSubscription($tenant_id, $id, $update_api_user_subscription_data, $user_id): \FastComments\Client\Model\UpdateSubscriptionAPIResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_api_user_subscription_data = new \FastComments\Client\Model\UpdateAPIUserSubscriptionData(); // \FastComments\Client\Model\UpdateAPIUserSubscriptionData
$user_id = 'user_id_example'; // string


try {
    $result = $apiInstance->updateSubscription($tenant_id, $id, $update_api_user_subscription_data, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_api_user_subscription_data** | [**\FastComments\Client\Model\UpdateAPIUserSubscriptionData**](../Model/UpdateAPIUserSubscriptionData.md)|  | |
| **user_id** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\UpdateSubscriptionAPIResponse**](../Model/UpdateSubscriptionAPIResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTenant()`

```php
updateTenant($tenant_id, $id, $update_tenant_body): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_tenant_body = new \FastComments\Client\Model\UpdateTenantBody(); // \FastComments\Client\Model\UpdateTenantBody


try {
    $result = $apiInstance->updateTenant($tenant_id, $id, $update_tenant_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateTenant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_tenant_body** | [**\FastComments\Client\Model\UpdateTenantBody**](../Model/UpdateTenantBody.md)|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTenantPackage()`

```php
updateTenantPackage($tenant_id, $id, $update_tenant_package_body): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_tenant_package_body = new \FastComments\Client\Model\UpdateTenantPackageBody(); // \FastComments\Client\Model\UpdateTenantPackageBody


try {
    $result = $apiInstance->updateTenantPackage($tenant_id, $id, $update_tenant_package_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateTenantPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_tenant_package_body** | [**\FastComments\Client\Model\UpdateTenantPackageBody**](../Model/UpdateTenantPackageBody.md)|  | |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTenantUser()`

```php
updateTenantUser($tenant_id, $id, $update_tenant_user_body, $update_comments): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_tenant_user_body = new \FastComments\Client\Model\UpdateTenantUserBody(); // \FastComments\Client\Model\UpdateTenantUserBody
$update_comments = 'update_comments_example'; // string


try {
    $result = $apiInstance->updateTenantUser($tenant_id, $id, $update_tenant_user_body, $update_comments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateTenantUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_tenant_user_body** | [**\FastComments\Client\Model\UpdateTenantUserBody**](../Model/UpdateTenantUserBody.md)|  | |
| **update_comments** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserBadge()`

```php
updateUserBadge($tenant_id, $id, $update_user_badge_params): \FastComments\Client\Model\APIEmptySuccessResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FastComments\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new FastComments\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$tenant_id = 'tenant_id_example'; // string
$id = 'id_example'; // string
$update_user_badge_params = new \FastComments\Client\Model\UpdateUserBadgeParams(); // \FastComments\Client\Model\UpdateUserBadgeParams


try {
    $result = $apiInstance->updateUserBadge($tenant_id, $id, $update_user_badge_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateUserBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **id** | **string**|  | |
| **update_user_badge_params** | [**\FastComments\Client\Model\UpdateUserBadgeParams**](../Model/UpdateUserBadgeParams.md)|  | |

### Return type

[**\FastComments\Client\Model\APIEmptySuccessResponse**](../Model/APIEmptySuccessResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
