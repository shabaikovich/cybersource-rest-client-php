<?php
/**
 * TssV2TransactionsPost201ResponseEmbeddedProcessingInformation
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
 * TssV2TransactionsPost201ResponseEmbeddedProcessingInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsPost201ResponseEmbeddedProcessingInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsPost201Response__embedded_processingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentSolution' => 'string',
        'businessApplicationId' => 'string',
        'commerceIndicator' => 'string',
        'commerceIndicatorLabel' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paymentSolution' => null,
        'businessApplicationId' => null,
        'commerceIndicator' => null,
        'commerceIndicatorLabel' => null
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
        'paymentSolution' => 'paymentSolution',
        'businessApplicationId' => 'businessApplicationId',
        'commerceIndicator' => 'commerceIndicator',
        'commerceIndicatorLabel' => 'commerceIndicatorLabel'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'paymentSolution' => 'setPaymentSolution',
        'businessApplicationId' => 'setBusinessApplicationId',
        'commerceIndicator' => 'setCommerceIndicator',
        'commerceIndicatorLabel' => 'setCommerceIndicatorLabel'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'paymentSolution' => 'getPaymentSolution',
        'businessApplicationId' => 'getBusinessApplicationId',
        'commerceIndicator' => 'getCommerceIndicator',
        'commerceIndicatorLabel' => 'getCommerceIndicatorLabel'
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
        $this->container['paymentSolution'] = isset($data['paymentSolution']) ? $data['paymentSolution'] : null;
        $this->container['businessApplicationId'] = isset($data['businessApplicationId']) ? $data['businessApplicationId'] : null;
        $this->container['commerceIndicator'] = isset($data['commerceIndicator']) ? $data['commerceIndicator'] : null;
        $this->container['commerceIndicatorLabel'] = isset($data['commerceIndicatorLabel']) ? $data['commerceIndicatorLabel'] : null;
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
     * Gets paymentSolution
     * @return string
     */
    public function getPaymentSolution()
    {
        return $this->container['paymentSolution'];
    }

    /**
     * Sets paymentSolution
     * @param string $paymentSolution Type of digital payment solution for the transaction. Possible Values:   - `visacheckout`: Visa Checkout. This value is required for Visa Checkout transactions. For details, see `payment_solution` field description in [Visa Checkout Using the SCMP API.](https://apps.cybersource.com/library/documentation/dev_guides/VCO_SCMP_API/html/)  - `001`: Apple Pay.  - `004`: Cybersource In-App Solution.  - `005`: Masterpass. This value is required for Masterpass transactions on OmniPay Direct. For details, see \"Masterpass\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  - `006`: Android Pay.  - `007`: Chase Pay.  - `008`: Samsung Pay.  - `012`: Google Pay.  - `013`: Cybersource P2PE Decryption  - `014`: Mastercard credential on file (COF) payment network token. Returned in authorizations that use a payment network token associated with a TMS token.  - `015`: Visa credential on file (COF) payment network token. Returned in authorizations that use a payment network token associated with a TMS token.  - `027`: Click to Pay.
     * @return $this
     */
    public function setPaymentSolution($paymentSolution)
    {
        $this->container['paymentSolution'] = $paymentSolution;

        return $this;
    }

    /**
     * Gets businessApplicationId
     * @return string
     */
    public function getBusinessApplicationId()
    {
        return $this->container['businessApplicationId'];
    }

    /**
     * Sets businessApplicationId
     * @param string $businessApplicationId Payouts transaction type. Required for OCT transactions. This field is a pass-through, which means that CyberSource does not verify the value or modify it in any way before sending it to the processor. **Note** When the request includes this field, this value overrides the information in your CyberSource account.  For valid values, see the `invoiceHeader_businessApplicationID` field description in [Payouts Using the Simple Order API.](http://apps.cybersource.com/library/documentation/dev_guides/payouts_SO/Payouts_SO_API.pdf)
     * @return $this
     */
    public function setBusinessApplicationId($businessApplicationId)
    {
        $this->container['businessApplicationId'] = $businessApplicationId;

        return $this;
    }

    /**
     * Gets commerceIndicator
     * @return string
     */
    public function getCommerceIndicator()
    {
        return $this->container['commerceIndicator'];
    }

    /**
     * Sets commerceIndicator
     * @param string $commerceIndicator Type of transaction. Some payment card companies use this information when determining discount rates.  #### Used by **Authorization** Required payer authentication transactions; otherwise, optional. **Credit** Required for standalone credits on Chase Paymentech solutions; otherwise, optional.  The list of valid values in this field depends on your processor. See Appendix I, \"Commerce Indicators,\" on page 441 of the Cybersource Credit Card Guide.  #### Ingenico ePayments When you omit this field for Ingenico ePayments, the processor uses the default transaction type they have on file for you instead of the default value (listed in Appendix I, \"Commerce Indicators,\" on page 441.)  #### Payer Authentication Transactions For the possible values and requirements, see \"Payer Authentication,\" page 195.  #### Card Present You must set this field to `retail`. This field is required for a card-present transaction. Note that this should ONLY be used when the cardholder and card are present at the time of the transaction. For all keyed transactions originated from a POS terminal where the cardholder and card are not present, commerceIndicator should be submitted as \"moto\"
     * @return $this
     */
    public function setCommerceIndicator($commerceIndicator)
    {
        $this->container['commerceIndicator'] = $commerceIndicator;

        return $this;
    }

    /**
     * Gets commerceIndicatorLabel
     * @return string
     */
    public function getCommerceIndicatorLabel()
    {
        return $this->container['commerceIndicatorLabel'];
    }

    /**
     * Sets commerceIndicatorLabel
     * @param string $commerceIndicatorLabel Type of transaction. Some payment card companies use this information when determining discount rates.  #### Used by **Authorization** Required payer authentication transactions; otherwise, optional. **Credit** Required for standalone credits on Chase Paymentech solutions; otherwise, optional.  The list of valid values in this field depends on your processor. See Appendix I, \"Commerce Indicators,\" on page 441 of the Cybersource Credit Card Guide.  #### Ingenico ePayments When you omit this field for Ingenico ePayments, the processor uses the default transaction type they have on file for you instead of the default value (listed in Appendix I, \"Commerce Indicators,\" on page 441.)  #### Payer Authentication Transactions For the possible values and requirements, see \"Payer Authentication,\" page 195.  #### Card Present You must set this field to `retail`. This field is required for a card-present transaction. Note that this should ONLY be used when the cardholder and card are present at the time of the transaction. For all keyed transactions originated from a POS terminal where the cardholder and card are not present, commerceIndicator should be submitted as \"moto\"
     * @return $this
     */
    public function setCommerceIndicatorLabel($commerceIndicatorLabel)
    {
        $this->container['commerceIndicatorLabel'] = $commerceIndicatorLabel;

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


