# # AccountSettings200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**security** | [**\Zoom\Api\Model\AccountSettingsSecurity**](AccountSettingsSecurity.md) |  | [optional]
**audio_conferencing** | [**\Zoom\Api\Model\AccountSettingsAudioConference**](AccountSettingsAudioConference.md) |  | [optional]
**email_notification** | [**\Zoom\Api\Model\AccountSettingsEmailNotification**](AccountSettingsEmailNotification.md) |  | [optional]
**feature** | [**\Zoom\Api\Model\AccountSettingsFeature**](AccountSettingsFeature.md) |  | [optional]
**in_meeting** | [**\Zoom\Api\Model\VideoSDKAccountInMeetingSettingsInMeeting**](VideoSDKAccountInMeetingSettingsInMeeting.md) |  | [optional]
**integration** | [**\Zoom\Api\Model\AccountSettingsIntegration**](AccountSettingsIntegration.md) |  | [optional]
**other_options** | [**\Zoom\Api\Model\AccountSettingsOtherOptions**](AccountSettingsOtherOptions.md) |  | [optional]
**profile** | [**\Zoom\Api\Model\Profile**](Profile.md) |  | [optional]
**recording** | [**\Zoom\Api\Model\VideoSDKAccountRecordingSettingsRecording**](VideoSDKAccountRecordingSettingsRecording.md) |  | [optional]
**schedule_meeting** | [**\Zoom\Api\Model\AccountSettingsScheduleMeeting**](AccountSettingsScheduleMeeting.md) |  | [optional]
**telephony** | [**\Zoom\Api\Model\AccountSettingsTelephony**](AccountSettingsTelephony.md) |  | [optional]
**tsp** | [**\Zoom\Api\Model\AccountSettingsTSP**](AccountSettingsTSP.md) |  | [optional]
**zoom_rooms** | [**\Zoom\Api\Model\AccountSettingsZoomRooms**](AccountSettingsZoomRooms.md) |  | [optional]
**allow_authentication_exception** | **bool** | Whether to enable the [**Allow authentication exception**](https://support.zoom.us/hc/en-us/articles/360037117472#h_01F13A9N1FQFNVESC9C21NRHXY) setting. This lets hosts invite users who can bypass authentication. | [optional]
**authentication_options** | [**\Zoom\Api\Model\AccountSettingsAuthenticationOneOf1AuthenticationOptions[]**](AccountSettingsAuthenticationOneOf1AuthenticationOptions.md) |  | [optional]
**meeting_authentication** | **bool** | Only authenticated users can join meetings | [optional]
**recording_authentication** | **bool** | Only authenticated users can view cloud recordings | [optional]
**admin_change_name_pic** | **bool** | Whether to only allow account administrators to change a user&#39;s picture. | [optional]
**admin_change_user_info** | **bool** | Whether to only allow account administrators to change a user&#39;s information. | [optional]
**user_modifiable_info_by_admin** | **string[]** | If the &#x60;admin_change_user_info&#x60; value is &#x60;true&#x60;, the list of the types of user information that only the account administrators can modify:  * &#x60;name&#x60;  * &#x60;profile_picture&#x60;  * &#x60;sign_in_email&#x60;  * &#x60;host_key&#x60; | [optional]
**hide_billing_info** | **bool** | Hide billing information. | [optional]
**import_photos_from_devices** | **bool** | Allow users to import photos from a photo library on a  device. | [optional]
**password_requirement** | [**\Zoom\Api\Model\AccountSettingsSecurityPasswordRequirement**](AccountSettingsSecurityPasswordRequirement.md) |  | [optional]
**sign_again_period_for_inactivity_on_client** | **int** | Settings for User Sign In interval requirements after a period of inactivity. If enabled, this setting forces automatic logout of users in Zoom Client app after a set amount of time. &lt;br&gt;  If this setting is disabled, the value of this field will be &#x60;0&#x60;. If the setting is enabled, the value of this field will indicate the **period of inactivity** in minutes after which, an inactive user will be automatically logged out of the Zoom Client. The value for the period of inactivity can be one of the following:&lt;br&gt;  &#x60;5&#x60;: 5 minutes&lt;br&gt; &#x60;10&#x60;: 10 minutes&lt;br&gt; &#x60;15&#x60;: 15 minutes&lt;br&gt; &#x60;30&#x60;: 30 minutes&lt;br&gt; &#x60;45&#x60;: 45 minutes&lt;br&gt; &#x60;60&#x60;: 60 minutes&lt;br&gt; &#x60;90&#x60;: 90 minutes&lt;br&gt; &#x60;120&#x60;: 120 minutes | [optional]
**sign_again_period_for_inactivity_on_web** | **int** | Settings for User Sign In interval requirements after a period of inactivity. If enabled, this setting forces automatic logout of users in Zoom Web Portal after a set amount of time. &lt;br&gt;  If this setting is disabled, the value of this field will be &#x60;0&#x60;. If the setting is enabled, the value of this field will indicate the **period of inactivity** in minutes after which, an inactive user will be automatically logged out of the Zoom Web Portal. The value for the period of inactivity can be one of the following:&lt;br&gt;  &#x60;5&#x60;: 5 minutes&lt;br&gt; &#x60;10&#x60;: 10 minutes&lt;br&gt; &#x60;15&#x60;: 15 minutes&lt;br&gt; &#x60;30&#x60;: 30 minutes&lt;br&gt; &#x60;60&#x60;: 60 minutes&lt;br&gt; &#x60;120&#x60;: 120 minutes | [optional]
**sign_in_with_two_factor_auth** | **string** | Settings for 2FA( [two factor authentication](https://support.zoom.us/hc/en-us/articles/360038247071) ). The value can be one of the following: &#x60;all&#x60;: Two factor authentication will be enabled for all users in the account.&lt;br&gt; &#x60;none&#x60;: Two factor authentication is disabled.&lt;br&gt; &#x60;group&#x60;: Two factor authentication will be enabled for users belonging to specific groups. If 2FA is enabled for certain groups, the group IDs of the group(s) will be provided in the &#x60;sign_in_with_two_factor_auth_groups&#x60; field.&lt;br&gt; &#x60;role&#x60;: Two factor authentication will be enabled only for users assigned with specific roles in the account. If 2FA is enabled for specific roles, the role IDs will be provided in the &#x60;sign_in_with_two_factor_auth_roles&#x60; field. | [optional]
**sign_in_with_two_factor_auth_groups** | **string[]** | This field contains group IDs of groups that have 2FA enabled. This field is only returned if the value of &#x60;sign_in_with_two_factor_auth&#x60; is &#x60;group&#x60; | [optional]
**sign_in_with_two_factor_auth_roles** | **string[]** | This field contains role IDs of roles that have 2FA enabled. This field is only returned if the value of &#x60;sign_in_with_two_factor_auth&#x60; is &#x60;role&#x60;. | [optional]
**meeting_security** | [**\Zoom\Api\Model\MeetingOrWebinarSecurityAccountSettingsMeetingSecurity**](MeetingOrWebinarSecurityAccountSettingsMeetingSecurity.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
