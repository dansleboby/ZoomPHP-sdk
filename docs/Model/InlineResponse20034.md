# # InlineResponse20034

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | [**\DateTime**](\DateTime.md) | Start date for this report. | [optional] 
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional] 
**page_count** | **int** | The number of pages returned for the request made. | [optional] 
**page_number** | **int** | **Deprecated**: This field has been deprecated. Please use the \&quot;next_page_token\&quot; field for pagination instead of this field.  The page number of the current results. | [optional] 
**page_size** | **int** | The number of records returned with a single API call. | [optional] 
**to** | [**\DateTime**](\DateTime.md) | End date for this report. | [optional] 
**total_meeting_minutes** | **int** | Number of meeting minutes for this range. | [optional] 
**total_meetings** | **int** | Number of meetings for this range. | [optional] 
**total_participants** | **int** | Number of participants for this range. | [optional] 
**total_records** | **int** | The total number of all the records available across pages. | [optional] 
**users** | [**\Zoom\Api\Model\InlineResponse20034Users[]**](InlineResponse20034Users.md) | Array of user objects. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


