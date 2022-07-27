# # CreateReservationRequestMeeting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_to_end_encrypted** | **bool** | Whether to enable end-to-end encryption (E2EE). When enabled, the encryption key is stored on the local device and cannot be obtained by anyone else. Enabling E2EE also [disables certain features](https://support.zoom.us/hc/en-us/articles/360048660871), such as cloud recording, live streaming, and allowing participants to join before the host. | [optional]
**password** | **string** | The meeting&#39;s passcode, up to a maximum of 10 characters. This value can only contain the following characters:    &#x60;a&#x60;-&#x60;z&#x60; &#x60;A&#x60;-&#x60;Z&#x60; &#x60;0&#x60;-&#x60;9&#x60; &#x60;@&#x60; &#x60;-&#x60; &#x60;_&#x60; &#x60;*&#x60;    **Note:** If the account owner or administrator has configured a [minimum passcode requirement setting](https://support.zoom.us/hc/en-us/articles/360033559832-Meeting-and-webinar-passwords#h_a427384b-e383-4f80-864d-794bf0a37604), this value must meet those requirements. You can view password requirements by calling the [**Get user settings**](/docs/api-reference/zoom-api/methods#operation/userSettings) API or the [**Get account settings**](/docs/api-reference/zoom-api/ma#operation/accountSettings) API. | [optional]
**waiting_room** | **bool** | Whether participants are placed in the [**Waiting Room**](https://support.zoom.us/hc/en-us/articles/115000332726-Waiting-Room) when they join a meeting. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
