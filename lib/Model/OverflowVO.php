<?php
/**
 * OverflowVO
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
 * OpenAPI spec version: 1.9.4
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
 * OverflowVO Class Doc Comment
 *
 * @category Class
 * @description Overflow Object
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OverflowVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OverflowVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'funding_start_date' => '\DateTime',
        'overflow_setting_id' => 'string',
        'update_balances' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'funding_start_date' => 'date',
        'overflow_setting_id' => 'uuid',
        'update_balances' => null
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
        'funding_start_date' => 'funding_start_date',
        'overflow_setting_id' => 'overflow_setting_id',
        'update_balances' => 'update_balances'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'funding_start_date' => 'setFundingStartDate',
        'overflow_setting_id' => 'setOverflowSettingId',
        'update_balances' => 'setUpdateBalances'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'funding_start_date' => 'getFundingStartDate',
        'overflow_setting_id' => 'getOverflowSettingId',
        'update_balances' => 'getUpdateBalances'
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
        $this->container['funding_start_date'] = isset($data['funding_start_date']) ? $data['funding_start_date'] : null;
        $this->container['overflow_setting_id'] = isset($data['overflow_setting_id']) ? $data['overflow_setting_id'] : null;
        $this->container['update_balances'] = isset($data['update_balances']) ? $data['update_balances'] : null;
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
     * Gets funding_start_date
     *
     * @return \DateTime
     */
    public function getFundingStartDate()
    {
        return $this->container['funding_start_date'];
    }

    /**
     * Sets funding_start_date
     *
     * @param \DateTime $funding_start_date fundingStartDate
     *
     * @return $this
     */
    public function setFundingStartDate($funding_start_date)
    {
        $this->container['funding_start_date'] = $funding_start_date;

        return $this;
    }

    /**
     * Gets overflow_setting_id
     *
     * @return string
     */
    public function getOverflowSettingId()
    {
        return $this->container['overflow_setting_id'];
    }

    /**
     * Sets overflow_setting_id
     *
     * @param string $overflow_setting_id overflowSettingId
     *
     * @return $this
     */
    public function setOverflowSettingId($overflow_setting_id)
    {
        $this->container['overflow_setting_id'] = $overflow_setting_id;

        return $this;
    }

    /**
     * Gets update_balances
     *
     * @return bool
     */
    public function getUpdateBalances()
    {
        return $this->container['update_balances'];
    }

    /**
     * Sets update_balances
     *
     * @param bool $update_balances updateBalances
     *
     * @return $this
     */
    public function setUpdateBalances($update_balances)
    {
        $this->container['update_balances'] = $update_balances;

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


