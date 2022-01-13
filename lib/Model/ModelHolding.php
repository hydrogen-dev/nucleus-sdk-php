<?php
/**
 * ModelHolding
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
 * Swagger Codegen version: 2.4.19
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
 * ModelHolding Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelHolding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModelHolding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create_date' => '\DateTime',
        'current_weight' => 'double',
        'date' => '\DateTime',
        'drift_factor' => 'float',
        'id' => 'string',
        'is_cash' => 'bool',
        'is_initial_holding' => 'bool',
        'is_safe_security' => 'bool',
        'metadata' => 'map[string,string]',
        'model_description' => 'string',
        'model_id' => 'string',
        'model_name' => 'string',
        'model_weight' => 'double',
        'sec_price' => 'double',
        'secondary_id' => 'string',
        'security_id' => 'string',
        'strategic_weight' => 'double',
        'update_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create_date' => 'date-time',
        'current_weight' => 'double',
        'date' => 'date',
        'drift_factor' => 'float',
        'id' => 'uuid',
        'is_cash' => null,
        'is_initial_holding' => null,
        'is_safe_security' => null,
        'metadata' => null,
        'model_description' => null,
        'model_id' => 'uuid',
        'model_name' => null,
        'model_weight' => 'double',
        'sec_price' => 'double',
        'secondary_id' => null,
        'security_id' => 'uuid',
        'strategic_weight' => 'double',
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
        'create_date' => 'create_date',
        'current_weight' => 'current_weight',
        'date' => 'date',
        'drift_factor' => 'drift_factor',
        'id' => 'id',
        'is_cash' => 'is_cash',
        'is_initial_holding' => 'is_initial_holding',
        'is_safe_security' => 'is_safe_security',
        'metadata' => 'metadata',
        'model_description' => 'model_description',
        'model_id' => 'model_id',
        'model_name' => 'model_name',
        'model_weight' => 'model_weight',
        'sec_price' => 'sec_price',
        'secondary_id' => 'secondary_id',
        'security_id' => 'security_id',
        'strategic_weight' => 'strategic_weight',
        'update_date' => 'update_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_date' => 'setCreateDate',
        'current_weight' => 'setCurrentWeight',
        'date' => 'setDate',
        'drift_factor' => 'setDriftFactor',
        'id' => 'setId',
        'is_cash' => 'setIsCash',
        'is_initial_holding' => 'setIsInitialHolding',
        'is_safe_security' => 'setIsSafeSecurity',
        'metadata' => 'setMetadata',
        'model_description' => 'setModelDescription',
        'model_id' => 'setModelId',
        'model_name' => 'setModelName',
        'model_weight' => 'setModelWeight',
        'sec_price' => 'setSecPrice',
        'secondary_id' => 'setSecondaryId',
        'security_id' => 'setSecurityId',
        'strategic_weight' => 'setStrategicWeight',
        'update_date' => 'setUpdateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_date' => 'getCreateDate',
        'current_weight' => 'getCurrentWeight',
        'date' => 'getDate',
        'drift_factor' => 'getDriftFactor',
        'id' => 'getId',
        'is_cash' => 'getIsCash',
        'is_initial_holding' => 'getIsInitialHolding',
        'is_safe_security' => 'getIsSafeSecurity',
        'metadata' => 'getMetadata',
        'model_description' => 'getModelDescription',
        'model_id' => 'getModelId',
        'model_name' => 'getModelName',
        'model_weight' => 'getModelWeight',
        'sec_price' => 'getSecPrice',
        'secondary_id' => 'getSecondaryId',
        'security_id' => 'getSecurityId',
        'strategic_weight' => 'getStrategicWeight',
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
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['current_weight'] = isset($data['current_weight']) ? $data['current_weight'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['drift_factor'] = isset($data['drift_factor']) ? $data['drift_factor'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_cash'] = isset($data['is_cash']) ? $data['is_cash'] : null;
        $this->container['is_initial_holding'] = isset($data['is_initial_holding']) ? $data['is_initial_holding'] : null;
        $this->container['is_safe_security'] = isset($data['is_safe_security']) ? $data['is_safe_security'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['model_description'] = isset($data['model_description']) ? $data['model_description'] : null;
        $this->container['model_id'] = isset($data['model_id']) ? $data['model_id'] : null;
        $this->container['model_name'] = isset($data['model_name']) ? $data['model_name'] : null;
        $this->container['model_weight'] = isset($data['model_weight']) ? $data['model_weight'] : null;
        $this->container['sec_price'] = isset($data['sec_price']) ? $data['sec_price'] : null;
        $this->container['secondary_id'] = isset($data['secondary_id']) ? $data['secondary_id'] : null;
        $this->container['security_id'] = isset($data['security_id']) ? $data['security_id'] : null;
        $this->container['strategic_weight'] = isset($data['strategic_weight']) ? $data['strategic_weight'] : null;
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

        if ($this->container['current_weight'] === null) {
            $invalidProperties[] = "'current_weight' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['model_id'] === null) {
            $invalidProperties[] = "'model_id' can't be null";
        }
        if ($this->container['security_id'] === null) {
            $invalidProperties[] = "'security_id' can't be null";
        }
        if ($this->container['strategic_weight'] === null) {
            $invalidProperties[] = "'strategic_weight' can't be null";
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
     * Gets current_weight
     *
     * @return double
     */
    public function getCurrentWeight()
    {
        return $this->container['current_weight'];
    }

    /**
     * Sets current_weight
     *
     * @param double $current_weight Model Holding current weight
     *
     * @return $this
     */
    public function setCurrentWeight($current_weight)
    {
        $this->container['current_weight'] = $current_weight;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Model Holding date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets drift_factor
     *
     * @return float
     */
    public function getDriftFactor()
    {
        return $this->container['drift_factor'];
    }

    /**
     * Sets drift_factor
     *
     * @param float $drift_factor driftFactor
     *
     * @return $this
     */
    public function setDriftFactor($drift_factor)
    {
        $this->container['drift_factor'] = $drift_factor;

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
     * Gets is_cash
     *
     * @return bool
     */
    public function getIsCash()
    {
        return $this->container['is_cash'];
    }

    /**
     * Sets is_cash
     *
     * @param bool $is_cash isCash
     *
     * @return $this
     */
    public function setIsCash($is_cash)
    {
        $this->container['is_cash'] = $is_cash;

        return $this;
    }

    /**
     * Gets is_initial_holding
     *
     * @return bool
     */
    public function getIsInitialHolding()
    {
        return $this->container['is_initial_holding'];
    }

    /**
     * Sets is_initial_holding
     *
     * @param bool $is_initial_holding isInitialHolding
     *
     * @return $this
     */
    public function setIsInitialHolding($is_initial_holding)
    {
        $this->container['is_initial_holding'] = $is_initial_holding;

        return $this;
    }

    /**
     * Gets is_safe_security
     *
     * @return bool
     */
    public function getIsSafeSecurity()
    {
        return $this->container['is_safe_security'];
    }

    /**
     * Sets is_safe_security
     *
     * @param bool $is_safe_security isSafeSecurity
     *
     * @return $this
     */
    public function setIsSafeSecurity($is_safe_security)
    {
        $this->container['is_safe_security'] = $is_safe_security;

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
     * Gets model_description
     *
     * @return string
     */
    public function getModelDescription()
    {
        return $this->container['model_description'];
    }

    /**
     * Sets model_description
     *
     * @param string $model_description model_description
     *
     * @return $this
     */
    public function setModelDescription($model_description)
    {
        $this->container['model_description'] = $model_description;

        return $this;
    }

    /**
     * Gets model_id
     *
     * @return string
     */
    public function getModelId()
    {
        return $this->container['model_id'];
    }

    /**
     * Sets model_id
     *
     * @param string $model_id modelId
     *
     * @return $this
     */
    public function setModelId($model_id)
    {
        $this->container['model_id'] = $model_id;

        return $this;
    }

    /**
     * Gets model_name
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param string $model_name model_name
     *
     * @return $this
     */
    public function setModelName($model_name)
    {
        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets model_weight
     *
     * @return double
     */
    public function getModelWeight()
    {
        return $this->container['model_weight'];
    }

    /**
     * Sets model_weight
     *
     * @param double $model_weight model_weight
     *
     * @return $this
     */
    public function setModelWeight($model_weight)
    {
        $this->container['model_weight'] = $model_weight;

        return $this;
    }

    /**
     * Gets sec_price
     *
     * @return double
     */
    public function getSecPrice()
    {
        return $this->container['sec_price'];
    }

    /**
     * Sets sec_price
     *
     * @param double $sec_price sec_price
     *
     * @return $this
     */
    public function setSecPrice($sec_price)
    {
        $this->container['sec_price'] = $sec_price;

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
     * Gets security_id
     *
     * @return string
     */
    public function getSecurityId()
    {
        return $this->container['security_id'];
    }

    /**
     * Sets security_id
     *
     * @param string $security_id securityId
     *
     * @return $this
     */
    public function setSecurityId($security_id)
    {
        $this->container['security_id'] = $security_id;

        return $this;
    }

    /**
     * Gets strategic_weight
     *
     * @return double
     */
    public function getStrategicWeight()
    {
        return $this->container['strategic_weight'];
    }

    /**
     * Sets strategic_weight
     *
     * @param double $strategic_weight Model Holding strategicWeight
     *
     * @return $this
     */
    public function setStrategicWeight($strategic_weight)
    {
        $this->container['strategic_weight'] = $strategic_weight;

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


