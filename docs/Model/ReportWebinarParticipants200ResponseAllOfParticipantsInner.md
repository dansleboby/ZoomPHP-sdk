# # ReportWebinarParticipants200ResponseAllOfParticipantsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_key** | **string** | The participant&#39;s SDK identifier. This value can be alphanumeric, up to a maximum length of 15 characters. | [optional]
**duration** | **int** | The participant&#39;s attendance duration. | [optional]
**failover** | **bool** | Whether failover occurred during the webinar. | [optional]
**id** | **string** | The participant&#39;s universally unique ID:  * This values is the same as the participant&#39;s user ID if the participant joins the meeting by logging into Zoom.  * If the participant joins the meeting without logging in, the API returns an empty string value. | [optional]
**join_time** | **\DateTime** | The participant&#39;s join time. | [optional]
**leave_time** | **\DateTime** | The participant&#39;s join time. | [optional]
**name** | **string** | The participant&#39;s display name. This returns an empty string value if the account calling the API is a BAA account. | [optional]
**registrant_id** | **string** | The registrant&#39;s ID. This field only returns if you provide the &#x60;registrant_id&#x60; value for the &#x60;include_fields&#x60; query parameter. | [optional]
**status** | **string** | The participant&#39;s status:  * &#x60;in_meeting&#x60; — In a meeting.  * &#x60;in_waiting_room&#x60; — In a waiting room. | [optional]
**user_email** | **string** | The participant&#39;s email address. If the participant is **not** part of the host&#39;s account, this returns an empty string value, with some exceptions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details. This returns an empty string value if the account calling the API is a BAA account. | [optional]
**user_id** | **string** | The participant&#39;s ID. This ID is assigned to the participant upon joining the webinar and is only valid for that webinar. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
