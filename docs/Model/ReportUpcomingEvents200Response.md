# # ReportUpcomingEvents200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **\DateTime** | The report&#39;s start date. This value must be within the past six months. | [optional]
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token returns when the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
**page_size** | **int** | The number of records returned in a single API call. | [optional] [default to 30]
**to** | **\DateTime** | The report&#39;s end date. This value must be within the past six months and cannot exceed a month from the &#x60;from&#x60; value. | [optional]
**upcoming_events** | [**\Zoom\Api\Model\ReportUpcomingEvents200ResponseAllOfUpcomingEventsInner[]**](ReportUpcomingEvents200ResponseAllOfUpcomingEventsInner.md) | Information about the upcoming event. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
