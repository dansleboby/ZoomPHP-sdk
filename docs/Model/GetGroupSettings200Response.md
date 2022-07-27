# # GetGroupSettings200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audio_conferencing** | [**\Zoom\Api\Model\GroupSettingsAudioConference**](GroupSettingsAudioConference.md) |  | [optional]
**email_notification** | [**\Zoom\Api\Model\GetGroupSettings200ResponseOneOfEmailNotification**](GetGroupSettings200ResponseOneOfEmailNotification.md) |  | [optional]
**in_meeting** | [**\Zoom\Api\Model\GetGroupSettings200ResponseOneOfInMeeting**](GetGroupSettings200ResponseOneOfInMeeting.md) |  | [optional]
**other_options** | [**\Zoom\Api\Model\GroupSettingsOtherOptions**](GroupSettingsOtherOptions.md) |  | [optional]
**profile** | [**\Zoom\Api\Model\Profile**](Profile.md) |  | [optional]
**recording** | [**\Zoom\Api\Model\GetGroupSettings200ResponseOneOfRecording**](GetGroupSettings200ResponseOneOfRecording.md) |  | [optional]
**schedule_meeting** | [**\Zoom\Api\Model\GetGroupSettings200ResponseOneOfScheduleMeeting**](GetGroupSettings200ResponseOneOfScheduleMeeting.md) |  | [optional]
**telephony** | [**\Zoom\Api\Model\GetGroupSettings200ResponseOneOfTelephony**](GetGroupSettings200ResponseOneOfTelephony.md) |  | [optional]
**allow_authentication_exception** | **bool** | Whether the [**Allow authentication exception**](https://support.zoom.us/hc/en-us/articles/360037117472#h_01F13A9N1FQFNVESC9C21NRHXY) setting is enabled. This lets hosts invite users who can bypass authentication. | [optional]
**authentication_options** | [**\Zoom\Api\Model\GroupUserSettingsAuthenticationOneOf1AuthenticationOptions[]**](GroupUserSettingsAuthenticationOneOf1AuthenticationOptions.md) | Authentication Options | [optional]
**meeting_authentication** | **bool** | Only authenticated users can join meetings | [optional]
**recording_authentication** | **bool** | Only authenticated users can view cloud recordings | [optional]
**meeting_security** | [**\Zoom\Api\Model\MeetingWebinarSecurityGroupSettingsMeetingSecurity**](MeetingWebinarSecurityGroupSettingsMeetingSecurity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
