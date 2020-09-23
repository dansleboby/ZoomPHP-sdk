<?php
/**
 * QOSVideo
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
 * QOSVideo Class Doc Comment
 *
 * @category Class
 * @description Quality of service object.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class QOSVideo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QOSVideo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bitrate' => 'string',
        'latency' => 'string',
        'jitter' => 'string',
        'avg_loss' => 'string',
        'max_loss' => 'string',
        'resolution' => 'string',
        'frame_rate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bitrate' => null,
        'latency' => null,
        'jitter' => null,
        'avg_loss' => null,
        'max_loss' => null,
        'resolution' => null,
        'frame_rate' => null
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
        'bitrate' => 'bitrate',
        'latency' => 'latency',
        'jitter' => 'jitter',
        'avg_loss' => 'avg_loss',
        'max_loss' => 'max_loss',
        'resolution' => 'resolution',
        'frame_rate' => 'frame_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bitrate' => 'setBitrate',
        'latency' => 'setLatency',
        'jitter' => 'setJitter',
        'avg_loss' => 'setAvgLoss',
        'max_loss' => 'setMaxLoss',
        'resolution' => 'setResolution',
        'frame_rate' => 'setFrameRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bitrate' => 'getBitrate',
        'latency' => 'getLatency',
        'jitter' => 'getJitter',
        'avg_loss' => 'getAvgLoss',
        'max_loss' => 'getMaxLoss',
        'resolution' => 'getResolution',
        'frame_rate' => 'getFrameRate'
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
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['latency'] = isset($data['latency']) ? $data['latency'] : null;
        $this->container['jitter'] = isset($data['jitter']) ? $data['jitter'] : null;
        $this->container['avg_loss'] = isset($data['avg_loss']) ? $data['avg_loss'] : null;
        $this->container['max_loss'] = isset($data['max_loss']) ? $data['max_loss'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['frame_rate'] = isset($data['frame_rate']) ? $data['frame_rate'] : null;
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
     * Gets bitrate
     *
     * @return string|null
     */
    public function getBitrate()
    {
        return $this->container['bitrate'];
    }

    /**
     * Sets bitrate
     *
     * @param string|null $bitrate Bitrate:  the number of bits per second that can be transmitted along a digital network.
     *
     * @return $this
     */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;

        return $this;
    }

    /**
     * Gets latency
     *
     * @return string|null
     */
    public function getLatency()
    {
        return $this->container['latency'];
    }

    /**
     * Sets latency
     *
     * @param string|null $latency Latency: The amount of time it takes for a pack to travel from one point to another. In Zoom's case, an audio, video, or screen share packet.
     *
     * @return $this
     */
    public function setLatency($latency)
    {
        $this->container['latency'] = $latency;

        return $this;
    }

    /**
     * Gets jitter
     *
     * @return string|null
     */
    public function getJitter()
    {
        return $this->container['jitter'];
    }

    /**
     * Sets jitter
     *
     * @param string|null $jitter Jitter:  the variation in the delay of received packets.
     *
     * @return $this
     */
    public function setJitter($jitter)
    {
        $this->container['jitter'] = $jitter;

        return $this;
    }

    /**
     * Gets avg_loss
     *
     * @return string|null
     */
    public function getAvgLoss()
    {
        return $this->container['avg_loss'];
    }

    /**
     * Sets avg_loss
     *
     * @param string|null $avg_loss Average loss: the average amount of packet loss, that is the percentage of packets that fail to arrive at their destination.
     *
     * @return $this
     */
    public function setAvgLoss($avg_loss)
    {
        $this->container['avg_loss'] = $avg_loss;

        return $this;
    }

    /**
     * Gets max_loss
     *
     * @return string|null
     */
    public function getMaxLoss()
    {
        return $this->container['max_loss'];
    }

    /**
     * Sets max_loss
     *
     * @param string|null $max_loss Max loss: the max amount of packet loss, that is the max percentage of packets that fail to arrive at their destination.
     *
     * @return $this
     */
    public function setMaxLoss($max_loss)
    {
        $this->container['max_loss'] = $max_loss;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return string|null
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param string|null $resolution Resolution.
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets frame_rate
     *
     * @return string|null
     */
    public function getFrameRate()
    {
        return $this->container['frame_rate'];
    }

    /**
     * Sets frame_rate
     *
     * @param string|null $frame_rate Frame rate.
     *
     * @return $this
     */
    public function setFrameRate($frame_rate)
    {
        $this->container['frame_rate'] = $frame_rate;

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


