# # ReportChatSessions200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **\DateTime** | The query&#39;s start date. | [optional]
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of the available result list exceeds the page size. The expiration period is 15 minutes. | [optional]
**page_size** | **int** | The amount of records returned within a single API call. | [optional] [default to 30]
**sessions** | [**\Zoom\Api\Model\ReportChatSessions200ResponseSessionsInner[]**](ReportChatSessions200ResponseSessionsInner.md) | Information about the chat session. | [optional]
**to** | **\DateTime** | The query&#39;s end date. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
