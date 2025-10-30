# # FeedPost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  |
**tenant_id** | **string** |  |
**title** | **string** |  | [optional]
**from_user_id** | **string** |  | [optional]
**from_user_display_name** | **string** |  | [optional]
**from_user_avatar** | **string** |  | [optional]
**from_ip_hash** | **string** |  | [optional]
**tags** | **string[]** |  | [optional]
**weight** | **float** |  | [optional]
**meta** | **array<string,string>** | Construct a type with a set of properties K of type T | [optional]
**content_html** | **string** |  | [optional]
**media** | [**\FastComments\Client\Model\FeedPostMediaItem[]**](FeedPostMediaItem.md) |  | [optional]
**links** | [**\FastComments\Client\Model\FeedPostLink[]**](FeedPostLink.md) |  | [optional]
**created_at** | **\DateTime** |  |
**reacts** | **array<string,int>** |  | [optional]
**comment_count** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
