<?php
/**
 * AccountPlans
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
 * AccountPlans Class Doc Comment
 *
 * @category Class
 * @description Information about the account&#39;s plan.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountPlans implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountPlans';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'plan_audio' => '\Zoom\Api\Model\AccountPlansPlanAudio',
        'plan_base' => '\Zoom\Api\Model\AccountPlanBaseRequired',
        'plan_large_meeting' => '\Zoom\Api\Model\AccountPlansPlanLargeMeetingInner[]',
        'plan_phone' => '\Zoom\Api\Model\PhonePlan',
        'plan_recording' => 'string',
        'plan_room_connector' => '\Zoom\Api\Model\AccountPlansPlanRoomConnectorInner[]',
        'plan_webinar' => '\Zoom\Api\Model\AccountPlansPlanWebinarInner[]',
        'plan_zoom_events' => '\Zoom\Api\Model\AccountPlansPlanZoomEventsInner[]',
        'plan_zoom_rooms' => '\Zoom\Api\Model\AccountPlansPlanZoomRooms',
        'plan_sdk_cmr' => '\Zoom\Api\Model\AccountPlansPlanSdkCmrInner[]',
        'plan_whiteboard' => '\Zoom\Api\Model\AccountPlansPlanWhiteboard',
        'plan_bundle' => '\Zoom\Api\Model\AccountPlansPlanBundleInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'plan_audio' => null,
        'plan_base' => null,
        'plan_large_meeting' => null,
        'plan_phone' => null,
        'plan_recording' => null,
        'plan_room_connector' => null,
        'plan_webinar' => null,
        'plan_zoom_events' => null,
        'plan_zoom_rooms' => null,
        'plan_sdk_cmr' => null,
        'plan_whiteboard' => null,
        'plan_bundle' => null
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
        'plan_audio' => 'plan_audio',
        'plan_base' => 'plan_base',
        'plan_large_meeting' => 'plan_large_meeting',
        'plan_phone' => 'plan_phone',
        'plan_recording' => 'plan_recording',
        'plan_room_connector' => 'plan_room_connector',
        'plan_webinar' => 'plan_webinar',
        'plan_zoom_events' => 'plan_zoom_events',
        'plan_zoom_rooms' => 'plan_zoom_rooms',
        'plan_sdk_cmr' => 'plan_sdk_cmr',
        'plan_whiteboard' => 'plan_whiteboard',
        'plan_bundle' => 'plan_bundle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plan_audio' => 'setPlanAudio',
        'plan_base' => 'setPlanBase',
        'plan_large_meeting' => 'setPlanLargeMeeting',
        'plan_phone' => 'setPlanPhone',
        'plan_recording' => 'setPlanRecording',
        'plan_room_connector' => 'setPlanRoomConnector',
        'plan_webinar' => 'setPlanWebinar',
        'plan_zoom_events' => 'setPlanZoomEvents',
        'plan_zoom_rooms' => 'setPlanZoomRooms',
        'plan_sdk_cmr' => 'setPlanSdkCmr',
        'plan_whiteboard' => 'setPlanWhiteboard',
        'plan_bundle' => 'setPlanBundle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plan_audio' => 'getPlanAudio',
        'plan_base' => 'getPlanBase',
        'plan_large_meeting' => 'getPlanLargeMeeting',
        'plan_phone' => 'getPlanPhone',
        'plan_recording' => 'getPlanRecording',
        'plan_room_connector' => 'getPlanRoomConnector',
        'plan_webinar' => 'getPlanWebinar',
        'plan_zoom_events' => 'getPlanZoomEvents',
        'plan_zoom_rooms' => 'getPlanZoomRooms',
        'plan_sdk_cmr' => 'getPlanSdkCmr',
        'plan_whiteboard' => 'getPlanWhiteboard',
        'plan_bundle' => 'getPlanBundle'
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
        $this->container['plan_audio'] = $data['plan_audio'] ?? null;
        $this->container['plan_base'] = $data['plan_base'] ?? null;
        $this->container['plan_large_meeting'] = $data['plan_large_meeting'] ?? null;
        $this->container['plan_phone'] = $data['plan_phone'] ?? null;
        $this->container['plan_recording'] = $data['plan_recording'] ?? null;
        $this->container['plan_room_connector'] = $data['plan_room_connector'] ?? null;
        $this->container['plan_webinar'] = $data['plan_webinar'] ?? null;
        $this->container['plan_zoom_events'] = $data['plan_zoom_events'] ?? null;
        $this->container['plan_zoom_rooms'] = $data['plan_zoom_rooms'] ?? null;
        $this->container['plan_sdk_cmr'] = $data['plan_sdk_cmr'] ?? null;
        $this->container['plan_whiteboard'] = $data['plan_whiteboard'] ?? null;
        $this->container['plan_bundle'] = $data['plan_bundle'] ?? null;
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
     * Gets plan_audio
     *
     * @return \Zoom\Api\Model\AccountPlansPlanAudio|null
     */
    public function getPlanAudio()
    {
        return $this->container['plan_audio'];
    }

    /**
     * Sets plan_audio
     *
     * @param \Zoom\Api\Model\AccountPlansPlanAudio|null $plan_audio plan_audio
     *
     * @return self
     */
    public function setPlanAudio($plan_audio)
    {
        $this->container['plan_audio'] = $plan_audio;

        return $this;
    }

    /**
     * Gets plan_base
     *
     * @return \Zoom\Api\Model\AccountPlanBaseRequired
     */
    public function getPlanBase()
    {
        return $this->container['plan_base'];
    }

    /**
     * Sets plan_base
     *
     * @param \Zoom\Api\Model\AccountPlanBaseRequired $plan_base plan_base
     *
     * @return self
     */
    public function setPlanBase($plan_base)
    {
        $this->container['plan_base'] = $plan_base;

        return $this;
    }

    /**
     * Gets plan_large_meeting
     *
     * @return \Zoom\Api\Model\AccountPlansPlanLargeMeetingInner[]|null
     */
    public function getPlanLargeMeeting()
    {
        return $this->container['plan_large_meeting'];
    }

    /**
     * Sets plan_large_meeting
     *
     * @param \Zoom\Api\Model\AccountPlansPlanLargeMeetingInner[]|null $plan_large_meeting Information about the account's Large Meeting plan.
     *
     * @return self
     */
    public function setPlanLargeMeeting($plan_large_meeting)
    {
        $this->container['plan_large_meeting'] = $plan_large_meeting;

        return $this;
    }

    /**
     * Gets plan_phone
     *
     * @return \Zoom\Api\Model\PhonePlan|null
     */
    public function getPlanPhone()
    {
        return $this->container['plan_phone'];
    }

    /**
     * Sets plan_phone
     *
     * @param \Zoom\Api\Model\PhonePlan|null $plan_phone plan_phone
     *
     * @return self
     */
    public function setPlanPhone($plan_phone)
    {
        $this->container['plan_phone'] = $plan_phone;

        return $this;
    }

    /**
     * Gets plan_recording
     *
     * @return string|null
     */
    public function getPlanRecording()
    {
        return $this->container['plan_recording'];
    }

    /**
     * Sets plan_recording
     *
     * @param string|null $plan_recording The account's [Cloud Recording plan](https://marketplace.zoom.us/docs/api-reference/other-references/plans#cloud-recording-plans).
     *
     * @return self
     */
    public function setPlanRecording($plan_recording)
    {
        $this->container['plan_recording'] = $plan_recording;

        return $this;
    }

    /**
     * Gets plan_room_connector
     *
     * @return \Zoom\Api\Model\AccountPlansPlanRoomConnectorInner[]|null
     */
    public function getPlanRoomConnector()
    {
        return $this->container['plan_room_connector'];
    }

    /**
     * Sets plan_room_connector
     *
     * @param \Zoom\Api\Model\AccountPlansPlanRoomConnectorInner[]|null $plan_room_connector plan_room_connector
     *
     * @return self
     */
    public function setPlanRoomConnector($plan_room_connector)
    {
        $this->container['plan_room_connector'] = $plan_room_connector;

        return $this;
    }

    /**
     * Gets plan_webinar
     *
     * @return \Zoom\Api\Model\AccountPlansPlanWebinarInner[]|null
     */
    public function getPlanWebinar()
    {
        return $this->container['plan_webinar'];
    }

    /**
     * Sets plan_webinar
     *
     * @param \Zoom\Api\Model\AccountPlansPlanWebinarInner[]|null $plan_webinar Information about the account's Webinar plan.
     *
     * @return self
     */
    public function setPlanWebinar($plan_webinar)
    {
        $this->container['plan_webinar'] = $plan_webinar;

        return $this;
    }

    /**
     * Gets plan_zoom_events
     *
     * @return \Zoom\Api\Model\AccountPlansPlanZoomEventsInner[]|null
     */
    public function getPlanZoomEvents()
    {
        return $this->container['plan_zoom_events'];
    }

    /**
     * Sets plan_zoom_events
     *
     * @param \Zoom\Api\Model\AccountPlansPlanZoomEventsInner[]|null $plan_zoom_events Information about the account's Zoom Events plan.
     *
     * @return self
     */
    public function setPlanZoomEvents($plan_zoom_events)
    {
        $this->container['plan_zoom_events'] = $plan_zoom_events;

        return $this;
    }

    /**
     * Gets plan_zoom_rooms
     *
     * @return \Zoom\Api\Model\AccountPlansPlanZoomRooms|null
     */
    public function getPlanZoomRooms()
    {
        return $this->container['plan_zoom_rooms'];
    }

    /**
     * Sets plan_zoom_rooms
     *
     * @param \Zoom\Api\Model\AccountPlansPlanZoomRooms|null $plan_zoom_rooms plan_zoom_rooms
     *
     * @return self
     */
    public function setPlanZoomRooms($plan_zoom_rooms)
    {
        $this->container['plan_zoom_rooms'] = $plan_zoom_rooms;

        return $this;
    }

    /**
     * Gets plan_sdk_cmr
     *
     * @return \Zoom\Api\Model\AccountPlansPlanSdkCmrInner[]|null
     */
    public function getPlanSdkCmr()
    {
        return $this->container['plan_sdk_cmr'];
    }

    /**
     * Sets plan_sdk_cmr
     *
     * @param \Zoom\Api\Model\AccountPlansPlanSdkCmrInner[]|null $plan_sdk_cmr Information about the account's Zoom Video SDK plan.
     *
     * @return self
     */
    public function setPlanSdkCmr($plan_sdk_cmr)
    {
        $this->container['plan_sdk_cmr'] = $plan_sdk_cmr;

        return $this;
    }

    /**
     * Gets plan_whiteboard
     *
     * @return \Zoom\Api\Model\AccountPlansPlanWhiteboard|null
     */
    public function getPlanWhiteboard()
    {
        return $this->container['plan_whiteboard'];
    }

    /**
     * Sets plan_whiteboard
     *
     * @param \Zoom\Api\Model\AccountPlansPlanWhiteboard|null $plan_whiteboard plan_whiteboard
     *
     * @return self
     */
    public function setPlanWhiteboard($plan_whiteboard)
    {
        $this->container['plan_whiteboard'] = $plan_whiteboard;

        return $this;
    }

    /**
     * Gets plan_bundle
     *
     * @return \Zoom\Api\Model\AccountPlansPlanBundleInner[]|null
     */
    public function getPlanBundle()
    {
        return $this->container['plan_bundle'];
    }

    /**
     * Sets plan_bundle
     *
     * @param \Zoom\Api\Model\AccountPlansPlanBundleInner[]|null $plan_bundle Information about the account's Zoom Bundle plan.
     *
     * @return self
     */
    public function setPlanBundle($plan_bundle)
    {
        $this->container['plan_bundle'] = $plan_bundle;

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


