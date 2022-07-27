# # AccountPlanBaseRequired

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hosts** | **int** | The account plan&#39;s number of hosts:  * For a Pro plan, provide a value between &#x60;1&#x60; and &#x60;9&#x60;.  * For a Business Plan, provide a value between &#x60;10&#x60; and &#x60;49&#x60;.  * For a Education Plan, provide a value between &#x60;20&#x60; and &#x60;149&#x60;.  * For a Free Trial Plan, provide a value between &#x60;1&#x60; and &#x60;9999&#x60;.   You **must** provide at least one positive integer value for the this field or the &#x60;increasing_hosts&#x60; field. | [optional]
**increasing_hosts** | **int** | An optional number of additional hosts to add to the account&#39;s Base plan. For example, a &#x60;1&#x60; value will add one additional host to the existing &#x60;20&#x60; hosts, for a total of &#x60;21&#x60; hosts.   You **must** provide at least one positive integer value for this field or the &#x60;hosts&#x60; field. | [optional]
**type** | **string** | The account&#39;s [Base plan type](https://marketplace.zoom.us/docs/api-reference/other-references/plans#base-plans). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
