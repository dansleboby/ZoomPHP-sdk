# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | User create time. | [optional]
**dept** | **string** | Department. | [optional]
**email** | **string** | User&#39;s email address. |
**first_name** | **string** | User&#39;s first name. | [optional]
**last_client_version** | **string** | User last login client version. | [optional]
**last_login_time** | **\DateTime** | User last login time. | [optional]
**last_name** | **string** | User&#39;s last name. | [optional]
**pmi** | **int** | [Personal Meeting ID (PMI)](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#understanding-personal-meeting-id-pmi). | [optional]
**role_name** | **string** | User&#39;s [role](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) name. | [optional]
**timezone** | **string** | The time zone of the user. | [optional]
**type** | **int** | User&#39;s plan type:&lt;br&gt;&#x60;1&#x60; - Basic.&lt;br&gt;&#x60;2&#x60; - Licensed.&lt;br&gt;&#x60;3&#x60; - On-prem.&lt;br&gt;&#x60;99&#x60; - None (this can only be set with &#x60;ssoCreate&#x60;). |
**use_pmi** | **bool** | Use [Personal Meeting ID (PMI)](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#understanding-personal-meeting-id-pmi) for instant meetings. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
