# # GroupLockedSettingsRequestOneOfRecording

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_user_access_recording** | **bool** | Make cloud recordings accessible to account members only. | [optional]
**auto_delete_cmr** | **bool** | Allow Zoom to automatically delete recordings permanently after a specified number of days. | [optional]
**auto_recording** | **bool** | Record meetings automatically as they start. | [optional]
**cloud_recording** | **bool** | Allow hosts to record and save the meeting / webinar in the cloud. | [optional]
**cloud_recording_download** | **bool** | Allow anyone with a link to the cloud recording to download. | [optional]
**host_delete_cloud_recording** | **bool** | Allow the host to delete the recordings. If this option is disabled, the recordings cannot be deleted by the host and only admin can delete them. | [optional]
**ip_address_access_control** | [**\Zoom\Api\Model\GetGroupLockSettings200ResponseOneOfRecordingIpAddressAccessControl**](GetGroupLockSettings200ResponseOneOfRecordingIpAddressAccessControl.md) |  | [optional]
**local_recording** | **bool** | Allow hosts and participants to record the meeting to a local file. | [optional]
**recording_authentication** | **bool** |  | [optional]
**archive** | **bool** | [Archiving solution](https://support.zoom.us/hc/en-us/articles/360050431572-Archiving-Meeting-and-Webinar-data) settings. This setting can only be used if you have been granted archiving solution access by the Zoom support team. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
