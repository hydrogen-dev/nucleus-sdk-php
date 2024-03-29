<?php
/**
 * SpendingControl
 *
 * PHP version 5
 *
 * @category Class
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydrogen Nucleus API
 *
 * The Hydrogen Nucleus API
 *
 * OpenAPI spec version: 1.9.5
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com\hydrogen\nucleus\Model;

use \ArrayAccess;
use \com\hydrogen\nucleus\ObjectSerializer;

/**
 * SpendingControl Class Doc Comment
 *
 * @category Class
 * @description SpendingControl Object
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SpendingControl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SpendingControl';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_group' => 'string',
        'client_id' => 'string',
        'control_scope' => 'string',
        'control_type' => 'string',
        'control_values' => 'string[]',
        'create_date' => '\DateTime',
        'currency_code' => 'string',
        'description' => 'string',
        'frequency' => 'int',
        'frequency_unit' => 'string',
        'id' => 'string',
        'is_active' => 'bool',
        'limit_value' => 'double',
        'metadata' => 'map[string,string]',
        'secondary_id' => 'string',
        'update_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_group' => null,
        'client_id' => 'uuid',
        'control_scope' => null,
        'control_type' => null,
        'control_values' => null,
        'create_date' => 'date-time',
        'currency_code' => null,
        'description' => null,
        'frequency' => 'int32',
        'frequency_unit' => null,
        'id' => 'uuid',
        'is_active' => null,
        'limit_value' => 'double',
        'metadata' => null,
        'secondary_id' => null,
        'update_date' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'client_group' => 'client_group',
        'client_id' => 'client_id',
        'control_scope' => 'control_scope',
        'control_type' => 'control_type',
        'control_values' => 'control_values',
        'create_date' => 'create_date',
        'currency_code' => 'currency_code',
        'description' => 'description',
        'frequency' => 'frequency',
        'frequency_unit' => 'frequency_unit',
        'id' => 'id',
        'is_active' => 'is_active',
        'limit_value' => 'limit_value',
        'metadata' => 'metadata',
        'secondary_id' => 'secondary_id',
        'update_date' => 'update_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_group' => 'setClientGroup',
        'client_id' => 'setClientId',
        'control_scope' => 'setControlScope',
        'control_type' => 'setControlType',
        'control_values' => 'setControlValues',
        'create_date' => 'setCreateDate',
        'currency_code' => 'setCurrencyCode',
        'description' => 'setDescription',
        'frequency' => 'setFrequency',
        'frequency_unit' => 'setFrequencyUnit',
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'limit_value' => 'setLimitValue',
        'metadata' => 'setMetadata',
        'secondary_id' => 'setSecondaryId',
        'update_date' => 'setUpdateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_group' => 'getClientGroup',
        'client_id' => 'getClientId',
        'control_scope' => 'getControlScope',
        'control_type' => 'getControlType',
        'control_values' => 'getControlValues',
        'create_date' => 'getCreateDate',
        'currency_code' => 'getCurrencyCode',
        'description' => 'getDescription',
        'frequency' => 'getFrequency',
        'frequency_unit' => 'getFrequencyUnit',
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'limit_value' => 'getLimitValue',
        'metadata' => 'getMetadata',
        'secondary_id' => 'getSecondaryId',
        'update_date' => 'getUpdateDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['client_group'] = isset($data['client_group']) ? $data['client_group'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['control_scope'] = isset($data['control_scope']) ? $data['control_scope'] : null;
        $this->container['control_type'] = isset($data['control_type']) ? $data['control_type'] : null;
        $this->container['control_values'] = isset($data['control_values']) ? $data['control_values'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['frequency_unit'] = isset($data['frequency_unit']) ? $data['frequency_unit'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['limit_value'] = isset($data['limit_value']) ? $data['limit_value'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['secondary_id'] = isset($data['secondary_id']) ? $data['secondary_id'] : null;
        $this->container['update_date'] = isset($data['update_date']) ? $data['update_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['control_scope'] === null) {
            $invalidProperties[] = "'control_scope' can't be null";
        }
        if ($this->container['control_type'] === null) {
            $invalidProperties[] = "'control_type' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets client_group
     *
     * @return string
     */
    public function getClientGroup()
    {
        return $this->container['client_group'];
    }

    /**
     * Sets client_group
     *
     * @param string $client_group client_group
     *
     * @return $this
     */
    public function setClientGroup($client_group)
    {
        $this->container['client_group'] = $client_group;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id client_id
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets control_scope
     *
     * @return string
     */
    public function getControlScope()
    {
        return $this->container['control_scope'];
    }

    /**
     * Sets control_scope
     *
     * @param string $control_scope controlScope
     *
     * @return $this
     */
    public function setControlScope($control_scope)
    {
        $this->container['control_scope'] = $control_scope;

        return $this;
    }

    /**
     * Gets control_type
     *
     * @return string
     */
    public function getControlType()
    {
        return $this->container['control_type'];
    }

    /**
     * Sets control_type
     *
     * @param string $control_type controlType
     *
     * @return $this
     */
    public function setControlType($control_type)
    {
        $this->container['control_type'] = $control_type;

        return $this;
    }

    /**
     * Gets control_values
     *
     * @return string[]
     */
    public function getControlValues()
    {
        return $this->container['control_values'];
    }

    /**
     * Sets control_values
     *
     * @param string[] $control_values control_values
     *
     * @return $this
     */
    public function setControlValues($control_values)
    {
        $this->container['control_values'] = $control_values;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return int
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param int $frequency frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets frequency_unit
     *
     * @return string
     */
    public function getFrequencyUnit()
    {
        return $this->container['frequency_unit'];
    }

    /**
     * Sets frequency_unit
     *
     * @param string $frequency_unit frequency_unit
     *
     * @return $this
     */
    public function setFrequencyUnit($frequency_unit)
    {
        $this->container['frequency_unit'] = $frequency_unit;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets limit_value
     *
     * @return double
     */
    public function getLimitValue()
    {
        return $this->container['limit_value'];
    }

    /**
     * Sets limit_value
     *
     * @param double $limit_value limitValue
     *
     * @return $this
     */
    public function setLimitValue($limit_value)
    {
        $this->container['limit_value'] = $limit_value;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return map[string,string]
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param map[string,string] $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets secondary_id
     *
     * @return string
     */
    public function getSecondaryId()
    {
        return $this->container['secondary_id'];
    }

    /**
     * Sets secondary_id
     *
     * @param string $secondary_id secondary_id
     *
     * @return $this
     */
    public function setSecondaryId($secondary_id)
    {
        $this->container['secondary_id'] = $secondary_id;

        return $this;
    }

    /**
     * Gets update_date
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->container['update_date'];
    }

    /**
     * Sets update_date
     *
     * @param \DateTime $update_date update_date
     *
     * @return $this
     */
    public function setUpdateDate($update_date)
    {
        $this->container['update_date'] = $update_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


