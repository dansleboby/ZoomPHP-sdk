# # AccountOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_auto_renew** | **bool** | Whether to enable automatic billing renewal. | [optional]
**meeting_connector_list** | **string[]** | A comma-separated list of Meeting Connector IP addresses shared with the sub account. If you do not provide a value for this field, all the Master account&#39;s Meeting Connectors will be shared with the sub account.    **Note:** You can only use this field if &#x60;share_mc&#x60; value is &#x60;true&#x60;. | [optional]
**pay_mode** | **string** | The account&#39;s payee:  * &#x60;master&#x60; — The Master account holder pays.  * &#x60;sub&#x60; - The sub account holder pays.    This value defaults to &#x60;master&#x60;. | [optional] [default to 'master']
**room_connector_list** | **string[]** | A comma-separated list of VRC IP addresses shared with the sub account. If you do not provide a value for this field, all of the Master account&#39;s VRCs will be shared with the sub account.    **Note:** You can only use this field if &#x60;share_rc&#x60; value is &#x60;true&#x60;. | [optional]
**share_mc** | **bool** | Whether to enable the option for a sub account to use the Master account&#39;s shared [Meeting Connectors](https://support.zoom.us/hc/en-us/articles/201363093). Meeting Connectors are only available for On-Premise accounts.    This value defaults to &#x60;false&#x60;. | [optional] [default to false]
**share_rc** | **bool** | Whether to enable the option for a sub account to use the Master account&#39;s shared [Virtual Room Connectors (VRC)](https://support.zoom.us/hc/en-us/articles/202134758-Deploying-the-Virtual-Room-Connector). VRCs are only available for On-premise accounts.    This value defaults to &#x60;false&#x60;. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
