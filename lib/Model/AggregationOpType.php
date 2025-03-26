<?php
/**
 * AggregationOpType
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
use \FastComments\Client\ObjectSerializer;

/**
 * AggregationOpType Class Doc Comment
 *
 * @category Class
 * @description The supported aggregation operation types
 * @package  FastComments\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AggregationOpType
{
    /**
     * Possible values of this enum
     */
    public const SUM = 'sum';

    public const COUNT_DISTINCT = 'countDistinct';

    public const DISTINCT = 'distinct';

    public const AVG = 'avg';

    public const MIN = 'min';

    public const MAX = 'max';

    public const COUNT = 'count';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUM,
            self::COUNT_DISTINCT,
            self::DISTINCT,
            self::AVG,
            self::MIN,
            self::MAX,
            self::COUNT
        ];
    }
}


