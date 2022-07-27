# # ReportWebinarDetails200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_keys** | [**\Zoom\Api\Model\ReportMeetingDetails200ResponseCustomKeysInner[]**](ReportMeetingDetails200ResponseCustomKeysInner.md) | Custom keys and values assigned to the meeting. | [optional]
**dept** | **string** | Department of the host. | [optional]
**duration** | **int** | Meeting duration. | [optional]
**end_time** | **\DateTime** | Meeting end time. | [optional]
**id** | **int** | [Meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID-): Unique identifier of the meeting in \&quot;**long**\&quot; format(represented as int64 data type in JSON), also known as the meeting number. | [optional]
**participants_count** | **int** | Number of meeting participants. | [optional]
**start_time** | **\DateTime** | Meeting start time. | [optional]
**topic** | **string** | Meeting topic. | [optional]
**total_minutes** | **int** | Number of Webinar minutes. This represents the total amount of Webinar minutes attended by each participant including the host, for a Webinar hosted by the user. For instance if there were one host(named A) and one participant(named B) in a Webinar, the value of total_minutes would be calculated as below:  **total_minutes** &#x3D; Total Webinar Attendance Minutes of A + Total Webinar Attendance Minutes of B | [optional]
**tracking_fields** | [**\Zoom\Api\Model\ReportMeetingDetails200ResponseTrackingFieldsInner[]**](ReportMeetingDetails200ResponseTrackingFieldsInner.md) | Tracking fields. | [optional]
**type** | **int** | Meeting type. | [optional]
**user_email** | **string** | User email. | [optional]
**user_name** | **string** | User display name. | [optional]
**uuid** | **string** | Webinar UUID. Each webinar instance will generate its own UUID(i.e., after a meeting ends, a new UUID will be generated when the next instance of the webinar starts). Double encode the UUID when using it for API calls if the UUID begins with a &#39;/&#39; or contains &#39;//&#39; in it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
