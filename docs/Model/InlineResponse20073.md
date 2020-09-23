# InlineResponse20073

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | [**\DateTime**](\DateTime.md) | The start date for the monthly range for which you would like to retrieve recordings. The maximum range can be a month. If no value is provided for this field, the default will be current date. For example, if you make the API request on June 30, 2020, without providing the “from” and “to” parameters, by default the value of &#39;from&#39; field will be “2020-06-30” and the value of the &#39;to&#39; field will be “2020-07-01”. | [optional] 
**to** | [**\DateTime**](\DateTime.md) | The end date for the monthly range for which you would like to retrieve recordings. The maximum range can be a month. | [optional] 
**page_size** | **string** | The number of records returned within a single API call. | [optional] 
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional] 
**meetings** | [**\Zoom\Api\Model\InlineResponse20073Meetings[]**](InlineResponse20073Meetings.md) | Meetings Object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


