# # QOSParticipant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The participant&#39;s universally unique ID. This value is the same as the participant&#39;s user ID if the participant joins the webinar by logging into Zoom. If the participant joins the webinar without logging into Zoom, this returns an empty value. | [optional]
**device** | **string** | The type of device the participant used to join the meeting:  * &#x60;Phone&#x60; — The participant joined via PSTN.  * &#x60;H.323/SIP&#x60; — The participant joined via an H.323 or SIP device.  * &#x60;Windows&#x60; — The participant joined via VoIP using a Windows device.  * &#x60;Mac&#x60; — The participant joined via VoIP using a Mac device.  * &#x60;iOS&#x60; — The participant joined via VoIP using an iOS device.  * &#x60;Android&#x60; — The participant joined via VoIP using an Android device.   **Note:** This response returns an empty string (&#x60;““&#x60;) value for any users who are **not** a part of the host&#39;s account (external users). | [optional]
**domain** | **string** | The participant&#39;s PC domain.   **Note:** This response returns an empty string (&#x60;““&#x60;) value for any users who are **not** a part of the host&#39;s account (external users). | [optional]
**harddisk_id** | **string** | The participant&#39;s hard disk ID.   **Note:** This response returns an empty string (&#x60;““&#x60;) value for any users who are **not** a part of the host&#39;s account (external users). | [optional]
**ip_address** | **string** | The participant&#39;s IP address. | [optional]
**join_time** | **\DateTime** | The time at which the participant joined the meeting. | [optional]
**leave_time** | **\DateTime** | The time at which the participant left the meeting. | [optional]
**location** | **string** | The participant&#39;s location. | [optional]
**mac_addr** | **string** | The participant&#39;s MAC address.   **Note:** This response returns an empty string (&#x60;““&#x60;) value for any users who are **not** a part of the host&#39;s account (external users). | [optional]
**pc_name** | **string** | The participant&#39;s PC name. | [optional]
**user_id** | **string** | The participant&#39;s ID. This value is assigned to a participant upon joining a meeting and is only valid for the meeting&#39;s duration. | [optional]
**user_name** | **string** | The participant&#39;s display name. | [optional]
**user_qos** | [**\Zoom\Api\Model\QOSParticipantUserQosInner[]**](QOSParticipantUserQosInner.md) | The participant&#39;s quality of service information. | [optional]
**version** | **string** | The participant&#39;s Zoom client version. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
