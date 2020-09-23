# Zoom\Api\SIPConnectedAudioApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCalloutCountries**](SIPConnectedAudioApi.md#addCalloutCountries) | **POST** /accounts/{accountId}/sip_trunk/callout_countries | Add Internal Call-out Countries
[**addInternalNumbers**](SIPConnectedAudioApi.md#addInternalNumbers) | **POST** /accounts/{accountId}/sip_trunk/internal_numbers | Add Internal Numbers
[**assignSIPConfig**](SIPConnectedAudioApi.md#assignSIPConfig) | **PATCH** /accounts/{accountId}/sip_trunk/settings | Assign SIP Trunk Configuration
[**assignSIPTrunks**](SIPConnectedAudioApi.md#assignSIPTrunks) | **POST** /accounts/{accountId}/sip_trunk/trunks | Assign SIP Trunks
[**assignSipTrunkNumbers**](SIPConnectedAudioApi.md#assignSipTrunkNumbers) | **POST** /accounts/{accountId}/sip_trunk/numbers | Assign Numbers
[**deleteAllSipNumbers**](SIPConnectedAudioApi.md#deleteAllSipNumbers) | **DELETE** /accounts/{accountId}/sip_trunk/numbers | Delete All Numbers
[**deleteInternalCallOutCountry**](SIPConnectedAudioApi.md#deleteInternalCallOutCountry) | **DELETE** /accounts/{accountId}/sip_trunk/callout_countries/{countryId} | Delete Internal Call-out Country
[**deleteInternalNumber**](SIPConnectedAudioApi.md#deleteInternalNumber) | **DELETE** /accounts/{accountId}/sip_trunk/internal_numbers/{numberId} | Delete an Internal Number
[**deleteSIPTrunk**](SIPConnectedAudioApi.md#deleteSIPTrunk) | **DELETE** /accounts/{accountId}/sip_trunk/trunks/{trunkId} | Delete a SIP Trunk
[**listInternalCalloutCountries**](SIPConnectedAudioApi.md#listInternalCalloutCountries) | **GET** /accounts/{accountId}/sip_trunk/callout_countries | List Internal Call-out Countries
[**listInternalNumbers**](SIPConnectedAudioApi.md#listInternalNumbers) | **GET** /accounts/{accountId}/sip_trunk/internal_numbers | List Internal Numbers
[**listSIPTrunks**](SIPConnectedAudioApi.md#listSIPTrunks) | **GET** /accounts/{accountId}/sip_trunk/trunks | List SIP Trunks
[**listSipTrunkNumbers**](SIPConnectedAudioApi.md#listSipTrunkNumbers) | **GET** /sip_trunk/numbers | List SIP Trunk Numbers



## addCalloutCountries

> \Zoom\Api\Model\InlineResponse20129 addCalloutCountries($account_id, $body)

Add Internal Call-out Countries

Specify the list of [call-out](https://support.zoom.us/hc/en-us/articles/200942859-How-To-Use-Telephone-Call-Out-) countries for a Master Account or a Sub Account. To add Call-out enabled countries to a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To add Call-out enabled countries to a Master Account, provide `me` as the value of the `accountId` path parameter. <br><b>Prerequisites:</b><br> * The account making this API request must be a Master Account with [API Partner Plan](https://zoom.us/plan/api) and SIP Connected Audio Plan.<br><br> **Scope:** `sip_trunk:master`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier of the account. To add Call-out enabled countries to a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To add Call-out enabled countries to a Master Account, provide `me` as the value of the `accountId` path parameter.
$body = new \Zoom\Api\Model\InlineObject86(); // \Zoom\Api\Model\InlineObject86 | 

try {
    $result = $apiInstance->addCalloutCountries($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->addCalloutCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique identifier of the account. To add Call-out enabled countries to a Sub Account, provide the account ID of the Sub Account in the &#x60;accountId&#x60; path parameter. To add Call-out enabled countries to a Master Account, provide &#x60;me&#x60; as the value of the &#x60;accountId&#x60; path parameter. |
 **body** | [**\Zoom\Api\Model\InlineObject86**](../Model/InlineObject86.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20129**](../Model/InlineResponse20129.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## addInternalNumbers

> \Zoom\Api\Model\InlineResponse20130 addInternalNumbers($account_id, $body)

Add Internal Numbers

This API allows a Master Account with SIP Connected Audio plan to assign internal phone numbers (i.e., numbers that are not provided by Zoom but are owned by the organization consuming the API) to a Master Account or a Sub Account.<br><br>To add internal numbers to a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To add internal numbers to a Master Account, provide `me` as the value of the `accountId` path parameter. <br><b>Prerequisites:</b><br> * The account making this API request must be a Master Account with [API Partner Plan](https://zoom.us/plan/api) and SIP Connected Audio Plan.<br><br> **Scope:** `sip_trunk:master`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier of the account.<br>To add internal numbers to a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To add internal numbers to a Master Account, provide `me` as the value of the `accountId` path parameter.
$body = new \Zoom\Api\Model\InlineObject87(); // \Zoom\Api\Model\InlineObject87 | 

try {
    $result = $apiInstance->addInternalNumbers($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->addInternalNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique identifier of the account.&lt;br&gt;To add internal numbers to a Sub Account, provide the account ID of the Sub Account in the &#x60;accountId&#x60; path parameter. To add internal numbers to a Master Account, provide &#x60;me&#x60; as the value of the &#x60;accountId&#x60; path parameter. |
 **body** | [**\Zoom\Api\Model\InlineObject87**](../Model/InlineObject87.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20130**](../Model/InlineResponse20130.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## assignSIPConfig

> object assignSIPConfig($account_id, $body)

Assign SIP Trunk Configuration

With SIP-connected audio, Zoom establishes a SIP trunk (a network connection specifically designed to make and deliver phone calls) over a direct and private connection between the customer’s network and the Zoom cloud. Meeting participants that dial into a meeting or have the meeting call them, and are On-Net from the perspective of the customers' IP telephony network, will be connected over this trunk rather than over the PSTN. <br><br> Using this API, a Master Account owner can copy the SIP Connected Audio configurations applied on the Master Account and enable those configurations on a Sub Account. The owner can also disable the configuration in the Sub Account where it was previously enabled.  **Prerequisites:**<br> * Pro or a higher account with SIP Connected Audio plan enabled. * Master Account Owner<br> **Scopes:** `sip_trunk:master`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | 
$body = new \Zoom\Api\Model\InlineObject61(); // \Zoom\Api\Model\InlineObject61 | 

try {
    $result = $apiInstance->assignSIPConfig($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->assignSIPConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **body** | [**\Zoom\Api\Model\InlineObject61**](../Model/InlineObject61.md)|  | [optional]

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


## assignSIPTrunks

> \Zoom\Api\Model\InlineResponse20128 assignSIPTrunks($account_id, $body)

Assign SIP Trunks

With SIP-connected audio, Zoom establishes a SIP trunk (a network connection specifically designed to make and deliver phone calls) over a direct and private connection between the customer’s network and the Zoom cloud. Meeting participants that dial into a meeting or have the meeting call them, and are On-Net from the perspective of the customers’ IP telephony network, will be connected over this trunk rather than over the PSTN.<br><br>Use this API to assign SIP trunk(s) that are available on a Master Account to a Sub Account. <br><b>Prerequisites:</b><br> * The account making this API request must be a Master Account with [API Partner Plan](https://zoom.us/plan/api) and SIP Connected Audio Plan.<br><br> **Scope:** `sip_trunk:master`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique Identifier of the Sub Account.
$body = new \Zoom\Api\Model\InlineObject85(); // \Zoom\Api\Model\InlineObject85 | 

try {
    $result = $apiInstance->assignSIPTrunks($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->assignSIPTrunks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique Identifier of the Sub Account. |
 **body** | [**\Zoom\Api\Model\InlineObject85**](../Model/InlineObject85.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20128**](../Model/InlineResponse20128.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## assignSipTrunkNumbers

> object assignSipTrunkNumbers($account_id, $body)

Assign Numbers

With SIP-connected audio, Zoom establishes a SIP trunk (a network connection specifically designed to make and deliver phone calls) over a direct and private connection between the customer’s network and the Zoom cloud. Meeting participants that dial into a meeting or have the meeting call them, and are On-Net from the perspective of the customers' IP telephony network, will be connected over this trunk rather than over the PSTN. <br><br>Use this API to assign internal numbers to a Sub Account.  **Prerequisites:**<br> * Pro or a higher account with SIP Connected Audio plan enabled. * The account must be a Master Account<br> **Scopes:** `sip_trunk:master`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique Identifier of the Sub Account.
$body = new \Zoom\Api\Model\InlineObject62(); // \Zoom\Api\Model\InlineObject62 | 

try {
    $result = $apiInstance->assignSipTrunkNumbers($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->assignSipTrunkNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique Identifier of the Sub Account. |
 **body** | [**\Zoom\Api\Model\InlineObject62**](../Model/InlineObject62.md)|  | [optional]

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


## deleteAllSipNumbers

> object deleteAllSipNumbers($account_id)

Delete All Numbers

With SIP-connected audio, Zoom establishes a SIP trunk (a network connection specifically designed to make and deliver phone calls) over a direct and private connection between the customer’s network and the Zoom cloud. Meeting participants that dial into a meeting or have the meeting call them, and are On-Net from the perspective of the customers' IP telephony network, will be connected over this trunk rather than over the PSTN. <br><br>Use this API to delete all internal numbers assigned to a Sub Account. **Prerequisites:**<br>  * Pro or a higher account with SIP Connected Audio plan enabled. * The account must be a Master Account<br> **Scopes:** `sip_trunk:master`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID of the Sub Account from which the numbers are to be deleted. This can be retrieved from [List Sub Accounts](https://marketplace.zoom.us/docs/api-reference/zoom-api/accounts/account) API.

try {
    $result = $apiInstance->deleteAllSipNumbers($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->deleteAllSipNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Account ID of the Sub Account from which the numbers are to be deleted. This can be retrieved from [List Sub Accounts](https://marketplace.zoom.us/docs/api-reference/zoom-api/accounts/account) API. |

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


## deleteInternalCallOutCountry

> object deleteInternalCallOutCountry($account_id, $country_id)

Delete Internal Call-out Country

Delete a previously assigned [call-out](https://support.zoom.us/hc/en-us/articles/200942859-How-To-Use-Telephone-Call-Out-) country from a Master Account or a Sub Account. To remove Call-out country from a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To remove Call-out country from a Master Account, provide `me` as the value of the `accountId` path parameter. <br><b>Prerequisites:</b><br> * The account making this API request must be a Master Account with [API Partner Plan](https://zoom.us/plan/api) and SIP Connected Audio Plan.<br><br> **Scope:** `sip_trunk:master`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique Identifier of the Account.<br> To remove Call-out country from a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To remove Call-out country from a Master Account, provide `me` as the value of the `accountId` path parameter.
$country_id = 'country_id_example'; // string | Two lettered Id of the country.

try {
    $result = $apiInstance->deleteInternalCallOutCountry($account_id, $country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->deleteInternalCallOutCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique Identifier of the Account.&lt;br&gt; To remove Call-out country from a Sub Account, provide the account ID of the Sub Account in the &#x60;accountId&#x60; path parameter. To remove Call-out country from a Master Account, provide &#x60;me&#x60; as the value of the &#x60;accountId&#x60; path parameter. |
 **country_id** | **string**| Two lettered Id of the country. |

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


## deleteInternalNumber

> object deleteInternalNumber($account_id, $number_id)

Delete an Internal Number

This API allows a Master Account with SIP Connected Audio plan to delete a previously assigned internal phone number from a Master Account or a Sub Account.<br><br>To delete an internal number from a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To delete an internal number from a Master Account, provide `me` as the value of the `accountId` path parameter. <br><b>Prerequisites:</b><br> * The account making this API request must be a Master Account with [API Partner Plan](https://zoom.us/plan/api) and SIP Connected Audio Plan.<br><br> **Scope:** `sip_trunk:master`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique Identifier of the account. To delete an internal number from a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To delete an internal number from a Master Account, provide `me` as the value of the `accountId` path parameter.
$number_id = 'number_id_example'; // string | Unique identifier of the phone number. This value can be retrieved by calling the List Internal Numbers API.

try {
    $result = $apiInstance->deleteInternalNumber($account_id, $number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->deleteInternalNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique Identifier of the account. To delete an internal number from a Sub Account, provide the account ID of the Sub Account in the &#x60;accountId&#x60; path parameter. To delete an internal number from a Master Account, provide &#x60;me&#x60; as the value of the &#x60;accountId&#x60; path parameter. |
 **number_id** | **string**| Unique identifier of the phone number. This value can be retrieved by calling the List Internal Numbers API. |

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


## deleteSIPTrunk

> object deleteSIPTrunk($account_id, $trunk_id)

Delete a SIP Trunk

Use this API to remove existing SIP Trunk of a Sub Account.<br> <br><b>Prerequisites:</b><br> * The account making this API request must be a Master Account with [API Partner Plan](https://zoom.us/plan/api) and SIP Connected Audio Plan.<br><br> **Scope:** `sip_trunk:master`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier of the Sub Account.
$trunk_id = 'trunk_id_example'; // string | Unique identifier of the SIP Trunk that was previously assigned to a Sub Account. To retrieve the value of this field, use the List SIP Trunks API.

try {
    $result = $apiInstance->deleteSIPTrunk($account_id, $trunk_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->deleteSIPTrunk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique identifier of the Sub Account. |
 **trunk_id** | **string**| Unique identifier of the SIP Trunk that was previously assigned to a Sub Account. To retrieve the value of this field, use the List SIP Trunks API. |

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


## listInternalCalloutCountries

> \Zoom\Api\Model\InlineResponse200102 listInternalCalloutCountries($account_id)

List Internal Call-out Countries

Retrieve the list of internal [call-out](https://support.zoom.us/hc/en-us/articles/200942859-How-To-Use-Telephone-Call-Out-) countries of a Master Account or a Sub Account. To list Call-out enabled countries of a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To list Call-out enabled countries of a Master Account, provide `me` as the value of the `accountId` path parameter. <br><b>Prerequisites:</b><br> * The account making this API request must be a Master Account with [API Partner Plan](https://zoom.us/plan/api) and SIP Connected Audio Plan.<br><br> **Scope:** `sip_trunk:master`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier of the account. To list Call-out enabled countries to a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To list Call-out enabled countries of a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To list Call-out enabled countries of a Master Account, provide `me` as the value of the `accountId` path parameter.

try {
    $result = $apiInstance->listInternalCalloutCountries($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->listInternalCalloutCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique identifier of the account. To list Call-out enabled countries to a Sub Account, provide the account ID of the Sub Account in the &#x60;accountId&#x60; path parameter. To list Call-out enabled countries of a Sub Account, provide the account ID of the Sub Account in the &#x60;accountId&#x60; path parameter. To list Call-out enabled countries of a Master Account, provide &#x60;me&#x60; as the value of the &#x60;accountId&#x60; path parameter. |

### Return type

[**\Zoom\Api\Model\InlineResponse200102**](../Model/InlineResponse200102.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listInternalNumbers

> \Zoom\Api\Model\InlineResponse200103 listInternalNumbers($account_id, $page_size, $next_page_token)

List Internal Numbers

This API allows a Master Account with SIP Connected Audio plan to list internal phone numbers (i.e., numbers that are not provided by Zoom but are owned by the organization consuming the API) assigned to a Master Account or a Sub Account.<br><br>To list internal numbers of a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To list internal numbers of a  Master Account, provide `me` as the value of the `accountId` path parameter. <br><b>Prerequisites:</b><br> * The account making this API request must be a Master Account with [API Partner Plan](https://zoom.us/plan/api) and SIP Connected Audio Plan.<br><br> **Scope:** `sip_trunk:master`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique identifier of the account. To list internal numbers of a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To list internal numbers of a  Master Account, provide `me` as the value of the `accountId` path parameter.
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->listInternalNumbers($account_id, $page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->listInternalNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique identifier of the account. To list internal numbers of a Sub Account, provide the account ID of the Sub Account in the &#x60;accountId&#x60; path parameter. To list internal numbers of a  Master Account, provide &#x60;me&#x60; as the value of the &#x60;accountId&#x60; path parameter. |
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse200103**](../Model/InlineResponse200103.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSIPTrunks

> \Zoom\Api\Model\InlineResponse200101 listSIPTrunks($account_id)

List SIP Trunks

With SIP-connected audio, Zoom establishes a SIP trunk (a network connection specifically designed to make and deliver phone calls) over a direct and private connection between the customer’s network and the Zoom cloud. Meeting participants that dial into a meeting or have the meeting call them, and are On-Net from the perspective of the customers’ IP telephony network, will be connected over this trunk rather than over the PSTN.<br><br> Use this API to list all the SIP trunks assigned to a Master Account or a Sub Account of the Master Account. To retrieve SIP trunks assigned to a Sub Account, provide the account ID of the Sub Account in the `accountId` path parameter. To retrieve SIP trunks of a Master Account, provide `me` as the value of the `accountId` path parameter. <br><br> **Scope:** `sip_trunk:read:admin` <br><b>Prerequisites:</b><br> * The account must either be a Master Account or a Sub Account with [API Partner Plan](https://zoom.us/plan/api) and SIP Connected Audio Plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Unique Identifier of the Account. To retrieve SIP trunks assigned to a Sub Account, provide the account ID of the Sub Account in the as the value of this field. To retrieve SIP trunks of a Master Account, provide `me` as the value of this field.

try {
    $result = $apiInstance->listSIPTrunks($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->listSIPTrunks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Unique Identifier of the Account. To retrieve SIP trunks assigned to a Sub Account, provide the account ID of the Sub Account in the as the value of this field. To retrieve SIP trunks of a Master Account, provide &#x60;me&#x60; as the value of this field. |

### Return type

[**\Zoom\Api\Model\InlineResponse200101**](../Model/InlineResponse200101.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSipTrunkNumbers

> \Zoom\Api\Model\InlineResponse20082 listSipTrunkNumbers()

List SIP Trunk Numbers

With SIP-connected audio, Zoom establishes a SIP trunk (a network connection specifically designed to make and deliver phone calls) over a direct and private connection between the customer’s network and the Zoom cloud. Meeting participants that dial into a meeting or have the meeting call them, and are On-Net from the perspective of the customers' IP telephony network, will be connected over this trunk rather than over the PSTN. <br><br>Use this API to list all the internal numbers that are configured for SIP Connected Audio in a Zoom Account.  **Prerequisites:**<br> * Pro or a higher account with SIP Connected Audio plan enabled. * The account must be a Master Account<br> **Scopes:** `sip_trunk:master`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\SIPConnectedAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSipTrunkNumbers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIPConnectedAudioApi->listSipTrunkNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Zoom\Api\Model\InlineResponse20082**](../Model/InlineResponse20082.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

