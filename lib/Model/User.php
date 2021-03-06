<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @description User represents a user
 * @package  Efsa\Client\Gitea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class User implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'bool',
        'avatarUrl' => 'string',
        'created' => '\DateTime',
        'description' => 'string',
        'email' => 'string',
        'followersCount' => 'int',
        'followingCount' => 'int',
        'fullName' => 'string',
        'id' => 'int',
        'isAdmin' => 'bool',
        'language' => 'string',
        'lastLogin' => '\DateTime',
        'location' => 'string',
        'login' => 'string',
        'prohibitLogin' => 'bool',
        'restricted' => 'bool',
        'starredReposCount' => 'int',
        'visibility' => 'string',
        'website' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active' => null,
        'avatarUrl' => null,
        'created' => 'date-time',
        'description' => null,
        'email' => 'email',
        'followersCount' => 'int64',
        'followingCount' => 'int64',
        'fullName' => null,
        'id' => 'int64',
        'isAdmin' => null,
        'language' => null,
        'lastLogin' => 'date-time',
        'location' => null,
        'login' => null,
        'prohibitLogin' => null,
        'restricted' => null,
        'starredReposCount' => 'int64',
        'visibility' => null,
        'website' => null
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
        'active' => 'active',
        'avatarUrl' => 'avatar_url',
        'created' => 'created',
        'description' => 'description',
        'email' => 'email',
        'followersCount' => 'followers_count',
        'followingCount' => 'following_count',
        'fullName' => 'full_name',
        'id' => 'id',
        'isAdmin' => 'is_admin',
        'language' => 'language',
        'lastLogin' => 'last_login',
        'location' => 'location',
        'login' => 'login',
        'prohibitLogin' => 'prohibit_login',
        'restricted' => 'restricted',
        'starredReposCount' => 'starred_repos_count',
        'visibility' => 'visibility',
        'website' => 'website'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'avatarUrl' => 'setAvatarUrl',
        'created' => 'setCreated',
        'description' => 'setDescription',
        'email' => 'setEmail',
        'followersCount' => 'setFollowersCount',
        'followingCount' => 'setFollowingCount',
        'fullName' => 'setFullName',
        'id' => 'setId',
        'isAdmin' => 'setIsAdmin',
        'language' => 'setLanguage',
        'lastLogin' => 'setLastLogin',
        'location' => 'setLocation',
        'login' => 'setLogin',
        'prohibitLogin' => 'setProhibitLogin',
        'restricted' => 'setRestricted',
        'starredReposCount' => 'setStarredReposCount',
        'visibility' => 'setVisibility',
        'website' => 'setWebsite'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'avatarUrl' => 'getAvatarUrl',
        'created' => 'getCreated',
        'description' => 'getDescription',
        'email' => 'getEmail',
        'followersCount' => 'getFollowersCount',
        'followingCount' => 'getFollowingCount',
        'fullName' => 'getFullName',
        'id' => 'getId',
        'isAdmin' => 'getIsAdmin',
        'language' => 'getLanguage',
        'lastLogin' => 'getLastLogin',
        'location' => 'getLocation',
        'login' => 'getLogin',
        'prohibitLogin' => 'getProhibitLogin',
        'restricted' => 'getRestricted',
        'starredReposCount' => 'getStarredReposCount',
        'visibility' => 'getVisibility',
        'website' => 'getWebsite'
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
        $this->container['active'] = $data['active'] ?? null;
        $this->container['avatarUrl'] = $data['avatarUrl'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['followersCount'] = $data['followersCount'] ?? null;
        $this->container['followingCount'] = $data['followingCount'] ?? null;
        $this->container['fullName'] = $data['fullName'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['isAdmin'] = $data['isAdmin'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['lastLogin'] = $data['lastLogin'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['login'] = $data['login'] ?? null;
        $this->container['prohibitLogin'] = $data['prohibitLogin'] ?? null;
        $this->container['restricted'] = $data['restricted'] ?? null;
        $this->container['starredReposCount'] = $data['starredReposCount'] ?? null;
        $this->container['visibility'] = $data['visibility'] ?? null;
        $this->container['website'] = $data['website'] ?? null;
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
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Is user active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets avatarUrl
     *
     * @return string|null
     */
    public function getAvatarUrl()
    {
        return $this->container['avatarUrl'];
    }

    /**
     * Sets avatarUrl
     *
     * @param string|null $avatarUrl URL to the user's avatar
     *
     * @return self
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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
     * @param string|null $description the user's description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets followersCount
     *
     * @return int|null
     */
    public function getFollowersCount()
    {
        return $this->container['followersCount'];
    }

    /**
     * Sets followersCount
     *
     * @param int|null $followersCount user counts
     *
     * @return self
     */
    public function setFollowersCount($followersCount)
    {
        $this->container['followersCount'] = $followersCount;

        return $this;
    }

    /**
     * Gets followingCount
     *
     * @return int|null
     */
    public function getFollowingCount()
    {
        return $this->container['followingCount'];
    }

    /**
     * Sets followingCount
     *
     * @param int|null $followingCount followingCount
     *
     * @return self
     */
    public function setFollowingCount($followingCount)
    {
        $this->container['followingCount'] = $followingCount;

        return $this;
    }

    /**
     * Gets fullName
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
     * Sets fullName
     *
     * @param string|null $fullName the user's full name
     *
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id the user's id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isAdmin
     *
     * @return bool|null
     */
    public function getIsAdmin()
    {
        return $this->container['isAdmin'];
    }

    /**
     * Sets isAdmin
     *
     * @param bool|null $isAdmin Is the user an administrator
     *
     * @return self
     */
    public function setIsAdmin($isAdmin)
    {
        $this->container['isAdmin'] = $isAdmin;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language User locale
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets lastLogin
     *
     * @return \DateTime|null
     */
    public function getLastLogin()
    {
        return $this->container['lastLogin'];
    }

    /**
     * Sets lastLogin
     *
     * @param \DateTime|null $lastLogin lastLogin
     *
     * @return self
     */
    public function setLastLogin($lastLogin)
    {
        $this->container['lastLogin'] = $lastLogin;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location the user's location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets login
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string|null $login the user's username
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets prohibitLogin
     *
     * @return bool|null
     */
    public function getProhibitLogin()
    {
        return $this->container['prohibitLogin'];
    }

    /**
     * Sets prohibitLogin
     *
     * @param bool|null $prohibitLogin Is user login prohibited
     *
     * @return self
     */
    public function setProhibitLogin($prohibitLogin)
    {
        $this->container['prohibitLogin'] = $prohibitLogin;

        return $this;
    }

    /**
     * Gets restricted
     *
     * @return bool|null
     */
    public function getRestricted()
    {
        return $this->container['restricted'];
    }

    /**
     * Sets restricted
     *
     * @param bool|null $restricted Is user restricted
     *
     * @return self
     */
    public function setRestricted($restricted)
    {
        $this->container['restricted'] = $restricted;

        return $this;
    }

    /**
     * Gets starredReposCount
     *
     * @return int|null
     */
    public function getStarredReposCount()
    {
        return $this->container['starredReposCount'];
    }

    /**
     * Sets starredReposCount
     *
     * @param int|null $starredReposCount starredReposCount
     *
     * @return self
     */
    public function setStarredReposCount($starredReposCount)
    {
        $this->container['starredReposCount'] = $starredReposCount;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return string|null
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param string|null $visibility User visibility level option: public, limited, private
     *
     * @return self
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website the user's website
     *
     * @return self
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

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


