<?php
/**
 * CardDetailsVO
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
 * CardDetailsVO Class Doc Comment
 *
 * @category Class
 * @description Card Details Object
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CardDetailsVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CardDetailsVO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'balance' => '\com\hydrogen\nucleus\Model\CardBalanceVO',
        'card_holder_name' => 'string',
        'card_id' => 'string',
        'card_issuance' => 'string',
        'card_name' => 'string',
        'card_network' => 'string',
        'card_type' => 'string',
        'expiry_date' => '\DateTime',
        'mask' => 'string',
        'prepaid_amount' => 'float',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'balance' => null,
        'card_holder_name' => null,
        'card_id' => 'uuid',
        'card_issuance' => null,
        'card_name' => null,
        'card_network' => null,
        'card_type' => null,
        'expiry_date' => 'date',
        'mask' => null,
        'prepaid_amount' => 'float',
        'status' => null
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
        'balance' => 'balance',
        'card_holder_name' => 'card_holder_name',
        'card_id' => 'card_id',
        'card_issuance' => 'card_issuance',
        'card_name' => 'card_name',
        'card_network' => 'card_network',
        'card_type' => 'card_type',
        'expiry_date' => 'expiry_date',
        'mask' => 'mask',
        'prepaid_amount' => 'prepaid_amount',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance' => 'setBalance',
        'card_holder_name' => 'setCardHolderName',
        'card_id' => 'setCardId',
        'card_issuance' => 'setCardIssuance',
        'card_name' => 'setCardName',
        'card_network' => 'setCardNetwork',
        'card_type' => 'setCardType',
        'expiry_date' => 'setExpiryDate',
        'mask' => 'setMask',
        'prepaid_amount' => 'setPrepaidAmount',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance' => 'getBalance',
        'card_holder_name' => 'getCardHolderName',
        'card_id' => 'getCardId',
        'card_issuance' => 'getCardIssuance',
        'card_name' => 'getCardName',
        'card_network' => 'getCardNetwork',
        'card_type' => 'getCardType',
        'expiry_date' => 'getExpiryDate',
        'mask' => 'getMask',
        'prepaid_amount' => 'getPrepaidAmount',
        'status' => 'getStatus'
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
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['card_holder_name'] = isset($data['card_holder_name']) ? $data['card_holder_name'] : null;
        $this->container['card_id'] = isset($data['card_id']) ? $data['card_id'] : null;
        $this->container['card_issuance'] = isset($data['card_issuance']) ? $data['card_issuance'] : null;
        $this->container['card_name'] = isset($data['card_name']) ? $data['card_name'] : null;
        $this->container['card_network'] = isset($data['card_network']) ? $data['card_network'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['mask'] = isset($data['mask']) ? $data['mask'] : null;
        $this->container['prepaid_amount'] = isset($data['prepaid_amount']) ? $data['prepaid_amount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets balance
     *
     * @return \com\hydrogen\nucleus\Model\CardBalanceVO
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \com\hydrogen\nucleus\Model\CardBalanceVO $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets card_holder_name
     *
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->container['card_holder_name'];
    }

    /**
     * Sets card_holder_name
     *
     * @param string $card_holder_name cardHolderName
     *
     * @return $this
     */
    public function setCardHolderName($card_holder_name)
    {
        $this->container['card_holder_name'] = $card_holder_name;

        return $this;
    }

    /**
     * Gets card_id
     *
     * @return string
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     *
     * @param string $card_id cardId
     *
     * @return $this
     */
    public function setCardId($card_id)
    {
        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets card_issuance
     *
     * @return string
     */
    public function getCardIssuance()
    {
        return $this->container['card_issuance'];
    }

    /**
     * Sets card_issuance
     *
     * @param string $card_issuance cardIssuance
     *
     * @return $this
     */
    public function setCardIssuance($card_issuance)
    {
        $this->container['card_issuance'] = $card_issuance;

        return $this;
    }

    /**
     * Gets card_name
     *
     * @return string
     */
    public function getCardName()
    {
        return $this->container['card_name'];
    }

    /**
     * Sets card_name
     *
     * @param string $card_name cardName
     *
     * @return $this
     */
    public function setCardName($card_name)
    {
        $this->container['card_name'] = $card_name;

        return $this;
    }

    /**
     * Gets card_network
     *
     * @return string
     */
    public function getCardNetwork()
    {
        return $this->container['card_network'];
    }

    /**
     * Sets card_network
     *
     * @param string $card_network cardNetwork
     *
     * @return $this
     */
    public function setCardNetwork($card_network)
    {
        $this->container['card_network'] = $card_network;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string $card_type cardType
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime $expiry_date expiryDate
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets mask
     *
     * @return string
     */
    public function getMask()
    {
        return $this->container['mask'];
    }

    /**
     * Sets mask
     *
     * @param string $mask mask
     *
     * @return $this
     */
    public function setMask($mask)
    {
        $this->container['mask'] = $mask;

        return $this;
    }

    /**
     * Gets prepaid_amount
     *
     * @return float
     */
    public function getPrepaidAmount()
    {
        return $this->container['prepaid_amount'];
    }

    /**
     * Sets prepaid_amount
     *
     * @param float $prepaid_amount prepaidAmount
     *
     * @return $this
     */
    public function setPrepaidAmount($prepaid_amount)
    {
        $this->container['prepaid_amount'] = $prepaid_amount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


