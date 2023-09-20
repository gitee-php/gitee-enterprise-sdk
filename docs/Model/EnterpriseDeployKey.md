# EnterpriseDeployKey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 部署公钥 id | [optional] 
**title** | **string** | 部署公钥 title | [optional] 
**key** | **string** | 部署公钥内容 | [optional] 
**sha256Fingerprint** | **string** | sha256 指纹 | [optional] 
**user** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 公钥的创建者 | [optional] 
**projectsCount** | **int** | 已部署仓库数量 | [optional] 
**projects** | [**\GiteeEnterprise\Model\Project**](Project.md) | 已部署的仓库 | [optional] 
**system** | **bool** | 是否是系统公钥 | [optional] 
**isBae** | **bool** | 是否是bae公钥 | [optional] 
**isPages** | **bool** | 是否是pages公钥 | [optional] 
**createdAt** | **string** | 创建时间 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


