<?php
/**
 * LockComment200Response
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
 * LockComment200Response Class Doc Comment
 *
 * @category Class
 * @package  FastComments\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LockComment200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LockComment_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => '\FastComments\Client\Model\ImportedAPIStatusSUCCESS',
        'reason' => 'string',
        'code' => 'string',
        'secondary_code' => 'string',
        'banned_until' => 'float',
        'max_character_length' => 'float',
        'translated_error' => 'string',
        'custom_config' => '\FastComments\Client\Model\CustomConfigParameters'
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
        'reason' => null,
        'code' => null,
        'secondary_code' => null,
        'banned_until' => 'double',
        'max_character_length' => 'double',
        'translated_error' => null,
        'custom_config' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'reason' => false,
        'code' => false,
        'secondary_code' => false,
        'banned_until' => false,
        'max_character_length' => false,
        'translated_error' => false,
        'custom_config' => false
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
        'reason' => 'reason',
        'code' => 'code',
        'secondary_code' => 'secondaryCode',
        'banned_until' => 'bannedUntil',
        'max_character_length' => 'maxCharacterLength',
        'translated_error' => 'translatedError',
        'custom_config' => 'customConfig'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'reason' => 'setReason',
        'code' => 'setCode',
        'secondary_code' => 'setSecondaryCode',
        'banned_until' => 'setBannedUntil',
        'max_character_length' => 'setMaxCharacterLength',
        'translated_error' => 'setTranslatedError',
        'custom_config' => 'setCustomConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'reason' => 'getReason',
        'code' => 'getCode',
        'secondary_code' => 'getSecondaryCode',
        'banned_until' => 'getBannedUntil',
        'max_character_length' => 'getMaxCharacterLength',
        'translated_error' => 'getTranslatedError',
        'custom_config' => 'getCustomConfig'
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
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('secondary_code', $data ?? [], null);
        $this->setIfExists('banned_until', $data ?? [], null);
        $this->setIfExists('max_character_length', $data ?? [], null);
        $this->setIfExists('translated_error', $data ?? [], null);
        $this->setIfExists('custom_config', $data ?? [], null);
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
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
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
     * @return \FastComments\Client\Model\ImportedAPIStatusSUCCESS
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \FastComments\Client\Model\ImportedAPIStatusSUCCESS $status status
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
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets secondary_code
     *
     * @return string|null
     */
    public function getSecondaryCode()
    {
        return $this->container['secondary_code'];
    }

    /**
     * Sets secondary_code
     *
     * @param string|null $secondary_code secondary_code
     *
     * @return self
     */
    public function setSecondaryCode($secondary_code)
    {
        if (is_null($secondary_code)) {
            throw new \InvalidArgumentException('non-nullable secondary_code cannot be null');
        }
        $this->container['secondary_code'] = $secondary_code;

        return $this;
    }

    /**
     * Gets banned_until
     *
     * @return float|null
     */
    public function getBannedUntil()
    {
        return $this->container['banned_until'];
    }

    /**
     * Sets banned_until
     *
     * @param float|null $banned_until banned_until
     *
     * @return self
     */
    public function setBannedUntil($banned_until)
    {
        if (is_null($banned_until)) {
            throw new \InvalidArgumentException('non-nullable banned_until cannot be null');
        }
        $this->container['banned_until'] = $banned_until;

        return $this;
    }

    /**
     * Gets max_character_length
     *
     * @return float|null
     */
    public function getMaxCharacterLength()
    {
        return $this->container['max_character_length'];
    }

    /**
     * Sets max_character_length
     *
     * @param float|null $max_character_length max_character_length
     *
     * @return self
     */
    public function setMaxCharacterLength($max_character_length)
    {
        if (is_null($max_character_length)) {
            throw new \InvalidArgumentException('non-nullable max_character_length cannot be null');
        }
        $this->container['max_character_length'] = $max_character_length;

        return $this;
    }

    /**
     * Gets translated_error
     *
     * @return string|null
     */
    public function getTranslatedError()
    {
        return $this->container['translated_error'];
    }

    /**
     * Sets translated_error
     *
     * @param string|null $translated_error translated_error
     *
     * @return self
     */
    public function setTranslatedError($translated_error)
    {
        if (is_null($translated_error)) {
            throw new \InvalidArgumentException('non-nullable translated_error cannot be null');
        }
        $this->container['translated_error'] = $translated_error;

        return $this;
    }

    /**
     * Gets custom_config
     *
     * @return \FastComments\Client\Model\CustomConfigParameters|null
     */
    public function getCustomConfig()
    {
        return $this->container['custom_config'];
    }

    /**
     * Sets custom_config
     *
     * @param \FastComments\Client\Model\CustomConfigParameters|null $custom_config custom_config
     *
     * @return self
     */
    public function setCustomConfig($custom_config)
    {
        if (is_null($custom_config)) {
            throw new \InvalidArgumentException('non-nullable custom_config cannot be null');
        }
        $this->container['custom_config'] = $custom_config;

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


