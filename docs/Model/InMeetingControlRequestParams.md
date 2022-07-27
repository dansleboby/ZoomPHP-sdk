# # InMeetingControlRequestParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contacts** | [**\Zoom\Api\Model\InMeetingControlRequestParamsContactsInner[]**](InMeetingControlRequestParamsContactsInner.md) | The user&#39;s email address or the user ID, up to a maximum of 10 contacts. The account must be a part of the meeting host&#39;s account. | [optional]
**invitee_name** | **string** | The user&#39;s name to display in the meeting. Use this field if you pass the &#x60;participant.invite.callout&#x60; value for the &#x60;method&#x60; field. | [optional]
**phone_number** | **string** | The user&#39;s phone number. Use this field if you pass the &#x60;participant.invite.callout&#x60; value for the &#x60;method&#x60; field. | [optional]
**invite_options** | [**\Zoom\Api\Model\InMeetingControlRequestParamsInviteOptions**](InMeetingControlRequestParamsInviteOptions.md) |  | [optional]
**call_type** | **string** | The type of call out. Use a value of &#x60;h323&#x60; or &#x60;sip&#x60;. Use this field if you pass the &#x60;participant.invite.room_system_callout&#x60; value for the &#x60;method&#x60; field. | [optional]
**device_ip** | **string** | The user&#39;s device IP address. Use this field if you pass the &#x60;participant.invite.room_system_callout&#x60; value for the &#x60;method&#x60; field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
