<?php
/**
 * InlineResponse20047
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
 * InlineResponse20047 Class Doc Comment
 *
 * @category Class
 * @package  Zoom\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20047 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_47';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'cms_user_id' => 'string',
        'company' => 'string',
        'created_at' => '\DateTime',
        'custom_attributes' => '\Zoom\Api\Model\InlineResponse20034CustomAttributes',
        'dept' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'group_ids' => 'string[]',
        'host_key' => 'string',
        'id' => 'string',
        'im_group_ids' => 'string[]',
        'jid' => 'string',
        'job_title' => 'string',
        'language' => 'string',
        'last_client_version' => 'string',
        'last_login_time' => '\DateTime',
        'last_name' => 'string',
        'location' => 'string',
        'personal_meeting_url' => 'string',
        'phone_country' => 'string',
        'phone_number' => 'string',
        'pic_url' => 'string',
        'pmi' => 'int',
        'role_name' => 'string',
        'status' => 'string',
        'timezone' => 'string',
        'type' => 'int',
        'use_pmi' => 'bool',
        'vanity_url' => 'string',
        'verified' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'cms_user_id' => null,
        'company' => null,
        'created_at' => 'date-time',
        'custom_attributes' => null,
        'dept' => null,
        'email' => null,
        'first_name' => null,
        'group_ids' => null,
        'host_key' => null,
        'id' => null,
        'im_group_ids' => null,
        'jid' => null,
        'job_title' => null,
        'language' => null,
        'last_client_version' => null,
        'last_login_time' => 'date-time',
        'last_name' => null,
        'location' => null,
        'personal_meeting_url' => null,
        'phone_country' => null,
        'phone_number' => null,
        'pic_url' => null,
        'pmi' => 'int64',
        'role_name' => null,
        'status' => null,
        'timezone' => null,
        'type' => null,
        'use_pmi' => null,
        'vanity_url' => null,
        'verified' => null
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
        'cms_user_id' => 'cms_user_id',
        'company' => 'company',
        'created_at' => 'created_at',
        'custom_attributes' => 'custom_attributes',
        'dept' => 'dept',
        'email' => 'email',
        'first_name' => 'first_name',
        'group_ids' => 'group_ids',
        'host_key' => 'host_key',
        'id' => 'id',
        'im_group_ids' => 'im_group_ids',
        'jid' => 'jid',
        'job_title' => 'job_title',
        'language' => 'language',
        'last_client_version' => 'last_client_version',
        'last_login_time' => 'last_login_time',
        'last_name' => 'last_name',
        'location' => 'location',
        'personal_meeting_url' => 'personal_meeting_url',
        'phone_country' => 'phone_country',
        'phone_number' => 'phone_number',
        'pic_url' => 'pic_url',
        'pmi' => 'pmi',
        'role_name' => 'role_name',
        'status' => 'status',
        'timezone' => 'timezone',
        'type' => 'type',
        'use_pmi' => 'use_pmi',
        'vanity_url' => 'vanity_url',
        'verified' => 'verified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'cms_user_id' => 'setCmsUserId',
        'company' => 'setCompany',
        'created_at' => 'setCreatedAt',
        'custom_attributes' => 'setCustomAttributes',
        'dept' => 'setDept',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'group_ids' => 'setGroupIds',
        'host_key' => 'setHostKey',
        'id' => 'setId',
        'im_group_ids' => 'setImGroupIds',
        'jid' => 'setJid',
        'job_title' => 'setJobTitle',
        'language' => 'setLanguage',
        'last_client_version' => 'setLastClientVersion',
        'last_login_time' => 'setLastLoginTime',
        'last_name' => 'setLastName',
        'location' => 'setLocation',
        'personal_meeting_url' => 'setPersonalMeetingUrl',
        'phone_country' => 'setPhoneCountry',
        'phone_number' => 'setPhoneNumber',
        'pic_url' => 'setPicUrl',
        'pmi' => 'setPmi',
        'role_name' => 'setRoleName',
        'status' => 'setStatus',
        'timezone' => 'setTimezone',
        'type' => 'setType',
        'use_pmi' => 'setUsePmi',
        'vanity_url' => 'setVanityUrl',
        'verified' => 'setVerified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'cms_user_id' => 'getCmsUserId',
        'company' => 'getCompany',
        'created_at' => 'getCreatedAt',
        'custom_attributes' => 'getCustomAttributes',
        'dept' => 'getDept',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'group_ids' => 'getGroupIds',
        'host_key' => 'getHostKey',
        'id' => 'getId',
        'im_group_ids' => 'getImGroupIds',
        'jid' => 'getJid',
        'job_title' => 'getJobTitle',
        'language' => 'getLanguage',
        'last_client_version' => 'getLastClientVersion',
        'last_login_time' => 'getLastLoginTime',
        'last_name' => 'getLastName',
        'location' => 'getLocation',
        'personal_meeting_url' => 'getPersonalMeetingUrl',
        'phone_country' => 'getPhoneCountry',
        'phone_number' => 'getPhoneNumber',
        'pic_url' => 'getPicUrl',
        'pmi' => 'getPmi',
        'role_name' => 'getRoleName',
        'status' => 'getStatus',
        'timezone' => 'getTimezone',
        'type' => 'getType',
        'use_pmi' => 'getUsePmi',
        'vanity_url' => 'getVanityUrl',
        'verified' => 'getVerified'
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

    const STATUS_PENDING = 'pending';
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['cms_user_id'] = isset($data['cms_user_id']) ? $data['cms_user_id'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['custom_attributes'] = isset($data['custom_attributes']) ? $data['custom_attributes'] : null;
        $this->container['dept'] = isset($data['dept']) ? $data['dept'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : 'john.doe@email.com';
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['group_ids'] = isset($data['group_ids']) ? $data['group_ids'] : null;
        $this->container['host_key'] = isset($data['host_key']) ? $data['host_key'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['im_group_ids'] = isset($data['im_group_ids']) ? $data['im_group_ids'] : null;
        $this->container['jid'] = isset($data['jid']) ? $data['jid'] : null;
        $this->container['job_title'] = isset($data['job_title']) ? $data['job_title'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['last_client_version'] = isset($data['last_client_version']) ? $data['last_client_version'] : null;
        $this->container['last_login_time'] = isset($data['last_login_time']) ? $data['last_login_time'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['personal_meeting_url'] = isset($data['personal_meeting_url']) ? $data['personal_meeting_url'] : null;
        $this->container['phone_country'] = isset($data['phone_country']) ? $data['phone_country'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['pic_url'] = isset($data['pic_url']) ? $data['pic_url'] : null;
        $this->container['pmi'] = isset($data['pmi']) ? $data['pmi'] : null;
        $this->container['role_name'] = isset($data['role_name']) ? $data['role_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['use_pmi'] = isset($data['use_pmi']) ? $data['use_pmi'] : false;
        $this->container['vanity_url'] = isset($data['vanity_url']) ? $data['vanity_url'] : null;
        $this->container['verified'] = isset($data['verified']) ? $data['verified'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 64.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * @param string|null $account_id User's account ID.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets cms_user_id
     *
     * @return string|null
     */
    public function getCmsUserId()
    {
        return $this->container['cms_user_id'];
    }

    /**
     * Sets cms_user_id
     *
     * @param string|null $cms_user_id CMS ID of user, only enabled for Kaltura integration.
     *
     * @return $this
     */
    public function setCmsUserId($cms_user_id)
    {
        $this->container['cms_user_id'] = $cms_user_id;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company User's company.
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The date and time at which this user was created.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets custom_attributes
     *
     * @return \Zoom\Api\Model\InlineResponse20034CustomAttributes|null
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     *
     * @param \Zoom\Api\Model\InlineResponse20034CustomAttributes|null $custom_attributes custom_attributes
     *
     * @return $this
     */
    public function setCustomAttributes($custom_attributes)
    {
        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }

    /**
     * Gets dept
     *
     * @return string|null
     */
    public function getDept()
    {
        return $this->container['dept'];
    }

    /**
     * Sets dept
     *
     * @param string|null $dept Department.
     *
     * @return $this
     */
    public function setDept($dept)
    {
        $this->container['dept'] = $dept;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email User's email address.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name User's first name.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if (!is_null($first_name) && (mb_strlen($first_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling InlineResponse20047., must be smaller than or equal to 64.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets group_ids
     *
     * @return string[]|null
     */
    public function getGroupIds()
    {
        return $this->container['group_ids'];
    }

    /**
     * Sets group_ids
     *
     * @param string[]|null $group_ids IDs of the web groups user belongs to.
     *
     * @return $this
     */
    public function setGroupIds($group_ids)
    {
        $this->container['group_ids'] = $group_ids;

        return $this;
    }

    /**
     * Gets host_key
     *
     * @return string|null
     */
    public function getHostKey()
    {
        return $this->container['host_key'];
    }

    /**
     * Sets host_key
     *
     * @param string|null $host_key User's host key.
     *
     * @return $this
     */
    public function setHostKey($host_key)
    {
        $this->container['host_key'] = $host_key;

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
     * @param string|null $id User ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets im_group_ids
     *
     * @return string[]|null
     */
    public function getImGroupIds()
    {
        return $this->container['im_group_ids'];
    }

    /**
     * Sets im_group_ids
     *
     * @param string[]|null $im_group_ids IM IDs of the groups user belongs to.
     *
     * @return $this
     */
    public function setImGroupIds($im_group_ids)
    {
        $this->container['im_group_ids'] = $im_group_ids;

        return $this;
    }

    /**
     * Gets jid
     *
     * @return string|null
     */
    public function getJid()
    {
        return $this->container['jid'];
    }

    /**
     * Sets jid
     *
     * @param string|null $jid jid
     *
     * @return $this
     */
    public function setJid($jid)
    {
        $this->container['jid'] = $jid;

        return $this;
    }

    /**
     * Gets job_title
     *
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string|null $job_title User's job title.
     *
     * @return $this
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language Default language for the Zoom Web Portal.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets last_client_version
     *
     * @return string|null
     */
    public function getLastClientVersion()
    {
        return $this->container['last_client_version'];
    }

    /**
     * Sets last_client_version
     *
     * @param string|null $last_client_version User last login client version.
     *
     * @return $this
     */
    public function setLastClientVersion($last_client_version)
    {
        $this->container['last_client_version'] = $last_client_version;

        return $this;
    }

    /**
     * Gets last_login_time
     *
     * @return \DateTime|null
     */
    public function getLastLoginTime()
    {
        return $this->container['last_login_time'];
    }

    /**
     * Sets last_login_time
     *
     * @param \DateTime|null $last_login_time User last login time.
     *
     * @return $this
     */
    public function setLastLoginTime($last_login_time)
    {
        $this->container['last_login_time'] = $last_login_time;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name User's last name.
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        if (!is_null($last_name) && (mb_strlen($last_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling InlineResponse20047., must be smaller than or equal to 64.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location User's location.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets personal_meeting_url
     *
     * @return string|null
     */
    public function getPersonalMeetingUrl()
    {
        return $this->container['personal_meeting_url'];
    }

    /**
     * Sets personal_meeting_url
     *
     * @param string|null $personal_meeting_url User's personal meeting url.
     *
     * @return $this
     */
    public function setPersonalMeetingUrl($personal_meeting_url)
    {
        $this->container['personal_meeting_url'] = $personal_meeting_url;

        return $this;
    }

    /**
     * Gets phone_country
     *
     * @return string|null
     */
    public function getPhoneCountry()
    {
        return $this->container['phone_country'];
    }

    /**
     * Sets phone_country
     *
     * @param string|null $phone_country User's country for Company Phone Number.
     *
     * @return $this
     */
    public function setPhoneCountry($phone_country)
    {
        $this->container['phone_country'] = $phone_country;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number User's phone number.
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets pic_url
     *
     * @return string|null
     */
    public function getPicUrl()
    {
        return $this->container['pic_url'];
    }

    /**
     * Sets pic_url
     *
     * @param string|null $pic_url The URL for user's profile picture.
     *
     * @return $this
     */
    public function setPicUrl($pic_url)
    {
        $this->container['pic_url'] = $pic_url;

        return $this;
    }

    /**
     * Gets pmi
     *
     * @return int|null
     */
    public function getPmi()
    {
        return $this->container['pmi'];
    }

    /**
     * Sets pmi
     *
     * @param int|null $pmi Personal meeting ID.
     *
     * @return $this
     */
    public function setPmi($pmi)
    {
        $this->container['pmi'] = $pmi;

        return $this;
    }

    /**
     * Gets role_name
     *
     * @return string|null
     */
    public function getRoleName()
    {
        return $this->container['role_name'];
    }

    /**
     * Sets role_name
     *
     * @param string|null $role_name User's [role](https://support.zoom.us/hc/en-us/articles/115001078646-Role-Based-Access-Control) name.
     *
     * @return $this
     */
    public function setRoleName($role_name)
    {
        $this->container['role_name'] = $role_name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of user's account.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone The time zone of the user.
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type User's plan type:<br>`1` - Basic.<br>`2` - Licensed.<br>`3` - On-prem.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets use_pmi
     *
     * @return bool|null
     */
    public function getUsePmi()
    {
        return $this->container['use_pmi'];
    }

    /**
     * Sets use_pmi
     *
     * @param bool|null $use_pmi Displays `true` if user has enabled PMI for instant meetinsgs, `false` otherwise.
     *
     * @return $this
     */
    public function setUsePmi($use_pmi)
    {
        $this->container['use_pmi'] = $use_pmi;

        return $this;
    }

    /**
     * Gets vanity_url
     *
     * @return string|null
     */
    public function getVanityUrl()
    {
        return $this->container['vanity_url'];
    }

    /**
     * Sets vanity_url
     *
     * @param string|null $vanity_url Personal meeting room URL, if the user has one.
     *
     * @return $this
     */
    public function setVanityUrl($vanity_url)
    {
        $this->container['vanity_url'] = $vanity_url;

        return $this;
    }

    /**
     * Gets verified
     *
     * @return int|null
     */
    public function getVerified()
    {
        return $this->container['verified'];
    }

    /**
     * Sets verified
     *
     * @param int|null $verified Displays whether user is verified or not. <br> `1` - Account verified.<br> `0` - Account not verified.
     *
     * @return $this
     */
    public function setVerified($verified)
    {
        $this->container['verified'] = $verified;

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


