<?php
/**
 * UserWorkloadsList
 *
 * PHP version 5
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Gitee Open API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1.333
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.23
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GiteeEnterprise\Model;

use \ArrayAccess;
use \GiteeEnterprise\ObjectSerializer;

/**
 * UserWorkloadsList Class Doc Comment
 *
 * @category Class
 * @description 查询成员工时明细
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserWorkloadsList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserWorkloadsList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user' => '\GiteeEnterprise\Model\UserWithRemark',
        'issueId' => 'int',
        'issueIdent' => 'string',
        'issueTypeCategory' => 'string',
        'issueTypeId' => 'int',
        'issueTypeName' => 'string',
        'issueTitle' => 'string',
        'issueCreatedAt' => '\DateTime',
        'issueFinishedAt' => '\DateTime',
        'workloadId' => 'int',
        'issueEstimatedDuration' => 'float',
        'workloadRegisteredDuration' => 'float',
        'workloadRegisteredDate' => '\DateTime',
        'workloadRegisteredDescription' => 'string',
        'programId' => 'int',
        'programName' => 'string',
        'scrumSprintId' => 'int',
        'scrumSprintName' => 'string',
        'scrumVersionId' => 'int',
        'scrumVersionNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'user' => null,
        'issueId' => 'int32',
        'issueIdent' => null,
        'issueTypeCategory' => null,
        'issueTypeId' => 'int32',
        'issueTypeName' => null,
        'issueTitle' => null,
        'issueCreatedAt' => 'date-time',
        'issueFinishedAt' => 'date-time',
        'workloadId' => 'int32',
        'issueEstimatedDuration' => 'float',
        'workloadRegisteredDuration' => 'float',
        'workloadRegisteredDate' => 'date',
        'workloadRegisteredDescription' => null,
        'programId' => 'int32',
        'programName' => null,
        'scrumSprintId' => 'int32',
        'scrumSprintName' => null,
        'scrumVersionId' => 'int32',
        'scrumVersionNumber' => null
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
        'user' => 'user',
        'issueId' => 'issue_id',
        'issueIdent' => 'issue_ident',
        'issueTypeCategory' => 'issue_type_category',
        'issueTypeId' => 'issue_type_id',
        'issueTypeName' => 'issue_type_name',
        'issueTitle' => 'issue_title',
        'issueCreatedAt' => 'issue_created_at',
        'issueFinishedAt' => 'issue_finished_at',
        'workloadId' => 'workload_id',
        'issueEstimatedDuration' => 'issue_estimated_duration',
        'workloadRegisteredDuration' => 'workload_registered_duration',
        'workloadRegisteredDate' => 'workload_registered_date',
        'workloadRegisteredDescription' => 'workload_registered_description',
        'programId' => 'program_id',
        'programName' => 'program_name',
        'scrumSprintId' => 'scrum_sprint_id',
        'scrumSprintName' => 'scrum_sprint_name',
        'scrumVersionId' => 'scrum_version_id',
        'scrumVersionNumber' => 'scrum_version_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user' => 'setUser',
        'issueId' => 'setIssueId',
        'issueIdent' => 'setIssueIdent',
        'issueTypeCategory' => 'setIssueTypeCategory',
        'issueTypeId' => 'setIssueTypeId',
        'issueTypeName' => 'setIssueTypeName',
        'issueTitle' => 'setIssueTitle',
        'issueCreatedAt' => 'setIssueCreatedAt',
        'issueFinishedAt' => 'setIssueFinishedAt',
        'workloadId' => 'setWorkloadId',
        'issueEstimatedDuration' => 'setIssueEstimatedDuration',
        'workloadRegisteredDuration' => 'setWorkloadRegisteredDuration',
        'workloadRegisteredDate' => 'setWorkloadRegisteredDate',
        'workloadRegisteredDescription' => 'setWorkloadRegisteredDescription',
        'programId' => 'setProgramId',
        'programName' => 'setProgramName',
        'scrumSprintId' => 'setScrumSprintId',
        'scrumSprintName' => 'setScrumSprintName',
        'scrumVersionId' => 'setScrumVersionId',
        'scrumVersionNumber' => 'setScrumVersionNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user' => 'getUser',
        'issueId' => 'getIssueId',
        'issueIdent' => 'getIssueIdent',
        'issueTypeCategory' => 'getIssueTypeCategory',
        'issueTypeId' => 'getIssueTypeId',
        'issueTypeName' => 'getIssueTypeName',
        'issueTitle' => 'getIssueTitle',
        'issueCreatedAt' => 'getIssueCreatedAt',
        'issueFinishedAt' => 'getIssueFinishedAt',
        'workloadId' => 'getWorkloadId',
        'issueEstimatedDuration' => 'getIssueEstimatedDuration',
        'workloadRegisteredDuration' => 'getWorkloadRegisteredDuration',
        'workloadRegisteredDate' => 'getWorkloadRegisteredDate',
        'workloadRegisteredDescription' => 'getWorkloadRegisteredDescription',
        'programId' => 'getProgramId',
        'programName' => 'getProgramName',
        'scrumSprintId' => 'getScrumSprintId',
        'scrumSprintName' => 'getScrumSprintName',
        'scrumVersionId' => 'getScrumVersionId',
        'scrumVersionNumber' => 'getScrumVersionNumber'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['issueIdent'] = isset($data['issueIdent']) ? $data['issueIdent'] : null;
        $this->container['issueTypeCategory'] = isset($data['issueTypeCategory']) ? $data['issueTypeCategory'] : null;
        $this->container['issueTypeId'] = isset($data['issueTypeId']) ? $data['issueTypeId'] : null;
        $this->container['issueTypeName'] = isset($data['issueTypeName']) ? $data['issueTypeName'] : null;
        $this->container['issueTitle'] = isset($data['issueTitle']) ? $data['issueTitle'] : null;
        $this->container['issueCreatedAt'] = isset($data['issueCreatedAt']) ? $data['issueCreatedAt'] : null;
        $this->container['issueFinishedAt'] = isset($data['issueFinishedAt']) ? $data['issueFinishedAt'] : null;
        $this->container['workloadId'] = isset($data['workloadId']) ? $data['workloadId'] : null;
        $this->container['issueEstimatedDuration'] = isset($data['issueEstimatedDuration']) ? $data['issueEstimatedDuration'] : null;
        $this->container['workloadRegisteredDuration'] = isset($data['workloadRegisteredDuration']) ? $data['workloadRegisteredDuration'] : null;
        $this->container['workloadRegisteredDate'] = isset($data['workloadRegisteredDate']) ? $data['workloadRegisteredDate'] : null;
        $this->container['workloadRegisteredDescription'] = isset($data['workloadRegisteredDescription']) ? $data['workloadRegisteredDescription'] : null;
        $this->container['programId'] = isset($data['programId']) ? $data['programId'] : null;
        $this->container['programName'] = isset($data['programName']) ? $data['programName'] : null;
        $this->container['scrumSprintId'] = isset($data['scrumSprintId']) ? $data['scrumSprintId'] : null;
        $this->container['scrumSprintName'] = isset($data['scrumSprintName']) ? $data['scrumSprintName'] : null;
        $this->container['scrumVersionId'] = isset($data['scrumVersionId']) ? $data['scrumVersionId'] : null;
        $this->container['scrumVersionNumber'] = isset($data['scrumVersionNumber']) ? $data['scrumVersionNumber'] : null;
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
     * Gets user
     *
     * @return \GiteeEnterprise\Model\UserWithRemark
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \GiteeEnterprise\Model\UserWithRemark $user 用户
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets issueId
     *
     * @return int
     */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
     * Sets issueId
     *
     * @param int $issueId 工作项ID
     *
     * @return $this
     */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;

        return $this;
    }

    /**
     * Gets issueIdent
     *
     * @return string
     */
    public function getIssueIdent()
    {
        return $this->container['issueIdent'];
    }

    /**
     * Sets issueIdent
     *
     * @param string $issueIdent 工作项ident
     *
     * @return $this
     */
    public function setIssueIdent($issueIdent)
    {
        $this->container['issueIdent'] = $issueIdent;

        return $this;
    }

    /**
     * Gets issueTypeCategory
     *
     * @return string
     */
    public function getIssueTypeCategory()
    {
        return $this->container['issueTypeCategory'];
    }

    /**
     * Sets issueTypeCategory
     *
     * @param string $issueTypeCategory 工作项类型属性
     *
     * @return $this
     */
    public function setIssueTypeCategory($issueTypeCategory)
    {
        $this->container['issueTypeCategory'] = $issueTypeCategory;

        return $this;
    }

    /**
     * Gets issueTypeId
     *
     * @return int
     */
    public function getIssueTypeId()
    {
        return $this->container['issueTypeId'];
    }

    /**
     * Sets issueTypeId
     *
     * @param int $issueTypeId 工作项类型ID
     *
     * @return $this
     */
    public function setIssueTypeId($issueTypeId)
    {
        $this->container['issueTypeId'] = $issueTypeId;

        return $this;
    }

    /**
     * Gets issueTypeName
     *
     * @return string
     */
    public function getIssueTypeName()
    {
        return $this->container['issueTypeName'];
    }

    /**
     * Sets issueTypeName
     *
     * @param string $issueTypeName 工作项类型名称
     *
     * @return $this
     */
    public function setIssueTypeName($issueTypeName)
    {
        $this->container['issueTypeName'] = $issueTypeName;

        return $this;
    }

    /**
     * Gets issueTitle
     *
     * @return string
     */
    public function getIssueTitle()
    {
        return $this->container['issueTitle'];
    }

    /**
     * Sets issueTitle
     *
     * @param string $issueTitle 工作项标题
     *
     * @return $this
     */
    public function setIssueTitle($issueTitle)
    {
        $this->container['issueTitle'] = $issueTitle;

        return $this;
    }

    /**
     * Gets issueCreatedAt
     *
     * @return \DateTime
     */
    public function getIssueCreatedAt()
    {
        return $this->container['issueCreatedAt'];
    }

    /**
     * Sets issueCreatedAt
     *
     * @param \DateTime $issueCreatedAt 工作项创建时间
     *
     * @return $this
     */
    public function setIssueCreatedAt($issueCreatedAt)
    {
        $this->container['issueCreatedAt'] = $issueCreatedAt;

        return $this;
    }

    /**
     * Gets issueFinishedAt
     *
     * @return \DateTime
     */
    public function getIssueFinishedAt()
    {
        return $this->container['issueFinishedAt'];
    }

    /**
     * Sets issueFinishedAt
     *
     * @param \DateTime $issueFinishedAt 工作项完成时间
     *
     * @return $this
     */
    public function setIssueFinishedAt($issueFinishedAt)
    {
        $this->container['issueFinishedAt'] = $issueFinishedAt;

        return $this;
    }

    /**
     * Gets workloadId
     *
     * @return int
     */
    public function getWorkloadId()
    {
        return $this->container['workloadId'];
    }

    /**
     * Sets workloadId
     *
     * @param int $workloadId 工时ID
     *
     * @return $this
     */
    public function setWorkloadId($workloadId)
    {
        $this->container['workloadId'] = $workloadId;

        return $this;
    }

    /**
     * Gets issueEstimatedDuration
     *
     * @return float
     */
    public function getIssueEstimatedDuration()
    {
        return $this->container['issueEstimatedDuration'];
    }

    /**
     * Sets issueEstimatedDuration
     *
     * @param float $issueEstimatedDuration 工作项预计工时
     *
     * @return $this
     */
    public function setIssueEstimatedDuration($issueEstimatedDuration)
    {
        $this->container['issueEstimatedDuration'] = $issueEstimatedDuration;

        return $this;
    }

    /**
     * Gets workloadRegisteredDuration
     *
     * @return float
     */
    public function getWorkloadRegisteredDuration()
    {
        return $this->container['workloadRegisteredDuration'];
    }

    /**
     * Sets workloadRegisteredDuration
     *
     * @param float $workloadRegisteredDuration 登记工时
     *
     * @return $this
     */
    public function setWorkloadRegisteredDuration($workloadRegisteredDuration)
    {
        $this->container['workloadRegisteredDuration'] = $workloadRegisteredDuration;

        return $this;
    }

    /**
     * Gets workloadRegisteredDate
     *
     * @return \DateTime
     */
    public function getWorkloadRegisteredDate()
    {
        return $this->container['workloadRegisteredDate'];
    }

    /**
     * Sets workloadRegisteredDate
     *
     * @param \DateTime $workloadRegisteredDate 登记日期
     *
     * @return $this
     */
    public function setWorkloadRegisteredDate($workloadRegisteredDate)
    {
        $this->container['workloadRegisteredDate'] = $workloadRegisteredDate;

        return $this;
    }

    /**
     * Gets workloadRegisteredDescription
     *
     * @return string
     */
    public function getWorkloadRegisteredDescription()
    {
        return $this->container['workloadRegisteredDescription'];
    }

    /**
     * Sets workloadRegisteredDescription
     *
     * @param string $workloadRegisteredDescription 登记内容
     *
     * @return $this
     */
    public function setWorkloadRegisteredDescription($workloadRegisteredDescription)
    {
        $this->container['workloadRegisteredDescription'] = $workloadRegisteredDescription;

        return $this;
    }

    /**
     * Gets programId
     *
     * @return int
     */
    public function getProgramId()
    {
        return $this->container['programId'];
    }

    /**
     * Sets programId
     *
     * @param int $programId 项目ID
     *
     * @return $this
     */
    public function setProgramId($programId)
    {
        $this->container['programId'] = $programId;

        return $this;
    }

    /**
     * Gets programName
     *
     * @return string
     */
    public function getProgramName()
    {
        return $this->container['programName'];
    }

    /**
     * Sets programName
     *
     * @param string $programName 项目名称
     *
     * @return $this
     */
    public function setProgramName($programName)
    {
        $this->container['programName'] = $programName;

        return $this;
    }

    /**
     * Gets scrumSprintId
     *
     * @return int
     */
    public function getScrumSprintId()
    {
        return $this->container['scrumSprintId'];
    }

    /**
     * Sets scrumSprintId
     *
     * @param int $scrumSprintId 迭代ID
     *
     * @return $this
     */
    public function setScrumSprintId($scrumSprintId)
    {
        $this->container['scrumSprintId'] = $scrumSprintId;

        return $this;
    }

    /**
     * Gets scrumSprintName
     *
     * @return string
     */
    public function getScrumSprintName()
    {
        return $this->container['scrumSprintName'];
    }

    /**
     * Sets scrumSprintName
     *
     * @param string $scrumSprintName 迭代名称
     *
     * @return $this
     */
    public function setScrumSprintName($scrumSprintName)
    {
        $this->container['scrumSprintName'] = $scrumSprintName;

        return $this;
    }

    /**
     * Gets scrumVersionId
     *
     * @return int
     */
    public function getScrumVersionId()
    {
        return $this->container['scrumVersionId'];
    }

    /**
     * Sets scrumVersionId
     *
     * @param int $scrumVersionId 版本ID
     *
     * @return $this
     */
    public function setScrumVersionId($scrumVersionId)
    {
        $this->container['scrumVersionId'] = $scrumVersionId;

        return $this;
    }

    /**
     * Gets scrumVersionNumber
     *
     * @return string
     */
    public function getScrumVersionNumber()
    {
        return $this->container['scrumVersionNumber'];
    }

    /**
     * Sets scrumVersionNumber
     *
     * @param string $scrumVersionNumber 版本号
     *
     * @return $this
     */
    public function setScrumVersionNumber($scrumVersionNumber)
    {
        $this->container['scrumVersionNumber'] = $scrumVersionNumber;

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


