# # Tsp200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dial_in_number_unrestricted** | **bool** | Control restriction on account users adding a TSP number outside of account&#39;s dial in numbers. | [optional]
**dial_in_numbers** | [**\Zoom\Api\Model\Tsp200ResponseDialInNumbersInner[]**](Tsp200ResponseDialInNumbersInner.md) |  | [optional]
**enable** | **bool** | Enable Telephony Service Provider for account users. | [optional]
**master_account_setting_extended** | **bool** | For master account, extend its TSP setting to all sub accounts. For sub account, extend TSP setting from master account. | [optional]
**modify_credential_forbidden** | **bool** | Control restriction on account users being able to modify their TSP credentials. | [optional]
**tsp_bridge** | **string** | Telephony bridge zone | [optional]
**tsp_enabled** | **bool** | Enable TSP feature for account. This has to be enabled to use any other tsp settings/features. | [optional]
**tsp_provider** | **string** | Telephony Service Provider. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
