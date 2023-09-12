<?php
/**
 * Member
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
 * Member Class Doc Comment
 *
 * @category Class
 * @description 修改仓库成员权限
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Member implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Member';

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
        'occupation' => 'string',
        'isBlock' => 'bool',
        'blockMessage' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'user' => '\GiteeEnterprise\Model\User',
        'enterpriseRole' => '\GiteeEnterprise\Model\EnterpriseRoleBase',
        'isFeedback' => 'bool',
        'isGuided' => 'bool',
        'userGuideClosed' => 'bool'
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
        'occupation' => null,
        'isBlock' => null,
        'blockMessage' => null,
        'phone' => null,
        'email' => null,
        'user' => null,
        'enterpriseRole' => null,
        'isFeedback' => null,
        'isGuided' => null,
        'userGuideClosed' => null
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
        'occupation' => 'occupation',
        'isBlock' => 'is_block',
        'blockMessage' => 'block_message',
        'phone' => 'phone',
        'email' => 'email',
        'user' => 'user',
        'enterpriseRole' => 'enterprise_role',
        'isFeedback' => 'is_feedback',
        'isGuided' => 'is_guided',
        'userGuideClosed' => 'user_guide_closed'
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
        'occupation' => 'setOccupation',
        'isBlock' => 'setIsBlock',
        'blockMessage' => 'setBlockMessage',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'user' => 'setUser',
        'enterpriseRole' => 'setEnterpriseRole',
        'isFeedback' => 'setIsFeedback',
        'isGuided' => 'setIsGuided',
        'userGuideClosed' => 'setUserGuideClosed'
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
        'occupation' => 'getOccupation',
        'isBlock' => 'getIsBlock',
        'blockMessage' => 'getBlockMessage',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'user' => 'getUser',
        'enterpriseRole' => 'getEnterpriseRole',
        'isFeedback' => 'getIsFeedback',
        'isGuided' => 'getIsGuided',
        'userGuideClosed' => 'getUserGuideClosed'
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
        $this->container['occupation'] = isset($data['occupation']) ? $data['occupation'] : null;
        $this->container['isBlock'] = isset($data['isBlock']) ? $data['isBlock'] : null;
        $this->container['blockMessage'] = isset($data['blockMessage']) ? $data['blockMessage'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['enterpriseRole'] = isset($data['enterpriseRole']) ? $data['enterpriseRole'] : null;
        $this->container['isFeedback'] = isset($data['isFeedback']) ? $data['isFeedback'] : null;
        $this->container['isGuided'] = isset($data['isGuided']) ? $data['isGuided'] : null;
        $this->container['userGuideClosed'] = isset($data['userGuideClosed']) ? $data['userGuideClosed'] : null;
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
     * @param int $id 成员 id
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
     * @param string $username 成员个性地址
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
     * @param string $name 成员名称
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
     * @param string $remark 成员在企业的备注姓名
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
     * Gets occupation
     *
     * @return string
     */
    public function getOccupation()
    {
        return $this->container['occupation'];
    }

    /**
     * Sets occupation
     *
     * @param string $occupation 职位
     *
     * @return $this
     */
    public function setOccupation($occupation)
    {
        $this->container['occupation'] = $occupation;

        return $this;
    }

    /**
     * Gets isBlock
     *
     * @return bool
     */
    public function getIsBlock()
    {
        return $this->container['isBlock'];
    }

    /**
     * Sets isBlock
     *
     * @param bool $isBlock 是否被锁定
     *
     * @return $this
     */
    public function setIsBlock($isBlock)
    {
        $this->container['isBlock'] = $isBlock;

        return $this;
    }

    /**
     * Gets blockMessage
     *
     * @return string
     */
    public function getBlockMessage()
    {
        return $this->container['blockMessage'];
    }

    /**
     * Sets blockMessage
     *
     * @param string $blockMessage 成员被锁定的原因
     *
     * @return $this
     */
    public function setBlockMessage($blockMessage)
    {
        $this->container['blockMessage'] = $blockMessage;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone 手机号码
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email 邮箱
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \GiteeEnterprise\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \GiteeEnterprise\Model\User $user 用户的基础信息
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets enterpriseRole
     *
     * @return \GiteeEnterprise\Model\EnterpriseRoleBase
     */
    public function getEnterpriseRole()
    {
        return $this->container['enterpriseRole'];
    }

    /**
     * Sets enterpriseRole
     *
     * @param \GiteeEnterprise\Model\EnterpriseRoleBase $enterpriseRole 成员在企业的角色
     *
     * @return $this
     */
    public function setEnterpriseRole($enterpriseRole)
    {
        $this->container['enterpriseRole'] = $enterpriseRole;

        return $this;
    }

    /**
     * Gets isFeedback
     *
     * @return bool
     */
    public function getIsFeedback()
    {
        return $this->container['isFeedback'];
    }

    /**
     * Sets isFeedback
     *
     * @param bool $isFeedback 成员是否填写过
     *
     * @return $this
     */
    public function setIsFeedback($isFeedback)
    {
        $this->container['isFeedback'] = $isFeedback;

        return $this;
    }

    /**
     * Gets isGuided
     *
     * @return bool
     */
    public function getIsGuided()
    {
        return $this->container['isGuided'];
    }

    /**
     * Sets isGuided
     *
     * @param bool $isGuided 是否完成引导
     *
     * @return $this
     */
    public function setIsGuided($isGuided)
    {
        $this->container['isGuided'] = $isGuided;

        return $this;
    }

    /**
     * Gets userGuideClosed
     *
     * @return bool
     */
    public function getUserGuideClosed()
    {
        return $this->container['userGuideClosed'];
    }

    /**
     * Sets userGuideClosed
     *
     * @param bool $userGuideClosed 是否关闭了新手引导
     *
     * @return $this
     */
    public function setUserGuideClosed($userGuideClosed)
    {
        $this->container['userGuideClosed'] = $userGuideClosed;

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


