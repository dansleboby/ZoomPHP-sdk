# MeetingSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_video** | **bool** | Start video when the host joins the meeting. | [optional] 
**participant_video** | **bool** | Start video when participants join the meeting. | [optional] 
**cn_meeting** | **bool** | Host meeting in China. | [optional] [default to false]
**in_meeting** | **bool** | Host meeting in India. | [optional] [default to false]
**join_before_host** | **bool** | Allow participants to join the meeting before the host starts the meeting. Only used for scheduled or recurring meetings. | [optional] [default to false]
**mute_upon_entry** | **bool** | Mute participants upon entry. | [optional] [default to false]
**watermark** | **bool** | Add watermark when viewing a shared screen. | [optional] [default to false]
**use_pmi** | **bool** | Use a personal meeting ID. Only used for scheduled meetings and recurring meetings with no fixed time. | [optional] [default to false]
**approval_type** | **int** | Enable registration and set approval for the registration. Note that this feature requires the host to be of **Licensed** user type. **Registration cannot be enabled for a basic user.** &lt;br&gt;&lt;br&gt;  &#x60;0&#x60; - Automatically approve.&lt;br&gt;&#x60;1&#x60; - Manually approve.&lt;br&gt;&#x60;2&#x60; - No registration required. | [optional] 
**registration_type** | **int** | Registration type. Used for recurring meeting with fixed time only. &lt;br&gt;&#x60;1&#x60; Attendees register once and can attend any of the occurrences.&lt;br&gt;&#x60;2&#x60; Attendees need to register for each occurrence to attend.&lt;br&gt;&#x60;3&#x60; Attendees register once and can choose one or more occurrences to attend. | [optional] 
**audio** | **string** | Determine how participants can join the audio portion of the meeting.&lt;br&gt;&#x60;both&#x60; - Both Telephony and VoIP.&lt;br&gt;&#x60;telephony&#x60; - Telephony only.&lt;br&gt;&#x60;voip&#x60; - VoIP only. | [optional] [default to 'both']
**auto_recording** | **string** | Automatic recording:&lt;br&gt;&#x60;local&#x60; - Record on local.&lt;br&gt;&#x60;cloud&#x60; -  Record on cloud.&lt;br&gt;&#x60;none&#x60; - Disabled. | [optional] [default to 'none']
**enforce_login** | **bool** | Only signed in users can join this meeting.  **This field is deprecated and will not be supported in the future.**  &lt;br&gt;&lt;br&gt;As an alternative, use the \&quot;meeting_authentication\&quot;, \&quot;authentication_option\&quot; and \&quot;authentication_domains\&quot; fields to understand the [authentication configurations](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) set for the meeting. | [optional] 
**enforce_login_domains** | **string** | Only signed in users with specified domains can join meetings.  **This field is deprecated and will not be supported in the future.**  &lt;br&gt;&lt;br&gt;As an alternative, use the \&quot;meeting_authentication\&quot;, \&quot;authentication_option\&quot; and \&quot;authentication_domains\&quot; fields to understand the [authentication configurations](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars) set for the meeting. | [optional] 
**alternative_hosts** | **string** | Alternative host&#39;s emails or IDs: multiple values separated by a comma. | [optional] 
**close_registration** | **bool** | Close registration after event date | [optional] [default to false]
**waiting_room** | **bool** | Enable waiting room | [optional] [default to false]
**global_dial_in_countries** | **string[]** | List of global dial-in countries | [optional] 
**global_dial_in_numbers** | [**\Zoom\Api\Model\InlineResponse20111SettingsGlobalDialInNumbers[]**](InlineResponse20111SettingsGlobalDialInNumbers.md) | Global Dial-in Countries/Regions | [optional] 
**contact_name** | **string** | Contact name for registration | [optional] 
**contact_email** | **string** | Contact email for registration | [optional] 
**registrants_confirmation_email** | **bool** | Send confirmation email to registrants upon successful registration. | [optional] 
**registrants_email_notification** | **bool** | Send email notifications to registrants about approval, cancellation, denial of the registration. The value of this field must be set to true in order to use the &#x60;registrants_confirmation_email&#x60; field. | [optional] 
**meeting_authentication** | **bool** | &#x60;true&#x60;- Only authenticated users can join meetings. | [optional] 
**authentication_option** | **string** | Meeting authentication option id. | [optional] 
**authentication_domains** | **string** | If user has configured [\&quot;Sign Into Zoom with Specified Domains\&quot;](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars#h_5c0df2e1-cfd2-469f-bb4a-c77d7c0cca6f) option, this will list the domains that are authenticated. | [optional] 
**authentication_name** | **string** | Authentication name set in the [authentication profile](https://support.zoom.us/hc/en-us/articles/360037117472-Authentication-Profiles-for-Meetings-and-Webinars#h_5c0df2e1-cfd2-469f-bb4a-c77d7c0cca6f). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


