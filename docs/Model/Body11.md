# Body11

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | User&#39;s first name. | 
**last_name** | **string** | User&#39;s last name. | 
**email** | **string** | User&#39;s email address. | 
**password** | **string** | User&#39;s password.  **Note:** If the account owner or admin has enabled [enhanced password requirements](https://support.zoom.us/hc/en-us/articles/360034675592-Advanced-security-settings#h_fa9186e4-6818-4f7a-915c-2e25c19f0acd), the value provided in this field must meet those requirements. These requirements can be retrieved by calling the [Get Account Settings API](https://marketplace.zoom.us/docs/api-reference/zoom-api/accounts/accountsettings) and referring to the &#x60;password_requirement&#x60; field present in the &#x60;security&#x60; object. | 
**options** | [**\Zoom\Api\Model\AccountsOptions**](AccountsOptions.md) |  | [optional] 
**account_name** | **string** | Name of the account. If you do not provide a value for this field, by default, the value will be set as a contatenation of \&quot;first_name\&quot; and \&quot;last_name\&quot;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


