# # ReportOperationLogs200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of the available result list exceeds the page size. The expiration period is 15 minutes. | [optional]
**page_size** | **int** | The amount of records returns within a single API call. | [optional] [default to 30]
**operation_logs** | [**\Zoom\Api\Model\ReportOperationLogs200ResponseAllOfOperationLogsInner[]**](ReportOperationLogs200ResponseAllOfOperationLogsInner.md) | Array of operation log objects | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
