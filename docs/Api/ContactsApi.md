# Zoom\Api\ContactsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserContact**](ContactsApi.md#getUserContact) | **GET** /chat/users/me/contacts/{contactId} | Get User&#39;s Contact Details
[**getUserContacts**](ContactsApi.md#getUserContacts) | **GET** /chat/users/me/contacts | List User&#39;s Contacts
[**searchCompanyContacts**](ContactsApi.md#searchCompanyContacts) | **GET** /contacts | Search Company Contacts



## getUserContact

> \Zoom\Api\Model\InlineResponse2009 getUserContact($contact_id, $query_presence_status)

Get User's Contact Details

A user under an organization’s Zoom account has internal users listed under Company Contacts in the Zoom Client. A Zoom user can also add another Zoom user as a [contact](https://support.zoom.us/hc/en-us/articles/115004055706-Managing-Contacts). Call this API to get information on a specific contact of the Zoom user.  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b>This API only supports <b>user-managed</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>.</p><br>  **Scope**: `chat_contact:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | The user's contact Id or email address. The contact can be either a company contact or an external contact.
$query_presence_status = True; // bool | The presence status of the contact.  Include this query parameter with a value of `true` to get the presence status of the contact in the response.

try {
    $result = $apiInstance->getUserContact($contact_id, $query_presence_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getUserContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **string**| The user&#39;s contact Id or email address. The contact can be either a company contact or an external contact. |
 **query_presence_status** | **bool**| The presence status of the contact.  Include this query parameter with a value of &#x60;true&#x60; to get the presence status of the contact in the response. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUserContacts

> \Zoom\Api\Model\InlineResponse2008 getUserContacts($type, $page_size, $next_page_token)

List User's Contacts

A user under an organization’s Zoom account has internal users listed under Company Contacts in the Zoom Client. A Zoom user can also add another Zoom user as a [contact](https://support.zoom.us/hc/en-us/articles/115004055706-Managing-Contacts). Call this API to list all the contacts of a Zoom user. Zoom contacts are categorized into \"company contacts\" and \"external contacts\". You must specify the contact type in the `type` query parameter. If you do not specify, by default, the type will be set as company contact.  <p style=\"background-color:#e1f5fe; color:#01579b; padding:8px\"> <b>Note: </b> This API only supports <b>user-managed</b> <a href=\"https://marketplace.zoom.us/docs/guides/getting-started/app-types/create-oauth-app\">OAuth app</a>.</p><br>  **Scope**: `chat_contact:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'company'; // string | The type of contact. The value can be one of the following: `company`: Contacts from the user's organization. `external`: External contacts.
$page_size = 10; // int | The number of records returned with a single API call.
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->getUserContacts($type, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getUserContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The type of contact. The value can be one of the following: &#x60;company&#x60;: Contacts from the user&#39;s organization. &#x60;external&#x60;: External contacts. | [optional] [default to &#39;company&#39;]
 **page_size** | **int**| The number of records returned with a single API call. | [optional] [default to 10]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCompanyContacts

> \Zoom\Api\Model\InlineResponse2005 searchCompanyContacts($search_key, $query_presence_status, $page_size, $next_page_token)

Search Company Contacts

A user under an organization's Zoom account has internal users listed under Company Contacts in the Zoom Client. Use this API to search users that are in the company contacts of a Zoom account. Using the `search_key` query parameter, provide either first name, last name or the email address of the user that you would like to search for. Optionally, set `query_presence_status` to `true` in order to include the presence status of a contact. <br><br>  **Scopes:** `contact:read:admin`, `contact:read`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_key = 'search_key_example'; // string | Provide the keyword - either first name, last name or email of the contact whom you have to search for.
$query_presence_status = 'query_presence_status_example'; // string | Set `query_presence_status` to `true` in order to include the presence status of a contact in the response.
$page_size = 1; // int | The number of records to be returned with a single API call.
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->searchCompanyContacts($search_key, $query_presence_status, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->searchCompanyContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_key** | **string**| Provide the keyword - either first name, last name or email of the contact whom you have to search for. |
 **query_presence_status** | **string**| Set &#x60;query_presence_status&#x60; to &#x60;true&#x60; in order to include the presence status of a contact in the response. | [optional]
 **page_size** | **int**| The number of records to be returned with a single API call. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

