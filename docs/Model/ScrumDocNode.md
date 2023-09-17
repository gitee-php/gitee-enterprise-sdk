# ScrumDocNode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | id | [optional] 
**parentId** | **int** | 父层级的 id | [optional] 
**name** | **string** | 名称 | [optional] 
**public** | **string** | 权限值 | [optional] 
**publicName** | **string** | 权限名称 | [optional] 
**filePath** | **string** | 关联文档完整路径 | [optional] 
**program** | [**\GiteeEnterprise\Model\Program**](Program.md) | 关联项目 | [optional] 
**fileType** | **string** | 关联类型。(目录：DocDirectory，文档：WikiInfo，附件：AttachFile) | [optional] 
**fileId** | **string** | 关联类型的 id | [optional] 
**fileVersions** | **bool** | 是否查看附件历史版本 | [optional] 
**creator** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 创建者 | [optional] 
**isFavour** | **bool** | 是否已收藏 | [optional] 
**attachFile** | [**\GiteeEnterprise\Model\DocAttachFile**](DocAttachFile.md) | 附件相关信息 | [optional] 
**isWiki** | **bool** | 是否 wiki | [optional] 
**editorType** | **string** | 编辑器类型 | [optional] 
**needPassword** | **bool** | 需要密码访问 | [optional] 
**isTop** | **bool** | 是否置顶 | [optional] 
**createdAt** | **string** | 创建时间 | [optional] 
**updatedAt** | **string** | 更新时间 | [optional] 
**deletedAt** | **string** | 删除时间 | [optional] 
**scrumSprint** | [**\GiteeEnterprise\Model\ScrumSprint**](ScrumSprint.md) | 文档所属的迭代详情 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


