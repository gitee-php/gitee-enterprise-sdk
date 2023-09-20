# EnterpriseRoleDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 角色 id | [optional] 
**name** | **string** | 角色名称 | [optional] 
**description** | **string** | 角色备注信息 | [optional] 
**isSystemDefault** | **bool** | 是否系统默认角色 | [optional] 
**ident** | **string** | 角色类型标识符 | [optional] 
**isDefault** | **bool** | 是否企业默认角色 | [optional] 
**weekReport** | [**\GiteeEnterprise\Model\WeekReport**](WeekReport.md) | 周报的权限属性 | [optional] 
**issue** | [**\GiteeEnterprise\Model\Issue**](Issue.md) | 任务的权限属性 | [optional] 
**program** | [**\GiteeEnterprise\Model\Program**](Program.md) | 项目的权限属性 | [optional] 
**project** | [**\GiteeEnterprise\Model\Project**](Project.md) | 仓库的权限属性 | [optional] 
**projectGroup** | [**\GiteeEnterprise\Model\ProjectGroup**](ProjectGroup.md) | 仓库组的权限属性 | [optional] 
**doc** | [**\GiteeEnterprise\Model\Doc**](Doc.md) | 文档的权限属性 | [optional] 
**member** | [**\GiteeEnterprise\Model\Member**](Member.md) | 文档的权限属性 | [optional] 
**statistic** | [**\GiteeEnterprise\Model\Statistic**](Statistic.md) | 统计的权限属性 | [optional] 
**isAdmin** | **bool** | 是否是企业管理员角色 | [optional] 
**testPlan** | [**\GiteeEnterprise\Model\TestPlan**](TestPlan.md) | 测试用例计划权限属性 | [optional] 
**testRepository** | [**\GiteeEnterprise\Model\TestRepository**](TestRepository.md) | 测试用例库权限属性 | [optional] 
**giteegoPipeline** | [**\GiteeEnterprise\Model\GiteegoPipeline**](GiteegoPipeline.md) | Gitee Go 流水线 | [optional] 
**adminRules** | **string** |  | [optional] 
**access** | **object** | 能否访问企业 | [optional] 
**createdAt** | **string** | 角色创建时间 | [optional] 
**updatedAt** | **string** | 角色更新时间 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


