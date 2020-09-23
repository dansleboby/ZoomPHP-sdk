# InlineResponse20027

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional] 
**page_count** | **int** | The number of pages returned for the request made. | [optional] 
**page_size** | **int** | The number of records returned within a single API call. | [optional] 
**participants** | [**\Swagger\Client\Model\InlineResponse20027Participants[]**](InlineResponse20027Participants.md) | Array of participant session objects. If a participant left a meeting and rejoined the same meeting, their information will appear multiple times (as many times as they joined the meeting). | [optional] 
**total_records** | **int** | The number of all records available across pages. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

