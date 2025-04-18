<?php
/**
 * FeedPost
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  FastComments\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * fastcomments
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.0
 * Contact: support@fastcomments.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FastComments\Client\Model;

use \ArrayAccess;
use \FastComments\Client\ObjectSerializer;

/**
 * FeedPost Class Doc Comment
 *
 * @category Class
 * @package  FastComments\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FeedPost implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'tenant_id' => 'string',
        'title' => 'string',
        'from_user_id' => 'string',
        'from_user_display_name' => 'string',
        'from_user_avatar' => 'string',
        'from_ip_hash' => 'string',
        'tags' => 'string[]',
        'weight' => 'float',
        'meta' => 'array<string,string>',
        'content_html' => 'string',
        'media' => '\FastComments\Client\Model\FeedPostMediaItem[]',
        'links' => '\FastComments\Client\Model\FeedPostLink[]',
        'created_at' => '\DateTime',
        'reacts' => 'array<string,float>'
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
        'tenant_id' => null,
        'title' => null,
        'from_user_id' => null,
        'from_user_display_name' => null,
        'from_user_avatar' => null,
        'from_ip_hash' => null,
        'tags' => null,
        'weight' => 'double',
        'meta' => null,
        'content_html' => null,
        'media' => null,
        'links' => null,
        'created_at' => 'date-time',
        'reacts' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'tenant_id' => false,
        'title' => false,
        'from_user_id' => false,
        'from_user_display_name' => true,
        'from_user_avatar' => true,
        'from_ip_hash' => false,
        'tags' => false,
        'weight' => false,
        'meta' => false,
        'content_html' => false,
        'media' => false,
        'links' => false,
        'created_at' => false,
        'reacts' => false
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
        'tenant_id' => 'tenantId',
        'title' => 'title',
        'from_user_id' => 'fromUserId',
        'from_user_display_name' => 'fromUserDisplayName',
        'from_user_avatar' => 'fromUserAvatar',
        'from_ip_hash' => 'fromIpHash',
        'tags' => 'tags',
        'weight' => 'weight',
        'meta' => 'meta',
        'content_html' => 'contentHTML',
        'media' => 'media',
        'links' => 'links',
        'created_at' => 'createdAt',
        'reacts' => 'reacts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'tenant_id' => 'setTenantId',
        'title' => 'setTitle',
        'from_user_id' => 'setFromUserId',
        'from_user_display_name' => 'setFromUserDisplayName',
        'from_user_avatar' => 'setFromUserAvatar',
        'from_ip_hash' => 'setFromIpHash',
        'tags' => 'setTags',
        'weight' => 'setWeight',
        'meta' => 'setMeta',
        'content_html' => 'setContentHtml',
        'media' => 'setMedia',
        'links' => 'setLinks',
        'created_at' => 'setCreatedAt',
        'reacts' => 'setReacts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'tenant_id' => 'getTenantId',
        'title' => 'getTitle',
        'from_user_id' => 'getFromUserId',
        'from_user_display_name' => 'getFromUserDisplayName',
        'from_user_avatar' => 'getFromUserAvatar',
        'from_ip_hash' => 'getFromIpHash',
        'tags' => 'getTags',
        'weight' => 'getWeight',
        'meta' => 'getMeta',
        'content_html' => 'getContentHtml',
        'media' => 'getMedia',
        'links' => 'getLinks',
        'created_at' => 'getCreatedAt',
        'reacts' => 'getReacts'
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
        $this->setIfExists('tenant_id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('from_user_id', $data ?? [], null);
        $this->setIfExists('from_user_display_name', $data ?? [], null);
        $this->setIfExists('from_user_avatar', $data ?? [], null);
        $this->setIfExists('from_ip_hash', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('content_html', $data ?? [], null);
        $this->setIfExists('media', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('reacts', $data ?? [], null);
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
        if ($this->container['tenant_id'] === null) {
            $invalidProperties[] = "'tenant_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
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
     * Gets tenant_id
     *
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string $tenant_id tenant_id
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        if (is_null($tenant_id)) {
            throw new \InvalidArgumentException('non-nullable tenant_id cannot be null');
        }
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets from_user_id
     *
     * @return string|null
     */
    public function getFromUserId()
    {
        return $this->container['from_user_id'];
    }

    /**
     * Sets from_user_id
     *
     * @param string|null $from_user_id from_user_id
     *
     * @return self
     */
    public function setFromUserId($from_user_id)
    {
        if (is_null($from_user_id)) {
            throw new \InvalidArgumentException('non-nullable from_user_id cannot be null');
        }
        $this->container['from_user_id'] = $from_user_id;

        return $this;
    }

    /**
     * Gets from_user_display_name
     *
     * @return string|null
     */
    public function getFromUserDisplayName()
    {
        return $this->container['from_user_display_name'];
    }

    /**
     * Sets from_user_display_name
     *
     * @param string|null $from_user_display_name from_user_display_name
     *
     * @return self
     */
    public function setFromUserDisplayName($from_user_display_name)
    {
        if (is_null($from_user_display_name)) {
            array_push($this->openAPINullablesSetToNull, 'from_user_display_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('from_user_display_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['from_user_display_name'] = $from_user_display_name;

        return $this;
    }

    /**
     * Gets from_user_avatar
     *
     * @return string|null
     */
    public function getFromUserAvatar()
    {
        return $this->container['from_user_avatar'];
    }

    /**
     * Sets from_user_avatar
     *
     * @param string|null $from_user_avatar from_user_avatar
     *
     * @return self
     */
    public function setFromUserAvatar($from_user_avatar)
    {
        if (is_null($from_user_avatar)) {
            array_push($this->openAPINullablesSetToNull, 'from_user_avatar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('from_user_avatar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['from_user_avatar'] = $from_user_avatar;

        return $this;
    }

    /**
     * Gets from_ip_hash
     *
     * @return string|null
     */
    public function getFromIpHash()
    {
        return $this->container['from_ip_hash'];
    }

    /**
     * Sets from_ip_hash
     *
     * @param string|null $from_ip_hash from_ip_hash
     *
     * @return self
     */
    public function setFromIpHash($from_ip_hash)
    {
        if (is_null($from_ip_hash)) {
            throw new \InvalidArgumentException('non-nullable from_ip_hash cannot be null');
        }
        $this->container['from_ip_hash'] = $from_ip_hash;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float|null $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return array<string,string>|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param array<string,string>|null $meta Construct a type with a set of properties K of type T
     *
     * @return self
     */
    public function setMeta($meta)
    {
        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets content_html
     *
     * @return string|null
     */
    public function getContentHtml()
    {
        return $this->container['content_html'];
    }

    /**
     * Sets content_html
     *
     * @param string|null $content_html content_html
     *
     * @return self
     */
    public function setContentHtml($content_html)
    {
        if (is_null($content_html)) {
            throw new \InvalidArgumentException('non-nullable content_html cannot be null');
        }
        $this->container['content_html'] = $content_html;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \FastComments\Client\Model\FeedPostMediaItem[]|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \FastComments\Client\Model\FeedPostMediaItem[]|null $media media
     *
     * @return self
     */
    public function setMedia($media)
    {
        if (is_null($media)) {
            throw new \InvalidArgumentException('non-nullable media cannot be null');
        }
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \FastComments\Client\Model\FeedPostLink[]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \FastComments\Client\Model\FeedPostLink[]|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets reacts
     *
     * @return array<string,float>|null
     */
    public function getReacts()
    {
        return $this->container['reacts'];
    }

    /**
     * Sets reacts
     *
     * @param array<string,float>|null $reacts Construct a type with a set of properties K of type T
     *
     * @return self
     */
    public function setReacts($reacts)
    {
        if (is_null($reacts)) {
            throw new \InvalidArgumentException('non-nullable reacts cannot be null');
        }
        $this->container['reacts'] = $reacts;

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


