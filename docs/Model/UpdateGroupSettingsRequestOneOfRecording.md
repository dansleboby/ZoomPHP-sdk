# # UpdateGroupSettingsRequestOneOfRecording

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_user_access_recording** | **bool** | Make cloud recordings accessible to account members only. | [optional]
**archive** | [**\Zoom\Api\Model\UpdateGroupSettingsRequestOneOfRecordingArchive**](UpdateGroupSettingsRequestOneOfRecordingArchive.md) |  | [optional]
**auto_recording** | **string** | Record meetings automatically as they start. | [optional]
**cloud_recording** | **bool** | Allow hosts to record and save the meeting / webinar in the cloud. | [optional]
**cloud_recording_download** | **bool** | Allow anyone with a link to the cloud recording to download. | [optional]
**cloud_recording_download_host** | **bool** | Allow only the host with a link to the cloud recording to download. | [optional]
**host_delete_cloud_recording** | **bool** | Allow the host to delete the recordings. If this option is disabled, the recordings cannot be deleted by the host and only admin can delete them. | [optional]
**record_files_separately** | [**\Zoom\Api\Model\GetGroupSettings200ResponseOneOfRecordingRecordFilesSeparately**](GetGroupSettings200ResponseOneOfRecordingRecordFilesSeparately.md) |  | [optional]
**display_participant_name** | **bool** | Whether participants&#39; names display in the recording. | [optional]
**recording_thumbnails** | **bool** | Whether thumbnails of the presenter are recorded when they are sharing their screen. | [optional]
**optimize_recording_for_3rd_party_video_editor** | **bool** | Whether recordings will be optimized for a 3rd party video editor. This can increase the file size and the time it takes to generate recording files. | [optional]
**recording_highlight** | **bool** | Whether the [recording highlights](https://support.zoom.us/hc/en-us/articles/360060802432) feature is enabled. | [optional]
**save_panelist_chat** | **bool** | Whether panelist chats are saved to the recording. | [optional]
**save_poll_results** | **bool** | Whether poll results shared during the meeting or webinar are saved. This also includes poll results shared during the meeting or webinar. | [optional]
**save_close_caption** | **bool** | Whether [closed captions](https://support.zoom.us/hc/en-us/articles/207279736) are saved as a VTT (Video Track Text) file. | [optional]
**ip_address_access_control** | [**\Zoom\Api\Model\GetGroupLockSettings200ResponseOneOfRecordingIpAddressAccessControl**](GetGroupLockSettings200ResponseOneOfRecordingIpAddressAccessControl.md) |  | [optional]
**local_recording** | **bool** | Allow hosts and participants to record the meeting to a local file. | [optional]
**prevent_host_access_recording** | **bool** | If set to &#x60;true&#x60;, meeting hosts cannot view their meeting cloud recordings. Only the admins who have recording management privilege can access them. | [optional]
**record_audio_file** | **bool** | Whether to record one audio file for all participants. | [optional]
**record_gallery_view** | **bool** | When someone is sharing their screen, active speaker will show on the top right corner of the shared screen. | [optional]
**record_speaker_view** | **bool** | Record active speaker with shared screen. | [optional]
**recording_audio_transcript** | **bool** | Automatically transcribe the audio of a meeting or webinar for cloud recordings. | [optional]
**save_chat_text** | **bool** | Save chat messages from the meeting / webinar. | [optional]
**show_timestamp** | **bool** | Add a timestamp to the recording. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
