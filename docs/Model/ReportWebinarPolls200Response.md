# # ReportWebinarPolls200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The [meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID). | [optional]
**questions** | [**\Zoom\Api\Model\ReportWebinarPolls200ResponseQuestionsInner[]**](ReportWebinarPolls200ResponseQuestionsInner.md) | Array of webinar question objects. | [optional]
**start_time** | **\DateTime** | Webinar start time. | [optional]
**uuid** | **string** | Webinar UUID. Each webinar instance will generate its own UUID(i.e., after a Webinar ends, a new UUID will be generated for the next instance of the Webinar). Please double encode your UUID when using it for API calls if the UUID begins with a &#39;/&#39; or contains &#39;//&#39; in it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
