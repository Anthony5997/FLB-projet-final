<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/ad_group_audience_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Resources;

class AdGroupAudienceView
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
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v8/resources/ad_group_audience_view.proto!google.ads.googleads.v8.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
AdGroupAudienceViewK
resource_name (	B4�A�A.
,googleads.googleapis.com/AdGroupAudienceView:|�Ay
,googleads.googleapis.com/AdGroupAudienceViewIcustomers/{customer_id}/adGroupAudienceViews/{ad_group_id}~{criterion_id}B�
%com.google.ads.googleads.v8.resourcesBAdGroupAudienceViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

