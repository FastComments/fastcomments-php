# # TenantPackage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** |  |
**name** | **string** |  |
**tenant_id** | **string** |  |
**created_at** | **\DateTime** |  |
**monthly_cost_usd** | **float** |  |
**yearly_cost_usd** | **float** |  |
**monthly_stripe_plan_id** | **string** |  |
**yearly_stripe_plan_id** | **string** |  |
**max_monthly_page_loads** | **float** |  |
**max_monthly_api_credits** | **float** |  |
**max_monthly_small_widgets_credits** | **float** |  |
**max_monthly_comments** | **float** |  |
**max_concurrent_users** | **float** |  |
**max_tenant_users** | **float** |  |
**max_sso_users** | **float** |  |
**max_moderators** | **float** |  |
**max_domains** | **float** |  |
**max_white_labeled_tenants** | **float** |  |
**max_monthly_event_log_requests** | **float** |  |
**has_white_labeling** | **bool** |  |
**has_debranding** | **bool** |  |
**has_llm_spam_detection** | **bool** |  |
**for_who_text** | **string** |  |
**feature_taglines** | **string[]** |  |
**has_auditing** | **bool** |  |
**has_flex_pricing** | **bool** |  |
**enable_saml** | **bool** |  | [optional]
**flex_page_load_cost_cents** | **float** |  | [optional]
**flex_page_load_unit** | **float** |  | [optional]
**flex_comment_cost_cents** | **float** |  | [optional]
**flex_comment_unit** | **float** |  | [optional]
**flex_sso_user_cost_cents** | **float** |  | [optional]
**flex_sso_user_unit** | **float** |  | [optional]
**flex_api_credit_cost_cents** | **float** |  | [optional]
**flex_api_credit_unit** | **float** |  | [optional]
**flex_small_widgets_credit_cost_cents** | **float** |  | [optional]
**flex_small_widgets_credit_unit** | **float** |  | [optional]
**flex_moderator_cost_cents** | **float** |  | [optional]
**flex_moderator_unit** | **float** |  | [optional]
**flex_admin_cost_cents** | **float** |  | [optional]
**flex_admin_unit** | **float** |  | [optional]
**flex_domain_cost_cents** | **float** |  | [optional]
**flex_domain_unit** | **float** |  | [optional]
**flex_chat_gpt_cost_cents** | **float** |  | [optional]
**flex_chat_gpt_unit** | **float** |  | [optional]
**flex_minimum_cost_cents** | **float** |  | [optional]
**flex_managed_tenant_cost_cents** | **float** |  | [optional]
**flex_sso_admin_cost_cents** | **float** |  | [optional]
**flex_sso_admin_unit** | **float** |  | [optional]
**flex_sso_moderator_cost_cents** | **float** |  | [optional]
**flex_sso_moderator_unit** | **float** |  | [optional]
**is_sso_billing_monthly_active_users** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
