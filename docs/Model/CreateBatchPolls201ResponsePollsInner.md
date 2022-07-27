# # CreateBatchPolls201ResponsePollsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**anonymous** | **bool** | Whether to allow meeting participants to answer poll questions anonymously:  * &#x60;true&#x60; — Anonymous polls enabled.  * &#x60;false&#x60; — Participants cannot answer poll questions anonymously. | [optional]
**id** | **string** | Meeting Poll ID | [optional]
**poll_type** | **int** | The type of poll:  * &#x60;1&#x60; — Poll.  * &#x60;2&#x60; — Advanced Poll. This feature must be enabled in your Zoom account.  * &#x60;3&#x60; — Quiz. This feature must be enabled in your Zoom account. | [optional]
**questions** | [**\Zoom\Api\Model\CreateBatchPolls201ResponsePollsInnerQuestionsInner[]**](CreateBatchPolls201ResponsePollsInnerQuestionsInner.md) | Information about the poll&#39;s questions. | [optional]
**status** | **string** | Status of the Meeting Poll:&lt;br&gt;&#x60;notstart&#x60; - Poll not started&lt;br&gt;&#x60;started&#x60; - Poll started&lt;br&gt;&#x60;ended&#x60; - Poll ended&lt;br&gt;&#x60;sharing&#x60; - Sharing poll results | [optional]
**title** | **string** | Title for the Poll | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
