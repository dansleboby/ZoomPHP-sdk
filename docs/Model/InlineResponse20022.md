# InlineResponse20022

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | Agenda. | [optional] 
**assistant_id** | **string** | Unique identifier of the scheduler who scheduled this meeting on behalf of the host. This field is only returned if you used \&quot;schedule_for\&quot; option in the [Create a Meeting API request](https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meetingcreate). | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Time of creation. | [optional] 
**duration** | **int** | Meeting duration. | [optional] 
**encrypted_password** | **string** | Encrypted passcode for third party endpoints (H323/SIP). | [optional] 
**h323_password** | **string** | H.323/SIP room system passcode. | [optional] 
**host_email** | **string** | Email address of the meeting host. | [optional] 
**host_id** | **string** | ID of the user who is set as host of meeting. | [optional] 
**id** | **int** | [Meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID-): Unique identifier of the meeting in \&quot;**long**\&quot; format(represented as int64 data type in JSON), also known as the meeting number. | [optional] 
**join_url** | **string** | URL for participants to join the meeting. This URL should only be shared with users that you would like to invite for the meeting. | [optional] 
**occurrences** | [**\Zoom\Api\Model\InlineResponse20111Occurrences[]**](InlineResponse20111Occurrences.md) | Array of occurrence objects. | [optional] 
**password** | **string** | Meeting passcode. | [optional] 
**pmi** | **int** | Personal Meeting Id. Only used for scheduled meetings and recurring meetings with no fixed time. | [optional] 
**recurrence** | [**\Zoom\Api\Model\UsersuserIdmeetingsRecurrence**](UsersuserIdmeetingsRecurrence.md) |  | [optional] 
**settings** | [**\Zoom\Api\Model\InlineResponse20111Settings**](InlineResponse20111Settings.md) |  | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Meeting start time in GMT/UTC. Start time will not be returned if the meeting is an **instant** meeting. | [optional] 
**start_url** | **string** | &lt;br&gt;&lt;aside&gt;The &lt;code&gt;start_url&lt;/code&gt; of a Meeting is a URL using which a host or an alternative host can start the Meeting.   The expiration time for the &lt;code&gt;start_url&lt;/code&gt; field listed in the response of [Create a Meeting API](https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meetingcreate) is two hours for all regular users.    For users created using the &lt;code&gt;custCreate&lt;/code&gt; option via the [Create Users](https://marketplace.zoom.us/docs/api-reference/zoom-api/users/usercreate) API, the expiration time of the &lt;code&gt;start_url&lt;/code&gt; field is 90 days.   For security reasons, to retrieve the updated value for the &lt;code&gt;start_url&lt;/code&gt; field programmatically (after the expiry time), you must call the [Retrieve a Meeting API](https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meeting) and refer to the value of the &lt;code&gt;start_url&lt;/code&gt; field in the response.&lt;/aside&gt;&lt;br&gt;This URL should only be used by the host of the meeting and **should not be shared with anyone other than the host** of the meeting as anyone with this URL will be able to login to the Zoom Client as the host of the meeting. | [optional] 
**status** | **string** | Meeting status | [optional] 
**timezone** | **string** | Timezone to format the meeting start time on the . | [optional] 
**topic** | **string** | Meeting topic. | [optional] 
**tracking_fields** | [**\Zoom\Api\Model\InlineResponse20022TrackingFields[]**](InlineResponse20022TrackingFields.md) | Tracking fields | [optional] 
**type** | **int** | Meeting Types:&lt;br&gt;&#x60;1&#x60; - Instant meeting.&lt;br&gt;&#x60;2&#x60; - Scheduled meeting.&lt;br&gt;&#x60;3&#x60; - Recurring meeting with no fixed time.&lt;br&gt;&#x60;4&#x60; - PMI Meeting&lt;br&gt; &#x60;8&#x60; - Recurring meeting with a fixed time. | [optional] 
**uuid** | **string** | Unique meeting ID. Each meeting instance will generate its own Meeting UUID (i.e., after a meeting ends, a new UUID will be generated for the next instance of the meeting). You can retrieve a list of UUIDs from past meeting instances using [this API](https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/pastmeetings) . Please double encode your UUID when using it for API calls if the UUID begins with a &#39;/&#39;or contains &#39;//&#39; in it. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


