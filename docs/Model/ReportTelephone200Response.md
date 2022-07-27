# # ReportTelephone200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **\DateTime** | Start date for this report. | [optional]
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
**page_count** | **int** | The number of pages returned for the request made. This field does **not** return if the &#x60;query_date_type&#x60; parameter is the &#x60;meeting_start_time&#x60; or &#x60;meeting_end_time&#x60; value. | [optional]
**page_size** | **int** | The number of records returned with a single API call. | [optional]
**to** | **\DateTime** | End date for this report. | [optional]
**total_records** | **int** | The total number of all the records available across pages. This field does **not** return if the &#x60;query_date_type&#x60; parameter is the &#x60;meeting_start_time&#x60; or &#x60;meeting_end_time&#x60; value. | [optional]
**telephony_usage** | [**\Zoom\Api\Model\ReportTelephone200ResponseAllOf1TelephonyUsageInner[]**](ReportTelephone200ResponseAllOf1TelephonyUsageInner.md) | Array of telephony objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
