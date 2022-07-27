# # DashboardZoomRoom200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_type** | **string** | Zoom room email type. | [optional]
**calender_name** | **string** | Zoom calendar name. | [optional]
**camera** | **string** | Zoom Room camera.  **Note:** This response returns an empty string (&#x60;““&#x60;) value for any users who are **not** a part of the host&#39;s account (external users). | [optional]
**device_ip** | **string** | Zoom room device IP. | [optional]
**email** | **string** | Zoom room email. | [optional]
**health** | **string** | Health of the Zoom Room. | [optional]
**id** | **string** | Zoom room ID. | [optional]
**issues** | **string[]** | Issues encountered by the Zoom Room. | [optional]
**last_start_time** | **string** | Zoom room last start time. | [optional]
**location** | **string** | Zoom room location. | [optional]
**microphone** | **string** | Zoom Room microphone.  **Note:** This response returns an empty string (&#x60;““&#x60;) value for any users who are **not** a part of the host&#39;s account (external users). | [optional]
**room_name** | **string** | Zoom room name. | [optional]
**speaker** | **string** | Zoom Room speaker.  **Note:** This response returns an empty string (&#x60;““&#x60;) value for any users who are **not** a part of the host&#39;s account (external users). | [optional]
**status** | **string** | Zoom room status. | [optional]
**live_meeting** | [**\Zoom\Api\Model\MeetingMetric**](MeetingMetric.md) |  | [optional]
**past_meetings** | [**\Zoom\Api\Model\DashboardZoomRoom200ResponseAllOfPastMeetings**](DashboardZoomRoom200ResponseAllOfPastMeetings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
