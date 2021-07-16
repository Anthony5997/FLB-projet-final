<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/errors/manager_link_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Errors;

class ManagerLinkError
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
7google/ads/googleads/v8/errors/manager_link_error.protogoogle.ads.googleads.v8.errors"�
ManagerLinkErrorEnum"�
ManagerLinkError
UNSPECIFIED 
UNKNOWN\'
#ACCOUNTS_NOT_COMPATIBLE_FOR_LINKING
TOO_MANY_MANAGERS
TOO_MANY_INVITES#
ALREADY_INVITED_BY_THIS_MANAGER#
ALREADY_MANAGED_BY_THIS_MANAGER 
ALREADY_MANAGED_IN_HIERARCHY
DUPLICATE_CHILD_FOUND
CLIENT_HAS_NO_ADMIN_USER	
MAX_DEPTH_EXCEEDED

CYCLE_NOT_ALLOWED
TOO_MANY_ACCOUNTS 
TOO_MANY_ACCOUNTS_AT_MANAGER%
!NON_OWNER_USER_CANNOT_MODIFY_LINK(
$SUSPENDED_ACCOUNT_CANNOT_ADD_CLIENTS
CLIENT_OUTSIDE_TREE
INVALID_STATUS_CHANGE
INVALID_CHANGEB�
"com.google.ads.googleads.v8.errorsBManagerLinkErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/errors;errors�GAA�Google.Ads.GoogleAds.V8.Errors�Google\\Ads\\GoogleAds\\V8\\Errors�"Google::Ads::GoogleAds::V8::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

