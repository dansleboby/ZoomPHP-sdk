# # GetBillingReport200ResponseBillingReportsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_date** | **\DateTime** | End date of the billing period. | [optional]
**id** | **string** | Unique Identifier of the report. Use this ID to retrieve billing invoice via the \&quot;Get Billing Invoices API\&quot;.   You can also use this ID to export a CSV file of the billing report from this URL: &#x60;https://zoom.us/account/report/billing/export?id&#x3D;{id}&#x60;. | [optional]
**start_date** | **\DateTime** | Start date of the billing period. | [optional]
**tax_amount** | **string** | Total tax amount for this billing period. | [optional]
**total_amount** | **string** | Total billing amount for this billing period. | [optional]
**type** | **int** | Type of the billing report. The value should be either of the following:&lt;br&gt; &#x60;0&#x60; - Detailed Billing Reports &#x60;1&#x60; - Custom Billing Reports | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
