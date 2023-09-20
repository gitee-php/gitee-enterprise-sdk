# CommitNoteDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 评论的 id | [optional] 
**type** | **string** | 评论类型 | [optional] 
**author** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 评论发起人 | [optional] 
**content** | **string** | 评论内容(markdown 格式) | [optional] 
**contentHtml** | **string** | 评论内容(html 格式) | [optional] 
**suggestions** | **null[]** | 代码建议汇集信息{changed: boolean 代码是否不一致, raw: string 建议的code} | [optional] 
**reactions** | [**\GiteeEnterprise\Model\Reaction**](Reaction.md) | 表态 | [optional] 
**operating** | **object** | 评论编辑、删除权限 | [optional] 
**createdAt** | **string** | 创建时间 | [optional] 
**updatedAt** | **string** | 更新时间 | [optional] 
**lineCode** | **string** | 代码行标记 | [optional] 
**diffPositionId** | **int** | 评论引用的代码块 id | [optional] 
**ancestryIds** | **null[]** | 上级评论的ids，上下级关系为树组index顺序 | [optional] 
**outdated** | **bool** | 代码评论是否过期 | [optional] 
**resolved** | **bool** | 代码评论是否解决 | [optional] 
**position** | **object** | 代码评论信息 | [optional] 
**parent** | **object** | 上级评论id,评论人信息 | [optional] 
**resolvedUser** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 评论解决人 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


