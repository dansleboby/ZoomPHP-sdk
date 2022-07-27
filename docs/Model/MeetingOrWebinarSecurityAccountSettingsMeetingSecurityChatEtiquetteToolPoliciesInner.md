# # MeetingOrWebinarSecurityAccountSettingsMeetingSecurityChatEtiquetteToolPoliciesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The policy&#39;s description. | [optional]
**id** | **string** | The policy ID. | [optional]
**is_locked** | **bool** | Whether the policy is locked by an account-level user. When it is locked, users cannot update the policy. | [optional]
**keywords** | **string[]** | A list of defined rule keywords. | [optional]
**name** | **string** | The policy name. | [optional]
**regular_expression** | **string** | The regular expression to match to the content of chat messages. | [optional]
**status** | **string** | The policy&#39;s current status:  * &#x60;activated&#x60; — Activated.  * &#x60;deactivated&#x60; — Deactivated. | [optional]
**trigger_action** | **int** | The policy&#39;s trigger action:  * &#x60;1&#x60; — Ask the user to confirm before they send the message.  * &#x60;2&#x60; — Block the user&#39;s message. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
