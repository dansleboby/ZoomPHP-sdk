# # ReportChatMessages200ResponseMessagesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_time** | **\DateTime** | The timestamp at which the chat message was sent. | [optional]
**files** | [**\Zoom\Api\Model\ReportChatMessages200ResponseDeletedMessagesInnerFilesInner[]**](ReportChatMessages200ResponseDeletedMessagesInnerFilesInner.md) | Information about the chat files. | [optional]
**id** | **string** | The chat message&#39;s ID. | [optional]
**message** | **string** | The contents of the chat message. | [optional]
**receiver** | **string** | The chat message&#39;s recipient. This field only returns if the chat session &#x60;type&#x60; value is &#x60;1:1&#x60;. | [optional]
**reply_main_message_id** | **string** | The reply message&#39;s unique ID. The API only returns this value if the message is a reply message. | [optional]
**reply_main_message_timestamp** | **int** | A timestamp of when the reply message was sent. The API only returns this value if the message is a reply message. | [optional]
**sender** | **string** | The chat message&#39;s sender. | [optional]
**timestamp** | **int** | The message&#39;s timestamp, in milliseconds. | [optional]
**bot_message** | [**\Zoom\Api\Model\ReportChatMessages200ResponseMessagesInnerBotMessage**](ReportChatMessages200ResponseMessagesInnerBotMessage.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
