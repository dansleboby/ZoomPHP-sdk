# # MeetingOrWebinarSecurityAccountSettingsMeetingSecurityMeetingPasswordRequirement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consecutive_characters_length** | **int** | The maximum length of consecutive characters (for example, &#x60;abcdef&#x60;) allowed in a password:  * &#x60;4&#x60; through &#x60;8&#x60; — The maximum consecutive characters length. The length is &#x60;n&#x60; minus &#x60;1&#x60;, where &#x60;n&#x60; is the value. For example, if the value is &#x60;4&#x60;, there can only be a maximum of &#x60;3&#x60; consecutive characters in a password (for example, &#x60;abc1x@8fdh&#x60;).  * &#x60;0&#x60; — No consecutive character restriction. | [optional]
**have_letter** | **bool** | Whether passwords must contain at least one letter character. | [optional]
**have_number** | **bool** | Whether passwords must contain at least one numeric character. | [optional]
**have_special_character** | **bool** | Whether passwords must contain at least one special character. For example, &#x60;!&#x60;, &#x60;@&#x60;, and/or &#x60;#&#x60; characters. | [optional]
**have_upper_and_lower_characters** | **bool** | Whether passwords must include uppercase and lowercase characters. | [optional]
**length** | **int** | The minimum password length. | [optional]
**only_allow_numeric** | **bool** | Whether passwords must contain **only** numeric characters. | [optional]
**weak_enhance_detection** | **bool** | Whether users are informed when the provided password is weak. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
