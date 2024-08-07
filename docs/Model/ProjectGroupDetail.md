# ProjectGroupDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 仓库组 id | [optional] 
**completeName** | **string** | 仓库组完整名称 | [optional] 
**completePath** | **string** | 仓库组完整路径 | [optional] 
**name** | **string** | 仓库组名称 | [optional] 
**parentId** | **int** | 仓库组上级id | [optional] 
**path** | **string** | 仓库组路径 | [optional] 
**description** | **string** | 仓库组简介 | [optional] 
**createdAt** | **string** | 创建时间 | [optional] 
**updatedAt** | **string** | 更新时间 | [optional] 
**isExtra** | **bool** | 是否为断层仓库组 | [optional] 
**isLeaf** | **bool** | 是否为叶子节点 | [optional] 
**owner** | [**\GiteeEnterprise\Model\User**](User.md) | 负责人 | [optional] 
**root** | [**\GiteeEnterprise\Model\ProjectGroupRoot**](ProjectGroupRoot.md) | 归属团队 | [optional] 
**memberCount** | **int** | 成员数量 | [optional] 
**projectCount** | **int** | 项目数量 | [optional] 
**creator** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 创建者 | [optional] 
**parent** | [**\GiteeEnterprise\Model\ModelNamespace**](ModelNamespace.md) | 父级 namespace | [optional] 
**completeNameWithoutNamespace** | **string** | 不包含归属名称的全名称 | [optional] 
**subGroupCount** | **int** | 子组数量 | [optional] 
**hasChildren** | **bool** | 是否包含子组 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


