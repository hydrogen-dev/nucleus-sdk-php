<?php
/**
 * PortfolioAssetSizeLog
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
 * OpenAPI spec version: 1.9.2
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
 * PortfolioAssetSizeLog Class Doc Comment
 *
 * @category Class
 * @description PortfolioAssetSizeLog Object
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PortfolioAssetSizeLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PortfolioAssetSizeLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'asset_size' => 'double',
        'asset_size_available' => 'double',
        'asset_size_pending' => 'double',
        'cash_flow' => 'double',
        'create_date' => '\DateTime',
        'currency_code' => 'string',
        'date' => '\DateTime',
        'id' => 'string',
        'model_id' => 'string',
        'portfolio_id' => 'string',
        'secondary_id' => 'string',
        'update_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => 'uuid',
        'asset_size' => 'double',
        'asset_size_available' => 'double',
        'asset_size_pending' => 'double',
        'cash_flow' => 'double',
        'create_date' => 'date-time',
        'currency_code' => null,
        'date' => 'date-time',
        'id' => 'uuid',
        'model_id' => 'uuid',
        'portfolio_id' => 'uuid',
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
        'account_id' => 'account_id',
        'asset_size' => 'asset_size',
        'asset_size_available' => 'asset_size_available',
        'asset_size_pending' => 'asset_size_pending',
        'cash_flow' => 'cash_flow',
        'create_date' => 'create_date',
        'currency_code' => 'currency_code',
        'date' => 'date',
        'id' => 'id',
        'model_id' => 'model_id',
        'portfolio_id' => 'portfolio_id',
        'secondary_id' => 'secondary_id',
        'update_date' => 'update_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'asset_size' => 'setAssetSize',
        'asset_size_available' => 'setAssetSizeAvailable',
        'asset_size_pending' => 'setAssetSizePending',
        'cash_flow' => 'setCashFlow',
        'create_date' => 'setCreateDate',
        'currency_code' => 'setCurrencyCode',
        'date' => 'setDate',
        'id' => 'setId',
        'model_id' => 'setModelId',
        'portfolio_id' => 'setPortfolioId',
        'secondary_id' => 'setSecondaryId',
        'update_date' => 'setUpdateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'asset_size' => 'getAssetSize',
        'asset_size_available' => 'getAssetSizeAvailable',
        'asset_size_pending' => 'getAssetSizePending',
        'cash_flow' => 'getCashFlow',
        'create_date' => 'getCreateDate',
        'currency_code' => 'getCurrencyCode',
        'date' => 'getDate',
        'id' => 'getId',
        'model_id' => 'getModelId',
        'portfolio_id' => 'getPortfolioId',
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['asset_size'] = isset($data['asset_size']) ? $data['asset_size'] : null;
        $this->container['asset_size_available'] = isset($data['asset_size_available']) ? $data['asset_size_available'] : null;
        $this->container['asset_size_pending'] = isset($data['asset_size_pending']) ? $data['asset_size_pending'] : null;
        $this->container['cash_flow'] = isset($data['cash_flow']) ? $data['cash_flow'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['model_id'] = isset($data['model_id']) ? $data['model_id'] : null;
        $this->container['portfolio_id'] = isset($data['portfolio_id']) ? $data['portfolio_id'] : null;
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

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['asset_size'] === null) {
            $invalidProperties[] = "'asset_size' can't be null";
        }
        if ($this->container['cash_flow'] === null) {
            $invalidProperties[] = "'cash_flow' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['model_id'] === null) {
            $invalidProperties[] = "'model_id' can't be null";
        }
        if ($this->container['portfolio_id'] === null) {
            $invalidProperties[] = "'portfolio_id' can't be null";
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
     * @param string $account_id accountId
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets asset_size
     *
     * @return double
     */
    public function getAssetSize()
    {
        return $this->container['asset_size'];
    }

    /**
     * Sets asset_size
     *
     * @param double $asset_size asset_size
     *
     * @return $this
     */
    public function setAssetSize($asset_size)
    {
        $this->container['asset_size'] = $asset_size;

        return $this;
    }

    /**
     * Gets asset_size_available
     *
     * @return double
     */
    public function getAssetSizeAvailable()
    {
        return $this->container['asset_size_available'];
    }

    /**
     * Sets asset_size_available
     *
     * @param double $asset_size_available asset_size_available
     *
     * @return $this
     */
    public function setAssetSizeAvailable($asset_size_available)
    {
        $this->container['asset_size_available'] = $asset_size_available;

        return $this;
    }

    /**
     * Gets asset_size_pending
     *
     * @return double
     */
    public function getAssetSizePending()
    {
        return $this->container['asset_size_pending'];
    }

    /**
     * Sets asset_size_pending
     *
     * @param double $asset_size_pending asset_size_pending
     *
     * @return $this
     */
    public function setAssetSizePending($asset_size_pending)
    {
        $this->container['asset_size_pending'] = $asset_size_pending;

        return $this;
    }

    /**
     * Gets cash_flow
     *
     * @return double
     */
    public function getCashFlow()
    {
        return $this->container['cash_flow'];
    }

    /**
     * Sets cash_flow
     *
     * @param double $cash_flow cash_flow
     *
     * @return $this
     */
    public function setCashFlow($cash_flow)
    {
        $this->container['cash_flow'] = $cash_flow;

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
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * Gets portfolio_id
     *
     * @return string
     */
    public function getPortfolioId()
    {
        return $this->container['portfolio_id'];
    }

    /**
     * Sets portfolio_id
     *
     * @param string $portfolio_id portfolioId
     *
     * @return $this
     */
    public function setPortfolioId($portfolio_id)
    {
        $this->container['portfolio_id'] = $portfolio_id;

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


