<?php
/**
 * Webhook
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
 * OpenAPI spec version: 1.9.3
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
 * Webhook Class Doc Comment
 *
 * @category Class
 * @description Webhook Object
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Webhook implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Webhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'atom_service' => 'string[]',
        'create_date' => '\DateTime',
        'id' => 'string',
        'is_active' => 'bool',
        'secondary_id' => 'string',
        'secret' => 'string',
        'update_date' => '\DateTime',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'atom_service' => null,
        'create_date' => 'date-time',
        'id' => 'uuid',
        'is_active' => null,
        'secondary_id' => null,
        'secret' => null,
        'update_date' => 'date-time',
        'url' => null
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
        'atom_service' => 'atom_service',
        'create_date' => 'create_date',
        'id' => 'id',
        'is_active' => 'is_active',
        'secondary_id' => 'secondary_id',
        'secret' => 'secret',
        'update_date' => 'update_date',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'atom_service' => 'setAtomService',
        'create_date' => 'setCreateDate',
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'secondary_id' => 'setSecondaryId',
        'secret' => 'setSecret',
        'update_date' => 'setUpdateDate',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'atom_service' => 'getAtomService',
        'create_date' => 'getCreateDate',
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'secondary_id' => 'getSecondaryId',
        'secret' => 'getSecret',
        'update_date' => 'getUpdateDate',
        'url' => 'getUrl'
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

    const ATOM_SERVICE_CLIENT = 'client';
    const ATOM_SERVICE_CLIENT_STATUS = 'client_status';
    const ATOM_SERVICE_ACCOUNT_STATUS = 'account_status';
    const ATOM_SERVICE_ACCOUNT = 'account';
    const ATOM_SERVICE_CARD = 'card';
    const ATOM_SERVICE_CARD_STATUS = 'card_status';
    const ATOM_SERVICE_PORTFOLIO_ASSET_SIZE = 'portfolio_asset_size';
    const ATOM_SERVICE_PORTFOLIO_TRANSACTION = 'portfolio_transaction';
    const ATOM_SERVICE_PORTFOLIO_TRANSACTION_STATUS = 'portfolio_transaction_status';
    const ATOM_SERVICE_PORTFOLIO_HOLDING = 'portfolio_holding';
    const ATOM_SERVICE_AGGREGATION_ACCOUNT = 'aggregation_account';
    const ATOM_SERVICE_AGGREGATION_ACCOUNT_STATUS = 'aggregation_account_status';
    const ATOM_SERVICE_NOTIFICATION_CLIENT = 'notification_client';
    const ATOM_SERVICE_AGGREGATION_ACCOUNT_BALANCE = 'aggregation_account_balance';
    const ATOM_SERVICE_AUDIT_LOG = 'audit_log';
    const ATOM_SERVICE_SUPPORT_TICKET = 'support_ticket';
    const ATOM_SERVICE_FEATURE_TRACK = 'feature_track';
    const ATOM_SERVICE_AGGREGATION_ACCOUNT_TRANSACTION = 'aggregation_account_transaction';
    const ATOM_SERVICE_AGGREGATION_ACCOUNT_TRANSACTION_STATUS = 'aggregation_account_transaction_status';
    const ATOM_SERVICE_AGGREGATION_ACCOUNT_HOLDING = 'aggregation_account_holding';
    const ATOM_SERVICE_ORDER_TRACK = 'order_track';
    const ATOM_SERVICE_FUNDING = 'funding';
    const ATOM_SERVICE_FUNDING_STATUS = 'funding_status';
    const ATOM_SERVICE_BUDGET = 'budget';
    const ATOM_SERVICE_DOCUMENT = 'document';
    const ATOM_SERVICE_CLIENT_RESPONSE = 'client_response';
    const ATOM_SERVICE_CLIENT_VERIFIED = 'client_verified';
    const ATOM_SERVICE_DOCUMENT_VERIFIED = 'document_verified';
    const ATOM_SERVICE_BANK_LINK_VERIFIED = 'bank_link_verified';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAtomServiceAllowableValues()
    {
        return [
            self::ATOM_SERVICE_CLIENT,
            self::ATOM_SERVICE_CLIENT_STATUS,
            self::ATOM_SERVICE_ACCOUNT_STATUS,
            self::ATOM_SERVICE_ACCOUNT,
            self::ATOM_SERVICE_CARD,
            self::ATOM_SERVICE_CARD_STATUS,
            self::ATOM_SERVICE_PORTFOLIO_ASSET_SIZE,
            self::ATOM_SERVICE_PORTFOLIO_TRANSACTION,
            self::ATOM_SERVICE_PORTFOLIO_TRANSACTION_STATUS,
            self::ATOM_SERVICE_PORTFOLIO_HOLDING,
            self::ATOM_SERVICE_AGGREGATION_ACCOUNT,
            self::ATOM_SERVICE_AGGREGATION_ACCOUNT_STATUS,
            self::ATOM_SERVICE_NOTIFICATION_CLIENT,
            self::ATOM_SERVICE_AGGREGATION_ACCOUNT_BALANCE,
            self::ATOM_SERVICE_AUDIT_LOG,
            self::ATOM_SERVICE_SUPPORT_TICKET,
            self::ATOM_SERVICE_FEATURE_TRACK,
            self::ATOM_SERVICE_AGGREGATION_ACCOUNT_TRANSACTION,
            self::ATOM_SERVICE_AGGREGATION_ACCOUNT_TRANSACTION_STATUS,
            self::ATOM_SERVICE_AGGREGATION_ACCOUNT_HOLDING,
            self::ATOM_SERVICE_ORDER_TRACK,
            self::ATOM_SERVICE_FUNDING,
            self::ATOM_SERVICE_FUNDING_STATUS,
            self::ATOM_SERVICE_BUDGET,
            self::ATOM_SERVICE_DOCUMENT,
            self::ATOM_SERVICE_CLIENT_RESPONSE,
            self::ATOM_SERVICE_CLIENT_VERIFIED,
            self::ATOM_SERVICE_DOCUMENT_VERIFIED,
            self::ATOM_SERVICE_BANK_LINK_VERIFIED,
        ];
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
        $this->container['atom_service'] = isset($data['atom_service']) ? $data['atom_service'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['secondary_id'] = isset($data['secondary_id']) ? $data['secondary_id'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
        $this->container['update_date'] = isset($data['update_date']) ? $data['update_date'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
     * Gets atom_service
     *
     * @return string[]
     */
    public function getAtomService()
    {
        return $this->container['atom_service'];
    }

    /**
     * Sets atom_service
     *
     * @param string[] $atom_service atom_service
     *
     * @return $this
     */
    public function setAtomService($atom_service)
    {
        $allowedValues = $this->getAtomServiceAllowableValues();
        if (!is_null($atom_service) && array_diff($atom_service, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'atom_service', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['atom_service'] = $atom_service;

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
     * @param bool $is_active isActive
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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
     * Gets secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     *
     * @param string $secret secret
     *
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;

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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


