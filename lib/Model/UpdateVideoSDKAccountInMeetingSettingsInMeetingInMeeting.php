<?php
/**
 * UpdateVideoSDKAccountInMeetingSettingsInMeetingInMeeting
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
 * UpdateVideoSDKAccountInMeetingSettingsInMeetingInMeeting Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateVideoSDKAccountInMeetingSettingsInMeetingInMeeting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Update_Video_SDK_Account_In_Meeting_Settings_in_meeting_in_meeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'custom_data_center_regions' => 'bool',
        'data_center_regions' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'custom_data_center_regions' => null,
        'data_center_regions' => null
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
        'custom_data_center_regions' => 'custom_data_center_regions',
        'data_center_regions' => 'data_center_regions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_data_center_regions' => 'setCustomDataCenterRegions',
        'data_center_regions' => 'setDataCenterRegions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_data_center_regions' => 'getCustomDataCenterRegions',
        'data_center_regions' => 'getDataCenterRegions'
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

    public const DATA_CENTER_REGIONS_AU = 'AU';
    public const DATA_CENTER_REGIONS_LA = 'LA';
    public const DATA_CENTER_REGIONS_CA = 'CA';
    public const DATA_CENTER_REGIONS_CN = 'CN';
    public const DATA_CENTER_REGIONS_DE = 'DE';
    public const DATA_CENTER_REGIONS_HK = 'HK';
    public const DATA_CENTER_REGIONS_IN = 'IN';
    public const DATA_CENTER_REGIONS_IE = 'IE';
    public const DATA_CENTER_REGIONS_TY = 'TY';
    public const DATA_CENTER_REGIONS_MX = 'MX';
    public const DATA_CENTER_REGIONS_NL = 'NL';
    public const DATA_CENTER_REGIONS_SG = 'SG';
    public const DATA_CENTER_REGIONS_US = 'US';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataCenterRegionsAllowableValues()
    {
        return [
            self::DATA_CENTER_REGIONS_AU,
            self::DATA_CENTER_REGIONS_LA,
            self::DATA_CENTER_REGIONS_CA,
            self::DATA_CENTER_REGIONS_CN,
            self::DATA_CENTER_REGIONS_DE,
            self::DATA_CENTER_REGIONS_HK,
            self::DATA_CENTER_REGIONS_IN,
            self::DATA_CENTER_REGIONS_IE,
            self::DATA_CENTER_REGIONS_TY,
            self::DATA_CENTER_REGIONS_MX,
            self::DATA_CENTER_REGIONS_NL,
            self::DATA_CENTER_REGIONS_SG,
            self::DATA_CENTER_REGIONS_US,
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
        $this->container['custom_data_center_regions'] = $data['custom_data_center_regions'] ?? null;
        $this->container['data_center_regions'] = $data['data_center_regions'] ?? null;
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
     * Gets custom_data_center_regions
     *
     * @return bool|null
     */
    public function getCustomDataCenterRegions()
    {
        return $this->container['custom_data_center_regions'];
    }

    /**
     * Sets custom_data_center_regions
     *
     * @param bool|null $custom_data_center_regions Whether to use custom [data center regions](https://support.zoom.us/hc/en-us/articles/360042411451-Selecting-data-center-regions-for-meetings-webinars):  * `true` — Users can [select data center regions](https://support.zoom.us/hc/en-us/articles/360042411451-Selecting-data-center-regions-for-hosted-meetings-and-webinars) to use for hosting real-time meeting traffic. The data center regions can be provided in the `data_center_regions` field.  * `false` — Only use the default data center regions.
     *
     * @return self
     */
    public function setCustomDataCenterRegions($custom_data_center_regions)
    {
        $this->container['custom_data_center_regions'] = $custom_data_center_regions;

        return $this;
    }

    /**
     * Gets data_center_regions
     *
     * @return string[]|null
     */
    public function getDataCenterRegions()
    {
        return $this->container['data_center_regions'];
    }

    /**
     * Sets data_center_regions
     *
     * @param string[]|null $data_center_regions If the value of `custom_data_center_regions` is `true`, a comma-separated list of the following [data center regions](https://support.zoom.us/hc/en-us/articles/360059254691-Datacenter-abbreviation-list) to opt in to:  * `AU` — Australia. * `LA` — Latin America.  * `CA` — Canada.  * `CN` — China.  * `DE` — Germany.  * `HK` — Hong Kong SAR.  * `IN` — India.  * `IE` — Ireland.  * `TY` — Japan.  * `MX` — Mexico.  * `NL` — Netherlands.  * `SG` — Singapore.  * `US` — United States.
     *
     * @return self
     */
    public function setDataCenterRegions($data_center_regions)
    {
        $allowedValues = $this->getDataCenterRegionsAllowableValues();
        if (!is_null($data_center_regions) && array_diff($data_center_regions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'data_center_regions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['data_center_regions'] = $data_center_regions;

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


