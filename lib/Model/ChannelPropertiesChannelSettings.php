<?php
/**
 * ChannelPropertiesChannelSettings
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
 * ChannelPropertiesChannelSettings Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChannelPropertiesChannelSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Channel_properties_channel_settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_to_add_external_users' => 'int',
        'new_members_can_see_previous_messages_files' => 'bool',
        'posting_permissions' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_to_add_external_users' => null,
        'new_members_can_see_previous_messages_files' => null,
        'posting_permissions' => null
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
        'allow_to_add_external_users' => 'allow_to_add_external_users',
        'new_members_can_see_previous_messages_files' => 'new_members_can_see_previous_messages_files',
        'posting_permissions' => 'posting_permissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_to_add_external_users' => 'setAllowToAddExternalUsers',
        'new_members_can_see_previous_messages_files' => 'setNewMembersCanSeePreviousMessagesFiles',
        'posting_permissions' => 'setPostingPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_to_add_external_users' => 'getAllowToAddExternalUsers',
        'new_members_can_see_previous_messages_files' => 'getNewMembersCanSeePreviousMessagesFiles',
        'posting_permissions' => 'getPostingPermissions'
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

    public const ALLOW_TO_ADD_EXTERNAL_USERS_0 = 0;
    public const ALLOW_TO_ADD_EXTERNAL_USERS_1 = 1;
    public const ALLOW_TO_ADD_EXTERNAL_USERS_2 = 2;
    public const POSTING_PERMISSIONS_1 = 1;
    public const POSTING_PERMISSIONS_2 = 2;
    public const POSTING_PERMISSIONS_3 = 3;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllowToAddExternalUsersAllowableValues()
    {
        return [
            self::ALLOW_TO_ADD_EXTERNAL_USERS_0,
            self::ALLOW_TO_ADD_EXTERNAL_USERS_1,
            self::ALLOW_TO_ADD_EXTERNAL_USERS_2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPostingPermissionsAllowableValues()
    {
        return [
            self::POSTING_PERMISSIONS_1,
            self::POSTING_PERMISSIONS_2,
            self::POSTING_PERMISSIONS_3,
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
        $this->container['allow_to_add_external_users'] = $data['allow_to_add_external_users'] ?? null;
        $this->container['new_members_can_see_previous_messages_files'] = $data['new_members_can_see_previous_messages_files'] ?? null;
        $this->container['posting_permissions'] = $data['posting_permissions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAllowToAddExternalUsersAllowableValues();
        if (!is_null($this->container['allow_to_add_external_users']) && !in_array($this->container['allow_to_add_external_users'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'allow_to_add_external_users', must be one of '%s'",
                $this->container['allow_to_add_external_users'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPostingPermissionsAllowableValues();
        if (!is_null($this->container['posting_permissions']) && !in_array($this->container['posting_permissions'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'posting_permissions', must be one of '%s'",
                $this->container['posting_permissions'],
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
     * Gets allow_to_add_external_users
     *
     * @return int|null
     */
    public function getAllowToAddExternalUsers()
    {
        return $this->container['allow_to_add_external_users'];
    }

    /**
     * Sets allow_to_add_external_users
     *
     * @param int|null $allow_to_add_external_users Allow members to add external users to the channel. The value can be one of the following:<br> `0`: Disable. Do not allow channel members to add external users to the channel.<br> `1`: All channel members. Allow all channel members to add external users to the channel.<br> `2`: By members in your organization. Allow only members in your organization to add external users to the channel.
     *
     * @return self
     */
    public function setAllowToAddExternalUsers($allow_to_add_external_users)
    {
        $allowedValues = $this->getAllowToAddExternalUsersAllowableValues();
        if (!is_null($allow_to_add_external_users) && !in_array($allow_to_add_external_users, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'allow_to_add_external_users', must be one of '%s'",
                    $allow_to_add_external_users,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allow_to_add_external_users'] = $allow_to_add_external_users;

        return $this;
    }

    /**
     * Gets new_members_can_see_previous_messages_files
     *
     * @return bool|null
     */
    public function getNewMembersCanSeePreviousMessagesFiles()
    {
        return $this->container['new_members_can_see_previous_messages_files'];
    }

    /**
     * Sets new_members_can_see_previous_messages_files
     *
     * @param bool|null $new_members_can_see_previous_messages_files New members to the channel can see previous messages and files posted in the channel.
     *
     * @return self
     */
    public function setNewMembersCanSeePreviousMessagesFiles($new_members_can_see_previous_messages_files)
    {
        $this->container['new_members_can_see_previous_messages_files'] = $new_members_can_see_previous_messages_files;

        return $this;
    }

    /**
     * Gets posting_permissions
     *
     * @return int|null
     */
    public function getPostingPermissions()
    {
        return $this->container['posting_permissions'];
    }

    /**
     * Sets posting_permissions
     *
     * @param int|null $posting_permissions Permissions for members to post to the channel. The value can be one of the following:<br> `1`: Everyone. All members can post to the channel.<br> `2`: Admin only. Only the admin can post to the channel<br> `3`: Admin and specific members. Only the admin and specified members can post to the channel. <br>
     *
     * @return self
     */
    public function setPostingPermissions($posting_permissions)
    {
        $allowedValues = $this->getPostingPermissionsAllowableValues();
        if (!is_null($posting_permissions) && !in_array($posting_permissions, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'posting_permissions', must be one of '%s'",
                    $posting_permissions,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['posting_permissions'] = $posting_permissions;

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


