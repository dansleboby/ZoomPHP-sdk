# # GetGroupLockSettings200ResponseOneOfRecordingIpAddressAccessControl

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enable** | **bool** | If set to &#x60;true&#x60;, the cloud recordings of this account can only be accessed by the IP addresses defined in the &#x60;ip_addresses_or_ranges&#x60; property. | [optional]
**ip_addresses_or_ranges** | **string** | IP addresses or ranges that have access to the cloud recordings. Separate multiple IP ranges with comma. Use n.n.n.n, n.n.n.n/n or n.n.n.n - n.n.n.n syntax where n is a number.  Example: &#x60;46.33.24.184, 48.99.100.2/25&#x60; or &#x60;200.181.108.17 - 220.181.108.157&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
