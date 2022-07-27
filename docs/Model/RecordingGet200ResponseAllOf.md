# # RecordingGet200ResponseAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**download_access_token** | **string** | The JWT token to download the meeting&#39;s recording. This response only returns if the &#x60;download_access_token&#x60; is included in the &#x60;include_fields&#x60; query parameter. | [optional]
**password** | **string** | The cloud recording&#39;s password. | [optional]
**recording_play_passcode** | **string** | The cloud recording&#39;s password to be used in the URL. This recording&#39;s password can be directly spliced in &#x60;play_url&#x60; or &#x60;share_url&#x60; with &#x60;?pwd&#x3D;&#x60; to access and play. For example, &#39;https://zoom.us/rec/share/_**************?pwd&#x3D;yNYIS408EJygs7rE5vVsJwXIz4-VW7MH&#39;. If you want to use this field, please contact Zoom support. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
