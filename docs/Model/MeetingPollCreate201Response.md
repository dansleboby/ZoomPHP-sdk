# # MeetingPollCreate201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Meeting Poll ID | [optional]
**status** | **string** | Status of the Meeting Poll:&lt;br&gt;&#x60;notstart&#x60; - Poll not started&lt;br&gt;&#x60;started&#x60; - Poll started&lt;br&gt;&#x60;ended&#x60; - Poll ended&lt;br&gt;&#x60;sharing&#x60; - Sharing poll results | [optional]
**anonymous** | **bool** | Allow meeting participants to answer poll questions anonymously.   This value defaults to &#x60;false&#x60;. | [optional] [default to false]
**poll_type** | **int** | The type of poll:  * &#x60;1&#x60; — Poll.  * &#x60;2&#x60; — Advanced Poll. This feature must be enabled in your Zoom account.  * &#x60;3&#x60; — Quiz. This feature must be enabled in your Zoom account.    This value defaults to &#x60;1&#x60;. | [optional]
**questions** | [**\Zoom\Api\Model\PollQuestionsInner[]**](PollQuestionsInner.md) | Information about the poll&#39;s questions. | [optional]
**title** | **string** | The poll&#39;s title, up to 64 characters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
