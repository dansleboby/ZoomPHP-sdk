# # RecordingSeparateAudio

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**download_url** | **string** | The URL at which to download the the recording.   **JWT apps**   To access a private or password-protected cloud recording of a user in your account, use a [Zoom JWT app](https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-jwt-app). Use the generated JWT token as the value of the &#x60;access_token&#x60; query parameter and include this query parameter at the end of the URL. For example:   &#x60;https://{{base-domain}}/rec/download/{{path-to-file-download}}?access_token&#x3D;{{JWT-token}}&#x60;   **OAuth apps**   If a user has authorized and installed your OAuth app that contains recording scopes, use the user&#39;s [OAuth access token](https://marketplace.zoom.us/docs/guides/auth/oauth) to download the file. For example:   &#x60;https://{{base-domain}}/rec/archive/download/xxx?access_token&#x3D;{{OAuth-access-token}}&#x60;   **Note:** This field does **not** return for [Zoom On-Premise accounts](https://support.zoom.us/hc/en-us/articles/360034064852-Zoom-On-Premise-Deployment). Instead, this API will return the &#x60;file_path&#x60; field. | [optional]
**file_name** | **string** | The recording file&#39;s name. | [optional]
**file_path** | **string** | The file path to the On-Premise account recording.   **Note:** This API only returns this field for [Zoom On-Premise accounts](https://support.zoom.us/hc/en-us/articles/360034064852-Zoom-On-Premise-Deployment). It does **not** return the &#x60;download_url&#x60; field. | [optional]
**file_size** | **float** | The recording file&#39;s size, in bytes. | [optional]
**file_type** | **string** | The recording file&#39;s format. One of:  * &#x60;MP4&#x60; — Video file. * &#x60;M4A&#x60; — Audio-only file. * &#x60;TIMELINE&#x60; — Timestamp file of the recording, in JSON file format. To get a timeline file, the **Add a timestamp to the recording** setting **must** be enabled in the [recording settings](https://support.zoom.us/hc/en-us/articles/203741855-Cloud-recording#h_3f14c3a4-d16b-4a3c-bbe5-ef7d24500048). The time will display in the host&#39;s timezone. * &#x60;TRANSCRIPT&#x60; — A transcript of the recording, in VTT format. * &#x60;CHAT&#x60; — A text file containing chat messages sent during the meeting. * &#x60;CC&#x60; — A file containing the closed captions of the recording, in VTT file format. * &#x60;CSV&#x60; — A file containing polling data, in CSV format.  A recording file object with file the &#x60;CC&#x60; or &#x60;TIMELINE&#x60; value **does not** have the &#x60;id&#x60;, &#x60;status&#x60;, &#x60;file_size&#x60;, &#x60;recording_type&#x60;, and &#x60;play_url&#x60; properties. | [optional]
**id** | **string** | The recording file&#39;s unique ID. This is included in the general query response. | [optional]
**play_url** | **string** | The URL at which the recording file can be opened and played. | [optional]
**recording_end** | **\DateTime** | The recording file&#39;s end time. This is included in the general query response. | [optional]
**recording_start** | **\DateTime** | The recording file&#39;s start time. | [optional]
**status** | **string** | The recording file&#39;s status. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
