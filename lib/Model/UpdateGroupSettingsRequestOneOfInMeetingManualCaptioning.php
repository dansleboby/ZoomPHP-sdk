<?php
/**
 * UpdateGroupSettingsRequestOneOfInMeetingManualCaptioning
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
 * UpdateGroupSettingsRequestOneOfInMeetingManualCaptioning Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateGroupSettingsRequestOneOfInMeetingManualCaptioning implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateGroupSettings_request_oneOf_in_meeting_manual_captioning';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_to_type' => 'bool',
        'auto_generated_captions' => 'bool',
        'full_transcript' => 'bool',
        'manual_captions' => 'bool',
        'save_captions' => 'bool',
        'third_party_captioning_service' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_to_type' => null,
        'auto_generated_captions' => null,
        'full_transcript' => null,
        'manual_captions' => null,
        'save_captions' => null,
        'third_party_captioning_service' => null
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
        'allow_to_type' => 'allow_to_type',
        'auto_generated_captions' => 'auto_generated_captions',
        'full_transcript' => 'full_transcript',
        'manual_captions' => 'manual_captions',
        'save_captions' => 'save_captions',
        'third_party_captioning_service' => 'third_party_captioning_service'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_to_type' => 'setAllowToType',
        'auto_generated_captions' => 'setAutoGeneratedCaptions',
        'full_transcript' => 'setFullTranscript',
        'manual_captions' => 'setManualCaptions',
        'save_captions' => 'setSaveCaptions',
        'third_party_captioning_service' => 'setThirdPartyCaptioningService'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_to_type' => 'getAllowToType',
        'auto_generated_captions' => 'getAutoGeneratedCaptions',
        'full_transcript' => 'getFullTranscript',
        'manual_captions' => 'getManualCaptions',
        'save_captions' => 'getSaveCaptions',
        'third_party_captioning_service' => 'getThirdPartyCaptioningService'
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
        $this->container['allow_to_type'] = $data['allow_to_type'] ?? null;
        $this->container['auto_generated_captions'] = $data['auto_generated_captions'] ?? null;
        $this->container['full_transcript'] = $data['full_transcript'] ?? null;
        $this->container['manual_captions'] = $data['manual_captions'] ?? null;
        $this->container['save_captions'] = $data['save_captions'] ?? null;
        $this->container['third_party_captioning_service'] = $data['third_party_captioning_service'] ?? null;
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
     * Gets allow_to_type
     *
     * @return bool|null
     */
    public function getAllowToType()
    {
        return $this->container['allow_to_type'];
    }

    /**
     * Sets allow_to_type
     *
     * @param bool|null $allow_to_type Allow host to type or assign a participant to type.
     *
     * @return self
     */
    public function setAllowToType($allow_to_type)
    {
        $this->container['allow_to_type'] = $allow_to_type;

        return $this;
    }

    /**
     * Gets auto_generated_captions
     *
     * @return bool|null
     */
    public function getAutoGeneratedCaptions()
    {
        return $this->container['auto_generated_captions'];
    }

    /**
     * Sets auto_generated_captions
     *
     * @param bool|null $auto_generated_captions Whether to allow a live transcription service to transcribe meetings.
     *
     * @return self
     */
    public function setAutoGeneratedCaptions($auto_generated_captions)
    {
        $this->container['auto_generated_captions'] = $auto_generated_captions;

        return $this;
    }

    /**
     * Gets full_transcript
     *
     * @return bool|null
     */
    public function getFullTranscript()
    {
        return $this->container['full_transcript'];
    }

    /**
     * Sets full_transcript
     *
     * @param bool|null $full_transcript Whether to allow the viewing of full transcripts in the in-meeting side panel.
     *
     * @return self
     */
    public function setFullTranscript($full_transcript)
    {
        $this->container['full_transcript'] = $full_transcript;

        return $this;
    }

    /**
     * Gets manual_captions
     *
     * @return bool|null
     */
    public function getManualCaptions()
    {
        return $this->container['manual_captions'];
    }

    /**
     * Sets manual_captions
     *
     * @param bool|null $manual_captions Allow host to type closed captions or assign a participant/third party device to add closed captions.
     *
     * @return self
     */
    public function setManualCaptions($manual_captions)
    {
        $this->container['manual_captions'] = $manual_captions;

        return $this;
    }

    /**
     * Gets save_captions
     *
     * @return bool|null
     */
    public function getSaveCaptions()
    {
        return $this->container['save_captions'];
    }

    /**
     * Sets save_captions
     *
     * @param bool|null $save_captions Whether participants can save closed captions or transcripts.
     *
     * @return self
     */
    public function setSaveCaptions($save_captions)
    {
        $this->container['save_captions'] = $save_captions;

        return $this;
    }

    /**
     * Gets third_party_captioning_service
     *
     * @return bool|null
     */
    public function getThirdPartyCaptioningService()
    {
        return $this->container['third_party_captioning_service'];
    }

    /**
     * Sets third_party_captioning_service
     *
     * @param bool|null $third_party_captioning_service Whether to allow the use of an API token to integrate with 3rd-party closed captioning services.
     *
     * @return self
     */
    public function setThirdPartyCaptioningService($third_party_captioning_service)
    {
        $this->container['third_party_captioning_service'] = $third_party_captioning_service;

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


