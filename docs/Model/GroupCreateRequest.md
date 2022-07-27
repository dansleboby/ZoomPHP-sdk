# # GroupCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**directory_privacy** | **int** | The group&#39;s directory privacy setting. Use this parameter if you set the &#x60;in_directory&#x60; parameter to the &#x60;true&#x60; value:  * &#x60;1&#x60; — Visible and searchable to all users.  * &#x60;2&#x60; — Visible only to group members, but searchable to all users.  * &#x60;3&#x60; — Visible and searchable only to group members.   This value defaults to &#x60;2&#x60; and is only available for accounts that enabled a group via the user interface. | [optional] [default to self::DIRECTORY_PRIVACY_2]
**in_directory** | **bool** | Whether to display the group in the Zoom client&#39;s **Contacts** group: * &#x60;true&#x60; — Display the group. * &#x60;false&#x60; — Do not display the group.  This value defaults to &#x60;false&#x60; and is only available for accounts that enabled a group via the user interface. | [optional] [default to false]
**name** | **string** | The group&#39;s name. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
