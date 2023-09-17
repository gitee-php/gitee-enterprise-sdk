<?php
/**
 * TestPlanApi
 * PHP version 5
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Gitee Open API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1.334
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.23
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GiteeEnterprise\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GiteeEnterprise\ApiException;
use GiteeEnterprise\Configuration;
use GiteeEnterprise\HeaderSelector;
use GiteeEnterprise\ObjectSerializer;

/**
 * TestPlanApi Class Doc Comment
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TestPlanApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation deleteEnterpriseIdTestPlansTestPlanId
     *
     * 删除测试计划
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  int $programId 项目 ID (required)
     * @param  int $testPlanId testPlanId (required)
     * @param  string $accessToken 用户授权码 (optional)
     *
     * @throws \GiteeEnterprise\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteEnterpriseIdTestPlansTestPlanId($enterpriseId, $programId, $testPlanId, $accessToken = null)
    {
        $this->deleteEnterpriseIdTestPlansTestPlanIdWithHttpInfo($enterpriseId, $programId, $testPlanId, $accessToken);
    }

    /**
     * Operation deleteEnterpriseIdTestPlansTestPlanIdWithHttpInfo
     *
     * 删除测试计划
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  int $programId 项目 ID (required)
     * @param  int $testPlanId (required)
     * @param  string $accessToken 用户授权码 (optional)
     *
     * @throws \GiteeEnterprise\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteEnterpriseIdTestPlansTestPlanIdWithHttpInfo($enterpriseId, $programId, $testPlanId, $accessToken = null)
    {
        $returnType = '';
        $request = $this->deleteEnterpriseIdTestPlansTestPlanIdRequest($enterpriseId, $programId, $testPlanId, $accessToken);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteEnterpriseIdTestPlansTestPlanIdAsync
     *
     * 删除测试计划
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  int $programId 项目 ID (required)
     * @param  int $testPlanId (required)
     * @param  string $accessToken 用户授权码 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteEnterpriseIdTestPlansTestPlanIdAsync($enterpriseId, $programId, $testPlanId, $accessToken = null)
    {
        return $this->deleteEnterpriseIdTestPlansTestPlanIdAsyncWithHttpInfo($enterpriseId, $programId, $testPlanId, $accessToken)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteEnterpriseIdTestPlansTestPlanIdAsyncWithHttpInfo
     *
     * 删除测试计划
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  int $programId 项目 ID (required)
     * @param  int $testPlanId (required)
     * @param  string $accessToken 用户授权码 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteEnterpriseIdTestPlansTestPlanIdAsyncWithHttpInfo($enterpriseId, $programId, $testPlanId, $accessToken = null)
    {
        $returnType = '';
        $request = $this->deleteEnterpriseIdTestPlansTestPlanIdRequest($enterpriseId, $programId, $testPlanId, $accessToken);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteEnterpriseIdTestPlansTestPlanId'
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  int $programId 项目 ID (required)
     * @param  int $testPlanId (required)
     * @param  string $accessToken 用户授权码 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteEnterpriseIdTestPlansTestPlanIdRequest($enterpriseId, $programId, $testPlanId, $accessToken = null)
    {
        // verify the required parameter 'enterpriseId' is set
        if ($enterpriseId === null || (is_array($enterpriseId) && count($enterpriseId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterpriseId when calling deleteEnterpriseIdTestPlansTestPlanId'
            );
        }
        // verify the required parameter 'programId' is set
        if ($programId === null || (is_array($programId) && count($programId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $programId when calling deleteEnterpriseIdTestPlansTestPlanId'
            );
        }
        // verify the required parameter 'testPlanId' is set
        if ($testPlanId === null || (is_array($testPlanId) && count($testPlanId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $testPlanId when calling deleteEnterpriseIdTestPlansTestPlanId'
            );
        }

        $resourcePath = '/{enterprise_id}/test_plans/{test_plan_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($accessToken !== null) {
            $queryParams['access_token'] = ObjectSerializer::toQueryValue($accessToken);
        }
        // query params
        if ($programId !== null) {
            $queryParams['program_id'] = ObjectSerializer::toQueryValue($programId);
        }

        // path params
        if ($enterpriseId !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterpriseId),
                $resourcePath
            );
        }
        // path params
        if ($testPlanId !== null) {
            $resourcePath = str_replace(
                '{' . 'test_plan_id' . '}',
                ObjectSerializer::toPathValue($testPlanId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
