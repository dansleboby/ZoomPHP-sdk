# # UpdateAGroupMemberRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | The action to perform:  * &#x60;move&#x60; — Remove the group member from one group and move them to a different group.  * &#x60;set_primary&#x60; — Set the user&#39;s primary group. |
**target_group_id** | **string** | The target group&#39;s ID. To get this value, use the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API.  * To set a user&#39;s primary group, use the designated primary group&#39;s &#x60;groupId&#x60; value.  * To move a group member from one group to another, use the &#x60;groupId&#x60; of the designated group. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
