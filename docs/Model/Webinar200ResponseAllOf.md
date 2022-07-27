# # Webinar200ResponseAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_email** | **string** | Email address of the meeting host. | [optional]
**host_id** | **string** | ID of the user set as host of webinar. | [optional]
**id** | **int** | Webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON), also known as the webinar number. | [optional]
**uuid** | **string** | Unique Webinar ID. Each Webinar instance will generate its own Webinar UUID (i.e., after a Webinar ends, a new UUID will be generated for the next instance of the Webinar). You can retrieve a list of UUIDs from past Webinar instances using the [**List past webinar instances**](/docs/api-reference/zoom-api/methods#operation/pastWebinars) API. Please double encode your UUID when using it for API calls if the UUID begins with a &#x60;/&#x60; or contains &#x60;//&#x60; in it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
