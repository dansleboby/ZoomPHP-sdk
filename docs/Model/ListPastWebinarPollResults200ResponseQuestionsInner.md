# # ListPastWebinarPollResults200ResponseQuestionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address of the user who submitted answers to the poll. If the participant is **not** part of the host&#39;s account, this returns an empty string value, with some exceptions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details. | [optional]
**name** | **string** | Name of the user who submitted answers to the poll. If \&quot;anonymous\&quot; option is enabled for a poll, the participant&#39;s polling information will be kept anonymous and the value of &#x60;name&#x60; field will be \&quot;Anonymous Attendee\&quot;. | [optional]
**question_details** | [**\Zoom\Api\Model\ListPastMeetingPolls200ResponseQuestionsInnerQuestionDetailsInner[]**](ListPastMeetingPolls200ResponseQuestionsInnerQuestionDetailsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
