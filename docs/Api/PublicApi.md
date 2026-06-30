# FastComments\Client\PublicApi



All URIs are relative to https://fastcomments.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blockFromCommentPublic()**](PublicApi.md#blockFromCommentPublic) | **POST** /block-from-comment/{commentId} |  |
| [**checkedCommentsForBlocked()**](PublicApi.md#checkedCommentsForBlocked) | **GET** /check-blocked-comments |  |
| [**createCommentPublic()**](PublicApi.md#createCommentPublic) | **POST** /comments/{tenantId} |  |
| [**createFeedPostPublic()**](PublicApi.md#createFeedPostPublic) | **POST** /feed-posts/{tenantId} |  |
| [**createV1PageReact()**](PublicApi.md#createV1PageReact) | **POST** /page-reacts/v1/likes/{tenantId} |  |
| [**createV2PageReact()**](PublicApi.md#createV2PageReact) | **POST** /page-reacts/v2/{tenantId} |  |
| [**deleteCommentPublic()**](PublicApi.md#deleteCommentPublic) | **DELETE** /comments/{tenantId}/{commentId} |  |
| [**deleteCommentVote()**](PublicApi.md#deleteCommentVote) | **DELETE** /comments/{tenantId}/{commentId}/vote/{voteId} |  |
| [**deleteFeedPostPublic()**](PublicApi.md#deleteFeedPostPublic) | **DELETE** /feed-posts/{tenantId}/{postId} |  |
| [**deleteV1PageReact()**](PublicApi.md#deleteV1PageReact) | **DELETE** /page-reacts/v1/likes/{tenantId} |  |
| [**deleteV2PageReact()**](PublicApi.md#deleteV2PageReact) | **DELETE** /page-reacts/v2/{tenantId} |  |
| [**flagCommentPublic()**](PublicApi.md#flagCommentPublic) | **POST** /flag-comment/{commentId} |  |
| [**getCommentText()**](PublicApi.md#getCommentText) | **GET** /comments/{tenantId}/{commentId}/text |  |
| [**getCommentVoteUserNames()**](PublicApi.md#getCommentVoteUserNames) | **GET** /comments/{tenantId}/{commentId}/votes |  |
| [**getCommentsForUser()**](PublicApi.md#getCommentsForUser) | **GET** /comments-for-user |  |
| [**getCommentsPublic()**](PublicApi.md#getCommentsPublic) | **GET** /comments/{tenantId} |  |
| [**getEventLog()**](PublicApi.md#getEventLog) | **GET** /event-log/{tenantId} |  |
| [**getFeedPostsPublic()**](PublicApi.md#getFeedPostsPublic) | **GET** /feed-posts/{tenantId} |  |
| [**getFeedPostsStats()**](PublicApi.md#getFeedPostsStats) | **GET** /feed-posts/{tenantId}/stats |  |
| [**getGifLarge()**](PublicApi.md#getGifLarge) | **GET** /gifs/get-large/{tenantId} |  |
| [**getGifsSearch()**](PublicApi.md#getGifsSearch) | **GET** /gifs/search/{tenantId} |  |
| [**getGifsTrending()**](PublicApi.md#getGifsTrending) | **GET** /gifs/trending/{tenantId} |  |
| [**getGlobalEventLog()**](PublicApi.md#getGlobalEventLog) | **GET** /event-log/global/{tenantId} |  |
| [**getOfflineUsers()**](PublicApi.md#getOfflineUsers) | **GET** /pages/{tenantId}/users/offline |  |
| [**getOnlineUsers()**](PublicApi.md#getOnlineUsers) | **GET** /pages/{tenantId}/users/online |  |
| [**getPagesPublic()**](PublicApi.md#getPagesPublic) | **GET** /pages/{tenantId} |  |
| [**getTranslations()**](PublicApi.md#getTranslations) | **GET** /translations/{namespace}/{component} |  |
| [**getUserNotificationCount()**](PublicApi.md#getUserNotificationCount) | **GET** /user-notifications/get-count |  |
| [**getUserNotifications()**](PublicApi.md#getUserNotifications) | **GET** /user-notifications |  |
| [**getUserPresenceStatuses()**](PublicApi.md#getUserPresenceStatuses) | **GET** /user-presence-status |  |
| [**getUserReactsPublic()**](PublicApi.md#getUserReactsPublic) | **GET** /feed-posts/{tenantId}/user-reacts |  |
| [**getUsersInfo()**](PublicApi.md#getUsersInfo) | **GET** /pages/{tenantId}/users/info |  |
| [**getV1PageLikes()**](PublicApi.md#getV1PageLikes) | **GET** /page-reacts/v1/likes/{tenantId} |  |
| [**getV2PageReactUsers()**](PublicApi.md#getV2PageReactUsers) | **GET** /page-reacts/v2/{tenantId}/list |  |
| [**getV2PageReacts()**](PublicApi.md#getV2PageReacts) | **GET** /page-reacts/v2/{tenantId} |  |
| [**lockComment()**](PublicApi.md#lockComment) | **POST** /comments/{tenantId}/{commentId}/lock |  |
| [**logoutPublic()**](PublicApi.md#logoutPublic) | **PUT** /auth/logout |  |
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
blockFromCommentPublic($tenant_id, $comment_id, $public_block_from_comment_params, $sso): \FastComments\Client\Model\BlockSuccess
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

[**\FastComments\Client\Model\BlockSuccess**](../Model/BlockSuccess.md)

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
checkedCommentsForBlocked($tenant_id, $comment_ids, $sso): \FastComments\Client\Model\CheckBlockedCommentsResponse
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

[**\FastComments\Client\Model\CheckBlockedCommentsResponse**](../Model/CheckBlockedCommentsResponse.md)

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
createCommentPublic($tenant_id, $url_id, $broadcast_id, $comment_data, $options): \FastComments\Client\Model\SaveCommentsResponseWithPresence
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
$options = [
    'session_id' => 'session_id_example', // string
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->createCommentPublic($tenant_id, $url_id, $broadcast_id, $comment_data, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createCommentPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **broadcast_id** | **string**|  | |
| **comment_data** | [**\FastComments\Client\Model\CommentData**](../Model/CommentData.md)|  | |
| **session_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\SaveCommentsResponseWithPresence**](../Model/SaveCommentsResponseWithPresence.md)

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
createFeedPostPublic($tenant_id, $create_feed_post_params, $options): \FastComments\Client\Model\CreateFeedPostResponse
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
$options = [
    'broadcast_id' => 'broadcast_id_example', // string
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->createFeedPostPublic($tenant_id, $create_feed_post_params, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createFeedPostPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **create_feed_post_params** | [**\FastComments\Client\Model\CreateFeedPostParams**](../Model/CreateFeedPostParams.md)|  | |
| **broadcast_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\CreateFeedPostResponse**](../Model/CreateFeedPostResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createV1PageReact()`

```php
createV1PageReact($tenant_id, $url_id, $title): \FastComments\Client\Model\CreateV1PageReact
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
$title = 'title_example'; // string


try {
    $result = $apiInstance->createV1PageReact($tenant_id, $url_id, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createV1PageReact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **title** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\CreateV1PageReact**](../Model/CreateV1PageReact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createV2PageReact()`

```php
createV2PageReact($tenant_id, $url_id, $id, $title): \FastComments\Client\Model\CreateV1PageReact
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
$id = 'id_example'; // string
$title = 'title_example'; // string


try {
    $result = $apiInstance->createV2PageReact($tenant_id, $url_id, $id, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->createV2PageReact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **id** | **string**|  | |
| **title** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\CreateV1PageReact**](../Model/CreateV1PageReact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCommentPublic()`

```php
deleteCommentPublic($tenant_id, $comment_id, $broadcast_id, $options): \FastComments\Client\Model\PublicAPIDeleteCommentResponse
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
$options = [
    'edit_key' => 'edit_key_example', // string
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->deleteCommentPublic($tenant_id, $comment_id, $broadcast_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->deleteCommentPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **broadcast_id** | **string**|  | |
| **edit_key** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\PublicAPIDeleteCommentResponse**](../Model/PublicAPIDeleteCommentResponse.md)

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
deleteCommentVote($tenant_id, $comment_id, $vote_id, $url_id, $broadcast_id, $options): \FastComments\Client\Model\VoteDeleteResponse
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
$options = [
    'edit_key' => 'edit_key_example', // string
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->deleteCommentVote($tenant_id, $comment_id, $vote_id, $url_id, $broadcast_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->deleteCommentVote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

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

[**\FastComments\Client\Model\VoteDeleteResponse**](../Model/VoteDeleteResponse.md)

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
deleteFeedPostPublic($tenant_id, $post_id, $options): \FastComments\Client\Model\DeleteFeedPostPublicResponse
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
$options = [
    'broadcast_id' => 'broadcast_id_example', // string
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->deleteFeedPostPublic($tenant_id, $post_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->deleteFeedPostPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **post_id** | **string**|  | |
| **broadcast_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\DeleteFeedPostPublicResponse**](../Model/DeleteFeedPostPublicResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteV1PageReact()`

```php
deleteV1PageReact($tenant_id, $url_id): \FastComments\Client\Model\CreateV1PageReact
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


try {
    $result = $apiInstance->deleteV1PageReact($tenant_id, $url_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->deleteV1PageReact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\CreateV1PageReact**](../Model/CreateV1PageReact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteV2PageReact()`

```php
deleteV2PageReact($tenant_id, $url_id, $id): \FastComments\Client\Model\CreateV1PageReact
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
$id = 'id_example'; // string


try {
    $result = $apiInstance->deleteV2PageReact($tenant_id, $url_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->deleteV2PageReact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\CreateV1PageReact**](../Model/CreateV1PageReact.md)

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
flagCommentPublic($tenant_id, $comment_id, $is_flagged, $sso): \FastComments\Client\Model\APIEmptyResponse
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

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

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
getCommentText($tenant_id, $comment_id, $options): \FastComments\Client\Model\PublicAPIGetCommentTextResponse
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
$options = [
    'edit_key' => 'edit_key_example', // string
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->getCommentText($tenant_id, $comment_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getCommentText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **edit_key** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\PublicAPIGetCommentTextResponse**](../Model/PublicAPIGetCommentTextResponse.md)

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
getCommentVoteUserNames($tenant_id, $comment_id, $dir, $sso): \FastComments\Client\Model\GetCommentVoteUserNamesSuccessResponse
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
$dir = 56; // int
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
| **dir** | **int**|  | |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetCommentVoteUserNamesSuccessResponse**](../Model/GetCommentVoteUserNamesSuccessResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentsForUser()`

```php
getCommentsForUser($options): \FastComments\Client\Model\GetCommentsForUserResponse
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

$options = [
    'user_id' => 'user_id_example', // string
    'direction' => new \FastComments\Client\Model\\FastComments\Client\Model\SortDirections(), // \FastComments\Client\Model\SortDirections
    'replies_to_user_id' => 'replies_to_user_id_example', // string
    'page' => 3.4, // float
    'includei10n' => True, // bool
    'locale' => 'locale_example', // string
    'is_crawler' => True, // bool
];


try {
    $result = $apiInstance->getCommentsForUser($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getCommentsForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | [optional] |
| **direction** | [**\FastComments\Client\Model\SortDirections**](../Model/.md)|  | [optional] |
| **replies_to_user_id** | **string**|  | [optional] |
| **page** | **float**|  | [optional] |
| **includei10n** | **bool**|  | [optional] |
| **locale** | **string**|  | [optional] |
| **is_crawler** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetCommentsForUserResponse**](../Model/GetCommentsForUserResponse.md)

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
getCommentsPublic($tenant_id, $url_id, $options): \FastComments\Client\Model\GetCommentsResponseWithPresencePublicComment
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
$options = [
    'page' => 56, // int
    'direction' => new \FastComments\Client\Model\\FastComments\Client\Model\SortDirections(), // \FastComments\Client\Model\SortDirections
    'sso' => 'sso_example', // string
    'skip' => 56, // int
    'skip_children' => 56, // int
    'limit' => 56, // int
    'limit_children' => 56, // int
    'count_children' => True, // bool
    'fetch_page_for_comment_id' => 'fetch_page_for_comment_id_example', // string
    'include_config' => True, // bool
    'count_all' => True, // bool
    'includei10n' => True, // bool
    'locale' => 'locale_example', // string
    'modules' => 'modules_example', // string
    'is_crawler' => True, // bool
    'include_notification_count' => True, // bool
    'as_tree' => True, // bool
    'max_tree_depth' => 56, // int
    'use_full_translation_ids' => True, // bool
    'parent_id' => 'parent_id_example', // string
    'search_text' => 'search_text_example', // string
    'hash_tags' => array('hash_tags_example'), // string[]
    'user_id' => 'user_id_example', // string
    'custom_config_str' => 'custom_config_str_example', // string
    'after_comment_id' => 'after_comment_id_example', // string
    'before_comment_id' => 'before_comment_id_example', // string
];


try {
    $result = $apiInstance->getCommentsPublic($tenant_id, $url_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getCommentsPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

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

[**\FastComments\Client\Model\GetCommentsResponseWithPresencePublicComment**](../Model/GetCommentsResponseWithPresencePublicComment.md)

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
getEventLog($tenant_id, $url_id, $user_id_ws, $start_time, $end_time): \FastComments\Client\Model\GetEventLogResponse
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
| **end_time** | **int**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetEventLogResponse**](../Model/GetEventLogResponse.md)

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
getFeedPostsPublic($tenant_id, $options): \FastComments\Client\Model\PublicFeedPostsResponse
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
$options = [
    'after_id' => 'after_id_example', // string
    'limit' => 56, // int
    'tags' => array('tags_example'), // string[]
    'sso' => 'sso_example', // string
    'is_crawler' => True, // bool
    'include_user_info' => True, // bool
];


try {
    $result = $apiInstance->getFeedPostsPublic($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getFeedPostsPublic: ', $e->getMessage(), PHP_EOL;
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
| **sso** | **string**|  | [optional] |
| **is_crawler** | **bool**|  | [optional] |
| **include_user_info** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\PublicFeedPostsResponse**](../Model/PublicFeedPostsResponse.md)

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
getFeedPostsStats($tenant_id, $post_ids, $sso): \FastComments\Client\Model\FeedPostsStatsResponse
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

[**\FastComments\Client\Model\FeedPostsStatsResponse**](../Model/FeedPostsStatsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGifLarge()`

```php
getGifLarge($tenant_id, $large_internal_url_sanitized): \FastComments\Client\Model\GifGetLargeResponse
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
$large_internal_url_sanitized = 'large_internal_url_sanitized_example'; // string


try {
    $result = $apiInstance->getGifLarge($tenant_id, $large_internal_url_sanitized);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getGifLarge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **large_internal_url_sanitized** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GifGetLargeResponse**](../Model/GifGetLargeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGifsSearch()`

```php
getGifsSearch($tenant_id, $search, $options): \FastComments\Client\Model\GetGifsSearchResponse
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
$search = 'search_example'; // string
$options = [
    'locale' => 'locale_example', // string
    'rating' => 'rating_example', // string
    'page' => 3.4, // float
];


try {
    $result = $apiInstance->getGifsSearch($tenant_id, $search, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getGifsSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **search** | **string**|  | |
| **locale** | **string**|  | [optional] |
| **rating** | **string**|  | [optional] |
| **page** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetGifsSearchResponse**](../Model/GetGifsSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGifsTrending()`

```php
getGifsTrending($tenant_id, $options): \FastComments\Client\Model\GetGifsTrendingResponse
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
$options = [
    'locale' => 'locale_example', // string
    'rating' => 'rating_example', // string
    'page' => 3.4, // float
];


try {
    $result = $apiInstance->getGifsTrending($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getGifsTrending: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **locale** | **string**|  | [optional] |
| **rating** | **string**|  | [optional] |
| **page** | **float**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetGifsTrendingResponse**](../Model/GetGifsTrendingResponse.md)

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
getGlobalEventLog($tenant_id, $url_id, $user_id_ws, $start_time, $end_time): \FastComments\Client\Model\GetEventLogResponse
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
| **end_time** | **int**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetEventLogResponse**](../Model/GetEventLogResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfflineUsers()`

```php
getOfflineUsers($tenant_id, $url_id, $options): \FastComments\Client\Model\PageUsersOfflineResponse
```



Past commenters on the page who are NOT currently online. Sorted by displayName. Use this after exhausting /users/online to render a \"Members\" section. Cursor pagination on commenterName: server walks the partial {tenantId, urlId, commenterName} index from afterName forward via $gt, no $skip cost.

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
$url_id = 'url_id_example'; // string | Page URL identifier (cleaned server-side).
$options = [
    'after_name' => 'after_name_example', // string | Cursor: pass nextAfterName from the previous response.
    'after_user_id' => 'after_user_id_example', // string | Cursor tiebreaker: pass nextAfterUserId from the previous response. Required when afterName is set so name-ties don't drop entries.
];


try {
    $result = $apiInstance->getOfflineUsers($tenant_id, $url_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getOfflineUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**| Page URL identifier (cleaned server-side). | |
| **after_name** | **string**| Cursor: pass nextAfterName from the previous response. | [optional] |
| **after_user_id** | **string**| Cursor tiebreaker: pass nextAfterUserId from the previous response. Required when afterName is set so name-ties don&#39;t drop entries. | [optional] |

### Return type

[**\FastComments\Client\Model\PageUsersOfflineResponse**](../Model/PageUsersOfflineResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOnlineUsers()`

```php
getOnlineUsers($tenant_id, $url_id, $options): \FastComments\Client\Model\PageUsersOnlineResponse
```



Currently-online viewers of a page: people whose websocket session is subscribed to the page right now. Returns anonCount + totalCount (room-wide subscribers, including anon viewers we don't enumerate).

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
$url_id = 'url_id_example'; // string | Page URL identifier (cleaned server-side).
$options = [
    'after_name' => 'after_name_example', // string | Cursor: pass nextAfterName from the previous response.
    'after_user_id' => 'after_user_id_example', // string | Cursor tiebreaker: pass nextAfterUserId from the previous response. Required when afterName is set so name-ties don't drop entries.
];


try {
    $result = $apiInstance->getOnlineUsers($tenant_id, $url_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getOnlineUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**| Page URL identifier (cleaned server-side). | |
| **after_name** | **string**| Cursor: pass nextAfterName from the previous response. | [optional] |
| **after_user_id** | **string**| Cursor tiebreaker: pass nextAfterUserId from the previous response. Required when afterName is set so name-ties don&#39;t drop entries. | [optional] |

### Return type

[**\FastComments\Client\Model\PageUsersOnlineResponse**](../Model/PageUsersOnlineResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPublic()`

```php
getPagesPublic($tenant_id, $options): \FastComments\Client\Model\GetPublicPagesResponse
```



List pages for a tenant. Used by the FChat desktop client to populate its room list. Requires `enableFChat` to be true on the resolved custom config for each page. Pages that require SSO are filtered against the requesting user's group access.

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
$options = [
    'cursor' => 'cursor_example', // string | Opaque pagination cursor returned as `nextCursor` from a prior request. Tied to the same `sortBy`.
    'limit' => 56, // int | 1..200, default 50
    'q' => 'q_example', // string | Optional case-insensitive title prefix filter.
    'sort_by' => new \FastComments\Client\Model\\FastComments\Client\Model\PagesSortBy(), // \FastComments\Client\Model\PagesSortBy | Sort order. `updatedAt` (default, newest first), `commentCount` (most comments first), or `title` (alphabetical).
    'has_comments' => True, // bool | If true, only return pages with at least one comment.
];


try {
    $result = $apiInstance->getPagesPublic($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getPagesPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **cursor** | **string**| Opaque pagination cursor returned as &#x60;nextCursor&#x60; from a prior request. Tied to the same &#x60;sortBy&#x60;. | [optional] |
| **limit** | **int**| 1..200, default 50 | [optional] |
| **q** | **string**| Optional case-insensitive title prefix filter. | [optional] |
| **sort_by** | [**\FastComments\Client\Model\PagesSortBy**](../Model/.md)| Sort order. &#x60;updatedAt&#x60; (default, newest first), &#x60;commentCount&#x60; (most comments first), or &#x60;title&#x60; (alphabetical). | [optional] |
| **has_comments** | **bool**| If true, only return pages with at least one comment. | [optional] |

### Return type

[**\FastComments\Client\Model\GetPublicPagesResponse**](../Model/GetPublicPagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranslations()`

```php
getTranslations($namespace, $component, $options): \FastComments\Client\Model\GetTranslationsResponse
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

$namespace = 'namespace_example'; // string
$component = 'component_example'; // string
$options = [
    'locale' => 'locale_example', // string
    'use_full_translation_ids' => True, // bool
];


try {
    $result = $apiInstance->getTranslations($namespace, $component, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getTranslations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**|  | |
| **component** | **string**|  | |
| **locale** | **string**|  | [optional] |
| **use_full_translation_ids** | **bool**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetTranslationsResponse**](../Model/GetTranslationsResponse.md)

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
getUserNotificationCount($tenant_id, $sso): \FastComments\Client\Model\GetUserNotificationCountResponse
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

[**\FastComments\Client\Model\GetUserNotificationCountResponse**](../Model/GetUserNotificationCountResponse.md)

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
getUserNotifications($tenant_id, $options): \FastComments\Client\Model\GetMyNotificationsResponse
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
$options = [
    'url_id' => 'url_id_example', // string | Used to determine whether the current page is subscribed.
    'page_size' => 56, // int
    'after_id' => 'after_id_example', // string
    'include_context' => True, // bool
    'after_created_at' => 56, // int
    'unread_only' => True, // bool
    'dm_only' => True, // bool
    'no_dm' => True, // bool
    'include_translations' => True, // bool
    'include_tenant_notifications' => True, // bool
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->getUserNotifications($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getUserNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**| Used to determine whether the current page is subscribed. | [optional] |
| **page_size** | **int**|  | [optional] |
| **after_id** | **string**|  | [optional] |
| **include_context** | **bool**|  | [optional] |
| **after_created_at** | **int**|  | [optional] |
| **unread_only** | **bool**|  | [optional] |
| **dm_only** | **bool**|  | [optional] |
| **no_dm** | **bool**|  | [optional] |
| **include_translations** | **bool**|  | [optional] |
| **include_tenant_notifications** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\GetMyNotificationsResponse**](../Model/GetMyNotificationsResponse.md)

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
getUserPresenceStatuses($tenant_id, $url_id_ws, $user_ids): \FastComments\Client\Model\GetUserPresenceStatusesResponse
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

[**\FastComments\Client\Model\GetUserPresenceStatusesResponse**](../Model/GetUserPresenceStatusesResponse.md)

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
getUserReactsPublic($tenant_id, $options): \FastComments\Client\Model\UserReactsResponse
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
$options = [
    'post_ids' => array('post_ids_example'), // string[]
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->getUserReactsPublic($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getUserReactsPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **post_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\UserReactsResponse**](../Model/UserReactsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersInfo()`

```php
getUsersInfo($tenant_id, $ids): \FastComments\Client\Model\PageUsersInfoResponse
```



Bulk user info for a tenant. Given userIds, return display info from User / SSOUser. Used by the comment widget to enrich users that just appeared via a presence event. No page context: privacy is enforced uniformly (private profiles are masked).

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
$ids = 'ids_example'; // string | Comma-delimited userIds.


try {
    $result = $apiInstance->getUsersInfo($tenant_id, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getUsersInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **ids** | **string**| Comma-delimited userIds. | |

### Return type

[**\FastComments\Client\Model\PageUsersInfoResponse**](../Model/PageUsersInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV1PageLikes()`

```php
getV1PageLikes($tenant_id, $url_id): \FastComments\Client\Model\GetV1PageLikes
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


try {
    $result = $apiInstance->getV1PageLikes($tenant_id, $url_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getV1PageLikes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetV1PageLikes**](../Model/GetV1PageLikes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV2PageReactUsers()`

```php
getV2PageReactUsers($tenant_id, $url_id, $id): \FastComments\Client\Model\GetV2PageReactUsersResponse
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
$id = 'id_example'; // string


try {
    $result = $apiInstance->getV2PageReactUsers($tenant_id, $url_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getV2PageReactUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetV2PageReactUsersResponse**](../Model/GetV2PageReactUsersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getV2PageReacts()`

```php
getV2PageReacts($tenant_id, $url_id): \FastComments\Client\Model\GetV2PageReacts
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


try {
    $result = $apiInstance->getV2PageReacts($tenant_id, $url_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getV2PageReacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |

### Return type

[**\FastComments\Client\Model\GetV2PageReacts**](../Model/GetV2PageReacts.md)

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
lockComment($tenant_id, $comment_id, $broadcast_id, $sso): \FastComments\Client\Model\APIEmptyResponse
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

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logoutPublic()`

```php
logoutPublic(): \FastComments\Client\Model\APIEmptyResponse
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



try {
    $result = $apiInstance->logoutPublic();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->logoutPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `pinComment()`

```php
pinComment($tenant_id, $comment_id, $broadcast_id, $sso): \FastComments\Client\Model\ChangeCommentPinStatusResponse
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

[**\FastComments\Client\Model\ChangeCommentPinStatusResponse**](../Model/ChangeCommentPinStatusResponse.md)

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
reactFeedPostPublic($tenant_id, $post_id, $react_body_params, $options): \FastComments\Client\Model\ReactFeedPostResponse
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
$options = [
    'is_undo' => True, // bool
    'broadcast_id' => 'broadcast_id_example', // string
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->reactFeedPostPublic($tenant_id, $post_id, $react_body_params, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->reactFeedPostPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **post_id** | **string**|  | |
| **react_body_params** | [**\FastComments\Client\Model\ReactBodyParams**](../Model/ReactBodyParams.md)|  | |
| **is_undo** | **bool**|  | [optional] |
| **broadcast_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ReactFeedPostResponse**](../Model/ReactFeedPostResponse.md)

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
resetUserNotificationCount($tenant_id, $sso): \FastComments\Client\Model\ResetUserNotificationsResponse
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

[**\FastComments\Client\Model\ResetUserNotificationsResponse**](../Model/ResetUserNotificationsResponse.md)

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
resetUserNotifications($tenant_id, $options): \FastComments\Client\Model\ResetUserNotificationsResponse
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
$options = [
    'after_id' => 'after_id_example', // string
    'after_created_at' => 56, // int
    'unread_only' => True, // bool
    'dm_only' => True, // bool
    'no_dm' => True, // bool
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->resetUserNotifications($tenant_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->resetUserNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **after_id** | **string**|  | [optional] |
| **after_created_at** | **int**|  | [optional] |
| **unread_only** | **bool**|  | [optional] |
| **dm_only** | **bool**|  | [optional] |
| **no_dm** | **bool**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\ResetUserNotificationsResponse**](../Model/ResetUserNotificationsResponse.md)

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
searchUsers($tenant_id, $url_id, $options): \FastComments\Client\Model\SearchUsersResult
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
$options = [
    'username_starts_with' => 'username_starts_with_example', // string
    'mention_group_ids' => array('mention_group_ids_example'), // string[]
    'sso' => 'sso_example', // string
    'search_section' => 'search_section_example', // string
];


try {
    $result = $apiInstance->searchUsers($tenant_id, $url_id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->searchUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **url_id** | **string**|  | |
| **username_starts_with** | **string**|  | [optional] |
| **mention_group_ids** | [**string[]**](../Model/string.md)|  | [optional] |
| **sso** | **string**|  | [optional] |
| **search_section** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\SearchUsersResult**](../Model/SearchUsersResult.md)

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
setCommentText($tenant_id, $comment_id, $broadcast_id, $comment_text_update_request, $options): \FastComments\Client\Model\PublicAPISetCommentTextResponse
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
$options = [
    'edit_key' => 'edit_key_example', // string
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->setCommentText($tenant_id, $comment_id, $broadcast_id, $comment_text_update_request, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->setCommentText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **comment_id** | **string**|  | |
| **broadcast_id** | **string**|  | |
| **comment_text_update_request** | [**\FastComments\Client\Model\CommentTextUpdateRequest**](../Model/CommentTextUpdateRequest.md)|  | |
| **edit_key** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\PublicAPISetCommentTextResponse**](../Model/PublicAPISetCommentTextResponse.md)

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
unBlockCommentPublic($tenant_id, $comment_id, $public_block_from_comment_params, $sso): \FastComments\Client\Model\UnblockSuccess
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

[**\FastComments\Client\Model\UnblockSuccess**](../Model/UnblockSuccess.md)

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
unLockComment($tenant_id, $comment_id, $broadcast_id, $sso): \FastComments\Client\Model\APIEmptyResponse
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

[**\FastComments\Client\Model\APIEmptyResponse**](../Model/APIEmptyResponse.md)

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
unPinComment($tenant_id, $comment_id, $broadcast_id, $sso): \FastComments\Client\Model\ChangeCommentPinStatusResponse
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

[**\FastComments\Client\Model\ChangeCommentPinStatusResponse**](../Model/ChangeCommentPinStatusResponse.md)

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
updateFeedPostPublic($tenant_id, $post_id, $update_feed_post_params, $options): \FastComments\Client\Model\CreateFeedPostResponse
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
$options = [
    'broadcast_id' => 'broadcast_id_example', // string
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->updateFeedPostPublic($tenant_id, $post_id, $update_feed_post_params, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->updateFeedPostPublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenant_id** | **string**|  | |
| **post_id** | **string**|  | |
| **update_feed_post_params** | [**\FastComments\Client\Model\UpdateFeedPostParams**](../Model/UpdateFeedPostParams.md)|  | |
| **broadcast_id** | **string**|  | [optional] |
| **sso** | **string**|  | [optional] |

### Return type

[**\FastComments\Client\Model\CreateFeedPostResponse**](../Model/CreateFeedPostResponse.md)

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
updateUserNotificationCommentSubscriptionStatus($tenant_id, $notification_id, $opted_in_or_out, $comment_id, $sso): \FastComments\Client\Model\UpdateUserNotificationCommentSubscriptionStatusResponse
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

[**\FastComments\Client\Model\UpdateUserNotificationCommentSubscriptionStatusResponse**](../Model/UpdateUserNotificationCommentSubscriptionStatusResponse.md)

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
updateUserNotificationPageSubscriptionStatus($tenant_id, $url_id, $url, $page_title, $subscribed_or_unsubscribed, $sso): \FastComments\Client\Model\UpdateUserNotificationPageSubscriptionStatusResponse
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

[**\FastComments\Client\Model\UpdateUserNotificationPageSubscriptionStatusResponse**](../Model/UpdateUserNotificationPageSubscriptionStatusResponse.md)

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
updateUserNotificationStatus($tenant_id, $notification_id, $new_status, $sso): \FastComments\Client\Model\UpdateUserNotificationStatusResponse
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

[**\FastComments\Client\Model\UpdateUserNotificationStatusResponse**](../Model/UpdateUserNotificationStatusResponse.md)

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
uploadImage($tenant_id, $file, $options): \FastComments\Client\Model\UploadImageResponse
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
$options = [
    'size_preset' => new \FastComments\Client\Model\\FastComments\Client\Model\SizePreset(), // \FastComments\Client\Model\SizePreset | Size preset: \"Default\" (1000x1000px) or \"CrossPlatform\" (creates sizes for popular devices)
    'url_id' => 'url_id_example', // string | Page id that upload is happening from, to configure
];


try {
    $result = $apiInstance->uploadImage($tenant_id, $file, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->uploadImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

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
voteComment($tenant_id, $comment_id, $url_id, $broadcast_id, $vote_body_params, $options): \FastComments\Client\Model\VoteResponse
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
$options = [
    'session_id' => 'session_id_example', // string
    'sso' => 'sso_example', // string
];


try {
    $result = $apiInstance->voteComment($tenant_id, $comment_id, $url_id, $broadcast_id, $vote_body_params, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->voteComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Note: required parameters and the request body are positional; the optional parameters listed below are passed as keys of the `$options` array.

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

[**\FastComments\Client\Model\VoteResponse**](../Model/VoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
