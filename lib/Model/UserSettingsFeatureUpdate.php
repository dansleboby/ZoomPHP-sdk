<?php
/**
 * UserSettingsFeatureUpdate
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
 * UserSettingsFeatureUpdate Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserSettingsFeatureUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserSettingsFeatureUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meeting_capacity' => 'int',
        'large_meeting' => 'bool',
        'large_meeting_capacity' => 'int',
        'webinar' => 'bool',
        'webinar_capacity' => 'int',
        'zoom_phone' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'meeting_capacity' => null,
        'large_meeting' => null,
        'large_meeting_capacity' => null,
        'webinar' => null,
        'webinar_capacity' => null,
        'zoom_phone' => null
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
        'meeting_capacity' => 'meeting_capacity',
        'large_meeting' => 'large_meeting',
        'large_meeting_capacity' => 'large_meeting_capacity',
        'webinar' => 'webinar',
        'webinar_capacity' => 'webinar_capacity',
        'zoom_phone' => 'zoom_phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_capacity' => 'setMeetingCapacity',
        'large_meeting' => 'setLargeMeeting',
        'large_meeting_capacity' => 'setLargeMeetingCapacity',
        'webinar' => 'setWebinar',
        'webinar_capacity' => 'setWebinarCapacity',
        'zoom_phone' => 'setZoomPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_capacity' => 'getMeetingCapacity',
        'large_meeting' => 'getLargeMeeting',
        'large_meeting_capacity' => 'getLargeMeetingCapacity',
        'webinar' => 'getWebinar',
        'webinar_capacity' => 'getWebinarCapacity',
        'zoom_phone' => 'getZoomPhone'
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
        $this->container['meeting_capacity'] = isset($data['meeting_capacity']) ? $data['meeting_capacity'] : null;
        $this->container['large_meeting'] = isset($data['large_meeting']) ? $data['large_meeting'] : null;
        $this->container['large_meeting_capacity'] = isset($data['large_meeting_capacity']) ? $data['large_meeting_capacity'] : null;
        $this->container['webinar'] = isset($data['webinar']) ? $data['webinar'] : null;
        $this->container['webinar_capacity'] = isset($data['webinar_capacity']) ? $data['webinar_capacity'] : null;
        $this->container['zoom_phone'] = isset($data['zoom_phone']) ? $data['zoom_phone'] : null;
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
     * @param int|null $meeting_capacity Set a user's meeting capacity. User’s meeting capacity denotes the maximum number of participants that can join a meeting scheduled by the user.
     *
     * @return $this
     */
    public function setMeetingCapacity($meeting_capacity)
    {
        $this->container['meeting_capacity'] = $meeting_capacity;

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
     * @param bool|null $large_meeting Enable [large meeting](https://support.zoom.us/hc/en-us/articles/201362823-What-is-a-Large-Meeting-) feature for the user.
     *
     * @return $this
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
     * @param int|null $large_meeting_capacity Set the meeting capacity for the user if the user has **Large meeting** feature enabled. The value for the field can be either 500 or 1000.
     *
     * @return $this
     */
    public function setLargeMeetingCapacity($large_meeting_capacity)
    {
        $this->container['large_meeting_capacity'] = $large_meeting_capacity;

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
     * @param bool|null $webinar Enable Webinar feature for the user.
     *
     * @return $this
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
     * @param int|null $webinar_capacity Set the Webinar capacity for a user who has the Webinar feature enabled. The value of this field can be 100, 500, 1000, 3000, 5000 or 10000.
     *
     * @return $this
     */
    public function setWebinarCapacity($webinar_capacity)
    {
        $this->container['webinar_capacity'] = $webinar_capacity;

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
     * @return $this
     */
    public function setZoomPhone($zoom_phone)
    {
        $this->container['zoom_phone'] = $zoom_phone;

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


