# Zoom\Api\SIPPhoneApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSIPPhone()**](SIPPhoneApi.md#createSIPPhone) | **POST** /sip_phones | Enable SIP phone
[**deleteSIPPhone()**](SIPPhoneApi.md#deleteSIPPhone) | **DELETE** /sip_phones/{phoneId} | Delete SIP phone
[**listSipPhones()**](SIPPhoneApi.md#listSipPhones) | **GET** /sip_phones | List SIP phones
[**updateSIPPhone()**](SIPPhoneApi.md#updateSIPPhone) | **PATCH** /sip_phones/{phoneId} | Update SIP phone


## `createSIPPhone()`

```php
createSIPPhone($create_sip_phone_request)
```

Enable SIP phone

Zoom's Phone System Integration (PSI), also referred as SIP phones, enables an organization to leverage the Zoom client to complete a softphone registration to supported premise based PBX system. End users will have the ability to have softphone functionality within a single client while maintaining a comparable interface to Zoom Phone. Use this API to enable a user to use SIP phone.<br><br> **Prerequisites**: * Currently only supported on Cisco and Avaya PBX systems.  * The account owner or account admin must first enable SIP Phone Integration by contacting the [Sales](https://zoom.us/contactsales) team.<br> **Scope:** `sip_phone:write:admin` <br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPPhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_sip_phone_request = new \Zoom\Api\Model\CreateSIPPhoneRequest(); // \Zoom\Api\Model\CreateSIPPhoneRequest

try {
    $apiInstance->createSIPPhone($create_sip_phone_request);
} catch (Exception $e) {
    echo 'Exception when calling SIPPhoneApi->createSIPPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_sip_phone_request** | [**\Zoom\Api\Model\CreateSIPPhoneRequest**](../Model/CreateSIPPhoneRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSIPPhone()`

```php
deleteSIPPhone($phone_id)
```

Delete SIP phone

Use this API to delete a Zoom account's SIP phone.    **Scopes:** `sip_phone:write:admin` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`   **Prerequisites**:  * Currently only supported on Cisco and Avaya PBX systems.  * The user must enable **SIP Phone Integration** by contacting the [Zoom Sales](https://zoom.us/contactsales) team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPPhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_id = 123456; // string | Unique Identifier of the SIP Phone. It can be retrieved from the List SIP Phones API.

try {
    $apiInstance->deleteSIPPhone($phone_id);
} catch (Exception $e) {
    echo 'Exception when calling SIPPhoneApi->deleteSIPPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_id** | **string**| Unique Identifier of the SIP Phone. It can be retrieved from the List SIP Phones API. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSipPhones()`

```php
listSipPhones($page_number, $search_key, $page_size, $next_page_token): \Zoom\Api\Model\ListSipPhones200Response
```

List SIP phones

Zoom's Phone System Integration (PSI), also referred as SIP phones, enables an organization to leverage the Zoom client to complete a softphone registration to supported premise based PBX system. End users will have the ability to have softphone functionality within a single client while maintaining a comparable interface to Zoom Phone. Use this API to list SIP phones on an account.<br><br> **Prerequisites**: * Currently only supported on Cisco and Avaya PBX systems.  * User must enable SIP Phone Integration by contacting the [Sales](https://zoom.us/contactsales) team.<br> **Scope:** `sip_phone:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPPhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_number = 1; // int | **Deprecated.** We will no longer support this field in a future release. Instead, use the `next_page_token` for pagination.
$search_key = jchill@example.com; // string | User name or email address of a user. If this parameter is provided, only the SIP phone system integration enabled for that specific user will be returned. Otherwise, all SIP phones on an account will be returned.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = Tva2CuIdTgsv8wAnhyAdU3m06Y2HuLQtlh3; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->listSipPhones($page_number, $search_key, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPPhoneApi->listSipPhones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**| **Deprecated.** We will no longer support this field in a future release. Instead, use the &#x60;next_page_token&#x60; for pagination. | [optional] [default to 1]
 **search_key** | **string**| User name or email address of a user. If this parameter is provided, only the SIP phone system integration enabled for that specific user will be returned. Otherwise, all SIP phones on an account will be returned. | [optional]
 **page_size** | **int**| The number of records returned within a single API call. | [optional]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\ListSipPhones200Response**](../Model/ListSipPhones200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSIPPhone()`

```php
updateSIPPhone($phone_id, $update_sip_phone_request)
```

Update SIP phone

Zoom's Phone System Integration (PSI), also referred as SIP phones, enables an organization to leverage the Zoom client to complete a softphone registration to supported premise based PBX system. End users will have the ability to have softphone functionality within a single client while maintaining a comparable interface to Zoom Phone. Use this API to update information of a specific SIP Phone on a Zoom account.<br><br> **Prerequisites**: * Currently only supported on Cisco and Avaya PBX systems.  * The account owner or account admin must first enable SIP Phone Integration by contacting the [Sales](https://zoom.us/contactsales) team.<br> **Scope:** `sip_phone:write:admin` <br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPPhoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone_id = 123456; // string | Unique Identifier of the SIP Phone. This can be retrieved from the List SIP Phones API.
$update_sip_phone_request = new \Zoom\Api\Model\UpdateSIPPhoneRequest(); // \Zoom\Api\Model\UpdateSIPPhoneRequest

try {
    $apiInstance->updateSIPPhone($phone_id, $update_sip_phone_request);
} catch (Exception $e) {
    echo 'Exception when calling SIPPhoneApi->updateSIPPhone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_id** | **string**| Unique Identifier of the SIP Phone. This can be retrieved from the List SIP Phones API. |
 **update_sip_phone_request** | [**\Zoom\Api\Model\UpdateSIPPhoneRequest**](../Model/UpdateSIPPhoneRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
