<?php
/**
 * PtsV2PaymentsPost201ResponseWatchlistScreeningInformation
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
 * PtsV2PaymentsPost201ResponseWatchlistScreeningInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseWatchlistScreeningInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_watchlistScreeningInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ipCountryConfidence' => 'int',
        'infoCodes' => 'string[]',
        'watchList' => '\CyberSource\Model\PtsV2PaymentsPost201ResponseWatchlistScreeningInformationWatchList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ipCountryConfidence' => null,
        'infoCodes' => null,
        'watchList' => null
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
        'ipCountryConfidence' => 'ipCountryConfidence',
        'infoCodes' => 'infoCodes',
        'watchList' => 'watchList'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ipCountryConfidence' => 'setIpCountryConfidence',
        'infoCodes' => 'setInfoCodes',
        'watchList' => 'setWatchList'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ipCountryConfidence' => 'getIpCountryConfidence',
        'infoCodes' => 'getInfoCodes',
        'watchList' => 'getWatchList'
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
        $this->container['ipCountryConfidence'] = isset($data['ipCountryConfidence']) ? $data['ipCountryConfidence'] : null;
        $this->container['infoCodes'] = isset($data['infoCodes']) ? $data['infoCodes'] : null;
        $this->container['watchList'] = isset($data['watchList']) ? $data['watchList'] : null;
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
     * Gets ipCountryConfidence
     * @return int
     */
    public function getIpCountryConfidence()
    {
        return $this->container['ipCountryConfidence'];
    }

    /**
     * Sets ipCountryConfidence
     * @param int $ipCountryConfidence Likelihood that the country associated with the customer's IP address was identified correctly. Returns a value from 1–100, where 100 indicates the highest likelihood. If the country cannot be determined, the value is –1.
     * @return $this
     */
    public function setIpCountryConfidence($ipCountryConfidence)
    {
        $this->container['ipCountryConfidence'] = $ipCountryConfidence;

        return $this;
    }

    /**
     * Gets infoCodes
     * @return string[]
     */
    public function getInfoCodes()
    {
        return $this->container['infoCodes'];
    }

    /**
     * Sets infoCodes
     * @param string[] $infoCodes Returned when the Denied Parties List check (first two codes) or the export service (all others) would have declined the transaction. This field can contain one or more of these values: - `MATCH-DPC`: Denied Parties List match. - `UNV-DPC`: Denied Parties List unavailable. - `MATCH-BCO`: Billing country restricted. - `MATCH-EMCO`: Email country restricted. - `MATCH-HCO`: Host name country restricted. - `MATCH-IPCO`: IP country restricted. - `MATCH-SCO`: Shipping country restricted.
     * @return $this
     */
    public function setInfoCodes($infoCodes)
    {
        $this->container['infoCodes'] = $infoCodes;

        return $this;
    }

    /**
     * Gets watchList
     * @return \CyberSource\Model\PtsV2PaymentsPost201ResponseWatchlistScreeningInformationWatchList
     */
    public function getWatchList()
    {
        return $this->container['watchList'];
    }

    /**
     * Sets watchList
     * @param \CyberSource\Model\PtsV2PaymentsPost201ResponseWatchlistScreeningInformationWatchList $watchList
     * @return $this
     */
    public function setWatchList($watchList)
    {
        $this->container['watchList'] = $watchList;

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


