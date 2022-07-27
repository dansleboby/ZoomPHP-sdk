# # Meeting200ResponseAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assistant_id** | **string** | The ID of the user who scheduled this meeting on behalf of the host. | [optional]
**host_email** | **string** | Email address of the meeting host. | [optional]
**host_id** | **string** | ID of the user who is set as host of meeting. | [optional]
**id** | **int** | [Meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID-): Unique identifier of the meeting in \&quot;**long**\&quot; format(represented as int64 data type in JSON), also known as the meeting number. | [optional]
**uuid** | **string** | Unique meeting ID. Each meeting instance will generate its own Meeting UUID (i.e., after a meeting ends, a new UUID will be generated for the next instance of the meeting). You can retrieve a list of UUIDs from past meeting instances using the [**List past meeting instances**](/docs/api-reference/zoom-api/methods#operation/pastMeetings) API. Please double encode your UUID when using it for API calls if the UUID begins with a &#x60;/&#x60; or contains &#x60;//&#x60; in it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
