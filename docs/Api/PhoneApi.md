# Zoom\Api\PhoneApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountCallLogs**](PhoneApi.md#accountCallLogs) | **GET** /phone/call_logs | Get Account&#39;s Call Logs
[**assignCallingPlan**](PhoneApi.md#assignCallingPlan) | **POST** /phone/users/{userId}/calling_plans | Assign Calling Plan to a User
[**assignPhoneNumber**](PhoneApi.md#assignPhoneNumber) | **POST** /phone/users/{userId}/phone_numbers | Assign Phone Number to User
[**changeMainCompanyNumber**](PhoneApi.md#changeMainCompanyNumber) | **PUT** /phone/company_number | Change Main Company Number
[**getPhoneNumberDetails**](PhoneApi.md#getPhoneNumberDetails) | **GET** /phone/numbers/{numberId} | Get Phone Number Details
[**listAccountPhoneNumbers**](PhoneApi.md#listAccountPhoneNumbers) | **GET** /phone/numbers | List Phone Numbers
[**listCallingPlans**](PhoneApi.md#listCallingPlans) | **GET** /phone/calling_plans | List Calling Plans
[**listPhoneUsers**](PhoneApi.md#listPhoneUsers) | **GET** /phone/users | List Phone Users
[**phoneUser**](PhoneApi.md#phoneUser) | **GET** /phone/users/{userId} | Get User&#39;s Profile
[**phoneUserCallLogs**](PhoneApi.md#phoneUserCallLogs) | **GET** /phone/users/{userId}/call_logs | Get User&#39;s Call Logs
[**phoneUserRecordings**](PhoneApi.md#phoneUserRecordings) | **GET** /phone/users/{userId}/recordings | Get User&#39;s Recordings
[**phoneUserSettings**](PhoneApi.md#phoneUserSettings) | **GET** /phone/users/{userId}/settings | Get User&#39;s Settings
[**phoneUserVoiceMails**](PhoneApi.md#phoneUserVoiceMails) | **GET** /phone/users/{userId}/voice_mails | Get User&#39;s Voicemails
[**unassignCallingPlan**](PhoneApi.md#unassignCallingPlan) | **DELETE** /phone/users/{userId}/calling_plans/{type} | Unassign User&#39;s Calling Plan
[**unassignPhoneNumber**](PhoneApi.md#unassignPhoneNumber) | **DELETE** /phone/users/{userId}/phone_numbers/{phoneNumberId} | Unassign User&#39;s Phone Number
[**updateUserProfile**](PhoneApi.md#updateUserProfile) | **PATCH** /phone/users/{userId} | Update User&#39;s Profile



## accountCallLogs

> \Zoom\Api\Model\InlineResponse20066 accountCallLogs($page_size, $from, $to, $type, $next_page_token)

Get Account's Call Logs

Retrieve [call logs](https://support.zoom.us/hc/en-us/articles/360021114452-Viewing-Call-Logs) for an account.   **Scopes**: `phone:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisite:**<br> 1. Business or Enterprise account<br> 2. A Zoom Phone license<br> 3. Account Owner and a [role](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) with Zoom Phone Management<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 30; // int | The number of records returned within a single API call.
$from = 'from_example'; // string | Start date from which you would like to get the call logs. The start date should be within past six months.
$to = 'to_example'; // string | The end date upto which you would like to get the call logs for. The end date should be within past six months.
$type = 'type_example'; // string | The type of the call logs. The value can be either \"all\" or \"missed\".
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->accountCallLogs($page_size, $from, $to, $type, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->accountCallLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **from** | **string**| Start date from which you would like to get the call logs. The start date should be within past six months. | [optional]
 **to** | **string**| The end date upto which you would like to get the call logs for. The end date should be within past six months. | [optional]
 **type** | **string**| The type of the call logs. The value can be either \&quot;all\&quot; or \&quot;missed\&quot;. | [optional]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## assignCallingPlan

> object assignCallingPlan($user_id, $body)

Assign Calling Plan to a User

Assign [calling plan](https://marketplace.zoom.us/docs/api-reference/other-references/plans#zoom-phone-calling-plans) to a [Zoom Phone](https://support.zoom.us/hc/en-us/categories/360001370051-Zoom-Phone) user.  **Scopes**: `phone:write` `phone:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisite:**  1. Business or Enterprise account 2. A Zoom Phone license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | 
$body = new \Zoom\Api\Model\InlineObject48(); // \Zoom\Api\Model\InlineObject48 | 

try {
    $result = $apiInstance->assignCallingPlan($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->assignCallingPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **body** | [**\Zoom\Api\Model\InlineObject48**](../Model/InlineObject48.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## assignPhoneNumber

> \Zoom\Api\Model\InlineResponse20067 assignPhoneNumber($user_id, $body)

Assign Phone Number to User

Assign a [phone number](https://support.zoom.us/hc/en-us/articles/360020808292-Managing-Phone-Numbers) to a user who has already enabled Zoom Phone.   **Scopes**: `phone:write` `phone:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisite:**  1. Business or Enterprise account 2. A Zoom Phone license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | 
$body = new \Zoom\Api\Model\InlineObject47(); // \Zoom\Api\Model\InlineObject47 | 

try {
    $result = $apiInstance->assignPhoneNumber($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->assignPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **body** | [**\Zoom\Api\Model\InlineObject47**](../Model/InlineObject47.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20067**](../Model/InlineResponse20067.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## changeMainCompanyNumber

> object changeMainCompanyNumber($body)

Change Main Company Number

The [main company number](https://support.zoom.us/hc/en-us/articles/360028553691) can be used by external callers to reach your phone users (by dialing the main company number and the user's extension). It can also be used by phone users in your account as their caller ID while making calls.<br><br> Use this API to [change the main company number](https://support.zoom.us/hc/en-us/articles/360028553691#h_82414c34-9df2-428a-85a4-efcf7f9e0d72) of an account.<br><br> **Prerequisites:**<br> * Pro or higher account plan. * Account owner or admin permissions<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Zoom\Api\Model\InlineObject72(); // \Zoom\Api\Model\InlineObject72 | 

try {
    $result = $apiInstance->changeMainCompanyNumber($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->changeMainCompanyNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Zoom\Api\Model\InlineObject72**](../Model/InlineObject72.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPhoneNumberDetails

> \Zoom\Api\Model\InlineResponse20092 getPhoneNumberDetails($number_id)

Get Phone Number Details

A Zoom account owner or admin can purchase phone numbers and assign them to Zoom phone users. Use this API to get details on a specific Phone number in a Zoom account.<br><br> **Prerequisites:**<br> * Pro or higher plan with Zoom phone license<br> **Scope:** `phone:read:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number_id = 'number_id_example'; // string | Unique Identifier of the Phone Number. This can be retrieved from the List Phone Numbers API.

try {
    $result = $apiInstance->getPhoneNumberDetails($number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->getPhoneNumberDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number_id** | **string**| Unique Identifier of the Phone Number. This can be retrieved from the List Phone Numbers API. |

### Return type

[**\Zoom\Api\Model\InlineResponse20092**](../Model/InlineResponse20092.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAccountPhoneNumbers

> \Zoom\Api\Model\InlineResponse200 listAccountPhoneNumbers($next_page_token, $type, $extension_type, $page_size, $number_type, $pending_numbers, $site_id)

List Phone Numbers

A Zoom account owner or admin can purchase phone numbers and assign them to Zoom phone users. Use this API to list all Zoom Phone numbers in a Zoom account. You can filter the response based on your needs by using query parameters.  **Prerequisites:**<br> * Pro or higher plan with Zoom phone license<br> **Scope:** `phone:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$type = 'type_example'; // string | Query response by number assignment. The value can be one of the following:<br> `assigned`: The number has been assigned to either a user, a call queue, an auto-receptionist or a common area phone in an account. <br>`unassigned`: The number is not assigned to anyone.<br>  `all`: Include both assigned and unassigned numbers in the response.
$extension_type = 'extension_type_example'; // string | The type of assignee to whom the number is assigned. The value can be one of the following:<br> `user`<br> `callQueue`<br> `autoReceptionist`<br> `commonAreaPhone`
$page_size = 30; // int | The number of records returned within a single API call.
$number_type = 'number_type_example'; // string | The type of phone number. The value can be either `toll` or `tollfree`.
$pending_numbers = True; // bool | Include or exclude pending numbers in the response. The value can be either `true` or `false`.
$site_id = 'site_id_example'; // string | Unique identifier of the site. Use this query parameter if you have [enabled multiple sites](https://support.zoom.us/hc/en-us/articles/360020809672-Managing-multiple-sites#h_05c88e35-1593-491f-b1a8-b7139a75dc15) and would like to filter the response of this API call by a specific phone [site](https://support.zoom.us/hc/en-us/articles/360020809672-Managing-multiple-sites).

try {
    $result = $apiInstance->listAccountPhoneNumbers($next_page_token, $type, $extension_type, $page_size, $number_type, $pending_numbers, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->listAccountPhoneNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **type** | **string**| Query response by number assignment. The value can be one of the following:&lt;br&gt; &#x60;assigned&#x60;: The number has been assigned to either a user, a call queue, an auto-receptionist or a common area phone in an account. &lt;br&gt;&#x60;unassigned&#x60;: The number is not assigned to anyone.&lt;br&gt;  &#x60;all&#x60;: Include both assigned and unassigned numbers in the response. | [optional]
 **extension_type** | **string**| The type of assignee to whom the number is assigned. The value can be one of the following:&lt;br&gt; &#x60;user&#x60;&lt;br&gt; &#x60;callQueue&#x60;&lt;br&gt; &#x60;autoReceptionist&#x60;&lt;br&gt; &#x60;commonAreaPhone&#x60; | [optional]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **number_type** | **string**| The type of phone number. The value can be either &#x60;toll&#x60; or &#x60;tollfree&#x60;. | [optional]
 **pending_numbers** | **bool**| Include or exclude pending numbers in the response. The value can be either &#x60;true&#x60; or &#x60;false&#x60;. | [optional]
 **site_id** | **string**| Unique identifier of the site. Use this query parameter if you have [enabled multiple sites](https://support.zoom.us/hc/en-us/articles/360020809672-Managing-multiple-sites#h_05c88e35-1593-491f-b1a8-b7139a75dc15) and would like to filter the response of this API call by a specific phone [site](https://support.zoom.us/hc/en-us/articles/360020809672-Managing-multiple-sites). | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCallingPlans

> \Zoom\Api\Model\InlineResponse20093 listCallingPlans()

List Calling Plans

List all Zoom Phone [calling plans](https://marketplace.zoom.us/docs/api-reference/other-references/plans#zoom-phone-calling-plans) that are enabled for a Zoom account.<br><br> **Prerequisites:**<br> * Pro or a higher account with Zoom phone license. <br> **Scope:** `phone:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCallingPlans();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->listCallingPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zoom\Api\Model\InlineResponse20093**](../Model/InlineResponse20093.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPhoneUsers

> \Zoom\Api\Model\InlineResponse20094 listPhoneUsers($page_size, $next_page_token, $site_id)

List Phone Users

List all the users on an account who have been assigned Zoom Phone licenses.<br><br> **Prerequisites:**<br> * Pro or higher plan with Zoom phone license<br> **Scope:** `phone:read:admin`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 30; // int | The number of records returned from a single API call.
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$site_id = 'site_id_example'; // string | Unique Identifier of the site. This can be retrieved from List Phone Sites API.

try {
    $result = $apiInstance->listPhoneUsers($page_size, $next_page_token, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->listPhoneUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of records returned from a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **site_id** | **string**| Unique Identifier of the site. This can be retrieved from List Phone Sites API. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20094**](../Model/InlineResponse20094.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## phoneUser

> \Zoom\Api\Model\InlineResponse20061 phoneUser($user_id)

Get User's Profile

Retrieve a user's [zoom phone](https://support.zoom.us/hc/en-us/articles/360001297663-Quickstart-Guide-for-Zoom-Phone-Administrators) profile.  **Scopes:** `phone:read`, `phone:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`   **Prerequisites** : 1. Business or Enterprise account  2. A Zoom Phone license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.

try {
    $result = $apiInstance->phoneUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->phoneUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |

### Return type

[**\Zoom\Api\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## phoneUserCallLogs

> \Zoom\Api\Model\InlineResponse20063 phoneUserCallLogs($user_id, $from, $to, $page_size, $type, $next_page_token)

Get User's Call Logs

Retrieve a [zoom phone](https://support.zoom.us/hc/en-us/articles/360001297663-Quickstart-Guide-for-Zoom-Phone-Administrators) user's call logs.  **Scopes:** `phone:read`, `phone:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisite:**  1. Business or Enterprise account 2. A Zoom Phone license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date in 'yyyy-mm-dd' format. The date range defined by the \"from\" and \"to\" parameters should only be one month as the report includes only one month worth of data at once.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date.
$page_size = 30; // int | The number of records returned within a single API call.
$type = 'type_example'; // string | 
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->phoneUserCallLogs($user_id, $from, $to, $page_size, $type, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->phoneUserCallLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **from** | **\DateTime**| Start date in &#39;yyyy-mm-dd&#39; format. The date range defined by the \&quot;from\&quot; and \&quot;to\&quot; parameters should only be one month as the report includes only one month worth of data at once. |
 **to** | **\DateTime**| End date. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **type** | **string**|  | [optional]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## phoneUserRecordings

> \Zoom\Api\Model\InlineResponse20064 phoneUserRecordings($user_id, $page_size, $next_page_token)

Get User's Recordings

Retrieve a user's zoom [phone recordings](https://support.zoom.us/hc/en-us/articles/360021336671-Viewing-Call-History-and-Recordings). **Scopes:** `phone:read`, `phone:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br> **Prerequisite:** 1. Business or Enterprise account 2. A Zoom Phone license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->phoneUserRecordings($user_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->phoneUserRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## phoneUserSettings

> \Zoom\Api\Model\InlineResponse20062 phoneUserSettings($user_id)

Get User's Settings

Retrieve a user's zoom phone profile [settings](https://support.zoom.us/hc/en-us/articles/360021325712-Configuring-Settings).  **Scopes:** `phone:read`, `phone:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisite:** 1. Business or Enterprise account 2. A Zoom Phone license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.

try {
    $result = $apiInstance->phoneUserSettings($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->phoneUserSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |

### Return type

[**\Zoom\Api\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## phoneUserVoiceMails

> \Zoom\Api\Model\InlineResponse20065 phoneUserVoiceMails($user_id, $page_size, $status, $next_page_token)

Get User's Voicemails

Retrieve a user's Zoom Phone voicemails.   **Scopes:** `phone:read`, `phone:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br> **Prerequisite:** 1. Business or Enterprise account 2. A Zoom Phone license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user ID or email address of the user. For user-level apps, pass `me` as the value for userId.
$page_size = 30; // int | The number of records returned within a single API call.
$status = 'all'; // string | Status of the voice mail
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->phoneUserVoiceMails($user_id, $page_size, $status, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->phoneUserVoiceMails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID or email address of the user. For user-level apps, pass &#x60;me&#x60; as the value for userId. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **status** | **string**| Status of the voice mail | [optional] [default to &#39;all&#39;]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20065**](../Model/InlineResponse20065.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## unassignCallingPlan

> object unassignCallingPlan($user_id, $type)

Unassign User's Calling Plan

Unassign a [calling plan](https://marketplace.zoom.us/docs/api-reference/other-references/plans#zoom-phone-calling-plans) that was previously assigned to a [Zoom Phone](https://support.zoom.us/hc/en-us/categories/360001370051) user.  **Scopes**: `phone:write` `phone:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisite:**  1. Business or Enterprise account 2. A Zoom Phone license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | 
$type = 'type_example'; // string | The [type](https://marketplace.zoom.us/docs/api-reference/other-references/plans#zoom-phone-calling-plans) of the calling plan that was assigned to user. (e.g: The value of type would be \"200\" for Unlimited US/Canada calling plan.)

try {
    $result = $apiInstance->unassignCallingPlan($user_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->unassignCallingPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **type** | **string**| The [type](https://marketplace.zoom.us/docs/api-reference/other-references/plans#zoom-phone-calling-plans) of the calling plan that was assigned to user. (e.g: The value of type would be \&quot;200\&quot; for Unlimited US/Canada calling plan.) |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## unassignPhoneNumber

> object unassignPhoneNumber($user_id, $phone_number_id)

Unassign User's Phone Number

Unassign [phone number](https://support.zoom.us/hc/en-us/articles/360020808292-Managing-Phone-Numbers#h_38ba8b01-26e3-4b1b-a9b5-0717c00a7ca6) of a Zoom phone user. <br>  After assigning a phone number, you can remove it if you don't want it to be assigned to anyone.  **Scopes**: `phone:write` `phone:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisite:**  1. Business or Enterprise account 2. A Zoom Phone license 3. User must have been previously assigned a Zoom Phone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Provide either userId or email address of the user.
$phone_number_id = 'phone_number_id_example'; // string | Provide either phone number or phoneNumberId of the user.

try {
    $result = $apiInstance->unassignPhoneNumber($user_id, $phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->unassignPhoneNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Provide either userId or email address of the user. |
 **phone_number_id** | **string**| Provide either phone number or phoneNumberId of the user. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateUserProfile

> object updateUserProfile($user_id, $body)

Update User's Profile

Update a [Zoom Phone](https://support.zoom.us/hc/en-us/categories/360001370051-Zoom-Phone) user's profile.  **Scopes:** `phone:write` `phone:write:admin`  <br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisite:**  1. Business or Enterprise account 2. A Zoom Phone license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | 
$body = new \Zoom\Api\Model\InlineObject46(); // \Zoom\Api\Model\InlineObject46 | 

try {
    $result = $apiInstance->updateUserProfile($user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneApi->updateUserProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **body** | [**\Zoom\Api\Model\InlineObject46**](../Model/InlineObject46.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

