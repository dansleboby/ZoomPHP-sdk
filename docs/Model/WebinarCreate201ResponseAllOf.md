# # WebinarCreate201ResponseAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_email** | **string** | Email address of the meeting host. | [optional]
**host_id** | **string** | ID of the user set as host of the webinar. | [optional]
**id** | **int** | Webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON), also known as the webinar number. | [optional]
**registrants_confirmation_email** | **bool** | Specify whether or not registrants of this Webinar should receive confirmation emails. | [optional]
**template_id** | **string** | Unique identifier of the Webinar template. Use this field only if you would like to [schedule the webinar using an existing template](https://support.zoom.us/hc/en-us/articles/115001079746-Webinar-Templates#schedule). The value of this field can be retrieved from [**List webinar templates**](/docs/api-reference/zoom-api/methods#operation/listWebinarTemplates) API. You must provide the user ID of the host instead of the email address in the &#x60;userId&#x60; path parameter in order to use a template for scheduling a Webinar. | [optional]
**uuid** | **string** | Unique identifier of a Webinar. Each Webinar instance will generate its own UUID(i.e., after a Webinar ends, a new UUID will be generated for the next instance of the Webinar). Once a Webinar ends, the value of uuid for the same webinar will be different from when it was scheduled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
