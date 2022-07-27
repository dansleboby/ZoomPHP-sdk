# # ReportChatMessages200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deleted_messages** | [**\Zoom\Api\Model\ReportChatMessages200ResponseDeletedMessagesInner[]**](ReportChatMessages200ResponseDeletedMessagesInner.md) | An array containing deleted chat messages information. | [optional]
**edited_messages** | [**\Zoom\Api\Model\ReportChatMessages200ResponseEditedMessagesInner[]**](ReportChatMessages200ResponseEditedMessagesInner.md) | An array containing edited chat message information. | [optional]
**from** | **\DateTime** | The query&#39;s start date. | [optional]
**messages** | [**\Zoom\Api\Model\ReportChatMessages200ResponseMessagesInner[]**](ReportChatMessages200ResponseMessagesInner.md) | An array containing chat message information.  **Note:** The &#x60;page_size&#x60; parameter only works for messages. | [optional]
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of the available result list exceeds the page size. The expiration period is 15 minutes. | [optional]
**page_size** | **int** | The amount of records returned within a single API call. | [optional] [default to 30]
**to** | **\DateTime** | The query&#39;s end date. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
