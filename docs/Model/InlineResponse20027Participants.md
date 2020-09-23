# # InlineResponse20027Participants

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Universally unique identifier of the Participant. It is the same as the User ID of the participant if the participant joins the meeting by logging into Zoom. If the participant joins the meeting without logging in, the value of this field will be blank. | [optional] 
**user_id** | **string** | Participant ID | [optional] 
**user_name** | **string** | Participant display name. | [optional] 
**device** | **string** | The type of device using which the participant joined the meeting. | [optional] 
**ip_address** | **string** | Participant&#39;s IP address. | [optional] 
**location** | **string** | Participant&#39;s location. | [optional] 
**network_type** | **string** | Participant&#39;s network type. | [optional] 
**microphone** | **string** | The type of Microphone that participant used during the meeting. | [optional] 
**speaker** | **string** | The type of speaker participant used during the meeting. | [optional] 
**camera** | **string** | The type of camera used by participant during the meeting. | [optional] 
**data_center** | **string** | Data Center where participant&#39;s meeting data is stored. | [optional] 
**connection_type** | **string** | Participant connection type. | [optional] 
**join_time** | [**\DateTime**](\DateTime.md) | The time at which participant joined the meeting. | [optional] 
**leave_time** | [**\DateTime**](\DateTime.md) | The time at which a participant left the meeting. For live meetings, this field will only be returned if a participant has left the ongoing meeting. | [optional] 
**share_application** | **bool** | Indicates whether or not a user selected to share an iPhone/iPad app during the screenshare. | [optional] 
**share_desktop** | **bool** | Indicates whether or not a user selected to share their desktop during the screenshare. | [optional] 
**share_whiteboard** | **bool** | Indicates whether or not a user selected to share their whiteboard during the screenshare. | [optional] 
**recording** | **bool** | Indicates whether or not recording was used during the meeting. | [optional] 
**pc_name** | **string** | Name of Participant&#39;s PC. | [optional] 
**domain** | **string** | Participant&#39;s PC domain. | [optional] 
**mac_addr** | **string** | Participant&#39;s MAC address. | [optional] 
**harddisk_id** | **string** | Participant&#39;s hard disk ID. | [optional] 
**version** | **string** | Participant&#39;s Zoom Client version. | [optional] 
**in_room_participants** | **int** | The number of participants who joined via Zoom Room. | [optional] 
**leave_reason** | **string** | Possible reasons for why participant left the meeting. | [optional] 
**email** | **string** | Email address of the participant. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


