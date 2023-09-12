# TreeNote

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 评论的 id | [optional] 
**type** | **string** | 评论类型 | [optional] 
**author** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 评论发起人 | [optional] 
**content** | **string** | 评论内容(markdown 格式) | [optional] 
**contentHtml** | **string** | 评论内容(html 格式) | [optional] 
**ancestry** | **string** | 祖先层级 | [optional] 
**head** | **string** | 是否最外层评论 | [optional] 
**parent** | **string** | 是否父级评论 | [optional] 
**reactions** | [**\GiteeEnterprise\Model\Reaction**](Reaction.md) | 表态 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


