# # GetUserNotifications200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**translations** | **array<string,string>** | Construct a type with a set of properties K of type T | [optional]
**is_subscribed** | **bool** |  |
**has_more** | **bool** |  |
**notifications** | [**\OpenAPI\Client\Model\RenderableUserNotification[]**](RenderableUserNotification.md) |  |
**status** | [**\OpenAPI\Client\Model\ImportedAPIStatusFAILED**](ImportedAPIStatusFAILED.md) |  |
**reason** | **string** |  |
**code** | **string** |  |
**secondary_code** | **string** |  | [optional]
**banned_until** | **float** |  | [optional]
**max_character_length** | **float** |  | [optional]
**translated_error** | **string** |  | [optional]
**custom_config** | [**\OpenAPI\Client\Model\CustomConfigParameters**](CustomConfigParameters.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
