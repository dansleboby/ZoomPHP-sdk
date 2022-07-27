# # UserPasswordRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**password** | **string** | User password. Should be less than 32 characters.  **Note:** If the account owner or admin has enabled [enhanced password requirements](https://support.zoom.us/hc/en-us/articles/360034675592-Advanced-security-settings#h_fa9186e4-6818-4f7a-915c-2e25c19f0acd), the value provided in this field must meet those requirements. These requirements can be retrieved by calling the [**Get account settings](/docs/api-reference/zoom-api/ma#operation/accountSettings) API and referring to the &#x60;password_requirement&#x60; field present in the &#x60;security&#x60; object. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
