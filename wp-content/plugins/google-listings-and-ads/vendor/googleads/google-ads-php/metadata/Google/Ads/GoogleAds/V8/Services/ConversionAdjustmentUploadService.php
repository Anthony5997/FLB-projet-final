<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/conversion_adjustment_upload_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class ConversionAdjustmentUploadService
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
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v8/enums/conversion_adjustment_type.protogoogle.ads.googleads.v8.enums"y
ConversionAdjustmentTypeEnum"Y
ConversionAdjustmentType
UNSPECIFIED 
UNKNOWN

RETRACTION
RESTATEMENTB�
!com.google.ads.googleads.v8.enumsBConversionAdjustmentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Kgoogle/ads/googleads/v8/services/conversion_adjustment_upload_service.proto google.ads.googleads.v8.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/rpc/status.proto"�
"UploadConversionAdjustmentsRequest
customer_id (	B�A[
conversion_adjustments (26.google.ads.googleads.v8.services.ConversionAdjustmentB�A
partial_failure (B�A
validate_only ("�
#UploadConversionAdjustmentsResponse1
partial_failure_error (2.google.rpc.StatusM
results (2<.google.ads.googleads.v8.services.ConversionAdjustmentResult"�
ConversionAdjustment
conversion_action (	H�!
adjustment_date_time	 (	H�m
adjustment_type (2T.google.ads.googleads.v8.enums.ConversionAdjustmentTypeEnum.ConversionAdjustmentTypeM
restatement_value (22.google.ads.googleads.v8.services.RestatementValueS
gclid_date_time_pair (23.google.ads.googleads.v8.services.GclidDateTimePairH 
order_id (	H B
conversion_identifierB
_conversion_actionB
_adjustment_date_time"p
RestatementValue
adjusted_value (H �
currency_code (	H�B
_adjusted_valueB
_currency_code"m
GclidDateTimePair
gclid (	H �!
conversion_date_time (	H�B
_gclidB
_conversion_date_time"�
ConversionAdjustmentResult
conversion_action (	H�!
adjustment_date_time (	H�m
adjustment_type (2T.google.ads.googleads.v8.enums.ConversionAdjustmentTypeEnum.ConversionAdjustmentTypeS
gclid_date_time_pair (23.google.ads.googleads.v8.services.GclidDateTimePairH 
order_id (	H B
conversion_identifierB
_conversion_actionB
_adjustment_date_time2�
!ConversionAdjustmentUploadService�
UploadConversionAdjustmentsD.google.ads.googleads.v8.services.UploadConversionAdjustmentsRequestE.google.ads.googleads.v8.services.UploadConversionAdjustmentsResponse"y���>"9/v8/customers/{customer_id=*}:uploadConversionAdjustments:*�A2customer_id,conversion_adjustments,partial_failureE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesB&ConversionAdjustmentUploadServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

