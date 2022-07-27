# # MeetingRegistrantCreate201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The meeting ID. | [optional]
**join_url** | **string** | The URL the registrant can use to join the meeting.   The API will not return this field if the meeting was [created](/docs/api-reference/zoom-api/methods#operation/meetingCreate) with the &#x60;approval_type&#x60; field value of &#x60;1&#x60; (manual approval). | [optional]
**registrant_id** | **string** | The registrant&#39;s ID. | [optional]
**start_time** | **\DateTime** | The meeting&#39;s start time. | [optional]
**topic** | **string** | The meeting&#39;s topic. | [optional]
**occurrences** | [**\Zoom\Api\Model\Occurrence[]**](Occurrence.md) | Array of occurrence objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
