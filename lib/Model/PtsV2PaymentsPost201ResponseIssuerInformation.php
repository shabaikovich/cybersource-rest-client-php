<?php
/**
 * PtsV2PaymentsPost201ResponseIssuerInformation
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
 * PtsV2PaymentsPost201ResponseIssuerInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseIssuerInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_issuerInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country' => 'string',
        'discretionaryData' => 'string',
        'responseCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country' => null,
        'discretionaryData' => null,
        'responseCode' => null
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
        'country' => 'country',
        'discretionaryData' => 'discretionaryData',
        'responseCode' => 'responseCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'discretionaryData' => 'setDiscretionaryData',
        'responseCode' => 'setResponseCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'discretionaryData' => 'getDiscretionaryData',
        'responseCode' => 'getResponseCode'
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['discretionaryData'] = isset($data['discretionaryData']) ? $data['discretionaryData'] : null;
        $this->container['responseCode'] = isset($data['responseCode']) ? $data['responseCode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['country']) && (strlen($this->container['country']) > 3)) {
            $invalid_properties[] = "invalid value for 'country', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['discretionaryData']) && (strlen($this->container['discretionaryData']) > 255)) {
            $invalid_properties[] = "invalid value for 'discretionaryData', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['responseCode']) && (strlen($this->container['responseCode']) > 6)) {
            $invalid_properties[] = "invalid value for 'responseCode', the character length must be smaller than or equal to 6.";
        }

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

        if (strlen($this->container['country']) > 3) {
            return false;
        }
        if (strlen($this->container['discretionaryData']) > 255) {
            return false;
        }
        if (strlen($this->container['responseCode']) > 6) {
            return false;
        }
        return true;
    }


    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Country in which the card was issued. This information enables you to determine whether the card was issued domestically or internationally. Use the two-character ISO Standard Country Codes.  This field is supported for Visa, Mastercard, Discover, Diners Club, JCB, and Maestro (International) on Chase Paymentech Solutions.  For details, see `auth_card_issuer_country` field description in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (strlen($country) > 3)) {
            throw new \InvalidArgumentException('invalid length for $country when calling PtsV2PaymentsPost201ResponseIssuerInformation., must be smaller than or equal to 3.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets discretionaryData
     * @return string
     */
    public function getDiscretionaryData()
    {
        return $this->container['discretionaryData'];
    }

    /**
     * Sets discretionaryData
     * @param string $discretionaryData Data defined by the issuer.  The value for this reply field will probably be the same as the value that you submitted in the authorization request, but it is possible for the processor, issuer, or acquirer to modify the value.  This field is supported only for Visa transactions on **CyberSource through VisaNet**.  For details, see `issuer_additional_data` field description in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/wwhelp/wwhimpl/js/html/wwhelp.htm)
     * @return $this
     */
    public function setDiscretionaryData($discretionaryData)
    {
        if (!is_null($discretionaryData) && (strlen($discretionaryData) > 255)) {
            throw new \InvalidArgumentException('invalid length for $discretionaryData when calling PtsV2PaymentsPost201ResponseIssuerInformation., must be smaller than or equal to 255.');
        }

        $this->container['discretionaryData'] = $discretionaryData;

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
     * @param string $responseCode Additional authorization code that must be printed on the receipt when returned by the processor.  This value is generated by the processor and is returned only for a successful transaction.  This field is supported only on FDC Nashville Global and SIX.
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        if (!is_null($responseCode) && (strlen($responseCode) > 6)) {
            throw new \InvalidArgumentException('invalid length for $responseCode when calling PtsV2PaymentsPost201ResponseIssuerInformation., must be smaller than or equal to 6.');
        }

        $this->container['responseCode'] = $responseCode;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
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

