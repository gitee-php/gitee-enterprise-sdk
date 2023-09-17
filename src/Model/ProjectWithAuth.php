<?php
/**
 * ProjectWithAuth
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
 * OpenAPI spec version: 0.1.334
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
 * ProjectWithAuth Class Doc Comment
 *
 * @category Class
 * @description 获取成员加入的仓库列表
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectWithAuth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectWithAuth';

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
        'canQuit' => 'bool',
        'projectAccess' => 'int'
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
        'canQuit' => null,
        'projectAccess' => 'int32'
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
        'canQuit' => 'can_quit',
        'projectAccess' => 'project_access'
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
        'canQuit' => 'setCanQuit',
        'projectAccess' => 'setProjectAccess'
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
        'canQuit' => 'getCanQuit',
        'projectAccess' => 'getProjectAccess'
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
        $this->container['canQuit'] = isset($data['canQuit']) ? $data['canQuit'] : null;
        $this->container['projectAccess'] = isset($data['projectAccess']) ? $data['projectAccess'] : null;
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
     * Gets canQuit
     *
     * @return bool
     */
    public function getCanQuit()
    {
        return $this->container['canQuit'];
    }

    /**
     * Sets canQuit
     *
     * @param bool $canQuit 能否编辑退出
     *
     * @return $this
     */
    public function setCanQuit($canQuit)
    {
        $this->container['canQuit'] = $canQuit;

        return $this;
    }

    /**
     * Gets projectAccess
     *
     * @return int
     */
    public function getProjectAccess()
    {
        return $this->container['projectAccess'];
    }

    /**
     * Sets projectAccess
     *
     * @param int $projectAccess 当前成员在该仓库的角色
     *
     * @return $this
     */
    public function setProjectAccess($projectAccess)
    {
        $this->container['projectAccess'] = $projectAccess;

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


