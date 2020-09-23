<?php
/**
 * InlineResponse20064Recordings
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
 * InlineResponse20064Recordings Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20064Recordings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_64_recordings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'caller_number' => 'string',
        'caller_number_type' => 'string',
        'caller_name' => 'string',
        'callee_number' => 'string',
        'callee_number_type' => 'string',
        'callee_name' => 'string',
        'direction' => 'string',
        'duration' => 'string',
        'download_url' => 'string',
        'date_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
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
        'date_time' => null
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ID of recording
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
     * @return string|null
     */
    public function getCallerNumber()
    {
        return $this->container['caller_number'];
    }

    /**
     * Sets caller_number
     *
     * @param string|null $caller_number Number of caller
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
     * @return string|null
     */
    public function getCallerNumberType()
    {
        return $this->container['caller_number_type'];
    }

    /**
     * Sets caller_number_type
     *
     * @param string|null $caller_number_type Type of caller's number. 1 - internal | 2 - external
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
     * @return string|null
     */
    public function getCallerName()
    {
        return $this->container['caller_name'];
    }

    /**
     * Sets caller_name
     *
     * @param string|null $caller_name Contact name of caller
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
     * @return string|null
     */
    public function getCalleeNumber()
    {
        return $this->container['callee_number'];
    }

    /**
     * Sets callee_number
     *
     * @param string|null $callee_number Number of callee
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
     * @return string|null
     */
    public function getCalleeNumberType()
    {
        return $this->container['callee_number_type'];
    }

    /**
     * Sets callee_number_type
     *
     * @param string|null $callee_number_type Type of callee's number. 1 - internal | 2 - external
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
     * @return string|null
     */
    public function getCalleeName()
    {
        return $this->container['callee_name'];
    }

    /**
     * Sets callee_name
     *
     * @param string|null $callee_name Contact name of callee
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
     * @return string|null
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string|null $direction Direction of the call. \"inbound\" | \"outbound\"
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
     * @return string|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string|null $duration Duration of the call
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
     * @return string|null
     */
    public function getDownloadUrl()
    {
        return $this->container['download_url'];
    }

    /**
     * Sets download_url
     *
     * @param string|null $download_url Download url for the recording. For security purposes, you must provide an OAuth access token in the auth header to download the recording file using this url. <br>  Example request:<br> ``` curl --request GET \\   --url {download_url} \\   --header 'authorization: Bearer {access_token} \\   --header 'content-type: application/json' ```
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
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param string|null $date_time Date and time at which the record is received
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


