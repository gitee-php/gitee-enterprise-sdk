# IssueMain

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 任务 ID | [optional] 
**rootId** | **int** | 根结点 ID | [optional] 
**ident** | **string** | 任务全局唯一标识符 | [optional] 
**title** | **string** | 任务标题 | [optional] 
**state** | **string** | 任务状态标识符: open, progressing, closed, rejected | [optional] 
**commentsCount** | **int** | 评论数量 | [optional] 
**priority** | **int** | 优先级标识符 | [optional] 
**priorityHuman** | **string** | 优先级中文名称 | [optional] 
**assignee** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 任务负责人 | [optional] 
**duration** | **int** | 预计工时。（单位：分钟） | [optional] 
**createdAt** | **string** | 任务创建时间 | [optional] 
**updatedAt** | **string** | 任务更新时间 | [optional] 
**finishedAt** | **string** | 任务完成时间 | [optional] 
**planStartedAt** | **string** | 计划开始时间 | [optional] 
**deadline** | **string** | 截止时间 | [optional] 
**isOverdue** | **bool** | 是否过期 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


