# # AccountSettingsScheduleMeeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audio_type** | **string** | Determine how participants can join the audio portion of the meeting.&lt;br&gt;&#x60;both&#x60; - Telephony and VoIP.&lt;br&gt;&#x60;telephony&#x60; - Audio PSTN telephony only.&lt;br&gt;&#x60;voip&#x60; - VoIP only.&lt;br&gt;&#x60;thirdParty&#x60; - 3rd party audio conference. | [optional] [default to 'both']
**enforce_login** | **bool** | Only Zoom users who are signed in can join meetings. | [optional]
**enforce_login_domains** | **string** | Only signed in users with a specified domain can join the meeting. | [optional]
**enforce_login_with_domains** | **bool** | Only signed in users with a specific domain can join meetings. | [optional]
**force_pmi_jbh_password** | **bool** | Require a password for Personal Meetings if attendees can join before host. | [optional]
**host_video** | **bool** | Start meetings with the host video on. | [optional]
**jbh_time** | **int** | If the value of \&quot;join_before_host\&quot; field is set to &#x60;true&#x60;, this field can be used to indicate time limits within which a participant may join a meeting before a host. The value of this field can be one of the following:  *  &#x60;0&#x60;: Allow participant to join anytime. *  &#x60;5&#x60;: Allow participant to join 5 minutes before meeting start time.  * &#x60;10&#x60;: Allow participant to join 10 minutes before meeting start time. | [optional]
**join_before_host** | **bool** | Allow participants to join the meeting before the host arrives. | [optional]
**meeting_password_requirement** | [**\OpenAPI\Client\Model\AccountSettingsScheduleMeetingMeetingPasswordRequirement**](AccountSettingsScheduleMeetingMeetingPasswordRequirement.md) |  | [optional]
**not_store_meeting_topic** | **bool** | Always display \&quot;Zoom Meeting\&quot; as the meeting topic. | [optional]
**participant_video** | **bool** | Start meetings with the participant video on. Participants can change this setting during the meeting. | [optional]
**personal_meeting** | **bool** | Personal Meeting Setting.&lt;br&gt;&lt;br&gt; &#x60;true&#x60;: Indicates that the **\&quot;Enable Personal Meeting ID\&quot;** setting is turned on. Users can choose to use personal meeting ID for their meetings. &lt;br&gt;&lt;br&gt; &#x60;false&#x60;: Indicates that the **\&quot;Enable Personal Meeting ID\&quot;** setting is [turned off](https://support.zoom.us/hc/en-us/articles/201362843-Personal-meeting-ID-PMI-and-personal-link#h_aa0335c8-3b06-41bc-bc1f-a8b84ef17f2a). If this setting is disabled, meetings that were scheduled with PMI will be invalid. Scheduled meetings will need to be manually updated. For Zoom Phone only:If a user has been assigned a desk phone, **\&quot;Elevate to Zoom Meeting\&quot;** on desk phone will be disabled. | [optional]
**require_password_for_instant_meetings** | **bool** | Require a password for instant meetings. If you use PMI for your instant meetings, this option will be disabled. This setting is always enabled for free accounts and Pro accounts with a single host and cannot be modified for these accounts. | [optional]
**require_password_for_pmi_meetings** | **string** | Require a password for a meeting held using Personal Meeting ID (PMI) This setting is always enabled for free accounts and Pro accounts with a single host and cannot be modified for these accounts. | [optional]
**require_password_for_scheduled_meetings** | **bool** | Require a password for meetings which have already been scheduled | [optional]
**require_password_for_scheduling_new_meetings** | **bool** | Require a password when scheduling new meetings. This setting applies for regular meetings that do not use PMI. If enabled, a password will be generated while a host schedules a new meeting and participants will be required to enter the password before they can join the meeting. This setting is always enabled for free accounts and Pro accounts with a single host and cannot be modified for these accounts. | [optional]
**use_pmi_for_instant_meetings** | **bool** | Use Personal Meeting ID (PMI) when starting an instant meeting | [optional]
**use_pmi_for_scheduled_meetings** | **bool** | Use Personal Meeting ID (PMI) when scheduling a meeting | [optional]
**always_display_zoom_meeting_as_topic** | [**\OpenAPI\Client\Model\AccountSettingsScheduleMeetingAlwaysDisplayZoomMeetingAsTopic**](AccountSettingsScheduleMeetingAlwaysDisplayZoomMeetingAsTopic.md) |  | [optional]
**hide_meeting_description** | [**\OpenAPI\Client\Model\AccountSettingsScheduleMeetingHideMeetingDescription**](AccountSettingsScheduleMeetingHideMeetingDescription.md) |  | [optional]
**always_display_zoom_webinar_as_topic** | [**\OpenAPI\Client\Model\AccountSettingsScheduleMeetingAlwaysDisplayZoomWebinarAsTopic**](AccountSettingsScheduleMeetingAlwaysDisplayZoomWebinarAsTopic.md) |  | [optional]
**hide_webinar_description** | [**\OpenAPI\Client\Model\AccountSettingsScheduleMeetingHideWebinarDescription**](AccountSettingsScheduleMeetingHideWebinarDescription.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
