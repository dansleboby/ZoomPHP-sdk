<?php
/**
 * MeetingRegistrant
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * MeetingRegistrant Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MeetingRegistrant implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Meeting_Registrant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'address' => 'string',
        'city' => 'string',
        'comments' => 'string',
        'country' => 'string',
        'custom_questions' => '\OpenAPI\Client\Model\CustomQuestion[]',
        'email' => 'string',
        'first_name' => 'string',
        'industry' => 'string',
        'job_title' => 'string',
        'last_name' => 'string',
        'no_of_employees' => 'string',
        'org' => 'string',
        'phone' => 'string',
        'purchasing_time_frame' => 'string',
        'role_in_purchase_process' => 'string',
        'state' => 'string',
        'status' => 'string',
        'zip' => 'string',
        'create_time' => '\DateTime',
        'join_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'address' => null,
        'city' => null,
        'comments' => null,
        'country' => null,
        'custom_questions' => null,
        'email' => 'email',
        'first_name' => null,
        'industry' => null,
        'job_title' => null,
        'last_name' => null,
        'no_of_employees' => null,
        'org' => null,
        'phone' => null,
        'purchasing_time_frame' => null,
        'role_in_purchase_process' => null,
        'state' => null,
        'status' => null,
        'zip' => null,
        'create_time' => 'date-time',
        'join_url' => 'url'
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
        'id' => 'id',
        'address' => 'address',
        'city' => 'city',
        'comments' => 'comments',
        'country' => 'country',
        'custom_questions' => 'custom_questions',
        'email' => 'email',
        'first_name' => 'first_name',
        'industry' => 'industry',
        'job_title' => 'job_title',
        'last_name' => 'last_name',
        'no_of_employees' => 'no_of_employees',
        'org' => 'org',
        'phone' => 'phone',
        'purchasing_time_frame' => 'purchasing_time_frame',
        'role_in_purchase_process' => 'role_in_purchase_process',
        'state' => 'state',
        'status' => 'status',
        'zip' => 'zip',
        'create_time' => 'create_time',
        'join_url' => 'join_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'address' => 'setAddress',
        'city' => 'setCity',
        'comments' => 'setComments',
        'country' => 'setCountry',
        'custom_questions' => 'setCustomQuestions',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'industry' => 'setIndustry',
        'job_title' => 'setJobTitle',
        'last_name' => 'setLastName',
        'no_of_employees' => 'setNoOfEmployees',
        'org' => 'setOrg',
        'phone' => 'setPhone',
        'purchasing_time_frame' => 'setPurchasingTimeFrame',
        'role_in_purchase_process' => 'setRoleInPurchaseProcess',
        'state' => 'setState',
        'status' => 'setStatus',
        'zip' => 'setZip',
        'create_time' => 'setCreateTime',
        'join_url' => 'setJoinUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'address' => 'getAddress',
        'city' => 'getCity',
        'comments' => 'getComments',
        'country' => 'getCountry',
        'custom_questions' => 'getCustomQuestions',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'industry' => 'getIndustry',
        'job_title' => 'getJobTitle',
        'last_name' => 'getLastName',
        'no_of_employees' => 'getNoOfEmployees',
        'org' => 'getOrg',
        'phone' => 'getPhone',
        'purchasing_time_frame' => 'getPurchasingTimeFrame',
        'role_in_purchase_process' => 'getRoleInPurchaseProcess',
        'state' => 'getState',
        'status' => 'getStatus',
        'zip' => 'getZip',
        'create_time' => 'getCreateTime',
        'join_url' => 'getJoinUrl'
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

    public const NO_OF_EMPLOYEES_EMPTY = '';
    public const NO_OF_EMPLOYEES__1_20 = '1-20';
    public const NO_OF_EMPLOYEES__21_50 = '21-50';
    public const NO_OF_EMPLOYEES__51_100 = '51-100';
    public const NO_OF_EMPLOYEES__101_250 = '101-250';
    public const NO_OF_EMPLOYEES__251_500 = '251-500';
    public const NO_OF_EMPLOYEES__501_1000 = '501-1,000';
    public const NO_OF_EMPLOYEES__1001_5000 = '1,001-5,000';
    public const NO_OF_EMPLOYEES__5001_10000 = '5,001-10,000';
    public const NO_OF_EMPLOYEES_MORE_THAN_10000 = 'More than 10,000';
    public const PURCHASING_TIME_FRAME_EMPTY = '';
    public const PURCHASING_TIME_FRAME_WITHIN_A_MONTH = 'Within a month';
    public const PURCHASING_TIME_FRAME__1_3_MONTHS = '1-3 months';
    public const PURCHASING_TIME_FRAME__4_6_MONTHS = '4-6 months';
    public const PURCHASING_TIME_FRAME_MORE_THAN_6_MONTHS = 'More than 6 months';
    public const PURCHASING_TIME_FRAME_NO_TIMEFRAME = 'No timeframe';
    public const ROLE_IN_PURCHASE_PROCESS_EMPTY = '';
    public const ROLE_IN_PURCHASE_PROCESS_DECISION_MAKER = 'Decision Maker';
    public const ROLE_IN_PURCHASE_PROCESS_EVALUATOR_RECOMMENDER = 'Evaluator/Recommender';
    public const ROLE_IN_PURCHASE_PROCESS_INFLUENCER = 'Influencer';
    public const ROLE_IN_PURCHASE_PROCESS_NOT_INVOLVED = 'Not involved';
    public const STATUS_APPROVED = 'approved';
    public const STATUS_PENDING = 'pending';
    public const STATUS_DENIED = 'denied';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNoOfEmployeesAllowableValues()
    {
        return [
            self::NO_OF_EMPLOYEES_EMPTY,
            self::NO_OF_EMPLOYEES__1_20,
            self::NO_OF_EMPLOYEES__21_50,
            self::NO_OF_EMPLOYEES__51_100,
            self::NO_OF_EMPLOYEES__101_250,
            self::NO_OF_EMPLOYEES__251_500,
            self::NO_OF_EMPLOYEES__501_1000,
            self::NO_OF_EMPLOYEES__1001_5000,
            self::NO_OF_EMPLOYEES__5001_10000,
            self::NO_OF_EMPLOYEES_MORE_THAN_10000,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPurchasingTimeFrameAllowableValues()
    {
        return [
            self::PURCHASING_TIME_FRAME_EMPTY,
            self::PURCHASING_TIME_FRAME_WITHIN_A_MONTH,
            self::PURCHASING_TIME_FRAME__1_3_MONTHS,
            self::PURCHASING_TIME_FRAME__4_6_MONTHS,
            self::PURCHASING_TIME_FRAME_MORE_THAN_6_MONTHS,
            self::PURCHASING_TIME_FRAME_NO_TIMEFRAME,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleInPurchaseProcessAllowableValues()
    {
        return [
            self::ROLE_IN_PURCHASE_PROCESS_EMPTY,
            self::ROLE_IN_PURCHASE_PROCESS_DECISION_MAKER,
            self::ROLE_IN_PURCHASE_PROCESS_EVALUATOR_RECOMMENDER,
            self::ROLE_IN_PURCHASE_PROCESS_INFLUENCER,
            self::ROLE_IN_PURCHASE_PROCESS_NOT_INVOLVED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_APPROVED,
            self::STATUS_PENDING,
            self::STATUS_DENIED,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['custom_questions'] = $data['custom_questions'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['industry'] = $data['industry'] ?? null;
        $this->container['job_title'] = $data['job_title'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['no_of_employees'] = $data['no_of_employees'] ?? null;
        $this->container['org'] = $data['org'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['purchasing_time_frame'] = $data['purchasing_time_frame'] ?? null;
        $this->container['role_in_purchase_process'] = $data['role_in_purchase_process'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
        $this->container['create_time'] = $data['create_time'] ?? null;
        $this->container['join_url'] = $data['join_url'] ?? null;
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
        if ((mb_strlen($this->container['email']) > 128)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ((mb_strlen($this->container['first_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 64.";
        }

        $allowedValues = $this->getNoOfEmployeesAllowableValues();
        if (!is_null($this->container['no_of_employees']) && !in_array($this->container['no_of_employees'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'no_of_employees', must be one of '%s'",
                $this->container['no_of_employees'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPurchasingTimeFrameAllowableValues();
        if (!is_null($this->container['purchasing_time_frame']) && !in_array($this->container['purchasing_time_frame'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'purchasing_time_frame', must be one of '%s'",
                $this->container['purchasing_time_frame'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRoleInPurchaseProcessAllowableValues();
        if (!is_null($this->container['role_in_purchase_process']) && !in_array($this->container['role_in_purchase_process'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'role_in_purchase_process', must be one of '%s'",
                $this->container['role_in_purchase_process'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address The registrant's address.
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The registrant's city.
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments The registrant's questions and comments.
     *
     * @return self
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The registrant's two-letter [country code](https://marketplace.zoom.us/docs/api-reference/other-references/abbreviation-lists#countries).
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets custom_questions
     *
     * @return \OpenAPI\Client\Model\CustomQuestion[]|null
     */
    public function getCustomQuestions()
    {
        return $this->container['custom_questions'];
    }

    /**
     * Sets custom_questions
     *
     * @param \OpenAPI\Client\Model\CustomQuestion[]|null $custom_questions Information about custom questions.
     *
     * @return self
     */
    public function setCustomQuestions($custom_questions)
    {
        $this->container['custom_questions'] = $custom_questions;

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
     * @param string $email The registrant's email address. See [Email address display rules](https://marketplace.zoom.us/docs/api-reference/using-zoom-apis#email-address) for return value details.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if ((mb_strlen($email) > 128)) {
            throw new \InvalidArgumentException('invalid length for $email when calling MeetingRegistrant., must be smaller than or equal to 128.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name The registrant's first name.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if ((mb_strlen($first_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling MeetingRegistrant., must be smaller than or equal to 64.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string|null
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string|null $industry The registrant's industry.
     *
     * @return self
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

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
     * @param string|null $job_title The registrant's job title.
     *
     * @return self
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

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
     * @param string|null $last_name The registrant's last name.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (!is_null($last_name) && (mb_strlen($last_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling MeetingRegistrant., must be smaller than or equal to 64.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets no_of_employees
     *
     * @return string|null
     */
    public function getNoOfEmployees()
    {
        return $this->container['no_of_employees'];
    }

    /**
     * Sets no_of_employees
     *
     * @param string|null $no_of_employees The registrant's number of employees:  * `1-20`  * `21-50`  * `51-100`  * `101-250`  * `251-500`  * `501-1,000`  * `1,001-5,000`  * `5,001-10,000`  * `More than 10,000`
     *
     * @return self
     */
    public function setNoOfEmployees($no_of_employees)
    {
        $allowedValues = $this->getNoOfEmployeesAllowableValues();
        if (!is_null($no_of_employees) && !in_array($no_of_employees, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'no_of_employees', must be one of '%s'",
                    $no_of_employees,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['no_of_employees'] = $no_of_employees;

        return $this;
    }

    /**
     * Gets org
     *
     * @return string|null
     */
    public function getOrg()
    {
        return $this->container['org'];
    }

    /**
     * Sets org
     *
     * @param string|null $org The registrant's organization.
     *
     * @return self
     */
    public function setOrg($org)
    {
        $this->container['org'] = $org;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The registrant's phone number.
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets purchasing_time_frame
     *
     * @return string|null
     */
    public function getPurchasingTimeFrame()
    {
        return $this->container['purchasing_time_frame'];
    }

    /**
     * Sets purchasing_time_frame
     *
     * @param string|null $purchasing_time_frame The registrant's purchasing time frame:  * `Within a month`  * `1-3 months`  * `4-6 months`  * `More than 6 months`  * `No timeframe`
     *
     * @return self
     */
    public function setPurchasingTimeFrame($purchasing_time_frame)
    {
        $allowedValues = $this->getPurchasingTimeFrameAllowableValues();
        if (!is_null($purchasing_time_frame) && !in_array($purchasing_time_frame, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'purchasing_time_frame', must be one of '%s'",
                    $purchasing_time_frame,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['purchasing_time_frame'] = $purchasing_time_frame;

        return $this;
    }

    /**
     * Gets role_in_purchase_process
     *
     * @return string|null
     */
    public function getRoleInPurchaseProcess()
    {
        return $this->container['role_in_purchase_process'];
    }

    /**
     * Sets role_in_purchase_process
     *
     * @param string|null $role_in_purchase_process The registrant's role in the purchase process:  * `Decision Maker`  * `Evaluator/Recommender`  * `Influencer`  * `Not involved`
     *
     * @return self
     */
    public function setRoleInPurchaseProcess($role_in_purchase_process)
    {
        $allowedValues = $this->getRoleInPurchaseProcessAllowableValues();
        if (!is_null($role_in_purchase_process) && !in_array($role_in_purchase_process, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'role_in_purchase_process', must be one of '%s'",
                    $role_in_purchase_process,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role_in_purchase_process'] = $role_in_purchase_process;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The registrant's state or province.
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * @param string|null $status The registrant's registration status: * `approved` — The registrant is approved to join the meeting.  * `pending` — The registrant's registration is pending. * `denied` — The registrant was declined to join the meeting.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip The registrant's ZIP or postal code.
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return \DateTime|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param \DateTime|null $create_time The registrant's registration date and time.
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets join_url
     *
     * @return string|null
     */
    public function getJoinUrl()
    {
        return $this->container['join_url'];
    }

    /**
     * Sets join_url
     *
     * @param string|null $join_url The URL with which the approved registrant can join the meeting.
     *
     * @return self
     */
    public function setJoinUrl($join_url)
    {
        $this->container['join_url'] = $join_url;

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


