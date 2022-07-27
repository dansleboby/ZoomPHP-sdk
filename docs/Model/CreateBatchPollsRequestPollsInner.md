# # CreateBatchPollsRequestPollsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**anonymous** | **bool** | Whether to allow meeting participants to answer poll questions anonymously:  * &#x60;true&#x60; — Anonymous polls enabled.  * &#x60;false&#x60; — Participants cannot answer poll questions anonymously.   This value defaults to &#x60;false&#x60;. | [optional] [default to false]
**poll_type** | **int** | The type of poll:  * &#x60;1&#x60; — Poll.  * &#x60;2&#x60; — Advanced Poll. This feature must be enabled in your Zoom account.  * &#x60;3&#x60; — Quiz. This feature must be enabled in your Zoom account.    This value defaults to &#x60;1&#x60;. | [optional] [default to self::POLL_TYPE_1]
**questions** | [**\Zoom\Api\Model\CreateBatchPollsRequestPollsInnerQuestionsInner[]**](CreateBatchPollsRequestPollsInnerQuestionsInner.md) | Information about the poll&#39;s questions. | [optional]
**title** | **string** | The poll&#39;s title, up to 64 characters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
