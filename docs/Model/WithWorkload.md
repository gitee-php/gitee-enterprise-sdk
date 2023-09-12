# WithWorkload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 任务 ID | [optional] 
**rootId** | **int** | 根结点 ID | [optional] 
**parentId** | **int** | 父任务 ID | [optional] 
**projectId** | **int** | 关联项目 ID | [optional] 
**ident** | **string** | 任务全局唯一标识符 | [optional] 
**title** | **string** | 任务标题 | [optional] 
**issueStateId** | **int** | 任务状态id | [optional] 
**programId** | **int** | 项目id | [optional] 
**state** | **string** | 任务状态标识符: open, progressing, closed, rejected | [optional] 
**commentsCount** | **int** | 评论数量 | [optional] 
**priority** | **int** | 优先级标识符 | [optional] 
**branch** | **string** | 关联的分支名 | [optional] 
**priorityHuman** | **string** | 优先级中文名称 | [optional] 
**duration** | **int** | 预计工时。（单位：分钟） | [optional] 
**collaborators** | [**\GiteeEnterprise\Model\UserWithRemark[]**](UserWithRemark.md) | 任务协作者 | [optional] 
**author** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 任务创建者 | [optional] 
**milestone** | [**\GiteeEnterprise\Model\Milestone**](Milestone.md) | 里程碑 | [optional] 
**issueState** | [**\GiteeEnterprise\Model\IssueState**](IssueState.md) | 任务状态 | [optional] 
**issueType** | [**\GiteeEnterprise\Model\IssueType**](IssueType.md) | 任务类型 | [optional] 
**labels** | [**\GiteeEnterprise\Model\Label**](Label.md) | 任务关联的标签 | [optional] 
**securityHole** | **bool** | 是否是私有Issue | [optional] 
**isStar** | **bool** | 是否星标任务 | [optional] 
**scrumSprint** | [**\GiteeEnterprise\Model\ScrumSprint**](ScrumSprint.md) | 关联迭代 | [optional] 
**estimatedDuration** | **float** | 预计工时，单位小时 | [optional] 
**registeredDuration** | **float** | 登记工时，单位小时 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


