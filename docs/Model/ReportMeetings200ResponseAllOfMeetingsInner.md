# # ReportMeetings200ResponseAllOfMeetingsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_keys** | [**\Zoom\Api\Model\ReportMeetings200ResponseAllOfMeetingsInnerCustomKeysInner[]**](ReportMeetings200ResponseAllOfMeetingsInnerCustomKeysInner.md) | Information about the meeting&#39;s assigned custom keys and values. This returns a maximum of 10 items. | [optional]
**duration** | **int** | The meeting&#39;s duration. | [optional]
**end_time** | **\DateTime** | The meeting&#39;s end date and time. | [optional]
**id** | **int** | The [meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID). | [optional]
**participants_count** | **int** | The number of meeting participants. | [optional]
**session_key** | **string** | The Video SDK custom session ID. | [optional]
**source** | **string** | Whether the meeting was created directly through Zoom or via an API request:  * If the meeting was created via an OAuth app, this field returns the OAuth app&#39;s name.  * If the meeting was created via JWT or the Zoom Web Portal, this returns the &#x60;Zoom&#x60; value. | [optional]
**start_time** | **\DateTime** | The meeting&#39;s start date and time. | [optional]
**topic** | **string** | The meeting&#39;s topic. | [optional]
**total_minutes** | **int** | The sum of meeting minutes from all meeting participants in the meeting. | [optional]
**type** | **int** | The meeting type:  * &#x60;1&#x60; — An instant meeting.  * &#x60;2&#x60; — A scheduled meeting.  * &#x60;3&#x60; — A recurring meeting with no fixed time.  * &#x60;4&#x60; — A [personal meeting room](https://support.zoom.us/hc/en-us/articles/201362843). * &#x60;8&#x60; — A recurring meeting with a fixed time. | [optional]
**user_email** | **string** | The user&#39;s email address. | [optional]
**user_name** | **string** | The user&#39;s display name. | [optional]
**uuid** | **string** | The meeting&#39;s universally unique identifier (UUID). Each meeting instance generates a meeting UUID. | [optional]
**schedule_time** | **string** | The meeting&#39;s scheduled date and time. | [optional]
**join_waiting_room_time** | **string** | The date and time at which the attendee joined the waiting room. | [optional]
**join_time** | **string** | The date and time at which the attendee joined the meeting. | [optional]
**leave_time** | **string** | The date and time at which the attendee left the meeting. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
