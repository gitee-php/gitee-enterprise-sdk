<?php
/**
 * DocDirectory
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
 * DocDirectory Class Doc Comment
 *
 * @category Class
 * @description 获取文件夹
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocDirectory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocDirectory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'parentId' => 'int',
        'name' => 'string',
        'public' => 'string',
        'publicName' => 'string',
        'program' => '\GiteeEnterprise\Model\Program',
        'fileType' => 'string',
        'fileId' => 'string',
        'children' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'parentId' => 'int32',
        'name' => null,
        'public' => null,
        'publicName' => null,
        'program' => null,
        'fileType' => null,
        'fileId' => null,
        'children' => null
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
        'parentId' => 'parent_id',
        'name' => 'name',
        'public' => 'public',
        'publicName' => 'public_name',
        'program' => 'program',
        'fileType' => 'file_type',
        'fileId' => 'file_id',
        'children' => 'children'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parentId' => 'setParentId',
        'name' => 'setName',
        'public' => 'setPublic',
        'publicName' => 'setPublicName',
        'program' => 'setProgram',
        'fileType' => 'setFileType',
        'fileId' => 'setFileId',
        'children' => 'setChildren'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parentId' => 'getParentId',
        'name' => 'getName',
        'public' => 'getPublic',
        'publicName' => 'getPublicName',
        'program' => 'getProgram',
        'fileType' => 'getFileType',
        'fileId' => 'getFileId',
        'children' => 'getChildren'
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
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['publicName'] = isset($data['publicName']) ? $data['publicName'] : null;
        $this->container['program'] = isset($data['program']) ? $data['program'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['fileId'] = isset($data['fileId']) ? $data['fileId'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
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
     * @param int $parentId 父层级的 id
     *
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;

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
     * @param string $name 名称
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets public
     *
     * @return string
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param string $public 权限值
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets publicName
     *
     * @return string
     */
    public function getPublicName()
    {
        return $this->container['publicName'];
    }

    /**
     * Sets publicName
     *
     * @param string $publicName 权限名称
     *
     * @return $this
     */
    public function setPublicName($publicName)
    {
        $this->container['publicName'] = $publicName;

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
     * @param \GiteeEnterprise\Model\Program $program 关联项目
     *
     * @return $this
     */
    public function setProgram($program)
    {
        $this->container['program'] = $program;

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
     * @param string $fileType 关联类型。(目录：DocDirectory，文档：WikiInfo，附件：AttachFile)
     *
     * @return $this
     */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;

        return $this;
    }

    /**
     * Gets fileId
     *
     * @return string
     */
    public function getFileId()
    {
        return $this->container['fileId'];
    }

    /**
     * Sets fileId
     *
     * @param string $fileId 关联类型的 id
     *
     * @return $this
     */
    public function setFileId($fileId)
    {
        $this->container['fileId'] = $fileId;

        return $this;
    }

    /**
     * Gets children
     *
     * @return string
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param string $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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


