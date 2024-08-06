# RevertedPullRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | PR 的 id | [optional] 
**iid** | **int** | 仓库内唯一的 PR id 标识符 | [optional] 
**title** | **string** | PR 的标题 | [optional] 
**projectId** | **int** | 仓库 id | [optional] 
**state** | **string** | PR 的状态(opened: 开启; reopened: 关闭后重开; closed: 关闭; merged: 已合并;) | [optional] 
**draft** | **bool** | PR 草稿状态： 草稿 - true, 非草稿 - false | [optional] 
**checkState** | **int** | PR的审查状态(0: 不需要审查; 1: 待审查; 2: 审查已全部通过;) | [optional] 
**testState** | **int** | PR的测试状态(0: 不需要测试; 1: 待测试; 2: 测试已全部通过;) | [optional] 
**priority** | **string** | PR 的优先级。 | [optional] 
**priorityHuman** | **string** | PR 优先级标签名称 | [optional] 
**lightweight** | **bool** | 是否轻量级 PR | [optional] 
**createdAt** | **string** | PR 的创建时间 | [optional] 
**updatedAt** | **string** | PR 的更新时间 | [optional] 
**mergedAt** | **string** | PR 的合并时间 | [optional] 
**project** | [**\GiteeEnterprise\Model\Project**](Project.md) | 所属仓库 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


