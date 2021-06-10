<?php
/**
 * NodeRelationship
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
 * NodeRelationship Class Doc Comment
 *
 * @category Class
 * @description NodeRelationship Object
 * @package  com\hydrogen\nucleus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NodeRelationship implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NodeRelationship';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'answer_id' => 'string',
        'create_date' => '\DateTime',
        'decision_tree_id' => 'string',
        'id' => 'string',
        'is_leaf' => 'bool',
        'metadata' => 'map[string,string]',
        'node_child_id' => 'string',
        'node_parent_id' => 'string',
        'secondary_id' => 'string',
        'update_date' => '\DateTime',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'answer_id' => 'uuid',
        'create_date' => 'date-time',
        'decision_tree_id' => 'uuid',
        'id' => 'uuid',
        'is_leaf' => null,
        'metadata' => null,
        'node_child_id' => 'uuid',
        'node_parent_id' => 'uuid',
        'secondary_id' => null,
        'update_date' => 'date-time',
        'value' => null
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
        'answer_id' => 'answer_id',
        'create_date' => 'create_date',
        'decision_tree_id' => 'decision_tree_id',
        'id' => 'id',
        'is_leaf' => 'is_leaf',
        'metadata' => 'metadata',
        'node_child_id' => 'node_child_id',
        'node_parent_id' => 'node_parent_id',
        'secondary_id' => 'secondary_id',
        'update_date' => 'update_date',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answer_id' => 'setAnswerId',
        'create_date' => 'setCreateDate',
        'decision_tree_id' => 'setDecisionTreeId',
        'id' => 'setId',
        'is_leaf' => 'setIsLeaf',
        'metadata' => 'setMetadata',
        'node_child_id' => 'setNodeChildId',
        'node_parent_id' => 'setNodeParentId',
        'secondary_id' => 'setSecondaryId',
        'update_date' => 'setUpdateDate',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answer_id' => 'getAnswerId',
        'create_date' => 'getCreateDate',
        'decision_tree_id' => 'getDecisionTreeId',
        'id' => 'getId',
        'is_leaf' => 'getIsLeaf',
        'metadata' => 'getMetadata',
        'node_child_id' => 'getNodeChildId',
        'node_parent_id' => 'getNodeParentId',
        'secondary_id' => 'getSecondaryId',
        'update_date' => 'getUpdateDate',
        'value' => 'getValue'
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
        $this->container['answer_id'] = isset($data['answer_id']) ? $data['answer_id'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['decision_tree_id'] = isset($data['decision_tree_id']) ? $data['decision_tree_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_leaf'] = isset($data['is_leaf']) ? $data['is_leaf'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['node_child_id'] = isset($data['node_child_id']) ? $data['node_child_id'] : null;
        $this->container['node_parent_id'] = isset($data['node_parent_id']) ? $data['node_parent_id'] : null;
        $this->container['secondary_id'] = isset($data['secondary_id']) ? $data['secondary_id'] : null;
        $this->container['update_date'] = isset($data['update_date']) ? $data['update_date'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['answer_id'] === null) {
            $invalidProperties[] = "'answer_id' can't be null";
        }
        if ($this->container['decision_tree_id'] === null) {
            $invalidProperties[] = "'decision_tree_id' can't be null";
        }
        if ($this->container['node_parent_id'] === null) {
            $invalidProperties[] = "'node_parent_id' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
     * Gets answer_id
     *
     * @return string
     */
    public function getAnswerId()
    {
        return $this->container['answer_id'];
    }

    /**
     * Sets answer_id
     *
     * @param string $answer_id answer_id
     *
     * @return $this
     */
    public function setAnswerId($answer_id)
    {
        $this->container['answer_id'] = $answer_id;

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
     * Gets decision_tree_id
     *
     * @return string
     */
    public function getDecisionTreeId()
    {
        return $this->container['decision_tree_id'];
    }

    /**
     * Sets decision_tree_id
     *
     * @param string $decision_tree_id decision_tree_id
     *
     * @return $this
     */
    public function setDecisionTreeId($decision_tree_id)
    {
        $this->container['decision_tree_id'] = $decision_tree_id;

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
     * Gets is_leaf
     *
     * @return bool
     */
    public function getIsLeaf()
    {
        return $this->container['is_leaf'];
    }

    /**
     * Sets is_leaf
     *
     * @param bool $is_leaf is_leaf
     *
     * @return $this
     */
    public function setIsLeaf($is_leaf)
    {
        $this->container['is_leaf'] = $is_leaf;

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
     * Gets node_child_id
     *
     * @return string
     */
    public function getNodeChildId()
    {
        return $this->container['node_child_id'];
    }

    /**
     * Sets node_child_id
     *
     * @param string $node_child_id nodeChildId
     *
     * @return $this
     */
    public function setNodeChildId($node_child_id)
    {
        $this->container['node_child_id'] = $node_child_id;

        return $this;
    }

    /**
     * Gets node_parent_id
     *
     * @return string
     */
    public function getNodeParentId()
    {
        return $this->container['node_parent_id'];
    }

    /**
     * Sets node_parent_id
     *
     * @param string $node_parent_id nodeParentId
     *
     * @return $this
     */
    public function setNodeParentId($node_parent_id)
    {
        $this->container['node_parent_id'] = $node_parent_id;

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
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


