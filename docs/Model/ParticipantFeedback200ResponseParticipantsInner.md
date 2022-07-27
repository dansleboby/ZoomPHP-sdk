# # ParticipantFeedback200ResponseParticipantsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_time** | **\DateTime** | Date and time at which the feedback was submitted. | [optional]
**email** | **string** | Email address of the participant. If the participant is **not** part of the host&#39;s account, this returns an empty string value, with some exceptions. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for details. | [optional]
**quality** | **string** | Feedback submitted by the participant.   * &#x60;GOOD&#x60;: Thumbs up. * &#x60;NOT GOOD&#x60;: Thumbs down. | [optional]
**user_id** | **string** | User ID of the participant. | [optional]
**comment** | **string** | Post meeting comment of the participant. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
