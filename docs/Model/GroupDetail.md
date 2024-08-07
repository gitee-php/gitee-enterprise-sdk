# GroupDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 团队 id | [optional] 
**name** | **string** | 团队名称 | [optional] 
**path** | **string** | 团队路径 | [optional] 
**avatarUrl** | **string** | 团队头像 | [optional] 
**description** | **string** | 团队描述 | [optional] 
**groupType** | **int** | deprecated.团队的类型值。0: 内部 1:公开 2:外包 | [optional] 
**groupTypeHumanName** | **string** | 团队的类型名称 | [optional] 
**public** | **int** | 团队的类型值。0: 内部 1:公开 2:外包 | [optional] 
**creator** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 创建者 | [optional] 
**createdAt** | **string** | 创建时间 | [optional] 
**updatedAt** | **string** | 更新时间 | [optional] 
**membersCount** | **int** | 参与团队的成员数 | [optional] 
**canEdit** | **bool** | 能否编辑 | [optional] 
**relateProgramCount** | **int** | 关联项目数量 | [optional] 
**relateProjectCount** | **int** | 关联仓库数量 | [optional] 
**subGroupCount** | **int** | 子组数量 | [optional] 
**projectCount** | **int** | 项目数量 | [optional] 
**hasChildren** | **bool** | 是否包含子组 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


