# FastComments\Client\ModerationApi

FastComments PHP API Client - A SDK for interacting with the FastComments API

All URIs are relative to https://fastcomments.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteModerationVote()**](ModerationApi.md#deleteModerationVote) | **DELETE** /auth/my-account/moderate-comments/vote/{commentId}/{voteId} |  |
| [**getApiComments()**](ModerationApi.md#getApiComments) | **GET** /auth/my-account/moderate-comments/api/comments |  |
| [**getApiExportStatus()**](ModerationApi.md#getApiExportStatus) | **GET** /auth/my-account/moderate-comments/api/export/status |  |
| [**getApiIds()**](ModerationApi.md#getApiIds) | **GET** /auth/my-account/moderate-comments/api/ids |  |
| [**getBanUsersFromComment()**](ModerationApi.md#getBanUsersFromComment) | **GET** /auth/my-account/moderate-comments/ban-users/from-comment/{commentId} |  |
| [**getCommentBanStatus()**](ModerationApi.md#getCommentBanStatus) | **GET** /auth/my-account/moderate-comments/get-comment-ban-status/{commentId} |  |
| [**getCommentChildren()**](ModerationApi.md#getCommentChildren) | **GET** /auth/my-account/moderate-comments/comment-children/{commentId} |  |
| [**getCount()**](ModerationApi.md#getCount) | **GET** /auth/my-account/moderate-comments/count |  |
| [**getCounts()**](ModerationApi.md#getCounts) | **GET** /auth/my-account/moderate-comments/banned-users/counts |  |
| [**getLogs()**](ModerationApi.md#getLogs) | **GET** /auth/my-account/moderate-comments/logs/{commentId} |  |
| [**getManualBadges()**](ModerationApi.md#getManualBadges) | **GET** /auth/my-account/moderate-comments/get-manual-badges |  |
| [**getManualBadgesForUser()**](ModerationApi.md#getManualBadgesForUser) | **GET** /auth/my-account/moderate-comments/get-manual-badges-for-user |  |
| [**getModerationComment()**](ModerationApi.md#getModerationComment) | **GET** /auth/my-account/moderate-comments/comment/{commentId} |  |
| [**getModerationCommentText()**](ModerationApi.md#getModerationCommentText) | **GET** /auth/my-account/moderate-comments/get-comment-text/{commentId} |  |
| [**getPreBanSummary()**](ModerationApi.md#getPreBanSummary) | **GET** /auth/my-account/moderate-comments/pre-ban-summary/{commentId} |  |
| [**getSearchCommentsSummary()**](ModerationApi.md#getSearchCommentsSummary) | **GET** /auth/my-account/moderate-comments/search/comments/summary |  |
| [**getSearchPages()**](ModerationApi.md#getSearchPages) | **GET** /auth/my-account/moderate-comments/search/pages |  |
| [**getSearchSites()**](ModerationApi.md#getSearchSites) | **GET** /auth/my-account/moderate-comments/search/sites |  |
| [**getSearchSuggest()**](ModerationApi.md#getSearchSuggest) | **GET** /auth/my-account/moderate-comments/search/suggest |  |
| [**getSearchUsers()**](ModerationApi.md#getSearchUsers) | **GET** /auth/my-account/moderate-comments/search/users |  |
| [**getTrustFactor()**](ModerationApi.md#getTrustFactor) | **GET** /auth/my-account/moderate-comments/get-trust-factor |  |
| [**getUserBanPreference()**](ModerationApi.md#getUserBanPreference) | **GET** /auth/my-account/moderate-comments/user-ban-preference |  |
| [**getUserInternalProfile()**](ModerationApi.md#getUserInternalProfile) | **GET** /auth/my-account/moderate-comments/get-user-internal-profile |  |
| [**postAdjustCommentVotes()**](ModerationApi.md#postAdjustCommentVotes) | **POST** /auth/my-account/moderate-comments/adjust-comment-votes/{commentId} |  |
| [**postApiExport()**](ModerationApi.md#postApiExport) | **POST** /auth/my-account/moderate-comments/api/export |  |
| [**postBanUserFromComment()**](ModerationApi.md#postBanUserFromComment) | **POST** /auth/my-account/moderate-comments/ban-user/from-comment/{commentId} |  |
| [**postBanUserUndo()**](ModerationApi.md#postBanUserUndo) | **POST** /auth/my-account/moderate-comments/ban-user/undo |  |
| [**postBulkPreBanSummary()**](ModerationApi.md#postBulkPreBanSummary) | **POST** /auth/my-account/moderate-comments/bulk-pre-ban-summary |  |
| [**postCommentsByIds()**](ModerationApi.md#postCommentsByIds) | **POST** /auth/my-account/moderate-comments/comments-by-ids |  |
| [**postFlagComment()**](ModerationApi.md#postFlagComment) | **POST** /auth/my-account/moderate-comments/flag-comment/{commentId} |  |
| [**postRemoveComment()**](ModerationApi.md#postRemoveComment) | **POST** /auth/my-account/moderate-comments/remove-comment/{commentId} |  |
| [**postRestoreDeletedComment()**](ModerationApi.md#postRestoreDeletedComment) | **POST** /auth/my-account/moderate-comments/restore-deleted-comment/{commentId} |  |
| [**postSetCommentApprovalStatus()**](ModerationApi.md#postSetCommentApprovalStatus) | **POST** /auth/my-account/moderate-comments/set-comment-approval-status/{commentId} |  |
| [**postSetCommentReviewStatus()**](ModerationApi.md#postSetCommentReviewStatus) | **POST** /auth/my-account/moderate-comments/set-comment-review-status/{commentId} |  |
| [**postSetCommentSpamStatus()**](ModerationApi.md#postSetCommentSpamStatus) | **POST** /auth/my-account/moderate-comments/set-comment-spam-status/{commentId} |  |
| [**postSetCommentText()**](ModerationApi.md#postSetCommentText) | **POST** /auth/my-account/moderate-comments/set-comment-text/{commentId} |  |
| [**postUnFlagComment()**](ModerationApi.md#postUnFlagComment) | **POST** /auth/my-account/moderate-comments/un-flag-comment/{commentId} |  |
| [**postVote()**](ModerationApi.md#postVote) | **POST** /auth/my-account/moderate-comments/vote/{commentId} |  |
| [**putAwardBadge()**](ModerationApi.md#putAwardBadge) | **PUT** /auth/my-account/moderate-comments/award-badge |  |
| [**putCloseThread()**](ModerationApi.md#putCloseThread) | **PUT** /auth/my-account/moderate-comments/close-thread |  |
| [**putRemoveBadge()**](ModerationApi.md#putRemoveBadge) | **PUT** /auth/my-account/moderate-comments/remove-badge |  |
| [**putReopenThread()**](ModerationApi.md#putReopenThread) | **PUT** /auth/my-account/moderate-comments/reopen-thread |  |
| [**setTrustFactor()**](ModerationApi.md#setTrustFactor) | **PUT** /auth/my-account/moderate-comments/set-trust-factor |  |


## `deleteModerationVote()`

```php
deleteModerationVote($comment_id, $vote_id, $sso): \FastComments\Client\Model\VoteDeleteResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$vote_id = 'vote_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->deleteModerationVote($comment_id, $vote_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->deleteModerationVote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **vote_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\VoteDeleteResponse**](../Model/VoteDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiComments()`

```php
getApiComments($page, $count, $text_search, $by_ip_from_comment, $filters, $search_filters, $sorts, $demo, $sso): \FastComments\Client\Model\ModerationAPIGetCommentsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 3.4; // float
$count = 3.4; // float
$text_search = 'text_search_example'; // string
$by_ip_from_comment = 'by_ip_from_comment_example'; // string
$filters = 'filters_example'; // string
$search_filters = 'search_filters_example'; // string
$sorts = 'sorts_example'; // string
$demo = True; // bool
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getApiComments($page, $count, $text_search, $by_ip_from_comment, $filters, $search_filters, $sorts, $demo, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getApiComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **float**|  | [optional] |
| **count** | **float**|  | [optional] |
| **text_search** | **string**|  | [optional] |
| **by_ip_from_comment** | **string**|  | [optional] |
| **filters** | **string**|  | [optional] |
| **search_filters** | **string**|  | [optional] |
| **sorts** | **string**|  | [optional] |
| **demo** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationAPIGetCommentsResponse**](../Model/ModerationAPIGetCommentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiExportStatus()`

```php
getApiExportStatus($batch_job_id, $sso): \FastComments\Client\Model\ModerationExportStatusResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_job_id = 'batch_job_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getApiExportStatus($batch_job_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getApiExportStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_job_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationExportStatusResponse**](../Model/ModerationExportStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiIds()`

```php
getApiIds($text_search, $by_ip_from_comment, $filters, $search_filters, $after_id, $demo, $sso): \FastComments\Client\Model\ModerationAPIGetCommentIdsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$text_search = 'text_search_example'; // string
$by_ip_from_comment = 'by_ip_from_comment_example'; // string
$filters = 'filters_example'; // string
$search_filters = 'search_filters_example'; // string
$after_id = 'after_id_example'; // string
$demo = True; // bool
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getApiIds($text_search, $by_ip_from_comment, $filters, $search_filters, $after_id, $demo, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getApiIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **text_search** | **string**|  | [optional] |
| **by_ip_from_comment** | **string**|  | [optional] |
| **filters** | **string**|  | [optional] |
| **search_filters** | **string**|  | [optional] |
| **after_id** | **string**|  | [optional] |
| **demo** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationAPIGetCommentIdsResponse**](../Model/ModerationAPIGetCommentIdsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBanUsersFromComment()`

```php
getBanUsersFromComment($comment_id, $sso): \FastComments\Client\Model\GetBannedUsersFromCommentResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getBanUsersFromComment($comment_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getBanUsersFromComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetBannedUsersFromCommentResponse**](../Model/GetBannedUsersFromCommentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentBanStatus()`

```php
getCommentBanStatus($comment_id, $sso): \FastComments\Client\Model\GetCommentBanStatusResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getCommentBanStatus($comment_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getCommentBanStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetCommentBanStatusResponse**](../Model/GetCommentBanStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentChildren()`

```php
getCommentChildren($comment_id, $sso): \FastComments\Client\Model\ModerationAPIChildCommentsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getCommentChildren($comment_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getCommentChildren: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationAPIChildCommentsResponse**](../Model/ModerationAPIChildCommentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCount()`

```php
getCount($text_search, $by_ip_from_comment, $filter, $search_filters, $demo, $sso): \FastComments\Client\Model\ModerationAPICountCommentsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$text_search = 'text_search_example'; // string
$by_ip_from_comment = 'by_ip_from_comment_example'; // string
$filter = 'filter_example'; // string
$search_filters = 'search_filters_example'; // string
$demo = True; // bool
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getCount($text_search, $by_ip_from_comment, $filter, $search_filters, $demo, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **text_search** | **string**|  | [optional] |
| **by_ip_from_comment** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **search_filters** | **string**|  | [optional] |
| **demo** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationAPICountCommentsResponse**](../Model/ModerationAPICountCommentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCounts()`

```php
getCounts($sso): \FastComments\Client\Model\GetBannedUsersCountResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getCounts($sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getCounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetBannedUsersCountResponse**](../Model/GetBannedUsersCountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogs()`

```php
getLogs($comment_id, $sso): \FastComments\Client\Model\ModerationAPIGetLogsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getLogs($comment_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationAPIGetLogsResponse**](../Model/ModerationAPIGetLogsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getManualBadges()`

```php
getManualBadges($sso): \FastComments\Client\Model\GetTenantManualBadgesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getManualBadges($sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getManualBadges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetTenantManualBadgesResponse**](../Model/GetTenantManualBadgesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getManualBadgesForUser()`

```php
getManualBadgesForUser($badges_user_id, $comment_id, $sso): \FastComments\Client\Model\GetUserManualBadgesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$badges_user_id = 'badges_user_id_example'; // string
$comment_id = 'comment_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getManualBadgesForUser($badges_user_id, $comment_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getManualBadgesForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **badges_user_id** | **string**|  | [optional] |
| **comment_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetUserManualBadgesResponse**](../Model/GetUserManualBadgesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getModerationComment()`

```php
getModerationComment($comment_id, $include_email, $include_ip, $sso): \FastComments\Client\Model\ModerationAPICommentResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$include_email = True; // bool
$include_ip = True; // bool
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getModerationComment($comment_id, $include_email, $include_ip, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getModerationComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **include_email** | **bool**|  | [optional] |
| **include_ip** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationAPICommentResponse**](../Model/ModerationAPICommentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getModerationCommentText()`

```php
getModerationCommentText($comment_id, $sso): \FastComments\Client\Model\GetCommentTextResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getModerationCommentText($comment_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getModerationCommentText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetCommentTextResponse**](../Model/GetCommentTextResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPreBanSummary()`

```php
getPreBanSummary($comment_id, $include_by_user_id_and_email, $include_by_ip, $include_by_email_domain, $sso): \FastComments\Client\Model\PreBanSummary
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$include_by_user_id_and_email = True; // bool
$include_by_ip = True; // bool
$include_by_email_domain = True; // bool
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getPreBanSummary($comment_id, $include_by_user_id_and_email, $include_by_ip, $include_by_email_domain, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getPreBanSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **include_by_user_id_and_email** | **bool**|  | [optional] |
| **include_by_ip** | **bool**|  | [optional] |
| **include_by_email_domain** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\PreBanSummary**](../Model/PreBanSummary.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearchCommentsSummary()`

```php
getSearchCommentsSummary($value, $filters, $search_filters, $sso): \FastComments\Client\Model\ModerationCommentSearchResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$value = 'value_example'; // string
$filters = 'filters_example'; // string
$search_filters = 'search_filters_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getSearchCommentsSummary($value, $filters, $search_filters, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getSearchCommentsSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value** | **string**|  | [optional] |
| **filters** | **string**|  | [optional] |
| **search_filters** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationCommentSearchResponse**](../Model/ModerationCommentSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearchPages()`

```php
getSearchPages($value, $sso): \FastComments\Client\Model\ModerationPageSearchResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$value = 'value_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getSearchPages($value, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getSearchPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationPageSearchResponse**](../Model/ModerationPageSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearchSites()`

```php
getSearchSites($value, $sso): \FastComments\Client\Model\ModerationSiteSearchResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$value = 'value_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getSearchSites($value, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getSearchSites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationSiteSearchResponse**](../Model/ModerationSiteSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearchSuggest()`

```php
getSearchSuggest($text_search, $sso): \FastComments\Client\Model\ModerationSuggestResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$text_search = 'text_search_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getSearchSuggest($text_search, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getSearchSuggest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **text_search** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationSuggestResponse**](../Model/ModerationSuggestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearchUsers()`

```php
getSearchUsers($value, $sso): \FastComments\Client\Model\ModerationUserSearchResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$value = 'value_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getSearchUsers($value, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getSearchUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **value** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationUserSearchResponse**](../Model/ModerationUserSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrustFactor()`

```php
getTrustFactor($user_id, $sso): \FastComments\Client\Model\GetUserTrustFactorResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getTrustFactor($user_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getTrustFactor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetUserTrustFactorResponse**](../Model/GetUserTrustFactorResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserBanPreference()`

```php
getUserBanPreference($sso): \FastComments\Client\Model\APIModerateGetUserBanPreferencesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getUserBanPreference($sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getUserBanPreference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIModerateGetUserBanPreferencesResponse**](../Model/APIModerateGetUserBanPreferencesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserInternalProfile()`

```php
getUserInternalProfile($comment_id, $sso): \FastComments\Client\Model\GetUserInternalProfileResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getUserInternalProfile($comment_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->getUserInternalProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetUserInternalProfileResponse**](../Model/GetUserInternalProfileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAdjustCommentVotes()`

```php
postAdjustCommentVotes($comment_id, $adjust_comment_votes_params, $sso): \FastComments\Client\Model\AdjustVotesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$adjust_comment_votes_params = new \FastComments\Client\Model\AdjustCommentVotesParams(); // \FastComments\Client\Model\AdjustCommentVotesParams
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postAdjustCommentVotes($comment_id, $adjust_comment_votes_params, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postAdjustCommentVotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **adjust_comment_votes_params** | [**\FastComments\Client\Model\AdjustCommentVotesParams**](../Model/AdjustCommentVotesParams.md)|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\AdjustVotesResponse**](../Model/AdjustVotesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApiExport()`

```php
postApiExport($text_search, $by_ip_from_comment, $filters, $search_filters, $sorts, $sso): \FastComments\Client\Model\ModerationExportResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$text_search = 'text_search_example'; // string
$by_ip_from_comment = 'by_ip_from_comment_example'; // string
$filters = 'filters_example'; // string
$search_filters = 'search_filters_example'; // string
$sorts = 'sorts_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postApiExport($text_search, $by_ip_from_comment, $filters, $search_filters, $sorts, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postApiExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **text_search** | **string**|  | [optional] |
| **by_ip_from_comment** | **string**|  | [optional] |
| **filters** | **string**|  | [optional] |
| **search_filters** | **string**|  | [optional] |
| **sorts** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationExportResponse**](../Model/ModerationExportResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBanUserFromComment()`

```php
postBanUserFromComment($comment_id, $ban_email, $ban_email_domain, $ban_ip, $delete_all_users_comments, $banned_until, $is_shadow_ban, $update_id, $ban_reason, $sso): \FastComments\Client\Model\BanUserFromCommentResult
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$ban_email = True; // bool
$ban_email_domain = True; // bool
$ban_ip = True; // bool
$delete_all_users_comments = True; // bool
$banned_until = 'banned_until_example'; // string
$is_shadow_ban = True; // bool
$update_id = 'update_id_example'; // string
$ban_reason = 'ban_reason_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postBanUserFromComment($comment_id, $ban_email, $ban_email_domain, $ban_ip, $delete_all_users_comments, $banned_until, $is_shadow_ban, $update_id, $ban_reason, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postBanUserFromComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **ban_email** | **bool**|  | [optional] |
| **ban_email_domain** | **bool**|  | [optional] |
| **ban_ip** | **bool**|  | [optional] |
| **delete_all_users_comments** | **bool**|  | [optional] |
| **banned_until** | **string**|  | [optional] |
| **is_shadow_ban** | **bool**|  | [optional] |
| **update_id** | **string**|  | [optional] |
| **ban_reason** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\BanUserFromCommentResult**](../Model/BanUserFromCommentResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBanUserUndo()`

```php
postBanUserUndo($ban_user_undo_params, $sso): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ban_user_undo_params = new \FastComments\Client\Model\BanUserUndoParams(); // \FastComments\Client\Model\BanUserUndoParams
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postBanUserUndo($ban_user_undo_params, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postBanUserUndo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ban_user_undo_params** | [**\FastComments\Client\Model\BanUserUndoParams**](../Model/BanUserUndoParams.md)|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBulkPreBanSummary()`

```php
postBulkPreBanSummary($bulk_pre_ban_params, $include_by_user_id_and_email, $include_by_ip, $include_by_email_domain, $sso): \FastComments\Client\Model\BulkPreBanSummary
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bulk_pre_ban_params = new \FastComments\Client\Model\BulkPreBanParams(); // \FastComments\Client\Model\BulkPreBanParams
$include_by_user_id_and_email = True; // bool
$include_by_ip = True; // bool
$include_by_email_domain = True; // bool
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postBulkPreBanSummary($bulk_pre_ban_params, $include_by_user_id_and_email, $include_by_ip, $include_by_email_domain, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postBulkPreBanSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_pre_ban_params** | [**\FastComments\Client\Model\BulkPreBanParams**](../Model/BulkPreBanParams.md)|  | |
| **include_by_user_id_and_email** | **bool**|  | [optional] |
| **include_by_ip** | **bool**|  | [optional] |
| **include_by_email_domain** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\BulkPreBanSummary**](../Model/BulkPreBanSummary.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCommentsByIds()`

```php
postCommentsByIds($comments_by_ids_params, $sso): \FastComments\Client\Model\ModerationAPIChildCommentsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comments_by_ids_params = new \FastComments\Client\Model\CommentsByIdsParams(); // \FastComments\Client\Model\CommentsByIdsParams
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postCommentsByIds($comments_by_ids_params, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postCommentsByIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comments_by_ids_params** | [**\FastComments\Client\Model\CommentsByIdsParams**](../Model/CommentsByIdsParams.md)|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ModerationAPIChildCommentsResponse**](../Model/ModerationAPIChildCommentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFlagComment()`

```php
postFlagComment($comment_id, $sso): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postFlagComment($comment_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postFlagComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRemoveComment()`

```php
postRemoveComment($comment_id, $sso): \FastComments\Client\Model\PostRemoveCommentResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postRemoveComment($comment_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postRemoveComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\PostRemoveCommentResponse**](../Model/PostRemoveCommentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRestoreDeletedComment()`

```php
postRestoreDeletedComment($comment_id, $sso): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postRestoreDeletedComment($comment_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postRestoreDeletedComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSetCommentApprovalStatus()`

```php
postSetCommentApprovalStatus($comment_id, $approved, $sso): \FastComments\Client\Model\SetCommentApprovedResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$approved = True; // bool
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postSetCommentApprovalStatus($comment_id, $approved, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postSetCommentApprovalStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **approved** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\SetCommentApprovedResponse**](../Model/SetCommentApprovedResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSetCommentReviewStatus()`

```php
postSetCommentReviewStatus($comment_id, $reviewed, $sso): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$reviewed = True; // bool
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postSetCommentReviewStatus($comment_id, $reviewed, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postSetCommentReviewStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **reviewed** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSetCommentSpamStatus()`

```php
postSetCommentSpamStatus($comment_id, $spam, $perm_not_spam, $sso): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$spam = True; // bool
$perm_not_spam = True; // bool
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postSetCommentSpamStatus($comment_id, $spam, $perm_not_spam, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postSetCommentSpamStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **spam** | **bool**|  | [optional] |
| **perm_not_spam** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSetCommentText()`

```php
postSetCommentText($comment_id, $set_comment_text_params, $sso): \FastComments\Client\Model\SetCommentTextResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$set_comment_text_params = new \FastComments\Client\Model\SetCommentTextParams(); // \FastComments\Client\Model\SetCommentTextParams
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postSetCommentText($comment_id, $set_comment_text_params, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postSetCommentText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **set_comment_text_params** | [**\FastComments\Client\Model\SetCommentTextParams**](../Model/SetCommentTextParams.md)|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\SetCommentTextResponse**](../Model/SetCommentTextResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUnFlagComment()`

```php
postUnFlagComment($comment_id, $sso): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postUnFlagComment($comment_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postUnFlagComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postVote()`

```php
postVote($comment_id, $direction, $sso): \FastComments\Client\Model\VoteResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$comment_id = 'comment_id_example'; // string
$direction = 'direction_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->postVote($comment_id, $direction, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->postVote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **comment_id** | **string**|  | |
| **direction** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\VoteResponse**](../Model/VoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAwardBadge()`

```php
putAwardBadge($badge_id, $user_id, $comment_id, $broadcast_id, $sso): \FastComments\Client\Model\AwardUserBadgeResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$badge_id = 'badge_id_example'; // string
$user_id = 'user_id_example'; // string
$comment_id = 'comment_id_example'; // string
$broadcast_id = 'broadcast_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->putAwardBadge($badge_id, $user_id, $comment_id, $broadcast_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->putAwardBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **badge_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |
| **comment_id** | **string**|  | [optional] |
| **broadcast_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\AwardUserBadgeResponse**](../Model/AwardUserBadgeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCloseThread()`

```php
putCloseThread($url_id, $sso): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$url_id = 'url_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->putCloseThread($url_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->putCloseThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putRemoveBadge()`

```php
putRemoveBadge($badge_id, $user_id, $comment_id, $broadcast_id, $sso): \FastComments\Client\Model\RemoveUserBadgeResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$badge_id = 'badge_id_example'; // string
$user_id = 'user_id_example'; // string
$comment_id = 'comment_id_example'; // string
$broadcast_id = 'broadcast_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->putRemoveBadge($badge_id, $user_id, $comment_id, $broadcast_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->putRemoveBadge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **badge_id** | **string**|  | |
| **user_id** | **string**|  | [optional] |
| **comment_id** | **string**|  | [optional] |
| **broadcast_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\RemoveUserBadgeResponse**](../Model/RemoveUserBadgeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putReopenThread()`

```php
putReopenThread($url_id, $sso): \FastComments\Client\Model\APIEmptyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$url_id = 'url_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->putReopenThread($url_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->putReopenThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setTrustFactor()`

```php
setTrustFactor($user_id, $trust_factor, $sso): \FastComments\Client\Model\SetUserTrustFactorResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\ModerationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string
$trust_factor = 'trust_factor_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->setTrustFactor($user_id, $trust_factor, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModerationApi->setTrustFactor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | [optional] |
| **trust_factor** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\SetUserTrustFactorResponse**](../Model/SetUserTrustFactorResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
