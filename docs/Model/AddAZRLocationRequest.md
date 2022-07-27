# # AddAZRLocationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the location. The name must be unique and shouldn&#39;t have already been used in the same account. | [optional]
**parent_location_id** | **string** | The location ID of the location that is a level higher from the location that is being added.&lt;br&gt;&lt;br&gt; For example, to add a City named \&quot;City 1\&quot; as the child location under a State named \&quot;State 1\&quot;, you must provide the location ID of \&quot;State 1\&quot;. This can be retrieved using the [**List Zoom Room locations**](/docs/api-reference/zoom-api/methods#operation/listZRLocations) API. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
