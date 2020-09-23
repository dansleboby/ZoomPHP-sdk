# # MeetingMetrics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Meeting UUID. Please double encode your UUID when using it for API calls if the UUID begins with a &#39;/&#39;or contains &#39;//&#39; in it. | [optional] 
**id** | **int** | [Meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID-): Unique identifier of the meeting in \&quot;**long**\&quot; format(represented as int64 data type in JSON), also known as the meeting number. | [optional] 
**topic** | **string** | Meeting topic. | [optional] 
**host** | **string** | Host display name. | [optional] 
**email** | **string** | Email address of the host. | [optional] 
**user_type** | **string** | License type of the user. | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Meeting start time. | [optional] 
**end_time** | [**\DateTime**](\DateTime.md) | Meeting end time. | [optional] 
**duration** | **string** | Meeting duration. | [optional] 
**participants** | **int** | Meeting participant count. | [optional] 
**has_pstn** | **bool** | Indicates whether or not the PSTN was used in the meeting. | [optional] 
**has_voip** | **bool** | Indicates whether or not VoIP was used in the meeting. | [optional] 
**has_3rd_party_audio** | **bool** | Indicates whether or not [third party audio](https://support.zoom.us/hc/en-us/articles/202470795-3rd-Party-Audio-Conference) was used in the meeting. | [optional] 
**has_video** | **bool** | Indicates whether or not video was used in the meeting. | [optional] 
**has_screen_share** | **bool** | Indicates whether or not screenshare feature was used in the meeting. | [optional] 
**has_recording** | **bool** | Indicates whether or not the recording feature was used in the meeting. | [optional] 
**has_sip** | **bool** | Indicates whether or not someone joined the meeting using SIP. | [optional] 
**in_room_participants** | **int** | The number of Zoom Room participants in the meeting. | [optional] 
**dept** | **string** | Department of the host. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


