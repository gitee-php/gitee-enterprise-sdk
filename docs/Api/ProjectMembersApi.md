# GiteeEnterprise\ProjectMembersApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdProjectsProjectIdAuthGroups**](ProjectMembersApi.md#deleteEnterpriseIdProjectsProjectIdAuthGroups) | **DELETE** /{enterprise_id}/projects/{project_id}/auth_groups | 撤销团队授权
[**deleteEnterpriseIdProjectsProjectIdMembersApplyApplyId**](ProjectMembersApi.md#deleteEnterpriseIdProjectsProjectIdMembersApplyApplyId) | **DELETE** /{enterprise_id}/projects/{project_id}/members/apply/{apply_id} | 删除仓库成员申请
[**deleteEnterpriseIdProjectsProjectIdMembersMemberId**](ProjectMembersApi.md#deleteEnterpriseIdProjectsProjectIdMembersMemberId) | **DELETE** /{enterprise_id}/projects/{project_id}/members/{member_id} | 移除仓库成员
[**getEnterpriseIdProjectsProjectIdAuthGroups**](ProjectMembersApi.md#getEnterpriseIdProjectsProjectIdAuthGroups) | **GET** /{enterprise_id}/projects/{project_id}/auth_groups | 获取仓库授权的团队列表
[**getEnterpriseIdProjectsProjectIdMembers**](ProjectMembersApi.md#getEnterpriseIdProjectsProjectIdMembers) | **GET** /{enterprise_id}/projects/{project_id}/members | 仓库成员
[**getEnterpriseIdProjectsProjectIdMembersApplyList**](ProjectMembersApi.md#getEnterpriseIdProjectsProjectIdMembersApplyList) | **GET** /{enterprise_id}/projects/{project_id}/members/apply_list | 仓库成员申请列表
[**getEnterpriseIdProjectsProjectIdMembersOverview**](ProjectMembersApi.md#getEnterpriseIdProjectsProjectIdMembersOverview) | **GET** /{enterprise_id}/projects/{project_id}/members/overview | 成员概览
[**getEnterpriseIdProjectsProjectIdMembersRoles**](ProjectMembersApi.md#getEnterpriseIdProjectsProjectIdMembersRoles) | **GET** /{enterprise_id}/projects/{project_id}/members/roles | 获取仓库角色
[**getEnterpriseIdProjectsProjectIdMembersWithTeamMembers**](ProjectMembersApi.md#getEnterpriseIdProjectsProjectIdMembersWithTeamMembers) | **GET** /{enterprise_id}/projects/{project_id}/members/with_team_members | 获取仓库成员和仓库团队成员
[**postEnterpriseIdProjectsProjectIdMembers**](ProjectMembersApi.md#postEnterpriseIdProjectsProjectIdMembers) | **POST** /{enterprise_id}/projects/{project_id}/members | 添加仓库成员
[**putEnterpriseIdProjectsProjectIdAuthGroups**](ProjectMembersApi.md#putEnterpriseIdProjectsProjectIdAuthGroups) | **PUT** /{enterprise_id}/projects/{project_id}/auth_groups | 调整团队授权
[**putEnterpriseIdProjectsProjectIdMembersMemberId**](ProjectMembersApi.md#putEnterpriseIdProjectsProjectIdMembersMemberId) | **PUT** /{enterprise_id}/projects/{project_id}/members/{member_id} | 修改仓库成员权限


# **deleteEnterpriseIdProjectsProjectIdAuthGroups**
> deleteEnterpriseIdProjectsProjectIdAuthGroups($enterpriseId, $projectId, $groupIds, $accessToken, $qt)

撤销团队授权

撤销团队授权

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$groupIds = "groupIds_example"; // string | 被授权团队的id，多个id用英文逗号分隔
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->deleteEnterpriseIdProjectsProjectIdAuthGroups($enterpriseId, $projectId, $groupIds, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembersApi->deleteEnterpriseIdProjectsProjectIdAuthGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **groupIds** | **string**| 被授权团队的id，多个id用英文逗号分隔 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdProjectsProjectIdMembersApplyApplyId**
> deleteEnterpriseIdProjectsProjectIdMembersApplyApplyId($enterpriseId, $projectId, $applyId, $accessToken, $qt)

删除仓库成员申请

删除仓库成员申请

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$applyId = 56; // int | 成员申请id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->deleteEnterpriseIdProjectsProjectIdMembersApplyApplyId($enterpriseId, $projectId, $applyId, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembersApi->deleteEnterpriseIdProjectsProjectIdMembersApplyApplyId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **applyId** | **int**| 成员申请id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnterpriseIdProjectsProjectIdMembersMemberId**
> deleteEnterpriseIdProjectsProjectIdMembersMemberId($enterpriseId, $projectId, $memberId, $accessToken, $qt)

移除仓库成员

移除仓库成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$memberId = 56; // int | 成员id
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->deleteEnterpriseIdProjectsProjectIdMembersMemberId($enterpriseId, $projectId, $memberId, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembersApi->deleteEnterpriseIdProjectsProjectIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **memberId** | **int**| 成员id |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdAuthGroups**
> getEnterpriseIdProjectsProjectIdAuthGroups($enterpriseId, $projectId, $accessToken, $qt, $page, $perPage, $accessLevel)

获取仓库授权的团队列表

获取仓库授权的团队列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100
$accessLevel = 56; // int | 仓库角色等级

try {
    $apiInstance->getEnterpriseIdProjectsProjectIdAuthGroups($enterpriseId, $projectId, $accessToken, $qt, $page, $perPage, $accessLevel);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembersApi->getEnterpriseIdProjectsProjectIdAuthGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]
 **accessLevel** | **int**| 仓库角色等级 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdMembers**
> \GiteeEnterprise\Model\ProjectMember getEnterpriseIdProjectsProjectIdMembers($enterpriseId, $projectId, $accessToken, $qt, $accessLevel, $scope, $search, $page, $perPage)

仓库成员

仓库成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$accessLevel = "accessLevel_example"; // string | reporter:报告者, viewer:观察者, developer:开发者, master:管理员
$scope = "scope_example"; // string | not_in:获取不在本仓库的企业成员
$search = "search_example"; // string | 成员搜索，邮箱、username、name、remark
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdMembers($enterpriseId, $projectId, $accessToken, $qt, $accessLevel, $scope, $search, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembersApi->getEnterpriseIdProjectsProjectIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **accessLevel** | **string**| reporter:报告者, viewer:观察者, developer:开发者, master:管理员 | [optional]
 **scope** | **string**| not_in:获取不在本仓库的企业成员 | [optional]
 **search** | **string**| 成员搜索，邮箱、username、name、remark | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectMember**](../Model/ProjectMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdMembersApplyList**
> \GiteeEnterprise\Model\MemberApplication getEnterpriseIdProjectsProjectIdMembersApplyList($enterpriseId, $projectId, $accessToken, $qt, $query, $status, $page, $perPage)

仓库成员申请列表

仓库成员申请列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$query = "query_example"; // string | 搜索字符串：申请人姓名或个人空间地址
$status = "status_example"; // string | 状态[approved:已同意,pending:待审核,refused:已拒绝,overdue:已过期,invite_pass:已接受邀请]
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdMembersApplyList($enterpriseId, $projectId, $accessToken, $qt, $query, $status, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembersApi->getEnterpriseIdProjectsProjectIdMembersApplyList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **query** | **string**| 搜索字符串：申请人姓名或个人空间地址 | [optional]
 **status** | **string**| 状态[approved:已同意,pending:待审核,refused:已拒绝,overdue:已过期,invite_pass:已接受邀请] | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\MemberApplication**](../Model/MemberApplication.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdMembersOverview**
> \GiteeEnterprise\Model\ProjectMemberOverview getEnterpriseIdProjectsProjectIdMembersOverview($enterpriseId, $projectId, $accessToken, $qt)

成员概览

成员概览

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdMembersOverview($enterpriseId, $projectId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembersApi->getEnterpriseIdProjectsProjectIdMembersOverview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectMemberOverview**](../Model/ProjectMemberOverview.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdMembersRoles**
> \GiteeEnterprise\Model\ProjectRole getEnterpriseIdProjectsProjectIdMembersRoles($enterpriseId, $projectId, $accessToken, $qt)

获取仓库角色

获取仓库角色

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdMembersRoles($enterpriseId, $projectId, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembersApi->getEnterpriseIdProjectsProjectIdMembersRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectRole**](../Model/ProjectRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdProjectsProjectIdMembersWithTeamMembers**
> \GiteeEnterprise\Model\ProjectMember getEnterpriseIdProjectsProjectIdMembersWithTeamMembers($enterpriseId, $projectId, $accessToken, $qt, $scope, $search, $page, $perPage)

获取仓库成员和仓库团队成员

获取仓库成员和仓库团队成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$scope = "scope_example"; // string | not_in:获取不在本仓库的企业成员
$search = "search_example"; // string | 成员搜索，邮箱、username、name、remark
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdProjectsProjectIdMembersWithTeamMembers($enterpriseId, $projectId, $accessToken, $qt, $scope, $search, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembersApi->getEnterpriseIdProjectsProjectIdMembersWithTeamMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **scope** | **string**| not_in:获取不在本仓库的企业成员 | [optional]
 **search** | **string**| 成员搜索，邮箱、username、name、remark | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectMember**](../Model/ProjectMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdProjectsProjectIdMembers**
> \GiteeEnterprise\Model\ProjectMemberAdd postEnterpriseIdProjectsProjectIdMembers($enterpriseId, $projectId, $accessToken, $qt, $users, $groups, $accessLevel)

添加仓库成员

添加仓库成员

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id
$users = "users_example"; // string | 要添加的成员信息,例如[{\"id\":\"13\", \"access\":\"30\", \"name\":\"真喜洋洋 (xiyangyang)\", \"username\":\"xiyangyang\"}]
$groups = "groups_example"; // string | 授权团队的id，多个ID通过英文逗号分隔
$accessLevel = 56; // int | 授权团队的成员在仓库的权限

try {
    $result = $apiInstance->postEnterpriseIdProjectsProjectIdMembers($enterpriseId, $projectId, $accessToken, $qt, $users, $groups, $accessLevel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembersApi->postEnterpriseIdProjectsProjectIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]
 **users** | **string**| 要添加的成员信息,例如[{\&quot;id\&quot;:\&quot;13\&quot;, \&quot;access\&quot;:\&quot;30\&quot;, \&quot;name\&quot;:\&quot;真喜洋洋 (xiyangyang)\&quot;, \&quot;username\&quot;:\&quot;xiyangyang\&quot;}] | [optional]
 **groups** | **string**| 授权团队的id，多个ID通过英文逗号分隔 | [optional]
 **accessLevel** | **int**| 授权团队的成员在仓库的权限 | [optional]

### Return type

[**\GiteeEnterprise\Model\ProjectMemberAdd**](../Model/ProjectMemberAdd.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectsProjectIdAuthGroups**
> putEnterpriseIdProjectsProjectIdAuthGroups($enterpriseId, $projectId, $groupIds, $accessLevel, $accessToken, $qt)

调整团队授权

调整团队授权

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$groupIds = "groupIds_example"; // string | 被授权团队的id，多个id用英文逗号分隔
$accessLevel = 56; // int | 授权团队的成员在仓库的权限
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $apiInstance->putEnterpriseIdProjectsProjectIdAuthGroups($enterpriseId, $projectId, $groupIds, $accessLevel, $accessToken, $qt);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembersApi->putEnterpriseIdProjectsProjectIdAuthGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **groupIds** | **string**| 被授权团队的id，多个id用英文逗号分隔 |
 **accessLevel** | **int**| 授权团队的成员在仓库的权限 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdProjectsProjectIdMembersMemberId**
> \GiteeEnterprise\Model\Member putEnterpriseIdProjectsProjectIdMembersMemberId($enterpriseId, $projectId, $memberId, $projectAccess, $accessToken, $qt)

修改仓库成员权限

修改仓库成员权限

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ProjectMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id
$projectId = "projectId_example"; // string | 仓库 id 或 path
$memberId = 56; // int | 成员id
$projectAccess = 56; // int | 仓库角色级别, 报告者:15,观察者:25,开发者:30,管理员:40,负责人:100
$accessToken = "accessToken_example"; // string | 用户授权码
$qt = "qt_example"; // string | path类型（查询参数为path）, 空则表示查询参数为id

try {
    $result = $apiInstance->putEnterpriseIdProjectsProjectIdMembersMemberId($enterpriseId, $projectId, $memberId, $projectAccess, $accessToken, $qt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectMembersApi->putEnterpriseIdProjectsProjectIdMembersMemberId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id |
 **projectId** | **string**| 仓库 id 或 path |
 **memberId** | **int**| 成员id |
 **projectAccess** | **int**| 仓库角色级别, 报告者:15,观察者:25,开发者:30,管理员:40,负责人:100 |
 **accessToken** | **string**| 用户授权码 | [optional]
 **qt** | **string**| path类型（查询参数为path）, 空则表示查询参数为id | [optional]

### Return type

[**\GiteeEnterprise\Model\Member**](../Model/Member.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

