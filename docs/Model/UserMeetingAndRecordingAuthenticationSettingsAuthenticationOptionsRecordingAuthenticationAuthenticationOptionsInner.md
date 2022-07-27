# # UserMeetingAndRecordingAuthenticationSettingsAuthenticationOptionsRecordingAuthenticationAuthenticationOptionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_option** | **bool** | Whether the authentication option is the default authentication option. | [optional]
**domains** | **string** | A comma-separated list of approved authentication domains. | [optional]
**id** | **string** | The authentication option&#39;s ID. | [optional]
**name** | **string** | The authentication option&#39;s name. | [optional]
**type** | **string** | The authentication type:   * &#x60;enforce_login&#x60; — Only users logged in to Zoom can view the recordings.   * &#x60;enforce_login_with_domains&#x60; — Only users from specific domains can view the recordings. The list of domains is defined in the &#x60;domains&#x60; field.   * &#x60;internally&#x60; — Only the Zoom account&#39;s users can view the recordings. | [optional]
**visible** | **bool** | Whether the authentication option is visible. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
