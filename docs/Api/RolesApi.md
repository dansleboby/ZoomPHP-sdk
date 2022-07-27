# OpenAPI\Client\RolesApi

All URIs are relative to https://api.zoom.us/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRoleMembers()**](RolesApi.md#addRoleMembers) | **POST** /roles/{roleId}/members | Assign a role
[**createRole()**](RolesApi.md#createRole) | **POST** /roles | Create a role
[**deleteRole()**](RolesApi.md#deleteRole) | **DELETE** /roles/{roleId} | Delete a role
[**getRoleInformation()**](RolesApi.md#getRoleInformation) | **GET** /roles/{roleId} | Get role information
[**roleMemberDelete()**](RolesApi.md#roleMemberDelete) | **DELETE** /roles/{roleId}/members/{memberId} | Unassign a role
[**roleMembers()**](RolesApi.md#roleMembers) | **GET** /roles/{roleId}/members | List members in a role
[**roles()**](RolesApi.md#roles) | **GET** /roles | List roles
[**updateRole()**](RolesApi.md#updateRole) | **PATCH** /roles/{roleId} | Update role information


## `addRoleMembers()`

```php
addRoleMembers($role_id, $add_role_members_request): \OpenAPI\Client\Model\AddRoleMembers201Response
```

Assign a role

User [roles](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) can have a set of permissions that allows access only to the pages a user needs to view or edit. Use this API to [assign a role](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control#h_748b6fd8-5057-4cf4-bbfd-787909c09db0) to members.  **Scopes:** `role:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br> **Prerequisites:**<br> * A Pro or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 2; // string | The role ID
$add_role_members_request = new \OpenAPI\Client\Model\AddRoleMembersRequest(); // \OpenAPI\Client\Model\AddRoleMembersRequest | Role members

try {
    $result = $apiInstance->addRoleMembers($role_id, $add_role_members_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->addRoleMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| The role ID |
 **add_role_members_request** | [**\OpenAPI\Client\Model\AddRoleMembersRequest**](../Model/AddRoleMembersRequest.md)| Role members |

### Return type

[**\OpenAPI\Client\Model\AddRoleMembers201Response**](../Model/AddRoleMembers201Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRole()`

```php
createRole($create_role_request): mixed
```

Create a role

Each Zoom user automatically has a role which can either be owner, administrator, or a member.   **Pre-requisite:**<br> * Pro or higher plan. * For setting the initial role, you must be the Account Owner.<br> * For subsequent role management, you must be the Account Owner or user with role management permissions.<br> **Scopes:** `role:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_role_request = new \OpenAPI\Client\Model\CreateRoleRequest(); // \OpenAPI\Client\Model\CreateRoleRequest

try {
    $result = $apiInstance->createRole($create_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->createRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_role_request** | [**\OpenAPI\Client\Model\CreateRoleRequest**](../Model/CreateRoleRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRole()`

```php
deleteRole($role_id)
```

Delete a role

Each Zoom user automatically has a role which can either be owner, administrator, or a member. Account Owners and users with edit privileges for Role management can add customized roles with a list.  Use this API to delete a role.<br> **Pre-requisite:**<br> * A Pro or higher plan.<br> * For role management and updates, you must be the Account Owner or user with role management permissions.  **Scopes:** `role:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 2; // string

try {
    $apiInstance->deleteRole($role_id);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->deleteRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**|  |

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

## `getRoleInformation()`

```php
getRoleInformation($role_id): \OpenAPI\Client\Model\GetRoleInformation200Response
```

Get role information

Each Zoom user automatically has a role which can either be owner, administrator, or a member. Account Owners and users with edit privileges for Role management can add customized roles with a list of privileges.  Use this API to get information including specific privileges assigned to a [role](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control).<br> **Pre-requisite:**<br> * A Pro or higher plan.<br> * For role management and updates, you must be the Account Owner or user with role management permissions.  **Scopes:** `role:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 2; // string | Role Id.

try {
    $result = $apiInstance->getRoleInformation($role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getRoleInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| Role Id. |

### Return type

[**\OpenAPI\Client\Model\GetRoleInformation200Response**](../Model/GetRoleInformation200Response.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `roleMemberDelete()`

```php
roleMemberDelete($role_id, $member_id)
```

Unassign a role

User [roles](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) can have a set of permissions that allows access only to the pages a user needs to view or edit. Use this API to unassign a user's role.  **Scope:** `role:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`<br> **Prerequisites:**<br> * A Pro or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 2; // string | The role ID
$member_id = Cs97wug2RTm5TNvuvk4yRw; // string | Member's ID

try {
    $apiInstance->roleMemberDelete($role_id, $member_id);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->roleMemberDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| The role ID |
 **member_id** | **string**| Member&#39;s ID |

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

## `roleMembers()`

```php
roleMembers($role_id, $page_count, $page_number, $next_page_token, $page_size): \OpenAPI\Client\Model\RoleMembersList
```

List members in a role

User [roles](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) can have a set of permissions that allows access only to the pages a user needs to view or edit. Use this API to list all the members that are assigned a specific role.  **Scope:** `role:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br>**Prerequisites:**<br> * A Pro or a higher plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 2; // string | The role ID
$page_count = 2; // string | The number of pages returned for this request.
$page_number = 1; // int | **Deprecated.** We will no longer support this field in a future release. Instead, use the `next_page_token` for pagination.
$next_page_token = IAfJX3jsOLW7w3dokmFl84zOa0MAVGyMEB2; // string | The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes.
$page_size = 30; // int | The number of records returned within a single API call.

try {
    $result = $apiInstance->roleMembers($role_id, $page_count, $page_number, $next_page_token, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->roleMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**| The role ID |
 **page_count** | **string**| The number of pages returned for this request. | [optional]
 **page_number** | **int**| **Deprecated.** We will no longer support this field in a future release. Instead, use the &#x60;next_page_token&#x60; for pagination. | [optional] [default to 1]
 **next_page_token** | **string**| The next page token is used to paginate through large result sets. A next page token will be returned whenever the set of available results exceeds the current page size. The expiration period for this token is 15 minutes. | [optional]
 **page_size** | **int**| The number of records returned within a single API call. | [optional] [default to 30]

### Return type

[**\OpenAPI\Client\Model\RoleMembersList**](../Model/RoleMembersList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `roles()`

```php
roles(): \OpenAPI\Client\Model\RoleList
```

List roles

List [roles](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) on your account  **Scopes:** `role:read:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Medium`<br> **Prerequisites** : *  Pro or higher plan.  *  For setting the initial role, you must be the Account Owner.  *  For subsequent role management, you must be the Account Owner or user with role management permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->roles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->roles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RoleList**](../Model/RoleList.md)

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRole()`

```php
updateRole($role_id, $update_role_request): mixed
```

Update role information

Each Zoom user automatically has a [role](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) which can either be owner, administrator, or a member. Account Owners and users with edit privileges for Role management can add customized roles with a list.  Use this API to change the privileges, name and description of a specific role.<br> **Pre-requisite:**<br> * A Pro or higher plan.<br> * For role management and updates, you must be the Account Owner or user with role management permissions.<br>**Scopes:** `role:write:admin`<br>    **[Rate Limit Label](https://marketplace.zoom.us/docs/api-reference/rate-limits#rate-limits):** `Light`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_id = 2; // string
$update_role_request = new \OpenAPI\Client\Model\UpdateRoleRequest(); // \OpenAPI\Client\Model\UpdateRoleRequest

try {
    $result = $apiInstance->updateRole($role_id, $update_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->updateRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role_id** | **string**|  |
 **update_role_request** | [**\OpenAPI\Client\Model\UpdateRoleRequest**](../Model/UpdateRoleRequest.md)|  | [optional]

### Return type

**mixed**

### Authorization

[OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
