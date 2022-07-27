# # UserSettings200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audio_conferencing** | [**\Zoom\Api\Model\UserSettingsAudioConference**](UserSettingsAudioConference.md) |  | [optional]
**email_notification** | [**\Zoom\Api\Model\UserSettingsEmailNotification**](UserSettingsEmailNotification.md) |  | [optional]
**feature** | [**\Zoom\Api\Model\UserSettingsFeature**](UserSettingsFeature.md) |  | [optional]
**in_meeting** | [**\Zoom\Api\Model\UserSettingsInMeeting**](UserSettingsInMeeting.md) |  | [optional]
**profile** | [**\Zoom\Api\Model\Profile**](Profile.md) |  | [optional]
**recording** | [**\Zoom\Api\Model\UserSettingsRecording**](UserSettingsRecording.md) |  | [optional]
**schedule_meeting** | [**\Zoom\Api\Model\UserSettingsScheduleMeeting**](UserSettingsScheduleMeeting.md) |  | [optional]
**telephony** | [**\Zoom\Api\Model\UserSettingsTelephony**](UserSettingsTelephony.md) |  | [optional]
**tsp** | [**\Zoom\Api\Model\UserSettingsTSP**](UserSettingsTSP.md) |  | [optional]
**authentication_options** | [**\Zoom\Api\Model\GroupUserSettingsAuthenticationOneOf1AuthenticationOptions[]**](GroupUserSettingsAuthenticationOneOf1AuthenticationOptions.md) | Authentication Options | [optional]
**allow_authentication_exception** | **bool** | Whether the [**Allow authentication exception**](https://support.zoom.us/hc/en-us/articles/360037117472#h_01F13A9N1FQFNVESC9C21NRHXY) setting is enabled. This lets hosts invite users who can bypass authentication. | [optional]
**meeting_authentication** | **bool** | Only authenticated users can join meetings | [optional]
**recording_authentication** | **bool** | Only authenticated users can view cloud recordings | [optional]
**meeting_security** | [**\Zoom\Api\Model\MeetingWebinarSecuritySettingsMeetingSecurity**](MeetingWebinarSecuritySettingsMeetingSecurity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
