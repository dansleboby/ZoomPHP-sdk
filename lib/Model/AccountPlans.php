<?php
/**
 * AccountPlans
 *
 * PHP version 5
 *
 * @category Class
 * @package  Zoom\Api
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

namespace Zoom\Api\Model;

use \ArrayAccess;
use \Zoom\Api\ObjectSerializer;

/**
 * AccountPlans Class Doc Comment
 *
 * @category Class
 * @description Account Plans object.
 * @package  Zoom\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountPlans implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountPlans';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'plan_base' => '\Zoom\Api\Model\Body14',
        'plan_zoom_rooms' => '\Zoom\Api\Model\InlineResponse2016PlanZoomRooms',
        'plan_room_connector' => '\Zoom\Api\Model\InlineResponse2016PlanZoomRooms',
        'plan_large_meeting' => '\Zoom\Api\Model\InlineResponse2016PlanZoomRooms[]',
        'plan_webinar' => '\Zoom\Api\Model\InlineResponse2016PlanZoomRooms[]',
        'plan_recording' => 'string',
        'plan_audio' => '\Zoom\Api\Model\InlineResponse2016PlanAudio',
        'plan_phone' => '\Zoom\Api\Model\PhonePlan2'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'plan_base' => null,
        'plan_zoom_rooms' => null,
        'plan_room_connector' => null,
        'plan_large_meeting' => null,
        'plan_webinar' => null,
        'plan_recording' => null,
        'plan_audio' => null,
        'plan_phone' => null
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
        'plan_base' => 'plan_base',
        'plan_zoom_rooms' => 'plan_zoom_rooms',
        'plan_room_connector' => 'plan_room_connector',
        'plan_large_meeting' => 'plan_large_meeting',
        'plan_webinar' => 'plan_webinar',
        'plan_recording' => 'plan_recording',
        'plan_audio' => 'plan_audio',
        'plan_phone' => 'plan_phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plan_base' => 'setPlanBase',
        'plan_zoom_rooms' => 'setPlanZoomRooms',
        'plan_room_connector' => 'setPlanRoomConnector',
        'plan_large_meeting' => 'setPlanLargeMeeting',
        'plan_webinar' => 'setPlanWebinar',
        'plan_recording' => 'setPlanRecording',
        'plan_audio' => 'setPlanAudio',
        'plan_phone' => 'setPlanPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plan_base' => 'getPlanBase',
        'plan_zoom_rooms' => 'getPlanZoomRooms',
        'plan_room_connector' => 'getPlanRoomConnector',
        'plan_large_meeting' => 'getPlanLargeMeeting',
        'plan_webinar' => 'getPlanWebinar',
        'plan_recording' => 'getPlanRecording',
        'plan_audio' => 'getPlanAudio',
        'plan_phone' => 'getPlanPhone'
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
        $this->container['plan_base'] = isset($data['plan_base']) ? $data['plan_base'] : null;
        $this->container['plan_zoom_rooms'] = isset($data['plan_zoom_rooms']) ? $data['plan_zoom_rooms'] : null;
        $this->container['plan_room_connector'] = isset($data['plan_room_connector']) ? $data['plan_room_connector'] : null;
        $this->container['plan_large_meeting'] = isset($data['plan_large_meeting']) ? $data['plan_large_meeting'] : null;
        $this->container['plan_webinar'] = isset($data['plan_webinar']) ? $data['plan_webinar'] : null;
        $this->container['plan_recording'] = isset($data['plan_recording']) ? $data['plan_recording'] : null;
        $this->container['plan_audio'] = isset($data['plan_audio']) ? $data['plan_audio'] : null;
        $this->container['plan_phone'] = isset($data['plan_phone']) ? $data['plan_phone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['plan_base'] === null) {
            $invalidProperties[] = "'plan_base' can't be null";
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
     * Gets plan_base
     *
     * @return \Zoom\Api\Model\Body14
     */
    public function getPlanBase()
    {
        return $this->container['plan_base'];
    }

    /**
     * Sets plan_base
     *
     * @param \Zoom\Api\Model\Body14 $plan_base plan_base
     *
     * @return $this
     */
    public function setPlanBase($plan_base)
    {
        $this->container['plan_base'] = $plan_base;

        return $this;
    }

    /**
     * Gets plan_zoom_rooms
     *
     * @return \Zoom\Api\Model\InlineResponse2016PlanZoomRooms
     */
    public function getPlanZoomRooms()
    {
        return $this->container['plan_zoom_rooms'];
    }

    /**
     * Sets plan_zoom_rooms
     *
     * @param \Zoom\Api\Model\InlineResponse2016PlanZoomRooms $plan_zoom_rooms plan_zoom_rooms
     *
     * @return $this
     */
    public function setPlanZoomRooms($plan_zoom_rooms)
    {
        $this->container['plan_zoom_rooms'] = $plan_zoom_rooms;

        return $this;
    }

    /**
     * Gets plan_room_connector
     *
     * @return \Zoom\Api\Model\InlineResponse2016PlanZoomRooms
     */
    public function getPlanRoomConnector()
    {
        return $this->container['plan_room_connector'];
    }

    /**
     * Sets plan_room_connector
     *
     * @param \Zoom\Api\Model\InlineResponse2016PlanZoomRooms $plan_room_connector plan_room_connector
     *
     * @return $this
     */
    public function setPlanRoomConnector($plan_room_connector)
    {
        $this->container['plan_room_connector'] = $plan_room_connector;

        return $this;
    }

    /**
     * Gets plan_large_meeting
     *
     * @return \Zoom\Api\Model\InlineResponse2016PlanZoomRooms[]
     */
    public function getPlanLargeMeeting()
    {
        return $this->container['plan_large_meeting'];
    }

    /**
     * Sets plan_large_meeting
     *
     * @param \Zoom\Api\Model\InlineResponse2016PlanZoomRooms[] $plan_large_meeting Additional large meeting Plans.
     *
     * @return $this
     */
    public function setPlanLargeMeeting($plan_large_meeting)
    {
        $this->container['plan_large_meeting'] = $plan_large_meeting;

        return $this;
    }

    /**
     * Gets plan_webinar
     *
     * @return \Zoom\Api\Model\InlineResponse2016PlanZoomRooms[]
     */
    public function getPlanWebinar()
    {
        return $this->container['plan_webinar'];
    }

    /**
     * Sets plan_webinar
     *
     * @param \Zoom\Api\Model\InlineResponse2016PlanZoomRooms[] $plan_webinar Additional webinar plans.
     *
     * @return $this
     */
    public function setPlanWebinar($plan_webinar)
    {
        $this->container['plan_webinar'] = $plan_webinar;

        return $this;
    }

    /**
     * Gets plan_recording
     *
     * @return string
     */
    public function getPlanRecording()
    {
        return $this->container['plan_recording'];
    }

    /**
     * Sets plan_recording
     *
     * @param string $plan_recording Additional cloud recording plan.
     *
     * @return $this
     */
    public function setPlanRecording($plan_recording)
    {
        $this->container['plan_recording'] = $plan_recording;

        return $this;
    }

    /**
     * Gets plan_audio
     *
     * @return \Zoom\Api\Model\InlineResponse2016PlanAudio
     */
    public function getPlanAudio()
    {
        return $this->container['plan_audio'];
    }

    /**
     * Sets plan_audio
     *
     * @param \Zoom\Api\Model\InlineResponse2016PlanAudio $plan_audio plan_audio
     *
     * @return $this
     */
    public function setPlanAudio($plan_audio)
    {
        $this->container['plan_audio'] = $plan_audio;

        return $this;
    }

    /**
     * Gets plan_phone
     *
     * @return \Zoom\Api\Model\PhonePlan2
     */
    public function getPlanPhone()
    {
        return $this->container['plan_phone'];
    }

    /**
     * Sets plan_phone
     *
     * @param \Zoom\Api\Model\PhonePlan2 $plan_phone plan_phone
     *
     * @return $this
     */
    public function setPlanPhone($plan_phone)
    {
        $this->container['plan_phone'] = $plan_phone;

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


