<?php
/**
 * PtsV2PaymentsPost201ResponseMerchantInformation
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
 * PtsV2PaymentsPost201ResponseMerchantInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseMerchantInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_merchantInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantName' => 'string',
        'merchantDescriptor' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseMerchantInformationMerchantDescriptor',
        'returnUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantName' => null,
        'merchantDescriptor' => null,
        'returnUrl' => null
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
        'merchantName' => 'merchantName',
        'merchantDescriptor' => 'merchantDescriptor',
        'returnUrl' => 'returnUrl'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantName' => 'setMerchantName',
        'merchantDescriptor' => 'setMerchantDescriptor',
        'returnUrl' => 'setReturnUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantName' => 'getMerchantName',
        'merchantDescriptor' => 'getMerchantDescriptor',
        'returnUrl' => 'getReturnUrl'
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
        $this->container['merchantName'] = isset($data['merchantName']) ? $data['merchantName'] : null;
        $this->container['merchantDescriptor'] = isset($data['merchantDescriptor']) ? $data['merchantDescriptor'] : null;
        $this->container['returnUrl'] = isset($data['returnUrl']) ? $data['returnUrl'] : null;
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
     * Gets merchantName
     * @return string
     */
    public function getMerchantName()
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName
     * @param string $merchantName Use this field only if you are requesting payment with Payer Authentication serice together.  Your company's name as you want it to appear to the customer in the issuing bank's authentication form. This value overrides the value specified by your merchant bank.
     * @return $this
     */
    public function setMerchantName($merchantName)
    {
        $this->container['merchantName'] = $merchantName;

        return $this;
    }

    /**
     * Gets merchantDescriptor
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseMerchantInformationMerchantDescriptor
     */
    public function getMerchantDescriptor()
    {
        return $this->container['merchantDescriptor'];
    }

    /**
     * Sets merchantDescriptor
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseMerchantInformationMerchantDescriptor $merchantDescriptor
     * @return $this
     */
    public function setMerchantDescriptor($merchantDescriptor)
    {
        $this->container['merchantDescriptor'] = $merchantDescriptor;

        return $this;
    }

    /**
     * Gets returnUrl
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->container['returnUrl'];
    }

    /**
     * Sets returnUrl
     * @param string $returnUrl URL for displaying payment results to the consumer (notifications) after the transaction is processed. Usually this URL belongs to merchant and its behavior is defined by merchant
     * @return $this
     */
    public function setReturnUrl($returnUrl)
    {
        $this->container['returnUrl'] = $returnUrl;

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

