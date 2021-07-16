<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/domain_category_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class DomainCategoryService
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
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v8/resources/domain_category.proto!google.ads.googleads.v8.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
DomainCategoryF
resource_name (	B/�A�A)
\'googleads.googleapis.com/DomainCategory@
campaign
 (	B)�A�A#
!googleads.googleapis.com/CampaignH �
category (	B�AH�
language_code (	B�AH�
domain (	B�AH�#
coverage_fraction (B�AH�
category_rank (B�AH�
has_children (B�AH�,
recommended_cpc_bid_micros (B�AH�:��A�
\'googleads.googleapis.com/DomainCategoryXcustomers/{customer_id}/domainCategories/{campaign_id}~{base64_category}~{language_code}B
	_campaignB
	_categoryB
_language_codeB	
_domainB
_coverage_fractionB
_category_rankB
_has_childrenB
_recommended_cpc_bid_microsB�
%com.google.ads.googleads.v8.resourcesBDomainCategoryProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3
�
>google/ads/googleads/v8/services/domain_category_service.proto google.ads.googleads.v8.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"b
GetDomainCategoryRequestF
resource_name (	B/�A�A)
\'googleads.googleapis.com/DomainCategory2�
DomainCategoryService�
GetDomainCategory:.google.ads.googleads.v8.services.GetDomainCategoryRequest1.google.ads.googleads.v8.resources.DomainCategory"J���42/v8/{resource_name=customers/*/domainCategories/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBDomainCategoryServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

