# # WebinarMetric

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host** | **string** | User display name. | [optional]
**custom_keys** | [**\Zoom\Api\Model\WebinarMetricCustomKeysInner[]**](WebinarMetricCustomKeysInner.md) | Custom keys and values assigned to the Webinar. | [optional]
**dept** | **string** | Department of the host. | [optional]
**duration** | **string** | Webinar duration, formatted as hh:mm:ss, for example: &#x60;10:00&#x60; for ten minutes. | [optional]
**email** | **string** | User email. | [optional]
**end_time** | **\DateTime** | Webinar end time. | [optional]
**has_3rd_party_audio** | **bool** | Use TSP for the Webinar. | [optional]
**has_archiving** | **bool** | Whether the archiving feature was used in the webinar. | [optional]
**has_pstn** | **bool** | Indicates whether or not PSTN was used for the Webinar. | [optional]
**has_recording** | **bool** | Indicates whether or not recording was used for the Webinar. | [optional]
**has_screen_share** | **bool** | Indicates whether or not screen sharing was used for the Webinar. | [optional]
**has_sip** | **bool** | Indicates whether or not SIP was used for the Webinar. | [optional]
**has_video** | **bool** | Indicates whether or not video was used for the Webinar. | [optional]
**has_voip** | **bool** | Indicates whether or not VoIP was used for the Webinar. | [optional]
**id** | **int** | Webinar ID in \&quot;**long**\&quot; format(represented as int64 data type in JSON), also known as the webinar number. | [optional]
**participants** | **int** | Webinar participant count. | [optional]
**start_time** | **\DateTime** | Webinar start time. | [optional]
**topic** | **string** | Webinar topic. | [optional]
**user_type** | **string** | User type. | [optional]
**uuid** | **string** | Webinar UUID. | [optional]
**audio_quality** | **string** | The webinar&#39;s [audio quality score](https://support.zoom.us/hc/en-us/articles/360061244651-Using-meeting-quality-scores-and-network-alerts):  * &#x60;good&#x60; — The audio is almost flawless and the quality is excellent.  * &#x60;fair&#x60; — The audio occasionally has distortion, noise, and other problems, but the content is basically continuous. Participants can communicate normally.  * &#x60;poor&#x60; — The audio often has distortion, noise, and other problems, but the content is basically continuous. Participants can communicate normally.  * &#x60;bad&#x60; — The sound quality is extremely poor and the audio content is almost inaudible. | [optional]
**video_quality** | **string** | The webinar&#39;s [video quality score](https://support.zoom.us/hc/en-us/articles/360061244651-Using-meeting-quality-scores-and-network-alerts):  * &#x60;good&#x60; — The video is almost flawless and the quality is excellent.  * &#x60;fair&#x60; — The video definition is high, occasionally gets stuck, fast or slow, or other problems, but the frequency is very low and the video quality is good.  * &#x60;poor&#x60; — The video definition is not high, but not many problems exist. The video quality is mediocre.  * &#x60;bad&#x60; — The picture is very blurred and often gets stuck. | [optional]
**screen_share_quality** | **string** | The webinar&#39;s [screen share quality score](https://support.zoom.us/hc/en-us/articles/360061244651-Using-meeting-quality-scores-and-network-alerts):  * &#x60;good&#x60; — The video is almost flawless and the quality is excellent.  * &#x60;fair&#x60; — The video definition is high, occasionally gets stuck, fast or slow, or other problems, but the frequency is very low and the video quality is good.  * &#x60;poor&#x60; — The video definition is not high, but not many problems exist. The video quality is mediocre.  * &#x60;bad&#x60; — The picture is very blurred and often gets stuck. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
