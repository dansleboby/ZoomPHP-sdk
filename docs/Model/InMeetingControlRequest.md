# # InMeetingControlRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | **string** | The in-meeting method to control:  * &#x60;recording.start&#x60; — Start the recording.  * &#x60;recording.stop&#x60; — Stop the recording.  * &#x60;recording.pause&#x60; — Pause the recording.  * &#x60;recording.resume&#x60; — Resume a paused recording.  * &#x60;participant.invite&#x60; — Invite a participant to the meeting.  * &#x60;participant.invite.callout&#x60; — Invite a participant to the meeting through [call out (phone)](https://support.zoom.us/hc/en-us/articles/4404535651085-Inviting-others-by-phone-call-out).  * &#x60;participant.invite.room_system_callout&#x60; — Invite a participant to the meeting through [call out (room system)]. | [optional]
**params** | [**\Zoom\Api\Model\InMeetingControlRequestParams**](InMeetingControlRequestParams.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
