<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/errors/mutate_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Errors;

class MutateError
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
1google/ads/googleads/v8/errors/mutate_error.protogoogle.ads.googleads.v8.errors"�
MutateErrorEnum"�
MutateError
UNSPECIFIED 
UNKNOWN
RESOURCE_NOT_FOUND!
ID_EXISTS_IN_MULTIPLE_MUTATES
INCONSISTENT_FIELD_VALUES
MUTATE_NOT_ALLOWED	
RESOURCE_NOT_IN_GOOGLE_ADS

RESOURCE_ALREADY_EXISTS+
\'RESOURCE_DOES_NOT_SUPPORT_VALIDATE_ONLY
RESOURCE_READ_ONLYB�
"com.google.ads.googleads.v8.errorsBMutateErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/errors;errors�GAA�Google.Ads.GoogleAds.V8.Errors�Google\\Ads\\GoogleAds\\V8\\Errors�"Google::Ads::GoogleAds::V8::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

