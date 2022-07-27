# # MeetingSecuritySettingsMeetingSecurity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_security** | **bool** | &#x60;true&#x60;: Require that all meetings are secured with at least one security option.  This setting can only be disabled by Enterprise, ISV, Business (with more than 100 licenses), and Education accounts. [Learn more](https://marketplace.zoom.us/docs/guides/stay-up-to-date/announcements#meeting-security). | [optional]
**block_user_domain** | **bool** | If set to &#x60;true&#x60;, Block users in specific domains from joining meetings and webinars. | [optional]
**block_user_domain_list** | **string[]** | Specific domain, for Example: &#x60;*.example.com&#x60;. | [optional]
**embed_password_in_join_link** | **bool** | If set to &#x60;true&#x60;, meeting passcode will be encrypted and included in the invite link to allow participants to join with just one click without having to enter the passcode. | [optional]
**encryption_type** | **string** | Choose between enhanced encryption and [end-to-end encryption](https://support.zoom.us/hc/en-us/articles/360048660871) when starting or a meeting. When using end-to-end encryption, several features (e.g. cloud recording, phone/SIP/H.323 dial-in) will be **automatically disabled**. &lt;br&gt;&lt;br&gt;The value of this field can be one of the following:&lt;br&gt; &#x60;enhanced_encryption&#x60;: Enhanced encryption. Encryption is stored in the cloud if you enable this option. &lt;br&gt;  &#x60;e2ee&#x60;: [End-to-end encryption](https://support.zoom.us/hc/en-us/articles/360048660871). The encryption key is stored in your local device and can not be obtained by anyone else. Enabling this setting also **disables** the following features: join before host, cloud recording, streaming, live transcription, breakout rooms, polling, 1:1 private chat, and meeting reactions. | [optional]
**end_to_end_encrypted_meetings** | **bool** | Allow use of end-to-end encryption for meetings. If set to &#x60;true&#x60;, you can specify the encryption type in &#x60;encryption_type&#x60; field. | [optional]
**meeting_password** | **bool** | If set to &#x60;true&#x60;, all instant, and scheduled meetings that users can join via client, or room systems will be passcode-protected. The Personal Meeting ID (PMI) meetings are not included in this setting. | [optional]
**meeting_password_requirement** | [**\Zoom\Api\Model\MeetingSecuritySettingsMeetingSecurityMeetingPasswordRequirement**](MeetingSecuritySettingsMeetingSecurityMeetingPasswordRequirement.md) |  | [optional]
**phone_password** | **bool** | Require passcode for participants joining by phone. If set to &#x60;true&#x60;, a numeric passcode will be required for participants joining by phone if your meeting has a passcode. For meeting with an alphanumeric passcode, a numeric version will be generated. | [optional]
**pmi_password** | **bool** | If set to &#x60;true&#x60;, all Personal Meeting ID (PMI) meetings that users can join via client, or room systems will be passcode-protected. | [optional]
**require_password_for_scheduled_meeting** | **bool** | Require a passcode for meetings which have already been scheduled. | [optional]
**require_password_for_scheduled_webinar** | **bool** | Require a passcode for webinars which have already been scheduled. | [optional]
**waiting_room** | **bool** | When participants join a meeting, place them in a waiting room and require the host to admit them individually. Enabling the waiting room automatically disables the setting for allowing participants to join before host. | [optional]
**waiting_room_settings** | [**\Zoom\Api\Model\MeetingSecuritySettingsMeetingSecurityWaitingRoomSettings**](MeetingSecuritySettingsMeetingSecurityWaitingRoomSettings.md) |  | [optional]
**webinar_password** | **bool** | If set to &#x60;true&#x60;, a passcode will be generated when scheduling a Webinar and participants require the passcode to join the Webinar. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
