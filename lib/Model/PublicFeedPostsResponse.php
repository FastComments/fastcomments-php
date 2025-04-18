<?php
/**
 * PublicFeedPostsResponse
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
 * PublicFeedPostsResponse Class Doc Comment
 *
 * @category Class
 * @package  FastComments\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicFeedPostsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicFeedPostsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => '\FastComments\Client\Model\APIStatus',
        'feed_posts' => '\FastComments\Client\Model\FeedPost[]',
        'url_id_ws' => 'string',
        'user_id_ws' => 'string',
        'tenant_id_ws' => 'string',
        'my_reacts' => 'array<string,array<string,bool>>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'feed_posts' => null,
        'url_id_ws' => null,
        'user_id_ws' => null,
        'tenant_id_ws' => null,
        'my_reacts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'feed_posts' => false,
        'url_id_ws' => false,
        'user_id_ws' => false,
        'tenant_id_ws' => false,
        'my_reacts' => false
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
        'status' => 'status',
        'feed_posts' => 'feedPosts',
        'url_id_ws' => 'urlIdWS',
        'user_id_ws' => 'userIdWS',
        'tenant_id_ws' => 'tenantIdWS',
        'my_reacts' => 'myReacts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'feed_posts' => 'setFeedPosts',
        'url_id_ws' => 'setUrlIdWs',
        'user_id_ws' => 'setUserIdWs',
        'tenant_id_ws' => 'setTenantIdWs',
        'my_reacts' => 'setMyReacts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'feed_posts' => 'getFeedPosts',
        'url_id_ws' => 'getUrlIdWs',
        'user_id_ws' => 'getUserIdWs',
        'tenant_id_ws' => 'getTenantIdWs',
        'my_reacts' => 'getMyReacts'
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('feed_posts', $data ?? [], null);
        $this->setIfExists('url_id_ws', $data ?? [], null);
        $this->setIfExists('user_id_ws', $data ?? [], null);
        $this->setIfExists('tenant_id_ws', $data ?? [], null);
        $this->setIfExists('my_reacts', $data ?? [], null);
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

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['feed_posts'] === null) {
            $invalidProperties[] = "'feed_posts' can't be null";
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
     * Gets status
     *
     * @return \FastComments\Client\Model\APIStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \FastComments\Client\Model\APIStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets feed_posts
     *
     * @return \FastComments\Client\Model\FeedPost[]
     */
    public function getFeedPosts()
    {
        return $this->container['feed_posts'];
    }

    /**
     * Sets feed_posts
     *
     * @param \FastComments\Client\Model\FeedPost[] $feed_posts feed_posts
     *
     * @return self
     */
    public function setFeedPosts($feed_posts)
    {
        if (is_null($feed_posts)) {
            throw new \InvalidArgumentException('non-nullable feed_posts cannot be null');
        }
        $this->container['feed_posts'] = $feed_posts;

        return $this;
    }

    /**
     * Gets url_id_ws
     *
     * @return string|null
     */
    public function getUrlIdWs()
    {
        return $this->container['url_id_ws'];
    }

    /**
     * Sets url_id_ws
     *
     * @param string|null $url_id_ws url_id_ws
     *
     * @return self
     */
    public function setUrlIdWs($url_id_ws)
    {
        if (is_null($url_id_ws)) {
            throw new \InvalidArgumentException('non-nullable url_id_ws cannot be null');
        }
        $this->container['url_id_ws'] = $url_id_ws;

        return $this;
    }

    /**
     * Gets user_id_ws
     *
     * @return string|null
     */
    public function getUserIdWs()
    {
        return $this->container['user_id_ws'];
    }

    /**
     * Sets user_id_ws
     *
     * @param string|null $user_id_ws user_id_ws
     *
     * @return self
     */
    public function setUserIdWs($user_id_ws)
    {
        if (is_null($user_id_ws)) {
            throw new \InvalidArgumentException('non-nullable user_id_ws cannot be null');
        }
        $this->container['user_id_ws'] = $user_id_ws;

        return $this;
    }

    /**
     * Gets tenant_id_ws
     *
     * @return string|null
     */
    public function getTenantIdWs()
    {
        return $this->container['tenant_id_ws'];
    }

    /**
     * Sets tenant_id_ws
     *
     * @param string|null $tenant_id_ws tenant_id_ws
     *
     * @return self
     */
    public function setTenantIdWs($tenant_id_ws)
    {
        if (is_null($tenant_id_ws)) {
            throw new \InvalidArgumentException('non-nullable tenant_id_ws cannot be null');
        }
        $this->container['tenant_id_ws'] = $tenant_id_ws;

        return $this;
    }

    /**
     * Gets my_reacts
     *
     * @return array<string,array<string,bool>>|null
     */
    public function getMyReacts()
    {
        return $this->container['my_reacts'];
    }

    /**
     * Sets my_reacts
     *
     * @param array<string,array<string,bool>>|null $my_reacts my_reacts
     *
     * @return self
     */
    public function setMyReacts($my_reacts)
    {
        if (is_null($my_reacts)) {
            throw new \InvalidArgumentException('non-nullable my_reacts cannot be null');
        }
        $this->container['my_reacts'] = $my_reacts;

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


