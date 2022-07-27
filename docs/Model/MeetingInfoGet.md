# # MeetingInfoGet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | Meeting description | [optional]
**created_at** | **\DateTime** | Time of creation. | [optional]
**duration** | **int** | Meeting duration. | [optional]
**encrypted_password** | **string** | Encrypted passcode for third party endpoints (H323/SIP). | [optional]
**h323_password** | **string** | H.323/SIP room system passcode. | [optional]
**join_url** | **string** | URL for participants to join the meeting. This URL should only be shared with users that you would like to invite for the meeting. | [optional]
**occurrences** | [**\OpenAPI\Client\Model\Occurrence[]**](Occurrence.md) | Array of occurrence objects. | [optional]
**password** | **string** | Meeting passcode. | [optional]
**pmi** | **string** | [Personal Meeting ID (PMI)](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#understanding-personal-meeting-id-pmi). Only used for scheduled meetings and recurring meetings with no fixed time. | [optional]
**pre_schedule** | **bool** | Whether the prescheduled meeting was created via the [GSuite app](https://support.zoom.us/hc/en-us/articles/360020187492-Zoom-for-GSuite-add-on). This **only** supports the meeting &#x60;type&#x60; value of &#x60;2&#x60; (scheduled meetings) and &#x60;3&#x60; (recurring meetings with no fixed time):  * &#x60;true&#x60; — A GSuite prescheduled meeting.  * &#x60;false&#x60; — A regular meeting. | [optional] [default to false]
**recurrence** | [**\OpenAPI\Client\Model\Recurrence**](Recurrence.md) |  | [optional]
**settings** | [**\OpenAPI\Client\Model\MeetingSettings**](MeetingSettings.md) |  | [optional]
**start_time** | **\DateTime** | Meeting start time in GMT/UTC. Start time will not be returned if the meeting is an **instant** meeting. | [optional]
**start_url** | **string** | &lt;br&gt;&lt;aside&gt;The &lt;code&gt;start_url&lt;/code&gt; of a Meeting is a URL using which a host or an alternative host can start the Meeting.   The expiration time for the &lt;code&gt;start_url&lt;/code&gt; field listed in the response of the [**Create a meeting**](/docs/api-reference/zoom-api/methods#operation/meetingCreate) API is two hours for all regular users.    For users created using the &lt;code&gt;custCreate&lt;/code&gt; option via the [**Create users**](/docs/api-reference/zoom-api/methods#operation/userCreate) API, the expiration time of the &lt;code&gt;start_url&lt;/code&gt; field is 90 days.   For security reasons, to retrieve the updated value for the &lt;code&gt;start_url&lt;/code&gt; field programmatically (after the expiry time), you must call the [**Get a meeting](/docs/api-reference/zoom-api/methods#operation/meeting) API and refer to the value of the &lt;code&gt;start_url&lt;/code&gt; field in the response.&lt;/aside&gt;&lt;br&gt;This URL should only be used by the host of the meeting and **should not be shared with anyone other than the host** of the meeting as anyone with this URL will be able to login to the Zoom Client as the host of the meeting. | [optional]
**status** | **string** | Meeting status | [optional]
**timezone** | **string** | Timezone to format the meeting start time on the . | [optional]
**topic** | **string** | Meeting topic. | [optional]
**tracking_fields** | [**\OpenAPI\Client\Model\MeetingInfoGetTrackingFieldsInner[]**](MeetingInfoGetTrackingFieldsInner.md) | Tracking fields | [optional]
**type** | **int** | Meeting Types:&lt;br&gt;&#x60;1&#x60; - Instant meeting.&lt;br&gt;&#x60;2&#x60; - Scheduled meeting.&lt;br&gt;&#x60;3&#x60; - Recurring meeting with no fixed time.&lt;br&gt;&#x60;4&#x60; - PMI Meeting&lt;br&gt; &#x60;8&#x60; - Recurring meeting with a fixed time. | [optional] [default to self::TYPE_2]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
