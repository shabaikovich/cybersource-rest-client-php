<?php
/**
 * PtsV2PaymentsPost201Response1ProcessorInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
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

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * PtsV2PaymentsPost201Response1ProcessorInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201Response1ProcessorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_1_processorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transactionId' => 'string',
        'tradeNumber' => 'string',
        'rawResponse' => 'string',
        'responseCode' => 'string',
        'sellerProtection' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationSellerProtection',
        'avs' => '\CyberSource\Model\PtsV2PaymentsPost201Response1ProcessorInformationAvs'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transactionId' => null,
        'tradeNumber' => null,
        'rawResponse' => null,
        'responseCode' => null,
        'sellerProtection' => null,
        'avs' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'transactionId' => 'transactionId',
        'tradeNumber' => 'tradeNumber',
        'rawResponse' => 'rawResponse',
        'responseCode' => 'responseCode',
        'sellerProtection' => 'sellerProtection',
        'avs' => 'avs'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'transactionId' => 'setTransactionId',
        'tradeNumber' => 'setTradeNumber',
        'rawResponse' => 'setRawResponse',
        'responseCode' => 'setResponseCode',
        'sellerProtection' => 'setSellerProtection',
        'avs' => 'setAvs'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'transactionId' => 'getTransactionId',
        'tradeNumber' => 'getTradeNumber',
        'rawResponse' => 'getRawResponse',
        'responseCode' => 'getResponseCode',
        'sellerProtection' => 'getSellerProtection',
        'avs' => 'getAvs'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['tradeNumber'] = isset($data['tradeNumber']) ? $data['tradeNumber'] : null;
        $this->container['rawResponse'] = isset($data['rawResponse']) ? $data['rawResponse'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
        $this->container['sellerProtection'] = isset($data['sellerProtection']) ? $data['sellerProtection'] : null;
        $this->container['avs'] = isset($data['avs']) ? $data['avs'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets transactionId
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     * @param string $transactionId Network transaction identifier (TID). You can use this value to identify a specific transaction when you are discussing the transaction with your processor. Not all processors provide this value.  Returned by the authorization service.  #### PIN debit Transaction identifier generated by the processor.  Returned by PIN debit credit.  #### GPX Processor transaction ID.  #### Cielo For Cielo, this value is the non-sequential unit (NSU) and is supported for all transactions. The value is generated by Cielo or the issuing bank.  #### Comercio Latino For Comercio Latino, this value is the proof of sale or non-sequential unit (NSU) number generated by the acquirers Cielo and Rede, or the issuing bank.  #### CyberSource through VisaNet and GPN For details about this value for CyberSource through VisaNet and GPN, see \"Network Transaction Identifiers\" in [Credit Card Services Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### Moneris This value identifies the transaction on a host system. It contains the following information: - Terminal used to process the transaction - Shift during which the transaction took place - Batch number - Transaction number within the batch You must store this value. If you give the customer a receipt, display this value on the receipt.  **Example** For the value 66012345001069003: - Terminal ID = 66012345 - Shift number = 001 - Batch number = 069 - Transaction number = 003
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets tradeNumber
     * @return string
     */
    public function getTradeNumber()
    {
        return $this->container['tradeNumber'];
    }

    /**
     * Sets tradeNumber
     * @param string $tradeNumber The description for this field is not available.
     * @return $this
     */
    public function setTradeNumber($tradeNumber)
    {
        $this->container['tradeNumber'] = $tradeNumber;

        return $this;
    }

    /**
     * Gets rawResponse
     * @return string
     */
    public function getRawResponse()
    {
        return $this->container['rawResponse'];
    }

    /**
     * Sets rawResponse
     * @param string $rawResponse This field is set to the value of failure reason returned by the processor.
     * @return $this
     */
    public function setRawResponse($rawResponse)
    {
        $this->container['rawResponse'] = $rawResponse;

        return $this;
    }

    /**
     * Gets responseCode
     * @return string
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     * @param string $responseCode This field is set to the value of response code returned by the processor.
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets sellerProtection
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationSellerProtection
     */
    public function getSellerProtection()
    {
        return $this->container['sellerProtection'];
    }

    /**
     * Sets sellerProtection
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseProcessorInformationSellerProtection $sellerProtection
     * @return $this
     */
    public function setSellerProtection($sellerProtection)
    {
        $this->container['sellerProtection'] = $sellerProtection;

        return $this;
    }

    /**
     * Gets avs
     * @return \CyberSource\Model\PtsV2PaymentsPost201Response1ProcessorInformationAvs
     */
    public function getAvs()
    {
        return $this->container['avs'];
    }

    /**
     * Sets avs
     * @param \CyberSource\Model\PtsV2PaymentsPost201Response1ProcessorInformationAvs $avs
     * @return $this
     */
    public function setAvs($avs)
    {
        $this->container['avs'] = $avs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


