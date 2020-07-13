<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/criteria.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Criterion for day of the week the booking is for.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.HotelCheckInDayInfo</code>
 */
class HotelCheckInDayInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The day of the week.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.DayOfWeekEnum.DayOfWeek day_of_week = 1;</code>
     */
    protected $day_of_week = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $day_of_week
     *           The day of the week.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The day of the week.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.DayOfWeekEnum.DayOfWeek day_of_week = 1;</code>
     * @return int
     */
    public function getDayOfWeek()
    {
        return $this->day_of_week;
    }

    /**
     * The day of the week.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.DayOfWeekEnum.DayOfWeek day_of_week = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDayOfWeek($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\DayOfWeekEnum_DayOfWeek::class);
        $this->day_of_week = $var;

        return $this;
    }

}

