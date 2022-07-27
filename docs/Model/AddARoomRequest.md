# # AddARoomRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location_id** | **string** | **Optional**&lt;br&gt;Location ID of the lowest level location in the [location hierarchy](https://support.zoom.us/hc/en-us/articles/115000342983-Zoom-Rooms-Location-Hierarchy) where the Zoom Room is to be added. For instance if the structure of the location hierarchy is set up as “country, states, city, campus, building, floor”, a room can only be added under the floor level location.   This ID can be retrieved from the [**List Zoom Room locations**](/docs/api-reference/zoom-api/methods#operation/listZRLocations) API. | [optional]
**name** | **string** | Name of the Zoom Room. |
**type** | **string** | Type of the Zoom Room. |
**calendar_resource_id** | **string** | The calendar resource&#39;s ID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
