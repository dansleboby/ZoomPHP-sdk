# # GroupListAllOf1MeetingsInnerAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | Meeting description. The length of agenda gets truncated to 250 characters when you list all meetings for a user. To view the complete agenda of a meeting, retrieve details for a single meeting, use the [**Get a meeting**](/docs/api-reference/zoom-api/methods#operation/meeting) API. | [optional]
**created_at** | **\DateTime** | Time of creation. | [optional]
**duration** | **int** | Meeting duration. | [optional]
**host_id** | **string** | ID of the user who is set as the host of the meeting. | [optional]
**id** | **int** | Meeting ID - also known as the meeting number in long (int64) format. | [optional]
**join_url** | **string** | URL using which participants can join a meeting. | [optional]
**pmi** | **string** | [Personal meeting ID](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis/#understanding-personal-meeting-id-pmi). This field is only returned if PMI was used to schedule the meeting. | [optional]
**start_time** | **\DateTime** | Meeting start time. | [optional]
**timezone** | **string** | Timezone to format the meeting start time. | [optional]
**topic** | **string** | Meeting topic. | [optional]
**type** | **int** | Meeting Types:&lt;br&gt;&#x60;1&#x60; - Instant meeting.&lt;br&gt;&#x60;2&#x60; - Scheduled meeting.&lt;br&gt;&#x60;3&#x60; - Recurring meeting with no fixed time.&lt;br&gt;&#x60;8&#x60; - Recurring meeting with fixed time. | [optional]
**uuid** | **string** | Unique Meeting ID. Each meeting instance will generate its own Meeting UUID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
