<?php
/**
 * AccountSettingsScheduleMeetingMeetingPasswordRequirement
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
 * AccountSettingsScheduleMeetingMeetingPasswordRequirement Class Doc Comment
 *
 * @category Class
 * @description Account wide meeting/webinar [password requirements](https://support.zoom.us/hc/en-us/articles/360033559832-Meeting-and-webinar-passwords#h_a427384b-e383-4f80-864d-794bf0a37604).
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountSettingsScheduleMeetingMeetingPasswordRequirement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountSettings_schedule_meeting_meeting_password_requirement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'length' => 'int',
        'have_letter' => 'bool',
        'have_number' => 'bool',
        'have_special_character' => 'bool',
        'only_allow_numeric' => 'bool',
        'have_upper_and_lower_characters' => 'bool',
        'consecutive_characters_length' => 'int',
        'weak_enhance_detection' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'length' => null,
        'have_letter' => null,
        'have_number' => null,
        'have_special_character' => null,
        'only_allow_numeric' => null,
        'have_upper_and_lower_characters' => null,
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
        'length' => 'length',
        'have_letter' => 'have_letter',
        'have_number' => 'have_number',
        'have_special_character' => 'have_special_character',
        'only_allow_numeric' => 'only_allow_numeric',
        'have_upper_and_lower_characters' => 'have_upper_and_lower_characters',
        'consecutive_characters_length' => 'consecutive_characters_length',
        'weak_enhance_detection' => 'weak_enhance_detection'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'length' => 'setLength',
        'have_letter' => 'setHaveLetter',
        'have_number' => 'setHaveNumber',
        'have_special_character' => 'setHaveSpecialCharacter',
        'only_allow_numeric' => 'setOnlyAllowNumeric',
        'have_upper_and_lower_characters' => 'setHaveUpperAndLowerCharacters',
        'consecutive_characters_length' => 'setConsecutiveCharactersLength',
        'weak_enhance_detection' => 'setWeakEnhanceDetection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'length' => 'getLength',
        'have_letter' => 'getHaveLetter',
        'have_number' => 'getHaveNumber',
        'have_special_character' => 'getHaveSpecialCharacter',
        'only_allow_numeric' => 'getOnlyAllowNumeric',
        'have_upper_and_lower_characters' => 'getHaveUpperAndLowerCharacters',
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
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['have_letter'] = isset($data['have_letter']) ? $data['have_letter'] : null;
        $this->container['have_number'] = isset($data['have_number']) ? $data['have_number'] : null;
        $this->container['have_special_character'] = isset($data['have_special_character']) ? $data['have_special_character'] : null;
        $this->container['only_allow_numeric'] = isset($data['only_allow_numeric']) ? $data['only_allow_numeric'] : null;
        $this->container['have_upper_and_lower_characters'] = isset($data['have_upper_and_lower_characters']) ? $data['have_upper_and_lower_characters'] : null;
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
     * Gets length
     *
     * @return int|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int|null $length The minimum length that the meeting/webinar password needs to have.
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets have_letter
     *
     * @return bool|null
     */
    public function getHaveLetter()
    {
        return $this->container['have_letter'];
    }

    /**
     * Sets have_letter
     *
     * @param bool|null $have_letter If set to `true`, the password must contain at least 1 letter (such as a,b,c...).
     *
     * @return $this
     */
    public function setHaveLetter($have_letter)
    {
        $this->container['have_letter'] = $have_letter;

        return $this;
    }

    /**
     * Gets have_number
     *
     * @return bool|null
     */
    public function getHaveNumber()
    {
        return $this->container['have_number'];
    }

    /**
     * Sets have_number
     *
     * @param bool|null $have_number If set to `true`, the password must contain at least 1 number (such as 1,2,3...).
     *
     * @return $this
     */
    public function setHaveNumber($have_number)
    {
        $this->container['have_number'] = $have_number;

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
     * @param bool|null $have_special_character If set to `true`, the password must have at least 1 special character (!,@,#...).
     *
     * @return $this
     */
    public function setHaveSpecialCharacter($have_special_character)
    {
        $this->container['have_special_character'] = $have_special_character;

        return $this;
    }

    /**
     * Gets only_allow_numeric
     *
     * @return bool|null
     */
    public function getOnlyAllowNumeric()
    {
        return $this->container['only_allow_numeric'];
    }

    /**
     * Sets only_allow_numeric
     *
     * @param bool|null $only_allow_numeric If set to `true`, the password must only contain numbers and no other characters.
     *
     * @return $this
     */
    public function setOnlyAllowNumeric($only_allow_numeric)
    {
        $this->container['only_allow_numeric'] = $only_allow_numeric;

        return $this;
    }

    /**
     * Gets have_upper_and_lower_characters
     *
     * @return bool|null
     */
    public function getHaveUpperAndLowerCharacters()
    {
        return $this->container['have_upper_and_lower_characters'];
    }

    /**
     * Sets have_upper_and_lower_characters
     *
     * @param bool|null $have_upper_and_lower_characters If set to `true`, the password must include both uppercase and lowercase characters.
     *
     * @return $this
     */
    public function setHaveUpperAndLowerCharacters($have_upper_and_lower_characters)
    {
        $this->container['have_upper_and_lower_characters'] = $have_upper_and_lower_characters;

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
     * @param int|null $consecutive_characters_length consecutive_characters_length
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
     * @param bool|null $weak_enhance_detection If set to `true`, users will be informed if the provided password is weak.
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


