<?php
/**
 * RecordingSettings
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
 * RecordingSettings Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecordingSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecordingSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'approval_type' => 'int',
        'authentication_domains' => 'string',
        'authentication_option' => 'string',
        'on_demand' => 'bool',
        'password' => 'string',
        'recording_authentication' => 'bool',
        'send_email_to_host' => 'bool',
        'share_recording' => 'string',
        'show_social_share_buttons' => 'bool',
        'topic' => 'string',
        'viewer_download' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'approval_type' => null,
        'authentication_domains' => null,
        'authentication_option' => null,
        'on_demand' => null,
        'password' => null,
        'recording_authentication' => null,
        'send_email_to_host' => null,
        'share_recording' => null,
        'show_social_share_buttons' => null,
        'topic' => null,
        'viewer_download' => null
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
        'approval_type' => 'approval_type',
        'authentication_domains' => 'authentication_domains',
        'authentication_option' => 'authentication_option',
        'on_demand' => 'on_demand',
        'password' => 'password',
        'recording_authentication' => 'recording_authentication',
        'send_email_to_host' => 'send_email_to_host',
        'share_recording' => 'share_recording',
        'show_social_share_buttons' => 'show_social_share_buttons',
        'topic' => 'topic',
        'viewer_download' => 'viewer_download'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approval_type' => 'setApprovalType',
        'authentication_domains' => 'setAuthenticationDomains',
        'authentication_option' => 'setAuthenticationOption',
        'on_demand' => 'setOnDemand',
        'password' => 'setPassword',
        'recording_authentication' => 'setRecordingAuthentication',
        'send_email_to_host' => 'setSendEmailToHost',
        'share_recording' => 'setShareRecording',
        'show_social_share_buttons' => 'setShowSocialShareButtons',
        'topic' => 'setTopic',
        'viewer_download' => 'setViewerDownload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approval_type' => 'getApprovalType',
        'authentication_domains' => 'getAuthenticationDomains',
        'authentication_option' => 'getAuthenticationOption',
        'on_demand' => 'getOnDemand',
        'password' => 'getPassword',
        'recording_authentication' => 'getRecordingAuthentication',
        'send_email_to_host' => 'getSendEmailToHost',
        'share_recording' => 'getShareRecording',
        'show_social_share_buttons' => 'getShowSocialShareButtons',
        'topic' => 'getTopic',
        'viewer_download' => 'getViewerDownload'
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

    public const APPROVAL_TYPE_0 = 0;
    public const APPROVAL_TYPE_1 = 1;
    public const APPROVAL_TYPE_2 = 2;
    public const SHARE_RECORDING_PUBLICLY = 'publicly';
    public const SHARE_RECORDING_INTERNALLY = 'internally';
    public const SHARE_RECORDING_NONE = 'none';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApprovalTypeAllowableValues()
    {
        return [
            self::APPROVAL_TYPE_0,
            self::APPROVAL_TYPE_1,
            self::APPROVAL_TYPE_2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShareRecordingAllowableValues()
    {
        return [
            self::SHARE_RECORDING_PUBLICLY,
            self::SHARE_RECORDING_INTERNALLY,
            self::SHARE_RECORDING_NONE,
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
        $this->container['approval_type'] = $data['approval_type'] ?? null;
        $this->container['authentication_domains'] = $data['authentication_domains'] ?? null;
        $this->container['authentication_option'] = $data['authentication_option'] ?? null;
        $this->container['on_demand'] = $data['on_demand'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['recording_authentication'] = $data['recording_authentication'] ?? null;
        $this->container['send_email_to_host'] = $data['send_email_to_host'] ?? null;
        $this->container['share_recording'] = $data['share_recording'] ?? null;
        $this->container['show_social_share_buttons'] = $data['show_social_share_buttons'] ?? null;
        $this->container['topic'] = $data['topic'] ?? null;
        $this->container['viewer_download'] = $data['viewer_download'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getApprovalTypeAllowableValues();
        if (!is_null($this->container['approval_type']) && !in_array($this->container['approval_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'approval_type', must be one of '%s'",
                $this->container['approval_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) > 10)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['password']) && (mb_strlen($this->container['password']) < 8)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 8.";
        }

        $allowedValues = $this->getShareRecordingAllowableValues();
        if (!is_null($this->container['share_recording']) && !in_array($this->container['share_recording'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'share_recording', must be one of '%s'",
                $this->container['share_recording'],
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
     * Gets approval_type
     *
     * @return int|null
     */
    public function getApprovalType()
    {
        return $this->container['approval_type'];
    }

    /**
     * Sets approval_type
     *
     * @param int|null $approval_type Approval type for the registration.<br> `0`- Automatically approve the registration when a user registers.<br> `1` - Manually approve or deny the registration of a user.<br> `2` - No registration required to view the recording.
     *
     * @return self
     */
    public function setApprovalType($approval_type)
    {
        $allowedValues = $this->getApprovalTypeAllowableValues();
        if (!is_null($approval_type) && !in_array($approval_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'approval_type', must be one of '%s'",
                    $approval_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['approval_type'] = $approval_type;

        return $this;
    }

    /**
     * Gets authentication_domains
     *
     * @return string|null
     */
    public function getAuthenticationDomains()
    {
        return $this->container['authentication_domains'];
    }

    /**
     * Sets authentication_domains
     *
     * @param string|null $authentication_domains Authentication domains.
     *
     * @return self
     */
    public function setAuthenticationDomains($authentication_domains)
    {
        $this->container['authentication_domains'] = $authentication_domains;

        return $this;
    }

    /**
     * Gets authentication_option
     *
     * @return string|null
     */
    public function getAuthenticationOption()
    {
        return $this->container['authentication_option'];
    }

    /**
     * Sets authentication_option
     *
     * @param string|null $authentication_option Authentication Options.
     *
     * @return self
     */
    public function setAuthenticationOption($authentication_option)
    {
        $this->container['authentication_option'] = $authentication_option;

        return $this;
    }

    /**
     * Gets on_demand
     *
     * @return bool|null
     */
    public function getOnDemand()
    {
        return $this->container['on_demand'];
    }

    /**
     * Sets on_demand
     *
     * @param bool|null $on_demand Determine whether registration is required to view the recording.
     *
     * @return self
     */
    public function setOnDemand($on_demand)
    {
        $this->container['on_demand'] = $on_demand;

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
     * @param string|null $password Enable password protection for the recording by setting a password. The password must have a minimum of **eight** characters with a mix of numbers, letters and special characters.<br><br> **Note:** If the account owner or the admin has set minimum password strength requirements for recordings via Account Settings, the password value provided here must meet those requirements. <br><br>If the requirements are enabled, you can view those requirements by calling either the [**Get user settings**](/docs/api-reference/zoom-api/methods#operation/userSettings) API or the [**Get account settings**](/docs/api-reference/zoom-api/ma#operation/accountSettings) API.
     *
     * @return self
     */
    public function setPassword($password)
    {
        if (!is_null($password) && (mb_strlen($password) > 10)) {
            throw new \InvalidArgumentException('invalid length for $password when calling RecordingSettings., must be smaller than or equal to 10.');
        }
        if (!is_null($password) && (mb_strlen($password) < 8)) {
            throw new \InvalidArgumentException('invalid length for $password when calling RecordingSettings., must be bigger than or equal to 8.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets recording_authentication
     *
     * @return bool|null
     */
    public function getRecordingAuthentication()
    {
        return $this->container['recording_authentication'];
    }

    /**
     * Sets recording_authentication
     *
     * @param bool|null $recording_authentication Only authenticated users can view.
     *
     * @return self
     */
    public function setRecordingAuthentication($recording_authentication)
    {
        $this->container['recording_authentication'] = $recording_authentication;

        return $this;
    }

    /**
     * Gets send_email_to_host
     *
     * @return bool|null
     */
    public function getSendEmailToHost()
    {
        return $this->container['send_email_to_host'];
    }

    /**
     * Sets send_email_to_host
     *
     * @param bool|null $send_email_to_host Send an email to host when someone registers to view the recording. This applies for On-demand recordings only.
     *
     * @return self
     */
    public function setSendEmailToHost($send_email_to_host)
    {
        $this->container['send_email_to_host'] = $send_email_to_host;

        return $this;
    }

    /**
     * Gets share_recording
     *
     * @return string|null
     */
    public function getShareRecording()
    {
        return $this->container['share_recording'];
    }

    /**
     * Sets share_recording
     *
     * @param string|null $share_recording Determine how the meeting recording is shared.
     *
     * @return self
     */
    public function setShareRecording($share_recording)
    {
        $allowedValues = $this->getShareRecordingAllowableValues();
        if (!is_null($share_recording) && !in_array($share_recording, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'share_recording', must be one of '%s'",
                    $share_recording,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['share_recording'] = $share_recording;

        return $this;
    }

    /**
     * Gets show_social_share_buttons
     *
     * @return bool|null
     */
    public function getShowSocialShareButtons()
    {
        return $this->container['show_social_share_buttons'];
    }

    /**
     * Sets show_social_share_buttons
     *
     * @param bool|null $show_social_share_buttons Show social share buttons on registration page. This applies for On-demand recordings only.
     *
     * @return self
     */
    public function setShowSocialShareButtons($show_social_share_buttons)
    {
        $this->container['show_social_share_buttons'] = $show_social_share_buttons;

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
     * @param string|null $topic Name of the recording.
     *
     * @return self
     */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;

        return $this;
    }

    /**
     * Gets viewer_download
     *
     * @return bool|null
     */
    public function getViewerDownload()
    {
        return $this->container['viewer_download'];
    }

    /**
     * Sets viewer_download
     *
     * @param bool|null $viewer_download Determine whether a viewer can download the recording file or not.
     *
     * @return self
     */
    public function setViewerDownload($viewer_download)
    {
        $this->container['viewer_download'] = $viewer_download;

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


