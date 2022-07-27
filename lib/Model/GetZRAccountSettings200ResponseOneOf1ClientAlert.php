<?php
/**
 * GetZRAccountSettings200ResponseOneOf1ClientAlert
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
 * GetZRAccountSettings200ResponseOneOf1ClientAlert Class Doc Comment
 *
 * @category Class
 * @description The Client Alert Settings section includes alerts that display on the TV screen of the Zoom Room. Disable these settings if you have deliberately disconnected one or more peripheral devices or have never enabled them.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetZRAccountSettings200ResponseOneOf1ClientAlert implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getZRAccountSettings_200_response_oneOf_1_client_alert';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'detect_bluetooth_microphone_error_alert' => 'bool',
        'detect_bluetooth_speaker_error_alert' => 'bool',
        'detect_camera_error_alert' => 'bool',
        'detect_microphone_error_alert' => 'bool',
        'detect_speaker_error_alert' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'detect_bluetooth_microphone_error_alert' => null,
        'detect_bluetooth_speaker_error_alert' => null,
        'detect_camera_error_alert' => null,
        'detect_microphone_error_alert' => null,
        'detect_speaker_error_alert' => null
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
        'detect_bluetooth_microphone_error_alert' => 'detect_bluetooth_microphone_error_alert',
        'detect_bluetooth_speaker_error_alert' => 'detect_bluetooth_speaker_error_alert',
        'detect_camera_error_alert' => 'detect_camera_error_alert',
        'detect_microphone_error_alert' => 'detect_microphone_error_alert',
        'detect_speaker_error_alert' => 'detect_speaker_error_alert'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'detect_bluetooth_microphone_error_alert' => 'setDetectBluetoothMicrophoneErrorAlert',
        'detect_bluetooth_speaker_error_alert' => 'setDetectBluetoothSpeakerErrorAlert',
        'detect_camera_error_alert' => 'setDetectCameraErrorAlert',
        'detect_microphone_error_alert' => 'setDetectMicrophoneErrorAlert',
        'detect_speaker_error_alert' => 'setDetectSpeakerErrorAlert'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'detect_bluetooth_microphone_error_alert' => 'getDetectBluetoothMicrophoneErrorAlert',
        'detect_bluetooth_speaker_error_alert' => 'getDetectBluetoothSpeakerErrorAlert',
        'detect_camera_error_alert' => 'getDetectCameraErrorAlert',
        'detect_microphone_error_alert' => 'getDetectMicrophoneErrorAlert',
        'detect_speaker_error_alert' => 'getDetectSpeakerErrorAlert'
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
        $this->container['detect_bluetooth_microphone_error_alert'] = $data['detect_bluetooth_microphone_error_alert'] ?? null;
        $this->container['detect_bluetooth_speaker_error_alert'] = $data['detect_bluetooth_speaker_error_alert'] ?? null;
        $this->container['detect_camera_error_alert'] = $data['detect_camera_error_alert'] ?? null;
        $this->container['detect_microphone_error_alert'] = $data['detect_microphone_error_alert'] ?? null;
        $this->container['detect_speaker_error_alert'] = $data['detect_speaker_error_alert'] ?? null;
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
     * Gets detect_bluetooth_microphone_error_alert
     *
     * @return bool|null
     */
    public function getDetectBluetoothMicrophoneErrorAlert()
    {
        return $this->container['detect_bluetooth_microphone_error_alert'];
    }

    /**
     * Sets detect_bluetooth_microphone_error_alert
     *
     * @param bool|null $detect_bluetooth_microphone_error_alert Display an alert message when an issue is detected with a bluetooth microphone.
     *
     * @return self
     */
    public function setDetectBluetoothMicrophoneErrorAlert($detect_bluetooth_microphone_error_alert)
    {
        $this->container['detect_bluetooth_microphone_error_alert'] = $detect_bluetooth_microphone_error_alert;

        return $this;
    }

    /**
     * Gets detect_bluetooth_speaker_error_alert
     *
     * @return bool|null
     */
    public function getDetectBluetoothSpeakerErrorAlert()
    {
        return $this->container['detect_bluetooth_speaker_error_alert'];
    }

    /**
     * Sets detect_bluetooth_speaker_error_alert
     *
     * @param bool|null $detect_bluetooth_speaker_error_alert Display an alert message when an issue is detected with a bluetooth speaker.
     *
     * @return self
     */
    public function setDetectBluetoothSpeakerErrorAlert($detect_bluetooth_speaker_error_alert)
    {
        $this->container['detect_bluetooth_speaker_error_alert'] = $detect_bluetooth_speaker_error_alert;

        return $this;
    }

    /**
     * Gets detect_camera_error_alert
     *
     * @return bool|null
     */
    public function getDetectCameraErrorAlert()
    {
        return $this->container['detect_camera_error_alert'];
    }

    /**
     * Sets detect_camera_error_alert
     *
     * @param bool|null $detect_camera_error_alert Display an alert message when an issue is detected with a camera.
     *
     * @return self
     */
    public function setDetectCameraErrorAlert($detect_camera_error_alert)
    {
        $this->container['detect_camera_error_alert'] = $detect_camera_error_alert;

        return $this;
    }

    /**
     * Gets detect_microphone_error_alert
     *
     * @return bool|null
     */
    public function getDetectMicrophoneErrorAlert()
    {
        return $this->container['detect_microphone_error_alert'];
    }

    /**
     * Sets detect_microphone_error_alert
     *
     * @param bool|null $detect_microphone_error_alert Display an alert message when an issue is detected with microphone.
     *
     * @return self
     */
    public function setDetectMicrophoneErrorAlert($detect_microphone_error_alert)
    {
        $this->container['detect_microphone_error_alert'] = $detect_microphone_error_alert;

        return $this;
    }

    /**
     * Gets detect_speaker_error_alert
     *
     * @return bool|null
     */
    public function getDetectSpeakerErrorAlert()
    {
        return $this->container['detect_speaker_error_alert'];
    }

    /**
     * Sets detect_speaker_error_alert
     *
     * @param bool|null $detect_speaker_error_alert Display an alert message when an issue is detected with a speaker.
     *
     * @return self
     */
    public function setDetectSpeakerErrorAlert($detect_speaker_error_alert)
    {
        $this->container['detect_speaker_error_alert'] = $detect_speaker_error_alert;

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


