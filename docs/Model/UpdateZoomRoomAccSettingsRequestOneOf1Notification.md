# # UpdateZoomRoomAccSettingsRequestOneOf1Notification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audio_meet_usability_threshold** | **bool** | Send an alert when the audio echo test result meets usability threshold. | [optional]
**audio_not_meet_usability_threshold** | **bool** | Send an alert when the audio echo test result does not meet usability threshold. | [optional]
**battery_is_charging** | **bool** | Send an alert when the battery starts charging. | [optional]
**battery_low_and_not_charging** | **bool** | Send an alert when the battery of the controller or the scheduling display is low (at 20%) and is not being charged. | [optional]
**battery_percentage** | **string** | Specify a percentage so that an alert is sent when the battery is less than the {battery_percentage} that you specified. | [optional]
**controller_scheduling_disconnected** | **bool** | Send an alert when the connection to the Controller or Scheduling Display cannot be detected. | [optional]
**controller_scheduling_reconnected** | **bool** | Send an alert when the Controller or Scheduling Display can be detected again. | [optional]
**cpu_usage_high_detected** | **bool** | Send an alert when CPU usage is above 90%. | [optional]
**mic_speaker_camera_disconnected** | **bool** | Send an alert when the mic, speaker or camera is disconnected in the Zoom Room. | [optional]
**mic_speaker_camera_reconnected** | **bool** | Send an alert when the mic, speaker or camera is reconnected. | [optional]
**network_stable_detected** | **bool** | Send an alert when the network is stable. | [optional]
**network_unstable_detected** | **bool** | Send an alert when low bandwidth network is detected | [optional]
**sip_registration_failed** | **bool** | Send an alert when SIP registration stops working. | [optional]
**sip_registration_re_enabled** | **bool** | Send an alert after the SIP registration is re-enabled. | [optional]
**zoom_room_come_back_online** | **bool** | Send an alert when the Zoom Room is online after previously being offline. | [optional]
**zoom_room_display_disconnected** | **bool** | Send an alert when the TV display is disconnected | [optional]
**zoom_room_offline** | **bool** | Send an alert when the machine hosting the Zoom Room application has a network issue or cannot connect with the Controller. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
