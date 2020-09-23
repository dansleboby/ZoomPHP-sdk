<?php
/**
 * InlineResponse20049PacAccounts
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
 * InlineResponse20049PacAccounts Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20049PacAccounts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_49_pac_accounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dedicated_dial_in_number' => '\Swagger\Client\Model\InlineResponse20049DedicatedDialInNumber[]',
        'global_dial_in_numbers' => '\Swagger\Client\Model\InlineResponse20049DedicatedDialInNumber[]',
        'conference_id' => 'int',
        'participant_password' => 'string',
        'listen_only_password' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dedicated_dial_in_number' => null,
        'global_dial_in_numbers' => null,
        'conference_id' => null,
        'participant_password' => null,
        'listen_only_password' => null
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
        'dedicated_dial_in_number' => 'dedicated_dial_in_number',
        'global_dial_in_numbers' => 'global_dial_in_numbers',
        'conference_id' => 'conference_id',
        'participant_password' => 'participant_password',
        'listen_only_password' => 'listen_only_password'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dedicated_dial_in_number' => 'setDedicatedDialInNumber',
        'global_dial_in_numbers' => 'setGlobalDialInNumbers',
        'conference_id' => 'setConferenceId',
        'participant_password' => 'setParticipantPassword',
        'listen_only_password' => 'setListenOnlyPassword'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dedicated_dial_in_number' => 'getDedicatedDialInNumber',
        'global_dial_in_numbers' => 'getGlobalDialInNumbers',
        'conference_id' => 'getConferenceId',
        'participant_password' => 'getParticipantPassword',
        'listen_only_password' => 'getListenOnlyPassword'
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
        $this->container['dedicated_dial_in_number'] = isset($data['dedicated_dial_in_number']) ? $data['dedicated_dial_in_number'] : null;
        $this->container['global_dial_in_numbers'] = isset($data['global_dial_in_numbers']) ? $data['global_dial_in_numbers'] : null;
        $this->container['conference_id'] = isset($data['conference_id']) ? $data['conference_id'] : null;
        $this->container['participant_password'] = isset($data['participant_password']) ? $data['participant_password'] : null;
        $this->container['listen_only_password'] = isset($data['listen_only_password']) ? $data['listen_only_password'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['participant_password']) && (mb_strlen($this->container['participant_password']) > 6)) {
            $invalidProperties[] = "invalid value for 'participant_password', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['participant_password']) && (mb_strlen($this->container['participant_password']) < 1)) {
            $invalidProperties[] = "invalid value for 'participant_password', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['listen_only_password']) && (mb_strlen($this->container['listen_only_password']) > 6)) {
            $invalidProperties[] = "invalid value for 'listen_only_password', the character length must be smaller than or equal to 6.";
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
     * Gets dedicated_dial_in_number
     *
     * @return \Swagger\Client\Model\InlineResponse20049DedicatedDialInNumber[]
     */
    public function getDedicatedDialInNumber()
    {
        return $this->container['dedicated_dial_in_number'];
    }

    /**
     * Sets dedicated_dial_in_number
     *
     * @param \Swagger\Client\Model\InlineResponse20049DedicatedDialInNumber[] $dedicated_dial_in_number List of dedicated dial-in numbers.
     *
     * @return $this
     */
    public function setDedicatedDialInNumber($dedicated_dial_in_number)
    {
        $this->container['dedicated_dial_in_number'] = $dedicated_dial_in_number;

        return $this;
    }

    /**
     * Gets global_dial_in_numbers
     *
     * @return \Swagger\Client\Model\InlineResponse20049DedicatedDialInNumber[]
     */
    public function getGlobalDialInNumbers()
    {
        return $this->container['global_dial_in_numbers'];
    }

    /**
     * Sets global_dial_in_numbers
     *
     * @param \Swagger\Client\Model\InlineResponse20049DedicatedDialInNumber[] $global_dial_in_numbers List of global dial-in numbers.
     *
     * @return $this
     */
    public function setGlobalDialInNumbers($global_dial_in_numbers)
    {
        $this->container['global_dial_in_numbers'] = $global_dial_in_numbers;

        return $this;
    }

    /**
     * Gets conference_id
     *
     * @return int
     */
    public function getConferenceId()
    {
        return $this->container['conference_id'];
    }

    /**
     * Sets conference_id
     *
     * @param int $conference_id Conference ID.
     *
     * @return $this
     */
    public function setConferenceId($conference_id)
    {
        $this->container['conference_id'] = $conference_id;

        return $this;
    }

    /**
     * Gets participant_password
     *
     * @return string
     */
    public function getParticipantPassword()
    {
        return $this->container['participant_password'];
    }

    /**
     * Sets participant_password
     *
     * @param string $participant_password Participant password: numeric value - length is less than 6.
     *
     * @return $this
     */
    public function setParticipantPassword($participant_password)
    {
        if (!is_null($participant_password) && (mb_strlen($participant_password) > 6)) {
            throw new \InvalidArgumentException('invalid length for $participant_password when calling InlineResponse20049PacAccounts., must be smaller than or equal to 6.');
        }
        if (!is_null($participant_password) && (mb_strlen($participant_password) < 1)) {
            throw new \InvalidArgumentException('invalid length for $participant_password when calling InlineResponse20049PacAccounts., must be bigger than or equal to 1.');
        }

        $this->container['participant_password'] = $participant_password;

        return $this;
    }

    /**
     * Gets listen_only_password
     *
     * @return string
     */
    public function getListenOnlyPassword()
    {
        return $this->container['listen_only_password'];
    }

    /**
     * Sets listen_only_password
     *
     * @param string $listen_only_password Listen-Only password: numeric value - length is less than 6.
     *
     * @return $this
     */
    public function setListenOnlyPassword($listen_only_password)
    {
        if (!is_null($listen_only_password) && (mb_strlen($listen_only_password) > 6)) {
            throw new \InvalidArgumentException('invalid length for $listen_only_password when calling InlineResponse20049PacAccounts., must be smaller than or equal to 6.');
        }

        $this->container['listen_only_password'] = $listen_only_password;

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


