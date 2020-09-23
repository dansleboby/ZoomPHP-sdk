# Zoom\Api\BillingApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBilling**](BillingApi.md#accountBilling) | **GET** /accounts/{accountId}/billing | Get Billing Information
[**accountBillingUpdate**](BillingApi.md#accountBillingUpdate) | **PATCH** /accounts/{accountId}/billing | Update Billing Information
[**accountPlanAddonCancel**](BillingApi.md#accountPlanAddonCancel) | **PATCH** /accounts/{accountId}/plans/addons/status | Cancel  Additional Plans
[**accountPlanAddonCreate**](BillingApi.md#accountPlanAddonCreate) | **POST** /accounts/{accountId}/plans/addons | Add an Additional Plan
[**accountPlanAddonUpdate**](BillingApi.md#accountPlanAddonUpdate) | **PUT** /accounts/{accountId}/plans/addons | Update an Additional Plan
[**accountPlanBaseDelete**](BillingApi.md#accountPlanBaseDelete) | **PATCH** /accounts/{accountId}/plans/base/status | Cancel Base Plan
[**accountPlanBaseUpdate**](BillingApi.md#accountPlanBaseUpdate) | **PUT** /accounts/{accountId}/plans/base | Update a Base Plan
[**accountPlanCreate**](BillingApi.md#accountPlanCreate) | **POST** /accounts/{accountId}/plans | Subscribe to Plans
[**accountPlans**](BillingApi.md#accountPlans) | **GET** /accounts/{accountId}/plans | Get Plan Information
[**getPlanUsage**](BillingApi.md#getPlanUsage) | **GET** /accounts/{accountId}/plans/usage | Get Plan Usage



## accountBilling

> \Zoom\Api\Model\InlineResponse20014 accountBilling($account_id)

Get Billing Information

Get [billing information](https://support.zoom.us/hc/en-us/articles/201363263-About-Billing) of a Sub Account under a Master Account.<br>Only Master Accounts can use this API. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the [**ISV team**](https://zoom.us/plan/api) for more details.<br>  **Prerequisites:** * Pro or a higher paid account with Master Account option enabled. <br> **Scope**:`billing:master`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account ID.

try {
    $result = $apiInstance->accountBilling($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountBilling: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |

### Return type

[**\Zoom\Api\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountBillingUpdate

> accountBillingUpdate($account_id, $body)

Update Billing Information

Update [billing information](https://support.zoom.us/hc/en-us/articles/201363263-About-Billing) for a Sub Account under a Master account. <aside>This API can only be used to update Billing information of Pro or higher Sub Accounts whose billing charges are paid by their Master account. Only Master Accounts can use this API. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the [**ISV team**](https://zoom.us/plan/api) for more details.</aside><br><br>  **Prerequisites:** * Pro or a higher paid account with Master Account option enabled. <br> **Scope**:`billing:master`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account ID.
$body = new \Zoom\Api\Model\InlineObject13(); // \Zoom\Api\Model\InlineObject13 | 

try {
    $apiInstance->accountBillingUpdate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountBillingUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **body** | [**\Zoom\Api\Model\InlineObject13**](../Model/InlineObject13.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountPlanAddonCancel

> accountPlanAddonCancel($account_id, $body)

Cancel  Additional Plans

[Cancel additional plan](https://support.zoom.us/hc/en-us/articles/203634215-How-Do-I-Cancel-My-Subscription-) of a Sub Account. The cancellation does not provide refund for the current subscription. The service remains active for the current session. <aside> Only a Master Account can use this API to cancel the addon plans for a Sub Account whose billing charges are paid by the Master Account. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the <a href=\"https://zoom.us/plan/api\">ISV team</a> for more details.</aside><br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br>  **Prerequisites:**<br> * Pro or a higher plan with Master Account option enabled. * The Sub Account must be a paid account.<br> **Scope:** `billing:master`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | 
$body = new \Zoom\Api\Model\InlineObject50(); // \Zoom\Api\Model\InlineObject50 | 

try {
    $apiInstance->accountPlanAddonCancel($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanAddonCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **body** | [**\Zoom\Api\Model\InlineObject50**](../Model/InlineObject50.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountPlanAddonCreate

> accountPlanAddonCreate($account_id, $body)

Add an Additional Plan

Add an additional plan for a Sub Account. <br> <aside> Only a Master Account can use this API to subscribe addon plans for a Sub Account whose billing charges are paid by the Master Account. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the [**ISV team**](https://zoom.us/plan/api) for more details.</aside><br><br> <br>**Prerequisites:**<br> * Pro or a higher plan with Master Account enabled. * The Sub Account must be a paid account. The billing charges for the Sub Account must be paid by the Master Account.<br> **Scopes**: `billing:master`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account ID.
$body = new \stdClass; // object | 

try {
    $apiInstance->accountPlanAddonCreate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanAddonCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **body** | **object**|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountPlanAddonUpdate

> accountPlanAddonUpdate($account_id, $body)

Update an Additional Plan

Update an additional plan for a sub account.<br><br> <aside> Only a Master Account can use this API to update the addon plans for a Sub Account whose billing charges are paid by the Master Account. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the [**ISV team**](https://zoom.us/plan/api) for more details.</aside><br><br> <br>**Prerequisites:**<br> * Pro or a higher plan with Master Account enabled. * The Sub Account must be a paid account. The billing charges for the Sub Account must be paid by the Master Account.<br> **Scopes**: `billing:master`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account ID.
$body = new \Zoom\Api\Model\InlineObject15(); // \Zoom\Api\Model\InlineObject15 | 

try {
    $apiInstance->accountPlanAddonUpdate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanAddonUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **body** | [**\Zoom\Api\Model\InlineObject15**](../Model/InlineObject15.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountPlanBaseDelete

> accountPlanBaseDelete($account_id, $body)

Cancel Base Plan

[Cancel a base plan](https://support.zoom.us/hc/en-us/articles/203634215-How-Do-I-Cancel-My-Subscription-) for a sub account. <aside> <aside> Only a Master Account can use this API to cancel the base plan of a Sub Account whose billing charges are paid by the Master Account. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the [**ISV team**](https://zoom.us/plan/api) for more details.</aside><br><br></aside><br><br>  **Scopes**: `billing:master`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:**<br> * The Sub Account must have a Pro or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | 
$body = new \Zoom\Api\Model\InlineObject49(); // \Zoom\Api\Model\InlineObject49 | 

try {
    $apiInstance->accountPlanBaseDelete($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanBaseDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |
 **body** | [**\Zoom\Api\Model\InlineObject49**](../Model/InlineObject49.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountPlanBaseUpdate

> accountPlanBaseUpdate($account_id, $body)

Update a Base Plan

Update a base plan of a Sub Account. <aside> <aside> Only a Master Account can use this API to update the base plan of a Sub Account whose billing charges are paid by the Master Account. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the [**ISV team**](https://zoom.us/plan/api) for more details.</aside><br><br></aside> **Scopes:** `billing:master`<br><br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`<br> **Prerequisites:**<br> * The Sub Account must have a Pro or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account ID.
$body = new \Zoom\Api\Model\InlineObject14(); // \Zoom\Api\Model\InlineObject14 | 

try {
    $apiInstance->accountPlanBaseUpdate($account_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanBaseUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **body** | [**\Zoom\Api\Model\InlineObject14**](../Model/InlineObject14.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountPlanCreate

> object accountPlanCreate($account_id, $body)

Subscribe to Plans

Subscribe plans for a Sub Account under a Master Account. <aside> The plans can only be subscribed for an existing free Sub Account and the subscriptions charge for these plans should be paid by a Master Account. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the [**ISV team**](https://zoom.us/plan/api) for more details.</aside><br><br> **Scopes**: `billing:master`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account ID.
$body = new \Zoom\Api\Model\UNKNOWN_BASE_TYPE(); // \Zoom\Api\Model\UNKNOWN_BASE_TYPE | 

try {
    $result = $apiInstance->accountPlanCreate($account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlanCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |
 **body** | [**\Zoom\Api\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

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


## accountPlans

> \Zoom\Api\Model\InlineResponse20015 accountPlans($account_id)

Get Plan Information

Get plan information for a Sub Account under the Master account.  <aside> This API can only be used by a Master Account that pays for the billing charges of the associated Pro or a higher Sub Account. Zoom only assigns this privilege to trusted partners and only approved partners can use this API. Contact the [**ISV team**](https://zoom.us/plan/api) for more details.</aside><br><br> **Scopes:** `billing:master`<br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | The account ID.

try {
    $result = $apiInstance->accountPlans($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->accountPlans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| The account ID. |

### Return type

[**\Zoom\Api\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPlanUsage

> \Zoom\Api\Model\InlineResponse20072 getPlanUsage($account_id)

Get Plan Usage

Get information on usage of [plans](https://marketplace.zoom.us/docs/api-reference/other-references/plans) of a Sub Account or a Master Account. To get plan usage for Master Account, provide the keyword \"me\" as the value of the `accountId` path parameter. To get plan usage of Sub Accounts, provide the actual account Id of the Sub Account as the value of the `accountId` path parameter.   **Prerequisite**:<br> Account type: Master Account on a paid Pro, Business or Enterprise plan.<br> **Scope:** `billing:master`<br>  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Heavy`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = Zoom\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Zoom\Api\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | 

try {
    $result = $apiInstance->getPlanUsage($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getPlanUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**|  |

### Return type

[**\Zoom\Api\Model\InlineResponse20072**](../Model/InlineResponse20072.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

