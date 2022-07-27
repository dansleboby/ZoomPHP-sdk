# # CloudArchivedFiles

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_name** | **string** | The user&#39;s account name. |
**archive_files** | [**\Zoom\Api\Model\CloudArchivedFilesArchiveFilesInner[]**](CloudArchivedFilesArchiveFilesInner.md) | Information about the archive files. |
**complete_time** | [**\Zoom\Api\Model\CloudArchivedFilesCompleteTime**](CloudArchivedFilesCompleteTime.md) |  |
**duration** | **int** | The meeting or webinar&#39;s scheduled duration. |
**duration_in_second** | **int** | The meeting or webinar&#39;s duration, in seconds. |
**host_id** | **string** | The ID of the user set as the host of the archived meeting or webinar. |
**id** | **int** | The ID of the meeting (&#x60;meetingId&#x60;) or the webinar (&#x60;webinarId&#x60;). |
**is_breakout_room** | **bool** | Whether the room is a [breakout room](https://support.zoom.us/hc/en-us/articles/115005769646-Participating-in-breakout-rooms). |
**meeting_type** | **string** | Whether the meeting or webinar is internal or external:  * &#x60;internal&#x60; — An internal meeting or webinar.  * &#x60;external&#x60; — An external meeting or webinar.    The &#x60;id&#x60;, &#x60;host_id&#x60;, and &#x60;topic&#x60; PII (Personal Identifiable Information) values in this response are removed when this value is &#x60;external&#x60;. |
**parent_meeting_id** | **string** | The parent meeting&#39;s universally unique ID (UUID). Each meeting or webinar instance generates a UUID. If the &#x60;is_breakout_room&#x60; value is &#x60;true&#x60;, the API returns this value. | [optional]
**recording_count** | **int** | The number of archived files returned in the API call response. |
**start_time** | **\DateTime** | The meeting or webinar&#39;s start time. |
**timezone** | **string** | The meeting or webinar&#39;s [timezone](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#timezones). |
**topic** | **string** | The meeting or webinar topic. |
**total_size** | **int** | The total size of the archive file, in bytes. |
**type** | **int** | The type of archived meeting or webinar:    If the recording is of a meeting:  * &#x60;1&#x60; — Instant meeting.  * &#x60;2&#x60; — Scheduled meeting.  * &#x60;3&#x60; — A recurring meeting with no fixed time.  * &#x60;4&#x60; — A meeting created via PMI (Personal Meeting ID).  * &#x60;7&#x60; — A [Personal Audio Conference](https://support.zoom.us/hc/en-us/articles/204517069-Getting-Started-with-Personal-Audio-Conference) (PAC).  * &#x60;8&#x60; - Recurring meeting with a fixed time.    If the recording is of a webinar:  * &#x60;5&#x60; — A webinar.  * &#x60;6&#x60; — A recurring webinar without a fixed time.  * &#x60;9&#x60; — A recurring webinar with a fixed time.    If the recording is **not** from a meeting or webinar:   * &#x60;99&#x60; — A recording uploaded via the [**Recordings**](https://zoom.us/recording) interface on the Zoom Web Portal.  * &#x60;100&#x60; — A [breakout room](https://support.zoom.us/hc/en-us/articles/115005769646-Participating-in-breakout-rooms). |
**uuid** | **string** | The universally unique identifier (UUID) of the recorded meeting or webinar instance. Each meeting or webinar instance generates a UUID. |
**status** | **string** | The archive&#39;s processing status:  * &#x60;completed&#x60; — The archive&#39;s processing is complete.  * &#x60;processing&#x60; — The archive is processing. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
