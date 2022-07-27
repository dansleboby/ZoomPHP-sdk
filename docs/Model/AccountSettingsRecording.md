# # AccountSettingsRecording

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_user_access_recording** | **bool** | Cloud recordings are only accessible to account members. People outside of your organization cannot open links that provide access to cloud recordings. | [optional]
**allow_recovery_deleted_cloud_recordings** | **bool** | Allow recovery of deleted cloud recordings from trash.  If the value of this field is set to &#x60;true&#x60;, deleted cloud recordings will be kept in trash for 30 days after deletion and can be recovered within that period. | [optional]
**archive** | [**\Zoom\Api\Model\AccountSettingsRecordingArchive**](AccountSettingsRecordingArchive.md) |  | [optional]
**auto_delete_cmr** | **bool** | Allow Zoom to permanently delete recordings automatically after a specified number of days. | [optional]
**auto_delete_cmr_days** | **int** | When the &#x60;auto_delete_cmr&#x60; value is &#x60;true&#x60;, this value is the number of days before the auto-deletion of cloud recordings:  * &#x60;30&#x60; — 30 days.  * &#x60;60&#x60; — 60 days.  * &#x60;90&#x60; — 90 days.  * &#x60;120&#x60; — 120 days. | [optional]
**record_files_separately** | [**\Zoom\Api\Model\AccountSettingsRecordingRecordFilesSeparately**](AccountSettingsRecordingRecordFilesSeparately.md) |  | [optional]
**display_participant_name** | **bool** | Whether to display participants&#39; names in the recording. | [optional]
**recording_thumbnails** | **bool** | Whether to record thumbnails of the presenter when they are sharing their screen. | [optional]
**optimize_recording_for_3rd_party_video_editor** | **bool** | Whether to optimize recordings for a 3rd party video editor. This may increase the file size and the time it takes to generate recording files. | [optional]
**recording_highlight** | **bool** | Whether to enable the [recording highlights](https://support.zoom.us/hc/en-us/articles/360060802432) feature. | [optional]
**save_panelist_chat** | **bool** | Whether to save panelist chat to the recording. This setting saves messages sent by panelists during a webinar to either all panelists or all panelists and attendees to the recording. | [optional]
**save_poll_results** | **bool** | Whether to save poll results shared during the meeting or webinar. This also includes poll results shared during the meeting or webinar. | [optional]
**save_close_caption** | **bool** | Whether to save [closed captions](https://support.zoom.us/hc/en-us/articles/207279736) as a VTT (Video Track Text) file. | [optional]
**auto_recording** | **string** | Automatic recording:&lt;br&gt;&#x60;local&#x60; - Record on local.&lt;br&gt;&#x60;cloud&#x60; -  Record on cloud.&lt;br&gt;&#x60;none&#x60; - Disabled. | [optional]
**cloud_recording** | **bool** | Allow hosts to record and save the meeting in the cloud. | [optional]
**cloud_recording_download** | **bool** | Cloud recording downloads. | [optional]
**cloud_recording_download_host** | **bool** | Only the host can download cloud recordings. | [optional]
**host_delete_cloud_recording** | **bool** | If the value of this field is set to &#x60;true&#x60;, hosts will be able to delete the recordings. If this option is set to &#x60;false&#x60;, the recordings cannot be deleted by the host and only admin can delete them. | [optional]
**ip_address_access_control** | [**\Zoom\Api\Model\AccountSettingsRecordingIpAddressAccessControl**](AccountSettingsRecordingIpAddressAccessControl.md) |  | [optional]
**local_recording** | **bool** | Allow hosts and participants to record the meeting using a local file. | [optional]
**prevent_host_access_recording** | **bool** | If set to &#x60;true&#x60;, meeting hosts cannot view their meeting cloud recordings. Only the admins who have recording management privilege can access them. | [optional]
**record_audio_file** | **bool** | Whether to record one audio file for all participants. | [optional]
**record_gallery_view** | **bool** | Record the gallery view with a shared screen. | [optional]
**record_speaker_view** | **bool** | Record the active speaker with a shared screen. | [optional]
**recording_audio_transcript** | **bool** | Automatically transcribe the audio of the meeting or webinar to the cloud. | [optional]
**recording_disclaimer** | **bool** | Show a disclaimer to participants before a recording starts | [optional]
**recording_password_requirement** | [**\Zoom\Api\Model\AccountSettingsRecordingRecordingPasswordRequirement**](AccountSettingsRecordingRecordingPasswordRequirement.md) |  | [optional]
**required_password_for_existing_cloud_recordings** | **bool** | Require a passcode to access existing cloud recordings. | [optional]
**required_password_for_shared_cloud_recordings** | **bool** | Whether to require a passcode to share cloud recordings. | [optional]
**save_chat_text** | **bool** | Save the chat text from the meeting. | [optional]
**show_timestamp** | **bool** | Add a timestamp to the recording. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
