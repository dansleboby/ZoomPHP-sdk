# InlineResponse20130InternalNumbers

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Phone number in E164 format. | 
**display_number** | **string** | Phone number with display format. For instance, if the value in the number field is &#x60;+1888888000&#x60;, the value of this field could be &#x60;+1 888 888 000&#x60;. | 
**country** | **string** | Two letter country code of the country. | 
**visible** | **bool** | Specify whether you want this number to be visible (in Zoom Client and Zoom Portal) to the account users or not. The value could be one of the following:&lt;br&gt; * &#x60;true&#x60;: Make the number visible. &lt;br&gt; * &#x60;false&#x60;: Hide the number. | [optional] 
**allow_join** | **bool** | Specify whether this number can be used by users to join a meeting or not. &lt;br&gt; * &#x60;true&#x60; : This number can be used to join a meeting. &lt;br&gt; *  &#x60;false&#x60;: This number can not be used to join a meeting.   Note that if the value of &#x60;visible&#x60; field is set to &#x60;true&#x60;, the value of this field will always be &#x60;true&#x60;. | [optional] 
**type** | **int** | Type of phone number. &lt;br&gt; The value can be one of the following:&lt;br&gt; * &#x60;0&#x60; : toll &lt;br&gt; * &#x60;1&#x60; : tollfree | 
**labels** | **string** | A short description for the phone number. | 
**languages** | **string** | Specify the language in which this phone number should be displayed. Currently, the only supported languages are &#x60;en-GB&#x60;, &#x60;en-US&#x60;, &#x60;de-DE&#x60;. | 
**id** | **string** | Unique identifier of the internal number. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


