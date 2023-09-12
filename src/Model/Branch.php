<?php
/**
 * Branch
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
 * Branch Class Doc Comment
 *
 * @category Class
 * @description 编辑分支
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Branch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Branch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'branchType' => 'object',
        'isDefault' => 'bool',
        'protectionRule' => 'object',
        'commit' => 'object',
        'operating' => 'object',
        'pullRequest' => '\GiteeEnterprise\Model\PullRequest',
        'remark' => 'string',
        'owner' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'branchType' => null,
        'isDefault' => null,
        'protectionRule' => null,
        'commit' => null,
        'operating' => null,
        'pullRequest' => null,
        'remark' => null,
        'owner' => null
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
        'name' => 'name',
        'branchType' => 'branch_type',
        'isDefault' => 'is_default',
        'protectionRule' => 'protection_rule',
        'commit' => 'commit',
        'operating' => 'operating',
        'pullRequest' => 'pull_request',
        'remark' => 'remark',
        'owner' => 'owner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'branchType' => 'setBranchType',
        'isDefault' => 'setIsDefault',
        'protectionRule' => 'setProtectionRule',
        'commit' => 'setCommit',
        'operating' => 'setOperating',
        'pullRequest' => 'setPullRequest',
        'remark' => 'setRemark',
        'owner' => 'setOwner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'branchType' => 'getBranchType',
        'isDefault' => 'getIsDefault',
        'protectionRule' => 'getProtectionRule',
        'commit' => 'getCommit',
        'operating' => 'getOperating',
        'pullRequest' => 'getPullRequest',
        'remark' => 'getRemark',
        'owner' => 'getOwner'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['branchType'] = isset($data['branchType']) ? $data['branchType'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['protectionRule'] = isset($data['protectionRule']) ? $data['protectionRule'] : null;
        $this->container['commit'] = isset($data['commit']) ? $data['commit'] : null;
        $this->container['operating'] = isset($data['operating']) ? $data['operating'] : null;
        $this->container['pullRequest'] = isset($data['pullRequest']) ? $data['pullRequest'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
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
     * @param string $name 分支名称
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets branchType
     *
     * @return object
     */
    public function getBranchType()
    {
        return $this->container['branchType'];
    }

    /**
     * Sets branchType
     *
     * @param object $branchType 分支类型
     *
     * @return $this
     */
    public function setBranchType($branchType)
    {
        $this->container['branchType'] = $branchType;

        return $this;
    }

    /**
     * Gets isDefault
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
     * Sets isDefault
     *
     * @param bool $isDefault 是否默认分支
     *
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;

        return $this;
    }

    /**
     * Gets protectionRule
     *
     * @return object
     */
    public function getProtectionRule()
    {
        return $this->container['protectionRule'];
    }

    /**
     * Sets protectionRule
     *
     * @param object $protectionRule 保护分支的操作规则
     *
     * @return $this
     */
    public function setProtectionRule($protectionRule)
    {
        $this->container['protectionRule'] = $protectionRule;

        return $this;
    }

    /**
     * Gets commit
     *
     * @return object
     */
    public function getCommit()
    {
        return $this->container['commit'];
    }

    /**
     * Sets commit
     *
     * @param object $commit commit信息
     *
     * @return $this
     */
    public function setCommit($commit)
    {
        $this->container['commit'] = $commit;

        return $this;
    }

    /**
     * Gets operating
     *
     * @return object
     */
    public function getOperating()
    {
        return $this->container['operating'];
    }

    /**
     * Sets operating
     *
     * @param object $operating 操作相关权限
     *
     * @return $this
     */
    public function setOperating($operating)
    {
        $this->container['operating'] = $operating;

        return $this;
    }

    /**
     * Gets pullRequest
     *
     * @return \GiteeEnterprise\Model\PullRequest
     */
    public function getPullRequest()
    {
        return $this->container['pullRequest'];
    }

    /**
     * Sets pullRequest
     *
     * @param \GiteeEnterprise\Model\PullRequest $pullRequest 向默认分支的pr
     *
     * @return $this
     */
    public function setPullRequest($pullRequest)
    {
        $this->container['pullRequest'] = $pullRequest;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string $remark 分支备注
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return object
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param object $owner 分支拥有者信息
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

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


