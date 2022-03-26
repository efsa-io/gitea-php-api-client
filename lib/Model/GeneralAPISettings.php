<?php
/**
 * GeneralAPISettings
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Efsa\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gitea API.
 *
 * This documentation describes the Gitea API.
 *
 * The version of the OpenAPI document: 1.17.0+dev-334-gf36701c70
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Efsa\Client\Model;

use \ArrayAccess;
use \Efsa\Client\ObjectSerializer;

/**
 * GeneralAPISettings Class Doc Comment
 *
 * @category Class
 * @description GeneralAPISettings contains global api settings exposed by it
 * @package  Efsa\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GeneralAPISettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GeneralAPISettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_git_trees_per_page' => 'int',
        'default_max_blob_size' => 'int',
        'default_paging_num' => 'int',
        'max_response_items' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_git_trees_per_page' => 'int64',
        'default_max_blob_size' => 'int64',
        'default_paging_num' => 'int64',
        'max_response_items' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'default_git_trees_per_page' => 'default_git_trees_per_page',
        'default_max_blob_size' => 'default_max_blob_size',
        'default_paging_num' => 'default_paging_num',
        'max_response_items' => 'max_response_items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_git_trees_per_page' => 'setDefaultGitTreesPerPage',
        'default_max_blob_size' => 'setDefaultMaxBlobSize',
        'default_paging_num' => 'setDefaultPagingNum',
        'max_response_items' => 'setMaxResponseItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_git_trees_per_page' => 'getDefaultGitTreesPerPage',
        'default_max_blob_size' => 'getDefaultMaxBlobSize',
        'default_paging_num' => 'getDefaultPagingNum',
        'max_response_items' => 'getMaxResponseItems'
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
        return self::$openAPIModelName;
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
        $this->container['default_git_trees_per_page'] = $data['default_git_trees_per_page'] ?? null;
        $this->container['default_max_blob_size'] = $data['default_max_blob_size'] ?? null;
        $this->container['default_paging_num'] = $data['default_paging_num'] ?? null;
        $this->container['max_response_items'] = $data['max_response_items'] ?? null;
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
     * Gets default_git_trees_per_page
     *
     * @return int|null
     */
    public function getDefaultGitTreesPerPage()
    {
        return $this->container['default_git_trees_per_page'];
    }

    /**
     * Sets default_git_trees_per_page
     *
     * @param int|null $default_git_trees_per_page default_git_trees_per_page
     *
     * @return self
     */
    public function setDefaultGitTreesPerPage($default_git_trees_per_page)
    {
        $this->container['default_git_trees_per_page'] = $default_git_trees_per_page;

        return $this;
    }

    /**
     * Gets default_max_blob_size
     *
     * @return int|null
     */
    public function getDefaultMaxBlobSize()
    {
        return $this->container['default_max_blob_size'];
    }

    /**
     * Sets default_max_blob_size
     *
     * @param int|null $default_max_blob_size default_max_blob_size
     *
     * @return self
     */
    public function setDefaultMaxBlobSize($default_max_blob_size)
    {
        $this->container['default_max_blob_size'] = $default_max_blob_size;

        return $this;
    }

    /**
     * Gets default_paging_num
     *
     * @return int|null
     */
    public function getDefaultPagingNum()
    {
        return $this->container['default_paging_num'];
    }

    /**
     * Sets default_paging_num
     *
     * @param int|null $default_paging_num default_paging_num
     *
     * @return self
     */
    public function setDefaultPagingNum($default_paging_num)
    {
        $this->container['default_paging_num'] = $default_paging_num;

        return $this;
    }

    /**
     * Gets max_response_items
     *
     * @return int|null
     */
    public function getMaxResponseItems()
    {
        return $this->container['max_response_items'];
    }

    /**
     * Sets max_response_items
     *
     * @param int|null $max_response_items max_response_items
     *
     * @return self
     */
    public function setMaxResponseItems($max_response_items)
    {
        $this->container['max_response_items'] = $max_response_items;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

