# WeekReportNote

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 评论的 id | [optional] 
**type** | **string** | 评论类型 | [optional] 
**author** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 评论发起人 | [optional] 
**content** | **string** | 评论内容(markdown 格式) | [optional] 
**contentHtml** | **string** | 评论内容(html 格式) | [optional] 
**reactions** | [**\GiteeEnterprise\Model\Reaction**](Reaction.md) | 表态 | [optional] 
**operating** | **object** | 评论编辑、删除权限 | [optional] 
**createdAt** | **string** | 创建时间 | [optional] 
**updatedAt** | **string** | 更新时间 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


