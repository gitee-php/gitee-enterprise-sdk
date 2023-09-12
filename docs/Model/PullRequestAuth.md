# PullRequestAuth

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**read** | **bool** | 是否可查看此 PR | [optional] 
**createNote** | **bool** | 是否可评论此 PR | [optional] 
**update** | **bool** | 是否可更新 PR 的信息 | [optional] 
**mergeStatusCheck** | **bool** | PR 当前的状态是否处于可合并 | [optional] 
**canCheck** | **bool** | 授权用户是否可以让此 PR 审查通过 | [optional] 
**canTest** | **bool** | 授权用户是否可以让此 PR 测试通过 | [optional] 
**canMerge** | **bool** | 授权用户是否有权限可以合并此 PR | [optional] 
**forceChecked** | **bool** | 授权用户是否可把 PR 的审查状态强制设置为已通过 | [optional] 
**forceTested** | **bool** | 授权用户是否可把 PR 的测试状态强制设置为已通过 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


