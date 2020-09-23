# InlineResponse20073RecordingFiles

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Recording ID. Identifier for the recording. | [optional] 
**recording_start** | **string** | The date and time at which the recording started. | [optional] 
**recording_end** | **string** | The date and time at which the recording ended. | [optional] 
**file_type** | **string** | The recording file type. The value of this field could be one of the following:&lt;br&gt; &#x60;MP4&#x60;: Video file of the recording.&lt;br&gt;&#x60;M4A&#x60; Audio-only file of the recording.&lt;br&gt;&#x60;TIMELINE&#x60;: Timestamp file of the recording in JSON format.&lt;br&gt; &#x60;TRANSCRIPT&#x60;: Transcription file of the recording in VTT format.&lt;br&gt; &#x60;CHAT&#x60;: A TXT file containing in-meeting chat messages that were sent during the meeting.&lt;br&gt;&#x60;CC&#x60;: File containing closed captions of the recording in VTT file format.&lt;br&gt;&lt;br&gt; A recording file object with file type of either &#x60;CC&#x60; or &#x60;TIMELINE&#x60; **does not have** the following properties:&lt;br&gt;  &#x60;id&#x60;, &#x60;status&#x60;, &#x60;file_size&#x60;, &#x60;recording_type&#x60;, and &#x60;play_url&#x60;. | [optional] 
**file_size** | **float** | The size of the recording file in bytes. | [optional] 
**play_url** | **string** | The URL using which recording can be played. | [optional] 
**download_url** | **string** | The URL using which the recording can be downloaded | [optional] 
**status** | **string** | The status of the recording. | [optional] 
**recording_type** | **string** | The recording type. The value of this field can be one of the following:&lt;br&gt;&#x60;shared_screen_with_speaker_view(CC)&#x60;&lt;br&gt;&#x60;shared_screen_with_speaker_view&#x60;&lt;br&gt;&#x60;shared_screen_with_gallery_view&#x60;&lt;br&gt;&#x60;speaker_view&#x60;&lt;br&gt;&#x60;gallery_view&#x60;&lt;br&gt;&#x60;shared_screen&#x60;&lt;br&gt;&#x60;audio_only&#x60;&lt;br&gt;&#x60;audio_transcript&#x60;&lt;br&gt;&#x60;active_speake&#x60;&lt;br&gt;&#x60;chat_file&#x60;&lt;br&gt;&#x60;TIMELINE&#x60; | [optional] 
**meeting_id** | **string** | Universally unique identifier of the meeting instance that was being recorded. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


