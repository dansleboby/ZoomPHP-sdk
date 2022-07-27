# # UpdateZRLocationSettingsRequestOneOfMeetingSecurity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**encryption_type** | **string** | Choose between enhanced encryption and [end-to-end encryption](https://support.zoom.us/hc/en-us/articles/360048660871) when starting or a meeting. When using end-to-end encryption, several features (e.g. cloud recording, phone/SIP/H.323 dial-in) will be **automatically disabled**. &lt;br&gt;&lt;br&gt;The value of this field can be one of the following:&lt;br&gt; &#x60;enhanced_encryption&#x60;: Enhanced encryption. Encryption is stored in the cloud if you enable this option. &lt;br&gt;  &#x60;e2ee&#x60;: [End-to-end encryption](https://support.zoom.us/hc/en-us/articles/360048660871). The encryption key is stored in your local device and can not be obtained by anyone else. Enabling this setting also **disables** the following features: join before host, cloud recording, streaming, live transcription, breakout rooms, polling, 1:1 private chat, and meeting reactions. | [optional]
**end_to_end_encrypted_meetings** | **bool** | Allow use of end-to-end encryption for meetings. If set to &#x60;true&#x60;, you can specify the encryption type in &#x60;encryption_type&#x60; field. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
