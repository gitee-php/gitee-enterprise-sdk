# Enterprise

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 企业 id | [optional] 
**name** | **string** | 企业名称 | [optional] 
**path** | **string** | 企业路径 | [optional] 
**description** | **string** | 企业简介 | [optional] 
**public** | **string** | 企业类型(0: 未公开 1: 公开) | [optional] 
**website** | **string** | 企业官网 | [optional] 
**email** | **string** | 企业邮箱 | [optional] 
**phone** | **string** | 企业手机号码 | [optional] 
**avatarUrl** | **string** | 企业头像 | [optional] 
**level** | **int** | 企业套餐所属级别 | [optional] 
**title** | **string** | 企业套餐名称 | [optional] 
**owner** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 企业拥有者 | [optional] 
**notice** | **string** | 企业公告 | [optional] 
**welcomeMessage** | **string** | 企业欢迎私信内容 | [optional] 
**forceVerify** | **bool** | 是否开启强制审核 | [optional] 
**defaultRoleId** | **int** | 企业默认角色ID | [optional] 
**openApplication** | **int** | 是否允许外部成员申请加入 | [optional] 
**version** | **int** |  | [optional] 
**startAt** | **string** | 套餐开始时间 | [optional] 
**stopAt** | **string** | 套餐结束时间（免费版企业为空） | [optional] 
**overdue** | **bool** | 是否过期企业 | [optional] 
**charged** | **bool** | 是否付费企业 | [optional] 
**createdAt** | **string** | 企业创建时间 | [optional] 
**updatedAt** | **string** | 上次信息变更时间 | [optional] 
**watermark** | **bool** | 是否开启水印 | [optional] 
**giteeSearchStatus** | **string** | 是否开启 Gitee Search, not_open、opening、success、failed | [optional] 
**hasHedgeOrder** | **bool** | 是否拥有对冲订单 | [optional] 
**ldapEnabled** | **bool** | [Premium] 是否开启 Ldap | [optional] 
**registerEnabled** | **bool** | [Premium] 是否开启用户注册 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


