<?php
/**
 * InlineResponse200100Recordings
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
 * InlineResponse200100Recordings Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse200100Recordings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_100_recordings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'caller_number' => 'string',
        'caller_number_type' => 'string',
        'caller_name' => 'string',
        'callee_number' => 'string',
        'callee_number_type' => 'string',
        'callee_name' => 'string',
        'direction' => 'string',
        'duration' => 'int',
        'download_url' => 'string',
        'date_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'caller_number' => null,
        'caller_number_type' => null,
        'caller_name' => null,
        'callee_number' => null,
        'callee_number_type' => null,
        'callee_name' => null,
        'direction' => null,
        'duration' => null,
        'download_url' => null,
        'date_time' => 'date'
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
        'id' => 'id',
        'caller_number' => 'caller_number',
        'caller_number_type' => 'caller_number_type',
        'caller_name' => 'caller_name',
        'callee_number' => 'callee_number',
        'callee_number_type' => 'callee_number_type',
        'callee_name' => 'callee_name',
        'direction' => 'direction',
        'duration' => 'duration',
        'download_url' => 'download_url',
        'date_time' => 'date_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'caller_number' => 'setCallerNumber',
        'caller_number_type' => 'setCallerNumberType',
        'caller_name' => 'setCallerName',
        'callee_number' => 'setCalleeNumber',
        'callee_number_type' => 'setCalleeNumberType',
        'callee_name' => 'setCalleeName',
        'direction' => 'setDirection',
        'duration' => 'setDuration',
        'download_url' => 'setDownloadUrl',
        'date_time' => 'setDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'caller_number' => 'getCallerNumber',
        'caller_number_type' => 'getCallerNumberType',
        'caller_name' => 'getCallerName',
        'callee_number' => 'getCalleeNumber',
        'callee_number_type' => 'getCalleeNumberType',
        'callee_name' => 'getCalleeName',
        'direction' => 'getDirection',
        'duration' => 'getDuration',
        'download_url' => 'getDownloadUrl',
        'date_time' => 'getDateTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['caller_number'] = isset($data['caller_number']) ? $data['caller_number'] : null;
        $this->container['caller_number_type'] = isset($data['caller_number_type']) ? $data['caller_number_type'] : null;
        $this->container['caller_name'] = isset($data['caller_name']) ? $data['caller_name'] : null;
        $this->container['callee_number'] = isset($data['callee_number']) ? $data['callee_number'] : null;
        $this->container['callee_number_type'] = isset($data['callee_number_type']) ? $data['callee_number_type'] : null;
        $this->container['callee_name'] = isset($data['callee_name']) ? $data['callee_name'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['download_url'] = isset($data['download_url']) ? $data['download_url'] : null;
        $this->container['date_time'] = isset($data['date_time']) ? $data['date_time'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique Identifier of the recording.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets caller_number
     *
     * @return string
     */
    public function getCallerNumber()
    {
        return $this->container['caller_number'];
    }

    /**
     * Sets caller_number
     *
     * @param string $caller_number Phone number of the caller.
     *
     * @return $this
     */
    public function setCallerNumber($caller_number)
    {
        $this->container['caller_number'] = $caller_number;

        return $this;
    }

    /**
     * Gets caller_number_type
     *
     * @return string
     */
    public function getCallerNumberType()
    {
        return $this->container['caller_number_type'];
    }

    /**
     * Sets caller_number_type
     *
     * @param string $caller_number_type Phone number type of the caller.<br>`1`- Internal<br>`2`- External
     *
     * @return $this
     */
    public function setCallerNumberType($caller_number_type)
    {
        $this->container['caller_number_type'] = $caller_number_type;

        return $this;
    }

    /**
     * Gets caller_name
     *
     * @return string
     */
    public function getCallerName()
    {
        return $this->container['caller_name'];
    }

    /**
     * Sets caller_name
     *
     * @param string $caller_name Name of the caller.
     *
     * @return $this
     */
    public function setCallerName($caller_name)
    {
        $this->container['caller_name'] = $caller_name;

        return $this;
    }

    /**
     * Gets callee_number
     *
     * @return string
     */
    public function getCalleeNumber()
    {
        return $this->container['callee_number'];
    }

    /**
     * Sets callee_number
     *
     * @param string $callee_number Name of the callee.
     *
     * @return $this
     */
    public function setCalleeNumber($callee_number)
    {
        $this->container['callee_number'] = $callee_number;

        return $this;
    }

    /**
     * Gets callee_number_type
     *
     * @return string
     */
    public function getCalleeNumberType()
    {
        return $this->container['callee_number_type'];
    }

    /**
     * Sets callee_number_type
     *
     * @param string $callee_number_type Phone number type of the callee.<br>`1`- Internal<br>`2`- External
     *
     * @return $this
     */
    public function setCalleeNumberType($callee_number_type)
    {
        $this->container['callee_number_type'] = $callee_number_type;

        return $this;
    }

    /**
     * Gets callee_name
     *
     * @return string
     */
    public function getCalleeName()
    {
        return $this->container['callee_name'];
    }

    /**
     * Sets callee_name
     *
     * @param string $callee_name Contact name of the callee.
     *
     * @return $this
     */
    public function setCalleeName($callee_name)
    {
        $this->container['callee_name'] = $callee_name;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction Direction of call. The value of this field can be either `outbound` or `inbound`.
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Duration of the call.
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets download_url
     *
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->container['download_url'];
    }

    /**
     * Sets download_url
     *
     * @param string $download_url URL using which the recording can be downloaded.
     *
     * @return $this
     */
    public function setDownloadUrl($download_url)
    {
        $this->container['download_url'] = $download_url;

        return $this;
    }

    /**
     * Gets date_time
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param \DateTime $date_time Date of the recording.
     *
     * @return $this
     */
    public function setDateTime($date_time)
    {
        $this->container['date_time'] = $date_time;

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


