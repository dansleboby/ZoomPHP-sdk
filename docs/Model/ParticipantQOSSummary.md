# # ParticipantQOSSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The participant&#39;s universally unique ID. This value is the same as the participant&#39;s user ID if the participant joins the meeting by logging into Zoom. If the participant joins the meeting without logging into Zoom, this returns an empty value. | [optional]
**participant_id** | **string** | The participant&#39;s ID. This value is assigned to a participant upon joining a meeting and is only valid for the meeting&#39;s duration. | [optional]
**user_name** | **string** | The participant&#39;s display name. | [optional]
**email** | **string** | The participant&#39;s email address. If the participant is **not** part of the host&#39;s account, this returns an empty string value, with some exceptions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details. | [optional]
**qos** | [**\Zoom\Api\Model\ParticipantQOSSummaryQosInner[]**](ParticipantQOSSummaryQosInner.md) | The summary of participant&#39;s quality of service information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
