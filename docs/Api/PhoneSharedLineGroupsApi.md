# Swagger\Client\PhoneSharedLineGroupsApi

All URIs are relative to *https://api.zoom.us/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMembersToSharedLineGroup**](PhoneSharedLineGroupsApi.md#addMembersToSharedLineGroup) | **POST** /phone/shared_line_groups/{sharedLineGroupId}/members | Add Members to a Shared Line Group
[**assignPhoneNumbersSLG**](PhoneSharedLineGroupsApi.md#assignPhoneNumbersSLG) | **POST** /phone/shared_line_groups/{sharedLineGroupId}/phone_numbers | Assign Phone Numbers
[**deleteAMemberSLG**](PhoneSharedLineGroupsApi.md#deleteAMemberSLG) | **DELETE** /phone/shared_line_groups/{sharedLineGroupId}/members/{memberId} | Unassign a Member From a Shared Line Group
[**deleteAPhoneNumberSLG**](PhoneSharedLineGroupsApi.md#deleteAPhoneNumberSLG) | **DELETE** /phone/shared_line_groups/{sharedLineGroupId}/phone_numbers/{phoneNumberId} | Unassign a Phone Number
[**deleteASharedLineGroup**](PhoneSharedLineGroupsApi.md#deleteASharedLineGroup) | **DELETE** /phone/shared_line_groups/{sharedLineGroupId} | Delete a Shared Line Group
[**deleteMembersOfSLG**](PhoneSharedLineGroupsApi.md#deleteMembersOfSLG) | **DELETE** /phone/shared_line_groups/{sharedLineGroupId}/members | Unassign Members of a Shared Line Group
[**getASharedLineGroup**](PhoneSharedLineGroupsApi.md#getASharedLineGroup) | **GET** /phone/shared_line_groups/{sharedLineGroupId} | Get a Shared Line Group
[**updateASharedLineGroup**](PhoneSharedLineGroupsApi.md#updateASharedLineGroup) | **PATCH** /phone/shared_line_groups/{sharedLineGroupId} | Update a Shared Line Group


# **addMembersToSharedLineGroup**
> object addMembersToSharedLineGroup($shared_line_group_id, $body)

Add Members to a Shared Line Group

A [shared line group](https://support.zoom.us/hc/en-us/articles/360038850792) allows Zoom Phone admins to share a phone number and extension with a group of phone users or common area phones. This gives members of the shared line group access to the group's direct phone number and voicemail. Use this API to [add members](https://support.zoom.us/hc/en-us/articles/360038850792-Setting-up-shared-line-groups#h_7cb42370-48f6-4a8f-84f4-c6eee4d9f0ca) to a Shared Line Group. Note that a member can only be added to one shared line group.   **Prerequisties:** <br> * Pro or higher account with Zoom Phone license. * A valid Shared Line Group * Account owner or admin privileges   **Scopes:** `phone:write:admin`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneSharedLineGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shared_line_group_id = "shared_line_group_id_example"; // string | Unique Identifier of the shared line group.
$body = new \Swagger\Client\Model\Body80(); // \Swagger\Client\Model\Body80 | 

try {
    $result = $apiInstance->addMembersToSharedLineGroup($shared_line_group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSharedLineGroupsApi->addMembersToSharedLineGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_line_group_id** | **string**| Unique Identifier of the shared line group. |
 **body** | [**\Swagger\Client\Model\Body80**](../Model/Body80.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assignPhoneNumbersSLG**
> assignPhoneNumbersSLG($shared_line_group_id, $body)

Assign Phone Numbers

Use this API to assign phone numbers to a shared line groups. These direct phone numbers will be shared among members of the [shared line group](https://support.zoom.us/hc/en-us/articles/360038850792-Setting-up-shared-line-groups). **Prerequisties:** <br> * Pro or higher account with Zoom Phone license. * A valid Shared Line Group * Account owner or admin privileges  **Scopes:** `phone:write:admin`  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneSharedLineGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shared_line_group_id = "shared_line_group_id_example"; // string | Unique Identifier of the Shared Line Group.
$body = new \Swagger\Client\Model\Body81(); // \Swagger\Client\Model\Body81 | 

try {
    $apiInstance->assignPhoneNumbersSLG($shared_line_group_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSharedLineGroupsApi->assignPhoneNumbersSLG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_line_group_id** | **string**| Unique Identifier of the Shared Line Group. |
 **body** | [**\Swagger\Client\Model\Body81**](../Model/Body81.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAMemberSLG**
> deleteAMemberSLG($shared_line_group_id, $member_id)

Unassign a Member From a Shared Line Group

Members of the [shared line group](https://support.zoom.us/hc/en-us/articles/360038850792) have access to the group's phone number and voicemail. Use this API to unassign **a specific member** from a Shared Line Group. **Prerequisties:** <br> * Pro or higher account with Zoom Phone license. * A valid Shared Line Group * Account owner or admin privileges  **Scopes:** `phone:write:admin`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneSharedLineGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shared_line_group_id = "shared_line_group_id_example"; // string | Unique Identifier of the shared line group from which you would like to remove a member.
$member_id = "member_id_example"; // string | Unique identifier of the member who is to be removed.

try {
    $apiInstance->deleteAMemberSLG($shared_line_group_id, $member_id);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSharedLineGroupsApi->deleteAMemberSLG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_line_group_id** | **string**| Unique Identifier of the shared line group from which you would like to remove a member. |
 **member_id** | **string**| Unique identifier of the member who is to be removed. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAPhoneNumberSLG**
> deleteAPhoneNumberSLG($shared_line_group_id, $phone_number_id)

Unassign a Phone Number

Use this API to unassign a specific phone number that was assigned to the [shared line group](https://support.zoom.us/hc/en-us/articles/360038850792-Setting-up-shared-line-groups). **Prerequisties:** <br> * Pro or higher account with Zoom Phone license. * A valid Shared Line Group * Account owner or admin privileges  **Scopes:** `phone:write:admin`  **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneSharedLineGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shared_line_group_id = "shared_line_group_id_example"; // string | Unique identifier of the shared line group from which you would like to unassign a phone number.
$phone_number_id = "phone_number_id_example"; // string | Unique identifier of the phone number which is to be unassigned. This can be retrieved from Get a Shared Line Group API.

try {
    $apiInstance->deleteAPhoneNumberSLG($shared_line_group_id, $phone_number_id);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSharedLineGroupsApi->deleteAPhoneNumberSLG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_line_group_id** | **string**| Unique identifier of the shared line group from which you would like to unassign a phone number. |
 **phone_number_id** | **string**| Unique identifier of the phone number which is to be unassigned. This can be retrieved from Get a Shared Line Group API. |

### Return type

void (empty response body)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteASharedLineGroup**
> object deleteASharedLineGroup($shared_line_group_id)

Delete a Shared Line Group

A [shared line group](https://support.zoom.us/hc/en-us/articles/360038850792) allows Zoom Phone admins to share a phone number and extension with a group of phone users or common area phones. Use this API to delete a Shared Line Group.  **Prerequisties:** <br> * Pro or higher account with Zoom Phone license. * Account owner or admin privileges   **Scopes:** `phone:write:admin`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneSharedLineGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shared_line_group_id = "shared_line_group_id_example"; // string | Unique Identifier of the shared line group that you would like to delete.

try {
    $result = $apiInstance->deleteASharedLineGroup($shared_line_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSharedLineGroupsApi->deleteASharedLineGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_line_group_id** | **string**| Unique Identifier of the shared line group that you would like to delete. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMembersOfSLG**
> object deleteMembersOfSLG($shared_line_group_id)

Unassign Members of a Shared Line Group

Members of the [shared line group](https://support.zoom.us/hc/en-us/articles/360038850792) have access to the group's phone number and voicemail. Use this API to unassign **all** the existing members from a Shared Line Group. **Prerequisties:** <br> * Pro or higher account with Zoom Phone license. * A valid Shared Line Group * Account owner or admin privileges  **Scopes:** `phone:write:admin`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneSharedLineGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shared_line_group_id = "shared_line_group_id_example"; // string | Unique identifier of the Shared Line Group that you would like to delete.

try {
    $result = $apiInstance->deleteMembersOfSLG($shared_line_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSharedLineGroupsApi->deleteMembersOfSLG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_line_group_id** | **string**| Unique identifier of the Shared Line Group that you would like to delete. |

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getASharedLineGroup**
> \Swagger\Client\Model\InlineResponse20099 getASharedLineGroup($shared_line_group_id)

Get a Shared Line Group

A [shared line group](https://support.zoom.us/hc/en-us/articles/360038850792) allows Zoom Phone admins to share a phone number and extension with a group of phone users or common area phones. This gives members of the shared line group access to the group's direct phone number and voicemail. Use this API to list all the Shared Line Groups.  **Prerequisties:** <br> * Pro or higher account with Zoom Phone license. * Account owner or admin privileges   **Scopes:** `phone:read:admin` or `phone:write:admin`    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneSharedLineGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shared_line_group_id = "shared_line_group_id_example"; // string | Unique Identifier of the Shared Line Group.

try {
    $result = $apiInstance->getASharedLineGroup($shared_line_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSharedLineGroupsApi->getASharedLineGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_line_group_id** | **string**| Unique Identifier of the Shared Line Group. |

### Return type

[**\Swagger\Client\Model\InlineResponse20099**](../Model/InlineResponse20099.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateASharedLineGroup**
> object updateASharedLineGroup($shared_line_group_id, $body)

Update a Shared Line Group

A [shared line group](https://support.zoom.us/hc/en-us/articles/360038850792) allows Zoom Phone admins to share a phone number and extension with a group of phone users or common area phones. This gives members of the shared line group access to the group's direct phone number and voicemail. Use this API to update information of a Shared Line Group.  **Prerequisties:** <br> * Pro or higher account with Zoom Phone license. * Account owner or admin privileges   **Scopes:** `phone:write:admin`   **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\PhoneSharedLineGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shared_line_group_id = "shared_line_group_id_example"; // string | Unique identifier of the shared line group that is to be updated.
$body = new \Swagger\Client\Model\Body79(); // \Swagger\Client\Model\Body79 | 

try {
    $result = $apiInstance->updateASharedLineGroup($shared_line_group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneSharedLineGroupsApi->updateASharedLineGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_line_group_id** | **string**| Unique identifier of the shared line group that is to be updated. |
 **body** | [**\Swagger\Client\Model\Body79**](../Model/Body79.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

