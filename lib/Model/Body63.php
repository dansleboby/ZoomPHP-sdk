<?php
/**
 * Body63
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
 * Body63 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body63 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_63';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mac_address' => 'string',
        'type' => 'string',
        'model' => 'string',
        'assigned_to' => 'string',
        'display_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mac_address' => null,
        'type' => null,
        'model' => null,
        'assigned_to' => null,
        'display_name' => null
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
        'mac_address' => 'mac_address',
        'type' => 'type',
        'model' => 'model',
        'assigned_to' => 'assigned_to',
        'display_name' => 'display_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mac_address' => 'setMacAddress',
        'type' => 'setType',
        'model' => 'setModel',
        'assigned_to' => 'setAssignedTo',
        'display_name' => 'setDisplayName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mac_address' => 'getMacAddress',
        'type' => 'getType',
        'model' => 'getModel',
        'assigned_to' => 'getAssignedTo',
        'display_name' => 'getDisplayName'
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
        $this->container['mac_address'] = isset($data['mac_address']) ? $data['mac_address'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['assigned_to'] = isset($data['assigned_to']) ? $data['assigned_to'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['mac_address'] === null) {
            $invalidProperties[] = "'mac_address' can't be null";
        }
        if (!preg_match("/^([0-9A-Fa-f]{2}[:-]?){5}([0-9A-Fa-f]{2})$/", $this->container['mac_address'])) {
            $invalidProperties[] = "invalid value for 'mac_address', must be conform to the pattern /^([0-9A-Fa-f]{2}[:-]?){5}([0-9A-Fa-f]{2})$/.";
        }

        if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 50)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['model']) && (mb_strlen($this->container['model']) > 50)) {
            $invalidProperties[] = "invalid value for 'model', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ((mb_strlen($this->container['display_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be smaller than or equal to 255.";
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
     * Gets mac_address
     *
     * @return string
     */
    public function getMacAddress()
    {
        return $this->container['mac_address'];
    }

    /**
     * Sets mac_address
     *
     * @param string $mac_address The MAC address of the desk phone.<br>  Note: If you're using a wireless phone, enter the wired MAC address, not the wireless MAC address.
     *
     * @return $this
     */
    public function setMacAddress($mac_address)
    {

        if ((!preg_match("/^([0-9A-Fa-f]{2}[:-]?){5}([0-9A-Fa-f]{2})$/", $mac_address))) {
            throw new \InvalidArgumentException("invalid value for $mac_address when calling Body63., must conform to the pattern /^([0-9A-Fa-f]{2}[:-]?){5}([0-9A-Fa-f]{2})$/.");
        }

        $this->container['mac_address'] = $mac_address;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Manufacturer (brand) name of the device.
     *
     * @return $this
     */
    public function setType($type)
    {
        if (!is_null($type) && (mb_strlen($type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $type when calling Body63., must be smaller than or equal to 50.');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model Model name of the device.
     *
     * @return $this
     */
    public function setModel($model)
    {
        if (!is_null($model) && (mb_strlen($model) > 50)) {
            throw new \InvalidArgumentException('invalid length for $model when calling Body63., must be smaller than or equal to 50.');
        }

        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets assigned_to
     *
     * @return string
     */
    public function getAssignedTo()
    {
        return $this->container['assigned_to'];
    }

    /**
     * Sets assigned_to
     *
     * @param string $assigned_to User ID or email address of the user to whom this device is to be assigned. The User ID and the email of the user can be retrieved using the [List Users](https://marketplace.zoom.us/docs/api-reference/zoom-api/users/users) API.
     *
     * @return $this
     */
    public function setAssignedTo($assigned_to)
    {
        $this->container['assigned_to'] = $assigned_to;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name Display name of the desk phone.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        if ((mb_strlen($display_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling Body63., must be smaller than or equal to 255.');
        }

        $this->container['display_name'] = $display_name;

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


