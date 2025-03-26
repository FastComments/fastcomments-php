# # FComment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  |
**tenant_id** | **string** |  |
**url_id** | **string** |  |
**url_id_raw** | **string** |  | [optional]
**url** | **string** |  |
**page_title** | **string** |  | [optional]
**user_id** | **string** |  | [optional]
**anon_user_id** | **string** |  | [optional]
**commenter_email** | **string** |  | [optional]
**commenter_name** | **string** |  |
**commenter_link** | **string** |  | [optional]
**comment** | **string** |  |
**comment_html** | **string** |  |
**parent_id** | **string** |  | [optional]
**date** | **\DateTime** |  |
**local_date_string** | **string** |  | [optional]
**local_date_hours** | **int** |  | [optional]
**votes** | **int** |  | [optional]
**votes_up** | **int** |  | [optional]
**votes_down** | **int** |  | [optional]
**expire_at** | **\DateTime** |  | [optional]
**verified** | **bool** |  |
**verified_date** | **\DateTime** |  | [optional]
**verification_id** | **string** |  | [optional]
**notification_sent_for_parent** | **bool** |  | [optional]
**notification_sent_for_parent_tenant** | **bool** |  | [optional]
**reviewed** | **bool** |  | [optional]
**imported** | **bool** |  | [optional]
**external_id** | **string** |  | [optional]
**external_parent_id** | **string** |  | [optional]
**avatar_src** | **string** |  | [optional]
**is_spam** | **bool** |  | [optional]
**ai_determined_spam** | **bool** |  | [optional]
**has_images** | **bool** |  | [optional]
**page_number** | **int** |  | [optional]
**page_number_of** | **int** |  | [optional]
**page_number_nf** | **int** |  | [optional]
**has_links** | **bool** |  | [optional]
**has_code** | **bool** |  | [optional]
**approved** | **bool** |  |
**locale** | **string** |  |
**is_deleted** | **bool** |  | [optional]
**is_deleted_user** | **bool** |  | [optional]
**is_banned_user** | **bool** |  | [optional]
**is_by_admin** | **bool** |  | [optional]
**is_by_moderator** | **bool** |  | [optional]
**is_pinned** | **bool** |  | [optional]
**is_locked** | **bool** |  | [optional]
**flag_count** | **int** |  | [optional]
**rating** | **float** |  | [optional]
**display_label** | **string** |  | [optional]
**from_product_id** | **int** |  | [optional]
**meta** | [**\OpenAPI\Client\Model\FCommentMeta**](FCommentMeta.md) |  | [optional]
**ip_hash** | **string** |  | [optional]
**mentions** | [**\OpenAPI\Client\Model\CommentUserMentionInfo[]**](CommentUserMentionInfo.md) |  | [optional]
**hash_tags** | [**\OpenAPI\Client\Model\CommentUserHashTagInfo[]**](CommentUserHashTagInfo.md) |  | [optional]
**badges** | [**\OpenAPI\Client\Model\CommentUserBadgeInfo[]**](CommentUserBadgeInfo.md) |  | [optional]
**domain** | **string** |  | [optional]
**veteran_badge_processed** | **string** |  | [optional]
**moderation_group_ids** | **string[]** |  | [optional]
**did_process_badges** | **bool** |  | [optional]
**from_offline_restore** | **bool** |  | [optional]
**autoplay_job_id** | **string** |  | [optional]
**autoplay_delay_ms** | **int** |  | [optional]
**feedback_ids** | **string[]** |  | [optional]
**logs** | **array[]** |  | [optional]
**group_ids** | **string[]** |  | [optional]
**view_count** | **float** |  | [optional]
**requires_verification** | **bool** |  | [optional]
**edit_key** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
