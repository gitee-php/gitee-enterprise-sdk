# PullRequest

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
**labels** | [**\GiteeEnterprise\Model\Label[]**](Label.md) | PR 的标签列表 | [optional] 
**author** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | PR 创建者 | [optional] 
**conflict** | **bool** | 是否存在冲突 | [optional] 
**project** | [**\GiteeEnterprise\Model\Project**](Project.md) | 所属仓库 | [optional] 
**sourceBranch** | **object** | 源分支 | [optional] 
**targetBranch** | **object** | 目标分支 | [optional] 
**canMerge** | **string** | 是否可合并 | [optional] 
**assignees** | [**\GiteeEnterprise\Model\PrAssign**](PrAssign.md) | 审查人员 | [optional] 
**prAssignNum** | **int** | 最少审查人数 | [optional] 
**testers** | [**\GiteeEnterprise\Model\PrAssign**](PrAssign.md) | 测试人员 | [optional] 
**closeRelatedIssue** | **int** | 合并 PR 后关闭关联的任务 | [optional] 
**pruneBranch** | **int** | 合并 PR 后删除关联分支 | [optional] 
**prTestNum** | **int** | 最少测试人数 | [optional] 
**latestScanTask** | **object** | 最后一次gitee scan扫描结果 | [optional] 
**giteeGoEnabled** | **bool** | 所属仓库GiteeGo服务是否可用 | [optional] 
**scanStatus** | **int** | scan任务状态：0 等待中、1 执行中、2 已取消、3 成功、4 失败、5 构建中、6 超时 | [optional] 
**scanStatusDesc** | **int** | scan返回门禁相关的描述 | [optional] 
**scanFlag** | **int** | 质量门禁标志：1 通过 2 不通过 | [optional] 
**reviewStrategy** | **string** | 评审策略 | [optional] 
**reviewScore** | **int** | pr可以合入的最少审查得分 | [optional] 
**currentReviewScore** | **int** | pr当前审查得分 | [optional] 
**revertedPr** | [**\GiteeEnterprise\Model\RevertedPullRequest**](RevertedPullRequest.md) | 被回退的pr | [optional] 
**commitReviewPass** | **bool** | pr是否通过commit review | [optional] 
**commitReviewDetail** | **object** | pr的commit review详情 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


