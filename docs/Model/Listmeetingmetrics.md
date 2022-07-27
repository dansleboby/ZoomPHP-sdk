# # Listmeetingmetrics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host** | **string** | Host display name. | [optional]
**custom_keys** | [**\Zoom\Api\Model\MeetingMetricCustomKeysInner[]**](MeetingMetricCustomKeysInner.md) | Custom keys and values assigned to the meeting. | [optional]
**dept** | **string** | Department of the host. | [optional]
**duration** | **string** | Meeting duration. Formatted as hh:mm:ss, for example: &#x60;16:08&#x60; for 16 minutes and 8 seconds. | [optional]
**email** | **string** | Email address of the host. | [optional]
**end_time** | **\DateTime** | Meeting end time. | [optional]
**has_3rd_party_audio** | **bool** | Indicates whether or not [third party audio](https://support.zoom.us/hc/en-us/articles/202470795-3rd-Party-Audio-Conference) was used in the meeting. | [optional]
**has_archiving** | **bool** | Whether the archiving feature was used in the meeting. | [optional]
**has_pstn** | **bool** | Indicates whether or not the PSTN was used in the meeting. | [optional]
**has_recording** | **bool** | Indicates whether or not the recording feature was used in the meeting. | [optional]
**has_screen_share** | **bool** | Indicates whether or not screenshare feature was used in the meeting. | [optional]
**has_sip** | **bool** | Indicates whether or not someone joined the meeting using SIP. | [optional]
**has_video** | **bool** | Indicates whether or not video was used in the meeting. | [optional]
**has_voip** | **bool** | Indicates whether or not VoIP was used in the meeting. | [optional]
**id** | **int** | [Meeting ID](https://support.zoom.us/hc/en-us/articles/201362373-What-is-a-Meeting-ID-): Unique identifier of the meeting in \&quot;**long**\&quot; format(represented as int64 data type in JSON), also known as the meeting number. | [optional]
**in_room_participants** | **int** | The number of Zoom Room participants in the meeting. | [optional]
**participants** | **int** | Meeting participant count. | [optional]
**start_time** | **\DateTime** | Meeting start time. | [optional]
**topic** | **string** | Meeting topic. | [optional]
**tracking_fields** | [**\Zoom\Api\Model\ListmeetingmetricsTrackingFieldsInner[]**](ListmeetingmetricsTrackingFieldsInner.md) | Tracking fields and values assigned to the meeting. | [optional]
**user_type** | **string** | License type of the user. | [optional]
**uuid** | **string** | Meeting UUID. Please double encode your UUID when using it for API calls if the UUID begins with a &#39;/&#39;or contains &#39;//&#39; in it. | [optional]
**audio_quality** | **string** | The meeting&#39;s [audio quality score](https://support.zoom.us/hc/en-us/articles/360061244651-Using-meeting-quality-scores-and-network-alerts):  * &#x60;good&#x60; — The audio is almost flawless and the quality is excellent.  * &#x60;fair&#x60; — The audio occasionally has distortion, noise, and other problems, but the content is basically continuous. Participants can communicate normally.  * &#x60;poor&#x60; — The audio often has distortion, noise, and other problems, but the content is basically continuous. Participants can communicate normally.  * &#x60;bad&#x60; — The sound quality is extremely poor and the audio content is almost inaudible. | [optional]
**video_quality** | **string** | The meeting&#39;s [video quality score](https://support.zoom.us/hc/en-us/articles/360061244651-Using-meeting-quality-scores-and-network-alerts):  * &#x60;good&#x60; — The video is almost flawless and the quality is excellent.  * &#x60;fair&#x60; — The video definition is high, occasionally gets stuck, fast or slow, or other problems, but the frequency is very low and the video quality is good.  * &#x60;poor&#x60; — The video definition is not high, but not many problems exist. The video quality is mediocre.  * &#x60;bad&#x60; — The picture is very blurred and often gets stuck. | [optional]
**screen_share_quality** | **string** | The meeting&#39;s [screen share quality score](https://support.zoom.us/hc/en-us/articles/360061244651-Using-meeting-quality-scores-and-network-alerts):  * &#x60;good&#x60; — The video is almost flawless and the quality is excellent.  * &#x60;fair&#x60; — The video definition is high, occasionally gets stuck, fast or slow, or other problems, but the frequency is very low and the video quality is good.  * &#x60;poor&#x60; — The video definition is not high, but not many problems exist. The video quality is mediocre.  * &#x60;bad&#x60; — The picture is very blurred and often gets stuck. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
