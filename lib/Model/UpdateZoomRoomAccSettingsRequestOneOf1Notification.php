<?php
/**
 * UpdateZoomRoomAccSettingsRequestOneOf1Notification
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
 * UpdateZoomRoomAccSettingsRequestOneOf1Notification Class Doc Comment
 *
 * @category Class
 * @description [Notifications Settings](https://support.zoom.us/hc/en-us/articles/205394099-Zoom-Room-Alerts#h_b430b5f2-5150-4522-9c96-c77f22ab70bc) includes the circumstances in which the room sends an email alert to the support team to notify them of a potentially urgent issue. These issues can affect the operation of the room, but do not display on the TV screen. The email alert is sent to the email address specified in the Notification Email Recipients section.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateZoomRoomAccSettingsRequestOneOf1Notification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateZoomRoomAccSettings_request_oneOf_1_notification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio_meet_usability_threshold' => 'bool',
        'audio_not_meet_usability_threshold' => 'bool',
        'battery_is_charging' => 'bool',
        'battery_low_and_not_charging' => 'bool',
        'battery_percentage' => 'string',
        'controller_scheduling_disconnected' => 'bool',
        'controller_scheduling_reconnected' => 'bool',
        'cpu_usage_high_detected' => 'bool',
        'mic_speaker_camera_disconnected' => 'bool',
        'mic_speaker_camera_reconnected' => 'bool',
        'network_stable_detected' => 'bool',
        'network_unstable_detected' => 'bool',
        'sip_registration_failed' => 'bool',
        'sip_registration_re_enabled' => 'bool',
        'zoom_room_come_back_online' => 'bool',
        'zoom_room_display_disconnected' => 'bool',
        'zoom_room_offline' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audio_meet_usability_threshold' => null,
        'audio_not_meet_usability_threshold' => null,
        'battery_is_charging' => null,
        'battery_low_and_not_charging' => null,
        'battery_percentage' => null,
        'controller_scheduling_disconnected' => null,
        'controller_scheduling_reconnected' => null,
        'cpu_usage_high_detected' => null,
        'mic_speaker_camera_disconnected' => null,
        'mic_speaker_camera_reconnected' => null,
        'network_stable_detected' => null,
        'network_unstable_detected' => null,
        'sip_registration_failed' => null,
        'sip_registration_re_enabled' => null,
        'zoom_room_come_back_online' => null,
        'zoom_room_display_disconnected' => null,
        'zoom_room_offline' => null
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
        'audio_meet_usability_threshold' => 'audio_meet_usability_threshold',
        'audio_not_meet_usability_threshold' => 'audio_not_meet_usability_threshold',
        'battery_is_charging' => 'battery_is_charging',
        'battery_low_and_not_charging' => 'battery_low_and_not_charging',
        'battery_percentage' => 'battery_percentage',
        'controller_scheduling_disconnected' => 'controller_scheduling_disconnected',
        'controller_scheduling_reconnected' => 'controller_scheduling_reconnected',
        'cpu_usage_high_detected' => 'cpu_usage_high_detected',
        'mic_speaker_camera_disconnected' => 'mic_speaker_camera_disconnected',
        'mic_speaker_camera_reconnected' => 'mic_speaker_camera_reconnected',
        'network_stable_detected' => 'network_stable_detected',
        'network_unstable_detected' => 'network_unstable_detected',
        'sip_registration_failed' => 'sip_registration_failed',
        'sip_registration_re_enabled' => 'sip_registration_re_enabled',
        'zoom_room_come_back_online' => 'zoom_room_come_back_online',
        'zoom_room_display_disconnected' => 'zoom_room_display_disconnected',
        'zoom_room_offline' => 'zoom_room_offline'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_meet_usability_threshold' => 'setAudioMeetUsabilityThreshold',
        'audio_not_meet_usability_threshold' => 'setAudioNotMeetUsabilityThreshold',
        'battery_is_charging' => 'setBatteryIsCharging',
        'battery_low_and_not_charging' => 'setBatteryLowAndNotCharging',
        'battery_percentage' => 'setBatteryPercentage',
        'controller_scheduling_disconnected' => 'setControllerSchedulingDisconnected',
        'controller_scheduling_reconnected' => 'setControllerSchedulingReconnected',
        'cpu_usage_high_detected' => 'setCpuUsageHighDetected',
        'mic_speaker_camera_disconnected' => 'setMicSpeakerCameraDisconnected',
        'mic_speaker_camera_reconnected' => 'setMicSpeakerCameraReconnected',
        'network_stable_detected' => 'setNetworkStableDetected',
        'network_unstable_detected' => 'setNetworkUnstableDetected',
        'sip_registration_failed' => 'setSipRegistrationFailed',
        'sip_registration_re_enabled' => 'setSipRegistrationReEnabled',
        'zoom_room_come_back_online' => 'setZoomRoomComeBackOnline',
        'zoom_room_display_disconnected' => 'setZoomRoomDisplayDisconnected',
        'zoom_room_offline' => 'setZoomRoomOffline'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_meet_usability_threshold' => 'getAudioMeetUsabilityThreshold',
        'audio_not_meet_usability_threshold' => 'getAudioNotMeetUsabilityThreshold',
        'battery_is_charging' => 'getBatteryIsCharging',
        'battery_low_and_not_charging' => 'getBatteryLowAndNotCharging',
        'battery_percentage' => 'getBatteryPercentage',
        'controller_scheduling_disconnected' => 'getControllerSchedulingDisconnected',
        'controller_scheduling_reconnected' => 'getControllerSchedulingReconnected',
        'cpu_usage_high_detected' => 'getCpuUsageHighDetected',
        'mic_speaker_camera_disconnected' => 'getMicSpeakerCameraDisconnected',
        'mic_speaker_camera_reconnected' => 'getMicSpeakerCameraReconnected',
        'network_stable_detected' => 'getNetworkStableDetected',
        'network_unstable_detected' => 'getNetworkUnstableDetected',
        'sip_registration_failed' => 'getSipRegistrationFailed',
        'sip_registration_re_enabled' => 'getSipRegistrationReEnabled',
        'zoom_room_come_back_online' => 'getZoomRoomComeBackOnline',
        'zoom_room_display_disconnected' => 'getZoomRoomDisplayDisconnected',
        'zoom_room_offline' => 'getZoomRoomOffline'
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
        $this->container['audio_meet_usability_threshold'] = $data['audio_meet_usability_threshold'] ?? null;
        $this->container['audio_not_meet_usability_threshold'] = $data['audio_not_meet_usability_threshold'] ?? null;
        $this->container['battery_is_charging'] = $data['battery_is_charging'] ?? null;
        $this->container['battery_low_and_not_charging'] = $data['battery_low_and_not_charging'] ?? null;
        $this->container['battery_percentage'] = $data['battery_percentage'] ?? null;
        $this->container['controller_scheduling_disconnected'] = $data['controller_scheduling_disconnected'] ?? null;
        $this->container['controller_scheduling_reconnected'] = $data['controller_scheduling_reconnected'] ?? null;
        $this->container['cpu_usage_high_detected'] = $data['cpu_usage_high_detected'] ?? null;
        $this->container['mic_speaker_camera_disconnected'] = $data['mic_speaker_camera_disconnected'] ?? null;
        $this->container['mic_speaker_camera_reconnected'] = $data['mic_speaker_camera_reconnected'] ?? null;
        $this->container['network_stable_detected'] = $data['network_stable_detected'] ?? null;
        $this->container['network_unstable_detected'] = $data['network_unstable_detected'] ?? null;
        $this->container['sip_registration_failed'] = $data['sip_registration_failed'] ?? null;
        $this->container['sip_registration_re_enabled'] = $data['sip_registration_re_enabled'] ?? null;
        $this->container['zoom_room_come_back_online'] = $data['zoom_room_come_back_online'] ?? null;
        $this->container['zoom_room_display_disconnected'] = $data['zoom_room_display_disconnected'] ?? null;
        $this->container['zoom_room_offline'] = $data['zoom_room_offline'] ?? null;
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
     * Gets audio_meet_usability_threshold
     *
     * @return bool|null
     */
    public function getAudioMeetUsabilityThreshold()
    {
        return $this->container['audio_meet_usability_threshold'];
    }

    /**
     * Sets audio_meet_usability_threshold
     *
     * @param bool|null $audio_meet_usability_threshold Send an alert when the audio echo test result meets usability threshold.
     *
     * @return self
     */
    public function setAudioMeetUsabilityThreshold($audio_meet_usability_threshold)
    {
        $this->container['audio_meet_usability_threshold'] = $audio_meet_usability_threshold;

        return $this;
    }

    /**
     * Gets audio_not_meet_usability_threshold
     *
     * @return bool|null
     */
    public function getAudioNotMeetUsabilityThreshold()
    {
        return $this->container['audio_not_meet_usability_threshold'];
    }

    /**
     * Sets audio_not_meet_usability_threshold
     *
     * @param bool|null $audio_not_meet_usability_threshold Send an alert when the audio echo test result does not meet usability threshold.
     *
     * @return self
     */
    public function setAudioNotMeetUsabilityThreshold($audio_not_meet_usability_threshold)
    {
        $this->container['audio_not_meet_usability_threshold'] = $audio_not_meet_usability_threshold;

        return $this;
    }

    /**
     * Gets battery_is_charging
     *
     * @return bool|null
     */
    public function getBatteryIsCharging()
    {
        return $this->container['battery_is_charging'];
    }

    /**
     * Sets battery_is_charging
     *
     * @param bool|null $battery_is_charging Send an alert when the battery starts charging.
     *
     * @return self
     */
    public function setBatteryIsCharging($battery_is_charging)
    {
        $this->container['battery_is_charging'] = $battery_is_charging;

        return $this;
    }

    /**
     * Gets battery_low_and_not_charging
     *
     * @return bool|null
     */
    public function getBatteryLowAndNotCharging()
    {
        return $this->container['battery_low_and_not_charging'];
    }

    /**
     * Sets battery_low_and_not_charging
     *
     * @param bool|null $battery_low_and_not_charging Send an alert when the battery of the controller or the scheduling display is low (at 20%) and is not being charged.
     *
     * @return self
     */
    public function setBatteryLowAndNotCharging($battery_low_and_not_charging)
    {
        $this->container['battery_low_and_not_charging'] = $battery_low_and_not_charging;

        return $this;
    }

    /**
     * Gets battery_percentage
     *
     * @return string|null
     */
    public function getBatteryPercentage()
    {
        return $this->container['battery_percentage'];
    }

    /**
     * Sets battery_percentage
     *
     * @param string|null $battery_percentage Specify a percentage so that an alert is sent when the battery is less than the {battery_percentage} that you specified.
     *
     * @return self
     */
    public function setBatteryPercentage($battery_percentage)
    {
        $this->container['battery_percentage'] = $battery_percentage;

        return $this;
    }

    /**
     * Gets controller_scheduling_disconnected
     *
     * @return bool|null
     */
    public function getControllerSchedulingDisconnected()
    {
        return $this->container['controller_scheduling_disconnected'];
    }

    /**
     * Sets controller_scheduling_disconnected
     *
     * @param bool|null $controller_scheduling_disconnected Send an alert when the connection to the Controller or Scheduling Display cannot be detected.
     *
     * @return self
     */
    public function setControllerSchedulingDisconnected($controller_scheduling_disconnected)
    {
        $this->container['controller_scheduling_disconnected'] = $controller_scheduling_disconnected;

        return $this;
    }

    /**
     * Gets controller_scheduling_reconnected
     *
     * @return bool|null
     */
    public function getControllerSchedulingReconnected()
    {
        return $this->container['controller_scheduling_reconnected'];
    }

    /**
     * Sets controller_scheduling_reconnected
     *
     * @param bool|null $controller_scheduling_reconnected Send an alert when the Controller or Scheduling Display can be detected again.
     *
     * @return self
     */
    public function setControllerSchedulingReconnected($controller_scheduling_reconnected)
    {
        $this->container['controller_scheduling_reconnected'] = $controller_scheduling_reconnected;

        return $this;
    }

    /**
     * Gets cpu_usage_high_detected
     *
     * @return bool|null
     */
    public function getCpuUsageHighDetected()
    {
        return $this->container['cpu_usage_high_detected'];
    }

    /**
     * Sets cpu_usage_high_detected
     *
     * @param bool|null $cpu_usage_high_detected Send an alert when CPU usage is above 90%.
     *
     * @return self
     */
    public function setCpuUsageHighDetected($cpu_usage_high_detected)
    {
        $this->container['cpu_usage_high_detected'] = $cpu_usage_high_detected;

        return $this;
    }

    /**
     * Gets mic_speaker_camera_disconnected
     *
     * @return bool|null
     */
    public function getMicSpeakerCameraDisconnected()
    {
        return $this->container['mic_speaker_camera_disconnected'];
    }

    /**
     * Sets mic_speaker_camera_disconnected
     *
     * @param bool|null $mic_speaker_camera_disconnected Send an alert when the mic, speaker or camera is disconnected in the Zoom Room.
     *
     * @return self
     */
    public function setMicSpeakerCameraDisconnected($mic_speaker_camera_disconnected)
    {
        $this->container['mic_speaker_camera_disconnected'] = $mic_speaker_camera_disconnected;

        return $this;
    }

    /**
     * Gets mic_speaker_camera_reconnected
     *
     * @return bool|null
     */
    public function getMicSpeakerCameraReconnected()
    {
        return $this->container['mic_speaker_camera_reconnected'];
    }

    /**
     * Sets mic_speaker_camera_reconnected
     *
     * @param bool|null $mic_speaker_camera_reconnected Send an alert when the mic, speaker or camera is reconnected.
     *
     * @return self
     */
    public function setMicSpeakerCameraReconnected($mic_speaker_camera_reconnected)
    {
        $this->container['mic_speaker_camera_reconnected'] = $mic_speaker_camera_reconnected;

        return $this;
    }

    /**
     * Gets network_stable_detected
     *
     * @return bool|null
     */
    public function getNetworkStableDetected()
    {
        return $this->container['network_stable_detected'];
    }

    /**
     * Sets network_stable_detected
     *
     * @param bool|null $network_stable_detected Send an alert when the network is stable.
     *
     * @return self
     */
    public function setNetworkStableDetected($network_stable_detected)
    {
        $this->container['network_stable_detected'] = $network_stable_detected;

        return $this;
    }

    /**
     * Gets network_unstable_detected
     *
     * @return bool|null
     */
    public function getNetworkUnstableDetected()
    {
        return $this->container['network_unstable_detected'];
    }

    /**
     * Sets network_unstable_detected
     *
     * @param bool|null $network_unstable_detected Send an alert when low bandwidth network is detected
     *
     * @return self
     */
    public function setNetworkUnstableDetected($network_unstable_detected)
    {
        $this->container['network_unstable_detected'] = $network_unstable_detected;

        return $this;
    }

    /**
     * Gets sip_registration_failed
     *
     * @return bool|null
     */
    public function getSipRegistrationFailed()
    {
        return $this->container['sip_registration_failed'];
    }

    /**
     * Sets sip_registration_failed
     *
     * @param bool|null $sip_registration_failed Send an alert when SIP registration stops working.
     *
     * @return self
     */
    public function setSipRegistrationFailed($sip_registration_failed)
    {
        $this->container['sip_registration_failed'] = $sip_registration_failed;

        return $this;
    }

    /**
     * Gets sip_registration_re_enabled
     *
     * @return bool|null
     */
    public function getSipRegistrationReEnabled()
    {
        return $this->container['sip_registration_re_enabled'];
    }

    /**
     * Sets sip_registration_re_enabled
     *
     * @param bool|null $sip_registration_re_enabled Send an alert after the SIP registration is re-enabled.
     *
     * @return self
     */
    public function setSipRegistrationReEnabled($sip_registration_re_enabled)
    {
        $this->container['sip_registration_re_enabled'] = $sip_registration_re_enabled;

        return $this;
    }

    /**
     * Gets zoom_room_come_back_online
     *
     * @return bool|null
     */
    public function getZoomRoomComeBackOnline()
    {
        return $this->container['zoom_room_come_back_online'];
    }

    /**
     * Sets zoom_room_come_back_online
     *
     * @param bool|null $zoom_room_come_back_online Send an alert when the Zoom Room is online after previously being offline.
     *
     * @return self
     */
    public function setZoomRoomComeBackOnline($zoom_room_come_back_online)
    {
        $this->container['zoom_room_come_back_online'] = $zoom_room_come_back_online;

        return $this;
    }

    /**
     * Gets zoom_room_display_disconnected
     *
     * @return bool|null
     */
    public function getZoomRoomDisplayDisconnected()
    {
        return $this->container['zoom_room_display_disconnected'];
    }

    /**
     * Sets zoom_room_display_disconnected
     *
     * @param bool|null $zoom_room_display_disconnected Send an alert when the TV display is disconnected
     *
     * @return self
     */
    public function setZoomRoomDisplayDisconnected($zoom_room_display_disconnected)
    {
        $this->container['zoom_room_display_disconnected'] = $zoom_room_display_disconnected;

        return $this;
    }

    /**
     * Gets zoom_room_offline
     *
     * @return bool|null
     */
    public function getZoomRoomOffline()
    {
        return $this->container['zoom_room_offline'];
    }

    /**
     * Sets zoom_room_offline
     *
     * @param bool|null $zoom_room_offline Send an alert when the machine hosting the Zoom Room application has a network issue or cannot connect with the Controller.
     *
     * @return self
     */
    public function setZoomRoomOffline($zoom_room_offline)
    {
        $this->container['zoom_room_offline'] = $zoom_room_offline;

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


