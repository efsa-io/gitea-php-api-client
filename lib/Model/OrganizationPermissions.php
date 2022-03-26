<?php
/**
 * OrganizationPermissions
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
 * OrganizationPermissions Class Doc Comment
 *
 * @category Class
 * @description OrganizationPermissions list different users permissions on an organization
 * @package  Efsa\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrganizationPermissions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrganizationPermissions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'can_create_repository' => 'bool',
        'can_read' => 'bool',
        'can_write' => 'bool',
        'is_admin' => 'bool',
        'is_owner' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'can_create_repository' => null,
        'can_read' => null,
        'can_write' => null,
        'is_admin' => null,
        'is_owner' => null
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
        'can_create_repository' => 'can_create_repository',
        'can_read' => 'can_read',
        'can_write' => 'can_write',
        'is_admin' => 'is_admin',
        'is_owner' => 'is_owner'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_create_repository' => 'setCanCreateRepository',
        'can_read' => 'setCanRead',
        'can_write' => 'setCanWrite',
        'is_admin' => 'setIsAdmin',
        'is_owner' => 'setIsOwner'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_create_repository' => 'getCanCreateRepository',
        'can_read' => 'getCanRead',
        'can_write' => 'getCanWrite',
        'is_admin' => 'getIsAdmin',
        'is_owner' => 'getIsOwner'
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
        $this->container['can_create_repository'] = $data['can_create_repository'] ?? null;
        $this->container['can_read'] = $data['can_read'] ?? null;
        $this->container['can_write'] = $data['can_write'] ?? null;
        $this->container['is_admin'] = $data['is_admin'] ?? null;
        $this->container['is_owner'] = $data['is_owner'] ?? null;
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
     * Gets can_create_repository
     *
     * @return bool|null
     */
    public function getCanCreateRepository()
    {
        return $this->container['can_create_repository'];
    }

    /**
     * Sets can_create_repository
     *
     * @param bool|null $can_create_repository can_create_repository
     *
     * @return self
     */
    public function setCanCreateRepository($can_create_repository)
    {
        $this->container['can_create_repository'] = $can_create_repository;

        return $this;
    }

    /**
     * Gets can_read
     *
     * @return bool|null
     */
    public function getCanRead()
    {
        return $this->container['can_read'];
    }

    /**
     * Sets can_read
     *
     * @param bool|null $can_read can_read
     *
     * @return self
     */
    public function setCanRead($can_read)
    {
        $this->container['can_read'] = $can_read;

        return $this;
    }

    /**
     * Gets can_write
     *
     * @return bool|null
     */
    public function getCanWrite()
    {
        return $this->container['can_write'];
    }

    /**
     * Sets can_write
     *
     * @param bool|null $can_write can_write
     *
     * @return self
     */
    public function setCanWrite($can_write)
    {
        $this->container['can_write'] = $can_write;

        return $this;
    }

    /**
     * Gets is_admin
     *
     * @return bool|null
     */
    public function getIsAdmin()
    {
        return $this->container['is_admin'];
    }

    /**
     * Sets is_admin
     *
     * @param bool|null $is_admin is_admin
     *
     * @return self
     */
    public function setIsAdmin($is_admin)
    {
        $this->container['is_admin'] = $is_admin;

        return $this;
    }

    /**
     * Gets is_owner
     *
     * @return bool|null
     */
    public function getIsOwner()
    {
        return $this->container['is_owner'];
    }

    /**
     * Sets is_owner
     *
     * @param bool|null $is_owner is_owner
     *
     * @return self
     */
    public function setIsOwner($is_owner)
    {
        $this->container['is_owner'] = $is_owner;

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

