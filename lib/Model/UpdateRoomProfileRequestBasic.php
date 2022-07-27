<?php
/**
 * UpdateRoomProfileRequestBasic
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
 * UpdateRoomProfileRequestBasic Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateRoomProfileRequestBasic implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateRoomProfile_request_basic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hide_room_in_contacts' => 'bool',
        'name' => 'string',
        'required_code_to_ext' => 'bool',
        'room_passcode' => 'string',
        'support_email' => 'string',
        'support_phone' => 'string',
        'calendar_resource_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hide_room_in_contacts' => null,
        'name' => null,
        'required_code_to_ext' => null,
        'room_passcode' => null,
        'support_email' => 'email',
        'support_phone' => null,
        'calendar_resource_id' => null
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
        'hide_room_in_contacts' => 'hide_room_in_contacts',
        'name' => 'name',
        'required_code_to_ext' => 'required_code_to_ext',
        'room_passcode' => 'room_passcode',
        'support_email' => 'support_email',
        'support_phone' => 'support_phone',
        'calendar_resource_id' => 'calendar_resource_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hide_room_in_contacts' => 'setHideRoomInContacts',
        'name' => 'setName',
        'required_code_to_ext' => 'setRequiredCodeToExt',
        'room_passcode' => 'setRoomPasscode',
        'support_email' => 'setSupportEmail',
        'support_phone' => 'setSupportPhone',
        'calendar_resource_id' => 'setCalendarResourceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hide_room_in_contacts' => 'getHideRoomInContacts',
        'name' => 'getName',
        'required_code_to_ext' => 'getRequiredCodeToExt',
        'room_passcode' => 'getRoomPasscode',
        'support_email' => 'getSupportEmail',
        'support_phone' => 'getSupportPhone',
        'calendar_resource_id' => 'getCalendarResourceId'
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
        $this->container['hide_room_in_contacts'] = $data['hide_room_in_contacts'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['required_code_to_ext'] = $data['required_code_to_ext'] ?? null;
        $this->container['room_passcode'] = $data['room_passcode'] ?? null;
        $this->container['support_email'] = $data['support_email'] ?? null;
        $this->container['support_phone'] = $data['support_phone'] ?? null;
        $this->container['calendar_resource_id'] = $data['calendar_resource_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['room_passcode']) && (mb_strlen($this->container['room_passcode']) > 16)) {
            $invalidProperties[] = "invalid value for 'room_passcode', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['room_passcode']) && (mb_strlen($this->container['room_passcode']) < 1)) {
            $invalidProperties[] = "invalid value for 'room_passcode', the character length must be bigger than or equal to 1.";
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
     * Gets hide_room_in_contacts
     *
     * @return bool|null
     */
    public function getHideRoomInContacts()
    {
        return $this->container['hide_room_in_contacts'];
    }

    /**
     * Sets hide_room_in_contacts
     *
     * @param bool|null $hide_room_in_contacts Hide this Zoom Room from your Contact List.
     *
     * @return self
     */
    public function setHideRoomInContacts($hide_room_in_contacts)
    {
        $this->container['hide_room_in_contacts'] = $hide_room_in_contacts;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the Zoom Room.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets required_code_to_ext
     *
     * @return bool|null
     */
    public function getRequiredCodeToExt()
    {
        return $this->container['required_code_to_ext'];
    }

    /**
     * Sets required_code_to_ext
     *
     * @param bool|null $required_code_to_ext Require code to exit out of Zoom Rooms application to switch between other apps.
     *
     * @return self
     */
    public function setRequiredCodeToExt($required_code_to_ext)
    {
        $this->container['required_code_to_ext'] = $required_code_to_ext;

        return $this;
    }

    /**
     * Gets room_passcode
     *
     * @return string|null
     */
    public function getRoomPasscode()
    {
        return $this->container['room_passcode'];
    }

    /**
     * Sets room_passcode
     *
     * @param string|null $room_passcode 1-16 digit number or characters that is used to secure your Zoom Rooms application. This code must be entered on your Zoom Room Controller to change settings or sign out.
     *
     * @return self
     */
    public function setRoomPasscode($room_passcode)
    {
        if (!is_null($room_passcode) && (mb_strlen($room_passcode) > 16)) {
            throw new \InvalidArgumentException('invalid length for $room_passcode when calling UpdateRoomProfileRequestBasic., must be smaller than or equal to 16.');
        }
        if (!is_null($room_passcode) && (mb_strlen($room_passcode) < 1)) {
            throw new \InvalidArgumentException('invalid length for $room_passcode when calling UpdateRoomProfileRequestBasic., must be bigger than or equal to 1.');
        }

        $this->container['room_passcode'] = $room_passcode;

        return $this;
    }

    /**
     * Gets support_email
     *
     * @return string|null
     */
    public function getSupportEmail()
    {
        return $this->container['support_email'];
    }

    /**
     * Sets support_email
     *
     * @param string|null $support_email The email address to be used for reporting Zoom Room issues.
     *
     * @return self
     */
    public function setSupportEmail($support_email)
    {
        $this->container['support_email'] = $support_email;

        return $this;
    }

    /**
     * Gets support_phone
     *
     * @return string|null
     */
    public function getSupportPhone()
    {
        return $this->container['support_phone'];
    }

    /**
     * Sets support_phone
     *
     * @param string|null $support_phone The phone number to be used for reporting Zoom Room issues.
     *
     * @return self
     */
    public function setSupportPhone($support_phone)
    {
        $this->container['support_phone'] = $support_phone;

        return $this;
    }

    /**
     * Gets calendar_resource_id
     *
     * @return string|null
     */
    public function getCalendarResourceId()
    {
        return $this->container['calendar_resource_id'];
    }

    /**
     * Sets calendar_resource_id
     *
     * @param string|null $calendar_resource_id The calendar resource's ID. If the value of this field is empty (`\"\"`), the calendar resource will be removed from Zoom Room.
     *
     * @return self
     */
    public function setCalendarResourceId($calendar_resource_id)
    {
        $this->container['calendar_resource_id'] = $calendar_resource_id;

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


