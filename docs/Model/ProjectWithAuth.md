# ProjectWithAuth

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 仓库ID | [optional] 
**name** | **string** | 仓库名称 | [optional] 
**path** | **string** | 仓库路径 | [optional] 
**public** | **int** | 仓库的公开选项。0: 私有; 1: 公开; 2: 内部公开; | [optional] 
**enterpriseId** | **int** | 企业 id | [optional] 
**createdAt** | **string** | 仓库创建时间 | [optional] 
**updatedAt** | **string** | 仓库更新时间 | [optional] 
**securityHoleEnabled** | **bool** | 是否允许用户创建涉及敏感信息的任务 | [optional] 
**namespace** | [**\GiteeEnterprise\Model\ModelNamespace**](ModelNamespace.md) | 仓库挂载的空间 | [optional] 
**creator** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 仓库创建者 | [optional] 
**pathWithNamespace** | **string** | 个人空间地址以及仓库路径 | [optional] 
**nameWithNamespace** | **string** | 个人空间名称以及仓库名称 | [optional] 
**scanCheckRun** | **bool** | 仓库是否开了scan质量门禁 | [optional] 
**canQuit** | **bool** | 能否编辑退出 | [optional] 
**projectAccess** | **int** | 当前成员在该仓库的角色 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


