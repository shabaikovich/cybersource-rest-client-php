<?php
/**
 * InlineResponse2005EmbeddedTotals
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
 * InlineResponse2005EmbeddedTotals Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2005EmbeddedTotals implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_5__embedded_totals';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'acceptedRecords' => 'int',
        'rejectedRecords' => 'int',
        'updatedRecords' => 'int',
        'caResponses' => 'int',
        'caResponsesOmitted' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'acceptedRecords' => null,
        'rejectedRecords' => null,
        'updatedRecords' => null,
        'caResponses' => null,
        'caResponsesOmitted' => null
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
        'acceptedRecords' => 'acceptedRecords',
        'rejectedRecords' => 'rejectedRecords',
        'updatedRecords' => 'updatedRecords',
        'caResponses' => 'caResponses',
        'caResponsesOmitted' => 'caResponsesOmitted'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'acceptedRecords' => 'setAcceptedRecords',
        'rejectedRecords' => 'setRejectedRecords',
        'updatedRecords' => 'setUpdatedRecords',
        'caResponses' => 'setCaResponses',
        'caResponsesOmitted' => 'setCaResponsesOmitted'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'acceptedRecords' => 'getAcceptedRecords',
        'rejectedRecords' => 'getRejectedRecords',
        'updatedRecords' => 'getUpdatedRecords',
        'caResponses' => 'getCaResponses',
        'caResponsesOmitted' => 'getCaResponsesOmitted'
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
        $this->container['acceptedRecords'] = isset($data['acceptedRecords']) ? $data['acceptedRecords'] : null;
        $this->container['rejectedRecords'] = isset($data['rejectedRecords']) ? $data['rejectedRecords'] : null;
        $this->container['updatedRecords'] = isset($data['updatedRecords']) ? $data['updatedRecords'] : null;
        $this->container['caResponses'] = isset($data['caResponses']) ? $data['caResponses'] : null;
        $this->container['caResponsesOmitted'] = isset($data['caResponsesOmitted']) ? $data['caResponsesOmitted'] : null;
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
     * Gets acceptedRecords
     * @return int
     */
    public function getAcceptedRecords()
    {
        return $this->container['acceptedRecords'];
    }

    /**
     * Sets acceptedRecords
     * @param int $acceptedRecords
     * @return $this
     */
    public function setAcceptedRecords($acceptedRecords)
    {
        $this->container['acceptedRecords'] = $acceptedRecords;

        return $this;
    }

    /**
     * Gets rejectedRecords
     * @return int
     */
    public function getRejectedRecords()
    {
        return $this->container['rejectedRecords'];
    }

    /**
     * Sets rejectedRecords
     * @param int $rejectedRecords
     * @return $this
     */
    public function setRejectedRecords($rejectedRecords)
    {
        $this->container['rejectedRecords'] = $rejectedRecords;

        return $this;
    }

    /**
     * Gets updatedRecords
     * @return int
     */
    public function getUpdatedRecords()
    {
        return $this->container['updatedRecords'];
    }

    /**
     * Sets updatedRecords
     * @param int $updatedRecords
     * @return $this
     */
    public function setUpdatedRecords($updatedRecords)
    {
        $this->container['updatedRecords'] = $updatedRecords;

        return $this;
    }

    /**
     * Gets caResponses
     * @return int
     */
    public function getCaResponses()
    {
        return $this->container['caResponses'];
    }

    /**
     * Sets caResponses
     * @param int $caResponses
     * @return $this
     */
    public function setCaResponses($caResponses)
    {
        $this->container['caResponses'] = $caResponses;

        return $this;
    }

    /**
     * Gets caResponsesOmitted
     * @return int
     */
    public function getCaResponsesOmitted()
    {
        return $this->container['caResponsesOmitted'];
    }

    /**
     * Sets caResponsesOmitted
     * @param int $caResponsesOmitted
     * @return $this
     */
    public function setCaResponsesOmitted($caResponsesOmitted)
    {
        $this->container['caResponsesOmitted'] = $caResponsesOmitted;

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


