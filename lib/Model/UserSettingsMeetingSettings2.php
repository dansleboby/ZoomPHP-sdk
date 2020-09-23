<?php
/**
 * UserSettingsMeetingSettings2
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
 * UserSettingsMeetingSettings2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserSettingsMeetingSettings2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User_settings__Meeting_settings_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'third_party_audio' => 'bool',
        'audio_conference_info' => 'string',
        'show_international_numbers_link' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'third_party_audio' => null,
        'audio_conference_info' => null,
        'show_international_numbers_link' => null
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
        'third_party_audio' => 'third_party_audio',
        'audio_conference_info' => 'audio_conference_info',
        'show_international_numbers_link' => 'show_international_numbers_link'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'third_party_audio' => 'setThirdPartyAudio',
        'audio_conference_info' => 'setAudioConferenceInfo',
        'show_international_numbers_link' => 'setShowInternationalNumbersLink'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'third_party_audio' => 'getThirdPartyAudio',
        'audio_conference_info' => 'getAudioConferenceInfo',
        'show_international_numbers_link' => 'getShowInternationalNumbersLink'
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
        $this->container['third_party_audio'] = isset($data['third_party_audio']) ? $data['third_party_audio'] : null;
        $this->container['audio_conference_info'] = isset($data['audio_conference_info']) ? $data['audio_conference_info'] : '';
        $this->container['show_international_numbers_link'] = isset($data['show_international_numbers_link']) ? $data['show_international_numbers_link'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['audio_conference_info']) && (mb_strlen($this->container['audio_conference_info']) > 2048)) {
            $invalidProperties[] = "invalid value for 'audio_conference_info', the character length must be smaller than or equal to 2048.";
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
     * Gets third_party_audio
     *
     * @return bool|null
     */
    public function getThirdPartyAudio()
    {
        return $this->container['third_party_audio'];
    }

    /**
     * Sets third_party_audio
     *
     * @param bool|null $third_party_audio Third party audio conference.
     *
     * @return $this
     */
    public function setThirdPartyAudio($third_party_audio)
    {
        $this->container['third_party_audio'] = $third_party_audio;

        return $this;
    }

    /**
     * Gets audio_conference_info
     *
     * @return string|null
     */
    public function getAudioConferenceInfo()
    {
        return $this->container['audio_conference_info'];
    }

    /**
     * Sets audio_conference_info
     *
     * @param string|null $audio_conference_info Third party audio conference info.
     *
     * @return $this
     */
    public function setAudioConferenceInfo($audio_conference_info)
    {
        if (!is_null($audio_conference_info) && (mb_strlen($audio_conference_info) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $audio_conference_info when calling UserSettingsMeetingSettings2., must be smaller than or equal to 2048.');
        }

        $this->container['audio_conference_info'] = $audio_conference_info;

        return $this;
    }

    /**
     * Gets show_international_numbers_link
     *
     * @return bool|null
     */
    public function getShowInternationalNumbersLink()
    {
        return $this->container['show_international_numbers_link'];
    }

    /**
     * Sets show_international_numbers_link
     *
     * @param bool|null $show_international_numbers_link Show the international numbers link on the invitation email.
     *
     * @return $this
     */
    public function setShowInternationalNumbersLink($show_international_numbers_link)
    {
        $this->container['show_international_numbers_link'] = $show_international_numbers_link;

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


