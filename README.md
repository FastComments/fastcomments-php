# fastcomments/client

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/fastcomments/fastcomments-php.git"
    }
  ],
  "require": {
    "fastcomments/fastcomments-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/fastcomments/client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**addDomainConfig**](docs/Api/DefaultApi.md#adddomainconfig) | **POST** /api/v1/domain-configs | 
*DefaultApi* | [**aggregate**](docs/Api/DefaultApi.md#aggregate) | **POST** /api/v1/aggregate | 
*DefaultApi* | [**blockUserFromComment**](docs/Api/DefaultApi.md#blockuserfromcomment) | **POST** /api/v1/comments/{id}/block | 
*DefaultApi* | [**createFeedPost**](docs/Api/DefaultApi.md#createfeedpost) | **POST** /api/v1/feed-posts | 
*DefaultApi* | [**deleteComment**](docs/Api/DefaultApi.md#deletecomment) | **DELETE** /api/v1/comments/{id} | 
*DefaultApi* | [**deleteDomainConfig**](docs/Api/DefaultApi.md#deletedomainconfig) | **DELETE** /api/v1/domain-configs/{domain} | 
*DefaultApi* | [**flagComment**](docs/Api/DefaultApi.md#flagcomment) | **POST** /api/v1/comments/{id}/flag | 
*DefaultApi* | [**getAuditLogs**](docs/Api/DefaultApi.md#getauditlogs) | **GET** /api/v1/audit-logs | 
*DefaultApi* | [**getComment**](docs/Api/DefaultApi.md#getcomment) | **GET** /api/v1/comments/{id} | 
*DefaultApi* | [**getComments**](docs/Api/DefaultApi.md#getcomments) | **GET** /api/v1/comments | 
*DefaultApi* | [**getDomainConfig**](docs/Api/DefaultApi.md#getdomainconfig) | **GET** /api/v1/domain-configs/{domain} | 
*DefaultApi* | [**getDomainConfigs**](docs/Api/DefaultApi.md#getdomainconfigs) | **GET** /api/v1/domain-configs | 
*DefaultApi* | [**getFeedPosts**](docs/Api/DefaultApi.md#getfeedposts) | **GET** /api/v1/feed-posts | 
*DefaultApi* | [**patchDomainConfig**](docs/Api/DefaultApi.md#patchdomainconfig) | **PATCH** /api/v1/domain-configs/{domainToUpdate} | 
*DefaultApi* | [**putDomainConfig**](docs/Api/DefaultApi.md#putdomainconfig) | **PUT** /api/v1/domain-configs/{domainToUpdate} | 
*DefaultApi* | [**saveComment**](docs/Api/DefaultApi.md#savecomment) | **POST** /api/v1/comments | 
*DefaultApi* | [**unBlockUserFromComment**](docs/Api/DefaultApi.md#unblockuserfromcomment) | **POST** /api/v1/comments/{id}/un-block | 
*DefaultApi* | [**unFlagComment**](docs/Api/DefaultApi.md#unflagcomment) | **POST** /api/v1/comments/{id}/un-flag | 
*DefaultApi* | [**updateComment**](docs/Api/DefaultApi.md#updatecomment) | **PATCH** /api/v1/comments/{id} | 
*DefaultApi* | [**updateFeedPost**](docs/Api/DefaultApi.md#updatefeedpost) | **PATCH** /api/v1/feed-posts/{id} | 
*PublicApi* | [**blockFromCommentPublic**](docs/Api/PublicApi.md#blockfromcommentpublic) | **POST** /block-from-comment/{commentId} | 
*PublicApi* | [**checkedCommentsForBlocked**](docs/Api/PublicApi.md#checkedcommentsforblocked) | **GET** /check-blocked-comments | 
*PublicApi* | [**createCommentPublic**](docs/Api/PublicApi.md#createcommentpublic) | **POST** /comments/{tenantId} | 
*PublicApi* | [**deleteCommentPublic**](docs/Api/PublicApi.md#deletecommentpublic) | **DELETE** /comments/{tenantId}/{commentId} | 
*PublicApi* | [**deleteCommentVote**](docs/Api/PublicApi.md#deletecommentvote) | **DELETE** /comments/{tenantId}/{commentId}/vote/{voteId} | 
*PublicApi* | [**flagCommentPublic**](docs/Api/PublicApi.md#flagcommentpublic) | **POST** /flag-comment/{commentId} | 
*PublicApi* | [**getCommentText**](docs/Api/PublicApi.md#getcommenttext) | **GET** /comments/{tenantId}/{commentId}/text | 
*PublicApi* | [**getCommentVoteUserNames**](docs/Api/PublicApi.md#getcommentvoteusernames) | **GET** /comments/{tenantId}/{commentId}/votes | 
*PublicApi* | [**getCommentsPublic**](docs/Api/PublicApi.md#getcommentspublic) | **GET** /comments/{tenantId} | 
*PublicApi* | [**getEventLog**](docs/Api/PublicApi.md#geteventlog) | **GET** /event-log/{tenantId} | 
*PublicApi* | [**getFeedPostsPublic**](docs/Api/PublicApi.md#getfeedpostspublic) | **GET** /feed-posts/{tenantId} | 
*PublicApi* | [**getGlobalEventLog**](docs/Api/PublicApi.md#getglobaleventlog) | **GET** /event-log/global/{tenantId} | 
*PublicApi* | [**getUserNotificationCount**](docs/Api/PublicApi.md#getusernotificationcount) | **GET** /user-notifications/get-count | 
*PublicApi* | [**getUserNotifications**](docs/Api/PublicApi.md#getusernotifications) | **GET** /user-notifications | 
*PublicApi* | [**getUserPresenceStatuses**](docs/Api/PublicApi.md#getuserpresencestatuses) | **GET** /user-presence-status | 
*PublicApi* | [**lockComment**](docs/Api/PublicApi.md#lockcomment) | **POST** /comments/{tenantId}/{commentId}/lock | 
*PublicApi* | [**pinComment**](docs/Api/PublicApi.md#pincomment) | **POST** /comments/{tenantId}/{commentId}/pin | 
*PublicApi* | [**resetUserNotificationCount**](docs/Api/PublicApi.md#resetusernotificationcount) | **POST** /user-notifications/reset-count | 
*PublicApi* | [**resetUserNotifications**](docs/Api/PublicApi.md#resetusernotifications) | **POST** /user-notifications/reset | 
*PublicApi* | [**setCommentText**](docs/Api/PublicApi.md#setcommenttext) | **POST** /comments/{tenantId}/{commentId}/update-text | 
*PublicApi* | [**unBlockCommentPublic**](docs/Api/PublicApi.md#unblockcommentpublic) | **DELETE** /block-from-comment/{commentId} | 
*PublicApi* | [**unLockComment**](docs/Api/PublicApi.md#unlockcomment) | **POST** /comments/{tenantId}/{commentId}/unlock | 
*PublicApi* | [**unPinComment**](docs/Api/PublicApi.md#unpincomment) | **POST** /comments/{tenantId}/{commentId}/unpin | 
*PublicApi* | [**updateUserNotificationCommentSubscriptionStatus**](docs/Api/PublicApi.md#updateusernotificationcommentsubscriptionstatus) | **POST** /user-notifications/{notificationId}/mark-opted/{optedInOrOut} | 
*PublicApi* | [**updateUserNotificationPageSubscriptionStatus**](docs/Api/PublicApi.md#updateusernotificationpagesubscriptionstatus) | **POST** /user-notifications/set-subscription-state/{subscribedOrUnsubscribed} | 
*PublicApi* | [**updateUserNotificationStatus**](docs/Api/PublicApi.md#updateusernotificationstatus) | **POST** /user-notifications/{notificationId}/mark/{newStatus} | 
*PublicApi* | [**voteComment**](docs/Api/PublicApi.md#votecomment) | **POST** /comments/{tenantId}/{commentId}/vote | 

## Models

- [APIEmptyResponse](docs/Model/APIEmptyResponse.md)
- [APIError](docs/Model/APIError.md)
- [APIGetCommentResponse](docs/Model/APIGetCommentResponse.md)
- [APIGetCommentsResponse](docs/Model/APIGetCommentsResponse.md)
- [APIStatus](docs/Model/APIStatus.md)
- [AddDomainConfig200Response](docs/Model/AddDomainConfig200Response.md)
- [AddDomainConfig200ResponseAnyOf](docs/Model/AddDomainConfig200ResponseAnyOf.md)
- [AddDomainConfigParams](docs/Model/AddDomainConfigParams.md)
- [AggregationItem](docs/Model/AggregationItem.md)
- [AggregationOpType](docs/Model/AggregationOpType.md)
- [AggregationOperation](docs/Model/AggregationOperation.md)
- [AggregationRequest](docs/Model/AggregationRequest.md)
- [AggregationRequestSort](docs/Model/AggregationRequestSort.md)
- [AggregationResponse](docs/Model/AggregationResponse.md)
- [AggregationResponseStats](docs/Model/AggregationResponseStats.md)
- [AggregationValue](docs/Model/AggregationValue.md)
- [BlockFromCommentParams](docs/Model/BlockFromCommentParams.md)
- [BlockFromCommentPublic200Response](docs/Model/BlockFromCommentPublic200Response.md)
- [BlockSuccess](docs/Model/BlockSuccess.md)
- [ChangeCommentPinStatusResponse](docs/Model/ChangeCommentPinStatusResponse.md)
- [CheckBlockedCommentsResponse](docs/Model/CheckBlockedCommentsResponse.md)
- [CheckedCommentsForBlocked200Response](docs/Model/CheckedCommentsForBlocked200Response.md)
- [CommentData](docs/Model/CommentData.md)
- [CommentHTMLRenderingMode](docs/Model/CommentHTMLRenderingMode.md)
- [CommentQuestionResultsRenderingType](docs/Model/CommentQuestionResultsRenderingType.md)
- [CommentQuestionsRequired](docs/Model/CommentQuestionsRequired.md)
- [CommentTextUpdateRequest](docs/Model/CommentTextUpdateRequest.md)
- [CommentThreadDeletionMode](docs/Model/CommentThreadDeletionMode.md)
- [CommentUserBadgeInfo](docs/Model/CommentUserBadgeInfo.md)
- [CommentUserHashTagInfo](docs/Model/CommentUserHashTagInfo.md)
- [CommentUserMentionInfo](docs/Model/CommentUserMentionInfo.md)
- [CommenterNameFormats](docs/Model/CommenterNameFormats.md)
- [CreateCommentParams](docs/Model/CreateCommentParams.md)
- [CreateCommentPublic200Response](docs/Model/CreateCommentPublic200Response.md)
- [CreateFeedPost200Response](docs/Model/CreateFeedPost200Response.md)
- [CreateFeedPostsResponse](docs/Model/CreateFeedPostsResponse.md)
- [CustomConfigParameters](docs/Model/CustomConfigParameters.md)
- [DeleteComment200Response](docs/Model/DeleteComment200Response.md)
- [DeleteCommentAction](docs/Model/DeleteCommentAction.md)
- [DeleteCommentPublic200Response](docs/Model/DeleteCommentPublic200Response.md)
- [DeleteCommentResult](docs/Model/DeleteCommentResult.md)
- [DeleteCommentVote200Response](docs/Model/DeleteCommentVote200Response.md)
- [DeleteDomainConfig200Response](docs/Model/DeleteDomainConfig200Response.md)
- [EventLogEntry](docs/Model/EventLogEntry.md)
- [FComment](docs/Model/FComment.md)
- [FCommentMeta](docs/Model/FCommentMeta.md)
- [FeedPost](docs/Model/FeedPost.md)
- [FeedPostLink](docs/Model/FeedPostLink.md)
- [FeedPostMediaItem](docs/Model/FeedPostMediaItem.md)
- [FeedPostMediaItemAsset](docs/Model/FeedPostMediaItemAsset.md)
- [FlagComment200Response](docs/Model/FlagComment200Response.md)
- [FlagCommentPublic200Response](docs/Model/FlagCommentPublic200Response.md)
- [FlagCommentResponse](docs/Model/FlagCommentResponse.md)
- [GetAuditLogs200Response](docs/Model/GetAuditLogs200Response.md)
- [GetAuditLogsResponse](docs/Model/GetAuditLogsResponse.md)
- [GetComment200Response](docs/Model/GetComment200Response.md)
- [GetCommentText200Response](docs/Model/GetCommentText200Response.md)
- [GetCommentVoteUserNames200Response](docs/Model/GetCommentVoteUserNames200Response.md)
- [GetCommentVoteUserNamesSuccessResponse](docs/Model/GetCommentVoteUserNamesSuccessResponse.md)
- [GetComments200Response](docs/Model/GetComments200Response.md)
- [GetCommentsPublic200Response](docs/Model/GetCommentsPublic200Response.md)
- [GetCommentsResponsePublicComment](docs/Model/GetCommentsResponsePublicComment.md)
- [GetCommentsResponseWithPresencePublicComment](docs/Model/GetCommentsResponseWithPresencePublicComment.md)
- [GetDomainConfig200Response](docs/Model/GetDomainConfig200Response.md)
- [GetDomainConfigs200Response](docs/Model/GetDomainConfigs200Response.md)
- [GetDomainConfigs200ResponseAnyOf](docs/Model/GetDomainConfigs200ResponseAnyOf.md)
- [GetDomainConfigs200ResponseAnyOf1](docs/Model/GetDomainConfigs200ResponseAnyOf1.md)
- [GetEventLog200Response](docs/Model/GetEventLog200Response.md)
- [GetEventLogResponse](docs/Model/GetEventLogResponse.md)
- [GetFeedPosts200Response](docs/Model/GetFeedPosts200Response.md)
- [GetFeedPostsResponse](docs/Model/GetFeedPostsResponse.md)
- [GetMyNotificationsResponse](docs/Model/GetMyNotificationsResponse.md)
- [GetUserNotificationCount200Response](docs/Model/GetUserNotificationCount200Response.md)
- [GetUserNotificationCountResponse](docs/Model/GetUserNotificationCountResponse.md)
- [GetUserNotifications200Response](docs/Model/GetUserNotifications200Response.md)
- [GetUserPresenceStatuses200Response](docs/Model/GetUserPresenceStatuses200Response.md)
- [GetUserPresenceStatusesResponse](docs/Model/GetUserPresenceStatusesResponse.md)
- [GifRating](docs/Model/GifRating.md)
- [HeaderState](docs/Model/HeaderState.md)
- [IgnoredResponse](docs/Model/IgnoredResponse.md)
- [ImportedAPIStatusFAILED](docs/Model/ImportedAPIStatusFAILED.md)
- [ImportedAPIStatusSUCCESS](docs/Model/ImportedAPIStatusSUCCESS.md)
- [LiveEvent](docs/Model/LiveEvent.md)
- [LiveEventExtraInfo](docs/Model/LiveEventExtraInfo.md)
- [LiveEventType](docs/Model/LiveEventType.md)
- [LockComment200Response](docs/Model/LockComment200Response.md)
- [NotificationAndCount](docs/Model/NotificationAndCount.md)
- [NotificationType](docs/Model/NotificationType.md)
- [PatchDomainConfigParams](docs/Model/PatchDomainConfigParams.md)
- [PickAPICommentUpdatableCommentFields](docs/Model/PickAPICommentUpdatableCommentFields.md)
- [PickFCommentAPICommentFieldsKeys](docs/Model/PickFCommentAPICommentFieldsKeys.md)
- [PickFCommentAPICommentFieldsKeysMeta](docs/Model/PickFCommentAPICommentFieldsKeysMeta.md)
- [PickFCommentApprovedOrCommentHTML](docs/Model/PickFCommentApprovedOrCommentHTML.md)
- [PickFCommentIsDeletedOrCommentHTMLOrCommenterNameOrUserId](docs/Model/PickFCommentIsDeletedOrCommentHTMLOrCommenterNameOrUserId.md)
- [PickFCommentPublicCommentFieldsKeys](docs/Model/PickFCommentPublicCommentFieldsKeys.md)
- [PickOmitFCommentDatePublicCommentPubSubFieldsKeys](docs/Model/PickOmitFCommentDatePublicCommentPubSubFieldsKeys.md)
- [PickTenantAuditLogTenantAuditLogKeys](docs/Model/PickTenantAuditLogTenantAuditLogKeys.md)
- [PickUserNotificationIdOrUrlIdOrUrlOrPageTitleOrRelatedObjectTypeOrRelatedObjectIdOrViewedOrSentOrCreatedAtOrTypeOrFromCommentIdOrFromUserNameOrFromUserIdOrFromUserAvatarSrcOrOptedOut](docs/Model/PickUserNotificationIdOrUrlIdOrUrlOrPageTitleOrRelatedObjectTypeOrRelatedObjectIdOrViewedOrSentOrCreatedAtOrTypeOrFromCommentIdOrFromUserNameOrFromUserIdOrFromUserAvatarSrcOrOptedOut.md)
- [PinComment200Response](docs/Model/PinComment200Response.md)
- [PubSubComment](docs/Model/PubSubComment.md)
- [PubSubVote](docs/Model/PubSubVote.md)
- [PublicAPIDeleteCommentResponse](docs/Model/PublicAPIDeleteCommentResponse.md)
- [PublicAPIGetCommentTextResponse](docs/Model/PublicAPIGetCommentTextResponse.md)
- [PublicAPISetCommentTextResponse](docs/Model/PublicAPISetCommentTextResponse.md)
- [PublicBlockFromCommentParams](docs/Model/PublicBlockFromCommentParams.md)
- [PublicComment](docs/Model/PublicComment.md)
- [QueryPredicate](docs/Model/QueryPredicate.md)
- [QueryPredicateValue](docs/Model/QueryPredicateValue.md)
- [QuestionRenderingType](docs/Model/QuestionRenderingType.md)
- [QuestionSubQuestionVisibility](docs/Model/QuestionSubQuestionVisibility.md)
- [QuestionWhenSave](docs/Model/QuestionWhenSave.md)
- [RecordStringBeforeStringOrNullAfterStringOrNullValue](docs/Model/RecordStringBeforeStringOrNullAfterStringOrNullValue.md)
- [RecordStringStringOrNumberValue](docs/Model/RecordStringStringOrNumberValue.md)
- [RenderableUserNotification](docs/Model/RenderableUserNotification.md)
- [ResetUserNotifications200Response](docs/Model/ResetUserNotifications200Response.md)
- [ResetUserNotificationsResponse](docs/Model/ResetUserNotificationsResponse.md)
- [SORTDIR](docs/Model/SORTDIR.md)
- [SSOSecurityLevel](docs/Model/SSOSecurityLevel.md)
- [SaveComment200Response](docs/Model/SaveComment200Response.md)
- [SaveCommentResponse](docs/Model/SaveCommentResponse.md)
- [SaveCommentResponseOptimized](docs/Model/SaveCommentResponseOptimized.md)
- [SaveCommentsResponseWithPresence](docs/Model/SaveCommentsResponseWithPresence.md)
- [SetCommentText200Response](docs/Model/SetCommentText200Response.md)
- [SortDirections](docs/Model/SortDirections.md)
- [SpamRule](docs/Model/SpamRule.md)
- [UnBlockCommentPublic200Response](docs/Model/UnBlockCommentPublic200Response.md)
- [UnBlockFromCommentParams](docs/Model/UnBlockFromCommentParams.md)
- [UnblockSuccess](docs/Model/UnblockSuccess.md)
- [UpdateDomainConfigParams](docs/Model/UpdateDomainConfigParams.md)
- [UpdateUserNotificationStatus200Response](docs/Model/UpdateUserNotificationStatus200Response.md)
- [UserNotification](docs/Model/UserNotification.md)
- [UserNotificationWriteResponse](docs/Model/UserNotificationWriteResponse.md)
- [UserPresenceData](docs/Model/UserPresenceData.md)
- [UserSessionInfo](docs/Model/UserSessionInfo.md)
- [VoteBodyParams](docs/Model/VoteBodyParams.md)
- [VoteComment200Response](docs/Model/VoteComment200Response.md)
- [VoteDeleteResponse](docs/Model/VoteDeleteResponse.md)
- [VoteDeleteResponseStatus](docs/Model/VoteDeleteResponseStatus.md)
- [VoteResponse](docs/Model/VoteResponse.md)
- [VoteResponseStatus](docs/Model/VoteResponseStatus.md)
- [VoteResponseUser](docs/Model/VoteResponseUser.md)
- [VoteStyle](docs/Model/VoteStyle.md)

## Authorization

Authentication schemes defined for the API:
### api_key

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@fastcomments.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.0`
    - Generator version: `7.12.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
