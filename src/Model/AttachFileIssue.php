<?php
/**
 * AttachFileIssue
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
 * AttachFileIssue Class Doc Comment
 *
 * @category Class
 * @description 查看全部附件
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AttachFileIssue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AttachFileIssue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'size' => 'int',
        'fileType' => 'string',
        'previewUrl' => 'string',
        'creator' => '\GiteeEnterprise\Model\UserWithRemark',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'issue' => '\GiteeEnterprise\Model\Issue',
        'canDelete' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'size' => 'int32',
        'fileType' => null,
        'previewUrl' => null,
        'creator' => null,
        'createdAt' => 'DateTime',
        'updatedAt' => 'DateTime',
        'issue' => null,
        'canDelete' => null
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
        'size' => 'size',
        'fileType' => 'file_type',
        'previewUrl' => 'preview_url',
        'creator' => 'creator',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'issue' => 'issue',
        'canDelete' => 'can_delete'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'size' => 'setSize',
        'fileType' => 'setFileType',
        'previewUrl' => 'setPreviewUrl',
        'creator' => 'setCreator',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'issue' => 'setIssue',
        'canDelete' => 'setCanDelete'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'size' => 'getSize',
        'fileType' => 'getFileType',
        'previewUrl' => 'getPreviewUrl',
        'creator' => 'getCreator',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'issue' => 'getIssue',
        'canDelete' => 'getCanDelete'
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['previewUrl'] = isset($data['previewUrl']) ? $data['previewUrl'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['issue'] = isset($data['issue']) ? $data['issue'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
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
     * @param int $id 附件 id
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
     * @param string $name 附件名称
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size 附件的大小
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
     * Sets fileType
     *
     * @param string $fileType 附件的类型
     *
     * @return $this
     */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;

        return $this;
    }

    /**
     * Gets previewUrl
     *
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->container['previewUrl'];
    }

    /**
     * Sets previewUrl
     *
     * @param string $previewUrl 附件的查看地址
     *
     * @return $this
     */
    public function setPreviewUrl($previewUrl)
    {
        $this->container['previewUrl'] = $previewUrl;

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
     * @param \GiteeEnterprise\Model\UserWithRemark $creator 附件的创建者
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

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
     * @param string $createdAt 附件的创建时间
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
     * @param string $updatedAt 附件的更新时间
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets issue
     *
     * @return \GiteeEnterprise\Model\Issue
     */
    public function getIssue()
    {
        return $this->container['issue'];
    }

    /**
     * Sets issue
     *
     * @param \GiteeEnterprise\Model\Issue $issue 关联issue
     *
     * @return $this
     */
    public function setIssue($issue)
    {
        $this->container['issue'] = $issue;

        return $this;
    }

    /**
     * Gets canDelete
     *
     * @return bool
     */
    public function getCanDelete()
    {
        return $this->container['canDelete'];
    }

    /**
     * Sets canDelete
     *
     * @param bool $canDelete 能否删除附件
     *
     * @return $this
     */
    public function setCanDelete($canDelete)
    {
        $this->container['canDelete'] = $canDelete;

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


