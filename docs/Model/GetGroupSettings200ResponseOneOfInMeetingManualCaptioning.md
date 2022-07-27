# # GetGroupSettings200ResponseOneOfInMeetingManualCaptioning

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_to_type** | **bool** | Whether to allow the host to manually caption or let the host assign a participant to provide manual captioning. | [optional]
**auto_generated_captions** | **bool** | Whether to enable Zoom&#39;s [live transcription feature](https://support.zoom.us/hc/en-us/articles/207279736-Managing-closed-captioning-and-live-transcription#h_01FHGGHYJ4457H4GSZY0KM3NSB). | [optional]
**full_transcript** | **bool** | Whether to enable the viewing of full transcripts in the in-meeting side panel. | [optional]
**manual_captions** | **bool** | Whether to [enable manual closed captioning](https://support.zoom.us/hc/en-us/articles/207279736-Managing-closed-captioning-and-live-transcription). | [optional]
**save_captions** | **bool** | Whether to allow participants to [save closed captions or transcripts](https://support.zoom.us/hc/en-us/articles/360060958752).    **Note:** If the &#x60;full_transcript&#x60; field is set to &#x60;false&#x60;, participants **cannot** save captions. | [optional]
**third_party_captioning_service** | **bool** | Whether to allow the use of an API token to integrate with a [3rd-party device](https://support.zoom.us/hc/en-us/articles/115002212983) to provide closed captioning. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
