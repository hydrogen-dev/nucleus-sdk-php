<?php
/**
 * AllocationCompositionAggregatedVO
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
 * OpenAPI spec version: 1.9.1
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
 * AllocationCompositionAggregatedVO Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AllocationCompositionAggregatedVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AllocationCompositionAggregatedVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allocation_composition_create_date' => '\DateTime',
        'allocation_composition_date' => '\DateTime',
        'allocation_composition_id' => 'string',
        'allocation_composition_update_date' => '\DateTime',
        'model_category' => 'string',
        'model_current_weight' => 'double',
        'model_description' => 'string',
        'model_holdings' => '\com\hydrogen\nucleus\Model\AllocationCompositionModelHoldingsVO[]',
        'model_id' => 'string',
        'model_name' => 'string',
        'model_secondary_id' => 'string',
        'model_strategic_weight' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allocation_composition_create_date' => 'date-time',
        'allocation_composition_date' => 'date',
        'allocation_composition_id' => 'uuid',
        'allocation_composition_update_date' => 'date-time',
        'model_category' => null,
        'model_current_weight' => 'double',
        'model_description' => null,
        'model_holdings' => null,
        'model_id' => 'uuid',
        'model_name' => null,
        'model_secondary_id' => null,
        'model_strategic_weight' => 'double'
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
        'allocation_composition_create_date' => 'allocation_composition_create_date',
        'allocation_composition_date' => 'allocation_composition_date',
        'allocation_composition_id' => 'allocation_composition_id',
        'allocation_composition_update_date' => 'allocation_composition_update_date',
        'model_category' => 'model_category',
        'model_current_weight' => 'model_current_weight',
        'model_description' => 'model_description',
        'model_holdings' => 'model_holdings',
        'model_id' => 'model_id',
        'model_name' => 'model_name',
        'model_secondary_id' => 'model_secondary_id',
        'model_strategic_weight' => 'model_strategic_weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allocation_composition_create_date' => 'setAllocationCompositionCreateDate',
        'allocation_composition_date' => 'setAllocationCompositionDate',
        'allocation_composition_id' => 'setAllocationCompositionId',
        'allocation_composition_update_date' => 'setAllocationCompositionUpdateDate',
        'model_category' => 'setModelCategory',
        'model_current_weight' => 'setModelCurrentWeight',
        'model_description' => 'setModelDescription',
        'model_holdings' => 'setModelHoldings',
        'model_id' => 'setModelId',
        'model_name' => 'setModelName',
        'model_secondary_id' => 'setModelSecondaryId',
        'model_strategic_weight' => 'setModelStrategicWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allocation_composition_create_date' => 'getAllocationCompositionCreateDate',
        'allocation_composition_date' => 'getAllocationCompositionDate',
        'allocation_composition_id' => 'getAllocationCompositionId',
        'allocation_composition_update_date' => 'getAllocationCompositionUpdateDate',
        'model_category' => 'getModelCategory',
        'model_current_weight' => 'getModelCurrentWeight',
        'model_description' => 'getModelDescription',
        'model_holdings' => 'getModelHoldings',
        'model_id' => 'getModelId',
        'model_name' => 'getModelName',
        'model_secondary_id' => 'getModelSecondaryId',
        'model_strategic_weight' => 'getModelStrategicWeight'
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
        $this->container['allocation_composition_create_date'] = isset($data['allocation_composition_create_date']) ? $data['allocation_composition_create_date'] : null;
        $this->container['allocation_composition_date'] = isset($data['allocation_composition_date']) ? $data['allocation_composition_date'] : null;
        $this->container['allocation_composition_id'] = isset($data['allocation_composition_id']) ? $data['allocation_composition_id'] : null;
        $this->container['allocation_composition_update_date'] = isset($data['allocation_composition_update_date']) ? $data['allocation_composition_update_date'] : null;
        $this->container['model_category'] = isset($data['model_category']) ? $data['model_category'] : null;
        $this->container['model_current_weight'] = isset($data['model_current_weight']) ? $data['model_current_weight'] : null;
        $this->container['model_description'] = isset($data['model_description']) ? $data['model_description'] : null;
        $this->container['model_holdings'] = isset($data['model_holdings']) ? $data['model_holdings'] : null;
        $this->container['model_id'] = isset($data['model_id']) ? $data['model_id'] : null;
        $this->container['model_name'] = isset($data['model_name']) ? $data['model_name'] : null;
        $this->container['model_secondary_id'] = isset($data['model_secondary_id']) ? $data['model_secondary_id'] : null;
        $this->container['model_strategic_weight'] = isset($data['model_strategic_weight']) ? $data['model_strategic_weight'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets allocation_composition_create_date
     *
     * @return \DateTime
     */
    public function getAllocationCompositionCreateDate()
    {
        return $this->container['allocation_composition_create_date'];
    }

    /**
     * Sets allocation_composition_create_date
     *
     * @param \DateTime $allocation_composition_create_date allocation_composition_create_date
     *
     * @return $this
     */
    public function setAllocationCompositionCreateDate($allocation_composition_create_date)
    {
        $this->container['allocation_composition_create_date'] = $allocation_composition_create_date;

        return $this;
    }

    /**
     * Gets allocation_composition_date
     *
     * @return \DateTime
     */
    public function getAllocationCompositionDate()
    {
        return $this->container['allocation_composition_date'];
    }

    /**
     * Sets allocation_composition_date
     *
     * @param \DateTime $allocation_composition_date allocation_composition_date
     *
     * @return $this
     */
    public function setAllocationCompositionDate($allocation_composition_date)
    {
        $this->container['allocation_composition_date'] = $allocation_composition_date;

        return $this;
    }

    /**
     * Gets allocation_composition_id
     *
     * @return string
     */
    public function getAllocationCompositionId()
    {
        return $this->container['allocation_composition_id'];
    }

    /**
     * Sets allocation_composition_id
     *
     * @param string $allocation_composition_id allocation_composition_id
     *
     * @return $this
     */
    public function setAllocationCompositionId($allocation_composition_id)
    {
        $this->container['allocation_composition_id'] = $allocation_composition_id;

        return $this;
    }

    /**
     * Gets allocation_composition_update_date
     *
     * @return \DateTime
     */
    public function getAllocationCompositionUpdateDate()
    {
        return $this->container['allocation_composition_update_date'];
    }

    /**
     * Sets allocation_composition_update_date
     *
     * @param \DateTime $allocation_composition_update_date allocation_composition_update_date
     *
     * @return $this
     */
    public function setAllocationCompositionUpdateDate($allocation_composition_update_date)
    {
        $this->container['allocation_composition_update_date'] = $allocation_composition_update_date;

        return $this;
    }

    /**
     * Gets model_category
     *
     * @return string
     */
    public function getModelCategory()
    {
        return $this->container['model_category'];
    }

    /**
     * Sets model_category
     *
     * @param string $model_category model_category
     *
     * @return $this
     */
    public function setModelCategory($model_category)
    {
        $this->container['model_category'] = $model_category;

        return $this;
    }

    /**
     * Gets model_current_weight
     *
     * @return double
     */
    public function getModelCurrentWeight()
    {
        return $this->container['model_current_weight'];
    }

    /**
     * Sets model_current_weight
     *
     * @param double $model_current_weight model_current_weight
     *
     * @return $this
     */
    public function setModelCurrentWeight($model_current_weight)
    {
        $this->container['model_current_weight'] = $model_current_weight;

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
     * Gets model_holdings
     *
     * @return \com\hydrogen\nucleus\Model\AllocationCompositionModelHoldingsVO[]
     */
    public function getModelHoldings()
    {
        return $this->container['model_holdings'];
    }

    /**
     * Sets model_holdings
     *
     * @param \com\hydrogen\nucleus\Model\AllocationCompositionModelHoldingsVO[] $model_holdings model_holdings
     *
     * @return $this
     */
    public function setModelHoldings($model_holdings)
    {
        $this->container['model_holdings'] = $model_holdings;

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
     * @param string $model_id model_id
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
     * Gets model_secondary_id
     *
     * @return string
     */
    public function getModelSecondaryId()
    {
        return $this->container['model_secondary_id'];
    }

    /**
     * Sets model_secondary_id
     *
     * @param string $model_secondary_id model_secondary_id
     *
     * @return $this
     */
    public function setModelSecondaryId($model_secondary_id)
    {
        $this->container['model_secondary_id'] = $model_secondary_id;

        return $this;
    }

    /**
     * Gets model_strategic_weight
     *
     * @return double
     */
    public function getModelStrategicWeight()
    {
        return $this->container['model_strategic_weight'];
    }

    /**
     * Sets model_strategic_weight
     *
     * @param double $model_strategic_weight model_strategic_weight
     *
     * @return $this
     */
    public function setModelStrategicWeight($model_strategic_weight)
    {
        $this->container['model_strategic_weight'] = $model_strategic_weight;

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


