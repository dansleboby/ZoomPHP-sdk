# # MeetingSettingsApprovedOrDeniedCountriesOrRegions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approved_list** | **string[]** | List of countries/regions from where participants can join this meeting. | [optional]
**denied_list** | **string[]** | List of countries/regions from where participants can not join this meeting. | [optional]
**enable** | **bool** | &#x60;true&#x60;: Setting enabled to either allow users or block users from specific regions to join your meetings. &lt;br&gt;  &#x60;false&#x60;: Setting disabled. | [optional]
**method** | **string** | Specify whether to allow users from specific regions to join this meeting; or block users from specific regions from joining this meeting. &lt;br&gt;&lt;br&gt; &#x60;approve&#x60;: Allow users from specific regions/countries to join this meeting. If this setting is selected, the approved regions/countries must be included in the &#x60;approved_list&#x60;.&lt;br&gt;&lt;br&gt; &#x60;deny&#x60;: Block users from specific regions/countries from joining this meeting. If this setting is selected, the approved regions/countries must be included in the &#x60;denied_list&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
