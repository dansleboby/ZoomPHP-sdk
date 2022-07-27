<?php
/**
 * RecordingGet200Response
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
 * RecordingGet200Response Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecordingGet200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'recordingGet_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'duration' => 'int',
        'host_id' => 'string',
        'id' => 'int',
        'recording_count' => 'int',
        'start_time' => '\DateTime',
        'topic' => 'string',
        'total_size' => 'int',
        'type' => 'string',
        'uuid' => 'string',
        'recording_files' => 'Recording[]',
        'download_access_token' => 'string',
        'password' => 'string',
        'recording_play_passcode' => 'string',
        'participant_audio_files' => 'RecordingSeparateAudio[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'duration' => null,
        'host_id' => null,
        'id' => null,
        'recording_count' => null,
        'start_time' => 'date-time',
        'topic' => null,
        'total_size' => 'int64',
        'type' => null,
        'uuid' => null,
        'recording_files' => null,
        'download_access_token' => null,
        'password' => null,
        'recording_play_passcode' => null,
        'participant_audio_files' => null
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
        'account_id' => 'account_id',
        'duration' => 'duration',
        'host_id' => 'host_id',
        'id' => 'id',
        'recording_count' => 'recording_count',
        'start_time' => 'start_time',
        'topic' => 'topic',
        'total_size' => 'total_size',
        'type' => 'type',
        'uuid' => 'uuid',
        'recording_files' => 'recording_files',
        'download_access_token' => 'download_access_token',
        'password' => 'password',
        'recording_play_passcode' => 'recording_play_passcode',
        'participant_audio_files' => 'participant_audio_files'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'duration' => 'setDuration',
        'host_id' => 'setHostId',
        'id' => 'setId',
        'recording_count' => 'setRecordingCount',
        'start_time' => 'setStartTime',
        'topic' => 'setTopic',
        'total_size' => 'setTotalSize',
        'type' => 'setType',
        'uuid' => 'setUuid',
        'recording_files' => 'setRecordingFiles',
        'download_access_token' => 'setDownloadAccessToken',
        'password' => 'setPassword',
        'recording_play_passcode' => 'setRecordingPlayPasscode',
        'participant_audio_files' => 'setParticipantAudioFiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'duration' => 'getDuration',
        'host_id' => 'getHostId',
        'id' => 'getId',
        'recording_count' => 'getRecordingCount',
        'start_time' => 'getStartTime',
        'topic' => 'getTopic',
        'total_size' => 'getTotalSize',
        'type' => 'getType',
        'uuid' => 'getUuid',
        'recording_files' => 'getRecordingFiles',
        'download_access_token' => 'getDownloadAccessToken',
        'password' => 'getPassword',
        'recording_play_passcode' => 'getRecordingPlayPasscode',
        'participant_audio_files' => 'getParticipantAudioFiles'
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

    public const TYPE__1 = '1';
    public const TYPE__2 = '2';
    public const TYPE__3 = '3';
    public const TYPE__4 = '4';
    public const TYPE__5 = '5';
    public const TYPE__6 = '6';
    public const TYPE__7 = '7';
    public const TYPE__8 = '8';
    public const TYPE__9 = '9';
    public const TYPE__99 = '99';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__1,
            self::TYPE__2,
            self::TYPE__3,
            self::TYPE__4,
            self::TYPE__5,
            self::TYPE__6,
            self::TYPE__7,
            self::TYPE__8,
            self::TYPE__9,
            self::TYPE__99,
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
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['host_id'] = $data['host_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['recording_count'] = $data['recording_count'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['topic'] = $data['topic'] ?? null;
        $this->container['total_size'] = $data['total_size'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['recording_files'] = $data['recording_files'] ?? null;
        $this->container['download_access_token'] = $data['download_access_token'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['recording_play_passcode'] = $data['recording_play_passcode'] ?? null;
        $this->container['participant_audio_files'] = $data['participant_audio_files'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id Unique Identifier of the user account.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration Meeting duration.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets host_id
     *
     * @return string|null
     */
    public function getHostId()
    {
        return $this->container['host_id'];
    }

    /**
     * Sets host_id
     *
     * @param string|null $host_id ID of the user set as host of meeting.
     *
     * @return self
     */
    public function setHostId($host_id)
    {
        $this->container['host_id'] = $host_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Meeting ID - also known as the meeting number.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets recording_count
     *
     * @return int|null
     */
    public function getRecordingCount()
    {
        return $this->container['recording_count'];
    }

    /**
     * Sets recording_count
     *
     * @param int|null $recording_count Number of recording files returned in the response of this API call. This includes the `recording_files` and  `participant_audio_files` files.
     *
     * @return self
     */
    public function setRecordingCount($recording_count)
    {
        $this->container['recording_count'] = $recording_count;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime|null $start_time The time at which the meeting started.
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets topic
     *
     * @return string|null
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     *
     * @param string|null $topic Meeting topic.
     *
     * @return self
     */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets total_size
     *
     * @return int|null
     */
    public function getTotalSize()
    {
        return $this->container['total_size'];
    }

    /**
     * Sets total_size
     *
     * @param int|null $total_size The total file size of the recording. This includes the `recording_files` and `participant_audio_files` files.
     *
     * @return self
     */
    public function setTotalSize($total_size)
    {
        $this->container['total_size'] = $total_size;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The recording's associated type of meeting or webinar:   If the recording is of a meeting:  * `1` — Instant meeting.  * `2` — Scheduled meeting.  * `3` — A recurring meeting with no fixed time.  * `4` — A meeting created via PMI (Personal Meeting ID).  * `7` — A [Personal Audio Conference](https://support.zoom.us/hc/en-us/articles/204517069-Getting-Started-with-Personal-Audio-Conference) (PAC).  * `8` - Recurring meeting with a fixed time.   If the recording is of a webinar:  * `5` — A webinar.  * `6` — A recurring webinar without a fixed time  * `9` — A recurring webinar with a fixed time.  If the recording is **not** from a meeting or webinar:   * `99` — A recording uploaded via the [**Recordings**](https://zoom.us/recording) interface on the Zoom Web Portal.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid Unique Meeting Identifier. Each instance of the meeting will have its own UUID.
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets recording_files
     *
     * @return Recording[]|null
     */
    public function getRecordingFiles()
    {
        return $this->container['recording_files'];
    }

    /**
     * Sets recording_files
     *
     * @param Recording[]|null $recording_files List of recording file.
     *
     * @return self
     */
    public function setRecordingFiles($recording_files)
    {
        $this->container['recording_files'] = $recording_files;

        return $this;
    }

    /**
     * Gets download_access_token
     *
     * @return string|null
     */
    public function getDownloadAccessToken()
    {
        return $this->container['download_access_token'];
    }

    /**
     * Sets download_access_token
     *
     * @param string|null $download_access_token The JWT token to download the meeting's recording. This response only returns if the `download_access_token` is included in the `include_fields` query parameter.
     *
     * @return self
     */
    public function setDownloadAccessToken($download_access_token)
    {
        $this->container['download_access_token'] = $download_access_token;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password The cloud recording's password.
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets recording_play_passcode
     *
     * @return string|null
     */
    public function getRecordingPlayPasscode()
    {
        return $this->container['recording_play_passcode'];
    }

    /**
     * Sets recording_play_passcode
     *
     * @param string|null $recording_play_passcode The cloud recording's password to be used in the URL. This recording's password can be directly spliced in `play_url` or `share_url` with `?pwd=` to access and play. For example, 'https://zoom.us/rec/share/_**************?pwd=yNYIS408EJygs7rE5vVsJwXIz4-VW7MH'. If you want to use this field, please contact Zoom support.
     *
     * @return self
     */
    public function setRecordingPlayPasscode($recording_play_passcode)
    {
        $this->container['recording_play_passcode'] = $recording_play_passcode;

        return $this;
    }

    /**
     * Gets participant_audio_files
     *
     * @return RecordingSeparateAudio[]|null
     */
    public function getParticipantAudioFiles()
    {
        return $this->container['participant_audio_files'];
    }

    /**
     * Sets participant_audio_files
     *
     * @param RecordingSeparateAudio[]|null $participant_audio_files A list of recording files. The API only returns this response when the **Record a separate audio file of each participant** setting is enabled.
     *
     * @return self
     */
    public function setParticipantAudioFiles($participant_audio_files)
    {
        $this->container['participant_audio_files'] = $participant_audio_files;

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

