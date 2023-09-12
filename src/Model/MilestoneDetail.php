<?php
/**
 * MilestoneDetail
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
 * MilestoneDetail Class Doc Comment
 *
 * @category Class
 * @description 编辑里程碑
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MilestoneDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MilestoneDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'state' => 'string',
        'programId' => 'int',
        'description' => 'string',
        'descriptionHtml' => 'string',
        'assignee' => '\GiteeEnterprise\Model\UserWithRemark',
        'author' => '\GiteeEnterprise\Model\UserWithRemark',
        'issueAllCount' => 'int',
        'issueCompleteCount' => 'int',
        'prAllCount' => 'int',
        'prCompleteCount' => 'int',
        'projects' => '\GiteeEnterprise\Model\Project',
        'program' => '\GiteeEnterprise\Model\Program',
        'delayIssueCount' => 'int',
        'workTimeOverview' => '\GiteeEnterprise\Model\IssueWorkloadOverview',
        'lockByProgram' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'title' => null,
        'state' => null,
        'programId' => 'int32',
        'description' => null,
        'descriptionHtml' => null,
        'assignee' => null,
        'author' => null,
        'issueAllCount' => 'int32',
        'issueCompleteCount' => 'int32',
        'prAllCount' => 'int32',
        'prCompleteCount' => 'int32',
        'projects' => null,
        'program' => null,
        'delayIssueCount' => 'int32',
        'workTimeOverview' => null,
        'lockByProgram' => null
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
        'id' => 'id',
        'title' => 'title',
        'state' => 'state',
        'programId' => 'program_id',
        'description' => 'description',
        'descriptionHtml' => 'description_html',
        'assignee' => 'assignee',
        'author' => 'author',
        'issueAllCount' => 'issue_all_count',
        'issueCompleteCount' => 'issue_complete_count',
        'prAllCount' => 'pr_all_count',
        'prCompleteCount' => 'pr_complete_count',
        'projects' => 'projects',
        'program' => 'program',
        'delayIssueCount' => 'delay_issue_count',
        'workTimeOverview' => 'work_time_overview',
        'lockByProgram' => 'lock_by_program'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'state' => 'setState',
        'programId' => 'setProgramId',
        'description' => 'setDescription',
        'descriptionHtml' => 'setDescriptionHtml',
        'assignee' => 'setAssignee',
        'author' => 'setAuthor',
        'issueAllCount' => 'setIssueAllCount',
        'issueCompleteCount' => 'setIssueCompleteCount',
        'prAllCount' => 'setPrAllCount',
        'prCompleteCount' => 'setPrCompleteCount',
        'projects' => 'setProjects',
        'program' => 'setProgram',
        'delayIssueCount' => 'setDelayIssueCount',
        'workTimeOverview' => 'setWorkTimeOverview',
        'lockByProgram' => 'setLockByProgram'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'state' => 'getState',
        'programId' => 'getProgramId',
        'description' => 'getDescription',
        'descriptionHtml' => 'getDescriptionHtml',
        'assignee' => 'getAssignee',
        'author' => 'getAuthor',
        'issueAllCount' => 'getIssueAllCount',
        'issueCompleteCount' => 'getIssueCompleteCount',
        'prAllCount' => 'getPrAllCount',
        'prCompleteCount' => 'getPrCompleteCount',
        'projects' => 'getProjects',
        'program' => 'getProgram',
        'delayIssueCount' => 'getDelayIssueCount',
        'workTimeOverview' => 'getWorkTimeOverview',
        'lockByProgram' => 'getLockByProgram'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['programId'] = isset($data['programId']) ? $data['programId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['descriptionHtml'] = isset($data['descriptionHtml']) ? $data['descriptionHtml'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['issueAllCount'] = isset($data['issueAllCount']) ? $data['issueAllCount'] : null;
        $this->container['issueCompleteCount'] = isset($data['issueCompleteCount']) ? $data['issueCompleteCount'] : null;
        $this->container['prAllCount'] = isset($data['prAllCount']) ? $data['prAllCount'] : null;
        $this->container['prCompleteCount'] = isset($data['prCompleteCount']) ? $data['prCompleteCount'] : null;
        $this->container['projects'] = isset($data['projects']) ? $data['projects'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
        $this->container['delayIssueCount'] = isset($data['delayIssueCount']) ? $data['delayIssueCount'] : null;
        $this->container['workTimeOverview'] = isset($data['workTimeOverview']) ? $data['workTimeOverview'] : null;
        $this->container['lockByProgram'] = isset($data['lockByProgram']) ? $data['lockByProgram'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 里程碑 ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title 里程碑标题名称
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state 里程碑状态
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * @param int $programId 里程碑所属项目 ID
     *
     * @return $this
     */
    public function setProgramId($programId)
    {
        $this->container['programId'] = $programId;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 描述
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets descriptionHtml
     *
     * @return string
     */
    public function getDescriptionHtml()
    {
        return $this->container['descriptionHtml'];
    }

    /**
     * Sets descriptionHtml
     *
     * @param string $descriptionHtml 描述(html格式)
     *
     * @return $this
     */
    public function setDescriptionHtml($descriptionHtml)
    {
        $this->container['descriptionHtml'] = $descriptionHtml;

        return $this;
    }

    /**
     * Gets assignee
     *
     * @return \GiteeEnterprise\Model\UserWithRemark
     */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
     * Sets assignee
     *
     * @param \GiteeEnterprise\Model\UserWithRemark $assignee 里程碑负责人
     *
     * @return $this
     */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \GiteeEnterprise\Model\UserWithRemark
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \GiteeEnterprise\Model\UserWithRemark $author 里程碑作者
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets issueAllCount
     *
     * @return int
     */
    public function getIssueAllCount()
    {
        return $this->container['issueAllCount'];
    }

    /**
     * Sets issueAllCount
     *
     * @param int $issueAllCount 里程碑issues数量
     *
     * @return $this
     */
    public function setIssueAllCount($issueAllCount)
    {
        $this->container['issueAllCount'] = $issueAllCount;

        return $this;
    }

    /**
     * Gets issueCompleteCount
     *
     * @return int
     */
    public function getIssueCompleteCount()
    {
        return $this->container['issueCompleteCount'];
    }

    /**
     * Sets issueCompleteCount
     *
     * @param int $issueCompleteCount 里程碑完成issue数量
     *
     * @return $this
     */
    public function setIssueCompleteCount($issueCompleteCount)
    {
        $this->container['issueCompleteCount'] = $issueCompleteCount;

        return $this;
    }

    /**
     * Gets prAllCount
     *
     * @return int
     */
    public function getPrAllCount()
    {
        return $this->container['prAllCount'];
    }

    /**
     * Sets prAllCount
     *
     * @param int $prAllCount 里程碑pr数量
     *
     * @return $this
     */
    public function setPrAllCount($prAllCount)
    {
        $this->container['prAllCount'] = $prAllCount;

        return $this;
    }

    /**
     * Gets prCompleteCount
     *
     * @return int
     */
    public function getPrCompleteCount()
    {
        return $this->container['prCompleteCount'];
    }

    /**
     * Sets prCompleteCount
     *
     * @param int $prCompleteCount 里程碑完成pr数量
     *
     * @return $this
     */
    public function setPrCompleteCount($prCompleteCount)
    {
        $this->container['prCompleteCount'] = $prCompleteCount;

        return $this;
    }

    /**
     * Gets projects
     *
     * @return \GiteeEnterprise\Model\Project
     */
    public function getProjects()
    {
        return $this->container['projects'];
    }

    /**
     * Sets projects
     *
     * @param \GiteeEnterprise\Model\Project $projects 里程碑关联仓库
     *
     * @return $this
     */
    public function setProjects($projects)
    {
        $this->container['projects'] = $projects;

        return $this;
    }

    /**
     * Gets program
     *
     * @return \GiteeEnterprise\Model\Program
     */
    public function getProgram()
    {
        return $this->container['program'];
    }

    /**
     * Sets program
     *
     * @param \GiteeEnterprise\Model\Program $program 里程碑关联项目
     *
     * @return $this
     */
    public function setProgram($program)
    {
        $this->container['program'] = $program;

        return $this;
    }

    /**
     * Gets delayIssueCount
     *
     * @return int
     */
    public function getDelayIssueCount()
    {
        return $this->container['delayIssueCount'];
    }

    /**
     * Sets delayIssueCount
     *
     * @param int $delayIssueCount 延期的任务数
     *
     * @return $this
     */
    public function setDelayIssueCount($delayIssueCount)
    {
        $this->container['delayIssueCount'] = $delayIssueCount;

        return $this;
    }

    /**
     * Gets workTimeOverview
     *
     * @return \GiteeEnterprise\Model\IssueWorkloadOverview
     */
    public function getWorkTimeOverview()
    {
        return $this->container['workTimeOverview'];
    }

    /**
     * Sets workTimeOverview
     *
     * @param \GiteeEnterprise\Model\IssueWorkloadOverview $workTimeOverview 工时概览
     *
     * @return $this
     */
    public function setWorkTimeOverview($workTimeOverview)
    {
        $this->container['workTimeOverview'] = $workTimeOverview;

        return $this;
    }

    /**
     * Gets lockByProgram
     *
     * @return bool
     */
    public function getLockByProgram()
    {
        return $this->container['lockByProgram'];
    }

    /**
     * Sets lockByProgram
     *
     * @param bool $lockByProgram 是否因为项目改类型而被锁定
     *
     * @return $this
     */
    public function setLockByProgram($lockByProgram)
    {
        $this->container['lockByProgram'] = $lockByProgram;

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


