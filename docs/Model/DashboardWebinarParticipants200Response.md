# # DashboardWebinarParticipants200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
**page_count** | **int** | The number of pages returned for the request made. | [optional]
**page_size** | **int** | The number of records returned within a single API call. | [optional] [default to 30]
**total_records** | **int** | The number of all records available across pages. | [optional]
**participants** | [**\Zoom\Api\Model\DashboardWebinarParticipants200ResponseAllOfParticipantsInner[]**](DashboardWebinarParticipants200ResponseAllOfParticipantsInner.md) | Information about the webinar participants. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
