<?php
/**
 * ParticipantQOSUserQos
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
 * ParticipantQOSUserQos Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ParticipantQOSUserQos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Participant_QOS_user_qos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date_time' => '\DateTime',
        'audio_input' => '\Zoom\Api\Model\QOSObject',
        'audio_output' => '\Zoom\Api\Model\QOSObject',
        'video_input' => 'object',
        'video_output' => 'object',
        'as_input' => 'object',
        'as_output' => 'object',
        'cpu_usage' => '\Zoom\Api\Model\ParticipantQOSCpuUsage',
        'audio_device_from_crc' => '\Zoom\Api\Model\ParticipantQOSAudioDeviceFromCrc',
        'audio_device_to_crc' => '\Zoom\Api\Model\ParticipantQOSAudioDeviceToCrc',
        'video_device_from_crc' => '\Zoom\Api\Model\ParticipantQOSVideoDeviceFromCrc',
        'video_device_to_crc' => '\Zoom\Api\Model\ParticipantQOSVideoDeviceToCrc',
        'as_device_from_crc' => '\Zoom\Api\Model\ParticipantQOSAsDeviceFromCrc',
        'as_device_to_crc' => '\Zoom\Api\Model\ParticipantQOSAsDeviceToCrc'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'date_time' => 'date-time',
        'audio_input' => null,
        'audio_output' => null,
        'video_input' => null,
        'video_output' => null,
        'as_input' => null,
        'as_output' => null,
        'cpu_usage' => null,
        'audio_device_from_crc' => null,
        'audio_device_to_crc' => null,
        'video_device_from_crc' => null,
        'video_device_to_crc' => null,
        'as_device_from_crc' => null,
        'as_device_to_crc' => null
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
        'date_time' => 'date_time',
        'audio_input' => 'audio_input',
        'audio_output' => 'audio_output',
        'video_input' => 'video_input',
        'video_output' => 'video_output',
        'as_input' => 'as_input',
        'as_output' => 'as_output',
        'cpu_usage' => 'cpu_usage',
        'audio_device_from_crc' => 'audio_device_from_crc',
        'audio_device_to_crc' => 'audio_device_to_crc',
        'video_device_from_crc' => 'video_device_from_crc',
        'video_device_to_crc' => 'video_device_to_crc',
        'as_device_from_crc' => 'as_device_from_crc',
        'as_device_to_crc' => 'as_device_to_crc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_time' => 'setDateTime',
        'audio_input' => 'setAudioInput',
        'audio_output' => 'setAudioOutput',
        'video_input' => 'setVideoInput',
        'video_output' => 'setVideoOutput',
        'as_input' => 'setAsInput',
        'as_output' => 'setAsOutput',
        'cpu_usage' => 'setCpuUsage',
        'audio_device_from_crc' => 'setAudioDeviceFromCrc',
        'audio_device_to_crc' => 'setAudioDeviceToCrc',
        'video_device_from_crc' => 'setVideoDeviceFromCrc',
        'video_device_to_crc' => 'setVideoDeviceToCrc',
        'as_device_from_crc' => 'setAsDeviceFromCrc',
        'as_device_to_crc' => 'setAsDeviceToCrc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_time' => 'getDateTime',
        'audio_input' => 'getAudioInput',
        'audio_output' => 'getAudioOutput',
        'video_input' => 'getVideoInput',
        'video_output' => 'getVideoOutput',
        'as_input' => 'getAsInput',
        'as_output' => 'getAsOutput',
        'cpu_usage' => 'getCpuUsage',
        'audio_device_from_crc' => 'getAudioDeviceFromCrc',
        'audio_device_to_crc' => 'getAudioDeviceToCrc',
        'video_device_from_crc' => 'getVideoDeviceFromCrc',
        'video_device_to_crc' => 'getVideoDeviceToCrc',
        'as_device_from_crc' => 'getAsDeviceFromCrc',
        'as_device_to_crc' => 'getAsDeviceToCrc'
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
        $this->container['date_time'] = isset($data['date_time']) ? $data['date_time'] : null;
        $this->container['audio_input'] = isset($data['audio_input']) ? $data['audio_input'] : null;
        $this->container['audio_output'] = isset($data['audio_output']) ? $data['audio_output'] : null;
        $this->container['video_input'] = isset($data['video_input']) ? $data['video_input'] : null;
        $this->container['video_output'] = isset($data['video_output']) ? $data['video_output'] : null;
        $this->container['as_input'] = isset($data['as_input']) ? $data['as_input'] : null;
        $this->container['as_output'] = isset($data['as_output']) ? $data['as_output'] : null;
        $this->container['cpu_usage'] = isset($data['cpu_usage']) ? $data['cpu_usage'] : null;
        $this->container['audio_device_from_crc'] = isset($data['audio_device_from_crc']) ? $data['audio_device_from_crc'] : null;
        $this->container['audio_device_to_crc'] = isset($data['audio_device_to_crc']) ? $data['audio_device_to_crc'] : null;
        $this->container['video_device_from_crc'] = isset($data['video_device_from_crc']) ? $data['video_device_from_crc'] : null;
        $this->container['video_device_to_crc'] = isset($data['video_device_to_crc']) ? $data['video_device_to_crc'] : null;
        $this->container['as_device_from_crc'] = isset($data['as_device_from_crc']) ? $data['as_device_from_crc'] : null;
        $this->container['as_device_to_crc'] = isset($data['as_device_to_crc']) ? $data['as_device_to_crc'] : null;
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
     * Gets date_time
     *
     * @return \DateTime|null
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param \DateTime|null $date_time Date-time of QOS
     *
     * @return $this
     */
    public function setDateTime($date_time)
    {
        $this->container['date_time'] = $date_time;

        return $this;
    }

    /**
     * Gets audio_input
     *
     * @return \Zoom\Api\Model\QOSObject|null
     */
    public function getAudioInput()
    {
        return $this->container['audio_input'];
    }

    /**
     * Sets audio_input
     *
     * @param \Zoom\Api\Model\QOSObject|null $audio_input audio_input
     *
     * @return $this
     */
    public function setAudioInput($audio_input)
    {
        $this->container['audio_input'] = $audio_input;

        return $this;
    }

    /**
     * Gets audio_output
     *
     * @return \Zoom\Api\Model\QOSObject|null
     */
    public function getAudioOutput()
    {
        return $this->container['audio_output'];
    }

    /**
     * Sets audio_output
     *
     * @param \Zoom\Api\Model\QOSObject|null $audio_output audio_output
     *
     * @return $this
     */
    public function setAudioOutput($audio_output)
    {
        $this->container['audio_output'] = $audio_output;

        return $this;
    }

    /**
     * Gets video_input
     *
     * @return object|null
     */
    public function getVideoInput()
    {
        return $this->container['video_input'];
    }

    /**
     * Sets video_input
     *
     * @param object|null $video_input Quality of service object.
     *
     * @return $this
     */
    public function setVideoInput($video_input)
    {
        $this->container['video_input'] = $video_input;

        return $this;
    }

    /**
     * Gets video_output
     *
     * @return object|null
     */
    public function getVideoOutput()
    {
        return $this->container['video_output'];
    }

    /**
     * Sets video_output
     *
     * @param object|null $video_output Quality of service object.
     *
     * @return $this
     */
    public function setVideoOutput($video_output)
    {
        $this->container['video_output'] = $video_output;

        return $this;
    }

    /**
     * Gets as_input
     *
     * @return object|null
     */
    public function getAsInput()
    {
        return $this->container['as_input'];
    }

    /**
     * Sets as_input
     *
     * @param object|null $as_input Quality of service object.
     *
     * @return $this
     */
    public function setAsInput($as_input)
    {
        $this->container['as_input'] = $as_input;

        return $this;
    }

    /**
     * Gets as_output
     *
     * @return object|null
     */
    public function getAsOutput()
    {
        return $this->container['as_output'];
    }

    /**
     * Sets as_output
     *
     * @param object|null $as_output Quality of service object.
     *
     * @return $this
     */
    public function setAsOutput($as_output)
    {
        $this->container['as_output'] = $as_output;

        return $this;
    }

    /**
     * Gets cpu_usage
     *
     * @return \Zoom\Api\Model\ParticipantQOSCpuUsage|null
     */
    public function getCpuUsage()
    {
        return $this->container['cpu_usage'];
    }

    /**
     * Sets cpu_usage
     *
     * @param \Zoom\Api\Model\ParticipantQOSCpuUsage|null $cpu_usage cpu_usage
     *
     * @return $this
     */
    public function setCpuUsage($cpu_usage)
    {
        $this->container['cpu_usage'] = $cpu_usage;

        return $this;
    }

    /**
     * Gets audio_device_from_crc
     *
     * @return \Zoom\Api\Model\ParticipantQOSAudioDeviceFromCrc|null
     */
    public function getAudioDeviceFromCrc()
    {
        return $this->container['audio_device_from_crc'];
    }

    /**
     * Sets audio_device_from_crc
     *
     * @param \Zoom\Api\Model\ParticipantQOSAudioDeviceFromCrc|null $audio_device_from_crc audio_device_from_crc
     *
     * @return $this
     */
    public function setAudioDeviceFromCrc($audio_device_from_crc)
    {
        $this->container['audio_device_from_crc'] = $audio_device_from_crc;

        return $this;
    }

    /**
     * Gets audio_device_to_crc
     *
     * @return \Zoom\Api\Model\ParticipantQOSAudioDeviceToCrc|null
     */
    public function getAudioDeviceToCrc()
    {
        return $this->container['audio_device_to_crc'];
    }

    /**
     * Sets audio_device_to_crc
     *
     * @param \Zoom\Api\Model\ParticipantQOSAudioDeviceToCrc|null $audio_device_to_crc audio_device_to_crc
     *
     * @return $this
     */
    public function setAudioDeviceToCrc($audio_device_to_crc)
    {
        $this->container['audio_device_to_crc'] = $audio_device_to_crc;

        return $this;
    }

    /**
     * Gets video_device_from_crc
     *
     * @return \Zoom\Api\Model\ParticipantQOSVideoDeviceFromCrc|null
     */
    public function getVideoDeviceFromCrc()
    {
        return $this->container['video_device_from_crc'];
    }

    /**
     * Sets video_device_from_crc
     *
     * @param \Zoom\Api\Model\ParticipantQOSVideoDeviceFromCrc|null $video_device_from_crc video_device_from_crc
     *
     * @return $this
     */
    public function setVideoDeviceFromCrc($video_device_from_crc)
    {
        $this->container['video_device_from_crc'] = $video_device_from_crc;

        return $this;
    }

    /**
     * Gets video_device_to_crc
     *
     * @return \Zoom\Api\Model\ParticipantQOSVideoDeviceToCrc|null
     */
    public function getVideoDeviceToCrc()
    {
        return $this->container['video_device_to_crc'];
    }

    /**
     * Sets video_device_to_crc
     *
     * @param \Zoom\Api\Model\ParticipantQOSVideoDeviceToCrc|null $video_device_to_crc video_device_to_crc
     *
     * @return $this
     */
    public function setVideoDeviceToCrc($video_device_to_crc)
    {
        $this->container['video_device_to_crc'] = $video_device_to_crc;

        return $this;
    }

    /**
     * Gets as_device_from_crc
     *
     * @return \Zoom\Api\Model\ParticipantQOSAsDeviceFromCrc|null
     */
    public function getAsDeviceFromCrc()
    {
        return $this->container['as_device_from_crc'];
    }

    /**
     * Sets as_device_from_crc
     *
     * @param \Zoom\Api\Model\ParticipantQOSAsDeviceFromCrc|null $as_device_from_crc as_device_from_crc
     *
     * @return $this
     */
    public function setAsDeviceFromCrc($as_device_from_crc)
    {
        $this->container['as_device_from_crc'] = $as_device_from_crc;

        return $this;
    }

    /**
     * Gets as_device_to_crc
     *
     * @return \Zoom\Api\Model\ParticipantQOSAsDeviceToCrc|null
     */
    public function getAsDeviceToCrc()
    {
        return $this->container['as_device_to_crc'];
    }

    /**
     * Sets as_device_to_crc
     *
     * @param \Zoom\Api\Model\ParticipantQOSAsDeviceToCrc|null $as_device_to_crc as_device_to_crc
     *
     * @return $this
     */
    public function setAsDeviceToCrc($as_device_to_crc)
    {
        $this->container['as_device_to_crc'] = $as_device_to_crc;

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


