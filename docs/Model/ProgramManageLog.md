# ProgramManageLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID | [optional] 
**userId** | **int** | 用户ID | [optional] 
**user** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 操作用户 | [optional] 
**ip** | **string** | ip | [optional] 
**targetId** | **int** | 目标操作对象ID | [optional] 
**createdAt** | **string** | 创建时间 | [optional] 
**updatedAt** | **string** | 更新时间 | [optional] 
**title** | **string** | 操作原始记录 | [optional] 
**targetProgram** | [**\GiteeEnterprise\Model\Program**](Program.md) | 目标项目，如果是null，表示已删除 | [optional] 
**operating** | **string** | 操作 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


