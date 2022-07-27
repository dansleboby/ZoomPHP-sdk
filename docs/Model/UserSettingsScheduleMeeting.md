# # UserSettingsScheduleMeeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audio_type** | **string** | Determine how participants can join the audio portion of the meeting:&lt;br&gt;&#x60;both&#x60; - Telephony and VoIP.&lt;br&gt;&#x60;telephony&#x60; - Audio PSTN telephony only.&lt;br&gt;&#x60;voip&#x60; - VoIP only.&lt;br&gt;&#x60;thirdParty&#x60; - Third party audio conference. | [optional] [default to 'voip']
**default_password_for_scheduled_meetings** | **string** | Passcode for already scheduled meetings | [optional]
**embed_password_in_join_link** | **bool** | Encrypt the meeting passcode and include it in the join meeting link to allow participants to join with just one click without having to enter the passcode. | [optional]
**force_pmi_jbh_password** | **bool** | Require a passcode for personal meetings if attendees can join before host. | [optional]
**host_video** | **bool** | Start meetings with host video on. | [optional]
**join_before_host** | **bool** | Join the meeting before host arrives. | [optional]
**meeting_password_requirement** | [**\Zoom\Api\Model\UserSettingsScheduleMeetingMeetingPasswordRequirement**](UserSettingsScheduleMeetingMeetingPasswordRequirement.md) |  | [optional]
**participants_video** | **bool** | Start meetings with participants video on. | [optional]
**personal_meeting** | **bool** | Personal Meeting Setting.&lt;br&gt;&lt;br&gt; &#x60;true&#x60;: Indicates that the **\&quot;Enable [Personal Meeting ID (PMI)](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#understanding-personal-meeting-id-pmi)\&quot;** setting is turned on. Users can choose to use a PMI for their meetings. &lt;br&gt;&lt;br&gt; &#x60;false&#x60;: Indicates that the **\&quot;Enable Personal Meeting ID\&quot;** setting is [turned off](https://support.zoom.us/hc/en-us/articles/201362843-Personal-meeting-ID-PMI-and-personal-link#h_aa0335c8-3b06-41bc-bc1f-a8b84ef17f2a). If this setting is disabled, meetings that were scheduled with PMI will be invalid. Scheduled meetings will need to be manually updated. For Zoom Phone only:If a user has been assigned a desk phone, **\&quot;Elevate to Zoom Meeting\&quot;** on desk phone will be disabled. | [optional]
**pmi_password** | **string** | PMI passcode | [optional]
**pstn_password_protected** | **bool** | Generate and require passcode for participants joining by phone. | [optional]
**require_password_for_instant_meetings** | **bool** | Require a passcode for instant meetings. If you use PMI for your instant meetings, this option will be disabled. This setting is always enabled for free accounts and Pro accounts with a single host and cannot be modified for these accounts. | [optional]
**require_password_for_pmi_meetings** | **string** | Require a passcode for Personal Meeting ID (PMI). This setting is always enabled for free accounts and Pro accounts with a single host and cannot be modified for these accounts. | [optional]
**require_password_for_scheduled_meetings** | **bool** | Require a passcode for meetings which have already been scheduled | [optional]
**require_password_for_scheduling_new_meetings** | **bool** | Require a passcode when scheduling new meetings.This setting is always enabled for free accounts and Pro accounts with a single host and cannot be modified for these accounts. | [optional]
**use_pmi_for_instant_meetings** | **bool** | Use a [Personal Meeting ID (PMI)](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#understanding-personal-meeting-id-pmi) when starting an instant meeting. | [optional]
**use_pmi_for_scheduled_meetings** | **bool** | Use a [Personal Meeting ID (PMI)](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#understanding-personal-meeting-id-pmi) when scheduling a meeting. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
