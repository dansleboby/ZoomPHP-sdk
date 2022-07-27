# # RecordingMeetingAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Unique Identifier of the user account. | [optional]
**duration** | **int** | Meeting duration. | [optional]
**host_id** | **string** | ID of the user set as host of meeting. | [optional]
**id** | **int** | Meeting ID - also known as the meeting number. | [optional]
**recording_count** | **int** | Number of recording files returned in the response of this API call. This includes the &#x60;recording_files&#x60; and  &#x60;participant_audio_files&#x60; files. | [optional]
**start_time** | **\DateTime** | The time at which the meeting started. | [optional]
**topic** | **string** | Meeting topic. | [optional]
**total_size** | **int** | The total file size of the recording. This includes the &#x60;recording_files&#x60; and &#x60;participant_audio_files&#x60; files. | [optional]
**type** | **string** | The recording&#39;s associated type of meeting or webinar:   If the recording is of a meeting:  * &#x60;1&#x60; — Instant meeting.  * &#x60;2&#x60; — Scheduled meeting.  * &#x60;3&#x60; — A recurring meeting with no fixed time.  * &#x60;4&#x60; — A meeting created via PMI (Personal Meeting ID).  * &#x60;7&#x60; — A [Personal Audio Conference](https://support.zoom.us/hc/en-us/articles/204517069-Getting-Started-with-Personal-Audio-Conference) (PAC).  * &#x60;8&#x60; - Recurring meeting with a fixed time.   If the recording is of a webinar:  * &#x60;5&#x60; — A webinar.  * &#x60;6&#x60; — A recurring webinar without a fixed time  * &#x60;9&#x60; — A recurring webinar with a fixed time.  If the recording is **not** from a meeting or webinar:   * &#x60;99&#x60; — A recording uploaded via the [**Recordings**](https://zoom.us/recording) interface on the Zoom Web Portal. | [optional]
**uuid** | **string** | Unique Meeting Identifier. Each instance of the meeting will have its own UUID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
