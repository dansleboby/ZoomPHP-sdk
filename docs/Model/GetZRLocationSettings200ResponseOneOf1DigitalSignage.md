# # GetZRLocationSettings200ResponseOneOf1DigitalSignage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**banner** | [**\Zoom\Api\Model\GetZRAccountSettings200ResponseOneOf1DigitalSignageBanner**](GetZRAccountSettings200ResponseOneOf1DigitalSignageBanner.md) |  | [optional]
**display_period** | [**\Zoom\Api\Model\GetZRLocationSettings200ResponseOneOf1DigitalSignageDisplayPeriod**](GetZRLocationSettings200ResponseOneOf1DigitalSignageDisplayPeriod.md) |  | [optional]
**enable_digital_signage** | **bool** | [Indicates whether digital signage is on or off,](https://support.zoom.us/hc/en-us/articles/360000030683-Zoom-Rooms-digital-signage#h_767fbb33-82a8-45a8-8392-a1bfa9687edd). &lt;br&gt; &#x60;true&#x60;: enable&lt;br&gt; &#x60;false&#x60;: disable | [optional]
**layout** | **string** | Set the [layout](https://support.zoom.us/hc/en-us/articles/360000030683-Zoom-Rooms-digital-signage#h_4e25ddf3-8f97-4957-8f8b-99725f940fa7). The value of this field can be either &#x60;standard&#x60; or &#x60;video_content&#x60;.  &#x60;standard&#x60;: Standard Center&lt;br&gt; &#x60;video_content&#x60;: Video + Content | [optional]
**mute** | **bool** | Sound of all contents will be muted if the value of this field is set to &#x60;true&#x60;. | [optional]
**play_list** | [**\Zoom\Api\Model\GetZRAccountSettings200ResponseOneOf1DigitalSignagePlayListInner[]**](GetZRAccountSettings200ResponseOneOf1DigitalSignagePlayListInner.md) | Content list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
