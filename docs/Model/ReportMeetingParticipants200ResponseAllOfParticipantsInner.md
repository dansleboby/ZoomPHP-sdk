# # ReportMeetingParticipants200ResponseAllOfParticipantsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_key** | **string** | The participant&#39;s SDK identifier. This value can be alphanumeric, up to a maximum length of 15 characters. | [optional]
**duration** | **int** | Participant duration. | [optional]
**failover** | **bool** | Indicates if failover happened during the meeting. | [optional]
**id** | **string** | Universally unique identifier of the Participant. It is the same as the User ID of the participant if the participant joins the meeting by logging into Zoom. If the participant joins the meeting without logging in, the value of this field will be blank.. | [optional]
**join_time** | **\DateTime** | Participant join time. | [optional]
**leave_time** | **\DateTime** | Participant leave time. | [optional]
**name** | **string** | Participant display name.  This returns an empty string value if the account calling the API is a BAA account. | [optional]
**registrant_id** | **string** | Unique identifier of the registrant. This field is only returned if you entered \&quot;registrant_id\&quot; as the value of &#x60;include_fields&#x60; query parameter. | [optional]
**user_email** | **string** | Participant email.  If the participant is **not** part of the host&#39;s account, this returns an empty string value, with some exceptions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details. This returns an empty string value if the account calling the API is a BAA account. | [optional]
**user_id** | **string** | Participant ID. This is a unique ID assigned to the participant joining a meeting and is valid for that meeting only. | [optional]
**status** | **string** | The participant&#39;s status:  * &#x60;in_meeting&#x60; — In a meeting.  * &#x60;in_waiting_room&#x60; — In a waiting room. | [optional]
**bo_mtg_id** | **string** | The [breakout room](https://support.zoom.us/hc/en-us/articles/206476313-Managing-breakout-rooms) ID. Each breakout room is assigned a unique ID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
