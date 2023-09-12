# ProjectAccessLog

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | id | [optional] 
**uuid** | **string** | uuid | [optional] 
**user** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 操作用户，如果user是null，表示已删除 | [optional] 
**ip** | **string** | ip | [optional] 
**ipFilter** | **string** | 过滤后IP | [optional] 
**statType** | **string** | 操作: {0&#x3D;&gt;\&quot;HTTP_ACCESS\&quot;, 1&#x3D;&gt;\&quot;SSH_PULL\&quot;, 2&#x3D;&gt;\&quot;SVN_PULL\&quot;, 3&#x3D;&gt;\&quot;HTTP_PULL\&quot;, 4&#x3D;&gt;\&quot;SSH_PUSH\&quot;, 5&#x3D;&gt;\&quot;SVN_PUSH\&quot;, 6&#x3D;&gt;\&quot;HTTP_PUSH\&quot;, 7&#x3D;&gt;\&quot;DOWNLOAD_ZIP\&quot;} | [optional] 
**statTypeCn** | **string** | 操作 | [optional] 
**project** | [**\GiteeEnterprise\Model\Project**](Project.md) | 仓库，如果project是null，表示已删除 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


