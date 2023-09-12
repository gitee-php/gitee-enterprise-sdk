<?php
/**
 * WithWorkload
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
 * WithWorkload Class Doc Comment
 *
 * @category Class
 * @description 获取任务列表
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WithWorkload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WithWorkload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'rootId' => 'int',
        'parentId' => 'int',
        'projectId' => 'int',
        'ident' => 'string',
        'title' => 'string',
        'issueStateId' => 'int',
        'programId' => 'int',
        'state' => 'string',
        'commentsCount' => 'int',
        'priority' => 'int',
        'branch' => 'string',
        'priorityHuman' => 'string',
        'duration' => 'int',
        'collaborators' => '\GiteeEnterprise\Model\UserWithRemark[]',
        'author' => '\GiteeEnterprise\Model\UserWithRemark',
        'milestone' => '\GiteeEnterprise\Model\Milestone',
        'issueState' => '\GiteeEnterprise\Model\IssueState',
        'issueType' => '\GiteeEnterprise\Model\IssueType',
        'labels' => '\GiteeEnterprise\Model\Label',
        'securityHole' => 'bool',
        'isStar' => 'bool',
        'scrumSprint' => '\GiteeEnterprise\Model\ScrumSprint',
        'estimatedDuration' => 'float',
        'registeredDuration' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'rootId' => 'int32',
        'parentId' => 'int32',
        'projectId' => 'int32',
        'ident' => null,
        'title' => null,
        'issueStateId' => 'int32',
        'programId' => 'int32',
        'state' => null,
        'commentsCount' => 'int32',
        'priority' => 'int32',
        'branch' => null,
        'priorityHuman' => null,
        'duration' => 'int32',
        'collaborators' => null,
        'author' => null,
        'milestone' => null,
        'issueState' => null,
        'issueType' => null,
        'labels' => null,
        'securityHole' => null,
        'isStar' => null,
        'scrumSprint' => null,
        'estimatedDuration' => 'float',
        'registeredDuration' => 'float'
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
        'rootId' => 'root_id',
        'parentId' => 'parent_id',
        'projectId' => 'project_id',
        'ident' => 'ident',
        'title' => 'title',
        'issueStateId' => 'issue_state_id',
        'programId' => 'program_id',
        'state' => 'state',
        'commentsCount' => 'comments_count',
        'priority' => 'priority',
        'branch' => 'branch',
        'priorityHuman' => 'priority_human',
        'duration' => 'duration',
        'collaborators' => 'collaborators',
        'author' => 'author',
        'milestone' => 'milestone',
        'issueState' => 'issue_state',
        'issueType' => 'issue_type',
        'labels' => 'labels',
        'securityHole' => 'security_hole',
        'isStar' => 'is_star',
        'scrumSprint' => 'scrum_sprint',
        'estimatedDuration' => 'estimated_duration',
        'registeredDuration' => 'registered_duration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'rootId' => 'setRootId',
        'parentId' => 'setParentId',
        'projectId' => 'setProjectId',
        'ident' => 'setIdent',
        'title' => 'setTitle',
        'issueStateId' => 'setIssueStateId',
        'programId' => 'setProgramId',
        'state' => 'setState',
        'commentsCount' => 'setCommentsCount',
        'priority' => 'setPriority',
        'branch' => 'setBranch',
        'priorityHuman' => 'setPriorityHuman',
        'duration' => 'setDuration',
        'collaborators' => 'setCollaborators',
        'author' => 'setAuthor',
        'milestone' => 'setMilestone',
        'issueState' => 'setIssueState',
        'issueType' => 'setIssueType',
        'labels' => 'setLabels',
        'securityHole' => 'setSecurityHole',
        'isStar' => 'setIsStar',
        'scrumSprint' => 'setScrumSprint',
        'estimatedDuration' => 'setEstimatedDuration',
        'registeredDuration' => 'setRegisteredDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'rootId' => 'getRootId',
        'parentId' => 'getParentId',
        'projectId' => 'getProjectId',
        'ident' => 'getIdent',
        'title' => 'getTitle',
        'issueStateId' => 'getIssueStateId',
        'programId' => 'getProgramId',
        'state' => 'getState',
        'commentsCount' => 'getCommentsCount',
        'priority' => 'getPriority',
        'branch' => 'getBranch',
        'priorityHuman' => 'getPriorityHuman',
        'duration' => 'getDuration',
        'collaborators' => 'getCollaborators',
        'author' => 'getAuthor',
        'milestone' => 'getMilestone',
        'issueState' => 'getIssueState',
        'issueType' => 'getIssueType',
        'labels' => 'getLabels',
        'securityHole' => 'getSecurityHole',
        'isStar' => 'getIsStar',
        'scrumSprint' => 'getScrumSprint',
        'estimatedDuration' => 'getEstimatedDuration',
        'registeredDuration' => 'getRegisteredDuration'
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
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['ident'] = isset($data['ident']) ? $data['ident'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['issueStateId'] = isset($data['issueStateId']) ? $data['issueStateId'] : null;
        $this->container['programId'] = isset($data['programId']) ? $data['programId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['commentsCount'] = isset($data['commentsCount']) ? $data['commentsCount'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['priorityHuman'] = isset($data['priorityHuman']) ? $data['priorityHuman'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['collaborators'] = isset($data['collaborators']) ? $data['collaborators'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['milestone'] = isset($data['milestone']) ? $data['milestone'] : null;
        $this->container['issueState'] = isset($data['issueState']) ? $data['issueState'] : null;
        $this->container['issueType'] = isset($data['issueType']) ? $data['issueType'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['securityHole'] = isset($data['securityHole']) ? $data['securityHole'] : null;
        $this->container['isStar'] = isset($data['isStar']) ? $data['isStar'] : null;
        $this->container['scrumSprint'] = isset($data['scrumSprint']) ? $data['scrumSprint'] : null;
        $this->container['estimatedDuration'] = isset($data['estimatedDuration']) ? $data['estimatedDuration'] : null;
        $this->container['registeredDuration'] = isset($data['registeredDuration']) ? $data['registeredDuration'] : null;
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
     * @param int $id 任务 ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets rootId
     *
     * @return int
     */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
     * Sets rootId
     *
     * @param int $rootId 根结点 ID
     *
     * @return $this
     */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;

        return $this;
    }

    /**
     * Gets parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
     * Sets parentId
     *
     * @param int $parentId 父任务 ID
     *
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;

        return $this;
    }

    /**
     * Gets projectId
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     *
     * @param int $projectId 关联项目 ID
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }

    /**
     * Gets ident
     *
     * @return string
     */
    public function getIdent()
    {
        return $this->container['ident'];
    }

    /**
     * Sets ident
     *
     * @param string $ident 任务全局唯一标识符
     *
     * @return $this
     */
    public function setIdent($ident)
    {
        $this->container['ident'] = $ident;

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
     * @param string $title 任务标题
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets issueStateId
     *
     * @return int
     */
    public function getIssueStateId()
    {
        return $this->container['issueStateId'];
    }

    /**
     * Sets issueStateId
     *
     * @param int $issueStateId 任务状态id
     *
     * @return $this
     */
    public function setIssueStateId($issueStateId)
    {
        $this->container['issueStateId'] = $issueStateId;

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
     * @param int $programId 项目id
     *
     * @return $this
     */
    public function setProgramId($programId)
    {
        $this->container['programId'] = $programId;

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
     * @param string $state 任务状态标识符: open, progressing, closed, rejected
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets commentsCount
     *
     * @return int
     */
    public function getCommentsCount()
    {
        return $this->container['commentsCount'];
    }

    /**
     * Sets commentsCount
     *
     * @param int $commentsCount 评论数量
     *
     * @return $this
     */
    public function setCommentsCount($commentsCount)
    {
        $this->container['commentsCount'] = $commentsCount;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority 优先级标识符
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return string
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param string $branch 关联的分支名
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets priorityHuman
     *
     * @return string
     */
    public function getPriorityHuman()
    {
        return $this->container['priorityHuman'];
    }

    /**
     * Sets priorityHuman
     *
     * @param string $priorityHuman 优先级中文名称
     *
     * @return $this
     */
    public function setPriorityHuman($priorityHuman)
    {
        $this->container['priorityHuman'] = $priorityHuman;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration 预计工时。（单位：分钟）
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets collaborators
     *
     * @return \GiteeEnterprise\Model\UserWithRemark[]
     */
    public function getCollaborators()
    {
        return $this->container['collaborators'];
    }

    /**
     * Sets collaborators
     *
     * @param \GiteeEnterprise\Model\UserWithRemark[] $collaborators 任务协作者
     *
     * @return $this
     */
    public function setCollaborators($collaborators)
    {
        $this->container['collaborators'] = $collaborators;

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
     * @param \GiteeEnterprise\Model\UserWithRemark $author 任务创建者
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets milestone
     *
     * @return \GiteeEnterprise\Model\Milestone
     */
    public function getMilestone()
    {
        return $this->container['milestone'];
    }

    /**
     * Sets milestone
     *
     * @param \GiteeEnterprise\Model\Milestone $milestone 里程碑
     *
     * @return $this
     */
    public function setMilestone($milestone)
    {
        $this->container['milestone'] = $milestone;

        return $this;
    }

    /**
     * Gets issueState
     *
     * @return \GiteeEnterprise\Model\IssueState
     */
    public function getIssueState()
    {
        return $this->container['issueState'];
    }

    /**
     * Sets issueState
     *
     * @param \GiteeEnterprise\Model\IssueState $issueState 任务状态
     *
     * @return $this
     */
    public function setIssueState($issueState)
    {
        $this->container['issueState'] = $issueState;

        return $this;
    }

    /**
     * Gets issueType
     *
     * @return \GiteeEnterprise\Model\IssueType
     */
    public function getIssueType()
    {
        return $this->container['issueType'];
    }

    /**
     * Sets issueType
     *
     * @param \GiteeEnterprise\Model\IssueType $issueType 任务类型
     *
     * @return $this
     */
    public function setIssueType($issueType)
    {
        $this->container['issueType'] = $issueType;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \GiteeEnterprise\Model\Label
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \GiteeEnterprise\Model\Label $labels 任务关联的标签
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets securityHole
     *
     * @return bool
     */
    public function getSecurityHole()
    {
        return $this->container['securityHole'];
    }

    /**
     * Sets securityHole
     *
     * @param bool $securityHole 是否是私有Issue
     *
     * @return $this
     */
    public function setSecurityHole($securityHole)
    {
        $this->container['securityHole'] = $securityHole;

        return $this;
    }

    /**
     * Gets isStar
     *
     * @return bool
     */
    public function getIsStar()
    {
        return $this->container['isStar'];
    }

    /**
     * Sets isStar
     *
     * @param bool $isStar 是否星标任务
     *
     * @return $this
     */
    public function setIsStar($isStar)
    {
        $this->container['isStar'] = $isStar;

        return $this;
    }

    /**
     * Gets scrumSprint
     *
     * @return \GiteeEnterprise\Model\ScrumSprint
     */
    public function getScrumSprint()
    {
        return $this->container['scrumSprint'];
    }

    /**
     * Sets scrumSprint
     *
     * @param \GiteeEnterprise\Model\ScrumSprint $scrumSprint 关联迭代
     *
     * @return $this
     */
    public function setScrumSprint($scrumSprint)
    {
        $this->container['scrumSprint'] = $scrumSprint;

        return $this;
    }

    /**
     * Gets estimatedDuration
     *
     * @return float
     */
    public function getEstimatedDuration()
    {
        return $this->container['estimatedDuration'];
    }

    /**
     * Sets estimatedDuration
     *
     * @param float $estimatedDuration 预计工时，单位小时
     *
     * @return $this
     */
    public function setEstimatedDuration($estimatedDuration)
    {
        $this->container['estimatedDuration'] = $estimatedDuration;

        return $this;
    }

    /**
     * Gets registeredDuration
     *
     * @return float
     */
    public function getRegisteredDuration()
    {
        return $this->container['registeredDuration'];
    }

    /**
     * Sets registeredDuration
     *
     * @param float $registeredDuration 登记工时，单位小时
     *
     * @return $this
     */
    public function setRegisteredDuration($registeredDuration)
    {
        $this->container['registeredDuration'] = $registeredDuration;

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


