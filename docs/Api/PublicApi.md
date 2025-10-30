# FastComments\Client\PublicApi

FastComments PHP API Client - A SDK for interacting with the FastComments API

All URIs are relative to https://fastcomments.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blockFromCommentPublic()**](PublicApi.md#blockFromCommentPublic) | **POST** /block-from-comment/{commentId} |  |
| [**checkedCommentsForBlocked()**](PublicApi.md#checkedCommentsForBlocked) | **GET** /check-blocked-comments |  |
| [**createCommentPublic()**](PublicApi.md#createCommentPublic) | **POST** /comments/{tenantId} |  |
| [**createFeedPostPublic()**](PublicApi.md#createFeedPostPublic) | **POST** /feed-posts/{tenantId} |  |
| [**deleteCommentPublic()**](PublicApi.md#deleteCommentPublic) | **DELETE** /comments/{tenantId}/{commentId} |  |
| [**deleteCommentVote()**](PublicApi.md#deleteCommentVote) | **DELETE** /comments/{tenantId}/{commentId}/vote/{voteId} |  |
| [**deleteFeedPostPublic()**](PublicApi.md#deleteFeedPostPublic) | **DELETE** /feed-posts/{tenantId}/{postId} |  |
| [**flagCommentPublic()**](PublicApi.md#flagCommentPublic) | **POST** /flag-comment/{commentId} |  |
| [**getCommentText()**](PublicApi.md#getCommentText) | **GET** /comments/{tenantId}/{commentId}/text |  |
| [**getCommentVoteUserNames()**](PublicApi.md#getCommentVoteUserNames) | **GET** /comments/{tenantId}/{commentId}/votes |  |
| [**getCommentsPublic()**](PublicApi.md#getCommentsPublic) | **GET** /comments/{tenantId} |  |
| [**getEventLog()**](PublicApi.md#getEventLog) | **GET** /event-log/{tenantId} |  |
| [**getFeedPostsPublic()**](PublicApi.md#getFeedPostsPublic) | **GET** /feed-posts/{tenantId} |  |
| [**getFeedPostsStats()**](PublicApi.md#getFeedPostsStats) | **GET** /feed-posts/{tenantId}/stats |  |
| [**getGlobalEventLog()**](PublicApi.md#getGlobalEventLog) | **GET** /event-log/global/{tenantId} |  |
| [**getUserNotificationCount()**](PublicApi.md#getUserNotificationCount) | **GET** /user-notifications/get-count |  |
| [**getUserNotifications()**](PublicApi.md#getUserNotifications) | **GET** /user-notifications |  |
| [**getUserPresenceStatuses()**](PublicApi.md#getUserPresenceStatuses) | **GET** /user-presence-status |  |
| [**getUserReactsPublic()**](PublicApi.md#getUserReactsPublic) | **GET** /feed-posts/{tenantId}/user-reacts |  |
| [**lockComment()**](PublicApi.md#lockComment) | **POST** /comments/{tenantId}/{commentId}/lock |  |
| [**pinComment()**](PublicApi.md#pinComment) | **POST** /comments/{tenantId}/{commentId}/pin |  |
| [**reactFeedPostPublic()**](PublicApi.md#reactFeedPostPublic) | **POST** /feed-posts/{tenantId}/react/{postId} |  |
| [**resetUserNotificationCount()**](PublicApi.md#resetUserNotificationCount) | **POST** /user-notifications/reset-count |  |
| [**resetUserNotifications()**](PublicApi.md#resetUserNotifications) | **POST** /user-notifications/reset |  |
| [**searchUsers()**](PublicApi.md#searchUsers) | **GET** /user-search/{tenantId} |  |
| [**setCommentText()**](PublicApi.md#setCommentText) | **POST** /comments/{tenantId}/{commentId}/update-text |  |
| [**unBlockCommentPublic()**](PublicApi.md#unBlockCommentPublic) | **DELETE** /block-from-comment/{commentId} |  |
| [**unLockComment()**](PublicApi.md#unLockComment) | **POST** /comments/{tenantId}/{commentId}/unlock |  |
| [**unPinComment()**](PublicApi.md#unPinComment) | **POST** /comments/{tenantId}/{commentId}/unpin |  |
| [**updateFeedPostPublic()**](PublicApi.md#updateFeedPostPublic) | **PUT** /feed-posts/{tenantId}/{postId} |  |
| [**updateUserNotificationCommentSubscriptionStatus()**](PublicApi.md#updateUserNotificationCommentSubscriptionStatus) | **POST** /user-notifications/{notificationId}/mark-opted/{optedInOrOut} |  |
| [**updateUserNotificationPageSubscriptionStatus()**](PublicApi.md#updateUserNotificationPageSubscriptionStatus) | **POST** /user-notifications/set-subscription-state/{subscribedOrUnsubscribed} |  |
| [**updateUserNotificationStatus()**](PublicApi.md#updateUserNotificationStatus) | **POST** /user-notifications/{notificationId}/mark/{newStatus} |  |
| [**uploadImage()**](PublicApi.md#uploadImage) | **POST** /upload-image/{tenantId} |  |
| [**voteComment()**](PublicApi.md#voteComment) | **POST** /comments/{tenantId}/{commentId}/vote |  |


## `blockFromCommentPublic()`

```php
blockFromCommentPublic($tenant_id, $comment_id, $public_block_from_comment_params, $sso): \FastComments\Client\Model\BlockFromCommentPublic200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$public_block_from_comment_params = new \FastComments\Client\Model\PublicBlockFromCommentParams(); // \FastComments\Client\Model\PublicBlockFromCommentParams
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->blockFromCommentPublic($tenant_id, $comment_id, $public_block_from_comment_params, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->blockFromCommentPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **public_block_from_comment_params** | [**\FastComments\Client\Model\PublicBlockFromCommentParams**](../Model/PublicBlockFromCommentParams.md)|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\BlockFromCommentPublic200Response**](../Model/BlockFromCommentPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkedCommentsForBlocked()`

```php
checkedCommentsForBlocked($tenant_id, $comment_ids, $sso): \FastComments\Client\Model\CheckedCommentsForBlocked200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_ids = 'comment_ids_example'; // string | A comma separated list of comment ids.
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->checkedCommentsForBlocked($tenant_id, $comment_ids, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->checkedCommentsForBlocked: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_ids** | **string**| A comma separated list of comment ids. | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\CheckedCommentsForBlocked200Response**](../Model/CheckedCommentsForBlocked200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCommentPublic()`

```php
createCommentPublic($tenant_id, $url_id, $broadcast_id, $comment_data, $session_id, $sso): \FastComments\Client\Model\CreateCommentPublic200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$url_id = 'url_id_example'; // string
$broadcast_id = 'broadcast_id_example'; // string
$comment_data = new \FastComments\Client\Model\CommentData(); // \FastComments\Client\Model\CommentData
$session_id = 'session_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->createCommentPublic($tenant_id, $url_id, $broadcast_id, $comment_data, $session_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createCommentPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **broadcast_id** | **string**|  | |
| **comment_data** | [**\FastComments\Client\Model\CommentData**](../Model/CommentData.md)|  | |
| **session_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\CreateCommentPublic200Response**](../Model/CreateCommentPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFeedPostPublic()`

```php
createFeedPostPublic($tenant_id, $create_feed_post_params, $broadcast_id, $sso): \FastComments\Client\Model\CreateFeedPostPublic200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$create_feed_post_params = new \FastComments\Client\Model\CreateFeedPostParams(); // \FastComments\Client\Model\CreateFeedPostParams
$broadcast_id = 'broadcast_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->createFeedPostPublic($tenant_id, $create_feed_post_params, $broadcast_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createFeedPostPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_feed_post_params** | [**\FastComments\Client\Model\CreateFeedPostParams**](../Model/CreateFeedPostParams.md)|  | |
| **broadcast_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\CreateFeedPostPublic200Response**](../Model/CreateFeedPostPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommentPublic()`

```php
deleteCommentPublic($tenant_id, $comment_id, $broadcast_id, $edit_key, $sso): \FastComments\Client\Model\DeleteCommentPublic200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$broadcast_id = 'broadcast_id_example'; // string
$edit_key = 'edit_key_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->deleteCommentPublic($tenant_id, $comment_id, $broadcast_id, $edit_key, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->deleteCommentPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **broadcast_id** | **string**|  | |
| **edit_key** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\DeleteCommentPublic200Response**](../Model/DeleteCommentPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommentVote()`

```php
deleteCommentVote($tenant_id, $comment_id, $vote_id, $url_id, $broadcast_id, $edit_key, $sso): \FastComments\Client\Model\DeleteCommentVote200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$vote_id = 'vote_id_example'; // string
$url_id = 'url_id_example'; // string
$broadcast_id = 'broadcast_id_example'; // string
$edit_key = 'edit_key_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->deleteCommentVote($tenant_id, $comment_id, $vote_id, $url_id, $broadcast_id, $edit_key, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->deleteCommentVote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **vote_id** | **string**|  | |
| **url_id** | **string**|  | |
| **broadcast_id** | **string**|  | |
| **edit_key** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\DeleteCommentVote200Response**](../Model/DeleteCommentVote200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFeedPostPublic()`

```php
deleteFeedPostPublic($tenant_id, $post_id, $broadcast_id, $sso): \FastComments\Client\Model\DeleteFeedPostPublic200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$post_id = 'post_id_example'; // string
$broadcast_id = 'broadcast_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->deleteFeedPostPublic($tenant_id, $post_id, $broadcast_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->deleteFeedPostPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **post_id** | **string**|  | |
| **broadcast_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\DeleteFeedPostPublic200Response**](../Model/DeleteFeedPostPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flagCommentPublic()`

```php
flagCommentPublic($tenant_id, $comment_id, $is_flagged, $sso): \FastComments\Client\Model\FlagCommentPublic200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$is_flagged = True; // bool
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->flagCommentPublic($tenant_id, $comment_id, $is_flagged, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->flagCommentPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **is_flagged** | **bool**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\FlagCommentPublic200Response**](../Model/FlagCommentPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentText()`

```php
getCommentText($tenant_id, $comment_id, $edit_key, $sso): \FastComments\Client\Model\GetCommentText200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$edit_key = 'edit_key_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getCommentText($tenant_id, $comment_id, $edit_key, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getCommentText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **edit_key** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetCommentText200Response**](../Model/GetCommentText200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentVoteUserNames()`

```php
getCommentVoteUserNames($tenant_id, $comment_id, $dir, $sso): \FastComments\Client\Model\GetCommentVoteUserNames200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$dir = 3.4; // float
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getCommentVoteUserNames($tenant_id, $comment_id, $dir, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getCommentVoteUserNames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **dir** | **float**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetCommentVoteUserNames200Response**](../Model/GetCommentVoteUserNames200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentsPublic()`

```php
getCommentsPublic($tenant_id, $url_id, $page, $direction, $sso, $skip, $skip_children, $limit, $limit_children, $count_children, $fetch_page_for_comment_id, $include_config, $count_all, $includei10n, $locale, $modules, $is_crawler, $include_notification_count, $as_tree, $max_tree_depth, $use_full_translation_ids, $parent_id, $search_text, $hash_tags, $user_id, $custom_config_str, $after_comment_id, $before_comment_id): \FastComments\Client\Model\GetCommentsPublic200Response
```



req tenantId urlId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$url_id = 'url_id_example'; // string
$page = 56; // int
$direction = new \FastComments\Client\Model\\FastComments\Client\Model\SortDirections(); // \FastComments\Client\Model\SortDirections
$sso = 'sso_example'; // string
$skip = 56; // int
$skip_children = 56; // int
$limit = 56; // int
$limit_children = 56; // int
$count_children = True; // bool
$fetch_page_for_comment_id = 'fetch_page_for_comment_id_example'; // string
$include_config = True; // bool
$count_all = True; // bool
$includei10n = True; // bool
$locale = 'locale_example'; // string
$modules = 'modules_example'; // string
$is_crawler = True; // bool
$include_notification_count = True; // bool
$as_tree = True; // bool
$max_tree_depth = 56; // int
$use_full_translation_ids = True; // bool
$parent_id = 'parent_id_example'; // string
$search_text = 'search_text_example'; // string
$hash_tags = array('hash_tags_example'); // string[]
$user_id = 'user_id_example'; // string
$custom_config_str = 'custom_config_str_example'; // string
$after_comment_id = 'after_comment_id_example'; // string
$before_comment_id = 'before_comment_id_example'; // string

try {
    $result = $apiInstance->getCommentsPublic($tenant_id, $url_id, $page, $direction, $sso, $skip, $skip_children, $limit, $limit_children, $count_children, $fetch_page_for_comment_id, $include_config, $count_all, $includei10n, $locale, $modules, $is_crawler, $include_notification_count, $as_tree, $max_tree_depth, $use_full_translation_ids, $parent_id, $search_text, $hash_tags, $user_id, $custom_config_str, $after_comment_id, $before_comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getCommentsPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **page** | **int**|  | [optional] |
| **direction** | [**\FastComments\Client\Model\SortDirections**](../Model/.md)|  | [optional] |
| **sso** | **string**|  | [optional] |
| **skip** | **int**|  | [optional] |
| **skip_children** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **limit_children** | **int**|  | [optional] |
| **count_children** | **bool**|  | [optional] |
| **fetch_page_for_comment_id** | **string**|  | [optional] |
| **include_config** | **bool**|  | [optional] |
| **count_all** | **bool**|  | [optional] |
| **includei10n** | **bool**|  | [optional] |
| **locale** | **string**|  | [optional] |
| **modules** | **string**|  | [optional] |
| **is_crawler** | **bool**|  | [optional] |
| **include_notification_count** | **bool**|  | [optional] |
| **as_tree** | **bool**|  | [optional] |
| **max_tree_depth** | **int**|  | [optional] |
| **use_full_translation_ids** | **bool**|  | [optional] |
| **parent_id** | **string**|  | [optional] |
| **search_text** | **string**|  | [optional] |
| **hash_tags** | [**string[]**](../Model/string.md)|  | [optional] |
| **user_id** | **string**|  | [optional] |
| **custom_config_str** | **string**|  | [optional] |
| **after_comment_id** | **string**|  | [optional] |
| **before_comment_id** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetCommentsPublic200Response**](../Model/GetCommentsPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEventLog()`

```php
getEventLog($tenant_id, $url_id, $user_id_ws, $start_time, $end_time): \FastComments\Client\Model\GetEventLog200Response
```



req tenantId urlId userIdWS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$url_id = 'url_id_example'; // string
$user_id_ws = 'user_id_ws_example'; // string
$start_time = 56; // int
$end_time = 56; // int

try {
    $result = $apiInstance->getEventLog($tenant_id, $url_id, $user_id_ws, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getEventLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **user_id_ws** | **string**|  | |
| **start_time** | **int**|  | |
| **end_time** | **int**|  | |

### Return type

[**\FastComments\Client\Model\GetEventLog200Response**](../Model/GetEventLog200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedPostsPublic()`

```php
getFeedPostsPublic($tenant_id, $after_id, $limit, $tags, $sso, $is_crawler, $include_user_info): \FastComments\Client\Model\GetFeedPostsPublic200Response
```



req tenantId afterId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$after_id = 'after_id_example'; // string
$limit = 56; // int
$tags = array('tags_example'); // string[]
$sso = 'sso_example'; // string
$is_crawler = True; // bool
$include_user_info = True; // bool

try {
    $result = $apiInstance->getFeedPostsPublic($tenant_id, $after_id, $limit, $tags, $sso, $is_crawler, $include_user_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getFeedPostsPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **after_id** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **tags** | [**string[]**](../Model/string.md)|  | [optional] |
| **sso** | **string**|  | [optional] |
| **is_crawler** | **bool**|  | [optional] |
| **include_user_info** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetFeedPostsPublic200Response**](../Model/GetFeedPostsPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeedPostsStats()`

```php
getFeedPostsStats($tenant_id, $post_ids, $sso): \FastComments\Client\Model\GetFeedPostsStats200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$post_ids = array('post_ids_example'); // string[]
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getFeedPostsStats($tenant_id, $post_ids, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getFeedPostsStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **post_ids** | [**string[]**](../Model/string.md)|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetFeedPostsStats200Response**](../Model/GetFeedPostsStats200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGlobalEventLog()`

```php
getGlobalEventLog($tenant_id, $url_id, $user_id_ws, $start_time, $end_time): \FastComments\Client\Model\GetEventLog200Response
```



req tenantId urlId userIdWS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$url_id = 'url_id_example'; // string
$user_id_ws = 'user_id_ws_example'; // string
$start_time = 56; // int
$end_time = 56; // int

try {
    $result = $apiInstance->getGlobalEventLog($tenant_id, $url_id, $user_id_ws, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getGlobalEventLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **user_id_ws** | **string**|  | |
| **start_time** | **int**|  | |
| **end_time** | **int**|  | |

### Return type

[**\FastComments\Client\Model\GetEventLog200Response**](../Model/GetEventLog200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserNotificationCount()`

```php
getUserNotificationCount($tenant_id, $sso): \FastComments\Client\Model\GetUserNotificationCount200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getUserNotificationCount($tenant_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getUserNotificationCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetUserNotificationCount200Response**](../Model/GetUserNotificationCount200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserNotifications()`

```php
getUserNotifications($tenant_id, $page_size, $after_id, $include_context, $after_created_at, $unread_only, $dm_only, $no_dm, $include_translations, $sso): \FastComments\Client\Model\GetUserNotifications200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$page_size = 3.4; // float | Defaults to 20.
$after_id = 'after_id_example'; // string
$include_context = True; // bool
$after_created_at = 3.4; // float
$unread_only = True; // bool
$dm_only = True; // bool
$no_dm = True; // bool
$include_translations = True; // bool
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getUserNotifications($tenant_id, $page_size, $after_id, $include_context, $after_created_at, $unread_only, $dm_only, $no_dm, $include_translations, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getUserNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **page_size** | **float**| Defaults to 20. | [optional] |
| **after_id** | **string**|  | [optional] |
| **include_context** | **bool**|  | [optional] |
| **after_created_at** | **float**|  | [optional] |
| **unread_only** | **bool**|  | [optional] |
| **dm_only** | **bool**|  | [optional] |
| **no_dm** | **bool**|  | [optional] |
| **include_translations** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetUserNotifications200Response**](../Model/GetUserNotifications200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPresenceStatuses()`

```php
getUserPresenceStatuses($tenant_id, $url_id_ws, $user_ids): \FastComments\Client\Model\GetUserPresenceStatuses200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$url_id_ws = 'url_id_ws_example'; // string
$user_ids = 'user_ids_example'; // string

try {
    $result = $apiInstance->getUserPresenceStatuses($tenant_id, $url_id_ws, $user_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getUserPresenceStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id_ws** | **string**|  | |
| **user_ids** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetUserPresenceStatuses200Response**](../Model/GetUserPresenceStatuses200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserReactsPublic()`

```php
getUserReactsPublic($tenant_id, $post_ids, $sso): \FastComments\Client\Model\GetUserReactsPublic200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$post_ids = array('post_ids_example'); // string[]
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->getUserReactsPublic($tenant_id, $post_ids, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getUserReactsPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **post_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetUserReactsPublic200Response**](../Model/GetUserReactsPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lockComment()`

```php
lockComment($tenant_id, $comment_id, $broadcast_id, $sso): \FastComments\Client\Model\LockComment200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$broadcast_id = 'broadcast_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->lockComment($tenant_id, $comment_id, $broadcast_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->lockComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **broadcast_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\LockComment200Response**](../Model/LockComment200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pinComment()`

```php
pinComment($tenant_id, $comment_id, $broadcast_id, $sso): \FastComments\Client\Model\PinComment200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$broadcast_id = 'broadcast_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->pinComment($tenant_id, $comment_id, $broadcast_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->pinComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **broadcast_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\PinComment200Response**](../Model/PinComment200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reactFeedPostPublic()`

```php
reactFeedPostPublic($tenant_id, $post_id, $react_body_params, $is_undo, $broadcast_id, $sso): \FastComments\Client\Model\ReactFeedPostPublic200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$post_id = 'post_id_example'; // string
$react_body_params = new \FastComments\Client\Model\ReactBodyParams(); // \FastComments\Client\Model\ReactBodyParams
$is_undo = True; // bool
$broadcast_id = 'broadcast_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->reactFeedPostPublic($tenant_id, $post_id, $react_body_params, $is_undo, $broadcast_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->reactFeedPostPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **post_id** | **string**|  | |
| **react_body_params** | [**\FastComments\Client\Model\ReactBodyParams**](../Model/ReactBodyParams.md)|  | |
| **is_undo** | **bool**|  | [optional] |
| **broadcast_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ReactFeedPostPublic200Response**](../Model/ReactFeedPostPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetUserNotificationCount()`

```php
resetUserNotificationCount($tenant_id, $sso): \FastComments\Client\Model\ResetUserNotifications200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->resetUserNotificationCount($tenant_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->resetUserNotificationCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ResetUserNotifications200Response**](../Model/ResetUserNotifications200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetUserNotifications()`

```php
resetUserNotifications($tenant_id, $after_id, $after_created_at, $unread_only, $dm_only, $no_dm, $sso): \FastComments\Client\Model\ResetUserNotifications200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$after_id = 'after_id_example'; // string
$after_created_at = 3.4; // float
$unread_only = True; // bool
$dm_only = True; // bool
$no_dm = True; // bool
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->resetUserNotifications($tenant_id, $after_id, $after_created_at, $unread_only, $dm_only, $no_dm, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->resetUserNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **after_id** | **string**|  | [optional] |
| **after_created_at** | **float**|  | [optional] |
| **unread_only** | **bool**|  | [optional] |
| **dm_only** | **bool**|  | [optional] |
| **no_dm** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ResetUserNotifications200Response**](../Model/ResetUserNotifications200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchUsers()`

```php
searchUsers($tenant_id, $url_id, $username_starts_with, $mention_group_ids, $sso): \FastComments\Client\Model\SearchUsers200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$url_id = 'url_id_example'; // string
$username_starts_with = 'username_starts_with_example'; // string
$mention_group_ids = array('mention_group_ids_example'); // string[]
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->searchUsers($tenant_id, $url_id, $username_starts_with, $mention_group_ids, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->searchUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **username_starts_with** | **string**|  | |
| **mention_group_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\SearchUsers200Response**](../Model/SearchUsers200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCommentText()`

```php
setCommentText($tenant_id, $comment_id, $broadcast_id, $comment_text_update_request, $edit_key, $sso): \FastComments\Client\Model\SetCommentText200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$broadcast_id = 'broadcast_id_example'; // string
$comment_text_update_request = new \FastComments\Client\Model\CommentTextUpdateRequest(); // \FastComments\Client\Model\CommentTextUpdateRequest
$edit_key = 'edit_key_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->setCommentText($tenant_id, $comment_id, $broadcast_id, $comment_text_update_request, $edit_key, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->setCommentText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **broadcast_id** | **string**|  | |
| **comment_text_update_request** | [**\FastComments\Client\Model\CommentTextUpdateRequest**](../Model/CommentTextUpdateRequest.md)|  | |
| **edit_key** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\SetCommentText200Response**](../Model/SetCommentText200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unBlockCommentPublic()`

```php
unBlockCommentPublic($tenant_id, $comment_id, $public_block_from_comment_params, $sso): \FastComments\Client\Model\UnBlockCommentPublic200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$public_block_from_comment_params = new \FastComments\Client\Model\PublicBlockFromCommentParams(); // \FastComments\Client\Model\PublicBlockFromCommentParams
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->unBlockCommentPublic($tenant_id, $comment_id, $public_block_from_comment_params, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->unBlockCommentPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **public_block_from_comment_params** | [**\FastComments\Client\Model\PublicBlockFromCommentParams**](../Model/PublicBlockFromCommentParams.md)|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\UnBlockCommentPublic200Response**](../Model/UnBlockCommentPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unLockComment()`

```php
unLockComment($tenant_id, $comment_id, $broadcast_id, $sso): \FastComments\Client\Model\LockComment200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$broadcast_id = 'broadcast_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->unLockComment($tenant_id, $comment_id, $broadcast_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->unLockComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **broadcast_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\LockComment200Response**](../Model/LockComment200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unPinComment()`

```php
unPinComment($tenant_id, $comment_id, $broadcast_id, $sso): \FastComments\Client\Model\PinComment200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$broadcast_id = 'broadcast_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->unPinComment($tenant_id, $comment_id, $broadcast_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->unPinComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **broadcast_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\PinComment200Response**](../Model/PinComment200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFeedPostPublic()`

```php
updateFeedPostPublic($tenant_id, $post_id, $update_feed_post_params, $broadcast_id, $sso): \FastComments\Client\Model\CreateFeedPostPublic200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$post_id = 'post_id_example'; // string
$update_feed_post_params = new \FastComments\Client\Model\UpdateFeedPostParams(); // \FastComments\Client\Model\UpdateFeedPostParams
$broadcast_id = 'broadcast_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->updateFeedPostPublic($tenant_id, $post_id, $update_feed_post_params, $broadcast_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->updateFeedPostPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **post_id** | **string**|  | |
| **update_feed_post_params** | [**\FastComments\Client\Model\UpdateFeedPostParams**](../Model/UpdateFeedPostParams.md)|  | |
| **broadcast_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\CreateFeedPostPublic200Response**](../Model/CreateFeedPostPublic200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserNotificationCommentSubscriptionStatus()`

```php
updateUserNotificationCommentSubscriptionStatus($tenant_id, $notification_id, $opted_in_or_out, $comment_id, $sso): \FastComments\Client\Model\UpdateUserNotificationStatus200Response
```



Enable or disable notifications for a specific comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$notification_id = 'notification_id_example'; // string
$opted_in_or_out = 'opted_in_or_out_example'; // string
$comment_id = 'comment_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->updateUserNotificationCommentSubscriptionStatus($tenant_id, $notification_id, $opted_in_or_out, $comment_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->updateUserNotificationCommentSubscriptionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **notification_id** | **string**|  | |
| **opted_in_or_out** | **string**|  | |
| **comment_id** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\UpdateUserNotificationStatus200Response**](../Model/UpdateUserNotificationStatus200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserNotificationPageSubscriptionStatus()`

```php
updateUserNotificationPageSubscriptionStatus($tenant_id, $url_id, $url, $page_title, $subscribed_or_unsubscribed, $sso): \FastComments\Client\Model\UpdateUserNotificationStatus200Response
```



Enable or disable notifications for a page. When users are subscribed to a page, notifications are created for new root comments, and also

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$url_id = 'url_id_example'; // string
$url = 'url_example'; // string
$page_title = 'page_title_example'; // string
$subscribed_or_unsubscribed = 'subscribed_or_unsubscribed_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->updateUserNotificationPageSubscriptionStatus($tenant_id, $url_id, $url, $page_title, $subscribed_or_unsubscribed, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->updateUserNotificationPageSubscriptionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **url** | **string**|  | |
| **page_title** | **string**|  | |
| **subscribed_or_unsubscribed** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\UpdateUserNotificationStatus200Response**](../Model/UpdateUserNotificationStatus200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserNotificationStatus()`

```php
updateUserNotificationStatus($tenant_id, $notification_id, $new_status, $sso): \FastComments\Client\Model\UpdateUserNotificationStatus200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$notification_id = 'notification_id_example'; // string
$new_status = 'new_status_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->updateUserNotificationStatus($tenant_id, $notification_id, $new_status, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->updateUserNotificationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **notification_id** | **string**|  | |
| **new_status** | **string**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\UpdateUserNotificationStatus200Response**](../Model/UpdateUserNotificationStatus200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadImage()`

```php
uploadImage($tenant_id, $file, $size_preset, $url_id): \FastComments\Client\Model\UploadImageResponse
```



Upload and resize an image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject
$size_preset = new \FastComments\Client\Model\\FastComments\Client\Model\SizePreset(); // \FastComments\Client\Model\SizePreset | Size preset: \"Default\" (1000x1000px) or \"CrossPlatform\" (creates sizes for popular devices)
$url_id = 'url_id_example'; // string | Page id that upload is happening from, to configure

try {
    $result = $apiInstance->uploadImage($tenant_id, $file, $size_preset, $url_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->uploadImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **size_preset** | [**\FastComments\Client\Model\SizePreset**](../Model/.md)| Size preset: \&quot;Default\&quot; (1000x1000px) or \&quot;CrossPlatform\&quot; (creates sizes for popular devices) | [optional] |
| **url_id** | **string**| Page id that upload is happening from, to configure | [optional] |

### Return type

[**\FastComments\Client\Model\UploadImageResponse**](../Model/UploadImageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voteComment()`

```php
voteComment($tenant_id, $comment_id, $url_id, $broadcast_id, $vote_body_params, $session_id, $sso): \FastComments\Client\Model\VoteComment200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new FastComments\Client\Api\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string
$comment_id = 'comment_id_example'; // string
$url_id = 'url_id_example'; // string
$broadcast_id = 'broadcast_id_example'; // string
$vote_body_params = new \FastComments\Client\Model\VoteBodyParams(); // \FastComments\Client\Model\VoteBodyParams
$session_id = 'session_id_example'; // string
$sso = 'sso_example'; // string

try {
    $result = $apiInstance->voteComment($tenant_id, $comment_id, $url_id, $broadcast_id, $vote_body_params, $session_id, $sso);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->voteComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **url_id** | **string**|  | |
| **broadcast_id** | **string**|  | |
| **vote_body_params** | [**\FastComments\Client\Model\VoteBodyParams**](../Model/VoteBodyParams.md)|  | |
| **session_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\VoteComment200Response**](../Model/VoteComment200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
