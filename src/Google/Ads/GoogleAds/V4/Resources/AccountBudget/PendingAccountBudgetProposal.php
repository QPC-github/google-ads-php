<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/account_budget.proto

namespace Google\Ads\GoogleAds\V4\Resources\AccountBudget;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A pending proposal associated with the enclosing account-level budget,
 * if applicable.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.AccountBudget.PendingAccountBudgetProposal</code>
 */
class PendingAccountBudgetProposal extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $account_budget_proposal = null;
    /**
     * Output only. The type of this proposal, e.g. END to end the budget associated
     * with this proposal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalType proposal_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $proposal_type = 0;
    /**
     * Output only. The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_date_time = null;
    /**
     * Output only. A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $purchase_order_number = null;
    /**
     * Output only. Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $notes = null;
    /**
     * Output only. The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $creation_date_time = null;
    protected $end_time;
    protected $spending_limit;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $account_budget_proposal
     *           Output only. The resource name of the proposal.
     *           AccountBudgetProposal resource names have the form:
     *           `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *     @type int $proposal_type
     *           Output only. The type of this proposal, e.g. END to end the budget associated
     *           with this proposal.
     *     @type \Google\Protobuf\StringValue $name
     *           Output only. The name to assign to the account-level budget.
     *     @type \Google\Protobuf\StringValue $start_date_time
     *           Output only. The start time in yyyy-MM-dd HH:mm:ss format.
     *     @type \Google\Protobuf\StringValue $purchase_order_number
     *           Output only. A purchase order number is a value that helps users reference this budget
     *           in their monthly invoices.
     *     @type \Google\Protobuf\StringValue $notes
     *           Output only. Notes associated with this budget.
     *     @type \Google\Protobuf\StringValue $creation_date_time
     *           Output only. The time when this account-level budget proposal was created.
     *           Formatted as yyyy-MM-dd HH:mm:ss.
     *     @type \Google\Protobuf\StringValue $end_date_time
     *           Output only. The end time in yyyy-MM-dd HH:mm:ss format.
     *     @type int $end_time_type
     *           Output only. The end time as a well-defined type, e.g. FOREVER.
     *     @type \Google\Protobuf\Int64Value $spending_limit_micros
     *           Output only. The spending limit in micros.  One million is equivalent to
     *           one unit.
     *     @type int $spending_limit_type
     *           Output only. The spending limit as a well-defined type, e.g. INFINITE.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Resources\AccountBudget::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAccountBudgetProposal()
    {
        return $this->account_budget_proposal;
    }

    /**
     * Returns the unboxed value from <code>getAccountBudgetProposal()</code>

     * Output only. The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getAccountBudgetProposalUnwrapped()
    {
        return $this->readWrapperValue("account_budget_proposal");
    }

    /**
     * Output only. The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAccountBudgetProposal($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->account_budget_proposal = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The resource name of the proposal.
     * AccountBudgetProposal resource names have the form:
     * `customers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue account_budget_proposal = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setAccountBudgetProposalUnwrapped($var)
    {
        $this->writeWrapperValue("account_budget_proposal", $var);
        return $this;}

    /**
     * Output only. The type of this proposal, e.g. END to end the budget associated
     * with this proposal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalType proposal_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getProposalType()
    {
        return $this->proposal_type;
    }

    /**
     * Output only. The type of this proposal, e.g. END to end the budget associated
     * with this proposal.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalType proposal_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setProposalType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\AccountBudgetProposalTypeEnum_AccountBudgetProposalType::class);
        $this->proposal_type = $var;

        return $this;
    }

    /**
     * Output only. The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * Output only. The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * Output only. The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The name to assign to the account-level budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * Output only. The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStartDateTime()
    {
        return $this->start_date_time;
    }

    /**
     * Returns the unboxed value from <code>getStartDateTime()</code>

     * Output only. The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getStartDateTimeUnwrapped()
    {
        return $this->readWrapperValue("start_date_time");
    }

    /**
     * Output only. The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStartDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->start_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The start time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setStartDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("start_date_time", $var);
        return $this;}

    /**
     * Output only. A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPurchaseOrderNumber()
    {
        return $this->purchase_order_number;
    }

    /**
     * Returns the unboxed value from <code>getPurchaseOrderNumber()</code>

     * Output only. A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getPurchaseOrderNumberUnwrapped()
    {
        return $this->readWrapperValue("purchase_order_number");
    }

    /**
     * Output only. A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPurchaseOrderNumber($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->purchase_order_number = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. A purchase order number is a value that helps users reference this budget
     * in their monthly invoices.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue purchase_order_number = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setPurchaseOrderNumberUnwrapped($var)
    {
        $this->writeWrapperValue("purchase_order_number", $var);
        return $this;}

    /**
     * Output only. Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Returns the unboxed value from <code>getNotes()</code>

     * Output only. Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getNotesUnwrapped()
    {
        return $this->readWrapperValue("notes");
    }

    /**
     * Output only. Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setNotes($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->notes = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Notes associated with this budget.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue notes = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setNotesUnwrapped($var)
    {
        $this->writeWrapperValue("notes", $var);
        return $this;}

    /**
     * Output only. The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCreationDateTime()
    {
        return $this->creation_date_time;
    }

    /**
     * Returns the unboxed value from <code>getCreationDateTime()</code>

     * Output only. The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getCreationDateTimeUnwrapped()
    {
        return $this->readWrapperValue("creation_date_time");
    }

    /**
     * Output only. The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCreationDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->creation_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The time when this account-level budget proposal was created.
     * Formatted as yyyy-MM-dd HH:mm:ss.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue creation_date_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setCreationDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("creation_date_time", $var);
        return $this;}

    /**
     * Output only. The end time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getEndDateTime()
    {
        return $this->readOneof(5);
    }

    /**
     * Returns the unboxed value from <code>getEndDateTime()</code>

     * Output only. The end time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getEndDateTimeUnwrapped()
    {
        return $this->readWrapperValue("end_date_time");
    }

    /**
     * Output only. The end time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEndDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The end time in yyyy-MM-dd HH:mm:ss format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setEndDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("end_date_time", $var);
        return $this;}

    /**
     * Output only. The end time as a well-defined type, e.g. FOREVER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.TimeTypeEnum.TimeType end_time_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getEndTimeType()
    {
        return $this->readOneof(6);
    }

    /**
     * Output only. The end time as a well-defined type, e.g. FOREVER.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.TimeTypeEnum.TimeType end_time_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setEndTimeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\TimeTypeEnum_TimeType::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Output only. The spending limit in micros.  One million is equivalent to
     * one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value spending_limit_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getSpendingLimitMicros()
    {
        return $this->readOneof(7);
    }

    /**
     * Returns the unboxed value from <code>getSpendingLimitMicros()</code>

     * Output only. The spending limit in micros.  One million is equivalent to
     * one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value spending_limit_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getSpendingLimitMicrosUnwrapped()
    {
        return $this->readWrapperValue("spending_limit_micros");
    }

    /**
     * Output only. The spending limit in micros.  One million is equivalent to
     * one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value spending_limit_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setSpendingLimitMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The spending limit in micros.  One million is equivalent to
     * one unit.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value spending_limit_micros = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setSpendingLimitMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("spending_limit_micros", $var);
        return $this;}

    /**
     * Output only. The spending limit as a well-defined type, e.g. INFINITE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.SpendingLimitTypeEnum.SpendingLimitType spending_limit_type = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSpendingLimitType()
    {
        return $this->readOneof(8);
    }

    /**
     * Output only. The spending limit as a well-defined type, e.g. INFINITE.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.SpendingLimitTypeEnum.SpendingLimitType spending_limit_type = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSpendingLimitType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\SpendingLimitTypeEnum_SpendingLimitType::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->whichOneof("end_time");
    }

    /**
     * @return string
     */
    public function getSpendingLimit()
    {
        return $this->whichOneof("spending_limit");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PendingAccountBudgetProposal::class, \Google\Ads\GoogleAds\V4\Resources\AccountBudget_PendingAccountBudgetProposal::class);

