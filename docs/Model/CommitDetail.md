# CommitDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Commit ID | [optional] 
**shortId** | **string** | Commit Short ID | [optional] 
**title** | **string** | Commit Title | [optional] 
**titleHtml** | **string** | Commit Html Title | [optional] 
**description** | **string** | Commit Description | [optional] 
**descriptionHtml** | **string** | Commit Html Description | [optional] 
**message** | **string** | Commit Message | [optional] 
**completeTitle** | **string** | Complete Commit Title | [optional] 
**completeTitleHtml** | **string** | Complete Commit Title Html | [optional] 
**messageHtml** | **string** | Commit Html Message | [optional] 
**author** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | Commit 作者 | [optional] 
**committer** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | Commit 提交人 | [optional] 
**authoredDate** | [**\DateTime**](https://www.php.net/class.datetime) | 推送时间 | [optional] 
**committedDate** | [**\DateTime**](https://www.php.net/class.datetime) | 提交时间 | [optional] 
**signature** | [**\GiteeEnterprise\Model\CommitSignature**](CommitSignature.md) | 签名 | [optional] 
**buildState** | **object** | Gitee Go构建状态 | [optional] 
**parents** | [**null[]**](.md) | 父节点 | [optional] 
**diffFilesSize** | **int** | diff 文件大小 | [optional] 
**limitDiffFilesSize** | **int** | 可渲染的diff文件大小 | [optional] 
**isOverflow** | **bool** | diff大小是否超出限制 | [optional] 
**isChangeToLarge** | **bool** | diff是否过大 | [optional] 
**addedLines** | **int** | 新增行数 | [optional] 
**removedLines** | **int** | 删除行数 | [optional] 
**diffs** | [**\GiteeEnterprise\Model\Diff**](Diff.md) | 文件diff | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


