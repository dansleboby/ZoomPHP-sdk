# # ListWebinarParticipants200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
**page_count** | **int** | The number of pages returned for this request. | [optional]
**page_size** | **int** | The total number of records returned from a single API call. | [optional] [default to 30]
**participants** | [**\Zoom\Api\Model\ListWebinarParticipants200ResponseParticipantsInner[]**](ListWebinarParticipants200ResponseParticipantsInner.md) |  | [optional]
**total_records** | **int** | The total number of records available across all pages. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
