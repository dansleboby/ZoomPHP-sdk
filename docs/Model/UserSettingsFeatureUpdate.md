# # UserSettingsFeatureUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**concurrent_meeting** | **string** | The user&#39;s assigned [Concurrent Meeting](https://support.zoom.us/hc/en-us/articles/206122046) type:  * &#x60;Basic&#x60;  * &#x60;Plus&#x60;  * &#x60;None&#x60;    **Note:** This feature requires a Concurrent Meeting Basic or Plus plan subscription. | [optional]
**large_meeting** | **bool** | Enable [large meeting](https://support.zoom.us/hc/en-us/articles/201362823-What-is-a-Large-Meeting-) feature for the user. | [optional]
**large_meeting_capacity** | **int** | Set the meeting capacity for the user if the user has **Large meeting** feature enabled. The value for the field can be either 500 or 1000. | [optional]
**meeting_capacity** | **int** | Set a user&#39;s meeting capacity. User&#39;s meeting capacity denotes the maximum number of participants that can join a meeting scheduled by the user. | [optional]
**webinar** | **bool** | Enable Webinar feature for the user. | [optional]
**webinar_capacity** | **int** | The user&#39;s webinar capacity. This only applies to users with the [**Webinar**](https://support.zoom.us/hc/en-us/articles/200917029-Getting-started-with-webinar) feature enabled:  * &#x60;100&#x60;  * &#x60;500&#x60;  * &#x60;501&#x60;  * &#x60;1000&#x60;  * &#x60;1001&#x60;  * &#x60;3000&#x60;  * &#x60;5000&#x60;  * &#x60;10000&#x60; | [optional]
**zoom_events** | **bool** | Whether to enable the Zoom Events feature for the user. | [optional]
**zoom_events_capacity** | **int** | The user&#39;s Zoom Events plan capacity: &#x60;500&#x60;, &#x60;1000&#x60;, &#x60;3000&#x60;, &#x60;5000&#x60;, &#x60;10000&#x60;, &#x60;20000&#x60;, &#x60;30000&#x60;, or &#x60;50000&#x60;. | [optional]
**zoom_phone** | **bool** | Zoom phone feature. | [optional]
**zoom_iq_for_sales** | **bool** | Whether the user has a Zoom IQ license. For information about a Zoom IQ license, contact [Zoom Support](https://support.zoom.us/hc/en-us/articles/201362003). | [optional]
**zoom_whiteboard** | **bool** | Whether the user has a Zoom Whiteboard license. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
