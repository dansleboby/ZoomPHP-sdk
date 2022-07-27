# # AccountSettingsAuthenticationUpdateOneOfAuthenticationOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Specify the action that you would like to take via this API request:&lt;br&gt; * &#x60;add&#x60; : Choose this value if you are adding an authentication option. * &#x60;update&#x60;: Choose this value if you are updating an existing authentication option. * &#x60;delete&#x60;: Choose this value if you are deleting an existing authentication option. | [optional]
**default_option** | **bool** | Specify whether you would like to set this authentication option as the default option or not. | [optional]
**domains** | **string** | If you chose &#x60;enforce_login_with_domains&#x60; as the authentication type, specify the domain(s) that you want to allow to join your meetings or webinars. | [optional]
**id** | **string** | Authentication ID. If you are creating an authentication profile, you do not need to provide this field. The id field will be generated in the response once this API request is completed successfully. You can also use the Get Account Settings API with query parameter set to &#x60;meeting_authentication&#x60; to list the authentication id.&lt;br&gt;&lt;br&gt;  Use this field or the &#x60;name&#x60; field to identify the associated authentication option that you would like to update or delete. | [optional]
**name** | **string** | Unique name for the authentication option. | [optional]
**type** | **string** | Authentication type. Specify one of the following authentication types for the authentication profile:&lt;br&gt;  * &#x60;enforce_login&#x60;: This option allows any users to join the meeting or webinar, as long as they are signed into their Zoom account.  * &#x60;enforce_login_with_domains&#x60;: This option, allows you to specify a rule so that only those Zoom users whose email addresses contain a certain domain, can join the meeting or webinar. You can either add multiple domains using a comma in between and/or use a wildcard for listing domains.&lt;br&gt;  * &#x60;enforce_login_with_same_account&#x60;: This option allows users to join the meeting or webinar with the same Zoom account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
