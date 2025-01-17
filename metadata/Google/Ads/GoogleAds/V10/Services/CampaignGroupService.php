<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/campaign_group_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Services;

class CampaignGroupService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v10/enums/campaign_group_status.protogoogle.ads.googleads.v10.enums"h
CampaignGroupStatusEnum"M
CampaignGroupStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v10.enumsBCampaignGroupStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
:google/ads/googleads/v10/enums/response_content_type.protogoogle.ads.googleads.v10.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v10.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
7google/ads/googleads/v10/resources/campaign_group.proto"google.ads.googleads.v10.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignGroupE
resource_name (	B.�A�A(
&googleads.googleapis.com/CampaignGroup
id (B�A
name (	[
status (2K.google.ads.googleads.v10.enums.CampaignGroupStatusEnum.CampaignGroupStatus:g�Ad
&googleads.googleapis.com/CampaignGroup:customers/{customer_id}/campaignGroups/{campaign_group_id}B�
&com.google.ads.googleads.v10.resourcesBCampaignGroupProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3
�
>google/ads/googleads/v10/services/campaign_group_service.proto!google.ads.googleads.v10.services7google/ads/googleads/v10/resources/campaign_group.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateCampaignGroupsRequest
customer_id (	B�AR

operations (29.google.ads.googleads.v10.services.CampaignGroupOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v10.enums.ResponseContentTypeEnum.ResponseContentType"�
CampaignGroupOperation/
update_mask (2.google.protobuf.FieldMaskC
create (21.google.ads.googleads.v10.resources.CampaignGroupH C
update (21.google.ads.googleads.v10.resources.CampaignGroupH =
remove (	B+�A(
&googleads.googleapis.com/CampaignGroupH B
	operation"�
MutateCampaignGroupsResponseM
results (2<.google.ads.googleads.v10.services.MutateCampaignGroupResult1
partial_failure_error (2.google.rpc.Status"�
MutateCampaignGroupResultE
resource_name (	B.�A�A(
&googleads.googleapis.com/CampaignGroupI
campaign_group (21.google.ads.googleads.v10.resources.CampaignGroup2�
CampaignGroupService�
MutateCampaignGroups>.google.ads.googleads.v10.services.MutateCampaignGroupsRequest?.google.ads.googleads.v10.services.MutateCampaignGroupsResponse"X���9"4/v10/customers/{customer_id=*}/campaignGroups:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v10.servicesBCampaignGroupServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v10/services;services�GAA�!Google.Ads.GoogleAds.V10.Services�!Google\\Ads\\GoogleAds\\V10\\Services�%Google::Ads::GoogleAds::V10::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

