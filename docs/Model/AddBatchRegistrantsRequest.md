# # AddBatchRegistrantsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_approve** | **bool** | If a meeting was scheduled with approval_type &#x60;1&#x60; (manual approval), but you would like to automatically approve the registrants that are added via this API, you can set the value of this field to &#x60;true&#x60;.   You **cannot** use this field to change approval setting for a meeting  that was originally scheduled with approval_type &#x60;0&#x60; (automatic approval). | [optional]
**registrants** | [**\Zoom\Api\Model\AddBatchRegistrantsRequestRegistrantsInner[]**](AddBatchRegistrantsRequestRegistrantsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
