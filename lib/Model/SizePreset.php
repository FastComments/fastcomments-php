<?php
/**
 * SizePreset
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
 * SizePreset Class Doc Comment
 *
 * @category Class
 * @package  FastComments\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SizePreset
{
    /**
     * Possible values of this enum
     */
    public const _DEFAULT = 'Default';

    public const CROSS_PLATFORM = 'CrossPlatform';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::CROSS_PLATFORM
        ];
    }
}


