# # ListArchivedFiles200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **\DateTime** | The queried start date. | [optional]
**meetings** | [**\Zoom\Api\Model\CloudArchivedFiles[]**](CloudArchivedFiles.md) | Information about the meeting or webinar. | [optional]
**next_page_token** | **string** | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.   **Note:** if you use &#x60;next_page_token&#x60; as a parameter, your other request parameters should be changeless to make sure that the large result set is what you want. For example, if your &#x60;to&#x60; parameter is for a future time, Zoom resets this value to the current time and returns this value in the response body, along with the &#x60;next_page_token&#x60; value. Use these same &#x60;to&#x60; and &#x60;next_page_token&#x60; values in requests for the remaining results set; otherwise you will get an invalid token error. | [optional]
**page_size** | **int** | The number of records returned within a single API call. | [optional]
**to** | **\DateTime** | The queried end date. | [optional]
**total_records** | **int** | The total number of returned meeting records. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
