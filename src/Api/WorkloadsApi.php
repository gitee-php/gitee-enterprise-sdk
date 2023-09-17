<?php
/**
 * WorkloadsApi
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
 * WorkloadsApi Class Doc Comment
 *
 * @category Class
 * @package  GiteeEnterprise
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkloadsApi
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
     * Operation getEnterpriseIdWorkloads
     *
     * 查询成员工时明细
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $programIds 项目ID， 以逗号分隔。 例：\&quot;1,2,3\&quot; (optional)
     * @param  string $userIds 用户ID，以逗号分隔。 例：\&quot;1,2,3\&quot; (optional)
     * @param  string $registeredDates 工时登记日期范围。以逗号分隔。 例：\&quot;2022-01-01,2022-02-01\&quot; (optional)
     * @param  int $page 当前的页码 (optional, default to 1)
     * @param  int $perPage 每页的数量，最大为 100 (optional)
     *
     * @throws \GiteeEnterprise\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GiteeEnterprise\Model\UserWorkloadsList
     */
    public function getEnterpriseIdWorkloads($enterpriseId, $accessToken = null, $programIds = null, $userIds = null, $registeredDates = null, $page = '1', $perPage = null)
    {
        list($response) = $this->getEnterpriseIdWorkloadsWithHttpInfo($enterpriseId, $accessToken, $programIds, $userIds, $registeredDates, $page, $perPage);
        return $response;
    }

    /**
     * Operation getEnterpriseIdWorkloadsWithHttpInfo
     *
     * 查询成员工时明细
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $programIds 项目ID， 以逗号分隔。 例：\&quot;1,2,3\&quot; (optional)
     * @param  string $userIds 用户ID，以逗号分隔。 例：\&quot;1,2,3\&quot; (optional)
     * @param  string $registeredDates 工时登记日期范围。以逗号分隔。 例：\&quot;2022-01-01,2022-02-01\&quot; (optional)
     * @param  int $page 当前的页码 (optional, default to 1)
     * @param  int $perPage 每页的数量，最大为 100 (optional)
     *
     * @throws \GiteeEnterprise\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GiteeEnterprise\Model\UserWorkloadsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEnterpriseIdWorkloadsWithHttpInfo($enterpriseId, $accessToken = null, $programIds = null, $userIds = null, $registeredDates = null, $page = '1', $perPage = null)
    {
        $returnType = '\GiteeEnterprise\Model\UserWorkloadsList';
        $request = $this->getEnterpriseIdWorkloadsRequest($enterpriseId, $accessToken, $programIds, $userIds, $registeredDates, $page, $perPage);

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

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GiteeEnterprise\Model\UserWorkloadsList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEnterpriseIdWorkloadsAsync
     *
     * 查询成员工时明细
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $programIds 项目ID， 以逗号分隔。 例：\&quot;1,2,3\&quot; (optional)
     * @param  string $userIds 用户ID，以逗号分隔。 例：\&quot;1,2,3\&quot; (optional)
     * @param  string $registeredDates 工时登记日期范围。以逗号分隔。 例：\&quot;2022-01-01,2022-02-01\&quot; (optional)
     * @param  int $page 当前的页码 (optional, default to 1)
     * @param  int $perPage 每页的数量，最大为 100 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEnterpriseIdWorkloadsAsync($enterpriseId, $accessToken = null, $programIds = null, $userIds = null, $registeredDates = null, $page = '1', $perPage = null)
    {
        return $this->getEnterpriseIdWorkloadsAsyncWithHttpInfo($enterpriseId, $accessToken, $programIds, $userIds, $registeredDates, $page, $perPage)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEnterpriseIdWorkloadsAsyncWithHttpInfo
     *
     * 查询成员工时明细
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $programIds 项目ID， 以逗号分隔。 例：\&quot;1,2,3\&quot; (optional)
     * @param  string $userIds 用户ID，以逗号分隔。 例：\&quot;1,2,3\&quot; (optional)
     * @param  string $registeredDates 工时登记日期范围。以逗号分隔。 例：\&quot;2022-01-01,2022-02-01\&quot; (optional)
     * @param  int $page 当前的页码 (optional, default to 1)
     * @param  int $perPage 每页的数量，最大为 100 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEnterpriseIdWorkloadsAsyncWithHttpInfo($enterpriseId, $accessToken = null, $programIds = null, $userIds = null, $registeredDates = null, $page = '1', $perPage = null)
    {
        $returnType = '\GiteeEnterprise\Model\UserWorkloadsList';
        $request = $this->getEnterpriseIdWorkloadsRequest($enterpriseId, $accessToken, $programIds, $userIds, $registeredDates, $page, $perPage);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'getEnterpriseIdWorkloads'
     *
     * @param  int $enterpriseId 企业id (https://gitee.com/api/v8/swagger#/getList 的返回值的 id) (required)
     * @param  string $accessToken 用户授权码 (optional)
     * @param  string $programIds 项目ID， 以逗号分隔。 例：\&quot;1,2,3\&quot; (optional)
     * @param  string $userIds 用户ID，以逗号分隔。 例：\&quot;1,2,3\&quot; (optional)
     * @param  string $registeredDates 工时登记日期范围。以逗号分隔。 例：\&quot;2022-01-01,2022-02-01\&quot; (optional)
     * @param  int $page 当前的页码 (optional, default to 1)
     * @param  int $perPage 每页的数量，最大为 100 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEnterpriseIdWorkloadsRequest($enterpriseId, $accessToken = null, $programIds = null, $userIds = null, $registeredDates = null, $page = '1', $perPage = null)
    {
        // verify the required parameter 'enterpriseId' is set
        if ($enterpriseId === null || (is_array($enterpriseId) && count($enterpriseId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $enterpriseId when calling getEnterpriseIdWorkloads'
            );
        }

        $resourcePath = '/{enterprise_id}/workloads';
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
        if ($programIds !== null) {
            $queryParams['program_ids'] = ObjectSerializer::toQueryValue($programIds);
        }
        // query params
        if ($userIds !== null) {
            $queryParams['user_ids'] = ObjectSerializer::toQueryValue($userIds);
        }
        // query params
        if ($registeredDates !== null) {
            $queryParams['registered_dates'] = ObjectSerializer::toQueryValue($registeredDates);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($perPage !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($perPage);
        }

        // path params
        if ($enterpriseId !== null) {
            $resourcePath = str_replace(
                '{' . 'enterprise_id' . '}',
                ObjectSerializer::toPathValue($enterpriseId),
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
            'GET',
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
