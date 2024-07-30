<?php
/**
 * InlineResponse2011PaymentAccountInformationCard
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
 * InlineResponse2011PaymentAccountInformationCard Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2011PaymentAccountInformationCard implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_201_1_paymentAccountInformation_card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'brandName' => 'string',
        'currency' => 'string',
        'maxLength' => 'string',
        'credentialType' => 'string',
        'brands' => '\CyberSource\Model\InlineResponse2011PaymentAccountInformationCardBrands[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'brandName' => null,
        'currency' => null,
        'maxLength' => null,
        'credentialType' => null,
        'brands' => null
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
        'type' => 'type',
        'brandName' => 'brandName',
        'currency' => 'currency',
        'maxLength' => 'maxLength',
        'credentialType' => 'credentialType',
        'brands' => 'brands'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'brandName' => 'setBrandName',
        'currency' => 'setCurrency',
        'maxLength' => 'setMaxLength',
        'credentialType' => 'setCredentialType',
        'brands' => 'setBrands'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'brandName' => 'getBrandName',
        'currency' => 'getCurrency',
        'maxLength' => 'getMaxLength',
        'credentialType' => 'getCredentialType',
        'brands' => 'getBrands'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['brandName'] = isset($data['brandName']) ? $data['brandName'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
        $this->container['credentialType'] = isset($data['credentialType']) ? $data['credentialType'] : null;
        $this->container['brands'] = isset($data['brands']) ? $data['brands'] : null;
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type This field contains the 3-digit value that indicates the card type.  Possible values: - `001`: Visa. For card-present transactions on all processors except SIX, the Visa Electron card type is processed the same way that the Visa debit card is processed. Use card type value `001` for Visa Electron. - `002`: Mastercard, Eurocard[^1], which is a European regional brand of Mastercard. - `003`: American Express - `004`: Discover - `005`: Diners Club - `006`: Carte Blanche[^1] - `007`: JCB[^1] - `008`: Optima - `011`: Twinpay Credit Card - `012`: Twinpay Debit Card - `013`: Walmart - `014`: Enroute[^1] - `015`: Lowes Consumer - `016`: Home Depot Consumer - `017`: MBNA - `018`: Dick's Sportwear - `019`: Casual Corner - `020`: Sears - `021`: JAL[^1] - `023`: Disney Card - `024`: Switch/Solo - `025`: Sams Club Consumer - `026`: Sams Club Business - `027`: Nicos - `029`: Bebe - `030`: Restoration Hardware - `031`: Delta[^1]: Use this value only for Ingenico ePayments. For other processors, use `001` for all Visa card types. - `032`: Solo - `033`: Visa Electron[^1]. Use this value only for Ingenico ePayments and SIX. For other processors, use `001` for all Visa card types. - `034`: Dankort[^1] - `035`: Laser - `036`: Cartes Bancaires[^1] - `037`: Carta Si[^1] - `039`: Encoded account number[^1] - `040`: UATP[^1] - `041`: HOUSEHOLD - `042`: Maestro (International)[^1] - `043`: GE MONEY - `044`: Korean Cards - `045`: Style - `046`: J.Crew - `050`: Hipercard[^2,3] - `051`: Aura - `052`: Redecard - `053`: Orico Card - `054`: Elo[^3] - `055`: Capital One Private Label - `058`: Carnet - `059`: ValueLink - `061`: RuPay - `062`: China UnionPay - `063`: Falabella Private Label - `064`: Prompt Card - `065`: Korean Domestic - `066`: Banricompras  [^1]: For this card type, you must include the `paymentInformation.card.type` or `paymentInformation.tokenizedCard.type` field in your request for an authorization or a stand-alone credit.  [^2]: For this card type on Cielo 3.0, you must include the `paymentInformation.card.type` or `paymentInformation.tokenizedCard.type` field in a request for an authorization or a stand-alone credit. This card type is not supported on Cielo 1.5.  [^3]: For this card type on Getnet and Rede, you must include the `paymentInformation.card.type` or `paymentInformation.tokenizedCard.type` field in a request for an authorization or a stand-alone credit.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets brandName
     * @return string
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     * @param string $brandName This field contains the card brand name.   Some of the possible values (not an exhaustive list) are -    - VISA   - MASTERCARD   - AMERICAN EXPRESS   - DISCOVER   - DINERS CLUB   - CARTE BLANCHE   - JCB   - OPTIMA   - TWINPAY CREDIT CARD   - TWINPAY DEBIT CARD   - WALMART   - ENROUTE   - LOWES CONSUMER   - HOME DEPOT CONSUMER   - MBNA   - DICKS SPORTWEAR   - CASUAL CORNER   - SEARS   - JAL   - DISNEY CARD   - SWITCH/SOLO   - SAMS CLUB CONSUMER   - SAMS CLUB BUSINESS   - NICOS HOUSE CARD   - BEBE   - RESTORATION HARDWARE   - DELTA ONLINE   - SOLO   - VISA ELECTRON   - DANKORT   - LASER   - CARTE BANCAIRE   - CARTA SI   - ENCODED ACCOUNT   - UATP   - HOUSEHOLD   - MAESTRO   - GE CAPITAL   - KOREAN CARDS   - STYLE CARDS   - JCREW   - MEIJER   - HIPERCARD   - AURA   - REDECARD   - ORICO HOUSE CARD   - ELO   - CAPITAL ONE PRIVATE LABEL   - CARNET   - RUPAY   - CHINA UNION PAY   - FALABELLA PRIVATE LABEL   - PROMPTCARD   - KOREAN DOMESTIC   - BANRICOMPRAS
     * @return $this
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency This field indicates the 3-letter [ISO Standard Currency Codes](http://apps.cybersource.com/library/documentation/sbc/quickref/currencies.pdf) for the card currency.
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets maxLength
     * @return string
     */
    public function getMaxLength()
    {
        return $this->container['maxLength'];
    }

    /**
     * Sets maxLength
     * @param string $maxLength This field contains the max length of the card.
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->container['maxLength'] = $maxLength;

        return $this;
    }

    /**
     * Gets credentialType
     * @return string
     */
    public function getCredentialType()
    {
        return $this->container['credentialType'];
    }

    /**
     * Sets credentialType
     * @param string $credentialType This field contains the type of the payment credential. Possible values:   - PAN   - TOKEN
     * @return $this
     */
    public function setCredentialType($credentialType)
    {
        $this->container['credentialType'] = $credentialType;

        return $this;
    }

    /**
     * Gets brands
     * @return \CyberSource\Model\InlineResponse2011PaymentAccountInformationCardBrands[]
     */
    public function getBrands()
    {
        return $this->container['brands'];
    }

    /**
     * Sets brands
     * @param \CyberSource\Model\InlineResponse2011PaymentAccountInformationCardBrands[] $brands Array of brands
     * @return $this
     */
    public function setBrands($brands)
    {
        $this->container['brands'] = $brands;

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


