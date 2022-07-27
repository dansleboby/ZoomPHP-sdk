# # MeetingRegistrant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**address** | **string** | The registrant&#39;s address. | [optional]
**city** | **string** | The registrant&#39;s city. | [optional]
**comments** | **string** | The registrant&#39;s questions and comments. | [optional]
**country** | **string** | The registrant&#39;s two-letter [country code](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#countries). | [optional]
**custom_questions** | [**\Zoom\Api\Model\CustomQuestion[]**](CustomQuestion.md) | Information about custom questions. | [optional]
**email** | **string** | The registrant&#39;s email address. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for return value details. |
**first_name** | **string** | The registrant&#39;s first name. |
**industry** | **string** | The registrant&#39;s industry. | [optional]
**job_title** | **string** | The registrant&#39;s job title. | [optional]
**last_name** | **string** | The registrant&#39;s last name. | [optional]
**no_of_employees** | **string** | The registrant&#39;s number of employees:  * &#x60;1-20&#x60;  * &#x60;21-50&#x60;  * &#x60;51-100&#x60;  * &#x60;101-250&#x60;  * &#x60;251-500&#x60;  * &#x60;501-1,000&#x60;  * &#x60;1,001-5,000&#x60;  * &#x60;5,001-10,000&#x60;  * &#x60;More than 10,000&#x60; | [optional]
**org** | **string** | The registrant&#39;s organization. | [optional]
**phone** | **string** | The registrant&#39;s phone number. | [optional]
**purchasing_time_frame** | **string** | The registrant&#39;s purchasing time frame:  * &#x60;Within a month&#x60;  * &#x60;1-3 months&#x60;  * &#x60;4-6 months&#x60;  * &#x60;More than 6 months&#x60;  * &#x60;No timeframe&#x60; | [optional]
**role_in_purchase_process** | **string** | The registrant&#39;s role in the purchase process:  * &#x60;Decision Maker&#x60;  * &#x60;Evaluator/Recommender&#x60;  * &#x60;Influencer&#x60;  * &#x60;Not involved&#x60; | [optional]
**state** | **string** | The registrant&#39;s state or province. | [optional]
**status** | **string** | The registrant&#39;s registration status: * &#x60;approved&#x60; — The registrant is approved to join the meeting.  * &#x60;pending&#x60; — The registrant&#39;s registration is pending. * &#x60;denied&#x60; — The registrant was declined to join the meeting. | [optional]
**zip** | **string** | The registrant&#39;s ZIP or postal code. | [optional]
**create_time** | **\DateTime** | The registrant&#39;s registration date and time. | [optional]
**join_url** | **string** | The URL with which the approved registrant can join the meeting. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
