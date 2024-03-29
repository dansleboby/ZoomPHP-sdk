# # RecordingSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approval_type** | **int** | Approval type for the registration.&lt;br&gt; &#x60;0&#x60;- Automatically approve the registration when a user registers.&lt;br&gt; &#x60;1&#x60; - Manually approve or deny the registration of a user.&lt;br&gt; &#x60;2&#x60; - No registration required to view the recording. | [optional]
**authentication_domains** | **string** | Authentication domains. | [optional]
**authentication_option** | **string** | Authentication Options. | [optional]
**on_demand** | **bool** | Determine whether registration is required to view the recording. | [optional]
**password** | **string** | Enable password protection for the recording by setting a password. The password must have a minimum of **eight** characters with a mix of numbers, letters and special characters.&lt;br&gt;&lt;br&gt; **Note:** If the account owner or the admin has set minimum password strength requirements for recordings via Account Settings, the password value provided here must meet those requirements. &lt;br&gt;&lt;br&gt;If the requirements are enabled, you can view those requirements by calling either the [**Get user settings**](/docs/api-reference/zoom-api/methods#operation/userSettings) API or the [**Get account settings**](/docs/api-reference/zoom-api/ma#operation/accountSettings) API. | [optional]
**recording_authentication** | **bool** | Only authenticated users can view. | [optional]
**send_email_to_host** | **bool** | Send an email to host when someone registers to view the recording. This applies for On-demand recordings only. | [optional]
**share_recording** | **string** | Determine how the meeting recording is shared. | [optional]
**show_social_share_buttons** | **bool** | Show social share buttons on registration page. This applies for On-demand recordings only. | [optional]
**topic** | **string** | Name of the recording. | [optional]
**viewer_download** | **bool** | Determine whether a viewer can download the recording file or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
