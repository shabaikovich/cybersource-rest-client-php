<?php
/**
 * VoidApi
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
 * VoidApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoidApi
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
     * @return VoidApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation mitVoid
     *
     * Timeout Void
     *
     * @param \CyberSource\Model\MitVoidRequest $mitVoidRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsVoidsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function mitVoid($mitVoidRequest)
    {
        self::$logger->info('CALL TO METHOD mitVoid STARTED');
        list($response, $statusCode, $httpHeader) = $this->mitVoidWithHttpInfo($mitVoidRequest);
        self::$logger->info('CALL TO METHOD mitVoid ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation mitVoidWithHttpInfo
     *
     * Timeout Void
     *
     * @param \CyberSource\Model\MitVoidRequest $mitVoidRequest  (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsVoidsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function mitVoidWithHttpInfo($mitVoidRequest)
    {
        // verify the required parameter 'mitVoidRequest' is set
        if ($mitVoidRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $mitVoidRequest when calling mitVoid");
            throw new \InvalidArgumentException('Missing the required parameter $mitVoidRequest when calling mitVoid');
        }
        
        // parse inputs
        $resourcePath = "/pts/v2/voids";
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
        if (isset($mitVoidRequest)) {
            $_tempBody = $mitVoidRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\MitVoidRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\PtsV2PaymentsVoidsPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response',
                '/pts/v2/voids'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsVoidsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation voidCapture
     *
     * Void a Capture
     *
     * @param \CyberSource\Model\VoidCaptureRequest $voidCaptureRequest  (required)
     * @param string $id The capture ID returned from a previous capture request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsVoidsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function voidCapture($voidCaptureRequest, $id)
    {
        self::$logger->info('CALL TO METHOD voidCapture STARTED');
        list($response, $statusCode, $httpHeader) = $this->voidCaptureWithHttpInfo($voidCaptureRequest, $id);
        self::$logger->info('CALL TO METHOD voidCapture ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation voidCaptureWithHttpInfo
     *
     * Void a Capture
     *
     * @param \CyberSource\Model\VoidCaptureRequest $voidCaptureRequest  (required)
     * @param string $id The capture ID returned from a previous capture request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsVoidsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function voidCaptureWithHttpInfo($voidCaptureRequest, $id)
    {
        // verify the required parameter 'voidCaptureRequest' is set
        if ($voidCaptureRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $voidCaptureRequest when calling voidCapture");
            throw new \InvalidArgumentException('Missing the required parameter $voidCaptureRequest when calling voidCapture');
        }
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling voidCapture");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling voidCapture');
        }
        
        // parse inputs
        $resourcePath = "/pts/v2/captures/{id}/voids";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($voidCaptureRequest)) {
            $_tempBody = $voidCaptureRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\VoidCaptureRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\PtsV2PaymentsVoidsPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response',
                '/pts/v2/captures/{id}/voids'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsVoidsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation voidCredit
     *
     * Void a Credit
     *
     * @param \CyberSource\Model\VoidCreditRequest $voidCreditRequest  (required)
     * @param string $id The credit ID returned from a previous credit request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsVoidsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function voidCredit($voidCreditRequest, $id)
    {
        self::$logger->info('CALL TO METHOD voidCredit STARTED');
        list($response, $statusCode, $httpHeader) = $this->voidCreditWithHttpInfo($voidCreditRequest, $id);
        self::$logger->info('CALL TO METHOD voidCredit ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation voidCreditWithHttpInfo
     *
     * Void a Credit
     *
     * @param \CyberSource\Model\VoidCreditRequest $voidCreditRequest  (required)
     * @param string $id The credit ID returned from a previous credit request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsVoidsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function voidCreditWithHttpInfo($voidCreditRequest, $id)
    {
        // verify the required parameter 'voidCreditRequest' is set
        if ($voidCreditRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $voidCreditRequest when calling voidCredit");
            throw new \InvalidArgumentException('Missing the required parameter $voidCreditRequest when calling voidCredit');
        }
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling voidCredit");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling voidCredit');
        }
        
        // parse inputs
        $resourcePath = "/pts/v2/credits/{id}/voids";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($voidCreditRequest)) {
            $_tempBody = $voidCreditRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\VoidCreditRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\PtsV2PaymentsVoidsPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response',
                '/pts/v2/credits/{id}/voids'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsVoidsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation voidPayment
     *
     * Void a Payment
     *
     * @param \CyberSource\Model\VoidPaymentRequest $voidPaymentRequest  (required)
     * @param string $id The payment ID returned from a previous payment request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsVoidsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function voidPayment($voidPaymentRequest, $id)
    {
        self::$logger->info('CALL TO METHOD voidPayment STARTED');
        list($response, $statusCode, $httpHeader) = $this->voidPaymentWithHttpInfo($voidPaymentRequest, $id);
        self::$logger->info('CALL TO METHOD voidPayment ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation voidPaymentWithHttpInfo
     *
     * Void a Payment
     *
     * @param \CyberSource\Model\VoidPaymentRequest $voidPaymentRequest  (required)
     * @param string $id The payment ID returned from a previous payment request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsVoidsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function voidPaymentWithHttpInfo($voidPaymentRequest, $id)
    {
        // verify the required parameter 'voidPaymentRequest' is set
        if ($voidPaymentRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $voidPaymentRequest when calling voidPayment");
            throw new \InvalidArgumentException('Missing the required parameter $voidPaymentRequest when calling voidPayment');
        }
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling voidPayment");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling voidPayment');
        }
        
        // parse inputs
        $resourcePath = "/pts/v2/payments/{id}/voids";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($voidPaymentRequest)) {
            $_tempBody = $voidPaymentRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\VoidPaymentRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\PtsV2PaymentsVoidsPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response',
                '/pts/v2/payments/{id}/voids'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsVoidsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }

    /**
     * Operation voidRefund
     *
     * Void a Refund
     *
     * @param \CyberSource\Model\VoidRefundRequest $voidRefundRequest  (required)
     * @param string $id The refund ID returned from a previous refund request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsVoidsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function voidRefund($voidRefundRequest, $id)
    {
        self::$logger->info('CALL TO METHOD voidRefund STARTED');
        list($response, $statusCode, $httpHeader) = $this->voidRefundWithHttpInfo($voidRefundRequest, $id);
        self::$logger->info('CALL TO METHOD voidRefund ENDED');
        self::$logger->close();
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation voidRefundWithHttpInfo
     *
     * Void a Refund
     *
     * @param \CyberSource\Model\VoidRefundRequest $voidRefundRequest  (required)
     * @param string $id The refund ID returned from a previous refund request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsVoidsPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function voidRefundWithHttpInfo($voidRefundRequest, $id)
    {
        // verify the required parameter 'voidRefundRequest' is set
        if ($voidRefundRequest === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $voidRefundRequest when calling voidRefund");
            throw new \InvalidArgumentException('Missing the required parameter $voidRefundRequest when calling voidRefund');
        }
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            self::$logger->error("InvalidArgumentException : Missing the required parameter $id when calling voidRefund");
            throw new \InvalidArgumentException('Missing the required parameter $id when calling voidRefund');
        }
        
        // parse inputs
        $resourcePath = "/pts/v2/refunds/{id}/voids";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($voidRefundRequest)) {
            $_tempBody = $voidRefundRequest;
        }
        
        $sdkTracker = new \CyberSource\Utilities\Tracking\SdkTracker();
        $modelClassLocation = explode('\\', '\CyberSource\Model\VoidRefundRequest');

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

        self::$logger->debug("Return Type : \CyberSource\Model\PtsV2PaymentsVoidsPost201Response");
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response',
                '/pts/v2/refunds/{id}/voids'
            );
            
            self::$logger->debug("Response Headers :\n" . \CyberSource\Utilities\Helpers\ListHelper::toString($httpHeader));

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsVoidsPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsVoidsPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            self::$logger->error("ApiException : $e");
            throw $e;
        }
    }
}
