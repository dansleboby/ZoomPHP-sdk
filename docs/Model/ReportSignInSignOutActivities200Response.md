# # ReportSignInSignOutActivities200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_logs** | [**\Zoom\Api\Model\ReportSignInSignOutActivities200ResponseActivityLogsInner[]**](ReportSignInSignOutActivities200ResponseActivityLogsInner.md) | Array of activity logs. | [optional]
**from** | **string** | Start date from which you want the activity logs report to be generated. | [optional]
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
**page_size** | **int** | The number of records returned with a single API call. | [optional]
**to** | **string** | End date until which you want the activity logs report to be generated | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
