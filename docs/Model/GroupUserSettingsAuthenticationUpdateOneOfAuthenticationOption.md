# # GroupUserSettingsAuthenticationUpdateOneOfAuthenticationOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Authentication action | [optional]
**default_option** | **bool** | Authentication default option | [optional]
**domains** | **string** | Authentication domains | [optional]
**id** | **string** | Authentication id | [optional]
**name** | **string** | Authentication name | [optional]
**type** | **string** | Authentication type. Specify one of the following authentication types for the authentication profile:&lt;br&gt;  * &#x60;enforce_login&#x60;: This option allows any users to join the meeting or webinar, as long as they are signed into their Zoom account.  * &#x60;enforce_login_with_domains&#x60;: This option, allows you to specify a rule so that only those Zoom users whose email addresses contain a certain domain, can join the meeting or webinar. You can either add multiple domains using a comma in between and/or use a wildcard for listing domains.&lt;br&gt;  * &#x60;enforce_login_with_same_account&#x60;: This option allows users to join the meeting or webinar with the same Zoom account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
