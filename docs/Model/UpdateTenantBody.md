# # UpdateTenantBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**email** | **string** |  | [optional]
**sign_up_date** | **float** |  | [optional]
**package_id** | **string** |  | [optional]
**payment_frequency** | **float** |  | [optional]
**billing_info_valid** | **bool** |  | [optional]
**billing_handled_externally** | **bool** |  | [optional]
**created_by** | **string** |  | [optional]
**is_setup** | **bool** |  | [optional]
**domain_configuration** | [**\FastComments\Client\Model\APIDomainConfiguration[]**](APIDomainConfiguration.md) |  | [optional]
**billing_info** | [**\FastComments\Client\Model\BillingInfo**](BillingInfo.md) |  | [optional]
**stripe_customer_id** | **string** |  | [optional]
**stripe_subscription_id** | **string** |  | [optional]
**stripe_plan_id** | **string** |  | [optional]
**enable_profanity_filter** | **bool** |  | [optional]
**enable_spam_filter** | **bool** |  | [optional]
**remove_unverified_comments** | **bool** |  | [optional]
**unverified_comments_tt_lms** | **float** |  | [optional]
**comments_require_approval** | **bool** |  | [optional]
**auto_approve_comment_on_verification** | **bool** |  | [optional]
**send_profane_to_spam** | **bool** |  | [optional]
**de_anon_ip_addr** | **float** |  | [optional]
**meta** | **array<string,string>** | Construct a type with a set of properties K of type T | [optional]
**managed_by_tenant_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
