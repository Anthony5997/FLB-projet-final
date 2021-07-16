<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/merchant_center_link.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Resources;

class MerchantCenterLink
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
�
?google/ads/googleads/v8/enums/merchant_center_link_status.protogoogle.ads.googleads.v8.enums"r
MerchantCenterLinkStatusEnum"R
MerchantCenterLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
PENDINGB�
!com.google.ads.googleads.v8.enumsBMerchantCenterLinkStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
<google/ads/googleads/v8/resources/merchant_center_link.proto!google.ads.googleads.v8.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
MerchantCenterLinkJ
resource_name (	B3�A�A-
+googleads.googleapis.com/MerchantCenterLink
id (B�AH �.
merchant_center_account_name (	B�AH�d
status (2T.google.ads.googleads.v8.enums.MerchantCenterLinkStatusEnum.MerchantCenterLinkStatus:r�Ao
+googleads.googleapis.com/MerchantCenterLink@customers/{customer_id}/merchantCenterLinks/{merchant_center_id}B
_idB
_merchant_center_account_nameB�
%com.google.ads.googleads.v8.resourcesBMerchantCenterLinkProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

