# Swagger\Client\CommonAreaPhonesApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCommonAreaPhone**](CommonAreaPhonesApi.md#addCommonAreaPhone) | **POST** /phone/common_area_phones | Add a Common Area Phone
[**deleteCommonAreaPhone**](CommonAreaPhonesApi.md#deleteCommonAreaPhone) | **DELETE** /phone/common_area_phones/{commonAreaPhoneId} | Delete a Common Area Phone
[**getACommonAreaPhone**](CommonAreaPhonesApi.md#getACommonAreaPhone) | **GET** /phone/common_area_phones/{commonAreaPhoneId} | Get Common Area Phone Details
[**listCommonAreaPhones**](CommonAreaPhonesApi.md#listCommonAreaPhones) | **GET** /phone/common_area_phones | List Common Area Phones
[**updateCommonAreaPhone**](CommonAreaPhonesApi.md#updateCommonAreaPhone) | **PATCH** /phone/common_area_phones/{commonAreaPhoneId} | Update Common Area Phone


# **addCommonAreaPhone**
> \Swagger\Client\Model\InlineResponse20125 addCommonAreaPhone($body)

Add a Common Area Phone

A common area phone can be provisioned by a Zoom account owner or a Zoom admin so that anyone in an organization can use it. For example, if your office has shared desks that don't belong to a specific employees, you could add a common area phone so that any person can use it.<br> Use this API to [add a common area phone](https://support.zoom.us/hc/en-us/articles/360028516231-Managing-Common-Area-Phones#h_2d0da347-c35a-4993-9771-e21aaa568deb).<br><br> **Prerequisites:**<br> * Pro or a higher account with Zoom Phone license. * Account owner or admin permissions. * [Supported device](https://support.zoom.us/hc/en-us/articles/360001299063-Zoom-Voice-Supported-Devices)<br> **Scope:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommonAreaPhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body75(); // \Swagger\Client\Model\Body75 | 

try {
    $result = $apiInstance->addCommonAreaPhone($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonAreaPhonesApi->addCommonAreaPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body75**](../Model/Body75.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20125**](../Model/InlineResponse20125.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCommonAreaPhone**
> object deleteCommonAreaPhone($common_area_phone_id)

Delete a Common Area Phone

A common area phone can be provisioned by a Zoom account owner or a Zoom admin so that anyone in an organization can use it. For example, if your office has shared desks that don't belong to a specific employees, you could add a common area phone so that any person can use it.<br> Use this API to remove the [common area phone](https://support.zoom.us/hc/en-us/articles/360028516231-Managing-Common-Area-Phones) from Zoom Phone System in an account.<br><br>**Prerequisites:**<br> * Pro or a higher account with Zoom Phone license. * Account owner or admin permissions. * [Supported device](https://support.zoom.us/hc/en-us/articles/360001299063-Zoom-Voice-Supported-Devices)<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommonAreaPhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$common_area_phone_id = "common_area_phone_id_example"; // string | Unique Identifier of the common area phone.

try {
    $result = $apiInstance->deleteCommonAreaPhone($common_area_phone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonAreaPhonesApi->deleteCommonAreaPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **common_area_phone_id** | **string**| Unique Identifier of the common area phone. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getACommonAreaPhone**
> \Swagger\Client\Model\InlineResponse20096 getACommonAreaPhone($common_area_phone_id)

Get Common Area Phone Details

A common area phone can be provisioned by a Zoom account owner or a Zoom admin so that anyone in an organization can use it. For example, if your office has shared desks that don't belong to a specific employees, you could add a common area phone so that any person can use it.<br> Use this API to get details on a specific [common area phone](https://support.zoom.us/hc/en-us/articles/360028516231-Managing-Common-Area-Phones) in an account.<br><br>**Prerequisites:**<br> * Pro or a higher account with Zoom Phone license. * Account owner or admin permissions. * [Supported device](https://support.zoom.us/hc/en-us/articles/360001299063-Zoom-Voice-Supported-Devices)<br> **Scopes:** `phone:read:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommonAreaPhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$common_area_phone_id = "common_area_phone_id_example"; // string | Unique Identifier of the Common Area Phone. This can be retrieved from List Common Area Phones API.

try {
    $result = $apiInstance->getACommonAreaPhone($common_area_phone_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonAreaPhonesApi->getACommonAreaPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **common_area_phone_id** | **string**| Unique Identifier of the Common Area Phone. This can be retrieved from List Common Area Phones API. |

### Return type

[**\Swagger\Client\Model\InlineResponse20096**](../Model/InlineResponse20096.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCommonAreaPhones**
> \Swagger\Client\Model\InlineResponse20095 listCommonAreaPhones($page_size, $next_page_token)

List Common Area Phones

A common area phone can be provisioned by a Zoom account owner or a Zoom admin so that anyone in an organization can use it. For example, if your office has shared desks that don't belong to a specific employees, you could add a common area phone so that any person can use it.<br> Use this API to [list all common area phone](https://support.zoom.us/hc/en-us/articles/360028516231-Managing-Common-Area-Phones) in an account.<br><br>**Prerequisites:**<br> * Pro or a higher account with Zoom Phone license. * Account owner or admin permissions. * [Supported device](https://support.zoom.us/hc/en-us/articles/360001299063-Zoom-Voice-Supported-Devices)<br><br> **Scope:** `phone:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommonAreaPhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 30; // int | The total number of records returned from a single API call.
$next_page_token = "next_page_token_example"; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->listCommonAreaPhones($page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonAreaPhonesApi->listCommonAreaPhones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The total number of records returned from a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20095**](../Model/InlineResponse20095.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCommonAreaPhone**
> object updateCommonAreaPhone($common_area_phone_id, $body)

Update Common Area Phone

A common area phone can be provisioned by a Zoom account owner or a Zoom admin so that anyone in an organization can use it. For example, if your office has shared desks that don't belong to a specific employees, you could add a common area phone so that any person can use it.<br> Use this API to update details on a specific [common area phone](https://support.zoom.us/hc/en-us/articles/360028516231-Managing-Common-Area-Phones) in an account.<br><br>**Prerequisites:**<br> * Pro or a higher account with Zoom Phone license. * Account owner or admin permissions. * [Supported device](https://support.zoom.us/hc/en-us/articles/360001299063-Zoom-Voice-Supported-Devices)<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CommonAreaPhonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$common_area_phone_id = "common_area_phone_id_example"; // string | 
$body = new \Swagger\Client\Model\Body76(); // \Swagger\Client\Model\Body76 | 

try {
    $result = $apiInstance->updateCommonAreaPhone($common_area_phone_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonAreaPhonesApi->updateCommonAreaPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **common_area_phone_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body76**](../Model/Body76.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

