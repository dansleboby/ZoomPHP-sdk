# # GetZRLocationSettings200ResponseOneOfZoomRooms

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_multiple_content_sharing** | **bool** | Enable multiple participants to [share content simultaneously](https://support.zoom.us/hc/en-us/articles/360017767812-Sharing-Multiple-Screens-in-a-Zoom-Room) by default. | [optional]
**audio_device_daily_auto_test** | **bool** | Enable [automated audio test](https://support.zoom.us/hc/en-us/articles/360000319683-Zoom-Rooms-Daily-Audio-Testing) to ensure high quality audio. | [optional]
**auto_accept_incoming_call_and_fecc** | **bool** | Automatically accept incoming calls made from other Zoom Rooms or contacts in your account. Enabling this setting will also automatically allow far-end camera control.  This setting is returned only for location type - \&quot;country\&quot;. | [optional]
**auto_direct_sharing** | **bool** | Enable participants in a Zoom Room to share their laptop screen on the Zoom Room TV without entering a meeting ID or sharing code. | [optional]
**auto_start_scheduled_meeting** | **bool** | Automatically start scheduled meetings according to the start time listed on the calendar associated with the room. A meeting alert will appear 10 minutes prior to the scheduled time on the TV. | [optional]
**auto_stop_scheduled_meeting** | **bool** | Automatically stop the meeting at the end time as scheduled and listed in the calendar associated with the room. | [optional]
**count_attendees_number_in_room** | **bool** | Use facial detection technology to [determine and display the attendees count](https://support.zoom.us/hc/en-us/articles/360031027111-Count-Attendees-in-Zoom-Rooms) after meetings on Dashboard. | [optional]
**display_feedback_survey** | **bool** | Display a [survey](https://support.zoom.us/hc/en-us/articles/214193146-End-of-Meeting-Attendee-Feedback) at the end of each meeting regarding the audio and video quality on the Zoom Rooms Controller. | [optional]
**display_meeting_list** | **bool** | Show the same information on the TV that is shown on the controller. | [optional]
**display_top_banner** | **bool** | Allow to display room name, time and sharing key on the top portion of TV. | [optional]
**encrypt_shared_screen_content** | **bool** | Encrypt screen and content shared in meetings. | [optional]
**hide_id_for_private_meeting** | **bool** | If enabled, the meeting host and meeting ID (in addition to the meeting topic) are hidden from the Zoom Rooms display for private meetings. This affects meetings that were originally scheduled as private, as well as public meetings that were transformed to private. | [optional]
**hide_self_view** | **bool** | If enabled, you will not see your own video but other people in the meeting can still see your video.  This setting is returned only for location type - \&quot;country\&quot;. | [optional]
**lock_speaker_volume_control** | **bool** | Lock speaker volume control on controller.  This setting is returned only for location type - \&quot;country\&quot;. | [optional]
**send_whiteboard_to_internal_contact_only** | **bool** | Restrict[ sending Whiteboard sessions](https://support.zoom.us/hc/en-us/articles/115004797286-Using-the-Whiteboard-in-Zoom-Rooms-for-Touch#h_781274b3-5237-4320-8826-be2120b00e21) to contacts or internal users only. | [optional]
**show_alert_before_meeting** | **bool** | If enabled, the upcoming meeting alert message will be shown on the TV display. The value of the &#x60;upcoming_meeting_alert&#x60; field should be set to &#x60;true&#x60; to use this field. | [optional]
**show_call_history_in_room** | **bool** | Allow users to see call history of joined meetings and phone calls from the Zoom Rooms controller. | [optional]
**show_contact_list_on_controller** | **bool** | If enabled, you can invite participants from the contact list during a meeting or when starting a meeting | [optional]
**show_non_video_participants** | **bool** | When enabled, meeting participants that are audio only or have their video turned off will also be shown on the Zoom Rooms display by default. | [optional]
**start_airplay_manually** | **bool** | Require the AirPlay service to be [started by an administrator](https://support.zoom.us/hc/en-us/articles/204726885-Screen-Share-Using-Airplay-Mirroring#h_a342ad38-4e46-47a8-a1d9-cded3b144b39) rather than always being available. | [optional]
**start_airplay_mirroring** | **bool** | Allow users to share content via Apple Screen Mirroring (called Airplay on iOS 11 or earlier) in Zoom Rooms | [optional]
**start_hdmi_content_share_manualy** | **bool** | Disable automatic detection and enable manual content sharing from a device to a Zoom Room. Learn more [here](https://support.zoom.us/hc/en-us/articles/201504265-Wired-HDMI-Screen-Share-via-Capture-Device).  This setting is returned only for location type - \&quot;country\&quot;. | [optional]
**support_join_3rd_party_meeting** | **bool** | Integrate with Skype for Business, GoToMeeting, or WebEx and show the meeting dial-in button on the meeting list tab for Zoom Rooms Controllers. | [optional]
**transform_meeting_to_private** | **bool** | If enabled, all meetings in this room will be treated as [private meetings](https://support.zoom.us/hc/en-us/articles/115001051063-Zoom-Rooms-Private-Meetings), and the Zoom Room will display \&quot;Your Name&#39;s Meeting\&quot; instead of the real meeting topic. | [optional]
**upcoming_meeting_alert** | **bool** | If enabled, a reminder will display 10 minutes prior to the next scheduled meeting on the controller. | [optional]
**voice_commands** | **bool** | Enable [voice commands](https://support.zoom.us/hc/en-us/articles/115000527983-Voice-Command-with-Zoom-Rooms) with Zoom Rooms. | [optional]
**weekly_system_restart** | **bool** | [Restart](https://support.zoom.us/hc/en-us/articles/205418949-Zoom-Rooms-Weekly-System-Restart) the Zoom Rooms computer and controller once a week. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
