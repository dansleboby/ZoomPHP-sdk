# # ManageE911signageRequestOneOf1Params

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **string** | Unique identifier of the event. | [optional]
**target_ids** | **string[]** | Provide one of the following IDs associated with the Zoom Room.&lt;br&gt;  * &#x60;accountId&#x60;: Account ID of the Zoom account.&lt;br&gt; Provide account ID as the value of this field to remove the alert content from all Zoom Rooms&#39; displays in the account.&lt;br&gt;&lt;br&gt; * &#x60;locationId&#x60;: Location ID. Get the value of this field by calling the [**List Zoom Rooms locations**](/docs/api-reference/zoom-api/methods#operation/listZRLocations) API.   Provide location ID as the value of this field to remove the alert content from all Zoom Rooms&#39; displays listed in the specified location.&lt;br&gt;&lt;br&gt; * &#x60;roomId&#x60;: Unique identifier of the Zoom Room. Get the value of this field by calling the [**List Zoom Rooms**](/docs/api-reference/zoom-api/methods#operation/listZoomRooms) API. Provide room ID as the value of this field to remove the alert content from a specific Zoom Rooms&#39; display. | [optional]
**target_type** | **string** | Provide one of the following values for this field that is associated to the value you entered in the &#x60;target_ids&#x60; field. &lt;br&gt; * &#x60;account&#x60; * &#x60;location&#x60; * &#x60;room&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
