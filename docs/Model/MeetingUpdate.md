# # MeetingUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | Meeting description. | [optional]
**duration** | **int** | Meeting duration (minutes). Used for scheduled meetings only. | [optional]
**password** | **string** | Meeting passcode. Passcode may only contain the following characters: [a-z A-Z 0-9 @ - _ *] and can have a maximum of 10 characters.  **Note:** If the account owner or the admin has configured [minimum passcode requirement settings](https://support.zoom.us/hc/en-us/articles/360033559832-Meeting-and-webinar-passwords#h_a427384b-e383-4f80-864d-794bf0a37604), the passcode value provided here must meet those requirements. &lt;br&gt;&lt;br&gt;If the requirements are enabled, you can view those requirements by calling either the [**Get user settings**](/docs/api-reference/zoom-api/methods#operation/userSettings) API or the [**Get account settings**](/docs/api-reference/zoom-api/ma#operation/accountSettings) API. | [optional]
**pre_schedule** | **bool** | Whether to create a prescheduled meeting via the [GSuite app](https://support.zoom.us/hc/en-us/articles/360020187492-Zoom-for-GSuite-add-on). This **only** supports the meeting &#x60;type&#x60; value of &#x60;2&#x60; (scheduled meetings) and &#x60;3&#x60; (recurring meetings with no fixed time):  * &#x60;true&#x60; — Create a prescheduled meeting.  * &#x60;false&#x60; — Create a regular meeting. | [optional] [default to false]
**recurrence** | [**\Zoom\Api\Model\Recurrence**](Recurrence.md) |  | [optional]
**settings** | [**\Zoom\Api\Model\SessionUpdateSettings**](SessionUpdateSettings.md) |  | [optional]
**start_time** | **\DateTime** | Meeting start time. When using a format like \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss&#39;Z&#39;\&quot;, always use GMT time. When using a format like \&quot;yyyy-MM-dd&#39;T&#39;HH:mm:ss\&quot;, you should use local time and  specify the time zone. Only used for scheduled meetings and recurring meetings with a fixed time. | [optional]
**template_id** | **string** | Unique identifier of the meeting template.   Use this field if you would like to [schedule the meeting from a meeting template](https://support.zoom.us/hc/en-us/articles/360036559151-Meeting-templates#h_86f06cff-0852-4998-81c5-c83663c176fb). You can retrieve the value of this field by calling the [List meeting templates](https://marketplace.zoom.us/docs/api-reference/zoom-api/methods#operation/listMeetingTemplates) API. | [optional]
**timezone** | **string** | Time zone to format start_time. For example, \&quot;America/Los_Angeles\&quot;. For scheduled meetings only. Please reference our [time zone](#timezones) list for supported time zones and their formats. | [optional]
**topic** | **string** | Meeting topic. | [optional]
**tracking_fields** | [**\Zoom\Api\Model\SessionUpdateTrackingFieldsInner[]**](SessionUpdateTrackingFieldsInner.md) | Tracking fields | [optional]
**type** | **int** | Meeting Types:&lt;br&gt;&#x60;1&#x60; - Instant meeting.&lt;br&gt;&#x60;2&#x60; - Scheduled meeting.&lt;br&gt;&#x60;3&#x60; - Recurring meeting with no fixed time.&lt;br&gt;&#x60;8&#x60; - Recurring meeting with a fixed time. | [optional] [default to self::TYPE_2]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
