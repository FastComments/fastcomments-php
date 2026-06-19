# # ModerationFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reviewed** | **bool** |  | [optional]
**approved** | **bool** |  | [optional]
**is_spam** | **bool** |  | [optional]
**is_banned_user** | **bool** |  | [optional]
**is_locked** | **bool** |  | [optional]
**flag_count_gt** | **float** |  | [optional]
**user_id** | **string** |  | [optional]
**url_id** | **string** |  | [optional]
**domain** | **string** |  | [optional]
**moderation_group_ids** | **string[]** |  | [optional]
**comment_text_search** | **string[]** | Text search terms. Each term is matched case-insensitively against the comment text. A term wrapped in quotes means exact phrase match. | [optional]
**exact_comment_text** | **string** | Set by the &#x60;exact&#x3D;\&quot;...\&quot;&#x60; search syntax. The comment text must equal this value exactly (case-sensitive, full-string), as opposed to the substring matching of commentTextSearch. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
