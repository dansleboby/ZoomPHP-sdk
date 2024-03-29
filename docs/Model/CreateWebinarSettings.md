# # CreateWebinarSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_multiple_devices** | **bool** | Allow attendees to join from multiple devices. | [optional]
**alternative_hosts** | **string** | Alternative host emails or IDs. Multiple values separated by comma. | [optional]
**alternative_host_update_polls** | **bool** | Whether the **Allow alternative hosts to add or edit polls** feature is enabled. This requires Zoom version 5.8.0 or higher. | [optional]
**approval_type** | **int** | The default value is &#x60;2&#x60;. To enable registration required, set the approval type to &#x60;0&#x60; or &#x60;1&#x60;.  Values include:&lt;br&gt;  &#x60;0&#x60; - Automatically approve.&lt;br&gt;&#x60;1&#x60; - Manually approve.&lt;br&gt;&#x60;2&#x60; - No registration required. | [optional] [default to self::APPROVAL_TYPE_2]
**attendees_and_panelists_reminder_email_notification** | [**\Zoom\Api\Model\CreateWebinarSettingsAttendeesAndPanelistsReminderEmailNotification**](CreateWebinarSettingsAttendeesAndPanelistsReminderEmailNotification.md) |  | [optional]
**audio** | **string** | Determine how participants can join the audio portion of the meeting. | [optional] [default to 'both']
**authentication_domains** | **string** | Meeting authentication domains. This option, allows you to specify the rule so that Zoom users, whose email address contains a certain domain, can join the Webinar. You can either provide multiple domains, using a comma in between and/or use a wildcard for listing domains. | [optional]
**authentication_option** | **string** | Specify the authentication type for users to join a Webinar with&#x60;meeting_authentication&#x60; setting set to &#x60;true&#x60;. The value of this field can be retrieved from the &#x60;id&#x60; field within &#x60;authentication_options&#x60; array in the response of [**Get user settings**](/docs/api-reference/zoom-api/methods#operation/userSettings) API. | [optional]
**auto_recording** | **string** | Automatic recording:&lt;br&gt;&#x60;local&#x60; - Record on local.&lt;br&gt;&#x60;cloud&#x60; -  Record on cloud.&lt;br&gt;&#x60;none&#x60; - Disabled. | [optional] [default to 'none']
**close_registration** | **bool** | Close registration after event date. | [optional]
**contact_email** | **string** | Contact email for registration | [optional]
**contact_name** | **string** | Contact name for registration | [optional]
**email_language** | **string** | Set the email language to one of the following: &#x60;en-US&#x60;,&#x60;de-DE&#x60;,&#x60;es-ES&#x60;,&#x60;fr-FR&#x60;,&#x60;jp-JP&#x60;,&#x60;pt-PT&#x60;,&#x60;ru-RU&#x60;,&#x60;zh-CN&#x60;, &#x60;zh-TW&#x60;, &#x60;ko-KO&#x60;, &#x60;it-IT&#x60;, &#x60;vi-VN&#x60;. | [optional]
**enforce_login** | **bool** | Only signed-in users can join this meeting.   **This field is deprecated and will not be supported in future.** &lt;br&gt;&lt;br&gt; Instead of this field, use the \&quot;meeting_authentication\&quot;, \&quot;authentication_option\&quot; and/or \&quot;authentication_domains\&quot; fields to establish the authentication mechanism for this Webinar. | [optional]
**enforce_login_domains** | **string** | Only signed-in users with specified domains can join meetings.  **This field is deprecated and will not be supported in future.** &lt;br&gt;&lt;br&gt; Instead of this field, use the \&quot;authentication_domains\&quot; field for this Webinar. | [optional]
**follow_up_absentees_email_notification** | [**\Zoom\Api\Model\CreateWebinarSettingsFollowUpAbsenteesEmailNotification**](CreateWebinarSettingsFollowUpAbsenteesEmailNotification.md) |  | [optional]
**follow_up_attendees_email_notification** | [**\Zoom\Api\Model\CreateWebinarSettingsFollowUpAttendeesEmailNotification**](CreateWebinarSettingsFollowUpAttendeesEmailNotification.md) |  | [optional]
**global_dial_in_countries** | **string[]** | List of global dial-in countries | [optional]
**hd_video** | **bool** | Default to HD video. | [optional] [default to false]
**hd_video_for_attendees** | **bool** | Whether HD video for attendees is enabled. This value defaults to &#x60;false&#x60;. | [optional] [default to false]
**host_video** | **bool** | Start video when host joins webinar. | [optional]
**language_interpretation** | [**\Zoom\Api\Model\CreateWebinarSettingsLanguageInterpretation**](CreateWebinarSettingsLanguageInterpretation.md) |  | [optional]
**panelist_authentication** | **bool** | Require panelists to authenticate to join | [optional]
**meeting_authentication** | **bool** | Only [authenticated](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) users can join meeting if the value of this field is set to &#x60;true&#x60;. | [optional]
**add_watermark** | **bool** | Add watermark that identifies the viewing participant. | [optional]
**add_audio_watermark** | **bool** | Add audio watermark that identifies the participants. | [optional]
**on_demand** | **bool** | Make the webinar on-demand | [optional] [default to false]
**panelists_invitation_email_notification** | **bool** | Send invitation email to panelists (If &#x60;false&#x60;, do not send invitation email to panelists). | [optional]
**panelists_video** | **bool** | Start video when panelists join webinar. | [optional]
**post_webinar_survey** | **bool** | Zoom will open a survey page in attendees&#39; browsers after leaving the webinar | [optional]
**practice_session** | **bool** | Enable practice session. | [optional] [default to false]
**question_and_answer** | [**\Zoom\Api\Model\CreateWebinarSettingsQuestionAndAnswer**](CreateWebinarSettingsQuestionAndAnswer.md) |  | [optional]
**registrants_email_notification** | **bool** | Send email notifications to registrants about approval, cancellation, denial of the registration. The value of this field must be set to true in order to use the &#x60;registrants_confirmation_email&#x60; field. | [optional]
**registrants_restrict_number** | **int** | Restrict number of registrants for a webinar. By default, it is set to &#x60;0&#x60;. A &#x60;0&#x60; value means that the restriction option is disabled. Provide a number higher than 0 to restrict the webinar registrants by the that number. | [optional] [default to 0]
**registration_type** | **int** | Registration types. Only used for recurring webinars with a fixed time.&lt;br&gt;&#x60;1&#x60; - Attendees register once and can attend any of the webinar sessions.&lt;br&gt;&#x60;2&#x60; - Attendees need to register for each session in order to attend.&lt;br&gt;&#x60;3&#x60; - Attendees register once and can choose one or more sessions to attend. | [optional] [default to self::REGISTRATION_TYPE_1]
**send_1080p_video_to_attendees** | **bool** | Whether to always send 1080p video to attendees. This value defaults to &#x60;false&#x60;. | [optional] [default to false]
**show_share_button** | **bool** | Show social share buttons on the registration page. | [optional]
**survey_url** | **string** | Survey url for post webinar survey | [optional]
**enable_session_branding** | **bool** | Whether the **Webinar Session Branding** setting is enabled. This setting lets hosts visually customize a webinar by setting a session background. This also lets hosts set Virtual Background and apply name tags to hosts, alternative hosts, panelists, interpreters, and speakers. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
