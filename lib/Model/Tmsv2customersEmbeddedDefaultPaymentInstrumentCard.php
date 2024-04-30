<?php
/**
 * Tmsv2customersEmbeddedDefaultPaymentInstrumentCard
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
 * Tmsv2customersEmbeddedDefaultPaymentInstrumentCard Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tmsv2customersEmbeddedDefaultPaymentInstrumentCard implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tmsv2customers__embedded_defaultPaymentInstrument_card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'expirationMonth' => 'string',
        'expirationYear' => 'string',
        'type' => 'string',
        'issueNumber' => 'string',
        'startMonth' => 'string',
        'startYear' => 'string',
        'useAs' => 'string',
        'hash' => 'string',
        'tokenizedInformation' => '\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentCardTokenizedInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'expirationMonth' => null,
        'expirationYear' => null,
        'type' => null,
        'issueNumber' => null,
        'startMonth' => null,
        'startYear' => null,
        'useAs' => null,
        'hash' => null,
        'tokenizedInformation' => null
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
        'expirationMonth' => 'expirationMonth',
        'expirationYear' => 'expirationYear',
        'type' => 'type',
        'issueNumber' => 'issueNumber',
        'startMonth' => 'startMonth',
        'startYear' => 'startYear',
        'useAs' => 'useAs',
        'hash' => 'hash',
        'tokenizedInformation' => 'tokenizedInformation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'expirationMonth' => 'setExpirationMonth',
        'expirationYear' => 'setExpirationYear',
        'type' => 'setType',
        'issueNumber' => 'setIssueNumber',
        'startMonth' => 'setStartMonth',
        'startYear' => 'setStartYear',
        'useAs' => 'setUseAs',
        'hash' => 'setHash',
        'tokenizedInformation' => 'setTokenizedInformation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'expirationMonth' => 'getExpirationMonth',
        'expirationYear' => 'getExpirationYear',
        'type' => 'getType',
        'issueNumber' => 'getIssueNumber',
        'startMonth' => 'getStartMonth',
        'startYear' => 'getStartYear',
        'useAs' => 'getUseAs',
        'hash' => 'getHash',
        'tokenizedInformation' => 'getTokenizedInformation'
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
        $this->container['expirationMonth'] = isset($data['expirationMonth']) ? $data['expirationMonth'] : null;
        $this->container['expirationYear'] = isset($data['expirationYear']) ? $data['expirationYear'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['issueNumber'] = isset($data['issueNumber']) ? $data['issueNumber'] : null;
        $this->container['startMonth'] = isset($data['startMonth']) ? $data['startMonth'] : null;
        $this->container['startYear'] = isset($data['startYear']) ? $data['startYear'] : null;
        $this->container['useAs'] = isset($data['useAs']) ? $data['useAs'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['tokenizedInformation'] = isset($data['tokenizedInformation']) ? $data['tokenizedInformation'] : null;
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
     * Gets expirationMonth
     * @return string
     */
    public function getExpirationMonth()
    {
        return $this->container['expirationMonth'];
    }

    /**
     * Sets expirationMonth
     * @param string $expirationMonth Two-digit month in which the payment card expires.  Format: `MM`.  Possible Values: `01` through `12`.
     * @return $this
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->container['expirationMonth'] = $expirationMonth;

        return $this;
    }

    /**
     * Gets expirationYear
     * @return string
     */
    public function getExpirationYear()
    {
        return $this->container['expirationYear'];
    }

    /**
     * Sets expirationYear
     * @param string $expirationYear Four-digit year in which the credit card expires.  Format: `YYYY`.
     * @return $this
     */
    public function setExpirationYear($expirationYear)
    {
        $this->container['expirationYear'] = $expirationYear;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Value that indicates the card type. Possible Values v2 : v1:   * 001 : visa   * 002 : mastercard - Eurocard—European regional brand of Mastercard   * 003 : american express   * 004 : discover   * 005 : diners club   * 006 : carte blanche   * 007 : jcb   * 008 : optima   * 011 : twinpay credit   * 012 : twinpay debit   * 013 : walmart   * 014 : enRoute   * 015 : lowes consumer   * 016 : home depot consumer   * 017 : mbna   * 018 : dicks sportswear   * 019 : casual corner   * 020 : sears   * 021 : jal   * 023 : disney   * 024 : maestro uk domestic   * 025 : sams club consumer   * 026 : sams club business   * 028 : bill me later   * 029 : bebe   * 030 : restoration hardware   * 031 : delta online — use this value only for Ingenico ePayments. For other processors, use 001 for all Visa card types.   * 032 : solo   * 033 : visa electron   * 034 : dankort   * 035 : laser   * 036 : carte bleue — formerly Cartes Bancaires   * 037 : carta si   * 038 : pinless debit   * 039 : encoded account   * 040 : uatp   * 041 : household   * 042 : maestro international   * 043 : ge money uk   * 044 : korean cards   * 045 : style   * 046 : jcrew   * 047 : payease china processing ewallet   * 048 : payease china processing bank transfer   * 049 : meijer private label   * 050 : hipercard — supported only by the Comercio Latino processor.   * 051 : aura — supported only by the Comercio Latino processor.   * 052 : redecard   * 054 : elo — supported only by the Comercio Latino processor.   * 055 : capital one private label   * 056 : synchrony private label   * 057 : costco private label   * 060 : mada   * 062 : china union pay   * 063 : falabella private label
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets issueNumber
     * @return string
     */
    public function getIssueNumber()
    {
        return $this->container['issueNumber'];
    }

    /**
     * Sets issueNumber
     * @param string $issueNumber Number of times a Maestro (UK Domestic) card has been issued to the account holder. The card might or might not have an issue number. The number can consist of one or two digits, and the first digit might be a zero. When you include this value in your request, include exactly what is printed on the card. A value of 2 is different than a value of 02. Do not include the field, even with a blank value, if the card is not a Maestro (UK Domestic) card.  **Note** The issue number is not required for Maestro (UK Domestic) transactions.
     * @return $this
     */
    public function setIssueNumber($issueNumber)
    {
        $this->container['issueNumber'] = $issueNumber;

        return $this;
    }

    /**
     * Gets startMonth
     * @return string
     */
    public function getStartMonth()
    {
        return $this->container['startMonth'];
    }

    /**
     * Sets startMonth
     * @param string $startMonth Month of the start of the Maestro (UK Domestic) card validity period. Do not include the field, even with a blank value, if the card is not a Maestro (UK Domestic) card. `Format: MM`. Possible Values: 01 through 12.  **Note** The start date is not required for Maestro (UK Domestic) transactions.
     * @return $this
     */
    public function setStartMonth($startMonth)
    {
        $this->container['startMonth'] = $startMonth;

        return $this;
    }

    /**
     * Gets startYear
     * @return string
     */
    public function getStartYear()
    {
        return $this->container['startYear'];
    }

    /**
     * Sets startYear
     * @param string $startYear Year of the start of the Maestro (UK Domestic) card validity period. Do not include the field, even with a blank value, if the card is not a Maestro (UK Domestic) card. `Format: YYYY`.  **Note** The start date is not required for Maestro (UK Domestic) transactions.
     * @return $this
     */
    public function setStartYear($startYear)
    {
        $this->container['startYear'] = $startYear;

        return $this;
    }

    /**
     * Gets useAs
     * @return string
     */
    public function getUseAs()
    {
        return $this->container['useAs'];
    }

    /**
     * Sets useAs
     * @param string $useAs 'Payment Instrument was created / updated as part of a pinless debit transaction.'
     * @return $this
     */
    public function setUseAs($useAs)
    {
        $this->container['useAs'] = $useAs;

        return $this;
    }

    /**
     * Gets hash
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     * @param string $hash Hash value representing the card.
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets tokenizedInformation
     * @return \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentCardTokenizedInformation
     */
    public function getTokenizedInformation()
    {
        return $this->container['tokenizedInformation'];
    }

    /**
     * Sets tokenizedInformation
     * @param \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentCardTokenizedInformation $tokenizedInformation
     * @return $this
     */
    public function setTokenizedInformation($tokenizedInformation)
    {
        $this->container['tokenizedInformation'] = $tokenizedInformation;

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


