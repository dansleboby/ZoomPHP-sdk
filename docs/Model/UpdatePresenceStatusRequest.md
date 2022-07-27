# # UpdatePresenceStatusRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**duration** | **int** | If updating the user&#39;s status to &#x60;Do_Not_Disturb&#x60;, the duration for which the status should remain as &#x60;Do_Not_Disturb&#x60;, in minutes. | [optional]
**status** | **string** | The user&#39;s presence status:  * &#x60;Away&#x60;  * &#x60;Do_Not_Disturb&#x60;  * &#x60;Available&#x60;  * &#x60;In_Calendar_Event&#x60;  * &#x60;Presenting&#x60;  * &#x60;In_A_Zoom_Meeting&#x60;  * &#x60;On_A_Call&#x60;   Users who are on Zoom Client with a version **lower than 5.3.0** can update the status from:  * &#x60;Away&#x60; to &#x60;Do_Not_Disturb&#x60;  * &#x60;Available&#x60; to &#x60;Do_Not_Disturb&#x60;   Users who are on **Zoom Client 5.3.0 or higher** can update the status from:  * &#x60;Do_Not_Disturb&#x60; to &#x60;Away&#x60; * &#x60;Do_Not_Disturb&#x60; to &#x60;Available&#x60;  * &#x60;Available&#x60; to &#x60;Away&#x60;  * &#x60;Away&#x60; to &#x60;Available&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
