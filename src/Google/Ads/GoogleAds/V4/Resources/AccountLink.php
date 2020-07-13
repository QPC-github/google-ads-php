<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/account_link.proto

namespace Google\Ads\GoogleAds\V4\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the data sharing connection between a Google Ads account and
 * another account
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.AccountLink</code>
 */
class AccountLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Resource name of the account link.
     * AccountLink resource names have the form:
     * `customers/{customer_id}/accountLinks/{account_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the link.
     * This field is read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value account_link_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $account_link_id = null;
    /**
     * The status of the link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AccountLinkStatusEnum.AccountLinkStatus status = 3;</code>
     */
    protected $status = 0;
    /**
     * Output only. The type of the linked account.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.LinkedAccountTypeEnum.LinkedAccountType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    protected $linked_account;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. Resource name of the account link.
     *           AccountLink resource names have the form:
     *           `customers/{customer_id}/accountLinks/{account_link_id}`
     *     @type \Google\Protobuf\Int64Value $account_link_id
     *           Output only. The ID of the link.
     *           This field is read only.
     *     @type int $status
     *           The status of the link.
     *     @type int $type
     *           Output only. The type of the linked account.
     *     @type \Google\Ads\GoogleAds\V4\Resources\ThirdPartyAppAnalyticsLinkIdentifier $third_party_app_analytics
     *           Immutable. A third party app analytics link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Resources\AccountLink::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Resource name of the account link.
     * AccountLink resource names have the form:
     * `customers/{customer_id}/accountLinks/{account_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. Resource name of the account link.
     * AccountLink resource names have the form:
     * `customers/{customer_id}/accountLinks/{account_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the link.
     * This field is read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value account_link_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getAccountLinkId()
    {
        return $this->account_link_id;
    }

    /**
     * Returns the unboxed value from <code>getAccountLinkId()</code>

     * Output only. The ID of the link.
     * This field is read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value account_link_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getAccountLinkIdUnwrapped()
    {
        return $this->readWrapperValue("account_link_id");
    }

    /**
     * Output only. The ID of the link.
     * This field is read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value account_link_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setAccountLinkId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->account_link_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of the link.
     * This field is read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value account_link_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setAccountLinkIdUnwrapped($var)
    {
        $this->writeWrapperValue("account_link_id", $var);
        return $this;}

    /**
     * The status of the link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AccountLinkStatusEnum.AccountLinkStatus status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AccountLinkStatusEnum.AccountLinkStatus status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\AccountLinkStatusEnum_AccountLinkStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. The type of the linked account.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.LinkedAccountTypeEnum.LinkedAccountType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The type of the linked account.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.LinkedAccountTypeEnum.LinkedAccountType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\LinkedAccountTypeEnum_LinkedAccountType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Immutable. A third party app analytics link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.resources.ThirdPartyAppAnalyticsLinkIdentifier third_party_app_analytics = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V4\Resources\ThirdPartyAppAnalyticsLinkIdentifier
     */
    public function getThirdPartyAppAnalytics()
    {
        return $this->readOneof(5);
    }

    /**
     * Immutable. A third party app analytics link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.resources.ThirdPartyAppAnalyticsLinkIdentifier third_party_app_analytics = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V4\Resources\ThirdPartyAppAnalyticsLinkIdentifier $var
     * @return $this
     */
    public function setThirdPartyAppAnalytics($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Resources\ThirdPartyAppAnalyticsLinkIdentifier::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getLinkedAccount()
    {
        return $this->whichOneof("linked_account");
    }

}

