<?php
/**
 * VAccountVO
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
 * VAccountVO Class Doc Comment
 *
 * @category Class
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VAccountVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VAccountVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'account_name' => 'string',
        'account_type_id' => 'string',
        'account_type_name' => 'string',
        'goal_asset_size_by_account' => 'double',
        'goal_asset_size_by_account_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => 'uuid',
        'account_name' => null,
        'account_type_id' => 'uuid',
        'account_type_name' => null,
        'goal_asset_size_by_account' => 'double',
        'goal_asset_size_by_account_date' => 'date'
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
        'account_id' => 'account_id',
        'account_name' => 'account_name',
        'account_type_id' => 'account_type_id',
        'account_type_name' => 'account_type_name',
        'goal_asset_size_by_account' => 'goal_asset_size_by_account',
        'goal_asset_size_by_account_date' => 'goal_asset_size_by_account_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'account_name' => 'setAccountName',
        'account_type_id' => 'setAccountTypeId',
        'account_type_name' => 'setAccountTypeName',
        'goal_asset_size_by_account' => 'setGoalAssetSizeByAccount',
        'goal_asset_size_by_account_date' => 'setGoalAssetSizeByAccountDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'account_name' => 'getAccountName',
        'account_type_id' => 'getAccountTypeId',
        'account_type_name' => 'getAccountTypeName',
        'goal_asset_size_by_account' => 'getGoalAssetSizeByAccount',
        'goal_asset_size_by_account_date' => 'getGoalAssetSizeByAccountDate'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['account_type_id'] = isset($data['account_type_id']) ? $data['account_type_id'] : null;
        $this->container['account_type_name'] = isset($data['account_type_name']) ? $data['account_type_name'] : null;
        $this->container['goal_asset_size_by_account'] = isset($data['goal_asset_size_by_account']) ? $data['goal_asset_size_by_account'] : null;
        $this->container['goal_asset_size_by_account_date'] = isset($data['goal_asset_size_by_account_date']) ? $data['goal_asset_size_by_account_date'] : null;
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name account_name
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets account_type_id
     *
     * @return string
     */
    public function getAccountTypeId()
    {
        return $this->container['account_type_id'];
    }

    /**
     * Sets account_type_id
     *
     * @param string $account_type_id account_type_id
     *
     * @return $this
     */
    public function setAccountTypeId($account_type_id)
    {
        $this->container['account_type_id'] = $account_type_id;

        return $this;
    }

    /**
     * Gets account_type_name
     *
     * @return string
     */
    public function getAccountTypeName()
    {
        return $this->container['account_type_name'];
    }

    /**
     * Sets account_type_name
     *
     * @param string $account_type_name account_type_name
     *
     * @return $this
     */
    public function setAccountTypeName($account_type_name)
    {
        $this->container['account_type_name'] = $account_type_name;

        return $this;
    }

    /**
     * Gets goal_asset_size_by_account
     *
     * @return double
     */
    public function getGoalAssetSizeByAccount()
    {
        return $this->container['goal_asset_size_by_account'];
    }

    /**
     * Sets goal_asset_size_by_account
     *
     * @param double $goal_asset_size_by_account goal_asset_size_by_account
     *
     * @return $this
     */
    public function setGoalAssetSizeByAccount($goal_asset_size_by_account)
    {
        $this->container['goal_asset_size_by_account'] = $goal_asset_size_by_account;

        return $this;
    }

    /**
     * Gets goal_asset_size_by_account_date
     *
     * @return \DateTime
     */
    public function getGoalAssetSizeByAccountDate()
    {
        return $this->container['goal_asset_size_by_account_date'];
    }

    /**
     * Sets goal_asset_size_by_account_date
     *
     * @param \DateTime $goal_asset_size_by_account_date goal_asset_size_by_account_date
     *
     * @return $this
     */
    public function setGoalAssetSizeByAccountDate($goal_asset_size_by_account_date)
    {
        $this->container['goal_asset_size_by_account_date'] = $goal_asset_size_by_account_date;

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


