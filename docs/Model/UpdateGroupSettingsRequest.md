# # UpdateGroupSettingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audio_conferencing** | [**\Zoom\Api\Model\GroupSettingsAudioConference**](GroupSettingsAudioConference.md) |  | [optional]
**email_notification** | [**\Zoom\Api\Model\GetGroupSettings200ResponseOneOfEmailNotification**](GetGroupSettings200ResponseOneOfEmailNotification.md) |  | [optional]
**in_meeting** | [**\Zoom\Api\Model\UpdateGroupSettingsRequestOneOfInMeeting**](UpdateGroupSettingsRequestOneOfInMeeting.md) |  | [optional]
**other_options** | [**\Zoom\Api\Model\GroupSettingsOtherOptions**](GroupSettingsOtherOptions.md) |  | [optional]
**profile** | [**\Zoom\Api\Model\Profile**](Profile.md) |  | [optional]
**recording** | [**\Zoom\Api\Model\UpdateGroupSettingsRequestOneOfRecording**](UpdateGroupSettingsRequestOneOfRecording.md) |  | [optional]
**schedule_meeting** | [**\Zoom\Api\Model\UpdateGroupSettingsRequestOneOfScheduleMeeting**](UpdateGroupSettingsRequestOneOfScheduleMeeting.md) |  | [optional]
**telephony** | [**\Zoom\Api\Model\UpdateGroupSettingsRequestOneOfTelephony**](UpdateGroupSettingsRequestOneOfTelephony.md) |  | [optional]
**authentication_option** | [**\Zoom\Api\Model\GroupUserSettingsAuthenticationUpdateOneOf1AuthenticationOption**](GroupUserSettingsAuthenticationUpdateOneOf1AuthenticationOption.md) |  | [optional]
**meeting_authentication** | **bool** | Only authenticated users can join meetings | [optional]
**recording_authentication** | **bool** | Only authenticated users can view cloud recordings | [optional]
**meeting_security** | [**\Zoom\Api\Model\MeetingWebinarSecurityGroupSettings1MeetingSecurity**](MeetingWebinarSecurityGroupSettings1MeetingSecurity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
