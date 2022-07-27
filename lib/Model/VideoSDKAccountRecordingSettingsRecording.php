<?php
/**
 * VideoSDKAccountRecordingSettingsRecording
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
 * VideoSDKAccountRecordingSettingsRecording Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VideoSDKAccountRecordingSettingsRecording implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Video_SDK_Account_Recording_Settings_recording';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cloud_recording' => 'bool',
        'record_speaker_view' => 'bool',
        'record_gallery_view' => 'bool',
        'record_audio_file' => 'bool',
        'save_chat_text' => 'bool',
        'show_timestamp' => 'bool',
        'recording_audio_transcript' => 'bool',
        'cloud_recording_download' => 'bool',
        'auto_delete_cmr' => 'bool',
        'auto_delete_cmr_days' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cloud_recording' => null,
        'record_speaker_view' => null,
        'record_gallery_view' => null,
        'record_audio_file' => null,
        'save_chat_text' => null,
        'show_timestamp' => null,
        'recording_audio_transcript' => null,
        'cloud_recording_download' => null,
        'auto_delete_cmr' => null,
        'auto_delete_cmr_days' => null
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
        'cloud_recording' => 'cloud_recording',
        'record_speaker_view' => 'record_speaker_view',
        'record_gallery_view' => 'record_gallery_view',
        'record_audio_file' => 'record_audio_file',
        'save_chat_text' => 'save_chat_text',
        'show_timestamp' => 'show_timestamp',
        'recording_audio_transcript' => 'recording_audio_transcript',
        'cloud_recording_download' => 'cloud_recording_download',
        'auto_delete_cmr' => 'auto_delete_cmr',
        'auto_delete_cmr_days' => 'auto_delete_cmr_days'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cloud_recording' => 'setCloudRecording',
        'record_speaker_view' => 'setRecordSpeakerView',
        'record_gallery_view' => 'setRecordGalleryView',
        'record_audio_file' => 'setRecordAudioFile',
        'save_chat_text' => 'setSaveChatText',
        'show_timestamp' => 'setShowTimestamp',
        'recording_audio_transcript' => 'setRecordingAudioTranscript',
        'cloud_recording_download' => 'setCloudRecordingDownload',
        'auto_delete_cmr' => 'setAutoDeleteCmr',
        'auto_delete_cmr_days' => 'setAutoDeleteCmrDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cloud_recording' => 'getCloudRecording',
        'record_speaker_view' => 'getRecordSpeakerView',
        'record_gallery_view' => 'getRecordGalleryView',
        'record_audio_file' => 'getRecordAudioFile',
        'save_chat_text' => 'getSaveChatText',
        'show_timestamp' => 'getShowTimestamp',
        'recording_audio_transcript' => 'getRecordingAudioTranscript',
        'cloud_recording_download' => 'getCloudRecordingDownload',
        'auto_delete_cmr' => 'getAutoDeleteCmr',
        'auto_delete_cmr_days' => 'getAutoDeleteCmrDays'
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

    public const AUTO_DELETE_CMR_DAYS_30 = 30;
    public const AUTO_DELETE_CMR_DAYS_60 = 60;
    public const AUTO_DELETE_CMR_DAYS_90 = 90;
    public const AUTO_DELETE_CMR_DAYS_120 = 120;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAutoDeleteCmrDaysAllowableValues()
    {
        return [
            self::AUTO_DELETE_CMR_DAYS_30,
            self::AUTO_DELETE_CMR_DAYS_60,
            self::AUTO_DELETE_CMR_DAYS_90,
            self::AUTO_DELETE_CMR_DAYS_120,
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
        $this->container['cloud_recording'] = $data['cloud_recording'] ?? null;
        $this->container['record_speaker_view'] = $data['record_speaker_view'] ?? null;
        $this->container['record_gallery_view'] = $data['record_gallery_view'] ?? null;
        $this->container['record_audio_file'] = $data['record_audio_file'] ?? null;
        $this->container['save_chat_text'] = $data['save_chat_text'] ?? null;
        $this->container['show_timestamp'] = $data['show_timestamp'] ?? null;
        $this->container['recording_audio_transcript'] = $data['recording_audio_transcript'] ?? null;
        $this->container['cloud_recording_download'] = $data['cloud_recording_download'] ?? null;
        $this->container['auto_delete_cmr'] = $data['auto_delete_cmr'] ?? null;
        $this->container['auto_delete_cmr_days'] = $data['auto_delete_cmr_days'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAutoDeleteCmrDaysAllowableValues();
        if (!is_null($this->container['auto_delete_cmr_days']) && !in_array($this->container['auto_delete_cmr_days'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'auto_delete_cmr_days', must be one of '%s'",
                $this->container['auto_delete_cmr_days'],
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
     * Gets cloud_recording
     *
     * @return bool|null
     */
    public function getCloudRecording()
    {
        return $this->container['cloud_recording'];
    }

    /**
     * Sets cloud_recording
     *
     * @param bool|null $cloud_recording Whether hosts can record and save meetings or webinars to the cloud.
     *
     * @return self
     */
    public function setCloudRecording($cloud_recording)
    {
        $this->container['cloud_recording'] = $cloud_recording;

        return $this;
    }

    /**
     * Gets record_speaker_view
     *
     * @return bool|null
     */
    public function getRecordSpeakerView()
    {
        return $this->container['record_speaker_view'];
    }

    /**
     * Sets record_speaker_view
     *
     * @param bool|null $record_speaker_view Whether to enable recording the [**Active Speaker** view](https://support.zoom.us/hc/en-us/articles/360025561091-Recording-layouts#h_5c001397-33d6-47fb-bb40-1a3f68401581) during screen sharing.
     *
     * @return self
     */
    public function setRecordSpeakerView($record_speaker_view)
    {
        $this->container['record_speaker_view'] = $record_speaker_view;

        return $this;
    }

    /**
     * Gets record_gallery_view
     *
     * @return bool|null
     */
    public function getRecordGalleryView()
    {
        return $this->container['record_gallery_view'];
    }

    /**
     * Sets record_gallery_view
     *
     * @param bool|null $record_gallery_view Whether to enable recording the [**Gallery** view](https://support.zoom.us/hc/en-us/articles/360025561091-Recording-layouts#h_889dc825-9d79-4139-b65d-e719669c546b) during screen sharing.
     *
     * @return self
     */
    public function setRecordGalleryView($record_gallery_view)
    {
        $this->container['record_gallery_view'] = $record_gallery_view;

        return $this;
    }

    /**
     * Gets record_audio_file
     *
     * @return bool|null
     */
    public function getRecordAudioFile()
    {
        return $this->container['record_audio_file'];
    }

    /**
     * Sets record_audio_file
     *
     * @param bool|null $record_audio_file Whether to record one audio file for all participants.
     *
     * @return self
     */
    public function setRecordAudioFile($record_audio_file)
    {
        $this->container['record_audio_file'] = $record_audio_file;

        return $this;
    }

    /**
     * Gets save_chat_text
     *
     * @return bool|null
     */
    public function getSaveChatText()
    {
        return $this->container['save_chat_text'];
    }

    /**
     * Sets save_chat_text
     *
     * @param bool|null $save_chat_text Whether meeting and webinar chat texts are saved.
     *
     * @return self
     */
    public function setSaveChatText($save_chat_text)
    {
        $this->container['save_chat_text'] = $save_chat_text;

        return $this;
    }

    /**
     * Gets show_timestamp
     *
     * @return bool|null
     */
    public function getShowTimestamp()
    {
        return $this->container['show_timestamp'];
    }

    /**
     * Sets show_timestamp
     *
     * @param bool|null $show_timestamp Whether timestamps are added to all meeting and webinar recordings.
     *
     * @return self
     */
    public function setShowTimestamp($show_timestamp)
    {
        $this->container['show_timestamp'] = $show_timestamp;

        return $this;
    }

    /**
     * Gets recording_audio_transcript
     *
     * @return bool|null
     */
    public function getRecordingAudioTranscript()
    {
        return $this->container['recording_audio_transcript'];
    }

    /**
     * Sets recording_audio_transcript
     *
     * @param bool|null $recording_audio_transcript Whether to enable the [**Audio transcription**](https://support.zoom.us/hc/en-us/articles/115004794983-Audio-transcription-for-cloud-recordings) feature.
     *
     * @return self
     */
    public function setRecordingAudioTranscript($recording_audio_transcript)
    {
        $this->container['recording_audio_transcript'] = $recording_audio_transcript;

        return $this;
    }

    /**
     * Gets cloud_recording_download
     *
     * @return bool|null
     */
    public function getCloudRecordingDownload()
    {
        return $this->container['cloud_recording_download'];
    }

    /**
     * Sets cloud_recording_download
     *
     * @param bool|null $cloud_recording_download Whether to enable the [**Cloud recording downloads**](https://support.zoom.us/hc/en-us/articles/360060240972-Managing-cloud-recording-settings) setting.
     *
     * @return self
     */
    public function setCloudRecordingDownload($cloud_recording_download)
    {
        $this->container['cloud_recording_download'] = $cloud_recording_download;

        return $this;
    }

    /**
     * Gets auto_delete_cmr
     *
     * @return bool|null
     */
    public function getAutoDeleteCmr()
    {
        return $this->container['auto_delete_cmr'];
    }

    /**
     * Sets auto_delete_cmr
     *
     * @param bool|null $auto_delete_cmr Whether cloud recordings are automatically deleted after a specific number of days.
     *
     * @return self
     */
    public function setAutoDeleteCmr($auto_delete_cmr)
    {
        $this->container['auto_delete_cmr'] = $auto_delete_cmr;

        return $this;
    }

    /**
     * Gets auto_delete_cmr_days
     *
     * @return int|null
     */
    public function getAutoDeleteCmrDays()
    {
        return $this->container['auto_delete_cmr_days'];
    }

    /**
     * Sets auto_delete_cmr_days
     *
     * @param int|null $auto_delete_cmr_days When the `auto_delete_cmr` value is `true`, the number of days before Zoom automatically deletes cloud recordings:  * `30` — 30 days.  * `60` — 60 days.  * `90` — 90 days.  * `120` — 120 days.
     *
     * @return self
     */
    public function setAutoDeleteCmrDays($auto_delete_cmr_days)
    {
        $allowedValues = $this->getAutoDeleteCmrDaysAllowableValues();
        if (!is_null($auto_delete_cmr_days) && !in_array($auto_delete_cmr_days, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'auto_delete_cmr_days', must be one of '%s'",
                    $auto_delete_cmr_days,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auto_delete_cmr_days'] = $auto_delete_cmr_days;

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


