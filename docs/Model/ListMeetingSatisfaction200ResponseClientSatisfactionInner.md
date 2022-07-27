# # ListMeetingSatisfaction200ResponseClientSatisfactionInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** | Date of the report. | [optional]
**good_count** | **int** | The total number of \&quot;thumbs up\&quot; received for this meeting. | [optional]
**none_count** | **int** | The total number of attendees who didn&#39;t submit any response (neither thumbs up nor thumbs down). | [optional]
**not_good_count** | **int** | The total number of \&quot;thumbs down\&quot; received for this meeting. | [optional]
**satisfaction_percent** | **double** | Satisfaction Percentage. The satisfaction percentage is calculated as &#x60;(good_count + none_count)&#x60; / &#x60;total_count&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
