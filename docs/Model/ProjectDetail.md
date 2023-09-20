# ProjectDetail

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
**isFork** | **bool** | 是否是fork仓库 | [optional] 
**parentProject** | [**\GiteeEnterprise\Model\Project**](Project.md) | 父级仓库 | [optional] 
**status** | **int** | 状态值 | [optional] 
**statusName** | **string** | 状态中文名称 | [optional] 
**outsourced** | **bool** | 是否外包 | [optional] 
**repoSize** | **int** | 仓库大小 | [optional] 
**canAdminProject** | **bool** | 能否操作当前仓库 | [optional] 
**membersCount** | **int** | 成员数 | [optional] 
**lastPushAt** | **string** | 最近push | [optional] 
**watchesCount** | **int** | watches数 | [optional] 
**starsCount** | **int** | stars数 | [optional] 
**forkedCount** | **int** | 被fork数 | [optional] 
**enableBackup** | **bool** | 是否开启备份 | [optional] 
**hasBackups** | **bool** | 是否有备份 | [optional] 
**vip** | **bool** | 是否vip | [optional] 
**recomm** | **bool** | 是否推荐 | [optional] 
**template** | [**\GiteeEnterprise\Model\Project**](Project.md) |  | [optional] 
**templateEnabled** | **bool** | 是否为模板仓库 | [optional] 
**description** | **string** | 仓库描述 | [optional] 
**getDefaultBranch** | **string** | 默认分支 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


