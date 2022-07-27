# # UserSettingsRecording

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ask_host_to_confirm_disclaimer** | **bool** | Ask host to confirm the disclaimer. | [optional]
**ask_participants_to_consent_disclaimer** | **bool** | This field can be used if &#x60;recording_disclaimer&#x60; is set to true. This field indicates whether or not you would like to ask participants for consent when a recording starts. The value can be one of the following:&lt;br&gt; * &#x60;true&#x60;: Ask participants for consent when a recording starts. &lt;br&gt; * &#x60;false&#x60;: Do not ask participants for consent when a recording starts. | [optional]
**auto_delete_cmr** | **bool** | Auto delete cloud recordings. | [optional] [default to false]
**auto_delete_cmr_days** | **int** | When the &#x60;auto_delete_cmr&#x60; value is &#x60;true&#x60;, this value is the number of days before the auto-deletion of cloud recordings:  * &#x60;30&#x60; — 30 days.  * &#x60;60&#x60; — 60 days.  * &#x60;90&#x60; — 90 days.  * &#x60;120&#x60; — 120 days. | [optional]
**record_files_separately** | [**\Zoom\Api\Model\UserSettingsRecordingRecordFilesSeparately**](UserSettingsRecordingRecordFilesSeparately.md) |  | [optional]
**display_participant_name** | **bool** | Display participants&#39; names in the recording. | [optional]
**recording_thumbnails** | **bool** | Record thumbnails of the presenter when they are sharing their screen. | [optional]
**optimize_recording_for_3rd_party_video_editor** | **bool** | Optimize recordings for a 3rd party video editor. This may increase the file size and the time it takes to generate recording files. | [optional]
**recording_highlight** | **bool** | Enable the [recording highlights](https://support.zoom.us/hc/en-us/articles/360060802432) feature. | [optional]
**save_panelist_chat** | **bool** | Save panelist chat to the recording. This setting saves messages sent by panelists during a webinar to either all panelists or all panelists and attendees to the recording. | [optional]
**save_poll_results** | **bool** | Save poll results shared during the meeting or webinar. This also includes poll results shared during the meeting or webinar. | [optional]
**save_close_caption** | **bool** | Save [closed captions](https://support.zoom.us/hc/en-us/articles/207279736) as a VTT (Video Track Text) file. | [optional]
**auto_recording** | **string** | Automatic recording:&lt;br&gt;&#x60;local&#x60; - Record on local.&lt;br&gt;&#x60;cloud&#x60; - Record on cloud.&lt;br&gt;&#x60;none&#x60; - Disabled. | [optional] [default to 'local']
**cloud_recording** | **bool** | Cloud recording. | [optional] [default to false]
**host_pause_stop_recording** | **bool** | Host can pause or stop the auto recording in the cloud. | [optional] [default to false]
**ip_address_access_control** | [**\Zoom\Api\Model\AccountSettingsRecordingIpAddressAccessControl**](AccountSettingsRecordingIpAddressAccessControl.md) |  | [optional]
**local_recording** | **bool** | Local recording. | [optional]
**record_audio_file** | **bool** | Record one audio file for all participants. | [optional] [default to false]
**record_gallery_view** | **bool** | Record the gallery view. | [optional] [default to false]
**record_speaker_view** | **bool** | Record the active speaker view. | [optional] [default to false]
**recording_audio_transcript** | **bool** | Audio transcript. | [optional]
**recording_disclaimer** | **bool** | Show a disclaimer to participants before a recording starts | [optional]
**recording_password_requirement** | [**\Zoom\Api\Model\UserSettingsRecordingRecordingPasswordRequirement**](UserSettingsRecordingRecordingPasswordRequirement.md) |  | [optional]
**save_chat_text** | **bool** | Save chat text from the meeting. | [optional] [default to false]
**show_timestamp** | **bool** | Show timestamp on video. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
