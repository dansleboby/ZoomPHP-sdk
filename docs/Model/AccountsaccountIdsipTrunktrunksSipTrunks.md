# AccountsaccountIdsipTrunktrunksSipTrunks

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the SIP trunk that will be assigned to the Sub Account. The value of this field can be retrieved by listing the SIP Trunks of a Master Account using List SIP Trunks API. | [optional] 
**dnis** | **string** | DNIS of the Sub Account. The prefix of the DNIS (i.e. the first five digits of the DNIS value) must match the DNIS prefix of the Master Account. To retrieve the DNIS prefix of a Master Account&#39;s SIP Trunk, use the List SIP Trunks API and refer to the first five digits in the &#x60;dnis&#x60; value.   For example, if the DNIS of the Master Account is 1888812345, the DNIS of the Sub Account must comprise of \&quot;18888\&quot; + \&quot;random_number\&quot;. The maximum allowed length of the DNIS is 8. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


