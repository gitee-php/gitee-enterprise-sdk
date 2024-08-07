<?php
/**
 * MemberApplication
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
 * MemberApplication Class Doc Comment
 *
 * @category Class
 * @description 处理申请记录
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MemberApplication implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MemberApplication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'applicantName' => 'string',
        'applicant' => '\GiteeEnterprise\Model\UserWithRemark',
        'inviter' => '\GiteeEnterprise\Model\UserWithRemark',
        'remark' => 'string',
        'needCheck' => 'string',
        'state' => 'string',
        'operator' => 'string',
        'roleId' => 'int',
        'access' => 'int',
        'createdAt' => 'string',
        'updatedAt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'applicantName' => null,
        'applicant' => null,
        'inviter' => null,
        'remark' => null,
        'needCheck' => null,
        'state' => null,
        'operator' => null,
        'roleId' => 'int32',
        'access' => 'int32',
        'createdAt' => 'DateTime',
        'updatedAt' => 'DateTime'
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
        'applicantName' => 'applicant_name',
        'applicant' => 'applicant',
        'inviter' => 'inviter',
        'remark' => 'remark',
        'needCheck' => 'need_check',
        'state' => 'state',
        'operator' => 'operator',
        'roleId' => 'role_id',
        'access' => 'access',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'applicantName' => 'setApplicantName',
        'applicant' => 'setApplicant',
        'inviter' => 'setInviter',
        'remark' => 'setRemark',
        'needCheck' => 'setNeedCheck',
        'state' => 'setState',
        'operator' => 'setOperator',
        'roleId' => 'setRoleId',
        'access' => 'setAccess',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'applicantName' => 'getApplicantName',
        'applicant' => 'getApplicant',
        'inviter' => 'getInviter',
        'remark' => 'getRemark',
        'needCheck' => 'getNeedCheck',
        'state' => 'getState',
        'operator' => 'getOperator',
        'roleId' => 'getRoleId',
        'access' => 'getAccess',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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
        $this->container['applicantName'] = isset($data['applicantName']) ? $data['applicantName'] : null;
        $this->container['applicant'] = isset($data['applicant']) ? $data['applicant'] : null;
        $this->container['inviter'] = isset($data['inviter']) ? $data['inviter'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['needCheck'] = isset($data['needCheck']) ? $data['needCheck'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['access'] = isset($data['access']) ? $data['access'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
     * @param int $id 成员申请的 id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets applicantName
     *
     * @return string
     */
    public function getApplicantName()
    {
        return $this->container['applicantName'];
    }

    /**
     * Sets applicantName
     *
     * @param string $applicantName 成员申请时的名称
     *
     * @return $this
     */
    public function setApplicantName($applicantName)
    {
        $this->container['applicantName'] = $applicantName;

        return $this;
    }

    /**
     * Gets applicant
     *
     * @return \GiteeEnterprise\Model\UserWithRemark
     */
    public function getApplicant()
    {
        return $this->container['applicant'];
    }

    /**
     * Sets applicant
     *
     * @param \GiteeEnterprise\Model\UserWithRemark $applicant 申请时的名称
     *
     * @return $this
     */
    public function setApplicant($applicant)
    {
        $this->container['applicant'] = $applicant;

        return $this;
    }

    /**
     * Gets inviter
     *
     * @return \GiteeEnterprise\Model\UserWithRemark
     */
    public function getInviter()
    {
        return $this->container['inviter'];
    }

    /**
     * Sets inviter
     *
     * @param \GiteeEnterprise\Model\UserWithRemark $inviter 邀请者信息
     *
     * @return $this
     */
    public function setInviter($inviter)
    {
        $this->container['inviter'] = $inviter;

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
     * @param string $remark 申请时的备注
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets needCheck
     *
     * @return string
     */
    public function getNeedCheck()
    {
        return $this->container['needCheck'];
    }

    /**
     * Sets needCheck
     *
     * @param string $needCheck 是否需要审核
     *
     * @return $this
     */
    public function setNeedCheck($needCheck)
    {
        $this->container['needCheck'] = $needCheck;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state 审核的状态。申请中：pending; 审核通过: approved; 已过期: overdue; 已拒绝: refused; 接收邀请链接：invite_pass
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator 操作者
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets roleId
     *
     * @return int
     */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
     * Sets roleId
     *
     * @param int $roleId 角色 ID
     *
     * @return $this
     */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;

        return $this;
    }

    /**
     * Gets access
     *
     * @return int
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param int $access 权限属性
     *
     * @return $this
     */
    public function setAccess($access)
    {
        $this->container['access'] = $access;

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
     * @param string $createdAt 创建时间/申请时间
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


