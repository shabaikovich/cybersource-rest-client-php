<?php
/**
 * PostInstrumentIdentifierEnrollmentRequest
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
 * PostInstrumentIdentifierEnrollmentRequest Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PostInstrumentIdentifierEnrollmentRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'postInstrumentIdentifierEnrollmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\CyberSource\Model\TmsEmbeddedInstrumentIdentifierLinks',
        'id' => 'string',
        'object' => 'string',
        'state' => 'string',
        'type' => 'string',
        'tokenProvisioningInformation' => '\CyberSource\Model\Ptsv2paymentsTokenInformationTokenProvisioningInformation',
        'card' => '\CyberSource\Model\TmsEmbeddedInstrumentIdentifierCard',
        'bankAccount' => '\CyberSource\Model\TmsEmbeddedInstrumentIdentifierBankAccount',
        'tokenizedCard' => '\CyberSource\Model\Tmsv2TokenizedCard',
        'issuer' => '\CyberSource\Model\TmsEmbeddedInstrumentIdentifierIssuer',
        'processingInformation' => '\CyberSource\Model\TmsEmbeddedInstrumentIdentifierProcessingInformation',
        'billTo' => '\CyberSource\Model\TmsEmbeddedInstrumentIdentifierBillTo',
        'metadata' => '\CyberSource\Model\TmsEmbeddedInstrumentIdentifierMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'id' => null,
        'object' => null,
        'state' => null,
        'type' => null,
        'tokenProvisioningInformation' => null,
        'card' => null,
        'bankAccount' => null,
        'tokenizedCard' => null,
        'issuer' => null,
        'processingInformation' => null,
        'billTo' => null,
        'metadata' => null
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
        'state' => 'state',
        'type' => 'type',
        'tokenProvisioningInformation' => 'tokenProvisioningInformation',
        'card' => 'card',
        'bankAccount' => 'bankAccount',
        'tokenizedCard' => 'tokenizedCard',
        'issuer' => 'issuer',
        'processingInformation' => 'processingInformation',
        'billTo' => 'billTo',
        'metadata' => 'metadata'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'id' => 'setId',
        'object' => 'setObject',
        'state' => 'setState',
        'type' => 'setType',
        'tokenProvisioningInformation' => 'setTokenProvisioningInformation',
        'card' => 'setCard',
        'bankAccount' => 'setBankAccount',
        'tokenizedCard' => 'setTokenizedCard',
        'issuer' => 'setIssuer',
        'processingInformation' => 'setProcessingInformation',
        'billTo' => 'setBillTo',
        'metadata' => 'setMetadata'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'id' => 'getId',
        'object' => 'getObject',
        'state' => 'getState',
        'type' => 'getType',
        'tokenProvisioningInformation' => 'getTokenProvisioningInformation',
        'card' => 'getCard',
        'bankAccount' => 'getBankAccount',
        'tokenizedCard' => 'getTokenizedCard',
        'issuer' => 'getIssuer',
        'processingInformation' => 'getProcessingInformation',
        'billTo' => 'getBillTo',
        'metadata' => 'getMetadata'
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tokenProvisioningInformation'] = isset($data['tokenProvisioningInformation']) ? $data['tokenProvisioningInformation'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['bankAccount'] = isset($data['bankAccount']) ? $data['bankAccount'] : null;
        $this->container['tokenizedCard'] = isset($data['tokenizedCard']) ? $data['tokenizedCard'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['processingInformation'] = isset($data['processingInformation']) ? $data['processingInformation'] : null;
        $this->container['billTo'] = isset($data['billTo']) ? $data['billTo'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
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
     * @return \CyberSource\Model\TmsEmbeddedInstrumentIdentifierLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \CyberSource\Model\TmsEmbeddedInstrumentIdentifierLinks $links
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
     * @param string $id The Id of the Instrument Identifier Token.
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
     * @param string $object The type.  Possible Values: - instrumentIdentifier
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

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
     * @param string $state Issuers state for the card number. Possible Values: - ACTIVE - CLOSED : The account has been closed.
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * @param string $type The type of Instrument Identifier. Possible Values: - enrollable card - enrollable token
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets tokenProvisioningInformation
     * @return \CyberSource\Model\Ptsv2paymentsTokenInformationTokenProvisioningInformation
     */
    public function getTokenProvisioningInformation()
    {
        return $this->container['tokenProvisioningInformation'];
    }

    /**
     * Sets tokenProvisioningInformation
     * @param \CyberSource\Model\Ptsv2paymentsTokenInformationTokenProvisioningInformation $tokenProvisioningInformation
     * @return $this
     */
    public function setTokenProvisioningInformation($tokenProvisioningInformation)
    {
        $this->container['tokenProvisioningInformation'] = $tokenProvisioningInformation;

        return $this;
    }

    /**
     * Gets card
     * @return \CyberSource\Model\TmsEmbeddedInstrumentIdentifierCard
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     * @param \CyberSource\Model\TmsEmbeddedInstrumentIdentifierCard $card
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets bankAccount
     * @return \CyberSource\Model\TmsEmbeddedInstrumentIdentifierBankAccount
     */
    public function getBankAccount()
    {
        return $this->container['bankAccount'];
    }

    /**
     * Sets bankAccount
     * @param \CyberSource\Model\TmsEmbeddedInstrumentIdentifierBankAccount $bankAccount
     * @return $this
     */
    public function setBankAccount($bankAccount)
    {
        $this->container['bankAccount'] = $bankAccount;

        return $this;
    }

    /**
     * Gets tokenizedCard
     * @return \CyberSource\Model\Tmsv2TokenizedCard
     */
    public function getTokenizedCard()
    {
        return $this->container['tokenizedCard'];
    }

    /**
     * Sets tokenizedCard
     * @param \CyberSource\Model\Tmsv2TokenizedCard $tokenizedCard
     * @return $this
     */
    public function setTokenizedCard($tokenizedCard)
    {
        $this->container['tokenizedCard'] = $tokenizedCard;

        return $this;
    }

    /**
     * Gets issuer
     * @return \CyberSource\Model\TmsEmbeddedInstrumentIdentifierIssuer
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     * @param \CyberSource\Model\TmsEmbeddedInstrumentIdentifierIssuer $issuer
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets processingInformation
     * @return \CyberSource\Model\TmsEmbeddedInstrumentIdentifierProcessingInformation
     */
    public function getProcessingInformation()
    {
        return $this->container['processingInformation'];
    }

    /**
     * Sets processingInformation
     * @param \CyberSource\Model\TmsEmbeddedInstrumentIdentifierProcessingInformation $processingInformation
     * @return $this
     */
    public function setProcessingInformation($processingInformation)
    {
        $this->container['processingInformation'] = $processingInformation;

        return $this;
    }

    /**
     * Gets billTo
     * @return \CyberSource\Model\TmsEmbeddedInstrumentIdentifierBillTo
     */
    public function getBillTo()
    {
        return $this->container['billTo'];
    }

    /**
     * Sets billTo
     * @param \CyberSource\Model\TmsEmbeddedInstrumentIdentifierBillTo $billTo
     * @return $this
     */
    public function setBillTo($billTo)
    {
        $this->container['billTo'] = $billTo;

        return $this;
    }

    /**
     * Gets metadata
     * @return \CyberSource\Model\TmsEmbeddedInstrumentIdentifierMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     * @param \CyberSource\Model\TmsEmbeddedInstrumentIdentifierMetadata $metadata
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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


