<?php
/**
 * InlineResponse2005EmbeddedBatches
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
 * InlineResponse2005EmbeddedBatches Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2005EmbeddedBatches implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_5__embedded_batches';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\CyberSource\Model\InlineResponse2005EmbeddedLinks',
        'batchId' => 'string',
        'batchCreatedDate' => 'string',
        'batchModifiedDate' => 'string',
        'batchSource' => 'string',
        'tokenSource' => 'string',
        'merchantReference' => 'string',
        'batchCaEndpoints' => 'string[]',
        'status' => 'string',
        'totals' => '\CyberSource\Model\InlineResponse2005EmbeddedTotals'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'batchId' => null,
        'batchCreatedDate' => null,
        'batchModifiedDate' => null,
        'batchSource' => null,
        'tokenSource' => null,
        'merchantReference' => null,
        'batchCaEndpoints' => null,
        'status' => null,
        'totals' => null
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
        'batchId' => 'batchId',
        'batchCreatedDate' => 'batchCreatedDate',
        'batchModifiedDate' => 'batchModifiedDate',
        'batchSource' => 'batchSource',
        'tokenSource' => 'tokenSource',
        'merchantReference' => 'merchantReference',
        'batchCaEndpoints' => 'batchCaEndpoints',
        'status' => 'status',
        'totals' => 'totals'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'batchId' => 'setBatchId',
        'batchCreatedDate' => 'setBatchCreatedDate',
        'batchModifiedDate' => 'setBatchModifiedDate',
        'batchSource' => 'setBatchSource',
        'tokenSource' => 'setTokenSource',
        'merchantReference' => 'setMerchantReference',
        'batchCaEndpoints' => 'setBatchCaEndpoints',
        'status' => 'setStatus',
        'totals' => 'setTotals'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'batchId' => 'getBatchId',
        'batchCreatedDate' => 'getBatchCreatedDate',
        'batchModifiedDate' => 'getBatchModifiedDate',
        'batchSource' => 'getBatchSource',
        'tokenSource' => 'getTokenSource',
        'merchantReference' => 'getMerchantReference',
        'batchCaEndpoints' => 'getBatchCaEndpoints',
        'status' => 'getStatus',
        'totals' => 'getTotals'
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
        $this->container['batchId'] = isset($data['batchId']) ? $data['batchId'] : null;
        $this->container['batchCreatedDate'] = isset($data['batchCreatedDate']) ? $data['batchCreatedDate'] : null;
        $this->container['batchModifiedDate'] = isset($data['batchModifiedDate']) ? $data['batchModifiedDate'] : null;
        $this->container['batchSource'] = isset($data['batchSource']) ? $data['batchSource'] : null;
        $this->container['tokenSource'] = isset($data['tokenSource']) ? $data['tokenSource'] : null;
        $this->container['merchantReference'] = isset($data['merchantReference']) ? $data['merchantReference'] : null;
        $this->container['batchCaEndpoints'] = isset($data['batchCaEndpoints']) ? $data['batchCaEndpoints'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['totals'] = isset($data['totals']) ? $data['totals'] : null;
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
     * @return \CyberSource\Model\InlineResponse2005EmbeddedLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \CyberSource\Model\InlineResponse2005EmbeddedLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets batchId
     * @return string
     */
    public function getBatchId()
    {
        return $this->container['batchId'];
    }

    /**
     * Sets batchId
     * @param string $batchId Unique identification number assigned to the submitted request.
     * @return $this
     */
    public function setBatchId($batchId)
    {
        $this->container['batchId'] = $batchId;

        return $this;
    }

    /**
     * Gets batchCreatedDate
     * @return string
     */
    public function getBatchCreatedDate()
    {
        return $this->container['batchCreatedDate'];
    }

    /**
     * Sets batchCreatedDate
     * @param string $batchCreatedDate ISO-8601 format: yyyy-MM-ddTHH:mm:ssZ
     * @return $this
     */
    public function setBatchCreatedDate($batchCreatedDate)
    {
        $this->container['batchCreatedDate'] = $batchCreatedDate;

        return $this;
    }

    /**
     * Gets batchModifiedDate
     * @return string
     */
    public function getBatchModifiedDate()
    {
        return $this->container['batchModifiedDate'];
    }

    /**
     * Sets batchModifiedDate
     * @param string $batchModifiedDate ISO-8601 format: yyyy-MM-ddTHH:mm:ssZ
     * @return $this
     */
    public function setBatchModifiedDate($batchModifiedDate)
    {
        $this->container['batchModifiedDate'] = $batchModifiedDate;

        return $this;
    }

    /**
     * Gets batchSource
     * @return string
     */
    public function getBatchSource()
    {
        return $this->container['batchSource'];
    }

    /**
     * Sets batchSource
     * @param string $batchSource Valid Values:   * SCHEDULER   * TOKEN_API   * CREDIT_CARD_FILE_UPLOAD   * AMEX_REGSITRY   * AMEX_REGISTRY_API   * AMEX_REGISTRY_API_SYNC   * AMEX_MAINTENANCE
     * @return $this
     */
    public function setBatchSource($batchSource)
    {
        $this->container['batchSource'] = $batchSource;

        return $this;
    }

    /**
     * Gets tokenSource
     * @return string
     */
    public function getTokenSource()
    {
        return $this->container['tokenSource'];
    }

    /**
     * Sets tokenSource
     * @param string $tokenSource Valid Values:   * SECURE_STORAGE   * TMS   * CYBERSOURCE
     * @return $this
     */
    public function setTokenSource($tokenSource)
    {
        $this->container['tokenSource'] = $tokenSource;

        return $this;
    }

    /**
     * Gets merchantReference
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->container['merchantReference'];
    }

    /**
     * Sets merchantReference
     * @param string $merchantReference Reference used by merchant to identify batch.
     * @return $this
     */
    public function setMerchantReference($merchantReference)
    {
        $this->container['merchantReference'] = $merchantReference;

        return $this;
    }

    /**
     * Gets batchCaEndpoints
     * @return string[]
     */
    public function getBatchCaEndpoints()
    {
        return $this->container['batchCaEndpoints'];
    }

    /**
     * Sets batchCaEndpoints
     * @param string[] $batchCaEndpoints Valid Values:   * VISA   * MASTERCARD   * AMEX
     * @return $this
     */
    public function setBatchCaEndpoints($batchCaEndpoints)
    {
        $this->container['batchCaEndpoints'] = $batchCaEndpoints;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Valid Values:   * REJECTED   * RECEIVED   * VALIDATED   * DECLINED   * PROCESSING   * COMPLETE
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets totals
     * @return \CyberSource\Model\InlineResponse2005EmbeddedTotals
     */
    public function getTotals()
    {
        return $this->container['totals'];
    }

    /**
     * Sets totals
     * @param \CyberSource\Model\InlineResponse2005EmbeddedTotals $totals
     * @return $this
     */
    public function setTotals($totals)
    {
        $this->container['totals'] = $totals;

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


