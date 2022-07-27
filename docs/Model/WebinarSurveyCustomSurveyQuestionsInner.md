# # WebinarSurveyCustomSurveyQuestionsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**answer_max_character** | **int** | The allowed maximum number of characters. This field only applies to &#x60;long_answer&#x60; survey, a maximum of 2,000 characters. | [optional]
**answer_min_character** | **int** | The allowed minimum number of characters. This field only applies to &#x60;long_answer&#x60; survey. You must provide at least a **one** character minimum value. | [optional]
**answer_required** | **bool** | Whether participants must answer the question:  * &#x60;true&#x60; — The participant must answer the question.  * &#x60;false&#x60; — The participant does not need to answer the question.    This value defaults to &#x60;false&#x60;. | [optional] [default to false]
**answers** | **string[]** | The survey question&#39;s available answers. This field requires a **minimum** of two answers.   * For &#x60;single&#x60; and &#x60;multiple&#x60; polls, you can only provide a maximum of 10 answers.  * For &#x60;matching&#x60; polls, you can only provide a maximum of 16 answers.  * For &#x60;rank_order&#x60; polls, you can only provide a maximum of seven answers. | [optional]
**name** | **string** | The survey question, up to 255 characters. | [optional]
**rating_max_label** | **string** | The high score label used for the &#x60;rating_max_value&#x60; field.    This field only applies to the &#x60;rating_scale&#x60; survey. | [optional]
**rating_max_value** | **int** | The rating scale&#39;s maximum value, up to a maximum value of 10.    This field only applies to the &#x60;rating_scale&#x60; survey. | [optional]
**rating_min_label** | **string** | The low score label used for the &#x60;rating_min_value&#x60; field.    This field only applies to the &#x60;rating_scale&#x60; survey. | [optional]
**rating_min_value** | **int** | The rating scale&#39;s minimum value. This value cannot be less than zero.    This field only applies to the &#x60;rating_scale&#x60; survey. | [optional]
**show_as_dropdown** | **bool** | Display the radio selection as a drop-down box:  * &#x60;true&#x60; — Show as a drop-down box.  * &#x60;false&#x60; — Do not show as a drop-down box.    This value defaults to &#x60;false&#x60;. | [optional] [default to false]
**type** | **string** | The survey&#39;s question and answer type:  * &#x60;single&#x60; — Single choice.  * &#x60;multiple&#x60; — Multiple choice.  * &#x60;rating_scale&#x60; — Rating scale.  * &#x60;long_answer&#x60; — Long answer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
