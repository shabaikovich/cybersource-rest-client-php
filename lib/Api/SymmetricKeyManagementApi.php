<?php
/**
 * SymmetricKeyManagementApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;
use \CyberSource\Logging\LogFactory as LogFactory;

/**
 * SymmetricKeyManagementApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SymmetricKeyManagementApi
{
    private static $logger = null;
    
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;

        if (self::$logger === null) {
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(get_class($this)), $apiClient->merchantConfig->getLogConfiguration());
        }
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return SymmetricKeyManagementApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createV2SharedSecretKeys
     *
     * Create Shared-Secret Keys
     *
     * @param \CyberSource\Model\CreateSharedSecretKeysRequest $createSharedSecretKeysRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\KmsV2KeysSymPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createV2SharedSecretKeys($createSharedSecretKeysRequest)
    {
        self::$logger->info('CALL TO METHOD createV2SharedSecretKeys STARTED');
        list($response, $statusCode, $httpHeader) = $this->createV2SharedSecretKeysWithHttpInfo($createSharedSecretKeysRequest);
        self::$logger->info('CALL TO METHOD createV2SharedSecretKeys ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createV2SharedSecretKeysWithHttpInfo
     *
     * Create Shared-Secret Keys
     *
     * @param \CyberSource\Model\CreateSharedSecretKeysRequest $createSharedSecretKeysRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\KmsV2KeysSymPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createV2SharedSecretKeysWithHttpInfo($createSharedSecretKeysRequest)
    {
        // verify the required parameter 'createSharedSecretKeysRequest' is set
        if ($createSharedSecretKeysRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $createSharedSecretKeysRequest when calling createV2SharedSecretKeys");
            throw new \InvalidArgumentException('Missing the required parameter $createSharedSecretKeysRequest when calling createV2SharedSecretKeys');
        }
        
        // parse inputs
        $resourcePath = "/kms/v2/keys-sym";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($createSharedSecretKeysRequest)) {
            $_tempBody = $createSharedSecretKeysRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\CreateSharedSecretKeysRequest');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment());

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : POST $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\KmsV2KeysSymPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\KmsV2KeysSymPost201Response',
                '/kms/v2/keys-sym'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\KmsV2KeysSymPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\KmsV2KeysSymPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4005', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse5021', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation createV2SharedSecretKeysVerifi
     *
     * Create Shared-Secret Keys as per verifi spec
     *
     * @param string $vIcDomain domain (required)
     * @param \CyberSource\Model\CreateSharedSecretKeysVerifiRequest $createSharedSecretKeysVerifiRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\KmsV2KeysSymPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createV2SharedSecretKeysVerifi($vIcDomain, $createSharedSecretKeysVerifiRequest)
    {
        self::$logger->info('CALL TO METHOD createV2SharedSecretKeysVerifi STARTED');
        list($response, $statusCode, $httpHeader) = $this->createV2SharedSecretKeysVerifiWithHttpInfo($vIcDomain, $createSharedSecretKeysVerifiRequest);
        self::$logger->info('CALL TO METHOD createV2SharedSecretKeysVerifi ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createV2SharedSecretKeysVerifiWithHttpInfo
     *
     * Create Shared-Secret Keys as per verifi spec
     *
     * @param string $vIcDomain domain (required)
     * @param \CyberSource\Model\CreateSharedSecretKeysVerifiRequest $createSharedSecretKeysVerifiRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\KmsV2KeysSymPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function createV2SharedSecretKeysVerifiWithHttpInfo($vIcDomain, $createSharedSecretKeysVerifiRequest)
    {
        // verify the required parameter 'vIcDomain' is set
        if ($vIcDomain === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $vIcDomain when calling createV2SharedSecretKeysVerifi");
            throw new \InvalidArgumentException('Missing the required parameter $vIcDomain when calling createV2SharedSecretKeysVerifi');
        }
        
        // verify the required parameter 'createSharedSecretKeysVerifiRequest' is set
        if ($createSharedSecretKeysVerifiRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $createSharedSecretKeysVerifiRequest when calling createV2SharedSecretKeysVerifi");
            throw new \InvalidArgumentException('Missing the required parameter $createSharedSecretKeysVerifiRequest when calling createV2SharedSecretKeysVerifi');
        }
        
        // parse inputs
        $resourcePath = "/kms/v2/keys-sym/verifi";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($vIcDomain !== null) {
            $headerParams['v-ic-domain'] = $this->apiClient->getSerializer()->toHeaderValue($vIcDomain);
        }
        // body params
        $_tempBody = null;
        if (isset($createSharedSecretKeysVerifiRequest)) {
            $_tempBody = $createSharedSecretKeysVerifiRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\CreateSharedSecretKeysVerifiRequest');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment());

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : POST $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\KmsV2KeysSymPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\KmsV2KeysSymPost201Response',
                '/kms/v2/keys-sym/verifi'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\KmsV2KeysSymPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\KmsV2KeysSymPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4005', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse5021', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation deleteBulkSymmetricKeys
     *
     * Delete one or more Symmetric keys
     *
     * @param \CyberSource\Model\DeleteBulkSymmetricKeysRequest $deleteBulkSymmetricKeysRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\KmsV2KeysSymDeletesPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBulkSymmetricKeys($deleteBulkSymmetricKeysRequest)
    {
        self::$logger->info('CALL TO METHOD deleteBulkSymmetricKeys STARTED');
        list($response, $statusCode, $httpHeader) = $this->deleteBulkSymmetricKeysWithHttpInfo($deleteBulkSymmetricKeysRequest);
        self::$logger->info('CALL TO METHOD deleteBulkSymmetricKeys ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation deleteBulkSymmetricKeysWithHttpInfo
     *
     * Delete one or more Symmetric keys
     *
     * @param \CyberSource\Model\DeleteBulkSymmetricKeysRequest $deleteBulkSymmetricKeysRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\KmsV2KeysSymDeletesPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteBulkSymmetricKeysWithHttpInfo($deleteBulkSymmetricKeysRequest)
    {
        // verify the required parameter 'deleteBulkSymmetricKeysRequest' is set
        if ($deleteBulkSymmetricKeysRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $deleteBulkSymmetricKeysRequest when calling deleteBulkSymmetricKeys");
            throw new \InvalidArgumentException('Missing the required parameter $deleteBulkSymmetricKeysRequest when calling deleteBulkSymmetricKeys');
        }
        
        // parse inputs
        $resourcePath = "/kms/v2/keys-sym/deletes";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($deleteBulkSymmetricKeysRequest)) {
            $_tempBody = $deleteBulkSymmetricKeysRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\DeleteBulkSymmetricKeysRequest');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment());

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : POST $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\KmsV2KeysSymDeletesPost200Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\KmsV2KeysSymDeletesPost200Response',
                '/kms/v2/keys-sym/deletes'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\KmsV2KeysSymDeletesPost200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\KmsV2KeysSymDeletesPost200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4005', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse5021', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation getKeyDetails
     *
     * Retrieves shared secret key details
     *
     * @param string $keyId Key ID. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\KmsV2KeysSymGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getKeyDetails($keyId)
    {
        self::$logger->info('CALL TO METHOD getKeyDetails STARTED');
        list($response, $statusCode, $httpHeader) = $this->getKeyDetailsWithHttpInfo($keyId);
        self::$logger->info('CALL TO METHOD getKeyDetails ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getKeyDetailsWithHttpInfo
     *
     * Retrieves shared secret key details
     *
     * @param string $keyId Key ID. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\KmsV2KeysSymGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getKeyDetailsWithHttpInfo($keyId)
    {
        // verify the required parameter 'keyId' is set
        if ($keyId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $keyId when calling getKeyDetails");
            throw new \InvalidArgumentException('Missing the required parameter $keyId when calling getKeyDetails');
        }
        
        // parse inputs
        $resourcePath = "/kms/v2/keys-sym/{keyId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($keyId !== null) {
            $resourcePath = str_replace(
                "{" . "keyId" . "}",
                $this->apiClient->getSerializer()->toPathValue($keyId),
                $resourcePath
            );
        }
        if ('GET' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : GET $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\KmsV2KeysSymGet200Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\KmsV2KeysSymGet200Response',
                '/kms/v2/keys-sym/{keyId}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\KmsV2KeysSymGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\KmsV2KeysSymGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse4005', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse5021', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
