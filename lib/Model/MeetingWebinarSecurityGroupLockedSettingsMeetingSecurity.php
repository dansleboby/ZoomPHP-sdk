<?php
/**
 * MeetingWebinarSecurityGroupLockedSettingsMeetingSecurity
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
 * MeetingWebinarSecurityGroupLockedSettingsMeetingSecurity Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MeetingWebinarSecurityGroupLockedSettingsMeetingSecurity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Meeting_Webinar_Security_Group_Locked_Settings_meeting_security';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'approved_or_denied_countries_or_regions' => 'bool',
        'auto_security' => 'bool',
        'block_user_domain' => 'bool',
        'embed_password_in_join_link' => 'bool',
        'encryption_type' => 'string',
        'end_to_end_encrypted_meetings' => 'bool',
        'meeting_password' => 'bool',
        'only_authenticated_can_join_from_webclient' => 'bool',
        'phone_password' => 'bool',
        'pmi_password' => 'bool',
        'waiting_room' => 'bool',
        'webinar_password' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'approved_or_denied_countries_or_regions' => null,
        'auto_security' => null,
        'block_user_domain' => null,
        'embed_password_in_join_link' => null,
        'encryption_type' => null,
        'end_to_end_encrypted_meetings' => null,
        'meeting_password' => null,
        'only_authenticated_can_join_from_webclient' => null,
        'phone_password' => null,
        'pmi_password' => null,
        'waiting_room' => null,
        'webinar_password' => null
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
        'approved_or_denied_countries_or_regions' => 'approved_or_denied_countries_or_regions',
        'auto_security' => 'auto_security',
        'block_user_domain' => 'block_user_domain',
        'embed_password_in_join_link' => 'embed_password_in_join_link',
        'encryption_type' => 'encryption_type',
        'end_to_end_encrypted_meetings' => 'end_to_end_encrypted_meetings',
        'meeting_password' => 'meeting_password',
        'only_authenticated_can_join_from_webclient' => 'only_authenticated_can_join_from_webclient',
        'phone_password' => 'phone_password',
        'pmi_password' => 'pmi_password',
        'waiting_room' => 'waiting_room',
        'webinar_password' => 'webinar_password'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approved_or_denied_countries_or_regions' => 'setApprovedOrDeniedCountriesOrRegions',
        'auto_security' => 'setAutoSecurity',
        'block_user_domain' => 'setBlockUserDomain',
        'embed_password_in_join_link' => 'setEmbedPasswordInJoinLink',
        'encryption_type' => 'setEncryptionType',
        'end_to_end_encrypted_meetings' => 'setEndToEndEncryptedMeetings',
        'meeting_password' => 'setMeetingPassword',
        'only_authenticated_can_join_from_webclient' => 'setOnlyAuthenticatedCanJoinFromWebclient',
        'phone_password' => 'setPhonePassword',
        'pmi_password' => 'setPmiPassword',
        'waiting_room' => 'setWaitingRoom',
        'webinar_password' => 'setWebinarPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approved_or_denied_countries_or_regions' => 'getApprovedOrDeniedCountriesOrRegions',
        'auto_security' => 'getAutoSecurity',
        'block_user_domain' => 'getBlockUserDomain',
        'embed_password_in_join_link' => 'getEmbedPasswordInJoinLink',
        'encryption_type' => 'getEncryptionType',
        'end_to_end_encrypted_meetings' => 'getEndToEndEncryptedMeetings',
        'meeting_password' => 'getMeetingPassword',
        'only_authenticated_can_join_from_webclient' => 'getOnlyAuthenticatedCanJoinFromWebclient',
        'phone_password' => 'getPhonePassword',
        'pmi_password' => 'getPmiPassword',
        'waiting_room' => 'getWaitingRoom',
        'webinar_password' => 'getWebinarPassword'
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

    public const ENCRYPTION_TYPE_ENHANCED_ENCRYPTION = 'enhanced_encryption';
    public const ENCRYPTION_TYPE_E2EE = 'e2ee';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEncryptionTypeAllowableValues()
    {
        return [
            self::ENCRYPTION_TYPE_ENHANCED_ENCRYPTION,
            self::ENCRYPTION_TYPE_E2EE,
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
        $this->container['approved_or_denied_countries_or_regions'] = $data['approved_or_denied_countries_or_regions'] ?? null;
        $this->container['auto_security'] = $data['auto_security'] ?? null;
        $this->container['block_user_domain'] = $data['block_user_domain'] ?? null;
        $this->container['embed_password_in_join_link'] = $data['embed_password_in_join_link'] ?? null;
        $this->container['encryption_type'] = $data['encryption_type'] ?? null;
        $this->container['end_to_end_encrypted_meetings'] = $data['end_to_end_encrypted_meetings'] ?? null;
        $this->container['meeting_password'] = $data['meeting_password'] ?? null;
        $this->container['only_authenticated_can_join_from_webclient'] = $data['only_authenticated_can_join_from_webclient'] ?? null;
        $this->container['phone_password'] = $data['phone_password'] ?? null;
        $this->container['pmi_password'] = $data['pmi_password'] ?? null;
        $this->container['waiting_room'] = $data['waiting_room'] ?? null;
        $this->container['webinar_password'] = $data['webinar_password'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEncryptionTypeAllowableValues();
        if (!is_null($this->container['encryption_type']) && !in_array($this->container['encryption_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'encryption_type', must be one of '%s'",
                $this->container['encryption_type'],
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
     * Gets approved_or_denied_countries_or_regions
     *
     * @return bool|null
     */
    public function getApprovedOrDeniedCountriesOrRegions()
    {
        return $this->container['approved_or_denied_countries_or_regions'];
    }

    /**
     * Sets approved_or_denied_countries_or_regions
     *
     * @param bool|null $approved_or_denied_countries_or_regions Whether the [**Approve or block entry for users from specific countries/regions**](https://support.zoom.us/hc/en-us/articles/360060086231-Joining-from-specific-countries-regions) setting is enabled.
     *
     * @return self
     */
    public function setApprovedOrDeniedCountriesOrRegions($approved_or_denied_countries_or_regions)
    {
        $this->container['approved_or_denied_countries_or_regions'] = $approved_or_denied_countries_or_regions;

        return $this;
    }

    /**
     * Gets auto_security
     *
     * @return bool|null
     */
    public function getAutoSecurity()
    {
        return $this->container['auto_security'];
    }

    /**
     * Sets auto_security
     *
     * @param bool|null $auto_security Whether all meetings must be secured with at least one security option.    This setting can only be disabled by Enterprise, ISV, Business (with more than 100 licenses), and Education accounts.
     *
     * @return self
     */
    public function setAutoSecurity($auto_security)
    {
        $this->container['auto_security'] = $auto_security;

        return $this;
    }

    /**
     * Gets block_user_domain
     *
     * @return bool|null
     */
    public function getBlockUserDomain()
    {
        return $this->container['block_user_domain'];
    }

    /**
     * Sets block_user_domain
     *
     * @param bool|null $block_user_domain Whether users in specific domains are blocked from joining meetings and webinars.
     *
     * @return self
     */
    public function setBlockUserDomain($block_user_domain)
    {
        $this->container['block_user_domain'] = $block_user_domain;

        return $this;
    }

    /**
     * Gets embed_password_in_join_link
     *
     * @return bool|null
     */
    public function getEmbedPasswordInJoinLink()
    {
        return $this->container['embed_password_in_join_link'];
    }

    /**
     * Sets embed_password_in_join_link
     *
     * @param bool|null $embed_password_in_join_link Whether the meeting password is encrypted and included in the invitation link. The provided link will allow participants to join the meeting without having to enter the password.
     *
     * @return self
     */
    public function setEmbedPasswordInJoinLink($embed_password_in_join_link)
    {
        $this->container['embed_password_in_join_link'] = $embed_password_in_join_link;

        return $this;
    }

    /**
     * Gets encryption_type
     *
     * @return string|null
     */
    public function getEncryptionType()
    {
        return $this->container['encryption_type'];
    }

    /**
     * Sets encryption_type
     *
     * @param string|null $encryption_type The type of encryption used when starting a meeting:  * `enhanced_encryption` — Enhanced encryption. Encryption data is stored in the cloud.  * `e2ee` — End-to-end encryption. The encryption key is stored on the local device and cannot be obtained by anyone else. Enabling E2EE also [**disables** certain features](https://support.zoom.us/hc/en-us/articles/360048660871), such as cloud recording, live streaming, and allowing participants to join before the host.
     *
     * @return self
     */
    public function setEncryptionType($encryption_type)
    {
        $allowedValues = $this->getEncryptionTypeAllowableValues();
        if (!is_null($encryption_type) && !in_array($encryption_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'encryption_type', must be one of '%s'",
                    $encryption_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['encryption_type'] = $encryption_type;

        return $this;
    }

    /**
     * Gets end_to_end_encrypted_meetings
     *
     * @return bool|null
     */
    public function getEndToEndEncryptedMeetings()
    {
        return $this->container['end_to_end_encrypted_meetings'];
    }

    /**
     * Sets end_to_end_encrypted_meetings
     *
     * @param bool|null $end_to_end_encrypted_meetings Whether end-to-end encryption is enabled for meetings.
     *
     * @return self
     */
    public function setEndToEndEncryptedMeetings($end_to_end_encrypted_meetings)
    {
        $this->container['end_to_end_encrypted_meetings'] = $end_to_end_encrypted_meetings;

        return $this;
    }

    /**
     * Gets meeting_password
     *
     * @return bool|null
     */
    public function getMeetingPassword()
    {
        return $this->container['meeting_password'];
    }

    /**
     * Sets meeting_password
     *
     * @param bool|null $meeting_password Whether all instant and scheduled meetings that users can join via client or Zoom Rooms systems are password-protected. [Personal Meeting ID (PMI)](https://support.zoom.us/hc/en-us/articles/203276937) meetings are **not** included in this setting.
     *
     * @return self
     */
    public function setMeetingPassword($meeting_password)
    {
        $this->container['meeting_password'] = $meeting_password;

        return $this;
    }

    /**
     * Gets only_authenticated_can_join_from_webclient
     *
     * @return bool|null
     */
    public function getOnlyAuthenticatedCanJoinFromWebclient()
    {
        return $this->container['only_authenticated_can_join_from_webclient'];
    }

    /**
     * Sets only_authenticated_can_join_from_webclient
     *
     * @param bool|null $only_authenticated_can_join_from_webclient Whether to specify that only authenticated users can join the meeting from the web client.
     *
     * @return self
     */
    public function setOnlyAuthenticatedCanJoinFromWebclient($only_authenticated_can_join_from_webclient)
    {
        $this->container['only_authenticated_can_join_from_webclient'] = $only_authenticated_can_join_from_webclient;

        return $this;
    }

    /**
     * Gets phone_password
     *
     * @return bool|null
     */
    public function getPhonePassword()
    {
        return $this->container['phone_password'];
    }

    /**
     * Sets phone_password
     *
     * @param bool|null $phone_password Whether passwords are required for participants joining by phone.    If enabled and the meeting is password-protected, a numeric password is required for participants to join by phone. For meetings with alphanumeric passwords, a numeric password will be generated.
     *
     * @return self
     */
    public function setPhonePassword($phone_password)
    {
        $this->container['phone_password'] = $phone_password;

        return $this;
    }

    /**
     * Gets pmi_password
     *
     * @return bool|null
     */
    public function getPmiPassword()
    {
        return $this->container['pmi_password'];
    }

    /**
     * Sets pmi_password
     *
     * @param bool|null $pmi_password Whether all Personal Meeting ID (PMI) meetings that users can join via client or Zoom Rooms systems are password-protected.
     *
     * @return self
     */
    public function setPmiPassword($pmi_password)
    {
        $this->container['pmi_password'] = $pmi_password;

        return $this;
    }

    /**
     * Gets waiting_room
     *
     * @return bool|null
     */
    public function getWaitingRoom()
    {
        return $this->container['waiting_room'];
    }

    /**
     * Sets waiting_room
     *
     * @param bool|null $waiting_room Whether participants are placed in the [**Waiting Room**](https://support.zoom.us/hc/en-us/articles/115000332726-Waiting-Room) when they join a meeting.    If the **Waiting Room** feature is enabled, the [**Allow participants to join before host**](https://support.zoom.us/hc/en-us/articles/202828525-Allow-participants-to-join-before-host) setting is automatically disabled.
     *
     * @return self
     */
    public function setWaitingRoom($waiting_room)
    {
        $this->container['waiting_room'] = $waiting_room;

        return $this;
    }

    /**
     * Gets webinar_password
     *
     * @return bool|null
     */
    public function getWebinarPassword()
    {
        return $this->container['webinar_password'];
    }

    /**
     * Sets webinar_password
     *
     * @param bool|null $webinar_password Whether to generate a password when scheduling webinars. Participants must use the generated password to join the scheduled webinar.
     *
     * @return self
     */
    public function setWebinarPassword($webinar_password)
    {
        $this->container['webinar_password'] = $webinar_password;

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

