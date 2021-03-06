<?php
/**
 * Repository
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
 * Repository Class Doc Comment
 *
 * @category Class
 * @description Repository represents a repository
 * @package  Efsa\Client\Gitea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Repository implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Repository';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allowMergeCommits' => 'bool',
        'allowRebase' => 'bool',
        'allowRebaseExplicit' => 'bool',
        'allowSquashMerge' => 'bool',
        'archived' => 'bool',
        'avatarUrl' => 'string',
        'cloneUrl' => 'string',
        'createdAt' => '\DateTime',
        'defaultBranch' => 'string',
        'defaultMergeStyle' => 'string',
        'description' => 'string',
        'empty' => 'bool',
        'externalTracker' => '\Efsa\Client\Gitea\Model\ExternalTracker',
        'externalWiki' => '\Efsa\Client\Gitea\Model\ExternalWiki',
        'fork' => 'bool',
        'forksCount' => 'int',
        'fullName' => 'string',
        'hasIssues' => 'bool',
        'hasProjects' => 'bool',
        'hasPullRequests' => 'bool',
        'hasWiki' => 'bool',
        'htmlUrl' => 'string',
        'id' => 'int',
        'ignoreWhitespaceConflicts' => 'bool',
        'internal' => 'bool',
        'internalTracker' => '\Efsa\Client\Gitea\Model\InternalTracker',
        'language' => 'string',
        'languagesUrl' => 'string',
        'mirror' => 'bool',
        'mirrorInterval' => 'string',
        'mirrorUpdated' => '\DateTime',
        'name' => 'string',
        'openIssuesCount' => 'int',
        'openPrCounter' => 'int',
        'originalUrl' => 'string',
        'owner' => '\Efsa\Client\Gitea\Model\User',
        'parent' => '\Efsa\Client\Gitea\Model\Repository',
        'permissions' => '\Efsa\Client\Gitea\Model\Permission',
        'private' => 'bool',
        'releaseCounter' => 'int',
        'repoTransfer' => '\Efsa\Client\Gitea\Model\RepoTransfer',
        'size' => 'int',
        'sshUrl' => 'string',
        'starsCount' => 'int',
        'template' => 'bool',
        'updatedAt' => '\DateTime',
        'watchersCount' => 'int',
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
        'allowMergeCommits' => null,
        'allowRebase' => null,
        'allowRebaseExplicit' => null,
        'allowSquashMerge' => null,
        'archived' => null,
        'avatarUrl' => null,
        'cloneUrl' => null,
        'createdAt' => 'date-time',
        'defaultBranch' => null,
        'defaultMergeStyle' => null,
        'description' => null,
        'empty' => null,
        'externalTracker' => null,
        'externalWiki' => null,
        'fork' => null,
        'forksCount' => 'int64',
        'fullName' => null,
        'hasIssues' => null,
        'hasProjects' => null,
        'hasPullRequests' => null,
        'hasWiki' => null,
        'htmlUrl' => null,
        'id' => 'int64',
        'ignoreWhitespaceConflicts' => null,
        'internal' => null,
        'internalTracker' => null,
        'language' => null,
        'languagesUrl' => null,
        'mirror' => null,
        'mirrorInterval' => null,
        'mirrorUpdated' => 'date-time',
        'name' => null,
        'openIssuesCount' => 'int64',
        'openPrCounter' => 'int64',
        'originalUrl' => null,
        'owner' => null,
        'parent' => null,
        'permissions' => null,
        'private' => null,
        'releaseCounter' => 'int64',
        'repoTransfer' => null,
        'size' => 'int64',
        'sshUrl' => null,
        'starsCount' => 'int64',
        'template' => null,
        'updatedAt' => 'date-time',
        'watchersCount' => 'int64',
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
        'allowMergeCommits' => 'allow_merge_commits',
        'allowRebase' => 'allow_rebase',
        'allowRebaseExplicit' => 'allow_rebase_explicit',
        'allowSquashMerge' => 'allow_squash_merge',
        'archived' => 'archived',
        'avatarUrl' => 'avatar_url',
        'cloneUrl' => 'clone_url',
        'createdAt' => 'created_at',
        'defaultBranch' => 'default_branch',
        'defaultMergeStyle' => 'default_merge_style',
        'description' => 'description',
        'empty' => 'empty',
        'externalTracker' => 'external_tracker',
        'externalWiki' => 'external_wiki',
        'fork' => 'fork',
        'forksCount' => 'forks_count',
        'fullName' => 'full_name',
        'hasIssues' => 'has_issues',
        'hasProjects' => 'has_projects',
        'hasPullRequests' => 'has_pull_requests',
        'hasWiki' => 'has_wiki',
        'htmlUrl' => 'html_url',
        'id' => 'id',
        'ignoreWhitespaceConflicts' => 'ignore_whitespace_conflicts',
        'internal' => 'internal',
        'internalTracker' => 'internal_tracker',
        'language' => 'language',
        'languagesUrl' => 'languages_url',
        'mirror' => 'mirror',
        'mirrorInterval' => 'mirror_interval',
        'mirrorUpdated' => 'mirror_updated',
        'name' => 'name',
        'openIssuesCount' => 'open_issues_count',
        'openPrCounter' => 'open_pr_counter',
        'originalUrl' => 'original_url',
        'owner' => 'owner',
        'parent' => 'parent',
        'permissions' => 'permissions',
        'private' => 'private',
        'releaseCounter' => 'release_counter',
        'repoTransfer' => 'repo_transfer',
        'size' => 'size',
        'sshUrl' => 'ssh_url',
        'starsCount' => 'stars_count',
        'template' => 'template',
        'updatedAt' => 'updated_at',
        'watchersCount' => 'watchers_count',
        'website' => 'website'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowMergeCommits' => 'setAllowMergeCommits',
        'allowRebase' => 'setAllowRebase',
        'allowRebaseExplicit' => 'setAllowRebaseExplicit',
        'allowSquashMerge' => 'setAllowSquashMerge',
        'archived' => 'setArchived',
        'avatarUrl' => 'setAvatarUrl',
        'cloneUrl' => 'setCloneUrl',
        'createdAt' => 'setCreatedAt',
        'defaultBranch' => 'setDefaultBranch',
        'defaultMergeStyle' => 'setDefaultMergeStyle',
        'description' => 'setDescription',
        'empty' => 'setEmpty',
        'externalTracker' => 'setExternalTracker',
        'externalWiki' => 'setExternalWiki',
        'fork' => 'setFork',
        'forksCount' => 'setForksCount',
        'fullName' => 'setFullName',
        'hasIssues' => 'setHasIssues',
        'hasProjects' => 'setHasProjects',
        'hasPullRequests' => 'setHasPullRequests',
        'hasWiki' => 'setHasWiki',
        'htmlUrl' => 'setHtmlUrl',
        'id' => 'setId',
        'ignoreWhitespaceConflicts' => 'setIgnoreWhitespaceConflicts',
        'internal' => 'setInternal',
        'internalTracker' => 'setInternalTracker',
        'language' => 'setLanguage',
        'languagesUrl' => 'setLanguagesUrl',
        'mirror' => 'setMirror',
        'mirrorInterval' => 'setMirrorInterval',
        'mirrorUpdated' => 'setMirrorUpdated',
        'name' => 'setName',
        'openIssuesCount' => 'setOpenIssuesCount',
        'openPrCounter' => 'setOpenPrCounter',
        'originalUrl' => 'setOriginalUrl',
        'owner' => 'setOwner',
        'parent' => 'setParent',
        'permissions' => 'setPermissions',
        'private' => 'setPrivate',
        'releaseCounter' => 'setReleaseCounter',
        'repoTransfer' => 'setRepoTransfer',
        'size' => 'setSize',
        'sshUrl' => 'setSshUrl',
        'starsCount' => 'setStarsCount',
        'template' => 'setTemplate',
        'updatedAt' => 'setUpdatedAt',
        'watchersCount' => 'setWatchersCount',
        'website' => 'setWebsite'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowMergeCommits' => 'getAllowMergeCommits',
        'allowRebase' => 'getAllowRebase',
        'allowRebaseExplicit' => 'getAllowRebaseExplicit',
        'allowSquashMerge' => 'getAllowSquashMerge',
        'archived' => 'getArchived',
        'avatarUrl' => 'getAvatarUrl',
        'cloneUrl' => 'getCloneUrl',
        'createdAt' => 'getCreatedAt',
        'defaultBranch' => 'getDefaultBranch',
        'defaultMergeStyle' => 'getDefaultMergeStyle',
        'description' => 'getDescription',
        'empty' => 'getEmpty',
        'externalTracker' => 'getExternalTracker',
        'externalWiki' => 'getExternalWiki',
        'fork' => 'getFork',
        'forksCount' => 'getForksCount',
        'fullName' => 'getFullName',
        'hasIssues' => 'getHasIssues',
        'hasProjects' => 'getHasProjects',
        'hasPullRequests' => 'getHasPullRequests',
        'hasWiki' => 'getHasWiki',
        'htmlUrl' => 'getHtmlUrl',
        'id' => 'getId',
        'ignoreWhitespaceConflicts' => 'getIgnoreWhitespaceConflicts',
        'internal' => 'getInternal',
        'internalTracker' => 'getInternalTracker',
        'language' => 'getLanguage',
        'languagesUrl' => 'getLanguagesUrl',
        'mirror' => 'getMirror',
        'mirrorInterval' => 'getMirrorInterval',
        'mirrorUpdated' => 'getMirrorUpdated',
        'name' => 'getName',
        'openIssuesCount' => 'getOpenIssuesCount',
        'openPrCounter' => 'getOpenPrCounter',
        'originalUrl' => 'getOriginalUrl',
        'owner' => 'getOwner',
        'parent' => 'getParent',
        'permissions' => 'getPermissions',
        'private' => 'getPrivate',
        'releaseCounter' => 'getReleaseCounter',
        'repoTransfer' => 'getRepoTransfer',
        'size' => 'getSize',
        'sshUrl' => 'getSshUrl',
        'starsCount' => 'getStarsCount',
        'template' => 'getTemplate',
        'updatedAt' => 'getUpdatedAt',
        'watchersCount' => 'getWatchersCount',
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
        $this->container['allowMergeCommits'] = $data['allowMergeCommits'] ?? null;
        $this->container['allowRebase'] = $data['allowRebase'] ?? null;
        $this->container['allowRebaseExplicit'] = $data['allowRebaseExplicit'] ?? null;
        $this->container['allowSquashMerge'] = $data['allowSquashMerge'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['avatarUrl'] = $data['avatarUrl'] ?? null;
        $this->container['cloneUrl'] = $data['cloneUrl'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['defaultBranch'] = $data['defaultBranch'] ?? null;
        $this->container['defaultMergeStyle'] = $data['defaultMergeStyle'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['empty'] = $data['empty'] ?? null;
        $this->container['externalTracker'] = $data['externalTracker'] ?? null;
        $this->container['externalWiki'] = $data['externalWiki'] ?? null;
        $this->container['fork'] = $data['fork'] ?? null;
        $this->container['forksCount'] = $data['forksCount'] ?? null;
        $this->container['fullName'] = $data['fullName'] ?? null;
        $this->container['hasIssues'] = $data['hasIssues'] ?? null;
        $this->container['hasProjects'] = $data['hasProjects'] ?? null;
        $this->container['hasPullRequests'] = $data['hasPullRequests'] ?? null;
        $this->container['hasWiki'] = $data['hasWiki'] ?? null;
        $this->container['htmlUrl'] = $data['htmlUrl'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['ignoreWhitespaceConflicts'] = $data['ignoreWhitespaceConflicts'] ?? null;
        $this->container['internal'] = $data['internal'] ?? null;
        $this->container['internalTracker'] = $data['internalTracker'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['languagesUrl'] = $data['languagesUrl'] ?? null;
        $this->container['mirror'] = $data['mirror'] ?? null;
        $this->container['mirrorInterval'] = $data['mirrorInterval'] ?? null;
        $this->container['mirrorUpdated'] = $data['mirrorUpdated'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['openIssuesCount'] = $data['openIssuesCount'] ?? null;
        $this->container['openPrCounter'] = $data['openPrCounter'] ?? null;
        $this->container['originalUrl'] = $data['originalUrl'] ?? null;
        $this->container['owner'] = $data['owner'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['permissions'] = $data['permissions'] ?? null;
        $this->container['private'] = $data['private'] ?? null;
        $this->container['releaseCounter'] = $data['releaseCounter'] ?? null;
        $this->container['repoTransfer'] = $data['repoTransfer'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['sshUrl'] = $data['sshUrl'] ?? null;
        $this->container['starsCount'] = $data['starsCount'] ?? null;
        $this->container['template'] = $data['template'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
        $this->container['watchersCount'] = $data['watchersCount'] ?? null;
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
     * Gets allowMergeCommits
     *
     * @return bool|null
     */
    public function getAllowMergeCommits()
    {
        return $this->container['allowMergeCommits'];
    }

    /**
     * Sets allowMergeCommits
     *
     * @param bool|null $allowMergeCommits allowMergeCommits
     *
     * @return self
     */
    public function setAllowMergeCommits($allowMergeCommits)
    {
        $this->container['allowMergeCommits'] = $allowMergeCommits;

        return $this;
    }

    /**
     * Gets allowRebase
     *
     * @return bool|null
     */
    public function getAllowRebase()
    {
        return $this->container['allowRebase'];
    }

    /**
     * Sets allowRebase
     *
     * @param bool|null $allowRebase allowRebase
     *
     * @return self
     */
    public function setAllowRebase($allowRebase)
    {
        $this->container['allowRebase'] = $allowRebase;

        return $this;
    }

    /**
     * Gets allowRebaseExplicit
     *
     * @return bool|null
     */
    public function getAllowRebaseExplicit()
    {
        return $this->container['allowRebaseExplicit'];
    }

    /**
     * Sets allowRebaseExplicit
     *
     * @param bool|null $allowRebaseExplicit allowRebaseExplicit
     *
     * @return self
     */
    public function setAllowRebaseExplicit($allowRebaseExplicit)
    {
        $this->container['allowRebaseExplicit'] = $allowRebaseExplicit;

        return $this;
    }

    /**
     * Gets allowSquashMerge
     *
     * @return bool|null
     */
    public function getAllowSquashMerge()
    {
        return $this->container['allowSquashMerge'];
    }

    /**
     * Sets allowSquashMerge
     *
     * @param bool|null $allowSquashMerge allowSquashMerge
     *
     * @return self
     */
    public function setAllowSquashMerge($allowSquashMerge)
    {
        $this->container['allowSquashMerge'] = $allowSquashMerge;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived archived
     *
     * @return self
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

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
     * @param string|null $avatarUrl avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;

        return $this;
    }

    /**
     * Gets cloneUrl
     *
     * @return string|null
     */
    public function getCloneUrl()
    {
        return $this->container['cloneUrl'];
    }

    /**
     * Sets cloneUrl
     *
     * @param string|null $cloneUrl cloneUrl
     *
     * @return self
     */
    public function setCloneUrl($cloneUrl)
    {
        $this->container['cloneUrl'] = $cloneUrl;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets defaultBranch
     *
     * @return string|null
     */
    public function getDefaultBranch()
    {
        return $this->container['defaultBranch'];
    }

    /**
     * Sets defaultBranch
     *
     * @param string|null $defaultBranch defaultBranch
     *
     * @return self
     */
    public function setDefaultBranch($defaultBranch)
    {
        $this->container['defaultBranch'] = $defaultBranch;

        return $this;
    }

    /**
     * Gets defaultMergeStyle
     *
     * @return string|null
     */
    public function getDefaultMergeStyle()
    {
        return $this->container['defaultMergeStyle'];
    }

    /**
     * Sets defaultMergeStyle
     *
     * @param string|null $defaultMergeStyle defaultMergeStyle
     *
     * @return self
     */
    public function setDefaultMergeStyle($defaultMergeStyle)
    {
        $this->container['defaultMergeStyle'] = $defaultMergeStyle;

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
     * Gets empty
     *
     * @return bool|null
     */
    public function getEmpty()
    {
        return $this->container['empty'];
    }

    /**
     * Sets empty
     *
     * @param bool|null $empty empty
     *
     * @return self
     */
    public function setEmpty($empty)
    {
        $this->container['empty'] = $empty;

        return $this;
    }

    /**
     * Gets externalTracker
     *
     * @return \Efsa\Client\Gitea\Model\ExternalTracker|null
     */
    public function getExternalTracker()
    {
        return $this->container['externalTracker'];
    }

    /**
     * Sets externalTracker
     *
     * @param \Efsa\Client\Gitea\Model\ExternalTracker|null $externalTracker externalTracker
     *
     * @return self
     */
    public function setExternalTracker($externalTracker)
    {
        $this->container['externalTracker'] = $externalTracker;

        return $this;
    }

    /**
     * Gets externalWiki
     *
     * @return \Efsa\Client\Gitea\Model\ExternalWiki|null
     */
    public function getExternalWiki()
    {
        return $this->container['externalWiki'];
    }

    /**
     * Sets externalWiki
     *
     * @param \Efsa\Client\Gitea\Model\ExternalWiki|null $externalWiki externalWiki
     *
     * @return self
     */
    public function setExternalWiki($externalWiki)
    {
        $this->container['externalWiki'] = $externalWiki;

        return $this;
    }

    /**
     * Gets fork
     *
     * @return bool|null
     */
    public function getFork()
    {
        return $this->container['fork'];
    }

    /**
     * Sets fork
     *
     * @param bool|null $fork fork
     *
     * @return self
     */
    public function setFork($fork)
    {
        $this->container['fork'] = $fork;

        return $this;
    }

    /**
     * Gets forksCount
     *
     * @return int|null
     */
    public function getForksCount()
    {
        return $this->container['forksCount'];
    }

    /**
     * Sets forksCount
     *
     * @param int|null $forksCount forksCount
     *
     * @return self
     */
    public function setForksCount($forksCount)
    {
        $this->container['forksCount'] = $forksCount;

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
     * @param string|null $fullName fullName
     *
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->container['fullName'] = $fullName;

        return $this;
    }

    /**
     * Gets hasIssues
     *
     * @return bool|null
     */
    public function getHasIssues()
    {
        return $this->container['hasIssues'];
    }

    /**
     * Sets hasIssues
     *
     * @param bool|null $hasIssues hasIssues
     *
     * @return self
     */
    public function setHasIssues($hasIssues)
    {
        $this->container['hasIssues'] = $hasIssues;

        return $this;
    }

    /**
     * Gets hasProjects
     *
     * @return bool|null
     */
    public function getHasProjects()
    {
        return $this->container['hasProjects'];
    }

    /**
     * Sets hasProjects
     *
     * @param bool|null $hasProjects hasProjects
     *
     * @return self
     */
    public function setHasProjects($hasProjects)
    {
        $this->container['hasProjects'] = $hasProjects;

        return $this;
    }

    /**
     * Gets hasPullRequests
     *
     * @return bool|null
     */
    public function getHasPullRequests()
    {
        return $this->container['hasPullRequests'];
    }

    /**
     * Sets hasPullRequests
     *
     * @param bool|null $hasPullRequests hasPullRequests
     *
     * @return self
     */
    public function setHasPullRequests($hasPullRequests)
    {
        $this->container['hasPullRequests'] = $hasPullRequests;

        return $this;
    }

    /**
     * Gets hasWiki
     *
     * @return bool|null
     */
    public function getHasWiki()
    {
        return $this->container['hasWiki'];
    }

    /**
     * Sets hasWiki
     *
     * @param bool|null $hasWiki hasWiki
     *
     * @return self
     */
    public function setHasWiki($hasWiki)
    {
        $this->container['hasWiki'] = $hasWiki;

        return $this;
    }

    /**
     * Gets htmlUrl
     *
     * @return string|null
     */
    public function getHtmlUrl()
    {
        return $this->container['htmlUrl'];
    }

    /**
     * Sets htmlUrl
     *
     * @param string|null $htmlUrl htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->container['htmlUrl'] = $htmlUrl;

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
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ignoreWhitespaceConflicts
     *
     * @return bool|null
     */
    public function getIgnoreWhitespaceConflicts()
    {
        return $this->container['ignoreWhitespaceConflicts'];
    }

    /**
     * Sets ignoreWhitespaceConflicts
     *
     * @param bool|null $ignoreWhitespaceConflicts ignoreWhitespaceConflicts
     *
     * @return self
     */
    public function setIgnoreWhitespaceConflicts($ignoreWhitespaceConflicts)
    {
        $this->container['ignoreWhitespaceConflicts'] = $ignoreWhitespaceConflicts;

        return $this;
    }

    /**
     * Gets internal
     *
     * @return bool|null
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal
     *
     * @param bool|null $internal internal
     *
     * @return self
     */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;

        return $this;
    }

    /**
     * Gets internalTracker
     *
     * @return \Efsa\Client\Gitea\Model\InternalTracker|null
     */
    public function getInternalTracker()
    {
        return $this->container['internalTracker'];
    }

    /**
     * Sets internalTracker
     *
     * @param \Efsa\Client\Gitea\Model\InternalTracker|null $internalTracker internalTracker
     *
     * @return self
     */
    public function setInternalTracker($internalTracker)
    {
        $this->container['internalTracker'] = $internalTracker;

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
     * @param string|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets languagesUrl
     *
     * @return string|null
     */
    public function getLanguagesUrl()
    {
        return $this->container['languagesUrl'];
    }

    /**
     * Sets languagesUrl
     *
     * @param string|null $languagesUrl languagesUrl
     *
     * @return self
     */
    public function setLanguagesUrl($languagesUrl)
    {
        $this->container['languagesUrl'] = $languagesUrl;

        return $this;
    }

    /**
     * Gets mirror
     *
     * @return bool|null
     */
    public function getMirror()
    {
        return $this->container['mirror'];
    }

    /**
     * Sets mirror
     *
     * @param bool|null $mirror mirror
     *
     * @return self
     */
    public function setMirror($mirror)
    {
        $this->container['mirror'] = $mirror;

        return $this;
    }

    /**
     * Gets mirrorInterval
     *
     * @return string|null
     */
    public function getMirrorInterval()
    {
        return $this->container['mirrorInterval'];
    }

    /**
     * Sets mirrorInterval
     *
     * @param string|null $mirrorInterval mirrorInterval
     *
     * @return self
     */
    public function setMirrorInterval($mirrorInterval)
    {
        $this->container['mirrorInterval'] = $mirrorInterval;

        return $this;
    }

    /**
     * Gets mirrorUpdated
     *
     * @return \DateTime|null
     */
    public function getMirrorUpdated()
    {
        return $this->container['mirrorUpdated'];
    }

    /**
     * Sets mirrorUpdated
     *
     * @param \DateTime|null $mirrorUpdated mirrorUpdated
     *
     * @return self
     */
    public function setMirrorUpdated($mirrorUpdated)
    {
        $this->container['mirrorUpdated'] = $mirrorUpdated;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets openIssuesCount
     *
     * @return int|null
     */
    public function getOpenIssuesCount()
    {
        return $this->container['openIssuesCount'];
    }

    /**
     * Sets openIssuesCount
     *
     * @param int|null $openIssuesCount openIssuesCount
     *
     * @return self
     */
    public function setOpenIssuesCount($openIssuesCount)
    {
        $this->container['openIssuesCount'] = $openIssuesCount;

        return $this;
    }

    /**
     * Gets openPrCounter
     *
     * @return int|null
     */
    public function getOpenPrCounter()
    {
        return $this->container['openPrCounter'];
    }

    /**
     * Sets openPrCounter
     *
     * @param int|null $openPrCounter openPrCounter
     *
     * @return self
     */
    public function setOpenPrCounter($openPrCounter)
    {
        $this->container['openPrCounter'] = $openPrCounter;

        return $this;
    }

    /**
     * Gets originalUrl
     *
     * @return string|null
     */
    public function getOriginalUrl()
    {
        return $this->container['originalUrl'];
    }

    /**
     * Sets originalUrl
     *
     * @param string|null $originalUrl originalUrl
     *
     * @return self
     */
    public function setOriginalUrl($originalUrl)
    {
        $this->container['originalUrl'] = $originalUrl;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Efsa\Client\Gitea\Model\User|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Efsa\Client\Gitea\Model\User|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \Efsa\Client\Gitea\Model\Repository|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Efsa\Client\Gitea\Model\Repository|null $parent parent
     *
     * @return self
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \Efsa\Client\Gitea\Model\Permission|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \Efsa\Client\Gitea\Model\Permission|null $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets private
     *
     * @return bool|null
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     *
     * @param bool|null $private private
     *
     * @return self
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets releaseCounter
     *
     * @return int|null
     */
    public function getReleaseCounter()
    {
        return $this->container['releaseCounter'];
    }

    /**
     * Sets releaseCounter
     *
     * @param int|null $releaseCounter releaseCounter
     *
     * @return self
     */
    public function setReleaseCounter($releaseCounter)
    {
        $this->container['releaseCounter'] = $releaseCounter;

        return $this;
    }

    /**
     * Gets repoTransfer
     *
     * @return \Efsa\Client\Gitea\Model\RepoTransfer|null
     */
    public function getRepoTransfer()
    {
        return $this->container['repoTransfer'];
    }

    /**
     * Sets repoTransfer
     *
     * @param \Efsa\Client\Gitea\Model\RepoTransfer|null $repoTransfer repoTransfer
     *
     * @return self
     */
    public function setRepoTransfer($repoTransfer)
    {
        $this->container['repoTransfer'] = $repoTransfer;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets sshUrl
     *
     * @return string|null
     */
    public function getSshUrl()
    {
        return $this->container['sshUrl'];
    }

    /**
     * Sets sshUrl
     *
     * @param string|null $sshUrl sshUrl
     *
     * @return self
     */
    public function setSshUrl($sshUrl)
    {
        $this->container['sshUrl'] = $sshUrl;

        return $this;
    }

    /**
     * Gets starsCount
     *
     * @return int|null
     */
    public function getStarsCount()
    {
        return $this->container['starsCount'];
    }

    /**
     * Sets starsCount
     *
     * @param int|null $starsCount starsCount
     *
     * @return self
     */
    public function setStarsCount($starsCount)
    {
        $this->container['starsCount'] = $starsCount;

        return $this;
    }

    /**
     * Gets template
     *
     * @return bool|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param bool|null $template template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets watchersCount
     *
     * @return int|null
     */
    public function getWatchersCount()
    {
        return $this->container['watchersCount'];
    }

    /**
     * Sets watchersCount
     *
     * @param int|null $watchersCount watchersCount
     *
     * @return self
     */
    public function setWatchersCount($watchersCount)
    {
        $this->container['watchersCount'] = $watchersCount;

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
     * @param string|null $website website
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


