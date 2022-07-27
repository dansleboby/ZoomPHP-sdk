# # GetGroupSettings200ResponseOneOfRecordingArchiveSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audio_file** | **bool** | Include in-meeting and/or in-webinar audio in the archive. | [optional]
**cc_transcript_file** | **bool** | Include closed caption or transcript in the archive. | [optional]
**chat_file** | **bool** | Include in-meeting chat in the archive. | [optional]
**chat_with_sender_email** | **bool** | Include user email in in-meeting chat file. | [optional]
**video_file** | **bool** | Include in-meeting and/or in-webinar video in the archive. | [optional]
**chat_with_direct_message** | **bool** | Include direct message in in-meeting chat file. | [optional]
**archive_retention** | **int** | The retention period for archiving content, in days. | [optional]
**action_when_archive_failed** | **int** | Perform the action when meetings or webinars cannot be archived.&lt;br&gt;&#x60;1&#x60; - Participants can stay in the meeting and will receive a notification.&lt;br&gt;&#x60;2&#x60; - Nobody can join or stay in the meeting. | [optional]
**notification_when_archiving_starts** | **string** | Show notification when video or audio archiving starts.&lt;br&gt;&#x60;1&#x60; - Participants can stay in the meeting and will receive a notification.&lt;br&gt;&#x60;2&#x60; - Nobody can join or stay in the meeting. | [optional]
**play_voice_prompt_when_archiving_starts** | **string** | Play voice prompt when video or audio archiving starts.&lt;br&gt;&#x60;1&#x60; - Participants can stay in the meeting and will receive a notification.&lt;br&gt;&#x60;2&#x60; - Nobody can join or stay in the meeting. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
