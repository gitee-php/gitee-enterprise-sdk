# GiteeEnterprise\ReactionApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEnterpriseIdReactionsReactionId**](ReactionApi.md#deleteEnterpriseIdReactionsReactionId) | **DELETE** /{enterprise_id}/reactions/{reaction_id} | 删除表态
[**postEnterpriseIdReactions**](ReactionApi.md#postEnterpriseIdReactions) | **POST** /{enterprise_id}/reactions | 新增表态


# **deleteEnterpriseIdReactionsReactionId**
> deleteEnterpriseIdReactionsReactionId($reactionId, $enterpriseId, $accessToken)

删除表态

删除表态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ReactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reactionId = 56; // int | 表态的 id
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $apiInstance->deleteEnterpriseIdReactionsReactionId($reactionId, $enterpriseId, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling ReactionApi->deleteEnterpriseIdReactionsReactionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reactionId** | **int**| 表态的 id |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEnterpriseIdReactions**
> \GiteeEnterprise\Model\Reaction[] postEnterpriseIdReactions($targetType, $targetId, $text, $enterpriseId, $accessToken)

新增表态

新增表态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\ReactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$targetType = "targetType_example"; // string | 目标类型(PullRequest, Note, Issue, TestNote)
$targetId = 56; // int | 目标对象的 id
$text = "text_example"; // string | 表态内容
$enterpriseId = 56; // int | 
$accessToken = "accessToken_example"; // string | 用户授权码

try {
    $result = $apiInstance->postEnterpriseIdReactions($targetType, $targetId, $text, $enterpriseId, $accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReactionApi->postEnterpriseIdReactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetType** | **string**| 目标类型(PullRequest, Note, Issue, TestNote) |
 **targetId** | **int**| 目标对象的 id |
 **text** | **string**| 表态内容 |
 **enterpriseId** | **int**|  |
 **accessToken** | **string**| 用户授权码 | [optional]

### Return type

[**\GiteeEnterprise\Model\Reaction[]**](../Model/Reaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

