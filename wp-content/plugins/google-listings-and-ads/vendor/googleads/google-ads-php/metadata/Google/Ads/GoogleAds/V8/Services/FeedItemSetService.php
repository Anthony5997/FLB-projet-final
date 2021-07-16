<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/feed_item_set_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class FeedItemSetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Dgoogle/ads/googleads/v8/enums/feed_item_set_string_filter_type.protogoogle.ads.googleads.v8.enums"i
FeedItemSetStringFilterTypeEnum"F
FeedItemSetStringFilterType
UNSPECIFIED 
UNKNOWN	
EXACTB�
!com.google.ads.googleads.v8.enumsB FeedItemSetStringFilterTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Dgoogle/ads/googleads/v8/common/feed_item_set_filter_type_infos.protogoogle.ads.googleads.v8.commongoogle/api/annotations.proto"|
DynamicLocationSetFilter
labels (	P
business_name_filter (22.google.ads.googleads.v8.common.BusinessNameFilter"�
BusinessNameFilter
business_name (	o
filter_type (2Z.google.ads.googleads.v8.enums.FeedItemSetStringFilterTypeEnum.FeedItemSetStringFilterType"6
!DynamicAffiliateLocationSetFilter
	chain_ids (B�
"com.google.ads.googleads.v8.commonBFeedItemSetFilterTypeInfosProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�
8google/ads/googleads/v8/enums/feed_item_set_status.protogoogle.ads.googleads.v8.enums"d
FeedItemSetStatusEnum"K
FeedItemSetStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v8.enumsBFeedItemSetStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
5google/ads/googleads/v8/resources/feed_item_set.proto!google.ads.googleads.v8.resources8google/ads/googleads/v8/enums/feed_item_set_status.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
FeedItemSetC
resource_name (	B,�A�A&
$googleads.googleapis.com/FeedItemSet3
feed (	B%�A�A
googleads.googleapis.com/Feed
feed_item_set_id (B�A
display_name (	[
status (2F.google.ads.googleads.v8.enums.FeedItemSetStatusEnum.FeedItemSetStatusB�A_
dynamic_location_set_filter (28.google.ads.googleads.v8.common.DynamicLocationSetFilterH r
%dynamic_affiliate_location_set_filter (2A.google.ads.googleads.v8.common.DynamicAffiliateLocationSetFilterH :l�Ai
$googleads.googleapis.com/FeedItemSetAcustomers/{customer_id}/feedItemSets/{feed_id}~{feed_item_set_id}B
dynamic_set_filterB�
%com.google.ads.googleads.v8.resourcesBFeedItemSetProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3
�
<google/ads/googleads/v8/services/feed_item_set_service.proto google.ads.googleads.v8.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto"\\
GetFeedItemSetRequestC
resource_name (	B,�A�A&
$googleads.googleapis.com/FeedItemSet"�
MutateFeedItemSetsRequest
customer_id (	B�AO

operations (26.google.ads.googleads.v8.services.FeedItemSetOperationB�A
partial_failure (
validate_only ("�
FeedItemSetOperation/
update_mask (2.google.protobuf.FieldMask@
create (2..google.ads.googleads.v8.resources.FeedItemSetH @
update (2..google.ads.googleads.v8.resources.FeedItemSetH 
remove (	H B
	operation"h
MutateFeedItemSetsResponseJ
results (29.google.ads.googleads.v8.services.MutateFeedItemSetResult"0
MutateFeedItemSetResult
resource_name (	2�
FeedItemSetService�
GetFeedItemSet7.google.ads.googleads.v8.services.GetFeedItemSetRequest..google.ads.googleads.v8.resources.FeedItemSet"F���0./v8/{resource_name=customers/*/feedItemSets/*}�Aresource_name�
MutateFeedItemSets;.google.ads.googleads.v8.services.MutateFeedItemSetsRequest<.google.ads.googleads.v8.services.MutateFeedItemSetsResponse"U���6"1/v8/customers/{customer_id=*}/feedItemSets:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBFeedItemSetServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

