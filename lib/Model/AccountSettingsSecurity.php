<?php
/**
 * AccountSettingsSecurity
 *
 * PHP version 5
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Zoom API
 *
 * The Zoom API allows developers to safely and securely access information from Zoom. You can use this API to build private services or public applicatixons on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [Authorization Guide](https://marketplace.zoom.us/docs/guides/authorization/credentials). All endpoints are available via `https` and are located at `api.zoom.us/v2/`.  For instance you can list all users on an account via `https://api.zoom.us/v2/users/`.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developersupport@zoom.us
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
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
 * AccountSettingsSecurity Class Doc Comment
 *
 * @category Class
 * @description [Security settings](https://support.zoom.us/hc/en-us/articles/360034675592-Advanced-security-settings#h_bf8a25f6-9a66-447a-befd-f02ed3404f89) of an Account.
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountSettingsSecurity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountSettings_security';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'admin_change_name_pic' => 'bool',
        'import_photos_from_devices' => 'bool',
        'hide_billing_info' => 'bool',
        'password_requirement' => '\Zoom\Api\Model\AccountSettingsSecurityPasswordRequirement',
        'sign_in_with_two_factor_auth' => 'string',
        'sign_again_period_for_inactivity_on_client' => 'int',
        'sign_again_period_for_inactivity_on_web' => 'int',
        'sign_in_with_two_factor_auth_groups' => 'string[]',
        'sign_in_with_two_factor_auth_roles' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'admin_change_name_pic' => null,
        'import_photos_from_devices' => null,
        'hide_billing_info' => null,
        'password_requirement' => null,
        'sign_in_with_two_factor_auth' => null,
        'sign_again_period_for_inactivity_on_client' => null,
        'sign_again_period_for_inactivity_on_web' => null,
        'sign_in_with_two_factor_auth_groups' => null,
        'sign_in_with_two_factor_auth_roles' => null
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
        'admin_change_name_pic' => 'admin_change_name_pic',
        'import_photos_from_devices' => 'import_photos_from_devices',
        'hide_billing_info' => 'hide_billing_info',
        'password_requirement' => 'password_requirement',
        'sign_in_with_two_factor_auth' => 'sign_in_with_two_factor_auth',
        'sign_again_period_for_inactivity_on_client' => 'sign_again_period_for_inactivity_on_client',
        'sign_again_period_for_inactivity_on_web' => 'sign_again_period_for_inactivity_on_web',
        'sign_in_with_two_factor_auth_groups' => 'sign_in_with_two_factor_auth_groups',
        'sign_in_with_two_factor_auth_roles' => 'sign_in_with_two_factor_auth_roles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_change_name_pic' => 'setAdminChangeNamePic',
        'import_photos_from_devices' => 'setImportPhotosFromDevices',
        'hide_billing_info' => 'setHideBillingInfo',
        'password_requirement' => 'setPasswordRequirement',
        'sign_in_with_two_factor_auth' => 'setSignInWithTwoFactorAuth',
        'sign_again_period_for_inactivity_on_client' => 'setSignAgainPeriodForInactivityOnClient',
        'sign_again_period_for_inactivity_on_web' => 'setSignAgainPeriodForInactivityOnWeb',
        'sign_in_with_two_factor_auth_groups' => 'setSignInWithTwoFactorAuthGroups',
        'sign_in_with_two_factor_auth_roles' => 'setSignInWithTwoFactorAuthRoles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_change_name_pic' => 'getAdminChangeNamePic',
        'import_photos_from_devices' => 'getImportPhotosFromDevices',
        'hide_billing_info' => 'getHideBillingInfo',
        'password_requirement' => 'getPasswordRequirement',
        'sign_in_with_two_factor_auth' => 'getSignInWithTwoFactorAuth',
        'sign_again_period_for_inactivity_on_client' => 'getSignAgainPeriodForInactivityOnClient',
        'sign_again_period_for_inactivity_on_web' => 'getSignAgainPeriodForInactivityOnWeb',
        'sign_in_with_two_factor_auth_groups' => 'getSignInWithTwoFactorAuthGroups',
        'sign_in_with_two_factor_auth_roles' => 'getSignInWithTwoFactorAuthRoles'
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

    const SIGN_IN_WITH_TWO_FACTOR_AUTH_ALL = 'all';
    const SIGN_IN_WITH_TWO_FACTOR_AUTH_GROUP = 'group';
    const SIGN_IN_WITH_TWO_FACTOR_AUTH_ROLE = 'role';
    const SIGN_IN_WITH_TWO_FACTOR_AUTH_NONE = 'none';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignInWithTwoFactorAuthAllowableValues()
    {
        return [
            self::SIGN_IN_WITH_TWO_FACTOR_AUTH_ALL,
            self::SIGN_IN_WITH_TWO_FACTOR_AUTH_GROUP,
            self::SIGN_IN_WITH_TWO_FACTOR_AUTH_ROLE,
            self::SIGN_IN_WITH_TWO_FACTOR_AUTH_NONE,
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
        $this->container['admin_change_name_pic'] = isset($data['admin_change_name_pic']) ? $data['admin_change_name_pic'] : null;
        $this->container['import_photos_from_devices'] = isset($data['import_photos_from_devices']) ? $data['import_photos_from_devices'] : null;
        $this->container['hide_billing_info'] = isset($data['hide_billing_info']) ? $data['hide_billing_info'] : null;
        $this->container['password_requirement'] = isset($data['password_requirement']) ? $data['password_requirement'] : null;
        $this->container['sign_in_with_two_factor_auth'] = isset($data['sign_in_with_two_factor_auth']) ? $data['sign_in_with_two_factor_auth'] : null;
        $this->container['sign_again_period_for_inactivity_on_client'] = isset($data['sign_again_period_for_inactivity_on_client']) ? $data['sign_again_period_for_inactivity_on_client'] : null;
        $this->container['sign_again_period_for_inactivity_on_web'] = isset($data['sign_again_period_for_inactivity_on_web']) ? $data['sign_again_period_for_inactivity_on_web'] : null;
        $this->container['sign_in_with_two_factor_auth_groups'] = isset($data['sign_in_with_two_factor_auth_groups']) ? $data['sign_in_with_two_factor_auth_groups'] : null;
        $this->container['sign_in_with_two_factor_auth_roles'] = isset($data['sign_in_with_two_factor_auth_roles']) ? $data['sign_in_with_two_factor_auth_roles'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSignInWithTwoFactorAuthAllowableValues();
        if (!is_null($this->container['sign_in_with_two_factor_auth']) && !in_array($this->container['sign_in_with_two_factor_auth'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sign_in_with_two_factor_auth', must be one of '%s'",
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
     * Gets admin_change_name_pic
     *
     * @return bool|null
     */
    public function getAdminChangeNamePic()
    {
        return $this->container['admin_change_name_pic'];
    }

    /**
     * Sets admin_change_name_pic
     *
     * @param bool|null $admin_change_name_pic Only account administrators can change a user's username and picture.
     *
     * @return $this
     */
    public function setAdminChangeNamePic($admin_change_name_pic)
    {
        $this->container['admin_change_name_pic'] = $admin_change_name_pic;

        return $this;
    }

    /**
     * Gets import_photos_from_devices
     *
     * @return bool|null
     */
    public function getImportPhotosFromDevices()
    {
        return $this->container['import_photos_from_devices'];
    }

    /**
     * Sets import_photos_from_devices
     *
     * @param bool|null $import_photos_from_devices Allow users to import photos from a photo library on a  device.
     *
     * @return $this
     */
    public function setImportPhotosFromDevices($import_photos_from_devices)
    {
        $this->container['import_photos_from_devices'] = $import_photos_from_devices;

        return $this;
    }

    /**
     * Gets hide_billing_info
     *
     * @return bool|null
     */
    public function getHideBillingInfo()
    {
        return $this->container['hide_billing_info'];
    }

    /**
     * Sets hide_billing_info
     *
     * @param bool|null $hide_billing_info Hide billing information.
     *
     * @return $this
     */
    public function setHideBillingInfo($hide_billing_info)
    {
        $this->container['hide_billing_info'] = $hide_billing_info;

        return $this;
    }

    /**
     * Gets password_requirement
     *
     * @return \Zoom\Api\Model\AccountSettingsSecurityPasswordRequirement|null
     */
    public function getPasswordRequirement()
    {
        return $this->container['password_requirement'];
    }

    /**
     * Sets password_requirement
     *
     * @param \Zoom\Api\Model\AccountSettingsSecurityPasswordRequirement|null $password_requirement password_requirement
     *
     * @return $this
     */
    public function setPasswordRequirement($password_requirement)
    {
        $this->container['password_requirement'] = $password_requirement;

        return $this;
    }

    /**
     * Gets sign_in_with_two_factor_auth
     *
     * @return string|null
     */
    public function getSignInWithTwoFactorAuth()
    {
        return $this->container['sign_in_with_two_factor_auth'];
    }

    /**
     * Sets sign_in_with_two_factor_auth
     *
     * @param string|null $sign_in_with_two_factor_auth Settings for 2FA( [two factor authentication](https://support.zoom.us/hc/en-us/articles/360038247071) ). The value can be one of the following: `all`: Two factor authentication will be enabled for all users in the account.<br> `none`: Two factor authentication is disabled.<br> `group`: Two factor authentication will be enabled for users belonging to specific groups. If 2FA is enabled for certain groups, the group IDs of the group(s) will be provided in the `sign_in_with_two_factor_auth_groups` field.<br> `role`: Two factor authentication will be enabled only for users assigned with specific roles in the account. If 2FA is enabled for specific roles, the role IDs will be provided in the `sign_in_with_two_factor_auth_roles` field.
     *
     * @return $this
     */
    public function setSignInWithTwoFactorAuth($sign_in_with_two_factor_auth)
    {
        $allowedValues = $this->getSignInWithTwoFactorAuthAllowableValues();
        if (!is_null($sign_in_with_two_factor_auth) && !in_array($sign_in_with_two_factor_auth, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sign_in_with_two_factor_auth', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sign_in_with_two_factor_auth'] = $sign_in_with_two_factor_auth;

        return $this;
    }

    /**
     * Gets sign_again_period_for_inactivity_on_client
     *
     * @return int|null
     */
    public function getSignAgainPeriodForInactivityOnClient()
    {
        return $this->container['sign_again_period_for_inactivity_on_client'];
    }

    /**
     * Sets sign_again_period_for_inactivity_on_client
     *
     * @param int|null $sign_again_period_for_inactivity_on_client Settings for User Sign In interval requirements after a period of inactivity. If enabled, this setting forces automatic logout of users in Zoom Client app after a set amount of time. <br>  If this setting is disabled, the value of this field will be `0`. If the setting is enabled, the value of this field will indicate the **period of inactivity** in minutes after which, an inactive user will be automatically logged out of the Zoom Client. The value for the period of inactivity can be one of the following:<br>  `5`: 5 minutes<br> `10`: 10 minutes<br> `15`: 15 minutes<br> `30`: 30 minutes<br> `45`: 45 minutes<br> `60`: 60 minutes<br> `90`: 90 minutes<br> `120`: 120 minutes
     *
     * @return $this
     */
    public function setSignAgainPeriodForInactivityOnClient($sign_again_period_for_inactivity_on_client)
    {
        $this->container['sign_again_period_for_inactivity_on_client'] = $sign_again_period_for_inactivity_on_client;

        return $this;
    }

    /**
     * Gets sign_again_period_for_inactivity_on_web
     *
     * @return int|null
     */
    public function getSignAgainPeriodForInactivityOnWeb()
    {
        return $this->container['sign_again_period_for_inactivity_on_web'];
    }

    /**
     * Sets sign_again_period_for_inactivity_on_web
     *
     * @param int|null $sign_again_period_for_inactivity_on_web Settings for User Sign In interval requirements after a period of inactivity. If enabled, this setting forces automatic logout of users in Zoom Web Portal after a set amount of time. <br>  If this setting is disabled, the value of this field will be `0`. If the setting is enabled, the value of this field will indicate the **period of inactivity** in minutes after which, an inactive user will be automatically logged out of the Zoom Web Portal. The value for the period of inactivity can be one of the following:<br>  `5`: 5 minutes<br> `10`: 10 minutes<br> `15`: 15 minutes<br> `30`: 30 minutes<br> `60`: 60 minutes<br> `120`: 120 minutes
     *
     * @return $this
     */
    public function setSignAgainPeriodForInactivityOnWeb($sign_again_period_for_inactivity_on_web)
    {
        $this->container['sign_again_period_for_inactivity_on_web'] = $sign_again_period_for_inactivity_on_web;

        return $this;
    }

    /**
     * Gets sign_in_with_two_factor_auth_groups
     *
     * @return string[]|null
     */
    public function getSignInWithTwoFactorAuthGroups()
    {
        return $this->container['sign_in_with_two_factor_auth_groups'];
    }

    /**
     * Sets sign_in_with_two_factor_auth_groups
     *
     * @param string[]|null $sign_in_with_two_factor_auth_groups This field contains group IDs of groups that have 2FA enabled. This field is only returned if the value of `sign_in_with_two_factor_auth` is `group`
     *
     * @return $this
     */
    public function setSignInWithTwoFactorAuthGroups($sign_in_with_two_factor_auth_groups)
    {
        $this->container['sign_in_with_two_factor_auth_groups'] = $sign_in_with_two_factor_auth_groups;

        return $this;
    }

    /**
     * Gets sign_in_with_two_factor_auth_roles
     *
     * @return string[]|null
     */
    public function getSignInWithTwoFactorAuthRoles()
    {
        return $this->container['sign_in_with_two_factor_auth_roles'];
    }

    /**
     * Sets sign_in_with_two_factor_auth_roles
     *
     * @param string[]|null $sign_in_with_two_factor_auth_roles This field contains role IDs of roles that have 2FA enabled. This field is only returned if the value of `sign_in_with_two_factor_auth` is `role`.
     *
     * @return $this
     */
    public function setSignInWithTwoFactorAuthRoles($sign_in_with_two_factor_auth_roles)
    {
        $this->container['sign_in_with_two_factor_auth_roles'] = $sign_in_with_two_factor_auth_roles;

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


