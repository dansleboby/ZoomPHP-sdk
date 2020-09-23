<?php
/**
 * UserSettingsRecordingSettingsRecordingPasswordRequirement
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zoom API
 *
 * The Zoom API allows developers to safely and securely access information from Zoom. You can use this API to build private services or public applicatixons on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [Authorization Guide](https://marketplace.zoom.us/docs/guides/authorization/credentials). All endpoints are available via `https` and are located at `api.zoom.us/v2/`.  For instance you can list all users on an account via `https://api.zoom.us/v2/users/`.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: developersupport@zoom.us
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * UserSettingsRecordingSettingsRecordingPasswordRequirement Class Doc Comment
 *
 * @category Class
 * @description This object represents the minimum passcode requirements set for recordings via Account Recording Settings.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserSettingsRecordingSettingsRecordingPasswordRequirement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User settings Recording settings_recording_password_requirement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'length' => 'int',
        'have_letter' => 'bool',
        'have_number' => 'bool',
        'have_special_character' => 'bool',
        'only_allow_numeric' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'length' => null,
        'have_letter' => null,
        'have_number' => null,
        'have_special_character' => null,
        'only_allow_numeric' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
        'only_allow_numeric' => 'only_allow_numeric'
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
        'only_allow_numeric' => 'setOnlyAllowNumeric'
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
        'only_allow_numeric' => 'getOnlyAllowNumeric'
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
        return self::$swaggerModelName;
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
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['length']) && ($this->container['length'] > 10)) {
            $invalidProperties[] = "invalid value for 'length', must be smaller than or equal to 10.";
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
     * Gets length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int $length Minimum required length for the passcode.
     *
     * @return $this
     */
    public function setLength($length)
    {

        if (!is_null($length) && ($length > 10)) {
            throw new \InvalidArgumentException('invalid value for $length when calling UserSettingsRecordingSettingsRecordingPasswordRequirement., must be smaller than or equal to 10.');
        }

        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets have_letter
     *
     * @return bool
     */
    public function getHaveLetter()
    {
        return $this->container['have_letter'];
    }

    /**
     * Sets have_letter
     *
     * @param bool $have_letter Indicates whether or not passcode must contain at least one alphabetical letter (a, b, c..).
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
     * @return bool
     */
    public function getHaveNumber()
    {
        return $this->container['have_number'];
    }

    /**
     * Sets have_number
     *
     * @param bool $have_number Indicates whether or not passcode must contain at least one number(1, 2, 3..).
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
     * @return bool
     */
    public function getHaveSpecialCharacter()
    {
        return $this->container['have_special_character'];
    }

    /**
     * Sets have_special_character
     *
     * @param bool $have_special_character Indicates whether or not passcode must contain at least one special character(!, @, #..).
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
     * @return bool
     */
    public function getOnlyAllowNumeric()
    {
        return $this->container['only_allow_numeric'];
    }

    /**
     * Sets only_allow_numeric
     *
     * @param bool $only_allow_numeric Indicates whether or not passcode must contain only numeric characters.
     *
     * @return $this
     */
    public function setOnlyAllowNumeric($only_allow_numeric)
    {
        $this->container['only_allow_numeric'] = $only_allow_numeric;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


