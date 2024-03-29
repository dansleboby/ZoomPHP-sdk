<?php
/**
 * UserSettingsScheduleMeetingMeetingPasswordRequirement
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Zoom Meeting API
 *
 * The Zoom Meeting APIs let developers to access information from Zoom. You can use this API to build private services or public applications on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [JWT](/guides/auth/jwt) and [OAuth](/guides/auth/oauth) documentation.   All endpoints are available via `https` and are located at `api.zoom.us/v2/`. For example, to list all of an account's users, use the `https://api.zoom.us/v2/users/` endpoint.
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
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
 * UserSettingsScheduleMeetingMeetingPasswordRequirement Class Doc Comment
 *
 * @category Class
 * @description Account wide meeting or webinar [passcode requirements](https://support.zoom.us/hc/en-us/articles/360033559832-Meeting-and-webinar-passwords#h_a427384b-e383-4f80-864d-794bf0a37604).
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserSettingsScheduleMeetingMeetingPasswordRequirement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserSettingsScheduleMeeting_meeting_password_requirement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'consecutive_characters_length' => 'int',
        'have_letter' => 'bool',
        'have_number' => 'bool',
        'have_special_character' => 'bool',
        'have_upper_and_lower_characters' => 'bool',
        'length' => 'int',
        'only_allow_numeric' => 'bool',
        'weak_enhance_detection' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'consecutive_characters_length' => null,
        'have_letter' => null,
        'have_number' => null,
        'have_special_character' => null,
        'have_upper_and_lower_characters' => null,
        'length' => null,
        'only_allow_numeric' => null,
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
        'consecutive_characters_length' => 'consecutive_characters_length',
        'have_letter' => 'have_letter',
        'have_number' => 'have_number',
        'have_special_character' => 'have_special_character',
        'have_upper_and_lower_characters' => 'have_upper_and_lower_characters',
        'length' => 'length',
        'only_allow_numeric' => 'only_allow_numeric',
        'weak_enhance_detection' => 'weak_enhance_detection'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consecutive_characters_length' => 'setConsecutiveCharactersLength',
        'have_letter' => 'setHaveLetter',
        'have_number' => 'setHaveNumber',
        'have_special_character' => 'setHaveSpecialCharacter',
        'have_upper_and_lower_characters' => 'setHaveUpperAndLowerCharacters',
        'length' => 'setLength',
        'only_allow_numeric' => 'setOnlyAllowNumeric',
        'weak_enhance_detection' => 'setWeakEnhanceDetection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consecutive_characters_length' => 'getConsecutiveCharactersLength',
        'have_letter' => 'getHaveLetter',
        'have_number' => 'getHaveNumber',
        'have_special_character' => 'getHaveSpecialCharacter',
        'have_upper_and_lower_characters' => 'getHaveUpperAndLowerCharacters',
        'length' => 'getLength',
        'only_allow_numeric' => 'getOnlyAllowNumeric',
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

    public const CONSECUTIVE_CHARACTERS_LENGTH_0 = 0;
    public const CONSECUTIVE_CHARACTERS_LENGTH_4 = 4;
    public const CONSECUTIVE_CHARACTERS_LENGTH_5 = 5;
    public const CONSECUTIVE_CHARACTERS_LENGTH_6 = 6;
    public const CONSECUTIVE_CHARACTERS_LENGTH_7 = 7;
    public const CONSECUTIVE_CHARACTERS_LENGTH_8 = 8;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConsecutiveCharactersLengthAllowableValues()
    {
        return [
            self::CONSECUTIVE_CHARACTERS_LENGTH_0,
            self::CONSECUTIVE_CHARACTERS_LENGTH_4,
            self::CONSECUTIVE_CHARACTERS_LENGTH_5,
            self::CONSECUTIVE_CHARACTERS_LENGTH_6,
            self::CONSECUTIVE_CHARACTERS_LENGTH_7,
            self::CONSECUTIVE_CHARACTERS_LENGTH_8,
        ];
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
        $this->container['consecutive_characters_length'] = $data['consecutive_characters_length'] ?? null;
        $this->container['have_letter'] = $data['have_letter'] ?? null;
        $this->container['have_number'] = $data['have_number'] ?? null;
        $this->container['have_special_character'] = $data['have_special_character'] ?? null;
        $this->container['have_upper_and_lower_characters'] = $data['have_upper_and_lower_characters'] ?? null;
        $this->container['length'] = $data['length'] ?? null;
        $this->container['only_allow_numeric'] = $data['only_allow_numeric'] ?? null;
        $this->container['weak_enhance_detection'] = $data['weak_enhance_detection'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getConsecutiveCharactersLengthAllowableValues();
        if (!is_null($this->container['consecutive_characters_length']) && !in_array($this->container['consecutive_characters_length'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'consecutive_characters_length', must be one of '%s'",
                $this->container['consecutive_characters_length'],
                implode("', '", $allowedValues)
            );
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
     * @return self
     */
    public function setConsecutiveCharactersLength($consecutive_characters_length)
    {
        $allowedValues = $this->getConsecutiveCharactersLengthAllowableValues();
        if (!is_null($consecutive_characters_length) && !in_array($consecutive_characters_length, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'consecutive_characters_length', must be one of '%s'",
                    $consecutive_characters_length,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['consecutive_characters_length'] = $consecutive_characters_length;

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
     * @param bool|null $have_letter Passcode must contain at least 1 letter (such as a,b,c...).
     *
     * @return self
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
     * @param bool|null $have_number Passcode must contain at least 1 number (such as 1,2,3...).
     *
     * @return self
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
     * @param bool|null $have_special_character Passcode must have at least 1 special character (!,@,#...).
     *
     * @return self
     */
    public function setHaveSpecialCharacter($have_special_character)
    {
        $this->container['have_special_character'] = $have_special_character;

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
     * @param bool|null $have_upper_and_lower_characters Passcode must include both uppercase and lowercase characters.
     *
     * @return self
     */
    public function setHaveUpperAndLowerCharacters($have_upper_and_lower_characters)
    {
        $this->container['have_upper_and_lower_characters'] = $have_upper_and_lower_characters;

        return $this;
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
     * @param int|null $length The minimum length that the meeting/webinar passcode must have.
     *
     * @return self
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

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
     * @param bool|null $only_allow_numeric Passcode must only contain numbers and no other characters.
     *
     * @return self
     */
    public function setOnlyAllowNumeric($only_allow_numeric)
    {
        $this->container['only_allow_numeric'] = $only_allow_numeric;

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
     * @param bool|null $weak_enhance_detection Inform users if the provided passcode is weak.
     *
     * @return self
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
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


