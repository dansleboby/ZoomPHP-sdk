# # Users200ResponseUsersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **\DateTime** | The time at which the user&#39;s account was created. | [optional]
**custom_attributes** | [**\Zoom\Api\Model\Users200ResponseUsersInnerCustomAttributesInner[]**](Users200ResponseUsersInnerCustomAttributesInner.md) | Information about the user&#39;s custom attributes.  This field is **only** returned if users are assigned custom attributes and you provided the &#x60;custom_attributes&#x60; value for the &#x60;include_fields&#x60; query parameter in the API request. | [optional]
**dept** | **string** | The user&#39;s department. | [optional]
**email** | **string** | The user&#39;s email address. |
**employee_unique_id** | **string** | The employee&#39;s unique ID. The this field only returns when:  * SAML single sign-on (SSO) is enabled.  * The &#x60;login_type&#x60; value is &#x60;101&#x60; (SSO). | [optional]
**first_name** | **string** | The user&#39;s first name. | [optional]
**group_ids** | **string[]** | The IDs of groups where the user is a member. | [optional]
**id** | **string** | The user&#39;s ID.   The API does **not** return this value for users with the &#x60;pending&#x60; status. | [optional]
**im_group_ids** | **string[]** | The IDs of IM directory groups where the user is a member. | [optional]
**last_client_version** | **string** | The last client version that user used to log in. | [optional]
**last_login_time** | **\DateTime** | The user&#39;s last login time. This field has a three-day buffer period.  For example, if user first logged in on &#x60;2020-01-01&#x60; and then logged out and logged in on &#x60;2020-01-02&#x60;, this value will still reflect the login time of &#x60;2020-01-01&#x60;. However, if the user logs in on &#x60;2020-01-04&#x60;, the value of this field will reflect the corresponding login time since it exceeds the three-day buffer period. | [optional]
**last_name** | **string** | The user&#39;s last name. | [optional]
**plan_united_type** | **string** | This field is returned if the user is enrolled in the [Zoom United](https://zoom.us/pricing/zoom-bundles) plan. The license option:  * &#x60;1&#x60; — Zoom United Pro-United with US/CA Unlimited.  * &#x60;2&#x60; — Zoom United Pro-United with UK/IR Unlimited.  * &#x60;4&#x60; — Zoom United Pro-United with AU/NZ Unlimited.  * &#x60;8&#x60; — Zoom United Pro-United with Global Select.  * &#x60;16&#x60; — Zoom United Pro-United with Zoom Phone Pro.  * &#x60;32&#x60; — Zoom United Biz-United with US/CA Unlimited.  * &#x60;64&#x60; — Zoom United Biz-United with UK/IR Unlimited.  * &#x60;128&#x60; — Zoom United Biz-United with AU/NZ Unlimited.  * &#x60;256&#x60; — Zoom United Biz-United with Global Select.  * &#x60;512&#x60; — Zoom United Biz-United with Zoom Phone Pro.  * &#x60;1024&#x60; — Zoom United Ent-United with US/CA Unlimited.  * &#x60;2048&#x60; — Zoom United Ent-United with UK/IR Unlimited.  * &#x60;4096&#x60; — Zoom United Ent-United with AU/NZ Unlimited.  * &#x60;8192&#x60; — Zoom United Ent-United with Global Select.  * &#x60;16384&#x60; — Zoom United Ent-United with Zoom Phone Pro.  * &#x60;32768&#x60; — Zoom United Pro-United with JP Unlimited.  * &#x60;65536&#x60; — Zoom United Biz-United with JP Unlimited.  * &#x60;131072&#x60; — Zoom United Ent-United with JP Unlimited. | [optional]
**pmi** | **int** | The user&#39;s [Personal Meeting ID (PMI)](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#understanding-personal-meeting-id-pmi). | [optional]
**role_id** | **string** | The unique ID of the user&#39;s assigned [role](/docs/api-reference/zoom-api/methods#operation/roles). | [optional]
**status** | **string** | The user&#39;s status:  * &#x60;active&#x60; — An active user.  * &#x60;inactive&#x60; — A deactivated user.  * &#x60;pending&#x60; — A pending user. | [optional]
**timezone** | **string** | The user&#39;s timezone. | [optional]
**type** | **int** | The user&#39;s assigned plan type:  * &#x60;1&#x60; — Basic.  * &#x60;2&#x60; — Licensed.  * &#x60;3&#x60; — On-prem.  * &#x60;99&#x60; — None (this can only be set with &#x60;ssoCreate&#x60;). |
**verified** | **int** | Display whether the user&#39;s email address for the Zoom account is verified:  * &#x60;1&#x60; — A verified user email.  * &#x60;0&#x60; — The user&#39;s email **not** verified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
