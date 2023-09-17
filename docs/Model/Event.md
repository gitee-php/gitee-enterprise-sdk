# Event

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 动态id | [optional] 
**targetType** | **string** |  | [optional] 
**ident** | **string** | 动态标识 | [optional] 
**isProper** | **bool** | 是否合规 | [optional] 
**createdAt** | **string** | 动态产生的时间 | [optional] 
**action** | **string** | 动作 | [optional] 
**actionHumanName** | **string** | 动作名称 | [optional] 
**author** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 产生动态的成员 | [optional] 
**inProject** | **bool** | 是否在仓库 | [optional] 
**inEnterprise** | **bool** | 是否在企业 | [optional] 
**project** | [**\GiteeEnterprise\Model\Project**](Project.md) | 仓库 | [optional] 
**enterprise** | **string** | 企业 | [optional] 
**throughType** | **string** | 动态来源对象类型 | [optional] 
**through** | **object** | 动态来源对象类型 | [optional] 
**payload** | **object** | 不同类型动态的内容 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


