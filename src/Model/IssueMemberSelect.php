<?php
/**
 * IssueMemberSelect
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
 * IssueMemberSelect Class Doc Comment
 *
 * @category Class
 * @description 获取任务指派的成员列表
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IssueMemberSelect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IssueMemberSelect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'username' => 'string',
        'name' => 'string',
        'remark' => 'string',
        'pinyin' => 'string',
        'avatarUrl' => 'string',
        'isEnterpriseMember' => 'bool',
        'isHistoryMember' => 'bool',
        'outsourced' => 'bool',
        'isProgramMember' => 'bool',
        'isProjectMember' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'username' => null,
        'name' => null,
        'remark' => null,
        'pinyin' => null,
        'avatarUrl' => null,
        'isEnterpriseMember' => null,
        'isHistoryMember' => null,
        'outsourced' => null,
        'isProgramMember' => null,
        'isProjectMember' => null
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
        'username' => 'username',
        'name' => 'name',
        'remark' => 'remark',
        'pinyin' => 'pinyin',
        'avatarUrl' => 'avatar_url',
        'isEnterpriseMember' => 'is_enterprise_member',
        'isHistoryMember' => 'is_history_member',
        'outsourced' => 'outsourced',
        'isProgramMember' => 'is_program_member',
        'isProjectMember' => 'is_project_member'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'username' => 'setUsername',
        'name' => 'setName',
        'remark' => 'setRemark',
        'pinyin' => 'setPinyin',
        'avatarUrl' => 'setAvatarUrl',
        'isEnterpriseMember' => 'setIsEnterpriseMember',
        'isHistoryMember' => 'setIsHistoryMember',
        'outsourced' => 'setOutsourced',
        'isProgramMember' => 'setIsProgramMember',
        'isProjectMember' => 'setIsProjectMember'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'username' => 'getUsername',
        'name' => 'getName',
        'remark' => 'getRemark',
        'pinyin' => 'getPinyin',
        'avatarUrl' => 'getAvatarUrl',
        'isEnterpriseMember' => 'getIsEnterpriseMember',
        'isHistoryMember' => 'getIsHistoryMember',
        'outsourced' => 'getOutsourced',
        'isProgramMember' => 'getIsProgramMember',
        'isProjectMember' => 'getIsProjectMember'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['pinyin'] = isset($data['pinyin']) ? $data['pinyin'] : null;
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['isEnterpriseMember'] = isset($data['isEnterpriseMember']) ? $data['isEnterpriseMember'] : null;
        $this->container['isHistoryMember'] = isset($data['isHistoryMember']) ? $data['isHistoryMember'] : null;
        $this->container['outsourced'] = isset($data['outsourced']) ? $data['outsourced'] : null;
        $this->container['isProgramMember'] = isset($data['isProgramMember']) ? $data['isProgramMember'] : null;
        $this->container['isProjectMember'] = isset($data['isProjectMember']) ? $data['isProjectMember'] : null;
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
     * @param int $id 用户 id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username 用户个性地址
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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
     * @param string $name 用户名称
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $remark 用户在企业的备注名
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets pinyin
     *
     * @return string
     */
    public function getPinyin()
    {
        return $this->container['pinyin'];
    }

    /**
     * Sets pinyin
     *
     * @param string $pinyin 成员备注或名称拼音
     *
     * @return $this
     */
    public function setPinyin($pinyin)
    {
        $this->container['pinyin'] = $pinyin;

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
     * @param string $avatarUrl 用户头像
     *
     * @return $this
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;

        return $this;
    }

    /**
     * Gets isEnterpriseMember
     *
     * @return bool
     */
    public function getIsEnterpriseMember()
    {
        return $this->container['isEnterpriseMember'];
    }

    /**
     * Sets isEnterpriseMember
     *
     * @param bool $isEnterpriseMember 是否企业成员
     *
     * @return $this
     */
    public function setIsEnterpriseMember($isEnterpriseMember)
    {
        $this->container['isEnterpriseMember'] = $isEnterpriseMember;

        return $this;
    }

    /**
     * Gets isHistoryMember
     *
     * @return bool
     */
    public function getIsHistoryMember()
    {
        return $this->container['isHistoryMember'];
    }

    /**
     * Sets isHistoryMember
     *
     * @param bool $isHistoryMember 是否是已离职成员
     *
     * @return $this
     */
    public function setIsHistoryMember($isHistoryMember)
    {
        $this->container['isHistoryMember'] = $isHistoryMember;

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
     * @param bool $outsourced 是否外包成员
     *
     * @return $this
     */
    public function setOutsourced($outsourced)
    {
        $this->container['outsourced'] = $outsourced;

        return $this;
    }

    /**
     * Gets isProgramMember
     *
     * @return bool
     */
    public function getIsProgramMember()
    {
        return $this->container['isProgramMember'];
    }

    /**
     * Sets isProgramMember
     *
     * @param bool $isProgramMember 是否项目成员
     *
     * @return $this
     */
    public function setIsProgramMember($isProgramMember)
    {
        $this->container['isProgramMember'] = $isProgramMember;

        return $this;
    }

    /**
     * Gets isProjectMember
     *
     * @return bool
     */
    public function getIsProjectMember()
    {
        return $this->container['isProjectMember'];
    }

    /**
     * Sets isProjectMember
     *
     * @param bool $isProjectMember 是否仓库成员
     *
     * @return $this
     */
    public function setIsProjectMember($isProjectMember)
    {
        $this->container['isProjectMember'] = $isProjectMember;

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


