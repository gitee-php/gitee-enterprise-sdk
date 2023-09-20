# MemberApplication

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 成员申请的 id | [optional] 
**applicantName** | **string** | 成员申请时的名称 | [optional] 
**applicant** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 申请时的名称 | [optional] 
**inviter** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 邀请者信息 | [optional] 
**remark** | **string** | 申请时的备注 | [optional] 
**needCheck** | **string** | 是否需要审核 | [optional] 
**state** | **string** | 审核的状态。申请中：pending; 审核通过: approved; 已过期: overdue; 已拒绝: refused; 接收邀请链接：invite_pass | [optional] 
**operator** | **string** | 操作者 | [optional] 
**roleId** | **int** | 角色 ID | [optional] 
**access** | **int** | 权限属性 | [optional] 
**createdAt** | **string** | 创建时间/申请时间 | [optional] 
**updatedAt** | **string** | 更新时间 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


