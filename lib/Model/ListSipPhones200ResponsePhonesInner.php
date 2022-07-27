<?php
/**
 * ListSipPhones200ResponsePhonesInner
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
 * ListSipPhones200ResponsePhonesInner Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ListSipPhones200ResponsePhonesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'listSipPhones_200_response_phones_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authorization_name' => 'string',
        'domain' => 'string',
        'id' => 'string',
        'password' => 'string',
        'proxy_server' => 'string',
        'proxy_server2' => 'string',
        'proxy_server3' => 'string',
        'register_server' => 'string',
        'register_server2' => 'string',
        'register_server3' => 'string',
        'registration_expire_time' => 'int',
        'transport_protocol' => 'string',
        'transport_protocol2' => 'string',
        'transport_protocol3' => 'string',
        'user_email' => 'string',
        'user_name' => 'string',
        'voice_mail' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authorization_name' => null,
        'domain' => null,
        'id' => null,
        'password' => null,
        'proxy_server' => null,
        'proxy_server2' => null,
        'proxy_server3' => null,
        'register_server' => null,
        'register_server2' => null,
        'register_server3' => null,
        'registration_expire_time' => null,
        'transport_protocol' => null,
        'transport_protocol2' => null,
        'transport_protocol3' => null,
        'user_email' => 'email',
        'user_name' => null,
        'voice_mail' => null
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
        'authorization_name' => 'authorization_name',
        'domain' => 'domain',
        'id' => 'id',
        'password' => 'password',
        'proxy_server' => 'proxy_server',
        'proxy_server2' => 'proxy_server2',
        'proxy_server3' => 'proxy_server3',
        'register_server' => 'register_server',
        'register_server2' => 'register_server2',
        'register_server3' => 'register_server3',
        'registration_expire_time' => 'registration_expire_time',
        'transport_protocol' => 'transport_protocol',
        'transport_protocol2' => 'transport_protocol2',
        'transport_protocol3' => 'transport_protocol3',
        'user_email' => 'user_email',
        'user_name' => 'user_name',
        'voice_mail' => 'voice_mail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authorization_name' => 'setAuthorizationName',
        'domain' => 'setDomain',
        'id' => 'setId',
        'password' => 'setPassword',
        'proxy_server' => 'setProxyServer',
        'proxy_server2' => 'setProxyServer2',
        'proxy_server3' => 'setProxyServer3',
        'register_server' => 'setRegisterServer',
        'register_server2' => 'setRegisterServer2',
        'register_server3' => 'setRegisterServer3',
        'registration_expire_time' => 'setRegistrationExpireTime',
        'transport_protocol' => 'setTransportProtocol',
        'transport_protocol2' => 'setTransportProtocol2',
        'transport_protocol3' => 'setTransportProtocol3',
        'user_email' => 'setUserEmail',
        'user_name' => 'setUserName',
        'voice_mail' => 'setVoiceMail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authorization_name' => 'getAuthorizationName',
        'domain' => 'getDomain',
        'id' => 'getId',
        'password' => 'getPassword',
        'proxy_server' => 'getProxyServer',
        'proxy_server2' => 'getProxyServer2',
        'proxy_server3' => 'getProxyServer3',
        'register_server' => 'getRegisterServer',
        'register_server2' => 'getRegisterServer2',
        'register_server3' => 'getRegisterServer3',
        'registration_expire_time' => 'getRegistrationExpireTime',
        'transport_protocol' => 'getTransportProtocol',
        'transport_protocol2' => 'getTransportProtocol2',
        'transport_protocol3' => 'getTransportProtocol3',
        'user_email' => 'getUserEmail',
        'user_name' => 'getUserName',
        'voice_mail' => 'getVoiceMail'
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

    public const TRANSPORT_PROTOCOL_UDP = 'UDP';
    public const TRANSPORT_PROTOCOL_TCP = 'TCP';
    public const TRANSPORT_PROTOCOL_TLS = 'TLS';
    public const TRANSPORT_PROTOCOL_AUTO = 'AUTO';
    public const TRANSPORT_PROTOCOL2_UDP = 'UDP';
    public const TRANSPORT_PROTOCOL2_TCP = 'TCP';
    public const TRANSPORT_PROTOCOL2_TLS = 'TLS';
    public const TRANSPORT_PROTOCOL2_AUTO = 'AUTO';
    public const TRANSPORT_PROTOCOL3_UDP = 'UDP';
    public const TRANSPORT_PROTOCOL3_TCP = 'TCP';
    public const TRANSPORT_PROTOCOL3_TLS = 'TLS';
    public const TRANSPORT_PROTOCOL3_AUTO = 'AUTO';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportProtocolAllowableValues()
    {
        return [
            self::TRANSPORT_PROTOCOL_UDP,
            self::TRANSPORT_PROTOCOL_TCP,
            self::TRANSPORT_PROTOCOL_TLS,
            self::TRANSPORT_PROTOCOL_AUTO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportProtocol2AllowableValues()
    {
        return [
            self::TRANSPORT_PROTOCOL2_UDP,
            self::TRANSPORT_PROTOCOL2_TCP,
            self::TRANSPORT_PROTOCOL2_TLS,
            self::TRANSPORT_PROTOCOL2_AUTO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransportProtocol3AllowableValues()
    {
        return [
            self::TRANSPORT_PROTOCOL3_UDP,
            self::TRANSPORT_PROTOCOL3_TCP,
            self::TRANSPORT_PROTOCOL3_TLS,
            self::TRANSPORT_PROTOCOL3_AUTO,
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
        $this->container['authorization_name'] = $data['authorization_name'] ?? null;
        $this->container['domain'] = $data['domain'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['proxy_server'] = $data['proxy_server'] ?? null;
        $this->container['proxy_server2'] = $data['proxy_server2'] ?? null;
        $this->container['proxy_server3'] = $data['proxy_server3'] ?? null;
        $this->container['register_server'] = $data['register_server'] ?? null;
        $this->container['register_server2'] = $data['register_server2'] ?? null;
        $this->container['register_server3'] = $data['register_server3'] ?? null;
        $this->container['registration_expire_time'] = $data['registration_expire_time'] ?? null;
        $this->container['transport_protocol'] = $data['transport_protocol'] ?? null;
        $this->container['transport_protocol2'] = $data['transport_protocol2'] ?? null;
        $this->container['transport_protocol3'] = $data['transport_protocol3'] ?? null;
        $this->container['user_email'] = $data['user_email'] ?? null;
        $this->container['user_name'] = $data['user_name'] ?? null;
        $this->container['voice_mail'] = $data['voice_mail'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTransportProtocolAllowableValues();
        if (!is_null($this->container['transport_protocol']) && !in_array($this->container['transport_protocol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transport_protocol', must be one of '%s'",
                $this->container['transport_protocol'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransportProtocol2AllowableValues();
        if (!is_null($this->container['transport_protocol2']) && !in_array($this->container['transport_protocol2'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transport_protocol2', must be one of '%s'",
                $this->container['transport_protocol2'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTransportProtocol3AllowableValues();
        if (!is_null($this->container['transport_protocol3']) && !in_array($this->container['transport_protocol3'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transport_protocol3', must be one of '%s'",
                $this->container['transport_protocol3'],
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
     * Gets authorization_name
     *
     * @return string|null
     */
    public function getAuthorizationName()
    {
        return $this->container['authorization_name'];
    }

    /**
     * Sets authorization_name
     *
     * @param string|null $authorization_name Authorization name of the user  registered for SIP Phone.
     *
     * @return self
     */
    public function setAuthorizationName($authorization_name)
    {
        $this->container['authorization_name'] = $authorization_name;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain The name or IP address of your provider's SIP domain.
     *
     * @return self
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique Identifier of the SIP Phone.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string|null $password The password generated for the user in the SIP account.
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets proxy_server
     *
     * @return string|null
     */
    public function getProxyServer()
    {
        return $this->container['proxy_server'];
    }

    /**
     * Sets proxy_server
     *
     * @param string|null $proxy_server IP address of the proxy server for SIP requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. If you are not using a proxy server, this value can be the same as the Register Server, or empty.
     *
     * @return self
     */
    public function setProxyServer($proxy_server)
    {
        $this->container['proxy_server'] = $proxy_server;

        return $this;
    }

    /**
     * Gets proxy_server2
     *
     * @return string|null
     */
    public function getProxyServer2()
    {
        return $this->container['proxy_server2'];
    }

    /**
     * Sets proxy_server2
     *
     * @param string|null $proxy_server2 IP address of the proxy server for SIP requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. If you are not using a proxy server, this value can be the same as the Register Server, or empty.
     *
     * @return self
     */
    public function setProxyServer2($proxy_server2)
    {
        $this->container['proxy_server2'] = $proxy_server2;

        return $this;
    }

    /**
     * Gets proxy_server3
     *
     * @return string|null
     */
    public function getProxyServer3()
    {
        return $this->container['proxy_server3'];
    }

    /**
     * Sets proxy_server3
     *
     * @param string|null $proxy_server3 IP address of the proxy server for SIP requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address. If you are not using a proxy server, this value can be the same as the Register Server, or empty.
     *
     * @return self
     */
    public function setProxyServer3($proxy_server3)
    {
        $this->container['proxy_server3'] = $proxy_server3;

        return $this;
    }

    /**
     * Gets register_server
     *
     * @return string|null
     */
    public function getRegisterServer()
    {
        return $this->container['register_server'];
    }

    /**
     * Sets register_server
     *
     * @param string|null $register_server IP address of the server that accepts REGISTER requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address.
     *
     * @return self
     */
    public function setRegisterServer($register_server)
    {
        $this->container['register_server'] = $register_server;

        return $this;
    }

    /**
     * Gets register_server2
     *
     * @return string|null
     */
    public function getRegisterServer2()
    {
        return $this->container['register_server2'];
    }

    /**
     * Sets register_server2
     *
     * @param string|null $register_server2 IP address of the server that accepts REGISTER requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address.
     *
     * @return self
     */
    public function setRegisterServer2($register_server2)
    {
        $this->container['register_server2'] = $register_server2;

        return $this;
    }

    /**
     * Gets register_server3
     *
     * @return string|null
     */
    public function getRegisterServer3()
    {
        return $this->container['register_server3'];
    }

    /**
     * Sets register_server3
     *
     * @param string|null $register_server3 IP address of the server that accepts REGISTER requests. Note that if you are using the UDP transport protocol, the default port is 5060. If you are using UDP with a different port number, that port number must be included with the IP address.
     *
     * @return self
     */
    public function setRegisterServer3($register_server3)
    {
        $this->container['register_server3'] = $register_server3;

        return $this;
    }

    /**
     * Gets registration_expire_time
     *
     * @return int|null
     */
    public function getRegistrationExpireTime()
    {
        return $this->container['registration_expire_time'];
    }

    /**
     * Sets registration_expire_time
     *
     * @param int|null $registration_expire_time The number of minutes after which the SIP registration of the Zoom client user will expire, and the client will auto register to the SIP server.
     *
     * @return self
     */
    public function setRegistrationExpireTime($registration_expire_time)
    {
        $this->container['registration_expire_time'] = $registration_expire_time;

        return $this;
    }

    /**
     * Gets transport_protocol
     *
     * @return string|null
     */
    public function getTransportProtocol()
    {
        return $this->container['transport_protocol'];
    }

    /**
     * Sets transport_protocol
     *
     * @param string|null $transport_protocol Protocols supported by the SIP provider.<br> The value must be either `UDP`, `TCP`, `TLS`, `AUTO`.
     *
     * @return self
     */
    public function setTransportProtocol($transport_protocol)
    {
        $allowedValues = $this->getTransportProtocolAllowableValues();
        if (!is_null($transport_protocol) && !in_array($transport_protocol, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transport_protocol', must be one of '%s'",
                    $transport_protocol,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transport_protocol'] = $transport_protocol;

        return $this;
    }

    /**
     * Gets transport_protocol2
     *
     * @return string|null
     */
    public function getTransportProtocol2()
    {
        return $this->container['transport_protocol2'];
    }

    /**
     * Sets transport_protocol2
     *
     * @param string|null $transport_protocol2 Protocols supported by the SIP provider.<br> The value must be either `UDP`, `TCP`, `TLS`, `AUTO`.
     *
     * @return self
     */
    public function setTransportProtocol2($transport_protocol2)
    {
        $allowedValues = $this->getTransportProtocol2AllowableValues();
        if (!is_null($transport_protocol2) && !in_array($transport_protocol2, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transport_protocol2', must be one of '%s'",
                    $transport_protocol2,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transport_protocol2'] = $transport_protocol2;

        return $this;
    }

    /**
     * Gets transport_protocol3
     *
     * @return string|null
     */
    public function getTransportProtocol3()
    {
        return $this->container['transport_protocol3'];
    }

    /**
     * Sets transport_protocol3
     *
     * @param string|null $transport_protocol3 Protocols supported by the SIP provider.<br> The value must be either `UDP`, `TCP`, `TLS`, `AUTO`.
     *
     * @return self
     */
    public function setTransportProtocol3($transport_protocol3)
    {
        $allowedValues = $this->getTransportProtocol3AllowableValues();
        if (!is_null($transport_protocol3) && !in_array($transport_protocol3, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transport_protocol3', must be one of '%s'",
                    $transport_protocol3,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transport_protocol3'] = $transport_protocol3;

        return $this;
    }

    /**
     * Gets user_email
     *
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->container['user_email'];
    }

    /**
     * Sets user_email
     *
     * @param string|null $user_email The email address of the user to associate with the SIP Phone. Can add `.win`, `.mac`, `.android`, `.ipad`, `.iphone`, `.linux`, `.pc`, `.mobile`, `.pad` at the end of the email (for example, `user@example.com.mac`) to add accounts for different platforms for the same user.
     *
     * @return self
     */
    public function setUserEmail($user_email)
    {
        $this->container['user_email'] = $user_email;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string|null $user_name The phone number associated with the user in the SIP account.
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets voice_mail
     *
     * @return string|null
     */
    public function getVoiceMail()
    {
        return $this->container['voice_mail'];
    }

    /**
     * Sets voice_mail
     *
     * @param string|null $voice_mail The number to dial for checking voicemail.
     *
     * @return self
     */
    public function setVoiceMail($voice_mail)
    {
        $this->container['voice_mail'] = $voice_mail;

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

