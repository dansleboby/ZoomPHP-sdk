# Zoom\Api\PhoneCallQueuesApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMembersToCallQueue**](PhoneCallQueuesApi.md#addMembersToCallQueue) | **POST** /phone/call_queues/{callQueueId}/members | Add Members to a Call Queue
[**assignPhoneToCallQueue**](PhoneCallQueuesApi.md#assignPhoneToCallQueue) | **POST** /phone/call_queues/{callQueueId}/phone_numbers | Assign Numbers to a Call Queue
[**changeCallQueueManager**](PhoneCallQueuesApi.md#changeCallQueueManager) | **PUT** /phone/call_queues/{callQueueId}/manager | Change Call Queue Manager
[**createCallQueue**](PhoneCallQueuesApi.md#createCallQueue) | **POST** /phone/call_queues | Create a Call Queue
[**deleteACallQueue**](PhoneCallQueuesApi.md#deleteACallQueue) | **DELETE** /phone/call_queues/{callQueueId} | Delete a Call Queue
[**getACallQueue**](PhoneCallQueuesApi.md#getACallQueue) | **GET** /phone/call_queues/{callQueueId} | Get Call Queue Details
[**getCallQueueRecordings**](PhoneCallQueuesApi.md#getCallQueueRecordings) | **GET** /phone/call_queues/{callQueueId}/recordings | Get Call Queue Recordings
[**listCallQueues**](PhoneCallQueuesApi.md#listCallQueues) | **GET** /phone/call_queues | List Call Queues
[**unAssignPhoneNumCallQueue**](PhoneCallQueuesApi.md#unAssignPhoneNumCallQueue) | **DELETE** /phone/call_queues/{callQueueId}/phone_numbers/{phoneNumberId} | Unassign a Phone Number
[**unassignAPhoneNumCallQueue**](PhoneCallQueuesApi.md#unassignAPhoneNumCallQueue) | **DELETE** /phone/call_queues/{callQueueId}/phone_numbers | Unassign all Phone Numbers
[**unassignAllMembers**](PhoneCallQueuesApi.md#unassignAllMembers) | **DELETE** /phone/call_queues/{callQueueId}/members | Unassign all Members
[**unassignMemberFromCallQueue**](PhoneCallQueuesApi.md#unassignMemberFromCallQueue) | **DELETE** /phone/call_queues/{callQueueId}/members/{memberId} | Unassign a Member
[**updateCallQueue**](PhoneCallQueuesApi.md#updateCallQueue) | **PATCH** /phone/call_queues/{callQueueId} | Update Call Queue Details



## addMembersToCallQueue

> object addMembersToCallQueue($call_queue_id, $body)

Add Members to a Call Queue

Add phone users and/or [common area phones](https://support.zoom.us/hc/en-us/articles/360028516231-Managing-Common-Area-Phones) as members to a specific Call Queue.<br><br> **Prerequisites:**<br> * Pro or higher account plan. * Zoom Phone license<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_queue_id = 'call_queue_id_example'; // string | Unique Identifier of the Call Queue.
$body = new \Zoom\Api\Model\InlineObject70(); // \Zoom\Api\Model\InlineObject70 | 

try {
    $result = $apiInstance->addMembersToCallQueue($call_queue_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->addMembersToCallQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_queue_id** | **string**| Unique Identifier of the Call Queue. |
 **body** | [**\Zoom\Api\Model\InlineObject70**](../Model/InlineObject70.md)|  | [optional]

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


## assignPhoneToCallQueue

> object assignPhoneToCallQueue($call_queue_id, $body)

Assign Numbers to a Call Queue

After [buying phone number(s)](https://support.zoom.us/hc/en-us/articles/360020808292#h_007ec8c2-0914-4265-8351-96ab23efa3ad), you can assign it, allowing callers to directly dial a number to reach a [call queue](https://support.zoom.us/hc/en-us/articles/360021524831-Managing-Call-Queues).<br><br> **Prerequisites:**<br> * Pro or higher account plan. * Account owner or admin permissions * Zoom Phone license<br> **Scopes:** `phone:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_queue_id = 'call_queue_id_example'; // string | Unique Identifier of the Call Queue.
$body = new \Zoom\Api\Model\InlineObject69(); // \Zoom\Api\Model\InlineObject69 | 

try {
    $result = $apiInstance->assignPhoneToCallQueue($call_queue_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->assignPhoneToCallQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_queue_id** | **string**| Unique Identifier of the Call Queue. |
 **body** | [**\Zoom\Api\Model\InlineObject69**](../Model/InlineObject69.md)|  | [optional]

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


## changeCallQueueManager

> object changeCallQueueManager($call_queue_id, $body)

Change Call Queue Manager

A call queue manager has the privileges to maanage the call queue's voicemail inbox and recordings, change all call queue settings and call queue policy settings.<br><br> Use this API to to set another phone user as the [call queue manager](https://support.zoom.us/hc/en-us/articles/360021524831-Managing-Call-Queues#h_db06854b-e6a3-4afe-ba15-baf58f31f90c). **Prerequisites:**<br> * Pro or higher account plan. * Account owner or admin permissions * Zoom Phone license<br> **Scopes:** `phone:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_queue_id = 'call_queue_id_example'; // string | Unique Identifier of the Call Queue.
$body = new \Zoom\Api\Model\InlineObject71(); // \Zoom\Api\Model\InlineObject71 | 

try {
    $result = $apiInstance->changeCallQueueManager($call_queue_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->changeCallQueueManager: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_queue_id** | **string**| Unique Identifier of the Call Queue. |
 **body** | [**\Zoom\Api\Model\InlineObject71**](../Model/InlineObject71.md)|  | [optional]

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


## createCallQueue

> \Zoom\Api\Model\InlineResponse20124 createCallQueue($body)

Create a Call Queue

Call queues allow you to route incoming calls to a group of users. For instance, you can use call queues to route calls to various departments in your organization such as sales, engineering, billing, customer service etc.<br> Use this API to [create a call queue](https://support.zoom.us/hc/en-us/articles/360021524831-Managing-Call-Queues#h_e81faeeb-9184-429a-aaea-df49ff5ff413).<br> You can add phone users or common area phones to call queues.  **Prerequisites:**<br> * Pro, Business, or Education account * Account owner or admin permissions * Zoom Phone license<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Zoom\Api\Model\InlineObject67(); // \Zoom\Api\Model\InlineObject67 | 

try {
    $result = $apiInstance->createCallQueue($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->createCallQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Zoom\Api\Model\InlineObject67**](../Model/InlineObject67.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20124**](../Model/InlineResponse20124.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteACallQueue

> object deleteACallQueue($call_queue_id)

Delete a Call Queue

Call queues allow you to route incoming calls to a group of users. For instance, you can use call queues to route calls to various departments in your organization such as sales, engineering, billing, customer service etc.<br> Use this API to delete a Call Queue.<br>  **Prerequisites:**<br> * Pro, Business, or Education account * Account owner or admin permissions * Zoom Phone license<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_queue_id = 'call_queue_id_example'; // string | Unique Identifier of the call queue.

try {
    $result = $apiInstance->deleteACallQueue($call_queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->deleteACallQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_queue_id** | **string**| Unique Identifier of the call queue. |

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


## getACallQueue

> \Zoom\Api\Model\InlineResponse20091 getACallQueue($call_queue_id)

Get Call Queue Details

Call queues allow you to route incoming calls to a group of users. For instance, you can use call queues to route calls to various departments in your organization such as sales, engineering, billing, customer service etc.<br> Use this API to get information on a specific Call Queue.<br><br>  **Prerequisites:**<br> * Pro, Business, or Education account * Account owner or admin permissions * Zoom Phone license<br> **Scopes:** `phone:read:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_queue_id = 'call_queue_id_example'; // string | Unique Identifier of the Call Queue. This can be retrieved from [List Call Queues API](https://marketplace.zoom.us/docs/api-reference/zoom-api/phone-call-queues/listcallqueues).

try {
    $result = $apiInstance->getACallQueue($call_queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->getACallQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_queue_id** | **string**| Unique Identifier of the Call Queue. This can be retrieved from [List Call Queues API](https://marketplace.zoom.us/docs/api-reference/zoom-api/phone-call-queues/listcallqueues). |

### Return type

[**\Zoom\Api\Model\InlineResponse20091**](../Model/InlineResponse20091.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCallQueueRecordings

> \Zoom\Api\Model\InlineResponse200100 getCallQueueRecordings($call_queue_id, $page_size, $next_page_token)

Get Call Queue Recordings

Use this API to view [call recordings](https://support.zoom.us/hc/en-us/articles/360038521091#h_cbc9f2a3-e06c-4daa-83d4-ddbceef9c77b) from the call queue.<br><br> **Prerequisites:**<br> * Pro or higher account with Zoom Phone license. * [Automatic call recordings](https://support.zoom.us/hc/en-us/articles/360033511872#h_fcb297bb-14e8-4094-91ca-dc61e1a18734) must be enabled in the Policy Settings for call queues. <br> **Scope:** `phone:read:admin`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_queue_id = 'call_queue_id_example'; // string | Unique Identifier of the Call Queue.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->getCallQueueRecordings($call_queue_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->getCallQueueRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_queue_id** | **string**| Unique Identifier of the Call Queue. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse200100**](../Model/InlineResponse200100.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCallQueues

> \Zoom\Api\Model\InlineResponse20090 listCallQueues($next_page_token, $page_size)

List Call Queues

Call queues allow you to route incoming calls to a group of users. For instance, you can use call queues to route calls to various departments in your organization such as sales, engineering, billing, customer service etc.<br> Use this API to list Call queues.<br><br> **Prerequisites:**<br> * Pro, Business, or Education account * Account owner or admin permissions * Zoom Phone license<br> **Scopes:** `phone:read:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$page_size = 30; // int | The number of records returned from a single API call.

try {
    $result = $apiInstance->listCallQueues($next_page_token, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->listCallQueues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **page_size** | **int**| The number of records returned from a single API call. | [optional] [default to 30]

### Return type

[**\Zoom\Api\Model\InlineResponse20090**](../Model/InlineResponse20090.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## unAssignPhoneNumCallQueue

> object unAssignPhoneNumCallQueue($call_queue_id, $phone_number_id)

Unassign a Phone Number

After assigning a phone number, you can unbind it if you don't want it to be assigned to a [Call Queue](https://support.zoom.us/hc/en-us/articles/360021524831-Managing-Call-Queues). Use this API to unbind a phone number from a Call Queue. After successful unbinding, the number will appear in the [Unassigned tab](https://zoom.us/signin#/numbers/unassigned).<br><br> **Prerequisites:** * Pro or higher account palan * Account owner or admin permissions * Zoom Phone license <br> **Scopes:** `phone:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_queue_id = 'call_queue_id_example'; // string | Unique Identifier of the Call Queue. This can be retrieved from the List Call Queues API.
$phone_number_id = 'phone_number_id_example'; // string | Unique Identifier of the Phone Number.

try {
    $result = $apiInstance->unAssignPhoneNumCallQueue($call_queue_id, $phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->unAssignPhoneNumCallQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_queue_id** | **string**| Unique Identifier of the Call Queue. This can be retrieved from the List Call Queues API. |
 **phone_number_id** | **string**| Unique Identifier of the Phone Number. |

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


## unassignAPhoneNumCallQueue

> object unassignAPhoneNumCallQueue($call_queue_id)

Unassign all Phone Numbers

Use this API to unbind all phone numbers that are assigned to a [Call Queue](https://support.zoom.us/hc/en-us/articles/360021524831-Managing-Call-Queues) After successful unbinding, the numbers will appear in the [Unassigned tab](https://zoom.us/signin#/numbers/unassigned).<br> If you only need to unassign a specific phone number, use the Unassign a Phone Number API instead. <br> **Prerequisites:** * Pro or higher account palan * Account owner or admin permissions * Zoom Phone license <br> **Scopes:** `phone:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_queue_id = 'call_queue_id_example'; // string | Unique Identifier of the Call Queue. This can be retrieved from List Call Queues API.

try {
    $result = $apiInstance->unassignAPhoneNumCallQueue($call_queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->unassignAPhoneNumCallQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_queue_id** | **string**| Unique Identifier of the Call Queue. This can be retrieved from List Call Queues API. |

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


## unassignAllMembers

> object unassignAllMembers($call_queue_id)

Unassign all Members

Use this API to remove all members from a Call Queue who were previously assigned to that Call Queue. The members could be phone users or [common area phones](https://support.zoom.us/hc/en-us/articles/360028516231-Managing-Common-Area-Phones). **Prerequisites:**<br> * Pro or higher account plan. * Zoom Phone license<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_queue_id = 'call_queue_id_example'; // string | 

try {
    $result = $apiInstance->unassignAllMembers($call_queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->unassignAllMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_queue_id** | **string**|  |

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


## unassignMemberFromCallQueue

> object unassignMemberFromCallQueue($call_queue_id, $member_id)

Unassign a Member

Use this API to remove a member from a Call Queue who was previously added to that Call Queue. The member could be a phone user or a [common area phone](https://support.zoom.us/hc/en-us/articles/360028516231-Managing-Common-Area-Phones). A member who is a Call Queue Manager cannot be unassigned from the Call Queue using this API.  **Prerequisites:**<br> * Pro or higher account plan. * Zoom Phone license<br> **Scopes:** `phone:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_queue_id = 'call_queue_id_example'; // string | Unique Identifier of the Call Queue from which the member needs to be unassigned.
$member_id = 'member_id_example'; // string | Unique Identifier of the member who needs to be unassigned.

try {
    $result = $apiInstance->unassignMemberFromCallQueue($call_queue_id, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->unassignMemberFromCallQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_queue_id** | **string**| Unique Identifier of the Call Queue from which the member needs to be unassigned. |
 **member_id** | **string**| Unique Identifier of the member who needs to be unassigned. |

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


## updateCallQueue

> object updateCallQueue($call_queue_id, $body)

Update Call Queue Details

Call queues allow you to route incoming calls to a group of users. For instance, you can use call queues to route calls to various departments in your organization such as sales, engineering, billing, customer service etc.<br> Use this API to update information of a specific Call Queue.<br>  **Prerequisites:**<br> * Pro, Business, or Education account * Account owner or admin permissions * Zoom Phone license<br> **Scopes:** `phone:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneCallQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$call_queue_id = 'call_queue_id_example'; // string | Unique Identifier of the Call Queue.
$body = new \Zoom\Api\Model\InlineObject68(); // \Zoom\Api\Model\InlineObject68 | 

try {
    $result = $apiInstance->updateCallQueue($call_queue_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneCallQueuesApi->updateCallQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **call_queue_id** | **string**| Unique Identifier of the Call Queue. |
 **body** | [**\Zoom\Api\Model\InlineObject68**](../Model/InlineObject68.md)|  | [optional]

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

