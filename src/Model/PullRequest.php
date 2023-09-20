<?php
/**
 * PullRequest
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
 * Gitee Enterprise SDK for PHP
 *
 * OpenAPI spec version: 0.1.335
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
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
 * PullRequest Class Doc Comment
 *
 * @category Class
 * @description 获取企业下的 Pull Request 列表
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PullRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PullRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'iid' => 'int',
        'title' => 'string',
        'projectId' => 'int',
        'state' => 'string',
        'draft' => 'bool',
        'checkState' => 'int',
        'testState' => 'int',
        'priority' => 'string',
        'priorityHuman' => 'string',
        'lightweight' => 'bool',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'mergedAt' => 'string',
        'labels' => '\GiteeEnterprise\Model\Label[]',
        'author' => '\GiteeEnterprise\Model\UserWithRemark',
        'conflict' => 'bool',
        'project' => '\GiteeEnterprise\Model\Project',
        'sourceBranch' => 'object',
        'targetBranch' => 'object',
        'canMerge' => 'string',
        'assignees' => '\GiteeEnterprise\Model\PrAssign',
        'prAssignNum' => 'int',
        'testers' => '\GiteeEnterprise\Model\PrAssign',
        'closeRelatedIssue' => 'int',
        'pruneBranch' => 'int',
        'prTestNum' => 'int',
        'latestScanTask' => 'object',
        'giteeGoEnabled' => 'bool',
        'scanStatus' => 'int',
        'scanStatusDesc' => 'int',
        'scanFlag' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'iid' => 'int32',
        'title' => null,
        'projectId' => 'int32',
        'state' => null,
        'draft' => null,
        'checkState' => 'int32',
        'testState' => 'int32',
        'priority' => null,
        'priorityHuman' => null,
        'lightweight' => null,
        'createdAt' => 'DateTime',
        'updatedAt' => 'DateTime',
        'mergedAt' => 'DateTime',
        'labels' => null,
        'author' => null,
        'conflict' => null,
        'project' => null,
        'sourceBranch' => null,
        'targetBranch' => null,
        'canMerge' => null,
        'assignees' => null,
        'prAssignNum' => 'int32',
        'testers' => null,
        'closeRelatedIssue' => 'int32',
        'pruneBranch' => 'int32',
        'prTestNum' => 'int32',
        'latestScanTask' => null,
        'giteeGoEnabled' => null,
        'scanStatus' => 'int32',
        'scanStatusDesc' => 'int32',
        'scanFlag' => 'int32'
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
        'iid' => 'iid',
        'title' => 'title',
        'projectId' => 'project_id',
        'state' => 'state',
        'draft' => 'draft',
        'checkState' => 'check_state',
        'testState' => 'test_state',
        'priority' => 'priority',
        'priorityHuman' => 'priority_human',
        'lightweight' => 'lightweight',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'mergedAt' => 'merged_at',
        'labels' => 'labels',
        'author' => 'author',
        'conflict' => 'conflict',
        'project' => 'project',
        'sourceBranch' => 'source_branch',
        'targetBranch' => 'target_branch',
        'canMerge' => 'can_merge',
        'assignees' => 'assignees',
        'prAssignNum' => 'pr_assign_num',
        'testers' => 'testers',
        'closeRelatedIssue' => 'close_related_issue',
        'pruneBranch' => 'prune_branch',
        'prTestNum' => 'pr_test_num',
        'latestScanTask' => 'latest_scan_task',
        'giteeGoEnabled' => 'gitee_go_enabled',
        'scanStatus' => 'scan_status',
        'scanStatusDesc' => 'scan_status_desc',
        'scanFlag' => 'scan_flag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'iid' => 'setIid',
        'title' => 'setTitle',
        'projectId' => 'setProjectId',
        'state' => 'setState',
        'draft' => 'setDraft',
        'checkState' => 'setCheckState',
        'testState' => 'setTestState',
        'priority' => 'setPriority',
        'priorityHuman' => 'setPriorityHuman',
        'lightweight' => 'setLightweight',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'mergedAt' => 'setMergedAt',
        'labels' => 'setLabels',
        'author' => 'setAuthor',
        'conflict' => 'setConflict',
        'project' => 'setProject',
        'sourceBranch' => 'setSourceBranch',
        'targetBranch' => 'setTargetBranch',
        'canMerge' => 'setCanMerge',
        'assignees' => 'setAssignees',
        'prAssignNum' => 'setPrAssignNum',
        'testers' => 'setTesters',
        'closeRelatedIssue' => 'setCloseRelatedIssue',
        'pruneBranch' => 'setPruneBranch',
        'prTestNum' => 'setPrTestNum',
        'latestScanTask' => 'setLatestScanTask',
        'giteeGoEnabled' => 'setGiteeGoEnabled',
        'scanStatus' => 'setScanStatus',
        'scanStatusDesc' => 'setScanStatusDesc',
        'scanFlag' => 'setScanFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'iid' => 'getIid',
        'title' => 'getTitle',
        'projectId' => 'getProjectId',
        'state' => 'getState',
        'draft' => 'getDraft',
        'checkState' => 'getCheckState',
        'testState' => 'getTestState',
        'priority' => 'getPriority',
        'priorityHuman' => 'getPriorityHuman',
        'lightweight' => 'getLightweight',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'mergedAt' => 'getMergedAt',
        'labels' => 'getLabels',
        'author' => 'getAuthor',
        'conflict' => 'getConflict',
        'project' => 'getProject',
        'sourceBranch' => 'getSourceBranch',
        'targetBranch' => 'getTargetBranch',
        'canMerge' => 'getCanMerge',
        'assignees' => 'getAssignees',
        'prAssignNum' => 'getPrAssignNum',
        'testers' => 'getTesters',
        'closeRelatedIssue' => 'getCloseRelatedIssue',
        'pruneBranch' => 'getPruneBranch',
        'prTestNum' => 'getPrTestNum',
        'latestScanTask' => 'getLatestScanTask',
        'giteeGoEnabled' => 'getGiteeGoEnabled',
        'scanStatus' => 'getScanStatus',
        'scanStatusDesc' => 'getScanStatusDesc',
        'scanFlag' => 'getScanFlag'
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
        $this->container['iid'] = isset($data['iid']) ? $data['iid'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['draft'] = isset($data['draft']) ? $data['draft'] : null;
        $this->container['checkState'] = isset($data['checkState']) ? $data['checkState'] : null;
        $this->container['testState'] = isset($data['testState']) ? $data['testState'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['priorityHuman'] = isset($data['priorityHuman']) ? $data['priorityHuman'] : null;
        $this->container['lightweight'] = isset($data['lightweight']) ? $data['lightweight'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['mergedAt'] = isset($data['mergedAt']) ? $data['mergedAt'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['conflict'] = isset($data['conflict']) ? $data['conflict'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['canMerge'] = isset($data['canMerge']) ? $data['canMerge'] : null;
        $this->container['assignees'] = isset($data['assignees']) ? $data['assignees'] : null;
        $this->container['prAssignNum'] = isset($data['prAssignNum']) ? $data['prAssignNum'] : null;
        $this->container['testers'] = isset($data['testers']) ? $data['testers'] : null;
        $this->container['closeRelatedIssue'] = isset($data['closeRelatedIssue']) ? $data['closeRelatedIssue'] : null;
        $this->container['pruneBranch'] = isset($data['pruneBranch']) ? $data['pruneBranch'] : null;
        $this->container['prTestNum'] = isset($data['prTestNum']) ? $data['prTestNum'] : null;
        $this->container['latestScanTask'] = isset($data['latestScanTask']) ? $data['latestScanTask'] : null;
        $this->container['giteeGoEnabled'] = isset($data['giteeGoEnabled']) ? $data['giteeGoEnabled'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['scanStatusDesc'] = isset($data['scanStatusDesc']) ? $data['scanStatusDesc'] : null;
        $this->container['scanFlag'] = isset($data['scanFlag']) ? $data['scanFlag'] : null;
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
     * @param int $id PR 的 id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets iid
     *
     * @return int
     */
    public function getIid()
    {
        return $this->container['iid'];
    }

    /**
     * Sets iid
     *
     * @param int $iid 仓库内唯一的 PR id 标识符
     *
     * @return $this
     */
    public function setIid($iid)
    {
        $this->container['iid'] = $iid;

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
     * @param string $title PR 的标题
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param int $projectId 仓库 id
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

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
     * @param string $state PR 的状态(opened: 开启; reopened: 关闭后重开; closed: 关闭; merged: 已合并;)
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets draft
     *
     * @return bool
     */
    public function getDraft()
    {
        return $this->container['draft'];
    }

    /**
     * Sets draft
     *
     * @param bool $draft PR 草稿状态： 草稿 - true, 非草稿 - false
     *
     * @return $this
     */
    public function setDraft($draft)
    {
        $this->container['draft'] = $draft;

        return $this;
    }

    /**
     * Gets checkState
     *
     * @return int
     */
    public function getCheckState()
    {
        return $this->container['checkState'];
    }

    /**
     * Sets checkState
     *
     * @param int $checkState PR的审查状态(0: 不需要审查; 1: 待审查; 2: 审查已全部通过;)
     *
     * @return $this
     */
    public function setCheckState($checkState)
    {
        $this->container['checkState'] = $checkState;

        return $this;
    }

    /**
     * Gets testState
     *
     * @return int
     */
    public function getTestState()
    {
        return $this->container['testState'];
    }

    /**
     * Sets testState
     *
     * @param int $testState PR的测试状态(0: 不需要测试; 1: 待测试; 2: 测试已全部通过;)
     *
     * @return $this
     */
    public function setTestState($testState)
    {
        $this->container['testState'] = $testState;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string $priority PR 的优先级。
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

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
     * @param string $priorityHuman PR 优先级标签名称
     *
     * @return $this
     */
    public function setPriorityHuman($priorityHuman)
    {
        $this->container['priorityHuman'] = $priorityHuman;

        return $this;
    }

    /**
     * Gets lightweight
     *
     * @return bool
     */
    public function getLightweight()
    {
        return $this->container['lightweight'];
    }

    /**
     * Sets lightweight
     *
     * @param bool $lightweight 是否轻量级 PR
     *
     * @return $this
     */
    public function setLightweight($lightweight)
    {
        $this->container['lightweight'] = $lightweight;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param string $createdAt PR 的创建时间
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param string $updatedAt PR 的更新时间
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets mergedAt
     *
     * @return string
     */
    public function getMergedAt()
    {
        return $this->container['mergedAt'];
    }

    /**
     * Sets mergedAt
     *
     * @param string $mergedAt PR 的合并时间
     *
     * @return $this
     */
    public function setMergedAt($mergedAt)
    {
        $this->container['mergedAt'] = $mergedAt;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \GiteeEnterprise\Model\Label[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \GiteeEnterprise\Model\Label[] $labels PR 的标签列表
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

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
     * @param \GiteeEnterprise\Model\UserWithRemark $author PR 创建者
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets conflict
     *
     * @return bool
     */
    public function getConflict()
    {
        return $this->container['conflict'];
    }

    /**
     * Sets conflict
     *
     * @param bool $conflict 是否存在冲突
     *
     * @return $this
     */
    public function setConflict($conflict)
    {
        $this->container['conflict'] = $conflict;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \GiteeEnterprise\Model\Project
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \GiteeEnterprise\Model\Project $project 所属仓库
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets sourceBranch
     *
     * @return object
     */
    public function getSourceBranch()
    {
        return $this->container['sourceBranch'];
    }

    /**
     * Sets sourceBranch
     *
     * @param object $sourceBranch 源分支
     *
     * @return $this
     */
    public function setSourceBranch($sourceBranch)
    {
        $this->container['sourceBranch'] = $sourceBranch;

        return $this;
    }

    /**
     * Gets targetBranch
     *
     * @return object
     */
    public function getTargetBranch()
    {
        return $this->container['targetBranch'];
    }

    /**
     * Sets targetBranch
     *
     * @param object $targetBranch 目标分支
     *
     * @return $this
     */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;

        return $this;
    }

    /**
     * Gets canMerge
     *
     * @return string
     */
    public function getCanMerge()
    {
        return $this->container['canMerge'];
    }

    /**
     * Sets canMerge
     *
     * @param string $canMerge 是否可合并
     *
     * @return $this
     */
    public function setCanMerge($canMerge)
    {
        $this->container['canMerge'] = $canMerge;

        return $this;
    }

    /**
     * Gets assignees
     *
     * @return \GiteeEnterprise\Model\PrAssign
     */
    public function getAssignees()
    {
        return $this->container['assignees'];
    }

    /**
     * Sets assignees
     *
     * @param \GiteeEnterprise\Model\PrAssign $assignees 审查人员
     *
     * @return $this
     */
    public function setAssignees($assignees)
    {
        $this->container['assignees'] = $assignees;

        return $this;
    }

    /**
     * Gets prAssignNum
     *
     * @return int
     */
    public function getPrAssignNum()
    {
        return $this->container['prAssignNum'];
    }

    /**
     * Sets prAssignNum
     *
     * @param int $prAssignNum 最少审查人数
     *
     * @return $this
     */
    public function setPrAssignNum($prAssignNum)
    {
        $this->container['prAssignNum'] = $prAssignNum;

        return $this;
    }

    /**
     * Gets testers
     *
     * @return \GiteeEnterprise\Model\PrAssign
     */
    public function getTesters()
    {
        return $this->container['testers'];
    }

    /**
     * Sets testers
     *
     * @param \GiteeEnterprise\Model\PrAssign $testers 测试人员
     *
     * @return $this
     */
    public function setTesters($testers)
    {
        $this->container['testers'] = $testers;

        return $this;
    }

    /**
     * Gets closeRelatedIssue
     *
     * @return int
     */
    public function getCloseRelatedIssue()
    {
        return $this->container['closeRelatedIssue'];
    }

    /**
     * Sets closeRelatedIssue
     *
     * @param int $closeRelatedIssue 合并 PR 后关闭关联的任务
     *
     * @return $this
     */
    public function setCloseRelatedIssue($closeRelatedIssue)
    {
        $this->container['closeRelatedIssue'] = $closeRelatedIssue;

        return $this;
    }

    /**
     * Gets pruneBranch
     *
     * @return int
     */
    public function getPruneBranch()
    {
        return $this->container['pruneBranch'];
    }

    /**
     * Sets pruneBranch
     *
     * @param int $pruneBranch 合并 PR 后删除关联分支
     *
     * @return $this
     */
    public function setPruneBranch($pruneBranch)
    {
        $this->container['pruneBranch'] = $pruneBranch;

        return $this;
    }

    /**
     * Gets prTestNum
     *
     * @return int
     */
    public function getPrTestNum()
    {
        return $this->container['prTestNum'];
    }

    /**
     * Sets prTestNum
     *
     * @param int $prTestNum 最少测试人数
     *
     * @return $this
     */
    public function setPrTestNum($prTestNum)
    {
        $this->container['prTestNum'] = $prTestNum;

        return $this;
    }

    /**
     * Gets latestScanTask
     *
     * @return object
     */
    public function getLatestScanTask()
    {
        return $this->container['latestScanTask'];
    }

    /**
     * Sets latestScanTask
     *
     * @param object $latestScanTask 最后一次gitee scan扫描结果
     *
     * @return $this
     */
    public function setLatestScanTask($latestScanTask)
    {
        $this->container['latestScanTask'] = $latestScanTask;

        return $this;
    }

    /**
     * Gets giteeGoEnabled
     *
     * @return bool
     */
    public function getGiteeGoEnabled()
    {
        return $this->container['giteeGoEnabled'];
    }

    /**
     * Sets giteeGoEnabled
     *
     * @param bool $giteeGoEnabled 所属仓库GiteeGo服务是否可用
     *
     * @return $this
     */
    public function setGiteeGoEnabled($giteeGoEnabled)
    {
        $this->container['giteeGoEnabled'] = $giteeGoEnabled;

        return $this;
    }

    /**
     * Gets scanStatus
     *
     * @return int
     */
    public function getScanStatus()
    {
        return $this->container['scanStatus'];
    }

    /**
     * Sets scanStatus
     *
     * @param int $scanStatus scan任务状态：0 等待中、1 执行中、2 已取消、3 成功、4 失败、5 构建中、6 超时
     *
     * @return $this
     */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;

        return $this;
    }

    /**
     * Gets scanStatusDesc
     *
     * @return int
     */
    public function getScanStatusDesc()
    {
        return $this->container['scanStatusDesc'];
    }

    /**
     * Sets scanStatusDesc
     *
     * @param int $scanStatusDesc scan返回门禁相关的描述
     *
     * @return $this
     */
    public function setScanStatusDesc($scanStatusDesc)
    {
        $this->container['scanStatusDesc'] = $scanStatusDesc;

        return $this;
    }

    /**
     * Gets scanFlag
     *
     * @return int
     */
    public function getScanFlag()
    {
        return $this->container['scanFlag'];
    }

    /**
     * Sets scanFlag
     *
     * @param int $scanFlag 质量门禁标志：1 通过 2 不通过
     *
     * @return $this
     */
    public function setScanFlag($scanFlag)
    {
        $this->container['scanFlag'] = $scanFlag;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


