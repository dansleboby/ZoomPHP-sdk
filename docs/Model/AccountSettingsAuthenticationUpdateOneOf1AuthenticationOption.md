# # AccountSettingsAuthenticationUpdateOneOf1AuthenticationOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Specify the action that you would like to take via this API request:&lt;br&gt; * &#x60;add&#x60; : Choose this value if you are adding an authentication option. * &#x60;update&#x60;: Choose this value if you are updating an existing authentication option. * &#x60;delete&#x60;: Choose this value if you are deleting an existing authentication option. | [optional]
**default_option** | **bool** | Specify whether you would like to set this authentication option as the default option or not. | [optional]
**domains** | **string** | If you chose &#x60;enforce_login_with_domains&#x60; as the authentication type, specify the domain(s) that you want to allow to view the recordings. | [optional]
**id** | **string** | Authentication ID. If you are creating an authentication profile, you do not need to provide this field. The id field will be generated in the response once this API request is completed successfully. You can also use the Get Account Settings API with query parameter set to &#x60;meeting_authentication&#x60; to list the authentication id.&lt;br&gt;&lt;br&gt; Use this field or the &#x60;name&#x60; field to identify the associated authentication option that you would like to update or delete. | [optional]
**name** | **string** | Unique name for the authentication option. | [optional]
**type** | **string** | Specify one authentication type that is to be associated with this authentication configuration:&lt;br&gt; * &#x60;internally&#x60;: This option allows you specify a rule that only signed in users within your account can view the recording.&lt;br&gt;  * &#x60;enforce_login&#x60;: This option allows any users to view the recording, as long as they are signed into their Zoom account.&lt;br&gt;  * &#x60;enforce_login_with_domains&#x60;: This option, allows you to specify a rule so that only those Zoom users whose email addresses contain a certain domain, can view the recording. You can either add multiple domains using a comma in between and/or use a wildcard for listing domains. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
