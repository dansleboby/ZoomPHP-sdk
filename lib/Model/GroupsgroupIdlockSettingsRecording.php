<?php
/**
 * GroupsgroupIdlockSettingsRecording
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Zoom API
 *
 * The Zoom API allows developers to safely and securely access information from Zoom. You can use this API to build private services or public applicatixons on the [Zoom App Marketplace](http://marketplace.zoom.us). To learn how to get your credentials and create private/public applications, read our [Authorization Guide](https://marketplace.zoom.us/docs/guides/authorization/credentials). All endpoints are available via `https` and are located at `api.zoom.us/v2/`.  For instance you can list all users on an account via `https://api.zoom.us/v2/users/`.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: developersupport@zoom.us
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GroupsgroupIdlockSettingsRecording Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroupsgroupIdlockSettingsRecording implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'groupsgroupIdlock_settings_recording';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'local_recording' => 'bool',
        'cloud_recording' => 'bool',
        'auto_recording' => 'string',
        'cloud_recording_download' => 'bool',
        'account_user_access_recording' => 'bool',
        'host_delete_cloud_recording' => 'bool',
        'auto_delete_cmr' => 'bool',
        'recording_authentication' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'local_recording' => null,
        'cloud_recording' => null,
        'auto_recording' => null,
        'cloud_recording_download' => null,
        'account_user_access_recording' => null,
        'host_delete_cloud_recording' => null,
        'auto_delete_cmr' => null,
        'recording_authentication' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'local_recording' => 'local_recording',
        'cloud_recording' => 'cloud_recording',
        'auto_recording' => 'auto_recording',
        'cloud_recording_download' => 'cloud_recording_download',
        'account_user_access_recording' => 'account_user_access_recording',
        'host_delete_cloud_recording' => 'host_delete_cloud_recording',
        'auto_delete_cmr' => 'auto_delete_cmr',
        'recording_authentication' => 'recording_authentication'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'local_recording' => 'setLocalRecording',
        'cloud_recording' => 'setCloudRecording',
        'auto_recording' => 'setAutoRecording',
        'cloud_recording_download' => 'setCloudRecordingDownload',
        'account_user_access_recording' => 'setAccountUserAccessRecording',
        'host_delete_cloud_recording' => 'setHostDeleteCloudRecording',
        'auto_delete_cmr' => 'setAutoDeleteCmr',
        'recording_authentication' => 'setRecordingAuthentication'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'local_recording' => 'getLocalRecording',
        'cloud_recording' => 'getCloudRecording',
        'auto_recording' => 'getAutoRecording',
        'cloud_recording_download' => 'getCloudRecordingDownload',
        'account_user_access_recording' => 'getAccountUserAccessRecording',
        'host_delete_cloud_recording' => 'getHostDeleteCloudRecording',
        'auto_delete_cmr' => 'getAutoDeleteCmr',
        'recording_authentication' => 'getRecordingAuthentication'
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
        return self::$swaggerModelName;
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
        $this->container['local_recording'] = isset($data['local_recording']) ? $data['local_recording'] : null;
        $this->container['cloud_recording'] = isset($data['cloud_recording']) ? $data['cloud_recording'] : null;
        $this->container['auto_recording'] = isset($data['auto_recording']) ? $data['auto_recording'] : null;
        $this->container['cloud_recording_download'] = isset($data['cloud_recording_download']) ? $data['cloud_recording_download'] : null;
        $this->container['account_user_access_recording'] = isset($data['account_user_access_recording']) ? $data['account_user_access_recording'] : null;
        $this->container['host_delete_cloud_recording'] = isset($data['host_delete_cloud_recording']) ? $data['host_delete_cloud_recording'] : null;
        $this->container['auto_delete_cmr'] = isset($data['auto_delete_cmr']) ? $data['auto_delete_cmr'] : null;
        $this->container['recording_authentication'] = isset($data['recording_authentication']) ? $data['recording_authentication'] : null;
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
     * Gets local_recording
     *
     * @return bool
     */
    public function getLocalRecording()
    {
        return $this->container['local_recording'];
    }

    /**
     * Sets local_recording
     *
     * @param bool $local_recording Allow hosts and participants to record the meeting to a local file.
     *
     * @return $this
     */
    public function setLocalRecording($local_recording)
    {
        $this->container['local_recording'] = $local_recording;

        return $this;
    }

    /**
     * Gets cloud_recording
     *
     * @return bool
     */
    public function getCloudRecording()
    {
        return $this->container['cloud_recording'];
    }

    /**
     * Sets cloud_recording
     *
     * @param bool $cloud_recording Allow hosts to record and save the meeting / webinar in the cloud.
     *
     * @return $this
     */
    public function setCloudRecording($cloud_recording)
    {
        $this->container['cloud_recording'] = $cloud_recording;

        return $this;
    }

    /**
     * Gets auto_recording
     *
     * @return string
     */
    public function getAutoRecording()
    {
        return $this->container['auto_recording'];
    }

    /**
     * Sets auto_recording
     *
     * @param string $auto_recording Record meetings automatically as they start.
     *
     * @return $this
     */
    public function setAutoRecording($auto_recording)
    {
        $this->container['auto_recording'] = $auto_recording;

        return $this;
    }

    /**
     * Gets cloud_recording_download
     *
     * @return bool
     */
    public function getCloudRecordingDownload()
    {
        return $this->container['cloud_recording_download'];
    }

    /**
     * Sets cloud_recording_download
     *
     * @param bool $cloud_recording_download Allow anyone with a link to the cloud recording to download.
     *
     * @return $this
     */
    public function setCloudRecordingDownload($cloud_recording_download)
    {
        $this->container['cloud_recording_download'] = $cloud_recording_download;

        return $this;
    }

    /**
     * Gets account_user_access_recording
     *
     * @return bool
     */
    public function getAccountUserAccessRecording()
    {
        return $this->container['account_user_access_recording'];
    }

    /**
     * Sets account_user_access_recording
     *
     * @param bool $account_user_access_recording Make cloud recordings accessible to account members only.
     *
     * @return $this
     */
    public function setAccountUserAccessRecording($account_user_access_recording)
    {
        $this->container['account_user_access_recording'] = $account_user_access_recording;

        return $this;
    }

    /**
     * Gets host_delete_cloud_recording
     *
     * @return bool
     */
    public function getHostDeleteCloudRecording()
    {
        return $this->container['host_delete_cloud_recording'];
    }

    /**
     * Sets host_delete_cloud_recording
     *
     * @param bool $host_delete_cloud_recording Allow the host to delete the recordings. If this option is disabled, the recordings cannot be deleted by the host and only admin can delete them.
     *
     * @return $this
     */
    public function setHostDeleteCloudRecording($host_delete_cloud_recording)
    {
        $this->container['host_delete_cloud_recording'] = $host_delete_cloud_recording;

        return $this;
    }

    /**
     * Gets auto_delete_cmr
     *
     * @return bool
     */
    public function getAutoDeleteCmr()
    {
        return $this->container['auto_delete_cmr'];
    }

    /**
     * Sets auto_delete_cmr
     *
     * @param bool $auto_delete_cmr Allow Zoom to automatically delete recordings permanently after a specified number of days.
     *
     * @return $this
     */
    public function setAutoDeleteCmr($auto_delete_cmr)
    {
        $this->container['auto_delete_cmr'] = $auto_delete_cmr;

        return $this;
    }

    /**
     * Gets recording_authentication
     *
     * @return string
     */
    public function getRecordingAuthentication()
    {
        return $this->container['recording_authentication'];
    }

    /**
     * Sets recording_authentication
     *
     * @param string $recording_authentication recording_authentication
     *
     * @return $this
     */
    public function setRecordingAuthentication($recording_authentication)
    {
        $this->container['recording_authentication'] = $recording_authentication;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


