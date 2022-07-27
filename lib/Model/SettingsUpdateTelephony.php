<?php
/**
 * SettingsUpdateTelephony
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
 * SettingsUpdateTelephony Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SettingsUpdateTelephony implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SettingsUpdateTelephony';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio_conference_info' => 'string',
        'show_international_numbers_link' => 'bool',
        'telephony_regions' => '\Zoom\Api\Model\GetGroupSettings200ResponseOneOfTelephonyTelephonyRegions',
        'third_party_audio' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audio_conference_info' => null,
        'show_international_numbers_link' => null,
        'telephony_regions' => null,
        'third_party_audio' => null
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
        'audio_conference_info' => 'audio_conference_info',
        'show_international_numbers_link' => 'show_international_numbers_link',
        'telephony_regions' => 'telephony_regions',
        'third_party_audio' => 'third_party_audio'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_conference_info' => 'setAudioConferenceInfo',
        'show_international_numbers_link' => 'setShowInternationalNumbersLink',
        'telephony_regions' => 'setTelephonyRegions',
        'third_party_audio' => 'setThirdPartyAudio'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_conference_info' => 'getAudioConferenceInfo',
        'show_international_numbers_link' => 'getShowInternationalNumbersLink',
        'telephony_regions' => 'getTelephonyRegions',
        'third_party_audio' => 'getThirdPartyAudio'
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
        $this->container['audio_conference_info'] = $data['audio_conference_info'] ?? '';
        $this->container['show_international_numbers_link'] = $data['show_international_numbers_link'] ?? null;
        $this->container['telephony_regions'] = $data['telephony_regions'] ?? null;
        $this->container['third_party_audio'] = $data['third_party_audio'] ?? null;
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
     * @return self
     */
    public function setAudioConferenceInfo($audio_conference_info)
    {
        if (!is_null($audio_conference_info) && (mb_strlen($audio_conference_info) > 2048)) {
            throw new \InvalidArgumentException('invalid length for $audio_conference_info when calling SettingsUpdateTelephony., must be smaller than or equal to 2048.');
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
     * @return self
     */
    public function setShowInternationalNumbersLink($show_international_numbers_link)
    {
        $this->container['show_international_numbers_link'] = $show_international_numbers_link;

        return $this;
    }

    /**
     * Gets telephony_regions
     *
     * @return \Zoom\Api\Model\GetGroupSettings200ResponseOneOfTelephonyTelephonyRegions|null
     */
    public function getTelephonyRegions()
    {
        return $this->container['telephony_regions'];
    }

    /**
     * Sets telephony_regions
     *
     * @param \Zoom\Api\Model\GetGroupSettings200ResponseOneOfTelephonyTelephonyRegions|null $telephony_regions telephony_regions
     *
     * @return self
     */
    public function setTelephonyRegions($telephony_regions)
    {
        $this->container['telephony_regions'] = $telephony_regions;

        return $this;
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
     * @return self
     */
    public function setThirdPartyAudio($third_party_audio)
    {
        $this->container['third_party_audio'] = $third_party_audio;

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

