# GiteeEnterprise\MemberApplicationsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnterpriseIdMemberApplications**](MemberApplicationsApi.md#getEnterpriseIdMemberApplications) | **GET** /{enterprise_id}/member_applications | 企业/仓库/团队的成员加入申请列表
[**postEnterpriseIdMemberApplicationsBulkOperate**](MemberApplicationsApi.md#postEnterpriseIdMemberApplicationsBulkOperate) | **POST** /{enterprise_id}/member_applications/bulk_operate | 批量处理申请记录
[**postEnterpriseIdMemberApplicationsSetForceVerify**](MemberApplicationsApi.md#postEnterpriseIdMemberApplicationsSetForceVerify) | **POST** /{enterprise_id}/member_applications/set_force_verify | 强制审核开关
[**putEnterpriseIdMemberApplicationsMemberApplicationId**](MemberApplicationsApi.md#putEnterpriseIdMemberApplicationsMemberApplicationId) | **PUT** /{enterprise_id}/member_applications/{member_application_id} | 处理申请记录


# **getEnterpriseIdMemberApplications**
> \GiteeEnterprise\Model\MemberApplication[] getEnterpriseIdMemberApplications($targetType, $targetId, $enterpriseId, $accessToken, $page, $perPage)

企业/仓库/团队的成员加入申请列表

企业/仓库/团队的成员加入申请列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MemberApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$targetType = "targetType_example"; // string | 申请加入的类型: Enterprise,Project,Group
$targetId = 56; // int | 申请加入的主体 ID
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$page = 1; // int | 当前的页码
$perPage = 56; // int | 每页的数量，最大为 100

try {
    $result = $apiInstance->getEnterpriseIdMemberApplications($targetType, $targetId, $enterpriseId, $accessToken, $page, $perPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberApplicationsApi->getEnterpriseIdMemberApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetType** | **string**| 申请加入的类型: Enterprise,Project,Group |
 **targetId** | **int**| 申请加入的主体 ID |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **page** | **int**| 当前的页码 | [optional] [default to 1]
 **perPage** | **int**| 每页的数量，最大为 100 | [optional]

### Return type

[**\GiteeEnterprise\Model\MemberApplication[]**](../Model/MemberApplication.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdMemberApplicationsBulkOperate**
> \GiteeEnterprise\Model\BulkResponseWithKey postEnterpriseIdMemberApplicationsBulkOperate($selectedIds, $state, $enterpriseId, $accessToken, $roleId)

批量处理申请记录

批量处理申请记录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MemberApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$selectedIds = "selectedIds_example"; // string | 申请记录id, 逗号隔开
$state = "state_example"; // string | 通过/拒绝
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$roleId = 56; // int | 角色id。企业角色列表 scope: can_invite

try {
    $result = $apiInstance->postEnterpriseIdMemberApplicationsBulkOperate($selectedIds, $state, $enterpriseId, $accessToken, $roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberApplicationsApi->postEnterpriseIdMemberApplicationsBulkOperate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **selectedIds** | **string**| 申请记录id, 逗号隔开 |
 **state** | **string**| 通过/拒绝 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **roleId** | **int**| 角色id。企业角色列表 scope: can_invite | [optional]

### Return type

[**\GiteeEnterprise\Model\BulkResponseWithKey**](../Model/BulkResponseWithKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdMemberApplicationsSetForceVerify**
> \GiteeEnterprise\Model\Enterprise postEnterpriseIdMemberApplicationsSetForceVerify($on, $enterpriseId, $accessToken)

强制审核开关

强制审核开关

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MemberApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$on = true; // bool | 是否开启强制审核: 开启此选项后，所有邀请(包括之前已生成的邀请)都将需要管理员审核通过后才可加入企业
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postEnterpriseIdMemberApplicationsSetForceVerify($on, $enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberApplicationsApi->postEnterpriseIdMemberApplicationsSetForceVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **on** | **bool**| 是否开启强制审核: 开启此选项后，所有邀请(包括之前已生成的邀请)都将需要管理员审核通过后才可加入企业 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\Enterprise**](../Model/Enterprise.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEnterpriseIdMemberApplicationsMemberApplicationId**
> \GiteeEnterprise\Model\MemberApplication putEnterpriseIdMemberApplicationsMemberApplicationId($memberApplicationId, $state, $enterpriseId, $accessToken, $roleId)

处理申请记录

处理申请记录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\MemberApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$memberApplicationId = 56; // int | 申请记录id
$state = "state_example"; // string | 通过/拒绝
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码
$roleId = 56; // int | 角色id。企业角色列表 scope: can_invite

try {
    $result = $apiInstance->putEnterpriseIdMemberApplicationsMemberApplicationId($memberApplicationId, $state, $enterpriseId, $accessToken, $roleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberApplicationsApi->putEnterpriseIdMemberApplicationsMemberApplicationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **memberApplicationId** | **int**| 申请记录id |
 **state** | **string**| 通过/拒绝 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]
 **roleId** | **int**| 角色id。企业角色列表 scope: can_invite | [optional]

### Return type

[**\GiteeEnterprise\Model\MemberApplication**](../Model/MemberApplication.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

