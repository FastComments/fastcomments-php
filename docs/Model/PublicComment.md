# # PublicComment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** |  |
**_id** | **string** |  |
**user_id** | **string** |  | [optional]
**anon_user_id** | **string** |  | [optional]
**commenter_name** | **string** |  |
**commenter_link** | **string** |  | [optional]
**comment_html** | **string** |  |
**parent_id** | **string** |  | [optional]
**votes** | **int** |  | [optional]
**votes_up** | **int** |  | [optional]
**votes_down** | **int** |  | [optional]
**verified** | **bool** |  |
**avatar_src** | **string** |  | [optional]
**is_spam** | **bool** |  | [optional]
**has_images** | **bool** |  | [optional]
**is_deleted** | **bool** |  | [optional]
**is_deleted_user** | **bool** |  | [optional]
**is_by_admin** | **bool** |  | [optional]
**is_by_moderator** | **bool** |  | [optional]
**is_pinned** | **bool** |  | [optional]
**is_locked** | **bool** |  | [optional]
**rating** | **float** |  | [optional]
**display_label** | **string** |  | [optional]
**badges** | [**\FastComments\Client\Model\CommentUserBadgeInfo[]**](CommentUserBadgeInfo.md) |  | [optional]
**feedback_ids** | **string[]** |  | [optional]
**view_count** | **float** |  | [optional]
**requires_verification** | **bool** |  | [optional]
**edit_key** | **string** |  | [optional]
**is_unread** | **bool** |  | [optional]
**my_vote_id** | **string** |  | [optional]
**is_voted_down** | **bool** |  | [optional]
**is_voted_up** | **bool** |  | [optional]
**has_children** | **bool** | This is always set when asTree&#x3D;true | [optional]
**nested_children_count** | **int** | The total nested child count included in this response (may be more available w/ pagination) Only set with asTree&#x3D;true, otherwise this will be null. | [optional]
**child_count** | **int** | You must ask the API to count children (with asTree&#x3D;true&amp;countChildren&#x3D;true), otherwise this will be null. This will be the complete direct child count, whereas children may only contain a subset based on pagination. | [optional]
**children** | [**\FastComments\Client\Model\PublicComment[]**](PublicComment.md) |  | [optional]
**is_flagged** | **bool** |  | [optional]
**is_blocked** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
