<?php
/**
 * InlineResponse20072
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
 * InlineResponse20072 Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20072 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_72';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'plan_base' => '\Zoom\Api\Model\InlineResponse20072PlanBase[]',
        'plan_webinar' => '\Zoom\Api\Model\InlineResponse20072PlanWebinar[]',
        'plan_large_meeting' => '\Zoom\Api\Model\InlineResponse20072PlanLargeMeeting[]',
        'plan_zoom_rooms' => '\Zoom\Api\Model\InlineResponse20072PlanZoomRooms[]',
        'plan_recording' => '\Zoom\Api\Model\InlineResponse20072PlanRecording'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'plan_base' => null,
        'plan_webinar' => null,
        'plan_large_meeting' => null,
        'plan_zoom_rooms' => null,
        'plan_recording' => null
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
        'plan_base' => 'plan_base',
        'plan_webinar' => 'plan_webinar',
        'plan_large_meeting' => 'plan_large_meeting',
        'plan_zoom_rooms' => 'plan_zoom_rooms',
        'plan_recording' => 'plan_recording'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plan_base' => 'setPlanBase',
        'plan_webinar' => 'setPlanWebinar',
        'plan_large_meeting' => 'setPlanLargeMeeting',
        'plan_zoom_rooms' => 'setPlanZoomRooms',
        'plan_recording' => 'setPlanRecording'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plan_base' => 'getPlanBase',
        'plan_webinar' => 'getPlanWebinar',
        'plan_large_meeting' => 'getPlanLargeMeeting',
        'plan_zoom_rooms' => 'getPlanZoomRooms',
        'plan_recording' => 'getPlanRecording'
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
        $this->container['plan_base'] = isset($data['plan_base']) ? $data['plan_base'] : null;
        $this->container['plan_webinar'] = isset($data['plan_webinar']) ? $data['plan_webinar'] : null;
        $this->container['plan_large_meeting'] = isset($data['plan_large_meeting']) ? $data['plan_large_meeting'] : null;
        $this->container['plan_zoom_rooms'] = isset($data['plan_zoom_rooms']) ? $data['plan_zoom_rooms'] : null;
        $this->container['plan_recording'] = isset($data['plan_recording']) ? $data['plan_recording'] : null;
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
     * Gets plan_base
     *
     * @return \Zoom\Api\Model\InlineResponse20072PlanBase[]|null
     */
    public function getPlanBase()
    {
        return $this->container['plan_base'];
    }

    /**
     * Sets plan_base
     *
     * @param \Zoom\Api\Model\InlineResponse20072PlanBase[]|null $plan_base The base plan subscribed for the sub account.
     *
     * @return $this
     */
    public function setPlanBase($plan_base)
    {
        $this->container['plan_base'] = $plan_base;

        return $this;
    }

    /**
     * Gets plan_webinar
     *
     * @return \Zoom\Api\Model\InlineResponse20072PlanWebinar[]|null
     */
    public function getPlanWebinar()
    {
        return $this->container['plan_webinar'];
    }

    /**
     * Sets plan_webinar
     *
     * @param \Zoom\Api\Model\InlineResponse20072PlanWebinar[]|null $plan_webinar Webinar Plan
     *
     * @return $this
     */
    public function setPlanWebinar($plan_webinar)
    {
        $this->container['plan_webinar'] = $plan_webinar;

        return $this;
    }

    /**
     * Gets plan_large_meeting
     *
     * @return \Zoom\Api\Model\InlineResponse20072PlanLargeMeeting[]|null
     */
    public function getPlanLargeMeeting()
    {
        return $this->container['plan_large_meeting'];
    }

    /**
     * Sets plan_large_meeting
     *
     * @param \Zoom\Api\Model\InlineResponse20072PlanLargeMeeting[]|null $plan_large_meeting Large Meeting Plan
     *
     * @return $this
     */
    public function setPlanLargeMeeting($plan_large_meeting)
    {
        $this->container['plan_large_meeting'] = $plan_large_meeting;

        return $this;
    }

    /**
     * Gets plan_zoom_rooms
     *
     * @return \Zoom\Api\Model\InlineResponse20072PlanZoomRooms[]|null
     */
    public function getPlanZoomRooms()
    {
        return $this->container['plan_zoom_rooms'];
    }

    /**
     * Sets plan_zoom_rooms
     *
     * @param \Zoom\Api\Model\InlineResponse20072PlanZoomRooms[]|null $plan_zoom_rooms Zoom Rooms Plan
     *
     * @return $this
     */
    public function setPlanZoomRooms($plan_zoom_rooms)
    {
        $this->container['plan_zoom_rooms'] = $plan_zoom_rooms;

        return $this;
    }

    /**
     * Gets plan_recording
     *
     * @return \Zoom\Api\Model\InlineResponse20072PlanRecording|null
     */
    public function getPlanRecording()
    {
        return $this->container['plan_recording'];
    }

    /**
     * Sets plan_recording
     *
     * @param \Zoom\Api\Model\InlineResponse20072PlanRecording|null $plan_recording plan_recording
     *
     * @return $this
     */
    public function setPlanRecording($plan_recording)
    {
        $this->container['plan_recording'] = $plan_recording;

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


