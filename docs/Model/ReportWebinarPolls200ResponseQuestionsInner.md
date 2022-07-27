# # ReportWebinarPolls200ResponseQuestionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Participant email. If the participant is **not** part of the host&#39;s account, this returns an empty string value, with some exceptions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details. | [optional]
**name** | **string** | Participant display name.&lt;br&gt;&lt;br&gt; If the poll was created as an anonymous poll, participant&#39;s information will remain anonymous and the value of the &#x60;name&#x60; field will be \&quot;Anonymous Attendee\&quot;. | [optional]
**question_details** | [**\Zoom\Api\Model\ReportWebinarPolls200ResponseQuestionsInnerQuestionDetailsInner[]**](ReportWebinarPolls200ResponseQuestionsInnerQuestionDetailsInner.md) | Array of questions from user. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
