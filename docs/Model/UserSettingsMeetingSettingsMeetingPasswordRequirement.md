# # UserSettingsMeetingSettingsMeetingPasswordRequirement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consecutive_characters_length** | **int** | Specify the max length of consecutive characters(abcde...) that can be used in a password. If you set the value of this field to &#x60;0&#x60;, no restriction will be applied on consecutive characters.   If you would like to set this restriction, you can specify a number between 4 and 8 that define the maximum allowed length for consecutive characters in a password.  The max allowed length will be &#x60;n-1&#x60; where &#x60;n&#x60; refers to the value you provide for this field.  For instance, if you provide &#x60;4&#x60; as the value, there can only be a maximum of &#x60;3&#x60; consecutive characters in a password(example: abc1x@8fdh). | [optional]
**have_letter** | **bool** | Passcode must contain at least 1 letter (such as a,b,c...). | [optional]
**have_number** | **bool** | Passcode must contain at least 1 number (such as 1,2,3...). | [optional]
**have_special_character** | **bool** | Passcode must have at least 1 special character (!,@,#...). | [optional]
**have_upper_and_lower_characters** | **bool** | Passcode must include both uppercase and lowercase characters. | [optional]
**length** | **int** | The minimum length that the meeting or webinar passcode must have. | [optional]
**only_allow_numeric** | **bool** | Passcode must only contain numbers and no other characters. | [optional]
**weak_enhance_detection** | **bool** | Inform users if the provided passcode is weak. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
