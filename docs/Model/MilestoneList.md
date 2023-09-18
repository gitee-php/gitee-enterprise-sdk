# MilestoneList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 里程碑 ID | [optional] 
**title** | **string** | 里程碑标题名称 | [optional] 
**state** | **string** | 里程碑状态 | [optional] 
**startDate** | [**\DateTime**](https://www.php.net/class.datetime) | 里程碑起始日期 | [optional] 
**dueDate** | [**\DateTime**](https://www.php.net/class.datetime) | 里程碑结束日期 | [optional] 
**createdAt** | **string** | 任务标签创建时间 | [optional] 
**updatedAt** | **string** | 任务标签更新时间 | [optional] 
**programId** | **int** | 里程碑所属项目 ID | [optional] 
**description** | **string** | 描述 | [optional] 
**descriptionHtml** | **string** | 描述(html格式) | [optional] 
**assignee** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 里程碑负责人 | [optional] 
**author** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 里程碑创建者 | [optional] 
**issueAllCount** | **int** | 里程碑issues数量 | [optional] 
**issueCompleteCount** | **int** | 里程碑完成issue数量 | [optional] 
**prAllCount** | **int** | 里程碑pr数量 | [optional] 
**prCompleteCount** | **int** | 里程碑完成pr数量 | [optional] 
**projects** | [**\GiteeEnterprise\Model\Project**](Project.md) | 里程碑关联仓库 | [optional] 
**program** | [**\GiteeEnterprise\Model\Program**](Program.md) | 里程碑关联项目 | [optional] 
**top** | **bool** | 是否置顶 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


