# # ParticipantQOSSummaryQosInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the qos summary:  * &#x60;audio_input&#x60; — The QoS metrics for audio sent by a participant.  * &#x60;audio_output&#x60; — The QoS metrics for audio received by a participant.  * &#x60;video_input&#x60; — The QoS metrics for video input being sent by a participant.  * &#x60;video_output&#x60; — The QoS metrics for video output being sent by a participant.  * &#x60;as_input&#x60; — The QoS metrics for screen sharing by a participant.  * &#x60;as_output&#x60; — The QoS metrics for screen sharing output received by a participant.  * &#x60;cpu_usage&#x60; — The QoS metrics for cpu usage.  * &#x60;audio_device_from_crc&#x60; — The QoS metrics for audio sent by a participant who joined the meeting via a Cloud Room Connector (CRC).  * &#x60;audio_device_to_crc&#x60; — The QoS metrics for audio received by a participant who joined the meeting via CRC. * &#x60;video_device_from_crc&#x60; — The QoS metrics for video input being sent by a participant who joined the meeting via CRC.   * &#x60;video_device_to_crc&#x60; — The QoS metrics for video output being sent by a participant who joined the meeting via CRC. * &#x60;as_device_from_crc&#x60; — The QoS metrics for screen sharing by a participant who joined the meeting via CRC.  * &#x60;as_device_to_crc&#x60; — The QoS metrics for screen sharing output received by a participant who joined the meeting via CRC. | [optional]
**details** | [**\Zoom\Api\Model\TheParticipantQOSSummaryDetails**](TheParticipantQOSSummaryDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
