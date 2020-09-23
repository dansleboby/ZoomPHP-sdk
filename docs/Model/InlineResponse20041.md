# # InlineResponse20041

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON), also known as the webinar number. | [optional] 
**uuid** | **string** | Webinar UUID. Each webinar instance will generate its own UUID(i.e., after a Webinar ends, a new UUID will be generated for the next instance of the Webinar). Please double encode your UUID when using it for API calls if the UUID begins with a &#39;/&#39; or contains &#39;//&#39; in it. | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Webinar start time. | [optional] 
**questions** | [**\Zoom\Api\Model\InlineResponse20041Questions[]**](InlineResponse20041Questions.md) | Array of webinar question objects. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


