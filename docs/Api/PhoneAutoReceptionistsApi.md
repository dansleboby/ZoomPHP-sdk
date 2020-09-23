# Zoom\Api\PhoneAutoReceptionistsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAutoReceptionist**](PhoneAutoReceptionistsApi.md#addAutoReceptionist) | **POST** /phone/auto_receptionists | Add an Auto Receptionist
[**assignPhoneNumbersAutoReceptionist**](PhoneAutoReceptionistsApi.md#assignPhoneNumbersAutoReceptionist) | **POST** /phone/auto_receptionists/{autoReceptionistId}/phone_numbers | Assign Phone Numbers
[**unassignAPhoneNumAutoReceptionist**](PhoneAutoReceptionistsApi.md#unassignAPhoneNumAutoReceptionist) | **DELETE** /phone/auto_receptionists/{autoReceptionistId}/phone_numbers/{phoneNumberId} | Unassign a Phone Number
[**unassignAllPhoneNumsAutoReceptionist**](PhoneAutoReceptionistsApi.md#unassignAllPhoneNumsAutoReceptionist) | **DELETE** /phone/auto_receptionists/{autoReceptionistId}/phone_numbers | Unassign all Phone Numbers
[**updateAutoReceptionist**](PhoneAutoReceptionistsApi.md#updateAutoReceptionist) | **PATCH** /phone/auto_receptionists/{autoReceptionistId} | Update Auto Receptionist Details


# **addAutoReceptionist**
> \Zoom\Api\Model\InlineResponse20127 addAutoReceptionist($body)

Add an Auto Receptionist

Auto receptionists answer calls with a personalized recording and routes calls to a phone user, call queue, common area phone, voicemail or an IVR system. Use this API to add an [auto receptionist](https://support.zoom.us/hc/en-us/articles/360021121312-Managing-Auto-Receptionists-and-Interactive-Voice-Response-IVR-) to a Zoom Phone.<br>  **Prerequisites:**<br> * Pro or higher account with Zoom Phone license.<br> **Scopes:** `phone:write:admin` <br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\PhoneAutoReceptionistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Zoom\Api\Model\Body82(); // \Zoom\Api\Model\Body82 | 

try {
    $result = $apiInstance->addAutoReceptionist($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneAutoReceptionistsApi->addAutoReceptionist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Zoom\Api\Model\Body82**](../Model/Body82.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse20127**](../Model/InlineResponse20127.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignPhoneNumbersAutoReceptionist**
> object assignPhoneNumbersAutoReceptionist($auto_receptionist_id, $body)

Assign Phone Numbers

Assign available phone numbers to an [auto receptionist](https://support.zoom.us/hc/en-us/articles/360021121312-Managing-Auto-Receptionists-and-Interactive-Voice-Response-IVR-). The available numbers can be retrieved using the List Phone Numbers API with `type` query parameter set to \"unassigned\".  **Prerequisites:** * Pro or higher account plan with Zoom Phone License * Account owner or admin permissions<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\PhoneAutoReceptionistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auto_receptionist_id = "auto_receptionist_id_example"; // string | Unique Identifier of the Auto Receptionist. It can be retrieved from the [List Sites API](https://marketplace.zoom.us/docs/api-reference/zoom-api/phone-site/listphonesites).
$body = new \Zoom\Api\Model\Body74(); // \Zoom\Api\Model\Body74 | 

try {
    $result = $apiInstance->assignPhoneNumbersAutoReceptionist($auto_receptionist_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneAutoReceptionistsApi->assignPhoneNumbersAutoReceptionist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_receptionist_id** | **string**| Unique Identifier of the Auto Receptionist. It can be retrieved from the [List Sites API](https://marketplace.zoom.us/docs/api-reference/zoom-api/phone-site/listphonesites). |
 **body** | [**\Zoom\Api\Model\Body74**](../Model/Body74.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignAPhoneNumAutoReceptionist**
> object unassignAPhoneNumAutoReceptionist($auto_receptionist_id, $phone_number_id)

Unassign a Phone Number

Unassign a specific phone number that was previously assigned to an [auto receptionist](https://support.zoom.us/hc/en-us/articles/360021121312-Managing-Auto-Receptionists-and-Interactive-Voice-Response-IVR-).   **Prerequisites:** * Pro or higher account plan with Zoom Phone License * Account owner or admin permissions<br> **Scopes:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\PhoneAutoReceptionistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auto_receptionist_id = "auto_receptionist_id_example"; // string | Unique identifier of the auto receptionist. This can be retrieved from the List Phone Sites API.
$phone_number_id = "phone_number_id_example"; // string | Unique Identifier of the phone number or provide the actual phone number in e164 format (example: +19995550123).

try {
    $result = $apiInstance->unassignAPhoneNumAutoReceptionist($auto_receptionist_id, $phone_number_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneAutoReceptionistsApi->unassignAPhoneNumAutoReceptionist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_receptionist_id** | **string**| Unique identifier of the auto receptionist. This can be retrieved from the List Phone Sites API. |
 **phone_number_id** | **string**| Unique Identifier of the phone number or provide the actual phone number in e164 format (example: +19995550123). |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unassignAllPhoneNumsAutoReceptionist**
> object unassignAllPhoneNumsAutoReceptionist($auto_receptionist_id)

Unassign all Phone Numbers

Unassign all phone numbers that were previously assigned to an [auto receptionist](https://support.zoom.us/hc/en-us/articles/360021121312-Managing-Auto-Receptionists-and-Interactive-Voice-Response-IVR-).   **Prerequisites:** * Pro or higher account plan with Zoom Phone License * Account owner or admin permissions<br> **Scopes:** `phone:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\PhoneAutoReceptionistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auto_receptionist_id = "auto_receptionist_id_example"; // string | 

try {
    $result = $apiInstance->unassignAllPhoneNumsAutoReceptionist($auto_receptionist_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneAutoReceptionistsApi->unassignAllPhoneNumsAutoReceptionist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_receptionist_id** | **string**|  |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAutoReceptionist**
> object updateAutoReceptionist($auto_receptionist_id, $body)

Update Auto Receptionist Details

An auto receptionist answers calls with a personalized recording and routes calls to a phone user, call queue, common area phone, or voicemail. An auto receptionist can also be set up so that it routes calls to an interactive voice response (IVR) system to allow callers to select the routing options.<br> Use this API to [change information](https://support.zoom.us/hc/en-us/articles/360021121312-Managing-Auto-Receptionists-and-Interactive-Voice-Response-IVR-#h_1d5ffc56-6ba3-4ce5-9d86-4a1a1ee743f3) such as display name and extension number assigned to the main auto receptionist.<br><br> **Prerequisites:**<br> * Pro or higher account with Zoom Phone license.<br> **Scopes:** `phone:write:admin` <br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Zoom\Api\Api\PhoneAutoReceptionistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auto_receptionist_id = "auto_receptionist_id_example"; // string | Unique Identifier of the Auto Receptionist. It can be retrieved from the [List Sites API](https://marketplace.zoom.us/docs/api-reference/zoom-api/phone-site/listphonesites).
$body = new \Zoom\Api\Model\Body73(); // \Zoom\Api\Model\Body73 | 

try {
    $result = $apiInstance->updateAutoReceptionist($auto_receptionist_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneAutoReceptionistsApi->updateAutoReceptionist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auto_receptionist_id** | **string**| Unique Identifier of the Auto Receptionist. It can be retrieved from the [List Sites API](https://marketplace.zoom.us/docs/api-reference/zoom-api/phone-site/listphonesites). |
 **body** | [**\Zoom\Api\Model\Body73**](../Model/Body73.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

