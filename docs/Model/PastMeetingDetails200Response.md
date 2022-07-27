# # PastMeetingDetails200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The [meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID). | [optional]
**uuid** | **string** | The meeting&#39;s UUID. You **must** double encode this value if the meeting UUID begins with a &#x60;/&#x60; character or contains the &#x60;//&#x60; character. | [optional]
**duration** | **int** | The meeting&#39;s duration, in minutes. | [optional]
**start_time** | **\DateTime** | The meeting&#39;s start date and time. | [optional]
**end_time** | **\DateTime** | The meeting&#39;s end date and time. | [optional]
**host_id** | **string** | The host&#39;s ID. | [optional]
**dept** | **string** | The meeting host&#39;s department. | [optional]
**participants_count** | **int** | The number of meeting participants. | [optional]
**source** | **string** | Whether the meeting was created directly through Zoom or via an API request:  * If the meeting was created via an OAuth app, this field returns the OAuth app&#39;s name.  * If the meeting was created via JWT or the Zoom Web Portal, this returns the &#x60;Zoom&#x60; value. | [optional]
**topic** | **string** | The meeting&#39;s topic. | [optional]
**total_minutes** | **int** | The total number of minutes attended by the meeting&#39;s host and participants. | [optional]
**type** | **int** | The meeting type:  * &#x60;0&#x60; — A prescheduled meeting.  * &#x60;1&#x60; — An instant meeting.  * &#x60;2&#x60; — A scheduled meeting.  * &#x60;3&#x60; — A recurring meeting with no fixed time.  * &#x60;4&#x60; — A [personal meeting room](https://support.zoom.us/hc/en-us/articles/201362843).  * &#x60;7&#x60; — A [PAC (Personal Audio Conference)](https://support.zoom.us/hc/en-us/articles/205172455-Hosting-a-Personal-Audio-Conference-PAC-meeting) meeting.  * &#x60;8&#x60; — A recurring meeting with a fixed time. | [optional]
**user_email** | **string** | The user&#39;s email address. | [optional]
**user_name** | **string** | The user&#39;s display name. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
