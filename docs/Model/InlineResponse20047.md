# # InlineResponse20047

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | User&#39;s account ID. | [optional] 
**cms_user_id** | **string** | CMS ID of user, only enabled for Kaltura integration. | [optional] 
**company** | **string** | User&#39;s company. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The date and time at which this user was created. | [optional] 
**custom_attributes** | [**\Zoom\Api\Model\InlineResponse20034CustomAttributes**](InlineResponse20034CustomAttributes.md) |  | [optional] 
**dept** | **string** | Department. | [optional] 
**email** | **string** | User&#39;s email address. | [default to 'john.doe@email.com']
**first_name** | **string** | User&#39;s first name. | [optional] 
**group_ids** | **string[]** | IDs of the web groups user belongs to. | [optional] 
**host_key** | **string** | User&#39;s host key. | [optional] 
**id** | **string** | User ID. | [optional] 
**im_group_ids** | **string[]** | IM IDs of the groups user belongs to. | [optional] 
**jid** | **string** |  | [optional] 
**job_title** | **string** | User&#39;s job title. | [optional] 
**language** | **string** | Default language for the Zoom Web Portal. | [optional] 
**last_client_version** | **string** | User last login client version. | [optional] 
**last_login_time** | [**\DateTime**](\DateTime.md) | User last login time. | [optional] 
**last_name** | **string** | User&#39;s last name. | [optional] 
**location** | **string** | User&#39;s location. | [optional] 
**personal_meeting_url** | **string** | User&#39;s personal meeting url. | [optional] 
**phone_country** | **string** | User&#39;s country for Company Phone Number. | [optional] 
**phone_number** | **string** | User&#39;s phone number. | [optional] 
**pic_url** | **string** | The URL for user&#39;s profile picture. | [optional] 
**pmi** | **int** | Personal meeting ID. | [optional] 
**role_name** | **string** | User&#39;s [role](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) name. | [optional] 
**status** | **string** | Status of user&#39;s account. | [optional] 
**timezone** | **string** | The time zone of the user. | [optional] 
**type** | **int** | User&#39;s plan type:&lt;br&gt;&#x60;1&#x60; - Basic.&lt;br&gt;&#x60;2&#x60; - Licensed.&lt;br&gt;&#x60;3&#x60; - On-prem. | 
**use_pmi** | **bool** | Displays &#x60;true&#x60; if user has enabled PMI for instant meetinsgs, &#x60;false&#x60; otherwise. | [optional] [default to false]
**vanity_url** | **string** | Personal meeting room URL, if the user has one. | [optional] 
**verified** | **int** | Displays whether user is verified or not. &lt;br&gt; &#x60;1&#x60; - Account verified.&lt;br&gt; &#x60;0&#x60; - Account not verified. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


