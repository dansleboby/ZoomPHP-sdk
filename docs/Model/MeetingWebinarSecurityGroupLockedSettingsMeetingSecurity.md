# # MeetingWebinarSecurityGroupLockedSettingsMeetingSecurity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approved_or_denied_countries_or_regions** | **bool** | Whether the [**Approve or block entry for users from specific countries/regions**](https://support.zoom.us/hc/en-us/articles/360060086231-Joining-from-specific-countries-regions) setting is enabled. | [optional]
**auto_security** | **bool** | Whether all meetings must be secured with at least one security option.    This setting can only be disabled by Enterprise, ISV, Business (with more than 100 licenses), and Education accounts. | [optional]
**block_user_domain** | **bool** | Whether users in specific domains are blocked from joining meetings and webinars. | [optional]
**embed_password_in_join_link** | **bool** | Whether the meeting password is encrypted and included in the invitation link. The provided link will allow participants to join the meeting without having to enter the password. | [optional]
**encryption_type** | **string** | The type of encryption used when starting a meeting:  * &#x60;enhanced_encryption&#x60; — Enhanced encryption. Encryption data is stored in the cloud.  * &#x60;e2ee&#x60; — End-to-end encryption. The encryption key is stored on the local device and cannot be obtained by anyone else. Enabling E2EE also [**disables** certain features](https://support.zoom.us/hc/en-us/articles/360048660871), such as cloud recording, live streaming, and allowing participants to join before the host. | [optional]
**end_to_end_encrypted_meetings** | **bool** | Whether end-to-end encryption is enabled for meetings. | [optional]
**meeting_password** | **bool** | Whether all instant and scheduled meetings that users can join via client or Zoom Rooms systems are password-protected. [Personal Meeting ID (PMI)](https://support.zoom.us/hc/en-us/articles/203276937) meetings are **not** included in this setting. | [optional]
**only_authenticated_can_join_from_webclient** | **bool** | Whether to specify that only authenticated users can join the meeting from the web client. | [optional]
**phone_password** | **bool** | Whether passwords are required for participants joining by phone.    If enabled and the meeting is password-protected, a numeric password is required for participants to join by phone. For meetings with alphanumeric passwords, a numeric password will be generated. | [optional]
**pmi_password** | **bool** | Whether all Personal Meeting ID (PMI) meetings that users can join via client or Zoom Rooms systems are password-protected. | [optional]
**waiting_room** | **bool** | Whether participants are placed in the [**Waiting Room**](https://support.zoom.us/hc/en-us/articles/115000332726-Waiting-Room) when they join a meeting.    If the **Waiting Room** feature is enabled, the [**Allow participants to join before host**](https://support.zoom.us/hc/en-us/articles/202828525-Allow-participants-to-join-before-host) setting is automatically disabled. | [optional]
**webinar_password** | **bool** | Whether to generate a password when scheduling webinars. Participants must use the generated password to join the scheduled webinar. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
