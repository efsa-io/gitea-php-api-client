<?php
/**
 * CreateTeamOption
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Efsa\Client\Gitea
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

namespace Efsa\Client\Gitea\Model;

use \ArrayAccess;
use \Efsa\Client\Gitea\ObjectSerializer;

/**
 * CreateTeamOption Class Doc Comment
 *
 * @category Class
 * @description CreateTeamOption options for creating a team
 * @package  Efsa\Client\Gitea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateTeamOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateTeamOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'can_create_org_repo' => 'bool',
        'description' => 'string',
        'includes_all_repositories' => 'bool',
        'name' => 'string',
        'permission' => 'string',
        'units' => 'string[]',
        'units_map' => 'array<string,string>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'can_create_org_repo' => null,
        'description' => null,
        'includes_all_repositories' => null,
        'name' => null,
        'permission' => null,
        'units' => null,
        'units_map' => null
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
        'can_create_org_repo' => 'can_create_org_repo',
        'description' => 'description',
        'includes_all_repositories' => 'includes_all_repositories',
        'name' => 'name',
        'permission' => 'permission',
        'units' => 'units',
        'units_map' => 'units_map'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_create_org_repo' => 'setCanCreateOrgRepo',
        'description' => 'setDescription',
        'includes_all_repositories' => 'setIncludesAllRepositories',
        'name' => 'setName',
        'permission' => 'setPermission',
        'units' => 'setUnits',
        'units_map' => 'setUnitsMap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_create_org_repo' => 'getCanCreateOrgRepo',
        'description' => 'getDescription',
        'includes_all_repositories' => 'getIncludesAllRepositories',
        'name' => 'getName',
        'permission' => 'getPermission',
        'units' => 'getUnits',
        'units_map' => 'getUnitsMap'
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

    const PERMISSION_READ = 'read';
    const PERMISSION_WRITE = 'write';
    const PERMISSION_ADMIN = 'admin';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPermissionAllowableValues()
    {
        return [
            self::PERMISSION_READ,
            self::PERMISSION_WRITE,
            self::PERMISSION_ADMIN,
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
        $this->container['can_create_org_repo'] = $data['can_create_org_repo'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['includes_all_repositories'] = $data['includes_all_repositories'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['permission'] = $data['permission'] ?? null;
        $this->container['units'] = $data['units'] ?? null;
        $this->container['units_map'] = $data['units_map'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getPermissionAllowableValues();
        if (!is_null($this->container['permission']) && !in_array($this->container['permission'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'permission', must be one of '%s'",
                $this->container['permission'],
                implode("', '", $allowedValues)
            );
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
     * Gets can_create_org_repo
     *
     * @return bool|null
     */
    public function getCanCreateOrgRepo()
    {
        return $this->container['can_create_org_repo'];
    }

    /**
     * Sets can_create_org_repo
     *
     * @param bool|null $can_create_org_repo can_create_org_repo
     *
     * @return self
     */
    public function setCanCreateOrgRepo($can_create_org_repo)
    {
        $this->container['can_create_org_repo'] = $can_create_org_repo;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets includes_all_repositories
     *
     * @return bool|null
     */
    public function getIncludesAllRepositories()
    {
        return $this->container['includes_all_repositories'];
    }

    /**
     * Sets includes_all_repositories
     *
     * @param bool|null $includes_all_repositories includes_all_repositories
     *
     * @return self
     */
    public function setIncludesAllRepositories($includes_all_repositories)
    {
        $this->container['includes_all_repositories'] = $includes_all_repositories;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets permission
     *
     * @return string|null
     */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
     * Sets permission
     *
     * @param string|null $permission permission
     *
     * @return self
     */
    public function setPermission($permission)
    {
        $allowedValues = $this->getPermissionAllowableValues();
        if (!is_null($permission) && !in_array($permission, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'permission', must be one of '%s'",
                    $permission,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['permission'] = $permission;

        return $this;
    }

    /**
     * Gets units
     *
     * @return string[]|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param string[]|null $units units
     *
     * @return self
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets units_map
     *
     * @return array<string,string>|null
     */
    public function getUnitsMap()
    {
        return $this->container['units_map'];
    }

    /**
     * Sets units_map
     *
     * @param array<string,string>|null $units_map units_map
     *
     * @return self
     */
    public function setUnitsMap($units_map)
    {
        $this->container['units_map'] = $units_map;

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


