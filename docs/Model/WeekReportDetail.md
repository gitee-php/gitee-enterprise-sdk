# WeekReportDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 周报的 id | [optional] 
**year** | **int** | 周报所属年 | [optional] 
**month** | **int** | 周报所属月份 | [optional] 
**weekIndex** | **int** | 处于本年的第几周 | [optional] 
**user** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 周报所属用户 | [optional] 
**content** | **string** | 周报内容 | [optional] 
**contentHtml** | **string** | 周报内容 | [optional] 
**issues** | [**\GiteeEnterprise\Model\IssueMain**](IssueMain.md) | 关联issues | [optional] 
**pullRequests** | [**\GiteeEnterprise\Model\PullRequest**](PullRequest.md) | 关联pull request | [optional] 
**events** | [**\GiteeEnterprise\Model\Event**](Event.md) | 关联动态 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


