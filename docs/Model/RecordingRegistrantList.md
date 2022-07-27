# # RecordingRegistrantList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
**page_count** | **int** | The number of pages returned for the request made. | [optional]
**page_number** | **int** | **Deprecated.** We will no longer support this field in a future release. Instead, use the &#x60;next_page_token&#x60; for pagination. | [optional] [default to 1]
**page_size** | **int** | The number of records returned with a single API call. | [optional] [default to 30]
**total_records** | **int** | The total number of all the records available across pages. | [optional]
**registrants** | **object[]** | Information about the cloud recording registrants. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
