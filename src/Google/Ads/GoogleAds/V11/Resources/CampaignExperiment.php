<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/campaign_experiment.proto

namespace Google\Ads\GoogleAds\V11\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An A/B experiment that compares the performance of the base campaign
 * (the control) and a variation of that campaign (the experiment).
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.resources.CampaignExperiment</code>
 */
class CampaignExperiment extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the campaign experiment.
     * Campaign experiment resource names have the form:
     * `customers/{customer_id}/campaignExperiments/{campaign_experiment_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the campaign experiment.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 id = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Immutable. The campaign draft with staged changes to the base campaign.
     *
     * Generated from protobuf field <code>optional string campaign_draft = 14 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $campaign_draft = null;
    /**
     * The name of the campaign experiment.
     * This field is required when creating new campaign experiments
     * and must not conflict with the name of another non-removed
     * campaign experiment or campaign.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>optional string name = 15;</code>
     */
    protected $name = null;
    /**
     * The description of the experiment.
     *
     * Generated from protobuf field <code>optional string description = 16;</code>
     */
    protected $description = null;
    /**
     * Immutable. Share of traffic directed to experiment as a percent (must be between 1 and
     * 99 inclusive. Base campaign receives the remainder of the traffic
     * (100 - traffic_split_percent). Required for create.
     *
     * Generated from protobuf field <code>optional int64 traffic_split_percent = 17 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $traffic_split_percent = null;
    /**
     * Immutable. Determines the behavior of the traffic split.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.CampaignExperimentTrafficSplitTypeEnum.CampaignExperimentTrafficSplitType traffic_split_type = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $traffic_split_type = 0;
    /**
     * Output only. The experiment campaign, as opposed to the base campaign.
     *
     * Generated from protobuf field <code>optional string experiment_campaign = 18 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $experiment_campaign = null;
    /**
     * Output only. The status of the campaign experiment. This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.CampaignExperimentStatusEnum.CampaignExperimentStatus status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion of experiment create or promote. The most recent long
     * running operation is returned.
     *
     * Generated from protobuf field <code>optional string long_running_operation = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $long_running_operation = null;
    /**
     * Date when the campaign experiment starts. By default, the experiment starts
     * now or on the campaign's start date, whichever is later. If this field is
     * set, then the experiment starts at the beginning of the specified date in
     * the customer's time zone. Cannot be changed once the experiment starts.
     * Format: YYYY-MM-DD
     * Example: 2019-03-14
     *
     * Generated from protobuf field <code>optional string start_date = 20;</code>
     */
    protected $start_date = null;
    /**
     * The last day of the campaign experiment. By default, the experiment ends on
     * the campaign's end date. If this field is set, then the experiment ends at
     * the end of the specified date in the customer's time zone.
     * Format: YYYY-MM-DD
     * Example: 2019-04-18
     *
     * Generated from protobuf field <code>optional string end_date = 21;</code>
     */
    protected $end_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the campaign experiment.
     *           Campaign experiment resource names have the form:
     *           `customers/{customer_id}/campaignExperiments/{campaign_experiment_id}`
     *     @type int|string $id
     *           Output only. The ID of the campaign experiment.
     *           This field is read-only.
     *     @type string $campaign_draft
     *           Immutable. The campaign draft with staged changes to the base campaign.
     *     @type string $name
     *           The name of the campaign experiment.
     *           This field is required when creating new campaign experiments
     *           and must not conflict with the name of another non-removed
     *           campaign experiment or campaign.
     *           It must not contain any null (code point 0x0), NL line feed
     *           (code point 0xA) or carriage return (code point 0xD) characters.
     *     @type string $description
     *           The description of the experiment.
     *     @type int|string $traffic_split_percent
     *           Immutable. Share of traffic directed to experiment as a percent (must be between 1 and
     *           99 inclusive. Base campaign receives the remainder of the traffic
     *           (100 - traffic_split_percent). Required for create.
     *     @type int $traffic_split_type
     *           Immutable. Determines the behavior of the traffic split.
     *     @type string $experiment_campaign
     *           Output only. The experiment campaign, as opposed to the base campaign.
     *     @type int $status
     *           Output only. The status of the campaign experiment. This field is read-only.
     *     @type string $long_running_operation
     *           Output only. The resource name of the long-running operation that can be used to poll
     *           for completion of experiment create or promote. The most recent long
     *           running operation is returned.
     *     @type string $start_date
     *           Date when the campaign experiment starts. By default, the experiment starts
     *           now or on the campaign's start date, whichever is later. If this field is
     *           set, then the experiment starts at the beginning of the specified date in
     *           the customer's time zone. Cannot be changed once the experiment starts.
     *           Format: YYYY-MM-DD
     *           Example: 2019-03-14
     *     @type string $end_date
     *           The last day of the campaign experiment. By default, the experiment ends on
     *           the campaign's end date. If this field is set, then the experiment ends at
     *           the end of the specified date in the customer's time zone.
     *           Format: YYYY-MM-DD
     *           Example: 2019-04-18
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Resources\CampaignExperiment::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the campaign experiment.
     * Campaign experiment resource names have the form:
     * `customers/{customer_id}/campaignExperiments/{campaign_experiment_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the campaign experiment.
     * Campaign experiment resource names have the form:
     * `customers/{customer_id}/campaignExperiments/{campaign_experiment_id}`
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
     * Output only. The ID of the campaign experiment.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 id = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the campaign experiment.
     * This field is read-only.
     *
     * Generated from protobuf field <code>optional int64 id = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Immutable. The campaign draft with staged changes to the base campaign.
     *
     * Generated from protobuf field <code>optional string campaign_draft = 14 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCampaignDraft()
    {
        return isset($this->campaign_draft) ? $this->campaign_draft : '';
    }

    public function hasCampaignDraft()
    {
        return isset($this->campaign_draft);
    }

    public function clearCampaignDraft()
    {
        unset($this->campaign_draft);
    }

    /**
     * Immutable. The campaign draft with staged changes to the base campaign.
     *
     * Generated from protobuf field <code>optional string campaign_draft = 14 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCampaignDraft($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign_draft = $var;

        return $this;
    }

    /**
     * The name of the campaign experiment.
     * This field is required when creating new campaign experiments
     * and must not conflict with the name of another non-removed
     * campaign experiment or campaign.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>optional string name = 15;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the campaign experiment.
     * This field is required when creating new campaign experiments
     * and must not conflict with the name of another non-removed
     * campaign experiment or campaign.
     * It must not contain any null (code point 0x0), NL line feed
     * (code point 0xA) or carriage return (code point 0xD) characters.
     *
     * Generated from protobuf field <code>optional string name = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The description of the experiment.
     *
     * Generated from protobuf field <code>optional string description = 16;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * The description of the experiment.
     *
     * Generated from protobuf field <code>optional string description = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Immutable. Share of traffic directed to experiment as a percent (must be between 1 and
     * 99 inclusive. Base campaign receives the remainder of the traffic
     * (100 - traffic_split_percent). Required for create.
     *
     * Generated from protobuf field <code>optional int64 traffic_split_percent = 17 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int|string
     */
    public function getTrafficSplitPercent()
    {
        return isset($this->traffic_split_percent) ? $this->traffic_split_percent : 0;
    }

    public function hasTrafficSplitPercent()
    {
        return isset($this->traffic_split_percent);
    }

    public function clearTrafficSplitPercent()
    {
        unset($this->traffic_split_percent);
    }

    /**
     * Immutable. Share of traffic directed to experiment as a percent (must be between 1 and
     * 99 inclusive. Base campaign receives the remainder of the traffic
     * (100 - traffic_split_percent). Required for create.
     *
     * Generated from protobuf field <code>optional int64 traffic_split_percent = 17 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTrafficSplitPercent($var)
    {
        GPBUtil::checkInt64($var);
        $this->traffic_split_percent = $var;

        return $this;
    }

    /**
     * Immutable. Determines the behavior of the traffic split.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.CampaignExperimentTrafficSplitTypeEnum.CampaignExperimentTrafficSplitType traffic_split_type = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getTrafficSplitType()
    {
        return $this->traffic_split_type;
    }

    /**
     * Immutable. Determines the behavior of the traffic split.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.CampaignExperimentTrafficSplitTypeEnum.CampaignExperimentTrafficSplitType traffic_split_type = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setTrafficSplitType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V11\Enums\CampaignExperimentTrafficSplitTypeEnum\CampaignExperimentTrafficSplitType::class);
        $this->traffic_split_type = $var;

        return $this;
    }

    /**
     * Output only. The experiment campaign, as opposed to the base campaign.
     *
     * Generated from protobuf field <code>optional string experiment_campaign = 18 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getExperimentCampaign()
    {
        return isset($this->experiment_campaign) ? $this->experiment_campaign : '';
    }

    public function hasExperimentCampaign()
    {
        return isset($this->experiment_campaign);
    }

    public function clearExperimentCampaign()
    {
        unset($this->experiment_campaign);
    }

    /**
     * Output only. The experiment campaign, as opposed to the base campaign.
     *
     * Generated from protobuf field <code>optional string experiment_campaign = 18 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setExperimentCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->experiment_campaign = $var;

        return $this;
    }

    /**
     * Output only. The status of the campaign experiment. This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.CampaignExperimentStatusEnum.CampaignExperimentStatus status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. The status of the campaign experiment. This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.CampaignExperimentStatusEnum.CampaignExperimentStatus status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V11\Enums\CampaignExperimentStatusEnum\CampaignExperimentStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion of experiment create or promote. The most recent long
     * running operation is returned.
     *
     * Generated from protobuf field <code>optional string long_running_operation = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLongRunningOperation()
    {
        return isset($this->long_running_operation) ? $this->long_running_operation : '';
    }

    public function hasLongRunningOperation()
    {
        return isset($this->long_running_operation);
    }

    public function clearLongRunningOperation()
    {
        unset($this->long_running_operation);
    }

    /**
     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion of experiment create or promote. The most recent long
     * running operation is returned.
     *
     * Generated from protobuf field <code>optional string long_running_operation = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLongRunningOperation($var)
    {
        GPBUtil::checkString($var, True);
        $this->long_running_operation = $var;

        return $this;
    }

    /**
     * Date when the campaign experiment starts. By default, the experiment starts
     * now or on the campaign's start date, whichever is later. If this field is
     * set, then the experiment starts at the beginning of the specified date in
     * the customer's time zone. Cannot be changed once the experiment starts.
     * Format: YYYY-MM-DD
     * Example: 2019-03-14
     *
     * Generated from protobuf field <code>optional string start_date = 20;</code>
     * @return string
     */
    public function getStartDate()
    {
        return isset($this->start_date) ? $this->start_date : '';
    }

    public function hasStartDate()
    {
        return isset($this->start_date);
    }

    public function clearStartDate()
    {
        unset($this->start_date);
    }

    /**
     * Date when the campaign experiment starts. By default, the experiment starts
     * now or on the campaign's start date, whichever is later. If this field is
     * set, then the experiment starts at the beginning of the specified date in
     * the customer's time zone. Cannot be changed once the experiment starts.
     * Format: YYYY-MM-DD
     * Example: 2019-03-14
     *
     * Generated from protobuf field <code>optional string start_date = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date = $var;

        return $this;
    }

    /**
     * The last day of the campaign experiment. By default, the experiment ends on
     * the campaign's end date. If this field is set, then the experiment ends at
     * the end of the specified date in the customer's time zone.
     * Format: YYYY-MM-DD
     * Example: 2019-04-18
     *
     * Generated from protobuf field <code>optional string end_date = 21;</code>
     * @return string
     */
    public function getEndDate()
    {
        return isset($this->end_date) ? $this->end_date : '';
    }

    public function hasEndDate()
    {
        return isset($this->end_date);
    }

    public function clearEndDate()
    {
        unset($this->end_date);
    }

    /**
     * The last day of the campaign experiment. By default, the experiment ends on
     * the campaign's end date. If this field is set, then the experiment ends at
     * the end of the specified date in the customer's time zone.
     * Format: YYYY-MM-DD
     * Example: 2019-04-18
     *
     * Generated from protobuf field <code>optional string end_date = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date = $var;

        return $this;
    }

}

