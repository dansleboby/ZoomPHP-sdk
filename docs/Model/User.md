# User

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | User&#39;s first name. | [optional] 
**last_name** | **string** | User&#39;s last name. | [optional] 
**email** | **string** | User&#39;s email address. | [default to 'john.doe@email.com']
**type** | **int** | User&#39;s plan type:&lt;br&gt;&#x60;1&#x60; - Basic.&lt;br&gt;&#x60;2&#x60; - Licensed.&lt;br&gt;&#x60;3&#x60; - On-prem. | 
**role_name** | **string** | User&#39;s [role](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) name. | [optional] 
**pmi** | **int** | Personal meeting ID. | [optional] 
**use_pmi** | **bool** | Use Personal Meeting ID for instant meetings. | [optional] [default to false]
**timezone** | **string** | The time zone of the user. | [optional] 
**dept** | **string** | Department. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | User create time. | [optional] 
**last_login_time** | [**\DateTime**](\DateTime.md) | User last login time. | [optional] 
**last_client_version** | **string** | User last login client version. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


