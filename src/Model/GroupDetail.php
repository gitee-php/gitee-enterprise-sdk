<?php
/**
 * GroupDetail
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
 * GroupDetail Class Doc Comment
 *
 * @category Class
 * @description 获取团队详情
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroupDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GroupDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'path' => 'string',
        'avatarUrl' => 'string',
        'description' => 'string',
        'groupType' => 'int',
        'groupTypeHumanName' => 'string',
        'public' => 'int',
        'creator' => '\GiteeEnterprise\Model\UserWithRemark',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'membersCount' => 'int',
        'canEdit' => 'bool',
        'relateProgramCount' => 'int',
        'relateProjectCount' => 'int',
        'subGroupCount' => 'int',
        'projectCount' => 'int',
        'hasChildren' => 'bool'
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
        'avatarUrl' => null,
        'description' => null,
        'groupType' => 'int32',
        'groupTypeHumanName' => null,
        'public' => 'int32',
        'creator' => null,
        'createdAt' => 'DateTime',
        'updatedAt' => 'DateTime',
        'membersCount' => 'int32',
        'canEdit' => null,
        'relateProgramCount' => 'int32',
        'relateProjectCount' => 'int32',
        'subGroupCount' => 'int32',
        'projectCount' => 'int32',
        'hasChildren' => null
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
        'avatarUrl' => 'avatar_url',
        'description' => 'description',
        'groupType' => 'group_type',
        'groupTypeHumanName' => 'group_type_human_name',
        'public' => 'public',
        'creator' => 'creator',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'membersCount' => 'members_count',
        'canEdit' => 'can_edit',
        'relateProgramCount' => 'relate_program_count',
        'relateProjectCount' => 'relate_project_count',
        'subGroupCount' => 'sub_group_count',
        'projectCount' => 'project_count',
        'hasChildren' => 'has_children'
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
        'avatarUrl' => 'setAvatarUrl',
        'description' => 'setDescription',
        'groupType' => 'setGroupType',
        'groupTypeHumanName' => 'setGroupTypeHumanName',
        'public' => 'setPublic',
        'creator' => 'setCreator',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'membersCount' => 'setMembersCount',
        'canEdit' => 'setCanEdit',
        'relateProgramCount' => 'setRelateProgramCount',
        'relateProjectCount' => 'setRelateProjectCount',
        'subGroupCount' => 'setSubGroupCount',
        'projectCount' => 'setProjectCount',
        'hasChildren' => 'setHasChildren'
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
        'avatarUrl' => 'getAvatarUrl',
        'description' => 'getDescription',
        'groupType' => 'getGroupType',
        'groupTypeHumanName' => 'getGroupTypeHumanName',
        'public' => 'getPublic',
        'creator' => 'getCreator',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'membersCount' => 'getMembersCount',
        'canEdit' => 'getCanEdit',
        'relateProgramCount' => 'getRelateProgramCount',
        'relateProjectCount' => 'getRelateProjectCount',
        'subGroupCount' => 'getSubGroupCount',
        'projectCount' => 'getProjectCount',
        'hasChildren' => 'getHasChildren'
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
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['groupTypeHumanName'] = isset($data['groupTypeHumanName']) ? $data['groupTypeHumanName'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['membersCount'] = isset($data['membersCount']) ? $data['membersCount'] : null;
        $this->container['canEdit'] = isset($data['canEdit']) ? $data['canEdit'] : null;
        $this->container['relateProgramCount'] = isset($data['relateProgramCount']) ? $data['relateProgramCount'] : null;
        $this->container['relateProjectCount'] = isset($data['relateProjectCount']) ? $data['relateProjectCount'] : null;
        $this->container['subGroupCount'] = isset($data['subGroupCount']) ? $data['subGroupCount'] : null;
        $this->container['projectCount'] = isset($data['projectCount']) ? $data['projectCount'] : null;
        $this->container['hasChildren'] = isset($data['hasChildren']) ? $data['hasChildren'] : null;
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
     * @param int $id 团队 id
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
     * @param string $name 团队名称
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
     * @param string $path 团队路径
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets avatarUrl
     *
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatarUrl'];
    }

    /**
     * Sets avatarUrl
     *
     * @param string $avatarUrl 团队头像
     *
     * @return $this
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;

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
     * @param string $description 团队描述
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets groupType
     *
     * @return int
     */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
     * Sets groupType
     *
     * @param int $groupType deprecated.团队的类型值。0: 内部 1:公开 2:外包
     *
     * @return $this
     */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;

        return $this;
    }

    /**
     * Gets groupTypeHumanName
     *
     * @return string
     */
    public function getGroupTypeHumanName()
    {
        return $this->container['groupTypeHumanName'];
    }

    /**
     * Sets groupTypeHumanName
     *
     * @param string $groupTypeHumanName 团队的类型名称
     *
     * @return $this
     */
    public function setGroupTypeHumanName($groupTypeHumanName)
    {
        $this->container['groupTypeHumanName'] = $groupTypeHumanName;

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
     * @param int $public 团队的类型值。0: 内部 1:公开 2:外包
     *
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

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
     * @param \GiteeEnterprise\Model\UserWithRemark $creator 创建者
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
     * @param string $updatedAt 更新时间
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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
     * @param int $membersCount 参与团队的成员数
     *
     * @return $this
     */
    public function setMembersCount($membersCount)
    {
        $this->container['membersCount'] = $membersCount;

        return $this;
    }

    /**
     * Gets canEdit
     *
     * @return bool
     */
    public function getCanEdit()
    {
        return $this->container['canEdit'];
    }

    /**
     * Sets canEdit
     *
     * @param bool $canEdit 能否编辑
     *
     * @return $this
     */
    public function setCanEdit($canEdit)
    {
        $this->container['canEdit'] = $canEdit;

        return $this;
    }

    /**
     * Gets relateProgramCount
     *
     * @return int
     */
    public function getRelateProgramCount()
    {
        return $this->container['relateProgramCount'];
    }

    /**
     * Sets relateProgramCount
     *
     * @param int $relateProgramCount 关联项目数量
     *
     * @return $this
     */
    public function setRelateProgramCount($relateProgramCount)
    {
        $this->container['relateProgramCount'] = $relateProgramCount;

        return $this;
    }

    /**
     * Gets relateProjectCount
     *
     * @return int
     */
    public function getRelateProjectCount()
    {
        return $this->container['relateProjectCount'];
    }

    /**
     * Sets relateProjectCount
     *
     * @param int $relateProjectCount 关联仓库数量
     *
     * @return $this
     */
    public function setRelateProjectCount($relateProjectCount)
    {
        $this->container['relateProjectCount'] = $relateProjectCount;

        return $this;
    }

    /**
     * Gets subGroupCount
     *
     * @return int
     */
    public function getSubGroupCount()
    {
        return $this->container['subGroupCount'];
    }

    /**
     * Sets subGroupCount
     *
     * @param int $subGroupCount 子组数量
     *
     * @return $this
     */
    public function setSubGroupCount($subGroupCount)
    {
        $this->container['subGroupCount'] = $subGroupCount;

        return $this;
    }

    /**
     * Gets projectCount
     *
     * @return int
     */
    public function getProjectCount()
    {
        return $this->container['projectCount'];
    }

    /**
     * Sets projectCount
     *
     * @param int $projectCount 项目数量
     *
     * @return $this
     */
    public function setProjectCount($projectCount)
    {
        $this->container['projectCount'] = $projectCount;

        return $this;
    }

    /**
     * Gets hasChildren
     *
     * @return bool
     */
    public function getHasChildren()
    {
        return $this->container['hasChildren'];
    }

    /**
     * Sets hasChildren
     *
     * @param bool $hasChildren 是否包含子组
     *
     * @return $this
     */
    public function setHasChildren($hasChildren)
    {
        $this->container['hasChildren'] = $hasChildren;

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


