# OpenAPI\Client\PACApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**userPACs()**](PACApi.md#userPACs) | **GET** /users/{userId}/pac | List a user&#39;s PAC accounts


## `userPACs()`

```php
userPACs($user_id): \OpenAPI\Client\Model\UserPACs200Response
```

List a user's PAC accounts

Use this API to list a user's [Personal Audio Conference (PAC)](https://support.zoom.us/hc/en-us/articles/204517069-Getting-Started-with-Personal-Audio-Conference) accounts. For user-level apps, pass [the `me` value](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#mekeyword) instead of the `userId` parameter.    PAC allows Pro or higher account holders to host meetings through PSTN (phone dial-in) only.    **Scopes:** `pac:read:admin`, `pac:read` <br> **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`    **Prerequisites:**  * A Pro or higher plan with an [Audio Conferencing](https://support.zoom.us/hc/en-us/articles/204517069-Getting-Started-with-Personal-Audio-Conference) subscription.  * The [**Personal Audio Conference**](https://support.zoom.us/hc/en-us/articles/204517069-Getting-Started-with-Personal-Audio-Conference#h_01F5BPM447M6QDJXX50RSFXKJ3) setting enabled in the user's profile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PACApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = new \OpenAPI\Client\Model\GroupAdminsDeleteUserIdParameter(); // GroupAdminsDeleteUserIdParameter | The user ID or email address of the user. For user-level apps, pass the `me` value.

try {
    $result = $apiInstance->userPACs($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PACApi->userPACs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**GroupAdminsDeleteUserIdParameter**](../Model/.md)| The user ID or email address of the user. For user-level apps, pass the &#x60;me&#x60; value. |

### Return type

[**\OpenAPI\Client\Model\UserPACs200Response**](../Model/UserPACs200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
