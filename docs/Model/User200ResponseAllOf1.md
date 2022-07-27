# # User200ResponseAllOf1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | User&#39;s account ID. | [optional]
**account_number** | **int** | The user&#39;s account number. | [optional]
**cms_user_id** | **string** | CMS ID of user, only enabled for Kaltura integration. | [optional]
**company** | **string** | User&#39;s company. | [optional]
**created_at** | **\DateTime** | The date and time at which this user was created. | [optional]
**custom_attributes** | [**\Zoom\Api\Model\User200ResponseAllOf1CustomAttributes**](User200ResponseAllOf1CustomAttributes.md) |  | [optional]
**employee_unique_id** | **string** | The employee&#39;s unique ID. This field only returns when:  * SAML single sign-on (SSO) is enabled.  * The &#x60;login_type&#x60; value is &#x60;101&#x60; (SSO). | [optional]
**group_ids** | **string[]** | IDs of the web groups user belongs to. | [optional]
**im_group_ids** | **string[]** | IM IDs of the groups user belongs to. | [optional]
**jid** | **string** |  | [optional]
**job_title** | **string** | User&#39;s job title. | [optional]
**language** | **string** | Default language for the Zoom Web Portal. | [optional]
**location** | **string** | User&#39;s location. | [optional]
**login_type** | **int** | The user&#39;s login method:  &#x60;0&#x60; — Facebook OAuth&lt;/br&gt;&#x60;1&#x60; — Google OAuth&lt;/br&gt;&#x60;24&#x60; — Apple OAuth&lt;/br&gt;&#x60;27&#x60; — Microsoft OAuth&lt;/br&gt;&#x60;97&#x60; — Mobile device&lt;/br&gt;&#x60;98&#x60; — RingCentral OAuth&lt;/br&gt;&#x60;99&#x60; — API user&lt;/br&gt;&#x60;100&#x60; — Zoom Work email&lt;/br&gt;&#x60;101&#x60; — Single Sign-On (SSO)  The following login methods are only available in China:  &#x60;11&#x60; — Phone number&lt;/br&gt;&#x60;21&#x60; — WeChat&lt;/br&gt;&#x60;23&#x60; — Alipay | [optional]
**manager** | **string** | The manager for the user. | [optional]
**personal_meeting_url** | **string** | User&#39;s personal meeting url. | [optional]
**phone_country** | **string** | **Note:** This field has been **deprecated** and will not be supported in the future. Use the **phone_numbers** field instead of this field. &lt;br&gt; User&#39;s country for Company Phone Number. | [optional]
**phone_number** | **string** | **Note:** This field has been **deprecated** and will not be supported in the future. Use the **phone_numbers** field instead of this field. &lt;br&gt; User&#39;s phone number. | [optional]
**phone_numbers** | [**\Zoom\Api\Model\User200ResponseAllOf1PhoneNumbersInner[]**](User200ResponseAllOf1PhoneNumbersInner.md) |  | [optional]
**pic_url** | **string** | The URL for user&#39;s profile picture. | [optional]
**plan_united_type** | **string** | This field is returned if the user is enrolled in the [Zoom United](https://zoom.us/pricing/zoom-bundles) plan. The license option:  * &#x60;1&#x60; — Zoom United Pro-United with US/CA Unlimited.  * &#x60;2&#x60; — Zoom United Pro-United with UK/IR Unlimited.  * &#x60;4&#x60; — Zoom United Pro-United with AU/NZ Unlimited.  * &#x60;8&#x60; — Zoom United Pro-United with Global Select.  * &#x60;16&#x60; — Zoom United Pro-United with Zoom Phone Pro.  * &#x60;32&#x60; — Zoom United Biz-United with US/CA Unlimited.  * &#x60;64&#x60; — Zoom United Biz-United with UK/IR Unlimited.  * &#x60;128&#x60; — Zoom United Biz-United with AU/NZ Unlimited.  * &#x60;256&#x60; — Zoom United Biz-United with Global Select.  * &#x60;512&#x60; — Zoom United Biz-United with Zoom Phone Pro.  * &#x60;1024&#x60; — Zoom United Ent-United with US/CA Unlimited.  * &#x60;2048&#x60; — Zoom United Ent-United with UK/IR Unlimited.  * &#x60;4096&#x60; — Zoom United Ent-United with AU/NZ Unlimited.  * &#x60;8192&#x60; — Zoom United Ent-United with Global Select.  * &#x60;16384&#x60; — Zoom United Ent-United with Zoom Phone Pro.  * &#x60;32768&#x60; — Zoom United Pro-United with JP Unlimited.  * &#x60;65536&#x60; — Zoom United Biz-United with JP Unlimited.  * &#x60;131072&#x60; — Zoom United Ent-United with JP Unlimited. | [optional]
**pronouns** | **string** | The user&#39;s pronouns. | [optional]
**pronouns_option** | **int** | The user&#39;s display pronouns setting: * &#x60;1&#x60; — Ask the user every time they join meetings and webinars.  * &#x60;2&#x60; — Always display pronouns in meetings and webinars.  * &#x60;3&#x60; — Do not display pronouns in meetings and webinars. | [optional]
**role_id** | **string** | Unique identifier of the [role](/docs/api-reference/zoom-api/methods#operation/roles) assigned to the user. | [optional]
**status** | **string** | Status of user&#39;s account. | [optional]
**use_pmi** | **bool** | Displays &#x60;true&#x60; if user has enabled a [Personal Meeting ID (PMI)](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#understanding-personal-meeting-id-pmi) for instant meetings, &#x60;false&#x60; otherwise. | [optional] [default to false]
**vanity_url** | **string** | Personal meeting room URL, if the user has one. | [optional]
**verified** | **int** | Displays whether user is verified or not. &lt;br&gt; &#x60;1&#x60; - Account verified.&lt;br&gt; &#x60;0&#x60; - Account not verified. | [optional]
**cluster** | **string** | The user&#39;s cluster. | [optional]
**zoom_one_type** | **int** | The user&#39;s Zoom One Bundle plan option:&lt;br&gt;&#x60;4&#x60; - Zoom One Enterprise.&lt;br&gt;&#x60;8&#x60; - Zoom One Enterprise Plus.&lt;br&gt;&#x60;16&#x60; - Zoom One Business Plus with US/CA Unlimited.&lt;br&gt;&#x60;32&#x60; - Zoom One Business Plus with UK/IR Unlimited.&lt;br&gt;&#x60;64&#x60; - Zoom One Business Plus with AU/NZ Unlimited.&lt;br&gt;&#x60;128&#x60; - Zoom One Business Plus with Japan Unlimited. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
