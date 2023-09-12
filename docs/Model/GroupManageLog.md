# GroupManageLog

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID | [optional] 
**userId** | **int** | 用户ID | [optional] 
**user** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 操作用户 | [optional] 
**ip** | **string** | ip | [optional] 
**targetId** | **int** | 目标操作对象ID | [optional] 
**title** | **string** | 操作原始记录 | [optional] 
**targetGroup** | [**\GiteeEnterprise\Model\Group**](Group.md) | 目标团队,如果是null，表示已删除 | [optional] 
**operating** | **string** | 操作 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


