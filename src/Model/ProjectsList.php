<?php
/**
 * ProjectsList
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
 * OpenAPI spec version: 0.1.343
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.42
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
 * ProjectsList Class Doc Comment
 *
 * @category Class
 * @description 获取项目下的仓库列表
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectsList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectsList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'path' => 'string',
        'public' => 'int',
        'enterpriseId' => 'int',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'securityHoleEnabled' => 'bool',
        'namespace' => '\GiteeEnterprise\Model\ModelNamespace',
        'creator' => '\GiteeEnterprise\Model\UserWithRemark',
        'pathWithNamespace' => 'string',
        'nameWithNamespace' => 'string',
        'scanCheckRun' => 'bool',
        'isFork' => 'bool',
        'parentProject' => '\GiteeEnterprise\Model\Project',
        'status' => 'int',
        'statusName' => 'string',
        'outsourced' => 'bool',
        'repoSize' => 'int',
        'canAdminProject' => 'bool',
        'membersCount' => 'int',
        'lastPushAt' => 'string',
        'watchesCount' => 'int',
        'starsCount' => 'int',
        'forkedCount' => 'int',
        'enableBackup' => 'bool',
        'hasBackups' => 'bool',
        'vip' => 'bool',
        'recomm' => 'bool',
        'template' => '\GiteeEnterprise\Model\Project',
        'templateEnabled' => 'bool',
        'description' => 'string',
        'getDefaultBranch' => 'string',
        'releasesCount' => 'int',
        'totalPrCount' => 'int',
        'isStar' => 'bool',
        'usedTemplateCount' => 'int',
        'forkEnabled' => 'bool',
        'pullRequestsEnabled' => 'bool',
        'nameWithoutTopNamespace' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'path' => null,
        'public' => 'int32',
        'enterpriseId' => 'int32',
        'createdAt' => 'DateTime',
        'updatedAt' => 'DateTime',
        'securityHoleEnabled' => null,
        'namespace' => null,
        'creator' => null,
        'pathWithNamespace' => null,
        'nameWithNamespace' => null,
        'scanCheckRun' => null,
        'isFork' => null,
        'parentProject' => null,
        'status' => 'int32',
        'statusName' => null,
        'outsourced' => null,
        'repoSize' => 'int32',
        'canAdminProject' => null,
        'membersCount' => 'int32',
        'lastPushAt' => 'DateTime',
        'watchesCount' => 'int32',
        'starsCount' => 'int32',
        'forkedCount' => 'int32',
        'enableBackup' => null,
        'hasBackups' => null,
        'vip' => null,
        'recomm' => null,
        'template' => null,
        'templateEnabled' => null,
        'description' => null,
        'getDefaultBranch' => null,
        'releasesCount' => 'int32',
        'totalPrCount' => 'int32',
        'isStar' => null,
        'usedTemplateCount' => 'int32',
        'forkEnabled' => null,
        'pullRequestsEnabled' => null,
        'nameWithoutTopNamespace' => null
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
        'name' => 'name',
        'path' => 'path',
        'public' => 'public',
        'enterpriseId' => 'enterprise_id',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'securityHoleEnabled' => 'security_hole_enabled',
        'namespace' => 'namespace',
        'creator' => 'creator',
        'pathWithNamespace' => 'path_with_namespace',
        'nameWithNamespace' => 'name_with_namespace',
        'scanCheckRun' => 'scan_check_run',
        'isFork' => 'is_fork',
        'parentProject' => 'parent_project',
        'status' => 'status',
        'statusName' => 'status_name',
        'outsourced' => 'outsourced',
        'repoSize' => 'repo_size',
        'canAdminProject' => 'can_admin_project',
        'membersCount' => 'members_count',
        'lastPushAt' => 'last_push_at',
        'watchesCount' => 'watches_count',
        'starsCount' => 'stars_count',
        'forkedCount' => 'forked_count',
        'enableBackup' => 'enable_backup',
        'hasBackups' => 'has_backups',
        'vip' => 'vip',
        'recomm' => 'recomm',
        'template' => 'template',
        'templateEnabled' => 'template_enabled',
        'description' => 'description',
        'getDefaultBranch' => 'get_default_branch',
        'releasesCount' => 'releases_count',
        'totalPrCount' => 'total_pr_count',
        'isStar' => 'is_star',
        'usedTemplateCount' => 'used_template_count',
        'forkEnabled' => 'fork_enabled',
        'pullRequestsEnabled' => 'pull_requests_enabled',
        'nameWithoutTopNamespace' => 'name_without_top_namespace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'path' => 'setPath',
        'public' => 'setPublic',
        'enterpriseId' => 'setEnterpriseId',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'securityHoleEnabled' => 'setSecurityHoleEnabled',
        'namespace' => 'setNamespace',
        'creator' => 'setCreator',
        'pathWithNamespace' => 'setPathWithNamespace',
        'nameWithNamespace' => 'setNameWithNamespace',
        'scanCheckRun' => 'setScanCheckRun',
        'isFork' => 'setIsFork',
        'parentProject' => 'setParentProject',
        'status' => 'setStatus',
        'statusName' => 'setStatusName',
        'outsourced' => 'setOutsourced',
        'repoSize' => 'setRepoSize',
        'canAdminProject' => 'setCanAdminProject',
        'membersCount' => 'setMembersCount',
        'lastPushAt' => 'setLastPushAt',
        'watchesCount' => 'setWatchesCount',
        'starsCount' => 'setStarsCount',
        'forkedCount' => 'setForkedCount',
        'enableBackup' => 'setEnableBackup',
        'hasBackups' => 'setHasBackups',
        'vip' => 'setVip',
        'recomm' => 'setRecomm',
        'template' => 'setTemplate',
        'templateEnabled' => 'setTemplateEnabled',
        'description' => 'setDescription',
        'getDefaultBranch' => 'setGetDefaultBranch',
        'releasesCount' => 'setReleasesCount',
        'totalPrCount' => 'setTotalPrCount',
        'isStar' => 'setIsStar',
        'usedTemplateCount' => 'setUsedTemplateCount',
        'forkEnabled' => 'setForkEnabled',
        'pullRequestsEnabled' => 'setPullRequestsEnabled',
        'nameWithoutTopNamespace' => 'setNameWithoutTopNamespace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'path' => 'getPath',
        'public' => 'getPublic',
        'enterpriseId' => 'getEnterpriseId',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'securityHoleEnabled' => 'getSecurityHoleEnabled',
        'namespace' => 'getNamespace',
        'creator' => 'getCreator',
        'pathWithNamespace' => 'getPathWithNamespace',
        'nameWithNamespace' => 'getNameWithNamespace',
        'scanCheckRun' => 'getScanCheckRun',
        'isFork' => 'getIsFork',
        'parentProject' => 'getParentProject',
        'status' => 'getStatus',
        'statusName' => 'getStatusName',
        'outsourced' => 'getOutsourced',
        'repoSize' => 'getRepoSize',
        'canAdminProject' => 'getCanAdminProject',
        'membersCount' => 'getMembersCount',
        'lastPushAt' => 'getLastPushAt',
        'watchesCount' => 'getWatchesCount',
        'starsCount' => 'getStarsCount',
        'forkedCount' => 'getForkedCount',
        'enableBackup' => 'getEnableBackup',
        'hasBackups' => 'getHasBackups',
        'vip' => 'getVip',
        'recomm' => 'getRecomm',
        'template' => 'getTemplate',
        'templateEnabled' => 'getTemplateEnabled',
        'description' => 'getDescription',
        'getDefaultBranch' => 'getGetDefaultBranch',
        'releasesCount' => 'getReleasesCount',
        'totalPrCount' => 'getTotalPrCount',
        'isStar' => 'getIsStar',
        'usedTemplateCount' => 'getUsedTemplateCount',
        'forkEnabled' => 'getForkEnabled',
        'pullRequestsEnabled' => 'getPullRequestsEnabled',
        'nameWithoutTopNamespace' => 'getNameWithoutTopNamespace'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['enterpriseId'] = isset($data['enterpriseId']) ? $data['enterpriseId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['securityHoleEnabled'] = isset($data['securityHoleEnabled']) ? $data['securityHoleEnabled'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['pathWithNamespace'] = isset($data['pathWithNamespace']) ? $data['pathWithNamespace'] : null;
        $this->container['nameWithNamespace'] = isset($data['nameWithNamespace']) ? $data['nameWithNamespace'] : null;
        $this->container['scanCheckRun'] = isset($data['scanCheckRun']) ? $data['scanCheckRun'] : null;
        $this->container['isFork'] = isset($data['isFork']) ? $data['isFork'] : null;
        $this->container['parentProject'] = isset($data['parentProject']) ? $data['parentProject'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusName'] = isset($data['statusName']) ? $data['statusName'] : null;
        $this->container['outsourced'] = isset($data['outsourced']) ? $data['outsourced'] : null;
        $this->container['repoSize'] = isset($data['repoSize']) ? $data['repoSize'] : null;
        $this->container['canAdminProject'] = isset($data['canAdminProject']) ? $data['canAdminProject'] : null;
        $this->container['membersCount'] = isset($data['membersCount']) ? $data['membersCount'] : null;
        $this->container['lastPushAt'] = isset($data['lastPushAt']) ? $data['lastPushAt'] : null;
        $this->container['watchesCount'] = isset($data['watchesCount']) ? $data['watchesCount'] : null;
        $this->container['starsCount'] = isset($data['starsCount']) ? $data['starsCount'] : null;
        $this->container['forkedCount'] = isset($data['forkedCount']) ? $data['forkedCount'] : null;
        $this->container['enableBackup'] = isset($data['enableBackup']) ? $data['enableBackup'] : null;
        $this->container['hasBackups'] = isset($data['hasBackups']) ? $data['hasBackups'] : null;
        $this->container['vip'] = isset($data['vip']) ? $data['vip'] : null;
        $this->container['recomm'] = isset($data['recomm']) ? $data['recomm'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['templateEnabled'] = isset($data['templateEnabled']) ? $data['templateEnabled'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['getDefaultBranch'] = isset($data['getDefaultBranch']) ? $data['getDefaultBranch'] : null;
        $this->container['releasesCount'] = isset($data['releasesCount']) ? $data['releasesCount'] : null;
        $this->container['totalPrCount'] = isset($data['totalPrCount']) ? $data['totalPrCount'] : null;
        $this->container['isStar'] = isset($data['isStar']) ? $data['isStar'] : null;
        $this->container['usedTemplateCount'] = isset($data['usedTemplateCount']) ? $data['usedTemplateCount'] : null;
        $this->container['forkEnabled'] = isset($data['forkEnabled']) ? $data['forkEnabled'] : null;
        $this->container['pullRequestsEnabled'] = isset($data['pullRequestsEnabled']) ? $data['pullRequestsEnabled'] : null;
        $this->container['nameWithoutTopNamespace'] = isset($data['nameWithoutTopNamespace']) ? $data['nameWithoutTopNamespace'] : null;
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
     * @param int $id 仓库ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 仓库名称
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path 仓库路径
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets public
     *
     * @return int
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param int $public 仓库的公开选项。0: 私有; 1: 公开; 2: 内部公开;
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets enterpriseId
     *
     * @return int
     */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
     * Sets enterpriseId
     *
     * @param int $enterpriseId 企业 id
     *
     * @return $this
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

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
     * @param string $createdAt 仓库创建时间
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
     * @param string $updatedAt 仓库更新时间
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets securityHoleEnabled
     *
     * @return bool
     */
    public function getSecurityHoleEnabled()
    {
        return $this->container['securityHoleEnabled'];
    }

    /**
     * Sets securityHoleEnabled
     *
     * @param bool $securityHoleEnabled 是否允许用户创建涉及敏感信息的任务
     *
     * @return $this
     */
    public function setSecurityHoleEnabled($securityHoleEnabled)
    {
        $this->container['securityHoleEnabled'] = $securityHoleEnabled;

        return $this;
    }

    /**
     * Gets namespace
     *
     * @return \GiteeEnterprise\Model\ModelNamespace
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param \GiteeEnterprise\Model\ModelNamespace $namespace 仓库挂载的空间
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return \GiteeEnterprise\Model\UserWithRemark
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param \GiteeEnterprise\Model\UserWithRemark $creator 仓库创建者
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets pathWithNamespace
     *
     * @return string
     */
    public function getPathWithNamespace()
    {
        return $this->container['pathWithNamespace'];
    }

    /**
     * Sets pathWithNamespace
     *
     * @param string $pathWithNamespace 个人空间地址以及仓库路径
     *
     * @return $this
     */
    public function setPathWithNamespace($pathWithNamespace)
    {
        $this->container['pathWithNamespace'] = $pathWithNamespace;

        return $this;
    }

    /**
     * Gets nameWithNamespace
     *
     * @return string
     */
    public function getNameWithNamespace()
    {
        return $this->container['nameWithNamespace'];
    }

    /**
     * Sets nameWithNamespace
     *
     * @param string $nameWithNamespace 个人空间名称以及仓库名称
     *
     * @return $this
     */
    public function setNameWithNamespace($nameWithNamespace)
    {
        $this->container['nameWithNamespace'] = $nameWithNamespace;

        return $this;
    }

    /**
     * Gets scanCheckRun
     *
     * @return bool
     */
    public function getScanCheckRun()
    {
        return $this->container['scanCheckRun'];
    }

    /**
     * Sets scanCheckRun
     *
     * @param bool $scanCheckRun 仓库是否开了scan质量门禁
     *
     * @return $this
     */
    public function setScanCheckRun($scanCheckRun)
    {
        $this->container['scanCheckRun'] = $scanCheckRun;

        return $this;
    }

    /**
     * Gets isFork
     *
     * @return bool
     */
    public function getIsFork()
    {
        return $this->container['isFork'];
    }

    /**
     * Sets isFork
     *
     * @param bool $isFork 是否是fork仓库
     *
     * @return $this
     */
    public function setIsFork($isFork)
    {
        $this->container['isFork'] = $isFork;

        return $this;
    }

    /**
     * Gets parentProject
     *
     * @return \GiteeEnterprise\Model\Project
     */
    public function getParentProject()
    {
        return $this->container['parentProject'];
    }

    /**
     * Sets parentProject
     *
     * @param \GiteeEnterprise\Model\Project $parentProject 父级仓库
     *
     * @return $this
     */
    public function setParentProject($parentProject)
    {
        $this->container['parentProject'] = $parentProject;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status 状态值
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets statusName
     *
     * @return string
     */
    public function getStatusName()
    {
        return $this->container['statusName'];
    }

    /**
     * Sets statusName
     *
     * @param string $statusName 状态中文名称
     *
     * @return $this
     */
    public function setStatusName($statusName)
    {
        $this->container['statusName'] = $statusName;

        return $this;
    }

    /**
     * Gets outsourced
     *
     * @return bool
     */
    public function getOutsourced()
    {
        return $this->container['outsourced'];
    }

    /**
     * Sets outsourced
     *
     * @param bool $outsourced 是否外包
     *
     * @return $this
     */
    public function setOutsourced($outsourced)
    {
        $this->container['outsourced'] = $outsourced;

        return $this;
    }

    /**
     * Gets repoSize
     *
     * @return int
     */
    public function getRepoSize()
    {
        return $this->container['repoSize'];
    }

    /**
     * Sets repoSize
     *
     * @param int $repoSize 仓库大小
     *
     * @return $this
     */
    public function setRepoSize($repoSize)
    {
        $this->container['repoSize'] = $repoSize;

        return $this;
    }

    /**
     * Gets canAdminProject
     *
     * @return bool
     */
    public function getCanAdminProject()
    {
        return $this->container['canAdminProject'];
    }

    /**
     * Sets canAdminProject
     *
     * @param bool $canAdminProject 能否操作当前仓库
     *
     * @return $this
     */
    public function setCanAdminProject($canAdminProject)
    {
        $this->container['canAdminProject'] = $canAdminProject;

        return $this;
    }

    /**
     * Gets membersCount
     *
     * @return int
     */
    public function getMembersCount()
    {
        return $this->container['membersCount'];
    }

    /**
     * Sets membersCount
     *
     * @param int $membersCount 成员数
     *
     * @return $this
     */
    public function setMembersCount($membersCount)
    {
        $this->container['membersCount'] = $membersCount;

        return $this;
    }

    /**
     * Gets lastPushAt
     *
     * @return string
     */
    public function getLastPushAt()
    {
        return $this->container['lastPushAt'];
    }

    /**
     * Sets lastPushAt
     *
     * @param string $lastPushAt 最近push
     *
     * @return $this
     */
    public function setLastPushAt($lastPushAt)
    {
        $this->container['lastPushAt'] = $lastPushAt;

        return $this;
    }

    /**
     * Gets watchesCount
     *
     * @return int
     */
    public function getWatchesCount()
    {
        return $this->container['watchesCount'];
    }

    /**
     * Sets watchesCount
     *
     * @param int $watchesCount watches数
     *
     * @return $this
     */
    public function setWatchesCount($watchesCount)
    {
        $this->container['watchesCount'] = $watchesCount;

        return $this;
    }

    /**
     * Gets starsCount
     *
     * @return int
     */
    public function getStarsCount()
    {
        return $this->container['starsCount'];
    }

    /**
     * Sets starsCount
     *
     * @param int $starsCount stars数
     *
     * @return $this
     */
    public function setStarsCount($starsCount)
    {
        $this->container['starsCount'] = $starsCount;

        return $this;
    }

    /**
     * Gets forkedCount
     *
     * @return int
     */
    public function getForkedCount()
    {
        return $this->container['forkedCount'];
    }

    /**
     * Sets forkedCount
     *
     * @param int $forkedCount 被fork数
     *
     * @return $this
     */
    public function setForkedCount($forkedCount)
    {
        $this->container['forkedCount'] = $forkedCount;

        return $this;
    }

    /**
     * Gets enableBackup
     *
     * @return bool
     */
    public function getEnableBackup()
    {
        return $this->container['enableBackup'];
    }

    /**
     * Sets enableBackup
     *
     * @param bool $enableBackup 是否开启备份
     *
     * @return $this
     */
    public function setEnableBackup($enableBackup)
    {
        $this->container['enableBackup'] = $enableBackup;

        return $this;
    }

    /**
     * Gets hasBackups
     *
     * @return bool
     */
    public function getHasBackups()
    {
        return $this->container['hasBackups'];
    }

    /**
     * Sets hasBackups
     *
     * @param bool $hasBackups 是否有备份
     *
     * @return $this
     */
    public function setHasBackups($hasBackups)
    {
        $this->container['hasBackups'] = $hasBackups;

        return $this;
    }

    /**
     * Gets vip
     *
     * @return bool
     */
    public function getVip()
    {
        return $this->container['vip'];
    }

    /**
     * Sets vip
     *
     * @param bool $vip 是否vip
     *
     * @return $this
     */
    public function setVip($vip)
    {
        $this->container['vip'] = $vip;

        return $this;
    }

    /**
     * Gets recomm
     *
     * @return bool
     */
    public function getRecomm()
    {
        return $this->container['recomm'];
    }

    /**
     * Sets recomm
     *
     * @param bool $recomm 是否推荐
     *
     * @return $this
     */
    public function setRecomm($recomm)
    {
        $this->container['recomm'] = $recomm;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \GiteeEnterprise\Model\Project
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \GiteeEnterprise\Model\Project $template 模板仓库基本信息
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets templateEnabled
     *
     * @return bool
     */
    public function getTemplateEnabled()
    {
        return $this->container['templateEnabled'];
    }

    /**
     * Sets templateEnabled
     *
     * @param bool $templateEnabled 是否为模板仓库
     *
     * @return $this
     */
    public function setTemplateEnabled($templateEnabled)
    {
        $this->container['templateEnabled'] = $templateEnabled;

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
     * @param string $description 仓库描述
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets getDefaultBranch
     *
     * @return string
     */
    public function getGetDefaultBranch()
    {
        return $this->container['getDefaultBranch'];
    }

    /**
     * Sets getDefaultBranch
     *
     * @param string $getDefaultBranch 默认分支
     *
     * @return $this
     */
    public function setGetDefaultBranch($getDefaultBranch)
    {
        $this->container['getDefaultBranch'] = $getDefaultBranch;

        return $this;
    }

    /**
     * Gets releasesCount
     *
     * @return int
     */
    public function getReleasesCount()
    {
        return $this->container['releasesCount'];
    }

    /**
     * Sets releasesCount
     *
     * @param int $releasesCount 发行版数
     *
     * @return $this
     */
    public function setReleasesCount($releasesCount)
    {
        $this->container['releasesCount'] = $releasesCount;

        return $this;
    }

    /**
     * Gets totalPrCount
     *
     * @return int
     */
    public function getTotalPrCount()
    {
        return $this->container['totalPrCount'];
    }

    /**
     * Sets totalPrCount
     *
     * @param int $totalPrCount PR数
     *
     * @return $this
     */
    public function setTotalPrCount($totalPrCount)
    {
        $this->container['totalPrCount'] = $totalPrCount;

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
     * @param bool $isStar 是否收藏
     *
     * @return $this
     */
    public function setIsStar($isStar)
    {
        $this->container['isStar'] = $isStar;

        return $this;
    }

    /**
     * Gets usedTemplateCount
     *
     * @return int
     */
    public function getUsedTemplateCount()
    {
        return $this->container['usedTemplateCount'];
    }

    /**
     * Sets usedTemplateCount
     *
     * @param int $usedTemplateCount 使用此仓库作为模板的仓库总数
     *
     * @return $this
     */
    public function setUsedTemplateCount($usedTemplateCount)
    {
        $this->container['usedTemplateCount'] = $usedTemplateCount;

        return $this;
    }

    /**
     * Gets forkEnabled
     *
     * @return bool
     */
    public function getForkEnabled()
    {
        return $this->container['forkEnabled'];
    }

    /**
     * Sets forkEnabled
     *
     * @param bool $forkEnabled 是否允许被Fork
     *
     * @return $this
     */
    public function setForkEnabled($forkEnabled)
    {
        $this->container['forkEnabled'] = $forkEnabled;

        return $this;
    }

    /**
     * Gets pullRequestsEnabled
     *
     * @return bool
     */
    public function getPullRequestsEnabled()
    {
        return $this->container['pullRequestsEnabled'];
    }

    /**
     * Sets pullRequestsEnabled
     *
     * @param bool $pullRequestsEnabled 是否接受 PR
     *
     * @return $this
     */
    public function setPullRequestsEnabled($pullRequestsEnabled)
    {
        $this->container['pullRequestsEnabled'] = $pullRequestsEnabled;

        return $this;
    }

    /**
     * Gets nameWithoutTopNamespace
     *
     * @return string
     */
    public function getNameWithoutTopNamespace()
    {
        return $this->container['nameWithoutTopNamespace'];
    }

    /**
     * Sets nameWithoutTopNamespace
     *
     * @param string $nameWithoutTopNamespace 去除顶层命名空间名称的仓库全路径名称
     *
     * @return $this
     */
    public function setNameWithoutTopNamespace($nameWithoutTopNamespace)
    {
        $this->container['nameWithoutTopNamespace'] = $nameWithoutTopNamespace;

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


