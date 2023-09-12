# GiteeEnterprise\EditorsApi

All URIs are relative to *https://api.gitee.com/enterprises*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postEnterpriseIdEditorsMd2html**](EditorsApi.md#postEnterpriseIdEditorsMd2html) | **POST** /{enterprise_id}/editors/md2html | markdown 转 html


# **postEnterpriseIdEditorsMd2html**
> postEnterpriseIdEditorsMd2html($content, $enterpriseId)

markdown 转 html

markdown 转 html

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GiteeEnterprise\Api\EditorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content = "content_example"; // string | markdown 内容
$enterpriseId = 56; // int | 

try {
    $apiInstance->postEnterpriseIdEditorsMd2html($content, $enterpriseId);
} catch (Exception $e) {
    echo 'Exception when calling EditorsApi->postEnterpriseIdEditorsMd2html: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content** | **string**| markdown 内容 |
 **enterpriseId** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

