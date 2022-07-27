# # DashboardZoomRoom200ResponseAllOfPastMeetings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **\DateTime** | Start date for this report in &#39;yyyy-mm-dd&#39; format. | [optional]
**to** | **\DateTime** | End date for this report in &#39;yyyy-mm-dd&#39; format. | [optional]
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
**page_count** | **int** | The number of pages returned for the request made. | [optional]
**page_size** | **int** | The number of records returned within a single API call. | [optional] [default to 30]
**total_records** | **int** | The number of all records available across pages. | [optional]
**meetings** | [**\Zoom\Api\Model\MeetingMetric[]**](MeetingMetric.md) | Array of meeting objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
