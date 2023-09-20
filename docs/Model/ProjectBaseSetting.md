# ProjectBaseSetting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 仓库ID | [optional] 
**name** | **string** | 仓库名称 | [optional] 
**path** | **string** | 仓库路径 | [optional] 
**pathWithNamespace** | **string** | namespace/path | [optional] 
**public** | **string** | 仓库开源属性，0:私有，1:开源，2:内部开源 | [optional] 
**createdAt** | **string** | 仓库创建时间 | [optional] 
**updatedAt** | **string** | 仓库更新时间 | [optional] 
**isGvp** | **bool** | 是否为GVP仓库 | [optional] 
**forkEnabled** | **bool** | 是否允许仓库被Fork | [optional] 
**nameWithNamespace** | **string** | namespace_name/path | [optional] 
**description** | **string** | 仓库介绍 | [optional] 
**homepage** | **string** | 仓库主页 | [optional] 
**langId** | **string** | 仓库语言 | [optional] 
**status** | **string** | 仓库状态(已关闭/开发中/已完结/维护中) | [optional] 
**defaultBranch** | **string** | 默认分支 | [optional] 
**outsourced** | **bool** | 仓库类型，0内部，1外包 | [optional] 
**creator** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 仓库负责人 | [optional] 
**programs** | [**\GiteeEnterprise\Model\Program**](Program.md) |  | [optional] 
**canComment** | **bool** | 允许用户对仓库进行评论 | [optional] 
**issueComment** | **bool** | 允许用户对\&quot;关闭\&quot;状态的Issues进行评论 | [optional] 
**issuesEnabled** | **bool** | 轻量级的issue跟踪系统 | [optional] 
**securityHoleEnabled** | **bool** | 允许用户创建涉及敏感信息的Issue，提交后不公开此Issue（可见范围：仓库成员、企业成员） | [optional] 
**onlineEditEnabled** | **bool** | 是否允许仓库文件在线编辑 | [optional] 
**pullRequestsEnabled** | **bool** | 接受pull request，协作开发 | [optional] 
**wikiEnabled** | **bool** | 可以编写文档 | [optional] 
**lightweightPrEnabled** | **bool** | 接受轻量级 Pull Request（用户可以发起轻量级 Pull Request 而无需 Fork 仓库） | [optional] 
**prMasterOnly** | **bool** | 开启的Pull Request，仅管理员、审查者、测试者可见 | [optional] 
**forbidForcePush** | **bool** | 禁止强制推送 | [optional] 
**importUrl** | **bool** | 仓库远程地址(用于强制同步) | [optional] 
**forbidForceSync** | **bool** | 禁止仓库同步(禁止从仓库远程地址或Fork的源仓库强制同步代码，禁止后将关闭同步按钮) | [optional] 
**svnEnabled** | **bool** | 使用SVN管理您的仓库 | [optional] 
**canReadonly** | **bool** | 开启文件/文件夹只读功能(只读文件和SVN支持无法同时启用) | [optional] 
**enterpriseForbidsSvn** | **bool** | 企业是否禁用SVN | [optional] 
**parent** | [**\GiteeEnterprise\Model\Project**](Project.md) |  | [optional] 
**templateEnabled** | **bool** | 是否为模板仓库 | [optional] 
**giteeGoEnabled** | **bool** | 仓库是启用了GiteeGo | [optional] 
**programPipelineEnabled** | **bool** | 是否支持项目级流水线 | [optional] 
**isEmptyRepo** | **bool** | 是否为空仓库 | [optional] 
**visible** | **bool** | 仓库可见性 | [optional] 
**reviewing** | **bool** | 仓库审查状态 | [optional] 
**mergeEnabled** | **bool** | 是否开启 merge 合并选项 | [optional] 
**squashEnabled** | **bool** | 是否开启 squash 合并选项 | [optional] 
**rebaseEnabled** | **bool** | 是否开启 rebase 合并选项 | [optional] 
**defaultMergeMethod** | **string** | 选择默认合并 Pull Request 的方法，0表示merge（合并所有提交）、1表示squash（扁平化分支合并）和2表示rebase（变基并合并）。默认为0merge | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


