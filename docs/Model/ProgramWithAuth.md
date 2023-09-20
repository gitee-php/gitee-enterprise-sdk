# ProgramWithAuth

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 项目 id | [optional] 
**ident** | **string** | 项目编号 | [optional] 
**name** | **string** | 项目名称 | [optional] 
**description** | **string** | 项目描述 | [optional] 
**status** | **int** | 项目状态（0:开始 1:暂停 2:关闭） | [optional] 
**outsourced** | **bool** | 是否外包项目 | [optional] 
**type** | **string** | 项目类型（内部、外包） | [optional] 
**createdAt** | **string** | 创建时间 | [optional] 
**color** | **string** | 颜色 | [optional] 
**category** | **string** | 项目类型 | [optional] 
**programExtraFields** | [**\GiteeEnterprise\Model\ProgramExtraField**](ProgramExtraField.md) | 项目自定义字段值 | [optional] 
**assignee** | [**\GiteeEnterprise\Model\UserWithRemark**](UserWithRemark.md) | 负责人 | [optional] 
**isTopped** | **bool** | 是否置顶项目 | [optional] 
**changeCategoryStatus** | **string** | 项目切换类型状态 | [optional] 
**issueModule** | **string** | 工作项模式 | [optional] 
**components** | [**\GiteeEnterprise\Model\ProgramComponent[]**](ProgramComponent.md) | 项目组件列表 | [optional] 
**canQuit** | **bool** | 能否编辑退出 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


