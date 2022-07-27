# # ListZRLocations200ResponseLocationsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The location&#39;s unique ID. | [optional]
**name** | **string** | Name of the location. | [optional]
**parent_location_id** | **string** | The parent location&#39;s unique ID. For example, if a Zoom Room is located in Floor 1 of Building A, the location of Building A will be the parent location of Floor 1 and the &#x60;parent_location_id&#x60; of Floor 1 will be the ID of Building A.   The value of &#x60;parent_location_id&#x60; of the top-level location (&#x60;country&#x60;) is the Zoom account&#39;s ID. | [optional]
**type** | **string** | The type of location:  * &#x60;country&#x60;  * &#x60;states&#x60;  * &#x60;city&#x60;  * &#x60;campus&#x60;  * &#x60;building&#x60;  * &#x60;floor&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
