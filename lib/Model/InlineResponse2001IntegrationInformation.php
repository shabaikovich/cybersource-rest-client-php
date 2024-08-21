<?php
/**
 * InlineResponse2001IntegrationInformation
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
 * InlineResponse2001IntegrationInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2001IntegrationInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_1_integrationInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'oauth2' => '\CyberSource\Model\Boardingv1registrationsIntegrationInformationOauth2[]',
        'tenantConfigurations' => '\CyberSource\Model\InlineResponse2001IntegrationInformationTenantConfigurations[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'oauth2' => null,
        'tenantConfigurations' => null
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
        'oauth2' => 'oauth2',
        'tenantConfigurations' => 'tenantConfigurations'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'oauth2' => 'setOauth2',
        'tenantConfigurations' => 'setTenantConfigurations'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'oauth2' => 'getOauth2',
        'tenantConfigurations' => 'getTenantConfigurations'
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
        $this->container['oauth2'] = isset($data['oauth2']) ? $data['oauth2'] : null;
        $this->container['tenantConfigurations'] = isset($data['tenantConfigurations']) ? $data['tenantConfigurations'] : null;
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
     * Gets oauth2
     * @return \CyberSource\Model\Boardingv1registrationsIntegrationInformationOauth2[]
     */
    public function getOauth2()
    {
        return $this->container['oauth2'];
    }

    /**
     * Sets oauth2
     * @param \CyberSource\Model\Boardingv1registrationsIntegrationInformationOauth2[] $oauth2
     * @return $this
     */
    public function setOauth2($oauth2)
    {
        $this->container['oauth2'] = $oauth2;

        return $this;
    }

    /**
     * Gets tenantConfigurations
     * @return \CyberSource\Model\InlineResponse2001IntegrationInformationTenantConfigurations[]
     */
    public function getTenantConfigurations()
    {
        return $this->container['tenantConfigurations'];
    }

    /**
     * Sets tenantConfigurations
     * @param \CyberSource\Model\InlineResponse2001IntegrationInformationTenantConfigurations[] $tenantConfigurations tenantConfigurations is an array of objects that includes the tenant information this merchant is associated with.
     * @return $this
     */
    public function setTenantConfigurations($tenantConfigurations)
    {
        $this->container['tenantConfigurations'] = $tenantConfigurations;

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


