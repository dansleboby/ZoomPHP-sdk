# # GroupMembers200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**members** | [**\Zoom\Api\Model\GroupMembers200ResponseMembersInner[]**](GroupMembers200ResponseMembersInner.md) |  | [optional]
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
**page_count** | **int** | The number of pages returned from this request. | [optional]
**page_number** | **int** | The page number of the current results. | [optional]
**page_size** | **int** | The number of records returned from a single API call. | [optional]
**total_records** | **int** | The total number of records available across all pages. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
