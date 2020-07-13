<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/listing_custom_attribute_index.proto

namespace Google\Ads\GoogleAds\V3\Enums\ListingCustomAttributeIndexEnum;

use UnexpectedValueException;

/**
 * The index of the listing custom attribute.
 *
 * Protobuf type <code>google.ads.googleads.v3.enums.ListingCustomAttributeIndexEnum.ListingCustomAttributeIndex</code>
 */
class ListingCustomAttributeIndex
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * First listing custom attribute.
     *
     * Generated from protobuf enum <code>INDEX0 = 7;</code>
     */
    const INDEX0 = 7;
    /**
     * Second listing custom attribute.
     *
     * Generated from protobuf enum <code>INDEX1 = 8;</code>
     */
    const INDEX1 = 8;
    /**
     * Third listing custom attribute.
     *
     * Generated from protobuf enum <code>INDEX2 = 9;</code>
     */
    const INDEX2 = 9;
    /**
     * Fourth listing custom attribute.
     *
     * Generated from protobuf enum <code>INDEX3 = 10;</code>
     */
    const INDEX3 = 10;
    /**
     * Fifth listing custom attribute.
     *
     * Generated from protobuf enum <code>INDEX4 = 11;</code>
     */
    const INDEX4 = 11;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INDEX0 => 'INDEX0',
        self::INDEX1 => 'INDEX1',
        self::INDEX2 => 'INDEX2',
        self::INDEX3 => 'INDEX3',
        self::INDEX4 => 'INDEX4',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListingCustomAttributeIndex::class, \Google\Ads\GoogleAds\V3\Enums\ListingCustomAttributeIndexEnum_ListingCustomAttributeIndex::class);

