<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/errors/media_file_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Errors;

class MediaFileError
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
�
5google/ads/googleads/v8/errors/media_file_error.protogoogle.ads.googleads.v8.errors"�
MediaFileErrorEnum"�
MediaFileError
UNSPECIFIED 
UNKNOWN
CANNOT_CREATE_STANDARD_ICON0
,CANNOT_SELECT_STANDARD_ICON_WITH_OTHER_TYPES)
%CANNOT_SPECIFY_MEDIA_FILE_ID_AND_DATA
DUPLICATE_MEDIA
EMPTY_FIELD\'
#RESOURCE_REFERENCED_IN_MULTIPLE_OPS*
&FIELD_NOT_SUPPORTED_FOR_MEDIA_SUB_TYPE
INVALID_MEDIA_FILE_ID	
INVALID_MEDIA_SUB_TYPE

INVALID_MEDIA_FILE_TYPE
INVALID_MIME_TYPE
INVALID_REFERENCE_ID
INVALID_YOU_TUBE_ID!
MEDIA_FILE_FAILED_TRANSCODING
MEDIA_NOT_TRANSCODED-
)MEDIA_TYPE_DOES_NOT_MATCH_MEDIA_FILE_TYPE
NO_FIELDS_SPECIFIED"
NULL_REFERENCE_ID_AND_MEDIA_ID
TOO_LONG
UNSUPPORTED_TYPE 
YOU_TUBE_SERVICE_UNAVAILABLE,
(YOU_TUBE_VIDEO_HAS_NON_POSITIVE_DURATION
YOU_TUBE_VIDEO_NOT_FOUNDB�
"com.google.ads.googleads.v8.errorsBMediaFileErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/errors;errors�GAA�Google.Ads.GoogleAds.V8.Errors�Google\\Ads\\GoogleAds\\V8\\Errors�"Google::Ads::GoogleAds::V8::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

