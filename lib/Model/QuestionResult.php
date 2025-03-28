<?php
/**
 * QuestionResult
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
 * QuestionResult Class Doc Comment
 *
 * @category Class
 * @package  FastComments\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class QuestionResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'QuestionResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'tenant_id' => 'string',
        'url_id' => 'string',
        'anon_user_id' => 'string',
        'user_id' => 'string',
        'created_at' => '\DateTime',
        'value' => 'float',
        'comment_id' => 'string',
        'question_id' => 'string',
        'meta' => '\FastComments\Client\Model\MetaItem[]',
        'ip_hash' => 'string'
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
        'url_id' => null,
        'anon_user_id' => null,
        'user_id' => null,
        'created_at' => 'date-time',
        'value' => 'double',
        'comment_id' => null,
        'question_id' => null,
        'meta' => null,
        'ip_hash' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'tenant_id' => false,
        'url_id' => false,
        'anon_user_id' => false,
        'user_id' => false,
        'created_at' => false,
        'value' => false,
        'comment_id' => true,
        'question_id' => false,
        'meta' => true,
        'ip_hash' => false
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
        'url_id' => 'urlId',
        'anon_user_id' => 'anonUserId',
        'user_id' => 'userId',
        'created_at' => 'createdAt',
        'value' => 'value',
        'comment_id' => 'commentId',
        'question_id' => 'questionId',
        'meta' => 'meta',
        'ip_hash' => 'ipHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'tenant_id' => 'setTenantId',
        'url_id' => 'setUrlId',
        'anon_user_id' => 'setAnonUserId',
        'user_id' => 'setUserId',
        'created_at' => 'setCreatedAt',
        'value' => 'setValue',
        'comment_id' => 'setCommentId',
        'question_id' => 'setQuestionId',
        'meta' => 'setMeta',
        'ip_hash' => 'setIpHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'tenant_id' => 'getTenantId',
        'url_id' => 'getUrlId',
        'anon_user_id' => 'getAnonUserId',
        'user_id' => 'getUserId',
        'created_at' => 'getCreatedAt',
        'value' => 'getValue',
        'comment_id' => 'getCommentId',
        'question_id' => 'getQuestionId',
        'meta' => 'getMeta',
        'ip_hash' => 'getIpHash'
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
        $this->setIfExists('url_id', $data ?? [], null);
        $this->setIfExists('anon_user_id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('comment_id', $data ?? [], null);
        $this->setIfExists('question_id', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('ip_hash', $data ?? [], null);
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
        if ($this->container['url_id'] === null) {
            $invalidProperties[] = "'url_id' can't be null";
        }
        if ($this->container['anon_user_id'] === null) {
            $invalidProperties[] = "'anon_user_id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['question_id'] === null) {
            $invalidProperties[] = "'question_id' can't be null";
        }
        if ($this->container['ip_hash'] === null) {
            $invalidProperties[] = "'ip_hash' can't be null";
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
     * Gets url_id
     *
     * @return string
     */
    public function getUrlId()
    {
        return $this->container['url_id'];
    }

    /**
     * Sets url_id
     *
     * @param string $url_id url_id
     *
     * @return self
     */
    public function setUrlId($url_id)
    {
        if (is_null($url_id)) {
            throw new \InvalidArgumentException('non-nullable url_id cannot be null');
        }
        $this->container['url_id'] = $url_id;

        return $this;
    }

    /**
     * Gets anon_user_id
     *
     * @return string
     */
    public function getAnonUserId()
    {
        return $this->container['anon_user_id'];
    }

    /**
     * Sets anon_user_id
     *
     * @param string $anon_user_id anon_user_id
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
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
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
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets comment_id
     *
     * @return string|null
     */
    public function getCommentId()
    {
        return $this->container['comment_id'];
    }

    /**
     * Sets comment_id
     *
     * @param string|null $comment_id comment_id
     *
     * @return self
     */
    public function setCommentId($comment_id)
    {
        if (is_null($comment_id)) {
            array_push($this->openAPINullablesSetToNull, 'comment_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('comment_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['comment_id'] = $comment_id;

        return $this;
    }

    /**
     * Gets question_id
     *
     * @return string
     */
    public function getQuestionId()
    {
        return $this->container['question_id'];
    }

    /**
     * Sets question_id
     *
     * @param string $question_id question_id
     *
     * @return self
     */
    public function setQuestionId($question_id)
    {
        if (is_null($question_id)) {
            throw new \InvalidArgumentException('non-nullable question_id cannot be null');
        }
        $this->container['question_id'] = $question_id;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \FastComments\Client\Model\MetaItem[]|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \FastComments\Client\Model\MetaItem[]|null $meta meta
     *
     * @return self
     */
    public function setMeta($meta)
    {
        if (is_null($meta)) {
            array_push($this->openAPINullablesSetToNull, 'meta');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('meta', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets ip_hash
     *
     * @return string
     */
    public function getIpHash()
    {
        return $this->container['ip_hash'];
    }

    /**
     * Sets ip_hash
     *
     * @param string $ip_hash ip_hash
     *
     * @return self
     */
    public function setIpHash($ip_hash)
    {
        if (is_null($ip_hash)) {
            throw new \InvalidArgumentException('non-nullable ip_hash cannot be null');
        }
        $this->container['ip_hash'] = $ip_hash;

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


