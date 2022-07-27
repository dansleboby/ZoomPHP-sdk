# # AccountSettingsUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**security** | [**\Zoom\Api\Model\AccountSettingsSecurity**](AccountSettingsSecurity.md) |  | [optional]
**audio_conferencing** | [**\Zoom\Api\Model\AccountSettingsAudioConference**](AccountSettingsAudioConference.md) |  | [optional]
**email_notification** | [**\Zoom\Api\Model\AccountSettingsEmailNotification**](AccountSettingsEmailNotification.md) |  | [optional]
**feature** | [**\Zoom\Api\Model\AccountSettingsFeature**](AccountSettingsFeature.md) |  | [optional]
**in_meeting** | [**\Zoom\Api\Model\UpdateVideoSDKAccountInMeetingSettingsInMeeting**](UpdateVideoSDKAccountInMeetingSettingsInMeeting.md) |  | [optional]
**integration** | [**\Zoom\Api\Model\AccountSettingsIntegration**](AccountSettingsIntegration.md) |  | [optional]
**other_options** | [**\Zoom\Api\Model\AccountSettingsOtherOptions**](AccountSettingsOtherOptions.md) |  | [optional]
**profile** | [**\Zoom\Api\Model\Profile**](Profile.md) |  | [optional]
**recording** | [**\Zoom\Api\Model\UpdateVideoSDKAccountRecordingSettingsRecording**](UpdateVideoSDKAccountRecordingSettingsRecording.md) |  | [optional]
**schedule_meeting** | [**\Zoom\Api\Model\AccountUpdateSettingsScheduleMeeting**](AccountUpdateSettingsScheduleMeeting.md) |  | [optional]
**telephony** | [**\Zoom\Api\Model\AccountSettingsUpdateTelephony**](AccountSettingsUpdateTelephony.md) |  | [optional]
**tsp** | [**\Zoom\Api\Model\AccountSettingsTSP**](AccountSettingsTSP.md) |  | [optional]
**zoom_rooms** | [**\Zoom\Api\Model\AccountSettingsZoomRooms**](AccountSettingsZoomRooms.md) |  | [optional]
**allow_authentication_exception** | **bool** | Whether to enable the [**Allow authentication exception**](https://support.zoom.us/hc/en-us/articles/360037117472#h_01F13A9N1FQFNVESC9C21NRHXY) setting. This lets hosts invite users who can bypass authentication. | [optional]
**authentication_option** | [**\Zoom\Api\Model\AccountSettingsAuthenticationUpdateOneOf1AuthenticationOption**](AccountSettingsAuthenticationUpdateOneOf1AuthenticationOption.md) |  | [optional]
**meeting_authentication** | **bool** | If set to \&quot;true\&quot;, only authenticated users can join meetings. The method for authentication can be defined in the \&quot;authentication_option\&quot;. | [optional]
**recording_authentication** | **bool** | If set to &#x60;true&#x60;, only authenticated users can view the cloud recordings.&lt;br&gt;&lt;br&gt; The authentication profile **must first be set at the account level via the account settings**, and later can be disabled after enabling on the preferred level - i.e. user level using user settings or at group level via group settings  (if you do not want the settings to be enabled on the entire account). | [optional]
**meeting_security** | [**\Zoom\Api\Model\MeetingOrWebinarSecurityAccountSettings1MeetingSecurity**](MeetingOrWebinarSecurityAccountSettings1MeetingSecurity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
