# # UpdateRoleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description of the role. | [optional]
**id** | **string** | Role Id. | [optional]
**name** | **string** | Name of the role. | [optional]
**privileges** | **string[]** | Privileges assigned to the role. Can be one or a combination of [these permissions](https://marketplace.zoom.us/docs/api-reference/other-references/privileges). | [optional]
**sub_account_privileges** | [**\Zoom\Api\Model\UpdateRoleRequestSubAccountPrivileges**](UpdateRoleRequestSubAccountPrivileges.md) |  | [optional]
**total_members** | **int** | Total members assigned to that role. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
