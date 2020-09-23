# ParticipantQOS

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | Participant ID. | [optional] 
**user_name** | **string** | Participant display name. | [optional] 
**device** | **string** | The type of device using which the participant joined the meeting. | [optional] 
**ip_address** | **string** | Participant&#39;s IP address. | [optional] 
**location** | **string** | Participant&#39;s location. | [optional] 
**join_time** | [**\DateTime**](\DateTime.md) | The time at which participant joined the meeting. | [optional] 
**leave_time** | [**\DateTime**](\DateTime.md) | The time at which participant left the meeting. | [optional] 
**pc_name** | **string** | Participant&#39;s PC name. | [optional] 
**domain** | **string** | Participant&#39;s PC domain. | [optional] 
**mac_addr** | **string** | Participant&#39;s MAC address. | [optional] 
**harddisk_id** | **string** | Participant&#39;s hard disk ID. | [optional] 
**version** | **string** | Participant&#39;s Zoom Client version. | [optional] 
**user_qos** | [**\Swagger\Client\Model\ParticipantQOSUserQos[]**](ParticipantQOSUserQos.md) | Quality of service provided to the user. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


