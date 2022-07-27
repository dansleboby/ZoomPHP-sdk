# # WebinarCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agenda** | **string** | Webinar description. | [optional]
**duration** | **int** | Webinar duration (minutes). Used for scheduled webinars only. | [optional]
**password** | **string** | Webinar passcode. Passcode may only contain the following characters: [a-z A-Z 0-9 @ - _ * !]. Max of 10 characters.  If \&quot;Require a passcode when scheduling new meetings\&quot; setting has been **enabled** **and** [locked](https://support.zoom.us/hc/en-us/articles/115005269866-Using-Tiered-Settings#locked) for the user, the passcode field will be autogenerated for the Webinar in the response even if it is not provided in the API request. &lt;br&gt;&lt;br&gt;  **Note:** If the account owner or the admin has configured [minimum passcode requirement settings](https://support.zoom.us/hc/en-us/articles/360033559832-Meeting-and-webinar-passwords#h_a427384b-e383-4f80-864d-794bf0a37604), the passcode value provided here must meet those requirements. &lt;br&gt;&lt;br&gt;If the requirements are enabled, you can view those requirements by calling the [**Get account settings**](/docs/api-reference/zoom-api/ma#operation/accountSettings) API. | [optional]
**recurrence** | [**\Zoom\Api\Model\RecurrenceWebinar**](RecurrenceWebinar.md) |  | [optional]
**settings** | [**\Zoom\Api\Model\CreateWebinarSettings**](CreateWebinarSettings.md) |  | [optional]
**start_time** | **\DateTime** | Webinar start time. We support two formats for &#x60;start_time&#x60; - local time and GMT.&lt;br&gt;   To set time as GMT the format should be &#x60;yyyy-MM-dd&#x60;T&#x60;HH:mm:ssZ&#x60;.  To set time using a specific timezone, use &#x60;yyyy-MM-dd&#x60;T&#x60;HH:mm:ss&#x60; format and specify the timezone [ID](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#timezones) in the &#x60;timezone&#x60; field OR leave it blank and the timezone set on your Zoom account will be used. You can also set the time as UTC as the timezone field.  The &#x60;start_time&#x60; should only be used for scheduled and / or recurring webinars with fixed time. | [optional]
**template_id** | **string** | The webinar template ID with which to schedule a webinar using a [webinar template](https://support.zoom.us/hc/en-us/articles/115001079746-Webinar-Templates). For a list of webinar templates, use the [**List webinar templates**](https://marketplace.zoom.us/docs/api-reference/zoom-api/methods#operation/listWebinarTemplates) API. | [optional]
**timezone** | **string** | Time zone to format start_time. For example, \&quot;America/Los_Angeles\&quot;. For scheduled meetings only. Please reference our [timezone](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#timezones) list for supported time zones and their formats. | [optional]
**topic** | **string** | Webinar topic. | [optional]
**tracking_fields** | [**\Zoom\Api\Model\CreateWebinarTrackingFieldsInner[]**](CreateWebinarTrackingFieldsInner.md) | Tracking fields | [optional]
**type** | **int** | Webinar Types:&lt;br&gt;&#x60;5&#x60; - Webinar.&lt;br&gt;&#x60;6&#x60; - Recurring webinar with no fixed time.&lt;br&gt;&#x60;9&#x60; - Recurring webinar with a fixed time. | [optional] [default to self::TYPE_5]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)