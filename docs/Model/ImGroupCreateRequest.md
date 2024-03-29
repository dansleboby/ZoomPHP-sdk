# # ImGroupCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Group name: must be unique to one account. | [optional]
**search_by_account** | **bool** | Members can search for others under same account. | [optional]
**search_by_domain** | **bool** | Members can search for others in the same email domain. | [optional]
**search_by_ma_account** | **bool** | Members can search for others under same master account, including all sub accounts. | [optional]
**type** | **string** | IM Group types:&lt;br&gt;&#x60;normal&#x60; - Only members can see automatically see the other members of this group. Other people can search for members within this group. &lt;br&gt;&#x60;shared&#x60; - Everyone under an account can see the group members automatically.&lt;br&gt;&#x60;restricted&#x60; - Nobody can see the group or search for members except the members in the group. | [optional] [default to 'normal']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
