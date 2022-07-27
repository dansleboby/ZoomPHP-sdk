# # ReportMeetingPolls200ResponseQuestionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The participant&#39;s email address. | [optional]
**name** | **string** | The participant&#39;s display name. If the **Allow participants to answer questions anonymously** setting is enabled for a [poll](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meet), the participant&#39;s polling information is kept anonymous and the &#x60;name&#x60; field will return the \&quot;Anonymous Attendee\&quot; value. | [optional]
**first_name** | **string** | The participant&#39;s first name. If the **Allow participants to answer questions anonymously** setting is enabled for a [poll](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meet), the participant&#39;s polling information is kept anonymous and the &#x60;first_name&#x60; field will return the \&quot;Anonymous Attendee\&quot; value. | [optional]
**last_name** | **string** | The participant&#39;s last name. If the **Allow participants to answer questions anonymously** setting is enabled for a [poll](https://support.zoom.us/hc/en-us/articles/213756303-Polling-for-Meet), the participant&#39;s polling information is kept anonymous and the &#x60;last_name&#x60; field will return the \&quot;Anonymous Attendee\&quot; value. | [optional]
**question_details** | [**\Zoom\Api\Model\ReportMeetingPolls200ResponseQuestionsInnerQuestionDetailsInner[]**](ReportMeetingPolls200ResponseQuestionsInnerQuestionDetailsInner.md) | Information about the user&#39;s questions and answers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
