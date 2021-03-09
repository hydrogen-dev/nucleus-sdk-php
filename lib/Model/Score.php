<?php
/**
 * Score
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
 * OpenAPI spec version: 1.8.0
 * Contact: info@hydrogenplatform.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
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
 * Score Class Doc Comment
 *
 * @category Class
 * @description Score Object
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Score implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Score';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_id' => 'string',
        'allocation_id' => 'string',
        'benchmark_id' => 'string',
        'client_id' => 'string',
        'create_date' => '\DateTime',
        'goal_id' => 'string',
        'id' => 'string',
        'metadata' => 'map[string,string]',
        'model_id' => 'string',
        'portfolio_id' => 'string',
        'score_time_stamp' => '\DateTime',
        'score_type' => 'string',
        'score_value' => 'string',
        'secondary_id' => 'string',
        'security_id' => 'string',
        'update_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_id' => 'uuid',
        'allocation_id' => 'uuid',
        'benchmark_id' => 'uuid',
        'client_id' => 'uuid',
        'create_date' => 'date-time',
        'goal_id' => 'uuid',
        'id' => 'uuid',
        'metadata' => null,
        'model_id' => 'uuid',
        'portfolio_id' => 'uuid',
        'score_time_stamp' => 'date-time',
        'score_type' => null,
        'score_value' => null,
        'secondary_id' => null,
        'security_id' => 'uuid',
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
        'allocation_id' => 'allocation_id',
        'benchmark_id' => 'benchmark_id',
        'client_id' => 'client_id',
        'create_date' => 'create_date',
        'goal_id' => 'goal_id',
        'id' => 'id',
        'metadata' => 'metadata',
        'model_id' => 'model_id',
        'portfolio_id' => 'portfolio_id',
        'score_time_stamp' => 'score_time_stamp',
        'score_type' => 'score_type',
        'score_value' => 'score_value',
        'secondary_id' => 'secondary_id',
        'security_id' => 'security_id',
        'update_date' => 'update_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'allocation_id' => 'setAllocationId',
        'benchmark_id' => 'setBenchmarkId',
        'client_id' => 'setClientId',
        'create_date' => 'setCreateDate',
        'goal_id' => 'setGoalId',
        'id' => 'setId',
        'metadata' => 'setMetadata',
        'model_id' => 'setModelId',
        'portfolio_id' => 'setPortfolioId',
        'score_time_stamp' => 'setScoreTimeStamp',
        'score_type' => 'setScoreType',
        'score_value' => 'setScoreValue',
        'secondary_id' => 'setSecondaryId',
        'security_id' => 'setSecurityId',
        'update_date' => 'setUpdateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'allocation_id' => 'getAllocationId',
        'benchmark_id' => 'getBenchmarkId',
        'client_id' => 'getClientId',
        'create_date' => 'getCreateDate',
        'goal_id' => 'getGoalId',
        'id' => 'getId',
        'metadata' => 'getMetadata',
        'model_id' => 'getModelId',
        'portfolio_id' => 'getPortfolioId',
        'score_time_stamp' => 'getScoreTimeStamp',
        'score_type' => 'getScoreType',
        'score_value' => 'getScoreValue',
        'secondary_id' => 'getSecondaryId',
        'security_id' => 'getSecurityId',
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

    const SCORE_TYPE_GOAL_ACHIEVEMENT_SCORE = 'goal_achievement_score';
    const SCORE_TYPE_PORTFOLIO_OPTIMIZATION_SCORE = 'portfolio_optimization_score';
    const SCORE_TYPE_CREDIT_SCORE = 'credit_score';
    const SCORE_TYPE_DIMENSIONAL_RISK_SCORE = 'dimensional_risk_score';
    const SCORE_TYPE_DIVERSIFICATION_SCORE = 'diversification_score';
    const SCORE_TYPE_RISK_SCORE = 'risk_score';
    const SCORE_TYPE_RISK_PROFILE = 'risk_profile';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScoreTypeAllowableValues()
    {
        return [
            self::SCORE_TYPE_GOAL_ACHIEVEMENT_SCORE,
            self::SCORE_TYPE_PORTFOLIO_OPTIMIZATION_SCORE,
            self::SCORE_TYPE_CREDIT_SCORE,
            self::SCORE_TYPE_DIMENSIONAL_RISK_SCORE,
            self::SCORE_TYPE_DIVERSIFICATION_SCORE,
            self::SCORE_TYPE_RISK_SCORE,
            self::SCORE_TYPE_RISK_PROFILE,
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['allocation_id'] = isset($data['allocation_id']) ? $data['allocation_id'] : null;
        $this->container['benchmark_id'] = isset($data['benchmark_id']) ? $data['benchmark_id'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['goal_id'] = isset($data['goal_id']) ? $data['goal_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['model_id'] = isset($data['model_id']) ? $data['model_id'] : null;
        $this->container['portfolio_id'] = isset($data['portfolio_id']) ? $data['portfolio_id'] : null;
        $this->container['score_time_stamp'] = isset($data['score_time_stamp']) ? $data['score_time_stamp'] : null;
        $this->container['score_type'] = isset($data['score_type']) ? $data['score_type'] : null;
        $this->container['score_value'] = isset($data['score_value']) ? $data['score_value'] : null;
        $this->container['secondary_id'] = isset($data['secondary_id']) ? $data['secondary_id'] : null;
        $this->container['security_id'] = isset($data['security_id']) ? $data['security_id'] : null;
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

        if ($this->container['score_type'] === null) {
            $invalidProperties[] = "'score_type' can't be null";
        }
        $allowedValues = $this->getScoreTypeAllowableValues();
        if (!is_null($this->container['score_type']) && !in_array($this->container['score_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'score_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['score_value'] === null) {
            $invalidProperties[] = "'score_value' can't be null";
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
     * Gets allocation_id
     *
     * @return string
     */
    public function getAllocationId()
    {
        return $this->container['allocation_id'];
    }

    /**
     * Sets allocation_id
     *
     * @param string $allocation_id allocationId
     *
     * @return $this
     */
    public function setAllocationId($allocation_id)
    {
        $this->container['allocation_id'] = $allocation_id;

        return $this;
    }

    /**
     * Gets benchmark_id
     *
     * @return string
     */
    public function getBenchmarkId()
    {
        return $this->container['benchmark_id'];
    }

    /**
     * Sets benchmark_id
     *
     * @param string $benchmark_id benchmarkId
     *
     * @return $this
     */
    public function setBenchmarkId($benchmark_id)
    {
        $this->container['benchmark_id'] = $benchmark_id;

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
     * @param string $client_id clientId
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

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
     * Gets goal_id
     *
     * @return string
     */
    public function getGoalId()
    {
        return $this->container['goal_id'];
    }

    /**
     * Sets goal_id
     *
     * @param string $goal_id goalId
     *
     * @return $this
     */
    public function setGoalId($goal_id)
    {
        $this->container['goal_id'] = $goal_id;

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
     * Gets score_time_stamp
     *
     * @return \DateTime
     */
    public function getScoreTimeStamp()
    {
        return $this->container['score_time_stamp'];
    }

    /**
     * Sets score_time_stamp
     *
     * @param \DateTime $score_time_stamp score_time_stamp
     *
     * @return $this
     */
    public function setScoreTimeStamp($score_time_stamp)
    {
        $this->container['score_time_stamp'] = $score_time_stamp;

        return $this;
    }

    /**
     * Gets score_type
     *
     * @return string
     */
    public function getScoreType()
    {
        return $this->container['score_type'];
    }

    /**
     * Sets score_type
     *
     * @param string $score_type scoreType
     *
     * @return $this
     */
    public function setScoreType($score_type)
    {
        $allowedValues = $this->getScoreTypeAllowableValues();
        if (!in_array($score_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'score_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['score_type'] = $score_type;

        return $this;
    }

    /**
     * Gets score_value
     *
     * @return string
     */
    public function getScoreValue()
    {
        return $this->container['score_value'];
    }

    /**
     * Sets score_value
     *
     * @param string $score_value scoreValue
     *
     * @return $this
     */
    public function setScoreValue($score_value)
    {
        $this->container['score_value'] = $score_value;

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


