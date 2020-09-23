# Zoom\Api\PhoneSiteApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPhoneSite**](PhoneSiteApi.md#createPhoneSite) | **POST** /phone/sites | Create a Phone Site
[**deletePhoneSite**](PhoneSiteApi.md#deletePhoneSite) | **DELETE** /phone/sites/{siteId} | Delete a Phone Site
[**getASite**](PhoneSiteApi.md#getASite) | **GET** /phone/sites/{siteId} | Get Phone Site Details
[**listPhoneSites**](PhoneSiteApi.md#listPhoneSites) | **GET** /phone/sites | List Phone Sites
[**updateSiteDetails**](PhoneSiteApi.md#updateSiteDetails) | **PATCH** /phone/sites/{siteId} | Update Phone Site Details



## createPhoneSite

> \Zoom\Api\Model\InlineResponse204 createPhoneSite($body)

Create a Phone Site

Sites allow you to organize Zoom Phone users in your organization. Use this API to create a [Site](https://support.zoom.us/hc/en-us/articles/360020809672).<br> **Prerequisites:**<br> * Multiple Sites must be [enabled](https://support.zoom.us/hc/en-us/articles/360020809672-Managing-Multiple-Sites#h_05c88e35-1593-491f-b1a8-b7139a75dc15). * Pro or a higher account with Zoom Phone enabled. **Scope:** `phone:write:admin`<br>     **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneSiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Zoom\Api\Model\InlineObject3(); // \Zoom\Api\Model\InlineObject3 | 

try {
    $result = $apiInstance->createPhoneSite($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSiteApi->createPhoneSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Zoom\Api\Model\InlineObject3**](../Model/InlineObject3.md)|  | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse204**](../Model/InlineResponse204.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePhoneSite

> object deletePhoneSite($site_id, $transfer_site_id)

Delete a Phone Site

Sites allow you to organize Zoom Phone users in your organization. Use this API to delete a specific [site](https://support.zoom.us/hc/en-us/articles/360020809672) in a Zoom account. To delete a site, in the query parameter, you must provide the Site ID of another site where the assets of current site (users, numbers and phones) can be transferred to.  You cannot use this API to delete the main site.  **Prerequisites:** <br> * Account must have a Pro or a higher plan with Zoom Phone license.  * [Multiple Sites](https://support.zoom.us/hc/en-us/articles/360020809672-Managing-Multiple-Sites) must be enabled.<br> **Scope:** `phone:write:admin` <br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneSiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = 'site_id_example'; // string | Unique Identifier of the Site.
$transfer_site_id = 'transfer_site_id_example'; // string | The Site ID of another site where the assets of the current site (users, numbers and phones) can be transferred to.

try {
    $result = $apiInstance->deletePhoneSite($site_id, $transfer_site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSiteApi->deletePhoneSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| Unique Identifier of the Site. |
 **transfer_site_id** | **string**| The Site ID of another site where the assets of the current site (users, numbers and phones) can be transferred to. |

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


## getASite

> \Zoom\Api\Model\InlineResponse2004 getASite($site_id)

Get Phone Site Details

Sites allow you to organize Zoom Phone users in your organization. Use this API to get information about a specific [site](https://support.zoom.us/hc/en-us/articles/360020809672).   **Prerequisites:** <br> * Account must have a Pro or a higher plan with Zoom Phone license. * Multiple Sites must be [enabled](https://support.zoom.us/hc/en-us/articles/360020809672-Managing-Multiple-Sites#h_05c88e35-1593-491f-b1a8-b7139a75dc15).<br> **Scope:** `phone:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneSiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = 'site_id_example'; // string | Unique Identifier of the Site.

try {
    $result = $apiInstance->getASite($site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSiteApi->getASite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| Unique Identifier of the Site. |

### Return type

[**\Zoom\Api\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPhoneSites

> \Zoom\Api\Model\InlineResponse2003 listPhoneSites($page_size, $next_page_token)

List Phone Sites

Sites allow you to organize Zoom Phone users in your organization. Use this API to list all the [sites](https://support.zoom.us/hc/en-us/articles/360020809672) that have been created for an account.<br> **Prerequisites:**<br> * Multiple Sites must be [enabled](https://support.zoom.us/hc/en-us/articles/360020809672-Managing-Multiple-Sites#h_05c88e35-1593-491f-b1a8-b7139a75dc15). * Pro or a higher account with Zoom Phone enabled.  **Scope:** `phone:read:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneSiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_size = 30; // int | The number of records returned within a single API call.
$next_page_token = 'next_page_token_example'; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.

try {
    $result = $apiInstance->listPhoneSites($page_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSiteApi->listPhoneSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]

### Return type

[**\Zoom\Api\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSiteDetails

> object updateSiteDetails($site_id, $body)

Update Phone Site Details

Sites allow you to organize Zoom Phone users in your organization. Use this API to update information about a specific [site](https://support.zoom.us/hc/en-us/articles/360020809672).   **Prerequisites:** <br> * Account must have a Pro or a higher plan with Zoom Phone license. * **Scope:** `phone:write:admin`<br>   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\PhoneSiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = 'site_id_example'; // string | Unique Identifier of the Site.
$body = new \Zoom\Api\Model\InlineObject4(); // \Zoom\Api\Model\InlineObject4 | 

try {
    $result = $apiInstance->updateSiteDetails($site_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSiteApi->updateSiteDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| Unique Identifier of the Site. |
 **body** | [**\Zoom\Api\Model\InlineObject4**](../Model/InlineObject4.md)|  | [optional]

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

