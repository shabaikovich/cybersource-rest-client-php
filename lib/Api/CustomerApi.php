<?php
/**
 * CustomerApi
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
 * CustomerApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerApi
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
            self::$logger = (new LogFactory())->getLogger(\CyberSource\Utilities\Helpers\ClassHelper::getClassName(static::class), $apiClient->merchantConfig->getLogConfiguration());
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
     * @return CustomerApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteCustomer
     *
     * Delete a Customer
     *
     * @param string $customerId The Id of a Customer. (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of void, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCustomer($customerId, $profileId = null)
    {
        self::$logger->info('CALL TO METHOD deleteCustomer STARTED');
        list($response, $statusCode, $httpHeader) = $this->deleteCustomerWithHttpInfo($customerId, $profileId);
        self::$logger->info('CALL TO METHOD deleteCustomer ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation deleteCustomerWithHttpInfo
     *
     * Delete a Customer
     *
     * @param string $customerId The Id of a Customer. (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCustomerWithHttpInfo($customerId, $profileId = null)
    {
        // verify the required parameter 'customerId' is set
        if ($customerId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $customerId when calling deleteCustomer");
            throw new \InvalidArgumentException('Missing the required parameter $customerId when calling deleteCustomer');
        }
        // parse inputs
        $resourcePath = "/tms/v2/customers/{customerId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($customerId !== null) {
            $resourcePath = str_replace(
                "{" . "customerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customerId),
                $resourcePath
            );
        }
        if ('DELETE' == 'POST') {
            $_tempBody = '{}';
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : DELETE $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : null");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/tms/v2/customers/{customerId}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse410', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse500', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation getCustomer
     *
     * Retrieve a Customer
     *
     * @param string $customerId The Id of a Customer. (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PostCustomerRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomer($customerId, $profileId = null)
    {
        self::$logger->info('CALL TO METHOD getCustomer STARTED');
        list($response, $statusCode, $httpHeader) = $this->getCustomerWithHttpInfo($customerId, $profileId);
        self::$logger->info('CALL TO METHOD getCustomer ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getCustomerWithHttpInfo
     *
     * Retrieve a Customer
     *
     * @param string $customerId The Id of a Customer. (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PostCustomerRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerWithHttpInfo($customerId, $profileId = null)
    {
        // verify the required parameter 'customerId' is set
        if ($customerId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $customerId when calling getCustomer");
            throw new \InvalidArgumentException('Missing the required parameter $customerId when calling getCustomer');
        }
        // parse inputs
        $resourcePath = "/tms/v2/customers/{customerId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // path params
        if ($customerId !== null) {
            $resourcePath = str_replace(
                "{" . "customerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customerId),
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

        self::$logger->debug("Return Type : \CyberSource\Model\PostCustomerRequest");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PostCustomerRequest',
                '/tms/v2/customers/{customerId}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PostCustomerRequest', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PostCustomerRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse410', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse500', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation patchCustomer
     *
     * Update a Customer
     *
     * @param string $customerId The Id of a Customer. (required)
     * @param \CyberSource\Model\PatchCustomerRequest $patchCustomerRequest  (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @param string $ifMatch Contains an ETag value from a GET request to make the request conditional. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PatchCustomerRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchCustomer($customerId, $patchCustomerRequest, $profileId = null, $ifMatch = null)
    {
        self::$logger->info('CALL TO METHOD patchCustomer STARTED');
        list($response, $statusCode, $httpHeader) = $this->patchCustomerWithHttpInfo($customerId, $patchCustomerRequest, $profileId, $ifMatch);
        self::$logger->info('CALL TO METHOD patchCustomer ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation patchCustomerWithHttpInfo
     *
     * Update a Customer
     *
     * @param string $customerId The Id of a Customer. (required)
     * @param \CyberSource\Model\PatchCustomerRequest $patchCustomerRequest  (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @param string $ifMatch Contains an ETag value from a GET request to make the request conditional. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PatchCustomerRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchCustomerWithHttpInfo($customerId, $patchCustomerRequest, $profileId = null, $ifMatch = null)
    {
        // verify the required parameter 'customerId' is set
        if ($customerId === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $customerId when calling patchCustomer");
            throw new \InvalidArgumentException('Missing the required parameter $customerId when calling patchCustomer');
        }
        // verify the required parameter 'patchCustomerRequest' is set
        if ($patchCustomerRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $patchCustomerRequest when calling patchCustomer");
            throw new \InvalidArgumentException('Missing the required parameter $patchCustomerRequest when calling patchCustomer');
        }
        // parse inputs
        $resourcePath = "/tms/v2/customers/{customerId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // header params
        if ($ifMatch !== null) {
            $headerParams['if-match'] = $this->apiClient->getSerializer()->toHeaderValue($ifMatch);
        }
        // path params
        if ($customerId !== null) {
            $resourcePath = str_replace(
                "{" . "customerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customerId),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($patchCustomerRequest)) {
            $_tempBody = $patchCustomerRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\PatchCustomerRequest');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment(), $this->apiClient->merchantConfig->getDefaultDeveloperId());

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // Logging
        self::$logger->debug("Resource : PATCH $resourcePath");
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\PatchCustomerRequest");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PatchCustomerRequest',
                '/tms/v2/customers/{customerId}'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PatchCustomerRequest', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PatchCustomerRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse410', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 412:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse412', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse500', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation postCustomer
     *
     * Create a Customer
     *
     * @param \CyberSource\Model\PostCustomerRequest $postCustomerRequest  (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PostCustomerRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function postCustomer($postCustomerRequest, $profileId = null)
    {
        self::$logger->info('CALL TO METHOD postCustomer STARTED');
        list($response, $statusCode, $httpHeader) = $this->postCustomerWithHttpInfo($postCustomerRequest, $profileId);
        self::$logger->info('CALL TO METHOD postCustomer ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation postCustomerWithHttpInfo
     *
     * Create a Customer
     *
     * @param \CyberSource\Model\PostCustomerRequest $postCustomerRequest  (required)
     * @param string $profileId The Id of a profile containing user specific TMS configuration. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PostCustomerRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function postCustomerWithHttpInfo($postCustomerRequest, $profileId = null)
    {
        // verify the required parameter 'postCustomerRequest' is set
        if ($postCustomerRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $postCustomerRequest when calling postCustomer");
            throw new \InvalidArgumentException('Missing the required parameter $postCustomerRequest when calling postCustomer');
        }
        // parse inputs
        $resourcePath = "/tms/v2/customers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // body params
        $_tempBody = null;
        if (isset($postCustomerRequest)) {
            $_tempBody = $postCustomerRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\PostCustomerRequest');

        $_tempBody = $sdkTracker->insertDeveloperIdTracker($_tempBody, end($modelClassLocation), $this->apiClient->merchantConfig->getRunEnvironment(), $this->apiClient->merchantConfig->getDefaultDeveloperId());

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

        self::$logger->debug("Return Type : \CyberSource\Model\PostCustomerRequest");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PostCustomerRequest',
                '/tms/v2/customers'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PostCustomerRequest', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PostCustomerRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse409', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse424', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse500', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
