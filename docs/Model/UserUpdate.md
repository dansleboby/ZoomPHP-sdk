# # UserUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cms_user_id** | **string** | The Kaltura user ID. | [optional]
**company** | **string** | The user&#39;s company. | [optional]
**custom_attributes** | [**\Zoom\Api\Model\UserUpdateCustomAttributesInner[]**](UserUpdateCustomAttributesInner.md) | The user&#39;s assigned custom attributes. | [optional]
**dept** | **string** | The user&#39;s assigned department. | [optional]
**first_name** | **string** | The user&#39;s first name. This value cannot contain more than five Chinese characters. | [optional]
**group_id** | **string** | Provide unique identifier of the group that you would like to add a [pending user](https://support.zoom.us/hc/en-us/articles/201363183-Managing-users#h_13c87a2a-ecd6-40ad-be61-a9935e660edb) to. The value of this field can be retrieved from the [**List groups**](/docs/api-reference/zoom-api/methods#operation/groups) API. | [optional]
**host_key** | **string** | The user&#39;s host key. | [optional]
**job_title** | **string** | The user&#39;s job title. | [optional]
**language** | **string** | The user&#39;s language. | [optional]
**last_name** | **string** | The user&#39;s last name. This value cannot contain more than five Chinese characters. | [optional]
**location** | **string** | The user&#39;s location. | [optional]
**manager** | **string** | The user&#39;s assigned manager. | [optional]
**phone_country** | **string** | **Note:** This field has been **deprecated** and will not be supported in the future. Use the &#x60;country&#x60; field of the &#x60;phone_numbers&#x60; object to select the phone number country.   The user&#39;s phone number [country ID](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#countries). | [optional]
**phone_number** | **string** | **Note:** This field has been **deprecated** and will not be supported in the future. Instead, use the &#x60;phone_numbers&#x60; field to assign phone numbers to a user.   The user&#39;s phone number. To update a phone number, you must also provide the &#x60;phone_country&#x60; field. | [optional]
**phone_numbers** | [**\Zoom\Api\Model\UserUpdatePhoneNumbersInner[]**](UserUpdatePhoneNumbersInner.md) | Information about the user&#39;s assigned phone numbers. | [optional]
**pmi** | **int** | The user&#39;s [Personal Meeting ID (PMI)](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#understanding-personal-meeting-id-pmi). | [optional]
**pronouns** | **string** | The user&#39;s pronouns. | [optional]
**pronouns_option** | **int** | The user&#39;s display pronouns setting:  * &#x60;1&#x60; — Ask the user every time they join meetings and webinars.  * &#x60;2&#x60; — Always display pronouns in meetings and webinars.  * &#x60;3&#x60; — Do not display pronouns in meetings and webinars. | [optional]
**timezone** | **string** | The user&#39;s [timezone](/docs/api-reference/other-references/abbreviation-lists#timezones) | [optional]
**type** | **int** | The type of [user](https://support.zoom.us/hc/en-us/articles/201363173-Zoom-user-types-roles):  * &#x60;1&#x60; — Basic.  * &#x60;2&#x60; — Licensed.  * &#x60;3&#x60; — On-Premise.  * &#x60;4&#x60; — No Meetings License.  * &#x60;99&#x60; — None. You can only set this value if the user was created using the &#x60;ssoCreate&#x60; value for &#x60;action&#x60; parameter in the [**Create users**](/docs/api-reference/zoom-api/methods#operation/userCreate) API. | [optional]
**use_pmi** | **bool** | Whether to use a [Personal Meeting ID (PMI)](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#understanding-personal-meeting-id-pmi) for instant meetings. | [optional] [default to false]
**vanity_name** | **string** | The user&#39;s Personal Meeting Room name. | [optional]
**zoom_one_type** | **int** | The Zoom One Bundle plan option:&lt;br&gt;&#x60;0&#x60; - Turn off Zoom United license.&lt;br&gt;&#x60;16&#x60; - Zoom One Business Plus with US/CA Unlimited.&lt;br&gt;&#x60;32&#x60; - Zoom One Business Plus with UK/IR Unlimited.&lt;br&gt;&#x60;64&#x60; - Zoom One Business Plus with AU/NZ Unlimited.&lt;br&gt;&#x60;128&#x60; - Zoom One Business Plus with Japan Unlimited. | [optional]
**plan_united_type** | **string** | The Zoom United type. The license option:  * &#x60;1&#x60; — Zoom United Pro-United with US/CA Unlimited.  * &#x60;2&#x60; — Zoom United Pro-United with UK/IR Unlimited.  * &#x60;4&#x60; — Zoom United Pro-United with AU/NZ Unlimited.  * &#x60;8&#x60; — Zoom United Pro-United with Global Select.  * &#x60;16&#x60; — Zoom United Pro-United with Zoom Phone Pro.  * &#x60;32&#x60; — Zoom United Biz-United with US/CA Unlimited.  * &#x60;64&#x60; — Zoom United Biz-United with UK/IR Unlimited.  * &#x60;128&#x60; — Zoom United Biz-United with AU/NZ Unlimited.  * &#x60;256&#x60; — Zoom United Biz-United with Global Select.  * &#x60;512&#x60; — Zoom United Biz-United with Zoom Phone Pro.  * &#x60;1024&#x60; — Zoom United Ent-United with US/CA Unlimited.  * &#x60;2048&#x60; — Zoom United Ent-United with UK/IR Unlimited.  * &#x60;4096&#x60; — Zoom United Ent-United with AU/NZ Unlimited.  * &#x60;8192&#x60; — Zoom United Ent-United with Global Select.  * &#x60;16384&#x60; — Zoom United Ent-United with Zoom Phone Pro.  * &#x60;32768&#x60; — Zoom United Pro-United with JP Unlimited.  * &#x60;65536&#x60; — Zoom United Biz-United with JP Unlimited.  * &#x60;131072&#x60; — Zoom United Ent-United with JP Unlimited.  * &#x60;none&#x60; — Turn off Zoom United type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
