<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/google_ads_field_data_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Enums;

class GoogleAdsFieldDataType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v8/enums/google_ads_field_data_type.protogoogle.ads.googleads.v8.enums"�
GoogleAdsFieldDataTypeEnum"�
GoogleAdsFieldDataType
UNSPECIFIED 
UNKNOWN
BOOLEAN
DATE

DOUBLE
ENUM	
FLOAT	
INT32	
INT64
MESSAGE	
RESOURCE_NAME


STRING

UINT64B�
!com.google.ads.googleads.v8.enumsBGoogleAdsFieldDataTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

