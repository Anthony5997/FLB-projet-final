<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/errors/multiplier_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Errors;

class MultiplierError
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
�
5google/ads/googleads/v8/errors/multiplier_error.protogoogle.ads.googleads.v8.errors"�
MultiplierErrorEnum"�
MultiplierError
UNSPECIFIED 
UNKNOWN
MULTIPLIER_TOO_HIGH
MULTIPLIER_TOO_LOW
TOO_MANY_FRACTIONAL_DIGITS/
+MULTIPLIER_NOT_ALLOWED_FOR_BIDDING_STRATEGY3
/MULTIPLIER_NOT_ALLOWED_WHEN_BASE_BID_IS_MISSING
NO_MULTIPLIER_SPECIFIED0
,MULTIPLIER_CAUSES_BID_TO_EXCEED_DAILY_BUDGET2
.MULTIPLIER_CAUSES_BID_TO_EXCEED_MONTHLY_BUDGET	1
-MULTIPLIER_CAUSES_BID_TO_EXCEED_CUSTOM_BUDGET
3
/MULTIPLIER_CAUSES_BID_TO_EXCEED_MAX_ALLOWED_BID1
-BID_LESS_THAN_MIN_ALLOWED_BID_WITH_MULTIPLIER1
-MULTIPLIER_AND_BIDDING_STRATEGY_TYPE_MISMATCHB�
"com.google.ads.googleads.v8.errorsBMultiplierErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/errors;errors�GAA�Google.Ads.GoogleAds.V8.Errors�Google\\Ads\\GoogleAds\\V8\\Errors�"Google::Ads::GoogleAds::V8::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

