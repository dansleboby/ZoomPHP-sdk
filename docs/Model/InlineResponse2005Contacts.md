# InlineResponse2005Contacts

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | User ID of the contact. | [optional] 
**email** | **string** | Email address of the contact. | [optional] 
**first_name** | **string** | First name of the contact. | [optional] 
**last_name** | **string** | Last name of the contact. | [optional] 
**presence_status** | **string** | Presence status of the contact in Zoom Client. The value of this field can be one of the following: &#x60;Do_Not_Disturb&#x60;&lt;br&gt; &#x60;away&#x60;&lt;br&gt; &#x60;Available&#x60;&lt;br&gt; &#x60;Offline&#x60; | [optional] 
**phone_number** | **string** | Phone number of the user. | [optional] 
**sip_phone_number** | **string** | SIP Phone number of the user. Returned only if user has SIP phone enabled. | [optional] 
**direct_numbers** | **string[]** | Direct Number(s) of a user who has Zoom Phone license assigned. | [optional] 
**extension_number** | **string** | Extension Number of a user who has Zoom Phone license assigned. | [optional] 
**im_group_id** | **string** | Unique Identifier of the [IM directory group](https://support.zoom.us/hc/en-us/articles/203749815-IM-Management) in which the user has been added. An IM Directory group is not the same as a channel. IM Directory allows administrators to assign users in their account to groups that display within the Contacts list on Zoom clients. | [optional] 
**im_group_name** | **string** | Name of the [IM directory group](https://support.zoom.us/hc/en-us/articles/203749815-IM-Management) in which the user has been added. An IM Directory group is not the same as a channel. IM Directory allows administrators to assign users in their account to groups that display within the Contacts list on Zoom clients. | [optional] 
**dept** | **string** | Department of the contact as provided in the user&#39;s Zoom profile. | [optional] 
**job_title** | **string** | Department of the user as provided in the user&#39;s Zoom profile. | [optional] 
**location** | **string** | Location of the user as provided in the user&#39;s Zoom profile. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


