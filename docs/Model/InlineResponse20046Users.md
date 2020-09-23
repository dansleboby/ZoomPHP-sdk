# InlineResponse20046Users

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | User ID. | [optional] 
**first_name** | **string** | User&#39;s first name. | [optional] 
**last_name** | **string** | User&#39;s last name. | [optional] 
**email** | **string** | User&#39;s email address. | [default to 'john.doe@gmail.com']
**type** | **int** | User&#39;s plan type.&lt;br&gt; &#x60;1&#x60; - Basic.&lt;br&gt; &#x60;2&#x60; - Licensed.&lt;br&gt; &#x60;3&#x60; - On-prem. | 
**status** | **string** | User&#39;s status | [optional] 
**pmi** | **int** | Personal meeting ID of the user. | [optional] 
**timezone** | **string** | The time zone of the user. | [optional] 
**dept** | **string** | Department, if provided by the user. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The time when user&#39;s account was created. | [optional] 
**last_login_time** | [**\DateTime**](\DateTime.md) | User&#39;s last login time. There is a three-days buffer period for this field. For example, if user first logged in on 2020-01-01 and then logged out and logged in on 2020-01-02, the value of this field will still reflect the login time of 2020-01-01. However, if the user logs in on 2020-01-04, the value of this field will reflect the corresponding login time since it exceeds the three-day buffer period. | [optional] 
**last_client_version** | **string** | The last client version that user used to login. | [optional] 
**group_ids** | **string[]** | IDs of groups where the user is a member. | [optional] 
**im_group_ids** | **string[]** | IDs of IM directory groups where the user is a member. | [optional] 
**verified** | **int** | Display whether the user&#39;s email address for the Zoom account is verified or not. &lt;br&gt; &#x60;1&#x60; - Verified user email.&lt;br&gt; &#x60;0&#x60; - User&#39;s email not verified. | [optional] 
**custom_attributes** | [**\Swagger\Client\Model\InlineResponse20046CustomAttributes[]**](InlineResponse20046CustomAttributes.md) | Custom attributes. This field is only returned if users have been assigned custom attributes and if you provided &#x60;custom_attributes&#x60; as the value of &#x60;include_fields&#x60; query parameter in the API request. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


