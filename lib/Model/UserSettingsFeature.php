<?php
/**
 * UserSettingsFeature
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * UserSettingsFeature Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserSettingsFeature implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserSettingsFeature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cn_meeting' => 'bool',
        'concurrent_meeting' => 'string',
        'in_meeting' => 'bool',
        'large_meeting' => 'bool',
        'large_meeting_capacity' => 'int',
        'meeting_capacity' => 'int',
        'webinar' => 'bool',
        'webinar_capacity' => 'int',
        'zoom_events' => 'bool',
        'zoom_events_capacity' => 'int',
        'zoom_phone' => 'bool',
        'zoom_iq_for_sales' => 'bool',
        'zoom_whiteboard' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cn_meeting' => null,
        'concurrent_meeting' => null,
        'in_meeting' => null,
        'large_meeting' => null,
        'large_meeting_capacity' => null,
        'meeting_capacity' => null,
        'webinar' => null,
        'webinar_capacity' => null,
        'zoom_events' => null,
        'zoom_events_capacity' => null,
        'zoom_phone' => null,
        'zoom_iq_for_sales' => null,
        'zoom_whiteboard' => null
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
        'cn_meeting' => 'cn_meeting',
        'concurrent_meeting' => 'concurrent_meeting',
        'in_meeting' => 'in_meeting',
        'large_meeting' => 'large_meeting',
        'large_meeting_capacity' => 'large_meeting_capacity',
        'meeting_capacity' => 'meeting_capacity',
        'webinar' => 'webinar',
        'webinar_capacity' => 'webinar_capacity',
        'zoom_events' => 'zoom_events',
        'zoom_events_capacity' => 'zoom_events_capacity',
        'zoom_phone' => 'zoom_phone',
        'zoom_iq_for_sales' => 'zoom_iq_for_sales',
        'zoom_whiteboard' => 'zoom_whiteboard'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cn_meeting' => 'setCnMeeting',
        'concurrent_meeting' => 'setConcurrentMeeting',
        'in_meeting' => 'setInMeeting',
        'large_meeting' => 'setLargeMeeting',
        'large_meeting_capacity' => 'setLargeMeetingCapacity',
        'meeting_capacity' => 'setMeetingCapacity',
        'webinar' => 'setWebinar',
        'webinar_capacity' => 'setWebinarCapacity',
        'zoom_events' => 'setZoomEvents',
        'zoom_events_capacity' => 'setZoomEventsCapacity',
        'zoom_phone' => 'setZoomPhone',
        'zoom_iq_for_sales' => 'setZoomIqForSales',
        'zoom_whiteboard' => 'setZoomWhiteboard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cn_meeting' => 'getCnMeeting',
        'concurrent_meeting' => 'getConcurrentMeeting',
        'in_meeting' => 'getInMeeting',
        'large_meeting' => 'getLargeMeeting',
        'large_meeting_capacity' => 'getLargeMeetingCapacity',
        'meeting_capacity' => 'getMeetingCapacity',
        'webinar' => 'getWebinar',
        'webinar_capacity' => 'getWebinarCapacity',
        'zoom_events' => 'getZoomEvents',
        'zoom_events_capacity' => 'getZoomEventsCapacity',
        'zoom_phone' => 'getZoomPhone',
        'zoom_iq_for_sales' => 'getZoomIqForSales',
        'zoom_whiteboard' => 'getZoomWhiteboard'
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

    public const CONCURRENT_MEETING_BASIC = 'Basic';
    public const CONCURRENT_MEETING_PLUS = 'Plus';
    public const CONCURRENT_MEETING_NONE = 'None';
    public const ZOOM_EVENTS_CAPACITY_500 = 500;
    public const ZOOM_EVENTS_CAPACITY_1000 = 1000;
    public const ZOOM_EVENTS_CAPACITY_3000 = 3000;
    public const ZOOM_EVENTS_CAPACITY_5000 = 5000;
    public const ZOOM_EVENTS_CAPACITY_10000 = 10000;
    public const ZOOM_EVENTS_CAPACITY_20000 = 20000;
    public const ZOOM_EVENTS_CAPACITY_30000 = 30000;
    public const ZOOM_EVENTS_CAPACITY_50000 = 50000;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConcurrentMeetingAllowableValues()
    {
        return [
            self::CONCURRENT_MEETING_BASIC,
            self::CONCURRENT_MEETING_PLUS,
            self::CONCURRENT_MEETING_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getZoomEventsCapacityAllowableValues()
    {
        return [
            self::ZOOM_EVENTS_CAPACITY_500,
            self::ZOOM_EVENTS_CAPACITY_1000,
            self::ZOOM_EVENTS_CAPACITY_3000,
            self::ZOOM_EVENTS_CAPACITY_5000,
            self::ZOOM_EVENTS_CAPACITY_10000,
            self::ZOOM_EVENTS_CAPACITY_20000,
            self::ZOOM_EVENTS_CAPACITY_30000,
            self::ZOOM_EVENTS_CAPACITY_50000,
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
        $this->container['cn_meeting'] = $data['cn_meeting'] ?? null;
        $this->container['concurrent_meeting'] = $data['concurrent_meeting'] ?? null;
        $this->container['in_meeting'] = $data['in_meeting'] ?? null;
        $this->container['large_meeting'] = $data['large_meeting'] ?? null;
        $this->container['large_meeting_capacity'] = $data['large_meeting_capacity'] ?? null;
        $this->container['meeting_capacity'] = $data['meeting_capacity'] ?? null;
        $this->container['webinar'] = $data['webinar'] ?? null;
        $this->container['webinar_capacity'] = $data['webinar_capacity'] ?? null;
        $this->container['zoom_events'] = $data['zoom_events'] ?? null;
        $this->container['zoom_events_capacity'] = $data['zoom_events_capacity'] ?? null;
        $this->container['zoom_phone'] = $data['zoom_phone'] ?? null;
        $this->container['zoom_iq_for_sales'] = $data['zoom_iq_for_sales'] ?? null;
        $this->container['zoom_whiteboard'] = $data['zoom_whiteboard'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getConcurrentMeetingAllowableValues();
        if (!is_null($this->container['concurrent_meeting']) && !in_array($this->container['concurrent_meeting'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'concurrent_meeting', must be one of '%s'",
                $this->container['concurrent_meeting'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getZoomEventsCapacityAllowableValues();
        if (!is_null($this->container['zoom_events_capacity']) && !in_array($this->container['zoom_events_capacity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'zoom_events_capacity', must be one of '%s'",
                $this->container['zoom_events_capacity'],
                implode("', '", $allowedValues)
            );
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
     * Gets cn_meeting
     *
     * @return bool|null
     * @deprecated
     */
    public function getCnMeeting()
    {
        return $this->container['cn_meeting'];
    }

    /**
     * Sets cn_meeting
     *
     * @param bool|null $cn_meeting Host meeting in China.
     *
     * @return self
     * @deprecated
     */
    public function setCnMeeting($cn_meeting)
    {
        $this->container['cn_meeting'] = $cn_meeting;

        return $this;
    }

    /**
     * Gets concurrent_meeting
     *
     * @return string|null
     */
    public function getConcurrentMeeting()
    {
        return $this->container['concurrent_meeting'];
    }

    /**
     * Sets concurrent_meeting
     *
     * @param string|null $concurrent_meeting The user's assigned [Concurrent Meeting](https://support.zoom.us/hc/en-us/articles/206122046) type:  * `Basic`  * `Plus`  * `None`    **Note:** This feature requires a Concurrent Meeting Basic or Plus plan subscription.
     *
     * @return self
     */
    public function setConcurrentMeeting($concurrent_meeting)
    {
        $allowedValues = $this->getConcurrentMeetingAllowableValues();
        if (!is_null($concurrent_meeting) && !in_array($concurrent_meeting, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'concurrent_meeting', must be one of '%s'",
                    $concurrent_meeting,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['concurrent_meeting'] = $concurrent_meeting;

        return $this;
    }

    /**
     * Gets in_meeting
     *
     * @return bool|null
     * @deprecated
     */
    public function getInMeeting()
    {
        return $this->container['in_meeting'];
    }

    /**
     * Sets in_meeting
     *
     * @param bool|null $in_meeting Host meeting in India.
     *
     * @return self
     * @deprecated
     */
    public function setInMeeting($in_meeting)
    {
        $this->container['in_meeting'] = $in_meeting;

        return $this;
    }

    /**
     * Gets large_meeting
     *
     * @return bool|null
     */
    public function getLargeMeeting()
    {
        return $this->container['large_meeting'];
    }

    /**
     * Sets large_meeting
     *
     * @param bool|null $large_meeting Large meeting feature.
     *
     * @return self
     */
    public function setLargeMeeting($large_meeting)
    {
        $this->container['large_meeting'] = $large_meeting;

        return $this;
    }

    /**
     * Gets large_meeting_capacity
     *
     * @return int|null
     */
    public function getLargeMeetingCapacity()
    {
        return $this->container['large_meeting_capacity'];
    }

    /**
     * Sets large_meeting_capacity
     *
     * @param int|null $large_meeting_capacity Large meeting capacity: can be 500 or 1000, depending on if the user has a large meeting capacity plan subscription or not.
     *
     * @return self
     */
    public function setLargeMeetingCapacity($large_meeting_capacity)
    {
        $this->container['large_meeting_capacity'] = $large_meeting_capacity;

        return $this;
    }

    /**
     * Gets meeting_capacity
     *
     * @return int|null
     */
    public function getMeetingCapacity()
    {
        return $this->container['meeting_capacity'];
    }

    /**
     * Sets meeting_capacity
     *
     * @param int|null $meeting_capacity User's meeting capacity.
     *
     * @return self
     */
    public function setMeetingCapacity($meeting_capacity)
    {
        $this->container['meeting_capacity'] = $meeting_capacity;

        return $this;
    }

    /**
     * Gets webinar
     *
     * @return bool|null
     */
    public function getWebinar()
    {
        return $this->container['webinar'];
    }

    /**
     * Sets webinar
     *
     * @param bool|null $webinar Webinar feature.
     *
     * @return self
     */
    public function setWebinar($webinar)
    {
        $this->container['webinar'] = $webinar;

        return $this;
    }

    /**
     * Gets webinar_capacity
     *
     * @return int|null
     */
    public function getWebinarCapacity()
    {
        return $this->container['webinar_capacity'];
    }

    /**
     * Sets webinar_capacity
     *
     * @param int|null $webinar_capacity Webinar capacity: can be 100, 500, 1000, 3000, 5000 or 10000, depending on if the user has a webinar capacity plan subscription or not.
     *
     * @return self
     */
    public function setWebinarCapacity($webinar_capacity)
    {
        $this->container['webinar_capacity'] = $webinar_capacity;

        return $this;
    }

    /**
     * Gets zoom_events
     *
     * @return bool|null
     */
    public function getZoomEvents()
    {
        return $this->container['zoom_events'];
    }

    /**
     * Sets zoom_events
     *
     * @param bool|null $zoom_events Whether the Zoom Events feature is enabled for the user.
     *
     * @return self
     */
    public function setZoomEvents($zoom_events)
    {
        $this->container['zoom_events'] = $zoom_events;

        return $this;
    }

    /**
     * Gets zoom_events_capacity
     *
     * @return int|null
     */
    public function getZoomEventsCapacity()
    {
        return $this->container['zoom_events_capacity'];
    }

    /**
     * Sets zoom_events_capacity
     *
     * @param int|null $zoom_events_capacity The user's Zoom Events plan capacity: `500`, `1000`, `3000`, `5000`, `10000`, `20000`, `30000`, or `50000`.
     *
     * @return self
     */
    public function setZoomEventsCapacity($zoom_events_capacity)
    {
        $allowedValues = $this->getZoomEventsCapacityAllowableValues();
        if (!is_null($zoom_events_capacity) && !in_array($zoom_events_capacity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'zoom_events_capacity', must be one of '%s'",
                    $zoom_events_capacity,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['zoom_events_capacity'] = $zoom_events_capacity;

        return $this;
    }

    /**
     * Gets zoom_phone
     *
     * @return bool|null
     */
    public function getZoomPhone()
    {
        return $this->container['zoom_phone'];
    }

    /**
     * Sets zoom_phone
     *
     * @param bool|null $zoom_phone Zoom phone feature.
     *
     * @return self
     */
    public function setZoomPhone($zoom_phone)
    {
        $this->container['zoom_phone'] = $zoom_phone;

        return $this;
    }

    /**
     * Gets zoom_iq_for_sales
     *
     * @return bool|null
     */
    public function getZoomIqForSales()
    {
        return $this->container['zoom_iq_for_sales'];
    }

    /**
     * Sets zoom_iq_for_sales
     *
     * @param bool|null $zoom_iq_for_sales Whether the user has a Zoom IQ license. For information about a Zoom IQ license, contact [Zoom Support](https://support.zoom.us/hc/en-us/articles/201362003).
     *
     * @return self
     */
    public function setZoomIqForSales($zoom_iq_for_sales)
    {
        $this->container['zoom_iq_for_sales'] = $zoom_iq_for_sales;

        return $this;
    }

    /**
     * Gets zoom_whiteboard
     *
     * @return bool|null
     */
    public function getZoomWhiteboard()
    {
        return $this->container['zoom_whiteboard'];
    }

    /**
     * Sets zoom_whiteboard
     *
     * @param bool|null $zoom_whiteboard Whether the user has a Zoom Whiteboard license.
     *
     * @return self
     */
    public function setZoomWhiteboard($zoom_whiteboard)
    {
        $this->container['zoom_whiteboard'] = $zoom_whiteboard;

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


