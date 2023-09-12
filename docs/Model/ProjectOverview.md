# ProjectOverview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 仓库id | [optional] 
**name** | **string** | 仓库名称 | [optional] 
**path** | **string** | 仓库个性域名 | [optional] 
**pathWithNamespace** | **string** | 仓库namespace_path/path | [optional] 
**description** | **string** | 仓库描述 | [optional] 
**license** | **string** | 仓库许可证 | [optional] 
**lang** | [**\GiteeEnterprise\Model\ProjectTagBase**](ProjectTagBase.md) | 仓库语言 | [optional] 
**cloneWays** | [**\GiteeEnterprise\Model\ProjectCloneWaysBase**](ProjectCloneWaysBase.md) | 仓库克隆方式 | [optional] 
**openIssueCount** | **int** | 仓库内开启的issue数量 | [optional] 
**notFinishedIssueCount** | **int** | 仓库内未完成的issue数量 | [optional] 
**closeIssueCount** | **int** | 仓库内已完成的issue数量 | [optional] 
**totalPrCount** | **int** | 仓库内pull request数量 | [optional] 
**repoSize** | **int** | 仓库大小 | [optional] 
**wikiCount** | **int** | 仓库wiki数量 | [optional] 
**attchmentCount** | **int** | 仓库附件数量 | [optional] 
**membersCount** | **int** | 仓库成员数量 | [optional] 
**repoSizeRefresh** | **object** | 刷新仓库 | [optional] 
**namespace** | [**\GiteeEnterprise\Model\ModelNamespace**](ModelNamespace.md) | 仓库挂载的空间 | [optional] 
**defaultBranch** | **string** | 仓库默认分支 | [optional] 
**homepage** | **string** | 仓库主页地址 | [optional] 
**isWaitFork** | **bool** | 仓库后台处理中 | [optional] 
**template** | [**\GiteeEnterprise\Model\Project**](Project.md) |  | [optional] 
**canExecGiteeScan** | **bool** | 是否可以执行scan扫描 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


