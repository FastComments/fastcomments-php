# # GetUserNotifications200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**translations** | **array<string,string>** | Construct a type with a set of properties K of type T | [optional]
**is_subscribed** | **bool** |  |
**has_more** | **bool** |  |
**notifications** | [**\FastComments\Client\Model\RenderableUserNotification[]**](RenderableUserNotification.md) |  |
**status** | [**\FastComments\Client\Model\ImportedAPIStatusFAILED**](ImportedAPIStatusFAILED.md) |  |
**reason** | **string** |  |
**code** | **string** |  |
**secondary_code** | **string** |  | [optional]
**banned_until** | **int** |  | [optional]
**max_character_length** | **int** |  | [optional]
**translated_error** | **string** |  | [optional]
**custom_config** | [**\FastComments\Client\Model\CustomConfigParameters**](CustomConfigParameters.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
