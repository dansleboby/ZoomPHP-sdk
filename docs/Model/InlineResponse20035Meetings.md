# InlineResponse20035Meetings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Meeting UUID. Each meeting instance will generate its own UUID(i.e., after a meeting ends, a new UUID will be generated for the next instance of the meeting). Please double encode your UUID when using it for API calls if the UUID begins with a &#39;/&#39; or contains &#39;//&#39; in it. | [optional] 
**id** | **int** | [Meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID-):            Unique identifier of the meeting in \&quot;**long**\&quot; format(represented as int64 data type in JSON), also known as the meeting number. | [optional] 
**type** | **int** | Meeting type. | [optional] 
**topic** | **string** | Meeting topic. | [optional] 
**user_name** | **string** | User display name. | [optional] 
**user_email** | **string** | User email. | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Meeting start time. | [optional] 
**end_time** | [**\DateTime**](\DateTime.md) | Meeting end time. | [optional] 
**duration** | **int** | Meeting duration. | [optional] 
**total_minutes** | **int** | Sum of meeting minutes from all participants in the meeting. | [optional] 
**participants_count** | **int** | Number of meeting participants. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


