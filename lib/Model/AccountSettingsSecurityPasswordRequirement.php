<?php
/**
 * AccountSettingsSecurityPasswordRequirement
 *
 * PHP version 5
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Zoom API
 *
 * The Zoom API allows developers to safely and securely access information from Zoom. You can use this API to build private services or public applicatixons on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [Authorization Guide](https://marketplace.zoom.us/docs/guides/authorization/credentials). All endpoints are available via `https` and are located at `api.zoom.us/v2/`.  For instance you can list all users on an account via `https://api.zoom.us/v2/users/`.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developersupport@zoom.us
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Zoom\Api\Model;

use \ArrayAccess;
use \Zoom\Api\ObjectSerializer;

/**
 * AccountSettingsSecurityPasswordRequirement Class Doc Comment
 *
 * @category Class
 * @description This object refers to the [enhanced password rules](https://support.zoom.us/hc/en-us/articles/360034675592-Advanced-security-settings#h_bf8a25f6-9a66-447a-befd-f02ed3404f89) that allows Zoom account admins and owners to apply extra requiremets to the users&#39; Zoom login password.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountSettingsSecurityPasswordRequirement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountSettings_security_password_requirement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'minimum_password_length' => 'int',
        'have_special_character' => 'bool',
        'consecutive_characters_length' => 'int',
        'weak_enhance_detection' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'minimum_password_length' => null,
        'have_special_character' => null,
        'consecutive_characters_length' => null,
        'weak_enhance_detection' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'minimum_password_length' => 'minimum_password_length',
        'have_special_character' => 'have_special_character',
        'consecutive_characters_length' => 'consecutive_characters_length',
        'weak_enhance_detection' => 'weak_enhance_detection'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'minimum_password_length' => 'setMinimumPasswordLength',
        'have_special_character' => 'setHaveSpecialCharacter',
        'consecutive_characters_length' => 'setConsecutiveCharactersLength',
        'weak_enhance_detection' => 'setWeakEnhanceDetection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'minimum_password_length' => 'getMinimumPasswordLength',
        'have_special_character' => 'getHaveSpecialCharacter',
        'consecutive_characters_length' => 'getConsecutiveCharactersLength',
        'weak_enhance_detection' => 'getWeakEnhanceDetection'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['minimum_password_length'] = isset($data['minimum_password_length']) ? $data['minimum_password_length'] : null;
        $this->container['have_special_character'] = isset($data['have_special_character']) ? $data['have_special_character'] : null;
        $this->container['consecutive_characters_length'] = isset($data['consecutive_characters_length']) ? $data['consecutive_characters_length'] : null;
        $this->container['weak_enhance_detection'] = isset($data['weak_enhance_detection']) ? $data['weak_enhance_detection'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['minimum_password_length']) && ($this->container['minimum_password_length'] > 14)) {
            $invalidProperties[] = "invalid value for 'minimum_password_length', must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['minimum_password_length']) && ($this->container['minimum_password_length'] < 8)) {
            $invalidProperties[] = "invalid value for 'minimum_password_length', must be bigger than or equal to 8.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets minimum_password_length
     *
     * @return int|null
     */
    public function getMinimumPasswordLength()
    {
        return $this->container['minimum_password_length'];
    }

    /**
     * Sets minimum_password_length
     *
     * @param int|null $minimum_password_length Specify a minimum length for the password. The password length can be from a minimum of 9 characters, up to 14 characters. If you provide `0` as the value of this field, this field will be disabled and not be used and the basic password length requirement (minimum of 8 characters) will be applied for the requirement.
     *
     * @return $this
     */
    public function setMinimumPasswordLength($minimum_password_length)
    {

        if (!is_null($minimum_password_length) && ($minimum_password_length > 14)) {
            throw new \InvalidArgumentException('invalid value for $minimum_password_length when calling AccountSettingsSecurityPasswordRequirement., must be smaller than or equal to 14.');
        }
        if (!is_null($minimum_password_length) && ($minimum_password_length < 8)) {
            throw new \InvalidArgumentException('invalid value for $minimum_password_length when calling AccountSettingsSecurityPasswordRequirement., must be bigger than or equal to 8.');
        }

        $this->container['minimum_password_length'] = $minimum_password_length;

        return $this;
    }

    /**
     * Gets have_special_character
     *
     * @return bool|null
     */
    public function getHaveSpecialCharacter()
    {
        return $this->container['have_special_character'];
    }

    /**
     * Sets have_special_character
     *
     * @param bool|null $have_special_character If the value of this field is set to `true`, the password must have at least one special character(!, @, #...).
     *
     * @return $this
     */
    public function setHaveSpecialCharacter($have_special_character)
    {
        $this->container['have_special_character'] = $have_special_character;

        return $this;
    }

    /**
     * Gets consecutive_characters_length
     *
     * @return int|null
     */
    public function getConsecutiveCharactersLength()
    {
        return $this->container['consecutive_characters_length'];
    }

    /**
     * Sets consecutive_characters_length
     *
     * @param int|null $consecutive_characters_length Specify the max length of consecutive characters(abcde...) that can be used in a password. If you set the value of this field to `0`, no restriction will be applied on consecutive characters.   If you would like to set this restriction, you can specify a number between 4 and 8 that define the maximum allowed length for consecutive characters in a password.  The max allowed length will be `n-1` where `n` refers to the value you provide for this field.  For instance, if you provide `4` as the value, there can only be a maximum of `3` consecutive characters in a password(example: abc1x@8fdh).
     *
     * @return $this
     */
    public function setConsecutiveCharactersLength($consecutive_characters_length)
    {
        $this->container['consecutive_characters_length'] = $consecutive_characters_length;

        return $this;
    }

    /**
     * Gets weak_enhance_detection
     *
     * @return bool|null
     */
    public function getWeakEnhanceDetection()
    {
        return $this->container['weak_enhance_detection'];
    }

    /**
     * Sets weak_enhance_detection
     *
     * @param bool|null $weak_enhance_detection If the value of this field is set to `true`, user passwords will have to pass detection through a weak password dictionary in case hackers use simple passwords to sign in to your users’ accounts.
     *
     * @return $this
     */
    public function setWeakEnhanceDetection($weak_enhance_detection)
    {
        $this->container['weak_enhance_detection'] = $weak_enhance_detection;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


