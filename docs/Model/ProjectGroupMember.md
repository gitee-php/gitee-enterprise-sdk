# ProjectGroupMember

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | 成员 ID | [optional] 
**userId** | **int** | 用户 ID | [optional] 
**name** | **string** | 用户名 | [optional] 
**nickname** | **string** | 用户昵称 | [optional] 
**username** | **string** | username | [optional] 
**avatarUrl** | **string** | 用户头像链接 | [optional] 
**isMyself** | **bool** | 是否为当前用户 | [optional] 
**isBlocked** | **bool** | 是否被锁定 | [optional] 
**email** | **string** | 用户邮箱 | [optional] 
**accessLevel** | **int** | 角色级别 | [optional] 
**createdAt** | **string** | 加入时间 | [optional] 
**authSource** | **int** | 0: 直接成员 1：顶级仓库组 2：顶级团队 | [optional] 
**accessLevelName** | **string** | 用户在仓库组中的级别名称 | [optional] 
**currentUserIsAdmin** | **bool** | 当前用户是否为仓库组管理员 | [optional] 
**currentUserIsGroupAdmin** | **bool** | 当前用户是否为团队管理员 | [optional] 
**projectGroupOwner** | **bool** | 是否是仓库组拥有者 | [optional] 
**expiredAt** | **string** | 过期时间 | [optional] 
**rootProjectGroup** | [**\GiteeEnterprise\Model\ProjectGroup**](ProjectGroup.md) | 仓库组 | [optional] 
**rootGroup** | [**\GiteeEnterprise\Model\Group**](Group.md) | 继承的团队 | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


