# ProjectPushConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**restrictPushOwnCommit** | **bool** | 启用只能推送自己的提交（所推送提交中的邮箱必须与推送者所设置的提交邮箱一致） | [optional] 
**restrictAuthorEmailSuffix** | **bool** | 启用只允许指定邮箱域名后缀的提交 | [optional] 
**authorEmailSuffix** | **string** | 指定邮箱域名的后缀 | [optional] 
**restrictCommitMessage** | **bool** | 启用提交信息正则表达式校验 | [optional] 
**commitMessageRegex** | **string** | 用于验证提交信息的正则表达式 | [optional] 
**restrictFileSize** | **bool** | 启用限制单文件大小 | [optional] 
**maxFileSize** | **int** | 限制单文件大小（MB） | [optional] 
**restrictBranch** | **bool** | 启用分支限制 | [optional] 
**restrictSubmissionUsername** | **bool** | 是否要求推送提交中的author名称必须与推送者的用户名一致:true：是，false: 否 | [optional] 
**restrictBranchCreate** | **bool** | 是否开启分支创建限制 | [optional] 
**restrictBranchDelete** | **bool** | 是否开启分支删除限制 | [optional] 
**branchCreateAllowed** | **null[]** | 允许创建分支的用户名列表 | [optional] 
**branchDeleteAllowed** | **null[]** | 允许删除分支的用户名列表 | [optional] 
**branchRules** | **object** | 分支规则 | [optional] 
**exceptManager** | **bool** | 仓库管理员不受上述规则限制 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


