# GiteeEnterprise\EnterpriseRolesApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdEnterpriseRolesEnterpriseRoleId**](EnterpriseRolesApi.md#deleteEnterpriseIdEnterpriseRolesEnterpriseRoleId) | **DELETE** /{enterprise_id}/enterprise_roles/{enterprise_role_id} | 删除角色
[**getEnterpriseIdEnterpriseRoles**](EnterpriseRolesApi.md#getEnterpriseIdEnterpriseRoles) | **GET** /{enterprise_id}/enterprise_roles | 获取企业角色列表
[**getEnterpriseIdEnterpriseRolesEnterpriseRoleId**](EnterpriseRolesApi.md#getEnterpriseIdEnterpriseRolesEnterpriseRoleId) | **GET** /{enterprise_id}/enterprise_roles/{enterprise_role_id} | 获取企业角色详情
[**postEnterpriseIdEnterpriseRoles**](EnterpriseRolesApi.md#postEnterpriseIdEnterpriseRoles) | **POST** /{enterprise_id}/enterprise_roles | 新增企业角色
[**putEnterpriseIdEnterpriseRolesEnterpriseRoleId**](EnterpriseRolesApi.md#putEnterpriseIdEnterpriseRolesEnterpriseRoleId) | **PUT** /{enterprise_id}/enterprise_roles/{enterprise_role_id} | 更新企业角色


# **deleteEnterpriseIdEnterpriseRolesEnterpriseRoleId**
> deleteEnterpriseIdEnterpriseRolesEnterpriseRoleId($enterpriseId, $enterpriseRoleId, $accessToken)

删除角色

删除角色

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterpriseRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$enterpriseRoleId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdEnterpriseRolesEnterpriseRoleId($enterpriseId, $enterpriseRoleId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseRolesApi->deleteEnterpriseIdEnterpriseRolesEnterpriseRoleId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**|  |
 **enterpriseRoleId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdEnterpriseRoles**
> \GiteeEnterprise\Model\EnterpriseRole[] getEnterpriseIdEnterpriseRoles($enterpriseId, $accessToken, $sort, $direction, $scope, $search, $page, $perPage)

获取企业角色列表

获取企业角色列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterpriseRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id)
$accessToken = "accessToken_example"; // string | 用户授权码
$sort = "sort_example"; // string | 排序字段(created_at: 创建时间 updated_at: 更新时间)
$direction = "direction_example"; // string | 排序方向(asc: 升序 desc: 倒序)
$scope = "scope_example"; // string | 筛选项 (system: 系统默认类型; custom: 自定义类型; admin: 管理员类型; can_operate: 非企业拥有者角色, can_invite: 能添加成员角色)
$search = "search_example"; // string | 角色名称搜索字符串
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdEnterpriseRoles($enterpriseId, $accessToken, $sort, $direction, $scope, $search, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseRolesApi->getEnterpriseIdEnterpriseRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**| 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) |
 **accessToken** | **string**| 用户授权码 | [optional]
 **sort** | **string**| 排序字段(created_at: 创建时间 updated_at: 更新时间) | [optional]
 **direction** | **string**| 排序方向(asc: 升序 desc: 倒序) | [optional]
 **scope** | **string**| 筛选项 (system: 系统默认类型; custom: 自定义类型; admin: 管理员类型; can_operate: 非企业拥有者角色, can_invite: 能添加成员角色) | [optional]
 **search** | **string**| 角色名称搜索字符串 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseRole[]**](../Model/EnterpriseRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnterpriseIdEnterpriseRolesEnterpriseRoleId**
> \GiteeEnterprise\Model\EnterpriseRoleDetail[] getEnterpriseIdEnterpriseRolesEnterpriseRoleId($enterpriseId, $enterpriseRoleId, $accessToken)

获取企业角色详情

获取企业角色详情

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterpriseRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$enterpriseRoleId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->getEnterpriseIdEnterpriseRolesEnterpriseRoleId($enterpriseId, $enterpriseRoleId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseRolesApi->getEnterpriseIdEnterpriseRolesEnterpriseRoleId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**|  |
 **enterpriseRoleId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseRoleDetail[]**](../Model/EnterpriseRoleDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdEnterpriseRoles**
> \GiteeEnterprise\Model\EnterpriseRoleDetail[] postEnterpriseIdEnterpriseRoles($name, $enterpriseId, $accessToken, $description, $isDefault, $rule)

新增企业角色

新增企业角色

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterpriseRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 角色名称
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$description = "description_example"; // string | 角色的描述
$isDefault = true; // bool | 是否设置为企业默认角色
$rule = "rule_example"; // string | 参数名含义：           week_report: 周报           issue: 任务           program: 项目           project: 仓库           project_group: 仓库组           doc: 文档           test_plan: 测试计划           test_repository: 测试用例库           giteego_pipeline: 流水线           statistic: 统计           admin: 管理权限           格式如下（具体可对照着 web 端的权限设置）：           \"rule\": {\"week_report\":{\"general\":{\"read\":true,\"create\":true,\"update_history\":false},\"global\":{\"read\":true}},                    \"issue\":{\"general\":{\"read\":true,\"create\":true,\"modify_attr\":true,\"modify_main\":true,\"destroy\":true},\"global\":{\"read\":true,\"create\":true,\"modify_attr\":true,\"modify_main\":true,\"destroy\":true}},                    \"program\":{\"general\":{\"read\":true,\"create\":true,\"destroy\":true,\"setting\":true},\"global\":{\"read\":true,\"create\":true,\"destroy\":true,\"setting\":true}},                    \"project\":{\"general\":{\"read\":true,\"create\":true,\"destroy\":true,\"pull\":true,\"push\":true,\"merge_pr\":true,\"setting\":true},\"global\":{\"read\":true,\"create\":true,\"destroy\":true,\"pull\":true,\"push\":true,\"open_source\":true,\"read_internal_source\":true,\"merge_pr\":true,\"setting\":true}},                    \"project_group\":{\"general\":{\"read\":true,\"create\":true,\"destroy\":true,\"setting\":true},\"global\":{\"read\":true,\"create\":true,\"destroy\":true,\"setting\":true}},                    \"doc\":{\"general\":{\"read\":true,\"create\":true,\"update\":true,\"destroy\":true,\"setting\":true},\"global\":{\"read\":true,\"create\":true,\"update\":true,\"destroy\":true,\"setting\":true}},                    \"member\":{\"read\":true},\"statistic\":{\"read\":true},                    \"admin\":{\"member\":{\"add_member\":true,\"destroy\":true,\"setting\":true,\"create_group\":true,\"manage_group\":true,\"change_role\":false},                    \"log\":{\"read\":true},                    \"emergency_log\":{\"read\":true},                    \"git_lfs\":{\"read\":true},                    \"order\":{\"read\":true,\"setting\":true},                    \"hook\":{\"read\":true,\"setting\":true},                    \"key\":{\"read\":true,\"setting\":true},                    \"issue_type_status\":{\"read\":true,\"setting\":true},                    \"label_manage\":{\"read\":true,\"setting\":true},                    \"info\":{\"read\":true,\"setting\":true},                    \"role\":{\"read\":true,\"setting\":false},                    \"emergency\":{\"read\":true,\"setting\":true},                    \"security\":{\"read\":true,\"setting\":true},                    \"notice\":{\"read\":true,\"create\":true},                    \"message\":{\"read\":true,\"create\":true},\"is_admin\":true}}}

try {
    $result = $apiInstance->postEnterpriseIdEnterpriseRoles($name, $enterpriseId, $accessToken, $description, $isDefault, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseRolesApi->postEnterpriseIdEnterpriseRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| 角色名称 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **description** | **string**| 角色的描述 | [optional]
 **isDefault** | **bool**| 是否设置为企业默认角色 | [optional]
 **rule** | **string**| 参数名含义：           week_report: 周报           issue: 任务           program: 项目           project: 仓库           project_group: 仓库组           doc: 文档           test_plan: 测试计划           test_repository: 测试用例库           giteego_pipeline: 流水线           statistic: 统计           admin: 管理权限           格式如下（具体可对照着 web 端的权限设置）：           \&quot;rule\&quot;: {\&quot;week_report\&quot;:{\&quot;general\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;update_history\&quot;:false},\&quot;global\&quot;:{\&quot;read\&quot;:true}},                    \&quot;issue\&quot;:{\&quot;general\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;modify_attr\&quot;:true,\&quot;modify_main\&quot;:true,\&quot;destroy\&quot;:true},\&quot;global\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;modify_attr\&quot;:true,\&quot;modify_main\&quot;:true,\&quot;destroy\&quot;:true}},                    \&quot;program\&quot;:{\&quot;general\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true},\&quot;global\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true}},                    \&quot;project\&quot;:{\&quot;general\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;destroy\&quot;:true,\&quot;pull\&quot;:true,\&quot;push\&quot;:true,\&quot;merge_pr\&quot;:true,\&quot;setting\&quot;:true},\&quot;global\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;destroy\&quot;:true,\&quot;pull\&quot;:true,\&quot;push\&quot;:true,\&quot;open_source\&quot;:true,\&quot;read_internal_source\&quot;:true,\&quot;merge_pr\&quot;:true,\&quot;setting\&quot;:true}},                    \&quot;project_group\&quot;:{\&quot;general\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true},\&quot;global\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true}},                    \&quot;doc\&quot;:{\&quot;general\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;update\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true},\&quot;global\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;update\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true}},                    \&quot;member\&quot;:{\&quot;read\&quot;:true},\&quot;statistic\&quot;:{\&quot;read\&quot;:true},                    \&quot;admin\&quot;:{\&quot;member\&quot;:{\&quot;add_member\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true,\&quot;create_group\&quot;:true,\&quot;manage_group\&quot;:true,\&quot;change_role\&quot;:false},                    \&quot;log\&quot;:{\&quot;read\&quot;:true},                    \&quot;emergency_log\&quot;:{\&quot;read\&quot;:true},                    \&quot;git_lfs\&quot;:{\&quot;read\&quot;:true},                    \&quot;order\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;hook\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;key\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;issue_type_status\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;label_manage\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;info\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;role\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:false},                    \&quot;emergency\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;security\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;notice\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true},                    \&quot;message\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true},\&quot;is_admin\&quot;:true}}} | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseRoleDetail[]**](../Model/EnterpriseRoleDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdEnterpriseRolesEnterpriseRoleId**
> \GiteeEnterprise\Model\EnterpriseRoleDetail[] putEnterpriseIdEnterpriseRolesEnterpriseRoleId($enterpriseId, $enterpriseRoleId, $accessToken, $name, $description, $isDefault, $rule)

更新企业角色

更新企业角色

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EnterpriseRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$enterpriseId = 56; // int | 
$enterpriseRoleId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$name = "name_example"; // string | 角色名称
$description = "description_example"; // string | 角色的描述
$isDefault = true; // bool | 是否设置为企业默认角色
$rule = "rule_example"; // string | 参数名含义：           week_report: 周报           issue: 任务           program: 项目           project: 仓库           project_group: 仓库组           doc: 文档           test_plan: 测试计划           test_repository: 测试用例库           giteego_pipeline: 流水线           statistic: 统计           admin: 管理权限           格式如下（具体可对照着 web 端的权限设置）：           \"rule\": {\"week_report\":{\"general\":{\"read\":true,\"create\":true,\"update_history\":false},\"global\":{\"read\":true}},                    \"issue\":{\"general\":{\"read\":true,\"create\":true,\"modify_attr\":true,\"modify_main\":true,\"destroy\":true},\"global\":{\"read\":true,\"create\":true,\"modify_attr\":true,\"modify_main\":true,\"destroy\":true}},                    \"program\":{\"general\":{\"read\":true,\"create\":true,\"destroy\":true,\"setting\":true},\"global\":{\"read\":true,\"create\":true,\"destroy\":true,\"setting\":true}},                    \"project\":{\"general\":{\"read\":true,\"create\":true,\"destroy\":true,\"pull\":true,\"push\":true,\"merge_pr\":true,\"setting\":true},\"global\":{\"read\":true,\"create\":true,\"destroy\":true,\"pull\":true,\"push\":true,\"open_source\":true,\"read_internal_source\":true,\"merge_pr\":true,\"setting\":true}},                    \"project_group\":{\"general\":{\"read\":true,\"create\":true,\"destroy\":true,\"setting\":true},\"global\":{\"read\":true,\"create\":true,\"destroy\":true,\"setting\":true}},                    \"doc\":{\"general\":{\"read\":true,\"create\":true,\"update\":true,\"destroy\":true,\"setting\":true},\"global\":{\"read\":true,\"create\":true,\"update\":true,\"destroy\":true,\"setting\":true}},                    \"member\":{\"read\":true},\"statistic\":{\"read\":true},                    \"admin\":{\"member\":{\"add_member\":true,\"destroy\":true,\"setting\":true,\"create_group\":true,\"manage_group\":true,\"change_role\":false},                    \"log\":{\"read\":true},                    \"emergency_log\":{\"read\":true},                    \"git_lfs\":{\"read\":true},                    \"order\":{\"read\":true,\"setting\":true},                    \"hook\":{\"read\":true,\"setting\":true},                    \"key\":{\"read\":true,\"setting\":true},                    \"issue_type_status\":{\"read\":true,\"setting\":true},                    \"label_manage\":{\"read\":true,\"setting\":true},                    \"info\":{\"read\":true,\"setting\":true},                    \"role\":{\"read\":true,\"setting\":false},                    \"emergency\":{\"read\":true,\"setting\":true},                    \"security\":{\"read\":true,\"setting\":true},                    \"notice\":{\"read\":true,\"create\":true},                    \"message\":{\"read\":true,\"create\":true},\"is_admin\":true}}}

try {
    $result = $apiInstance->putEnterpriseIdEnterpriseRolesEnterpriseRoleId($enterpriseId, $enterpriseRoleId, $accessToken, $name, $description, $isDefault, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseRolesApi->putEnterpriseIdEnterpriseRolesEnterpriseRoleId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enterpriseId** | **int**|  |
 **enterpriseRoleId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **name** | **string**| 角色名称 | [optional]
 **description** | **string**| 角色的描述 | [optional]
 **isDefault** | **bool**| 是否设置为企业默认角色 | [optional]
 **rule** | **string**| 参数名含义：           week_report: 周报           issue: 任务           program: 项目           project: 仓库           project_group: 仓库组           doc: 文档           test_plan: 测试计划           test_repository: 测试用例库           giteego_pipeline: 流水线           statistic: 统计           admin: 管理权限           格式如下（具体可对照着 web 端的权限设置）：           \&quot;rule\&quot;: {\&quot;week_report\&quot;:{\&quot;general\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;update_history\&quot;:false},\&quot;global\&quot;:{\&quot;read\&quot;:true}},                    \&quot;issue\&quot;:{\&quot;general\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;modify_attr\&quot;:true,\&quot;modify_main\&quot;:true,\&quot;destroy\&quot;:true},\&quot;global\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;modify_attr\&quot;:true,\&quot;modify_main\&quot;:true,\&quot;destroy\&quot;:true}},                    \&quot;program\&quot;:{\&quot;general\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true},\&quot;global\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true}},                    \&quot;project\&quot;:{\&quot;general\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;destroy\&quot;:true,\&quot;pull\&quot;:true,\&quot;push\&quot;:true,\&quot;merge_pr\&quot;:true,\&quot;setting\&quot;:true},\&quot;global\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;destroy\&quot;:true,\&quot;pull\&quot;:true,\&quot;push\&quot;:true,\&quot;open_source\&quot;:true,\&quot;read_internal_source\&quot;:true,\&quot;merge_pr\&quot;:true,\&quot;setting\&quot;:true}},                    \&quot;project_group\&quot;:{\&quot;general\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true},\&quot;global\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true}},                    \&quot;doc\&quot;:{\&quot;general\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;update\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true},\&quot;global\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true,\&quot;update\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true}},                    \&quot;member\&quot;:{\&quot;read\&quot;:true},\&quot;statistic\&quot;:{\&quot;read\&quot;:true},                    \&quot;admin\&quot;:{\&quot;member\&quot;:{\&quot;add_member\&quot;:true,\&quot;destroy\&quot;:true,\&quot;setting\&quot;:true,\&quot;create_group\&quot;:true,\&quot;manage_group\&quot;:true,\&quot;change_role\&quot;:false},                    \&quot;log\&quot;:{\&quot;read\&quot;:true},                    \&quot;emergency_log\&quot;:{\&quot;read\&quot;:true},                    \&quot;git_lfs\&quot;:{\&quot;read\&quot;:true},                    \&quot;order\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;hook\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;key\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;issue_type_status\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;label_manage\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;info\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;role\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:false},                    \&quot;emergency\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;security\&quot;:{\&quot;read\&quot;:true,\&quot;setting\&quot;:true},                    \&quot;notice\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true},                    \&quot;message\&quot;:{\&quot;read\&quot;:true,\&quot;create\&quot;:true},\&quot;is_admin\&quot;:true}}} | [optional]

### Return type

[**\GiteeEnterprise\Model\EnterpriseRoleDetail[]**](../Model/EnterpriseRoleDetail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

