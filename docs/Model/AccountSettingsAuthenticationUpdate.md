# # AccountSettingsAuthenticationUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_authentication_exception** | **bool** | Whether to enable the [**Allow authentication exception**](https://support.zoom.us/hc/en-us/articles/360037117472#h_01F13A9N1FQFNVESC9C21NRHXY) setting. This lets hosts invite users who can bypass authentication. | [optional]
**authentication_option** | [**\Zoom\Api\Model\AccountSettingsAuthenticationUpdateOneOf1AuthenticationOption**](AccountSettingsAuthenticationUpdateOneOf1AuthenticationOption.md) |  | [optional]
**meeting_authentication** | **bool** | If set to \&quot;true\&quot;, only authenticated users can join meetings. The method for authentication can be defined in the \&quot;authentication_option\&quot;. | [optional]
**recording_authentication** | **bool** | If set to &#x60;true&#x60;, only authenticated users can view the cloud recordings.&lt;br&gt;&lt;br&gt; The authentication profile **must first be set at the account level via the account settings**, and later can be disabled after enabling on the preferred level - i.e. user level using user settings or at group level via group settings  (if you do not want the settings to be enabled on the entire account). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
