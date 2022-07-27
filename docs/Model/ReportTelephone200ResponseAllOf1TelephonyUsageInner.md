# # ReportTelephone200ResponseAllOf1TelephonyUsageInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**call_in_number** | **string** | Caller&#39;s call-in number. | [optional]
**country_name** | **string** | Country name. | [optional]
**dept** | **string** | User department. | [optional]
**duration** | **int** | Call leg duration | [optional]
**end_time** | **\DateTime** | Call leg end time | [optional]
**host_email** | **string** | User email. | [optional]
**host_id** | **string** | The user ID of the meeting host. | [optional]
**host_name** | **string** | User display name. | [optional]
**meeting_id** | **int** | [Meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID-): Unique identifier of the meeting in \&quot;**long**\&quot; format(represented as int64 data type in JSON), also known as the meeting number. | [optional]
**meeting_type** | **string** | Meeting type. | [optional]
**phone_number** | **string** | Toll-free telephone number. | [optional]
**rate** | **float** | Calling rate for the telephone call. | [optional]
**signaled_number** | **string** | The number that is signaled to Zoom. | [optional]
**start_time** | **\DateTime** | Call leg start time | [optional]
**total** | **float** | Total cost (USD) for Call Out. Calculated as plan rate by duration. | [optional]
**type** | **string** | Call type. | [optional]
**uuid** | **string** | Meeting UUID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
