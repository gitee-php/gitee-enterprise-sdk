<?php
/**
 * IssueOperateLog
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
 * IssueOperateLog Class Doc Comment
 *
 * @category Class
 * @description 获取任务的操作日志列表
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IssueOperateLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IssueOperateLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'icon' => 'string',
        'content' => 'string',
        'createdAt' => 'string',
        'user' => '\GiteeEnterprise\Model\UserWithRemark',
        'beforeChange' => 'string',
        'afterChange' => 'string',
        'throughType' => 'string',
        'through' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'icon' => null,
        'content' => null,
        'createdAt' => 'DateTime',
        'user' => null,
        'beforeChange' => null,
        'afterChange' => null,
        'throughType' => null,
        'through' => null
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
        'icon' => 'icon',
        'content' => 'content',
        'createdAt' => 'created_at',
        'user' => 'user',
        'beforeChange' => 'before_change',
        'afterChange' => 'after_change',
        'throughType' => 'through_type',
        'through' => 'through'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'icon' => 'setIcon',
        'content' => 'setContent',
        'createdAt' => 'setCreatedAt',
        'user' => 'setUser',
        'beforeChange' => 'setBeforeChange',
        'afterChange' => 'setAfterChange',
        'throughType' => 'setThroughType',
        'through' => 'setThrough'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'icon' => 'getIcon',
        'content' => 'getContent',
        'createdAt' => 'getCreatedAt',
        'user' => 'getUser',
        'beforeChange' => 'getBeforeChange',
        'afterChange' => 'getAfterChange',
        'throughType' => 'getThroughType',
        'through' => 'getThrough'
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
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['beforeChange'] = isset($data['beforeChange']) ? $data['beforeChange'] : null;
        $this->container['afterChange'] = isset($data['afterChange']) ? $data['afterChange'] : null;
        $this->container['throughType'] = isset($data['throughType']) ? $data['throughType'] : null;
        $this->container['through'] = isset($data['through']) ? $data['through'] : null;
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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon 图标
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content 内容
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

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
     * @param \GiteeEnterprise\Model\UserWithRemark $user 操作者
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets beforeChange
     *
     * @return string
     */
    public function getBeforeChange()
    {
        return $this->container['beforeChange'];
    }

    /**
     * Sets beforeChange
     *
     * @param string $beforeChange 改变前的值
     *
     * @return $this
     */
    public function setBeforeChange($beforeChange)
    {
        $this->container['beforeChange'] = $beforeChange;

        return $this;
    }

    /**
     * Gets afterChange
     *
     * @return string
     */
    public function getAfterChange()
    {
        return $this->container['afterChange'];
    }

    /**
     * Sets afterChange
     *
     * @param string $afterChange 改变后的值
     *
     * @return $this
     */
    public function setAfterChange($afterChange)
    {
        $this->container['afterChange'] = $afterChange;

        return $this;
    }

    /**
     * Gets throughType
     *
     * @return string
     */
    public function getThroughType()
    {
        return $this->container['throughType'];
    }

    /**
     * Sets throughType
     *
     * @param string $throughType 日志通过对象类型
     *
     * @return $this
     */
    public function setThroughType($throughType)
    {
        $this->container['throughType'] = $throughType;

        return $this;
    }

    /**
     * Gets through
     *
     * @return object
     */
    public function getThrough()
    {
        return $this->container['through'];
    }

    /**
     * Sets through
     *
     * @param object $through 日志通过对象类型
     *
     * @return $this
     */
    public function setThrough($through)
    {
        $this->container['through'] = $through;

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


