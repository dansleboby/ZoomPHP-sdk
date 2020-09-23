# Body33

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | User&#39;s first name. Cannot contain more than 5 Chinese characters. | [optional] 
**last_name** | **string** | User&#39;s last name. Cannot contain more than 5 Chinese characters. | [optional] 
**type** | **int** | User types:&lt;br&gt;&#x60;1&#x60; - Basic.&lt;br&gt;&#x60;2&#x60; - Licensed.&lt;br&gt;&#x60;3&#x60; - On-prem. | [optional] 
**pmi** | **int** | Personal meeting ID: length must be 10. | [optional] 
**use_pmi** | **bool** | Use Personal Meeting ID for instant meetings. | [optional] [default to false]
**timezone** | **string** | The time zone ID for a user profile. For this parameter value please refer to the ID value in the [timezone](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#timezones) list. | [optional] 
**language** | **string** | language | [optional] 
**dept** | **string** | Department for user profile: use for report. | [optional] 
**vanity_name** | **string** | Personal meeting room name. | [optional] 
**host_key** | **string** | Host key. It should be a 6-10 digit number. | [optional] 
**cms_user_id** | **string** | Kaltura user ID. | [optional] 
**job_title** | **string** | User&#39;s job title. | [optional] 
**company** | **string** | User&#39;s company. | [optional] 
**location** | **string** | User&#39;s location. | [optional] 
**phone_number** | **string** | Phone number of the user. To update a phone number, you must also provide the &#x60;phone_country&#x60; field. | [optional] 
**phone_country** | **string** | [Country ID](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#countries) of the phone number. For example, if the phone number provided in the &#x60;phone_number&#x60; field is a Brazil based number, the value of the &#x60;phone_country&#x60; field should be &#x60;BR&#x60;. | [optional] 
**custom_attributes** | [**\Swagger\Client\Model\UsersuserIdCustomAttributes**](UsersuserIdCustomAttributes.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


