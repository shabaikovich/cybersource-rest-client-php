<?php
/**
 * UserManagementApi
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
 * UserManagementApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserManagementApi
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
     * @return UserManagementApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getUsers
     *
     * Get User Information - Deprecated
     *
     * @param string $organizationId This is the orgId of the organization which the user belongs to. (optional)
     * @param string $userName User ID of the user you want to get details on. (optional)
     * @param string $permissionId permission that you are trying to search user on. (optional)
     * @param string $roleId role of the user you are trying to search on. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\UmsV1UsersGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUsers($organizationId = null, $userName = null, $permissionId = null, $roleId = null)
    {
        self::$logger->info('CALL TO METHOD getUsers STARTED');
        list($response, $statusCode, $httpHeader) = $this->getUsersWithHttpInfo($organizationId, $userName, $permissionId, $roleId);
        self::$logger->info('CALL TO METHOD getUsers ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getUsersWithHttpInfo
     *
     * Get User Information - Deprecated
     *
     * @param string $organizationId This is the orgId of the organization which the user belongs to. (optional)
     * @param string $userName User ID of the user you want to get details on. (optional)
     * @param string $permissionId permission that you are trying to search user on. (optional)
     * @param string $roleId role of the user you are trying to search on. (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\UmsV1UsersGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUsersWithHttpInfo($organizationId = null, $userName = null, $permissionId = null, $roleId = null)
    {
        
        
        
        
        // parse inputs
        $resourcePath = "/ums/v1/users";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($organizationId !== null) {
            $queryParams['organizationId'] = $this->apiClient->getSerializer()->toQueryValue($organizationId);
        }
        // query params
        if ($userName !== null) {
            $queryParams['userName'] = $this->apiClient->getSerializer()->toQueryValue($userName);
        }
        // query params
        if ($permissionId !== null) {
            $queryParams['permissionId'] = $this->apiClient->getSerializer()->toQueryValue($permissionId);
        }
        // query params
        if ($roleId !== null) {
            $queryParams['roleId'] = $this->apiClient->getSerializer()->toQueryValue($roleId);
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
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        self::$logger->debug("Query Parameters :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($queryParams));
        if (isset($httpBody)) {
            if ($this->apiClient->merchantConfig->getLogConfiguration()->isMaskingEnabled()) {
                $printHttpBody = \CyberSource\Utilities\Helpers\DataMasker::maskData($httpBody);
            } else {
                $printHttpBody = $httpBody;
            }
            
            self::$logger->debug("Body Parameter :\n" . $printHttpBody); 
        }

        self::$logger->debug("Return Type : \CyberSource\Model\UmsV1UsersGet200Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\UmsV1UsersGet200Response',
                '/ums/v1/users'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\UmsV1UsersGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\UmsV1UsersGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsRefundPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
