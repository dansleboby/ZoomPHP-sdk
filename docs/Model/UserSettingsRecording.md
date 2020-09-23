# UserSettingsRecording

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**local_recording** | **bool** | Local recording. | [optional] 
**cloud_recording** | **bool** | Cloud recording. | [optional] [default to false]
**record_speaker_view** | **bool** | Record the active speaker view. | [optional] [default to false]
**record_gallery_view** | **bool** | Record the gallery view. | [optional] [default to false]
**record_audio_file** | **bool** | Record an audio only file. | [optional] [default to false]
**save_chat_text** | **bool** | Save chat text from the meeting. | [optional] [default to false]
**show_timestamp** | **bool** | Show timestamp on video. | [optional] [default to false]
**recording_audio_transcript** | **bool** | Audio transcript. | [optional] 
**auto_recording** | **string** | Automatic recording:&lt;br&gt;&#x60;local&#x60; - Record on local.&lt;br&gt;&#x60;cloud&#x60; - Record on cloud.&lt;br&gt;&#x60;none&#x60; - Disabled. | [optional] [default to 'local']
**host_pause_stop_recording** | **bool** | Host can pause/stop the auto recording in the cloud. | [optional] [default to false]
**auto_delete_cmr** | **bool** | Auto delete cloud recordings. | [optional] [default to false]
**auto_delete_cmr_days** | **int** | A specified number of days of auto delete cloud recordings. | [optional] 
**recording_disclaimer** | **bool** | Show a disclaimer to participants before a recording starts | [optional] 
**ask_participants_to_consent_disclaimer** | **bool** | This field can be used if &#x60;recording_disclaimer&#x60; is set to true. This field indicates whether or not you would like to ask participants for consent when a recording starts. The value can be one of the following:&lt;br&gt; * &#x60;true&#x60;: Ask participants for consent when a recording starts. &lt;br&gt; * &#x60;false&#x60;: Do not ask participants for consent when a recording starts. | [optional] 
**ask_host_to_confirm_disclaimer** | **bool** | Ask host to confirm the disclaimer. | [optional] 
**recording_password_requirement** | [**\Zoom\Api\Model\UserSettingsRecordingSettingsRecordingPasswordRequirement**](UserSettingsRecordingSettingsRecordingPasswordRequirement.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


