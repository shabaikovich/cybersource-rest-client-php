<?php
/**
 * Tmsv2customersEmbeddedDefaultPaymentInstrument
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
 * Tmsv2customersEmbeddedDefaultPaymentInstrument Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tmsv2customersEmbeddedDefaultPaymentInstrument implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tmsv2customers__embedded_defaultPaymentInstrument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentLinks',
        'id' => 'string',
        'object' => 'string',
        'default' => 'bool',
        'state' => 'string',
        'bankAccount' => '\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentBankAccount',
        'card' => '\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentCard',
        'buyerInformation' => '\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentBuyerInformation',
        'billTo' => '\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo',
        'processingInformation' => '\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentProcessingInformation',
        'merchantInformation' => '\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentMerchantInformation',
        'instrumentIdentifier' => '\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentInstrumentIdentifier',
        'metadata' => '\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentMetadata',
        'embedded' => '\CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbedded'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'id' => null,
        'object' => null,
        'default' => null,
        'state' => null,
        'bankAccount' => null,
        'card' => null,
        'buyerInformation' => null,
        'billTo' => null,
        'processingInformation' => null,
        'merchantInformation' => null,
        'instrumentIdentifier' => null,
        'metadata' => null,
        'embedded' => null
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
        'links' => '_links',
        'id' => 'id',
        'object' => 'object',
        'default' => 'default',
        'state' => 'state',
        'bankAccount' => 'bankAccount',
        'card' => 'card',
        'buyerInformation' => 'buyerInformation',
        'billTo' => 'billTo',
        'processingInformation' => 'processingInformation',
        'merchantInformation' => 'merchantInformation',
        'instrumentIdentifier' => 'instrumentIdentifier',
        'metadata' => 'metadata',
        'embedded' => '_embedded'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'id' => 'setId',
        'object' => 'setObject',
        'default' => 'setDefault',
        'state' => 'setState',
        'bankAccount' => 'setBankAccount',
        'card' => 'setCard',
        'buyerInformation' => 'setBuyerInformation',
        'billTo' => 'setBillTo',
        'processingInformation' => 'setProcessingInformation',
        'merchantInformation' => 'setMerchantInformation',
        'instrumentIdentifier' => 'setInstrumentIdentifier',
        'metadata' => 'setMetadata',
        'embedded' => 'setEmbedded'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'id' => 'getId',
        'object' => 'getObject',
        'default' => 'getDefault',
        'state' => 'getState',
        'bankAccount' => 'getBankAccount',
        'card' => 'getCard',
        'buyerInformation' => 'getBuyerInformation',
        'billTo' => 'getBillTo',
        'processingInformation' => 'getProcessingInformation',
        'merchantInformation' => 'getMerchantInformation',
        'instrumentIdentifier' => 'getInstrumentIdentifier',
        'metadata' => 'getMetadata',
        'embedded' => 'getEmbedded'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['bankAccount'] = isset($data['bankAccount']) ? $data['bankAccount'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['buyerInformation'] = isset($data['buyerInformation']) ? $data['buyerInformation'] : null;
        $this->container['billTo'] = isset($data['billTo']) ? $data['billTo'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['merchantInformation'] = isset($data['merchantInformation']) ? $data['merchantInformation'] : null;
        $this->container['instrumentIdentifier'] = isset($data['instrumentIdentifier']) ? $data['instrumentIdentifier'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['embedded'] = isset($data['embedded']) ? $data['embedded'] : null;
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
     * Gets links
     * @return \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The id of the Payment Instrument Token.
     * @return $this
     */
    public function setId($id)
    {

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     * @param string $object The type of token.  Valid values: - paymentInstrument
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets default
     * @return bool
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     * @param bool $default Flag that indicates whether customer payment instrument is the dafault. Valid values:  - `true`: Payment instrument is customer's default.  - `false`: Payment instrument is not customer's default.
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state Issuers state for the card number. Valid values: - ACTIVE - CLOSED : The account has been closed.
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets bankAccount
     * @return \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentBankAccount
     */
    public function getBankAccount()
    {
        return $this->container['bankAccount'];
    }

    /**
     * Sets bankAccount
     * @param \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentBankAccount $bankAccount
     * @return $this
     */
    public function setBankAccount($bankAccount)
    {
        $this->container['bankAccount'] = $bankAccount;

        return $this;
    }

    /**
     * Gets card
     * @return \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentCard $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets buyerInformation
     * @return \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentBuyerInformation
     */
    public function getBuyerInformation()
    {
        return $this->container['buyerInformation'];
    }

    /**
     * Sets buyerInformation
     * @param \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentBuyerInformation $buyerInformation
     * @return $this
     */
    public function setBuyerInformation($buyerInformation)
    {
        $this->container['buyerInformation'] = $buyerInformation;

        return $this;
    }

    /**
     * Gets billTo
     * @return \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo
     */
    public function getBillTo()
    {
        return $this->container['billTo'];
    }

    /**
     * Sets billTo
     * @param \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo $billTo
     * @return $this
     */
    public function setBillTo($billTo)
    {
        $this->container['billTo'] = $billTo;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets merchantInformation
     * @return \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentMerchantInformation
     */
    public function getMerchantInformation()
    {
        return $this->container['merchantInformation'];
    }

    /**
     * Sets merchantInformation
     * @param \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentMerchantInformation $merchantInformation
     * @return $this
     */
    public function setMerchantInformation($merchantInformation)
    {
        $this->container['merchantInformation'] = $merchantInformation;

        return $this;
    }

    /**
     * Gets instrumentIdentifier
     * @return \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentInstrumentIdentifier
     */
    public function getInstrumentIdentifier()
    {
        return $this->container['instrumentIdentifier'];
    }

    /**
     * Sets instrumentIdentifier
     * @param \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentInstrumentIdentifier $instrumentIdentifier
     * @return $this
     */
    public function setInstrumentIdentifier($instrumentIdentifier)
    {
        $this->container['instrumentIdentifier'] = $instrumentIdentifier;

        return $this;
    }

    /**
     * Gets metadata
     * @return \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentMetadata $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets embedded
     * @return \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbedded
     */
    public function getEmbedded()
    {
        return $this->container['embedded'];
    }

    /**
     * Sets embedded
     * @param \CyberSource\Model\Tmsv2customersEmbeddedDefaultPaymentInstrumentEmbedded $embedded
     * @return $this
     */
    public function setEmbedded($embedded)
    {
        $this->container['embedded'] = $embedded;

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

