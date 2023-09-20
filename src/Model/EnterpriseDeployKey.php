<?php
/**
 * EnterpriseDeployKey
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
 * EnterpriseDeployKey Class Doc Comment
 *
 * @category Class
 * @description 修改部署公钥
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseDeployKey implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EnterpriseDeployKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'key' => 'string',
        'sha256Fingerprint' => 'string',
        'user' => '\GiteeEnterprise\Model\UserWithRemark',
        'projectsCount' => 'int',
        'projects' => '\GiteeEnterprise\Model\Project',
        'system' => 'bool',
        'isBae' => 'bool',
        'isPages' => 'bool',
        'createdAt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'title' => null,
        'key' => null,
        'sha256Fingerprint' => null,
        'user' => null,
        'projectsCount' => 'int32',
        'projects' => null,
        'system' => null,
        'isBae' => null,
        'isPages' => null,
        'createdAt' => 'DateTime'
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
        'key' => 'key',
        'sha256Fingerprint' => 'sha256_fingerprint',
        'user' => 'user',
        'projectsCount' => 'projects_count',
        'projects' => 'projects',
        'system' => 'system',
        'isBae' => 'is_bae',
        'isPages' => 'is_pages',
        'createdAt' => 'created_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'key' => 'setKey',
        'sha256Fingerprint' => 'setSha256Fingerprint',
        'user' => 'setUser',
        'projectsCount' => 'setProjectsCount',
        'projects' => 'setProjects',
        'system' => 'setSystem',
        'isBae' => 'setIsBae',
        'isPages' => 'setIsPages',
        'createdAt' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'key' => 'getKey',
        'sha256Fingerprint' => 'getSha256Fingerprint',
        'user' => 'getUser',
        'projectsCount' => 'getProjectsCount',
        'projects' => 'getProjects',
        'system' => 'getSystem',
        'isBae' => 'getIsBae',
        'isPages' => 'getIsPages',
        'createdAt' => 'getCreatedAt'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['sha256Fingerprint'] = isset($data['sha256Fingerprint']) ? $data['sha256Fingerprint'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['projectsCount'] = isset($data['projectsCount']) ? $data['projectsCount'] : null;
        $this->container['projects'] = isset($data['projects']) ? $data['projects'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
        $this->container['isBae'] = isset($data['isBae']) ? $data['isBae'] : null;
        $this->container['isPages'] = isset($data['isPages']) ? $data['isPages'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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
     * @param int $id 部署公钥 id
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
     * @param string $title 部署公钥 title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key 部署公钥内容
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets sha256Fingerprint
     *
     * @return string
     */
    public function getSha256Fingerprint()
    {
        return $this->container['sha256Fingerprint'];
    }

    /**
     * Sets sha256Fingerprint
     *
     * @param string $sha256Fingerprint sha256 指纹
     *
     * @return $this
     */
    public function setSha256Fingerprint($sha256Fingerprint)
    {
        $this->container['sha256Fingerprint'] = $sha256Fingerprint;

        return $this;
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
     * @param \GiteeEnterprise\Model\UserWithRemark $user 公钥的创建者
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets projectsCount
     *
     * @return int
     */
    public function getProjectsCount()
    {
        return $this->container['projectsCount'];
    }

    /**
     * Sets projectsCount
     *
     * @param int $projectsCount 已部署仓库数量
     *
     * @return $this
     */
    public function setProjectsCount($projectsCount)
    {
        $this->container['projectsCount'] = $projectsCount;

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
     * @param \GiteeEnterprise\Model\Project $projects 已部署的仓库
     *
     * @return $this
     */
    public function setProjects($projects)
    {
        $this->container['projects'] = $projects;

        return $this;
    }

    /**
     * Gets system
     *
     * @return bool
     */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
     * Sets system
     *
     * @param bool $system 是否是系统公钥
     *
     * @return $this
     */
    public function setSystem($system)
    {
        $this->container['system'] = $system;

        return $this;
    }

    /**
     * Gets isBae
     *
     * @return bool
     */
    public function getIsBae()
    {
        return $this->container['isBae'];
    }

    /**
     * Sets isBae
     *
     * @param bool $isBae 是否是bae公钥
     *
     * @return $this
     */
    public function setIsBae($isBae)
    {
        $this->container['isBae'] = $isBae;

        return $this;
    }

    /**
     * Gets isPages
     *
     * @return bool
     */
    public function getIsPages()
    {
        return $this->container['isPages'];
    }

    /**
     * Sets isPages
     *
     * @param bool $isPages 是否是pages公钥
     *
     * @return $this
     */
    public function setIsPages($isPages)
    {
        $this->container['isPages'] = $isPages;

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
     * @param string $createdAt 创建时间
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

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


