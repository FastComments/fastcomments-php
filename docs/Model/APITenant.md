# # APITenant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**name** | **string** |  |
**email** | **string** |  | [optional]
**sign_up_date** | **float** |  |
**package_id** | **string** |  |
**payment_frequency** | **float** |  |
**billing_info_valid** | **bool** |  |
**billing_handled_externally** | **bool** |  | [optional]
**created_by** | **string** |  |
**is_setup** | **bool** |  |
**domain_configuration** | [**\FastComments\Client\Model\APIDomainConfiguration[]**](APIDomainConfiguration.md) |  |
**billing_info** | [**\FastComments\Client\Model\BillingInfo**](BillingInfo.md) |  | [optional]
**stripe_customer_id** | **string** |  | [optional]
**stripe_subscription_id** | **string** |  | [optional]
**stripe_plan_id** | **string** |  | [optional]
**enable_profanity_filter** | **bool** |  |
**enable_spam_filter** | **bool** |  |
**last_billing_issue_reminder_date** | **\DateTime** |  | [optional]
**remove_unverified_comments** | **bool** |  | [optional]
**unverified_comments_tt_lms** | **float** |  | [optional]
**comments_require_approval** | **bool** |  | [optional]
**auto_approve_comment_on_verification** | **bool** |  | [optional]
**send_profane_to_spam** | **bool** |  | [optional]
**has_flex_pricing** | **bool** |  | [optional]
**has_auditing** | **bool** |  | [optional]
**flex_last_billed_amount** | **float** |  | [optional]
**de_anon_ip_addr** | **float** |  | [optional]
**meta** | **array<string,string>** | Construct a type with a set of properties K of type T | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
