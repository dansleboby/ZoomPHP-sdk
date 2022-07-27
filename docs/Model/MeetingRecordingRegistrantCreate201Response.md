# # MeetingRecordingRegistrantCreate201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | [Meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID-): Unique identifier of the meeting in \&quot;**long**\&quot; format(represented as int64 data type in JSON), also known as the meeting number. | [optional]
**registrant_id** | **string** | Registrant ID | [optional]
**share_url** | **string** | Share URL for the on-demand recording. This includes the “tk” token for the registrant. This is similar to the token that Zoom returns in the URL response to join a registered meeting, for example: &#x60;url?tk&#x3D;xxxx&#x60;. Except while the meeting registration token can be used to join the meeting, this token can only be used to watch the recording. | [optional]
**topic** | **string** | Meeting Topic | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
