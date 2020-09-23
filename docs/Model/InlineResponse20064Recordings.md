# # InlineResponse20064Recordings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of recording | [optional] 
**caller_number** | **string** | Number of caller | [optional] 
**caller_number_type** | **string** | Type of caller&#39;s number. 1 - internal | 2 - external | [optional] 
**caller_name** | **string** | Contact name of caller | [optional] 
**callee_number** | **string** | Number of callee | [optional] 
**callee_number_type** | **string** | Type of callee&#39;s number. 1 - internal | 2 - external | [optional] 
**callee_name** | **string** | Contact name of callee | [optional] 
**direction** | **string** | Direction of the call. \&quot;inbound\&quot; | \&quot;outbound\&quot; | [optional] 
**duration** | **string** | Duration of the call | [optional] 
**download_url** | **string** | Download url for the recording. For security purposes, you must provide an OAuth access token in the auth header to download the recording file using this url. &lt;br&gt;  Example request:&lt;br&gt; &#x60;&#x60;&#x60; curl --request GET \\   --url {download_url} \\   --header &#39;authorization: Bearer {access_token} \\   --header &#39;content-type: application/json&#39; &#x60;&#x60;&#x60; | [optional] 
**date_time** | **string** | Date and time at which the record is received | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


