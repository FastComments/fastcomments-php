<?php
/**
 * PublicComment
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * fastcomments
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PublicComment Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicComment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicComment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'date' => '\DateTime',
        'user_id' => 'string',
        'anon_user_id' => 'string',
        'commenter_name' => 'string',
        'commenter_link' => 'string',
        'comment_html' => 'string',
        'parent_id' => 'string',
        'votes' => 'int',
        'votes_up' => 'int',
        'votes_down' => 'int',
        'verified' => 'bool',
        'avatar_src' => 'string',
        'is_spam' => 'bool',
        'has_images' => 'bool',
        'is_deleted' => 'bool',
        'is_deleted_user' => 'bool',
        'is_by_admin' => 'bool',
        'is_by_moderator' => 'bool',
        'is_pinned' => 'bool',
        'is_locked' => 'bool',
        'rating' => 'float',
        'display_label' => 'string',
        'badges' => '\OpenAPI\Client\Model\CommentUserBadgeInfo[]',
        'feedback_ids' => 'string[]',
        'view_count' => 'float',
        'is_unread' => 'bool',
        'my_vote_id' => 'string',
        'is_voted_down' => 'bool',
        'is_voted_up' => 'bool',
        'has_children' => 'bool',
        'nested_children_count' => 'int',
        'child_count' => 'int',
        'children' => '\OpenAPI\Client\Model\PublicComment[]',
        'is_flagged' => 'bool',
        'is_blocked' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        '_id' => null,
        'date' => 'date-time',
        'user_id' => null,
        'anon_user_id' => null,
        'commenter_name' => null,
        'commenter_link' => null,
        'comment_html' => null,
        'parent_id' => null,
        'votes' => 'int32',
        'votes_up' => 'int32',
        'votes_down' => 'int32',
        'verified' => null,
        'avatar_src' => null,
        'is_spam' => null,
        'has_images' => null,
        'is_deleted' => null,
        'is_deleted_user' => null,
        'is_by_admin' => null,
        'is_by_moderator' => null,
        'is_pinned' => null,
        'is_locked' => null,
        'rating' => 'double',
        'display_label' => null,
        'badges' => null,
        'feedback_ids' => null,
        'view_count' => 'double',
        'is_unread' => null,
        'my_vote_id' => null,
        'is_voted_down' => null,
        'is_voted_up' => null,
        'has_children' => null,
        'nested_children_count' => 'int32',
        'child_count' => 'int32',
        'children' => null,
        'is_flagged' => null,
        'is_blocked' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'date' => false,
        'user_id' => false,
        'anon_user_id' => false,
        'commenter_name' => false,
        'commenter_link' => false,
        'comment_html' => false,
        'parent_id' => false,
        'votes' => false,
        'votes_up' => false,
        'votes_down' => false,
        'verified' => false,
        'avatar_src' => false,
        'is_spam' => false,
        'has_images' => false,
        'is_deleted' => false,
        'is_deleted_user' => false,
        'is_by_admin' => false,
        'is_by_moderator' => false,
        'is_pinned' => false,
        'is_locked' => false,
        'rating' => false,
        'display_label' => false,
        'badges' => false,
        'feedback_ids' => false,
        'view_count' => false,
        'is_unread' => false,
        'my_vote_id' => false,
        'is_voted_down' => false,
        'is_voted_up' => false,
        'has_children' => false,
        'nested_children_count' => false,
        'child_count' => false,
        'children' => false,
        'is_flagged' => false,
        'is_blocked' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        '_id' => '_id',
        'date' => 'date',
        'user_id' => 'userId',
        'anon_user_id' => 'anonUserId',
        'commenter_name' => 'commenterName',
        'commenter_link' => 'commenterLink',
        'comment_html' => 'commentHTML',
        'parent_id' => 'parentId',
        'votes' => 'votes',
        'votes_up' => 'votesUp',
        'votes_down' => 'votesDown',
        'verified' => 'verified',
        'avatar_src' => 'avatarSrc',
        'is_spam' => 'isSpam',
        'has_images' => 'hasImages',
        'is_deleted' => 'isDeleted',
        'is_deleted_user' => 'isDeletedUser',
        'is_by_admin' => 'isByAdmin',
        'is_by_moderator' => 'isByModerator',
        'is_pinned' => 'isPinned',
        'is_locked' => 'isLocked',
        'rating' => 'rating',
        'display_label' => 'displayLabel',
        'badges' => 'badges',
        'feedback_ids' => 'feedbackIds',
        'view_count' => 'viewCount',
        'is_unread' => 'isUnread',
        'my_vote_id' => 'myVoteId',
        'is_voted_down' => 'isVotedDown',
        'is_voted_up' => 'isVotedUp',
        'has_children' => 'hasChildren',
        'nested_children_count' => 'nestedChildrenCount',
        'child_count' => 'childCount',
        'children' => 'children',
        'is_flagged' => 'isFlagged',
        'is_blocked' => 'isBlocked'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'date' => 'setDate',
        'user_id' => 'setUserId',
        'anon_user_id' => 'setAnonUserId',
        'commenter_name' => 'setCommenterName',
        'commenter_link' => 'setCommenterLink',
        'comment_html' => 'setCommentHtml',
        'parent_id' => 'setParentId',
        'votes' => 'setVotes',
        'votes_up' => 'setVotesUp',
        'votes_down' => 'setVotesDown',
        'verified' => 'setVerified',
        'avatar_src' => 'setAvatarSrc',
        'is_spam' => 'setIsSpam',
        'has_images' => 'setHasImages',
        'is_deleted' => 'setIsDeleted',
        'is_deleted_user' => 'setIsDeletedUser',
        'is_by_admin' => 'setIsByAdmin',
        'is_by_moderator' => 'setIsByModerator',
        'is_pinned' => 'setIsPinned',
        'is_locked' => 'setIsLocked',
        'rating' => 'setRating',
        'display_label' => 'setDisplayLabel',
        'badges' => 'setBadges',
        'feedback_ids' => 'setFeedbackIds',
        'view_count' => 'setViewCount',
        'is_unread' => 'setIsUnread',
        'my_vote_id' => 'setMyVoteId',
        'is_voted_down' => 'setIsVotedDown',
        'is_voted_up' => 'setIsVotedUp',
        'has_children' => 'setHasChildren',
        'nested_children_count' => 'setNestedChildrenCount',
        'child_count' => 'setChildCount',
        'children' => 'setChildren',
        'is_flagged' => 'setIsFlagged',
        'is_blocked' => 'setIsBlocked'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'date' => 'getDate',
        'user_id' => 'getUserId',
        'anon_user_id' => 'getAnonUserId',
        'commenter_name' => 'getCommenterName',
        'commenter_link' => 'getCommenterLink',
        'comment_html' => 'getCommentHtml',
        'parent_id' => 'getParentId',
        'votes' => 'getVotes',
        'votes_up' => 'getVotesUp',
        'votes_down' => 'getVotesDown',
        'verified' => 'getVerified',
        'avatar_src' => 'getAvatarSrc',
        'is_spam' => 'getIsSpam',
        'has_images' => 'getHasImages',
        'is_deleted' => 'getIsDeleted',
        'is_deleted_user' => 'getIsDeletedUser',
        'is_by_admin' => 'getIsByAdmin',
        'is_by_moderator' => 'getIsByModerator',
        'is_pinned' => 'getIsPinned',
        'is_locked' => 'getIsLocked',
        'rating' => 'getRating',
        'display_label' => 'getDisplayLabel',
        'badges' => 'getBadges',
        'feedback_ids' => 'getFeedbackIds',
        'view_count' => 'getViewCount',
        'is_unread' => 'getIsUnread',
        'my_vote_id' => 'getMyVoteId',
        'is_voted_down' => 'getIsVotedDown',
        'is_voted_up' => 'getIsVotedUp',
        'has_children' => 'getHasChildren',
        'nested_children_count' => 'getNestedChildrenCount',
        'child_count' => 'getChildCount',
        'children' => 'getChildren',
        'is_flagged' => 'getIsFlagged',
        'is_blocked' => 'getIsBlocked'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('_id', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('anon_user_id', $data ?? [], null);
        $this->setIfExists('commenter_name', $data ?? [], null);
        $this->setIfExists('commenter_link', $data ?? [], null);
        $this->setIfExists('comment_html', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('votes', $data ?? [], null);
        $this->setIfExists('votes_up', $data ?? [], null);
        $this->setIfExists('votes_down', $data ?? [], null);
        $this->setIfExists('verified', $data ?? [], null);
        $this->setIfExists('avatar_src', $data ?? [], null);
        $this->setIfExists('is_spam', $data ?? [], null);
        $this->setIfExists('has_images', $data ?? [], null);
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('is_deleted_user', $data ?? [], null);
        $this->setIfExists('is_by_admin', $data ?? [], null);
        $this->setIfExists('is_by_moderator', $data ?? [], null);
        $this->setIfExists('is_pinned', $data ?? [], null);
        $this->setIfExists('is_locked', $data ?? [], null);
        $this->setIfExists('rating', $data ?? [], null);
        $this->setIfExists('display_label', $data ?? [], null);
        $this->setIfExists('badges', $data ?? [], null);
        $this->setIfExists('feedback_ids', $data ?? [], null);
        $this->setIfExists('view_count', $data ?? [], null);
        $this->setIfExists('is_unread', $data ?? [], null);
        $this->setIfExists('my_vote_id', $data ?? [], null);
        $this->setIfExists('is_voted_down', $data ?? [], null);
        $this->setIfExists('is_voted_up', $data ?? [], null);
        $this->setIfExists('has_children', $data ?? [], null);
        $this->setIfExists('nested_children_count', $data ?? [], null);
        $this->setIfExists('child_count', $data ?? [], null);
        $this->setIfExists('children', $data ?? [], null);
        $this->setIfExists('is_flagged', $data ?? [], null);
        $this->setIfExists('is_blocked', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['_id'] === null) {
            $invalidProperties[] = "'_id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['commenter_name'] === null) {
            $invalidProperties[] = "'commenter_name' can't be null";
        }
        if ($this->container['comment_html'] === null) {
            $invalidProperties[] = "'comment_html' can't be null";
        }
        if ($this->container['verified'] === null) {
            $invalidProperties[] = "'verified' can't be null";
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
     * Gets _id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param string $_id _id
     *
     * @return self
     */
    public function setId($_id)
    {
        if (is_null($_id)) {
            throw new \InvalidArgumentException('non-nullable _id cannot be null');
        }
        $this->container['_id'] = $_id;

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
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets anon_user_id
     *
     * @return string|null
     */
    public function getAnonUserId()
    {
        return $this->container['anon_user_id'];
    }

    /**
     * Sets anon_user_id
     *
     * @param string|null $anon_user_id anon_user_id
     *
     * @return self
     */
    public function setAnonUserId($anon_user_id)
    {
        if (is_null($anon_user_id)) {
            throw new \InvalidArgumentException('non-nullable anon_user_id cannot be null');
        }
        $this->container['anon_user_id'] = $anon_user_id;

        return $this;
    }

    /**
     * Gets commenter_name
     *
     * @return string
     */
    public function getCommenterName()
    {
        return $this->container['commenter_name'];
    }

    /**
     * Sets commenter_name
     *
     * @param string $commenter_name commenter_name
     *
     * @return self
     */
    public function setCommenterName($commenter_name)
    {
        if (is_null($commenter_name)) {
            throw new \InvalidArgumentException('non-nullable commenter_name cannot be null');
        }
        $this->container['commenter_name'] = $commenter_name;

        return $this;
    }

    /**
     * Gets commenter_link
     *
     * @return string|null
     */
    public function getCommenterLink()
    {
        return $this->container['commenter_link'];
    }

    /**
     * Sets commenter_link
     *
     * @param string|null $commenter_link commenter_link
     *
     * @return self
     */
    public function setCommenterLink($commenter_link)
    {
        if (is_null($commenter_link)) {
            throw new \InvalidArgumentException('non-nullable commenter_link cannot be null');
        }
        $this->container['commenter_link'] = $commenter_link;

        return $this;
    }

    /**
     * Gets comment_html
     *
     * @return string
     */
    public function getCommentHtml()
    {
        return $this->container['comment_html'];
    }

    /**
     * Sets comment_html
     *
     * @param string $comment_html comment_html
     *
     * @return self
     */
    public function setCommentHtml($comment_html)
    {
        if (is_null($comment_html)) {
            throw new \InvalidArgumentException('non-nullable comment_html cannot be null');
        }
        $this->container['comment_html'] = $comment_html;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets votes
     *
     * @return int|null
     */
    public function getVotes()
    {
        return $this->container['votes'];
    }

    /**
     * Sets votes
     *
     * @param int|null $votes votes
     *
     * @return self
     */
    public function setVotes($votes)
    {
        if (is_null($votes)) {
            throw new \InvalidArgumentException('non-nullable votes cannot be null');
        }
        $this->container['votes'] = $votes;

        return $this;
    }

    /**
     * Gets votes_up
     *
     * @return int|null
     */
    public function getVotesUp()
    {
        return $this->container['votes_up'];
    }

    /**
     * Sets votes_up
     *
     * @param int|null $votes_up votes_up
     *
     * @return self
     */
    public function setVotesUp($votes_up)
    {
        if (is_null($votes_up)) {
            throw new \InvalidArgumentException('non-nullable votes_up cannot be null');
        }
        $this->container['votes_up'] = $votes_up;

        return $this;
    }

    /**
     * Gets votes_down
     *
     * @return int|null
     */
    public function getVotesDown()
    {
        return $this->container['votes_down'];
    }

    /**
     * Sets votes_down
     *
     * @param int|null $votes_down votes_down
     *
     * @return self
     */
    public function setVotesDown($votes_down)
    {
        if (is_null($votes_down)) {
            throw new \InvalidArgumentException('non-nullable votes_down cannot be null');
        }
        $this->container['votes_down'] = $votes_down;

        return $this;
    }

    /**
     * Gets verified
     *
     * @return bool
     */
    public function getVerified()
    {
        return $this->container['verified'];
    }

    /**
     * Sets verified
     *
     * @param bool $verified verified
     *
     * @return self
     */
    public function setVerified($verified)
    {
        if (is_null($verified)) {
            throw new \InvalidArgumentException('non-nullable verified cannot be null');
        }
        $this->container['verified'] = $verified;

        return $this;
    }

    /**
     * Gets avatar_src
     *
     * @return string|null
     */
    public function getAvatarSrc()
    {
        return $this->container['avatar_src'];
    }

    /**
     * Sets avatar_src
     *
     * @param string|null $avatar_src avatar_src
     *
     * @return self
     */
    public function setAvatarSrc($avatar_src)
    {
        if (is_null($avatar_src)) {
            throw new \InvalidArgumentException('non-nullable avatar_src cannot be null');
        }
        $this->container['avatar_src'] = $avatar_src;

        return $this;
    }

    /**
     * Gets is_spam
     *
     * @return bool|null
     */
    public function getIsSpam()
    {
        return $this->container['is_spam'];
    }

    /**
     * Sets is_spam
     *
     * @param bool|null $is_spam is_spam
     *
     * @return self
     */
    public function setIsSpam($is_spam)
    {
        if (is_null($is_spam)) {
            throw new \InvalidArgumentException('non-nullable is_spam cannot be null');
        }
        $this->container['is_spam'] = $is_spam;

        return $this;
    }

    /**
     * Gets has_images
     *
     * @return bool|null
     */
    public function getHasImages()
    {
        return $this->container['has_images'];
    }

    /**
     * Sets has_images
     *
     * @param bool|null $has_images has_images
     *
     * @return self
     */
    public function setHasImages($has_images)
    {
        if (is_null($has_images)) {
            throw new \InvalidArgumentException('non-nullable has_images cannot be null');
        }
        $this->container['has_images'] = $has_images;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool|null $is_deleted is_deleted
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {
        if (is_null($is_deleted)) {
            throw new \InvalidArgumentException('non-nullable is_deleted cannot be null');
        }
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets is_deleted_user
     *
     * @return bool|null
     */
    public function getIsDeletedUser()
    {
        return $this->container['is_deleted_user'];
    }

    /**
     * Sets is_deleted_user
     *
     * @param bool|null $is_deleted_user is_deleted_user
     *
     * @return self
     */
    public function setIsDeletedUser($is_deleted_user)
    {
        if (is_null($is_deleted_user)) {
            throw new \InvalidArgumentException('non-nullable is_deleted_user cannot be null');
        }
        $this->container['is_deleted_user'] = $is_deleted_user;

        return $this;
    }

    /**
     * Gets is_by_admin
     *
     * @return bool|null
     */
    public function getIsByAdmin()
    {
        return $this->container['is_by_admin'];
    }

    /**
     * Sets is_by_admin
     *
     * @param bool|null $is_by_admin is_by_admin
     *
     * @return self
     */
    public function setIsByAdmin($is_by_admin)
    {
        if (is_null($is_by_admin)) {
            throw new \InvalidArgumentException('non-nullable is_by_admin cannot be null');
        }
        $this->container['is_by_admin'] = $is_by_admin;

        return $this;
    }

    /**
     * Gets is_by_moderator
     *
     * @return bool|null
     */
    public function getIsByModerator()
    {
        return $this->container['is_by_moderator'];
    }

    /**
     * Sets is_by_moderator
     *
     * @param bool|null $is_by_moderator is_by_moderator
     *
     * @return self
     */
    public function setIsByModerator($is_by_moderator)
    {
        if (is_null($is_by_moderator)) {
            throw new \InvalidArgumentException('non-nullable is_by_moderator cannot be null');
        }
        $this->container['is_by_moderator'] = $is_by_moderator;

        return $this;
    }

    /**
     * Gets is_pinned
     *
     * @return bool|null
     */
    public function getIsPinned()
    {
        return $this->container['is_pinned'];
    }

    /**
     * Sets is_pinned
     *
     * @param bool|null $is_pinned is_pinned
     *
     * @return self
     */
    public function setIsPinned($is_pinned)
    {
        if (is_null($is_pinned)) {
            throw new \InvalidArgumentException('non-nullable is_pinned cannot be null');
        }
        $this->container['is_pinned'] = $is_pinned;

        return $this;
    }

    /**
     * Gets is_locked
     *
     * @return bool|null
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     * @param bool|null $is_locked is_locked
     *
     * @return self
     */
    public function setIsLocked($is_locked)
    {
        if (is_null($is_locked)) {
            throw new \InvalidArgumentException('non-nullable is_locked cannot be null');
        }
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return float|null
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param float|null $rating rating
     *
     * @return self
     */
    public function setRating($rating)
    {
        if (is_null($rating)) {
            throw new \InvalidArgumentException('non-nullable rating cannot be null');
        }
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets display_label
     *
     * @return string|null
     */
    public function getDisplayLabel()
    {
        return $this->container['display_label'];
    }

    /**
     * Sets display_label
     *
     * @param string|null $display_label display_label
     *
     * @return self
     */
    public function setDisplayLabel($display_label)
    {
        if (is_null($display_label)) {
            throw new \InvalidArgumentException('non-nullable display_label cannot be null');
        }
        $this->container['display_label'] = $display_label;

        return $this;
    }

    /**
     * Gets badges
     *
     * @return \OpenAPI\Client\Model\CommentUserBadgeInfo[]|null
     */
    public function getBadges()
    {
        return $this->container['badges'];
    }

    /**
     * Sets badges
     *
     * @param \OpenAPI\Client\Model\CommentUserBadgeInfo[]|null $badges badges
     *
     * @return self
     */
    public function setBadges($badges)
    {
        if (is_null($badges)) {
            throw new \InvalidArgumentException('non-nullable badges cannot be null');
        }
        $this->container['badges'] = $badges;

        return $this;
    }

    /**
     * Gets feedback_ids
     *
     * @return string[]|null
     */
    public function getFeedbackIds()
    {
        return $this->container['feedback_ids'];
    }

    /**
     * Sets feedback_ids
     *
     * @param string[]|null $feedback_ids feedback_ids
     *
     * @return self
     */
    public function setFeedbackIds($feedback_ids)
    {
        if (is_null($feedback_ids)) {
            throw new \InvalidArgumentException('non-nullable feedback_ids cannot be null');
        }
        $this->container['feedback_ids'] = $feedback_ids;

        return $this;
    }

    /**
     * Gets view_count
     *
     * @return float|null
     */
    public function getViewCount()
    {
        return $this->container['view_count'];
    }

    /**
     * Sets view_count
     *
     * @param float|null $view_count view_count
     *
     * @return self
     */
    public function setViewCount($view_count)
    {
        if (is_null($view_count)) {
            throw new \InvalidArgumentException('non-nullable view_count cannot be null');
        }
        $this->container['view_count'] = $view_count;

        return $this;
    }

    /**
     * Gets is_unread
     *
     * @return bool|null
     */
    public function getIsUnread()
    {
        return $this->container['is_unread'];
    }

    /**
     * Sets is_unread
     *
     * @param bool|null $is_unread is_unread
     *
     * @return self
     */
    public function setIsUnread($is_unread)
    {
        if (is_null($is_unread)) {
            throw new \InvalidArgumentException('non-nullable is_unread cannot be null');
        }
        $this->container['is_unread'] = $is_unread;

        return $this;
    }

    /**
     * Gets my_vote_id
     *
     * @return string|null
     */
    public function getMyVoteId()
    {
        return $this->container['my_vote_id'];
    }

    /**
     * Sets my_vote_id
     *
     * @param string|null $my_vote_id my_vote_id
     *
     * @return self
     */
    public function setMyVoteId($my_vote_id)
    {
        if (is_null($my_vote_id)) {
            throw new \InvalidArgumentException('non-nullable my_vote_id cannot be null');
        }
        $this->container['my_vote_id'] = $my_vote_id;

        return $this;
    }

    /**
     * Gets is_voted_down
     *
     * @return bool|null
     */
    public function getIsVotedDown()
    {
        return $this->container['is_voted_down'];
    }

    /**
     * Sets is_voted_down
     *
     * @param bool|null $is_voted_down is_voted_down
     *
     * @return self
     */
    public function setIsVotedDown($is_voted_down)
    {
        if (is_null($is_voted_down)) {
            throw new \InvalidArgumentException('non-nullable is_voted_down cannot be null');
        }
        $this->container['is_voted_down'] = $is_voted_down;

        return $this;
    }

    /**
     * Gets is_voted_up
     *
     * @return bool|null
     */
    public function getIsVotedUp()
    {
        return $this->container['is_voted_up'];
    }

    /**
     * Sets is_voted_up
     *
     * @param bool|null $is_voted_up is_voted_up
     *
     * @return self
     */
    public function setIsVotedUp($is_voted_up)
    {
        if (is_null($is_voted_up)) {
            throw new \InvalidArgumentException('non-nullable is_voted_up cannot be null');
        }
        $this->container['is_voted_up'] = $is_voted_up;

        return $this;
    }

    /**
     * Gets has_children
     *
     * @return bool|null
     */
    public function getHasChildren()
    {
        return $this->container['has_children'];
    }

    /**
     * Sets has_children
     *
     * @param bool|null $has_children This is always set when asTree=true
     *
     * @return self
     */
    public function setHasChildren($has_children)
    {
        if (is_null($has_children)) {
            throw new \InvalidArgumentException('non-nullable has_children cannot be null');
        }
        $this->container['has_children'] = $has_children;

        return $this;
    }

    /**
     * Gets nested_children_count
     *
     * @return int|null
     */
    public function getNestedChildrenCount()
    {
        return $this->container['nested_children_count'];
    }

    /**
     * Sets nested_children_count
     *
     * @param int|null $nested_children_count The total nested child count included in this response (may be more available w/ pagination) Only set with asTree=true, otherwise this will be null.
     *
     * @return self
     */
    public function setNestedChildrenCount($nested_children_count)
    {
        if (is_null($nested_children_count)) {
            throw new \InvalidArgumentException('non-nullable nested_children_count cannot be null');
        }
        $this->container['nested_children_count'] = $nested_children_count;

        return $this;
    }

    /**
     * Gets child_count
     *
     * @return int|null
     */
    public function getChildCount()
    {
        return $this->container['child_count'];
    }

    /**
     * Sets child_count
     *
     * @param int|null $child_count You must ask the API to count children (with asTree=true&countChildren=true), otherwise this will be null. This will be the complete direct child count, whereas children may only contain a subset based on pagination.
     *
     * @return self
     */
    public function setChildCount($child_count)
    {
        if (is_null($child_count)) {
            throw new \InvalidArgumentException('non-nullable child_count cannot be null');
        }
        $this->container['child_count'] = $child_count;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \OpenAPI\Client\Model\PublicComment[]|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \OpenAPI\Client\Model\PublicComment[]|null $children children
     *
     * @return self
     */
    public function setChildren($children)
    {
        if (is_null($children)) {
            throw new \InvalidArgumentException('non-nullable children cannot be null');
        }
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets is_flagged
     *
     * @return bool|null
     */
    public function getIsFlagged()
    {
        return $this->container['is_flagged'];
    }

    /**
     * Sets is_flagged
     *
     * @param bool|null $is_flagged is_flagged
     *
     * @return self
     */
    public function setIsFlagged($is_flagged)
    {
        if (is_null($is_flagged)) {
            throw new \InvalidArgumentException('non-nullable is_flagged cannot be null');
        }
        $this->container['is_flagged'] = $is_flagged;

        return $this;
    }

    /**
     * Gets is_blocked
     *
     * @return bool|null
     */
    public function getIsBlocked()
    {
        return $this->container['is_blocked'];
    }

    /**
     * Sets is_blocked
     *
     * @param bool|null $is_blocked is_blocked
     *
     * @return self
     */
    public function setIsBlocked($is_blocked)
    {
        if (is_null($is_blocked)) {
            throw new \InvalidArgumentException('non-nullable is_blocked cannot be null');
        }
        $this->container['is_blocked'] = $is_blocked;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


