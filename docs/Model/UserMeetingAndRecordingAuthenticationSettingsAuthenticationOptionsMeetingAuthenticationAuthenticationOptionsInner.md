# # UserMeetingAndRecordingAuthenticationSettingsAuthenticationOptionsMeetingAuthenticationAuthenticationOptionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_option** | **bool** | Whether the authentication option is the default authentication option. | [optional]
**domains** | **string** | A comma-separated list of approved authentication domains. | [optional]
**id** | **string** | The authentication option&#39;s ID. | [optional]
**name** | **string** | The authentication option&#39;s name. | [optional]
**type** | **string** | The authentication type:  * &#x60;enforce_login&#x60; — Only users logged in to Zoom can join meetings.  * &#x60;enforce_login_with_domains&#x60; — Only users from specific domains can join meetings. The list of domains is defined in the &#x60;domains&#x60; field.  * &#x60;enforce_login_with_same_account&#x60; — Only the Zoom account&#39;s users can join meetings. | [optional]
**visible** | **bool** | Whether the authentication option is visible. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
