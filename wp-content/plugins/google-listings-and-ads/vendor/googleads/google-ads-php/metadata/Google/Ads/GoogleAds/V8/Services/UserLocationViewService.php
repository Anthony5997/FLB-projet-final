<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/user_location_view_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class UserLocationViewService
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
�
:google/ads/googleads/v8/resources/user_location_view.proto!google.ads.googleads.v8.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
UserLocationViewH
resource_name (	B1�A�A+
)googleads.googleapis.com/UserLocationView&
country_criterion_id (B�AH �$
targeting_location (B�AH�:��A�
)googleads.googleapis.com/UserLocationViewXcustomers/{customer_id}/userLocationViews/{country_criterion_id}~{is_targeting_location}B
_country_criterion_idB
_targeting_locationB�
%com.google.ads.googleads.v8.resourcesBUserLocationViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3
�
Agoogle/ads/googleads/v8/services/user_location_view_service.proto google.ads.googleads.v8.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"f
GetUserLocationViewRequestH
resource_name (	B1�A�A+
)googleads.googleapis.com/UserLocationView2�
UserLocationViewService�
GetUserLocationView<.google.ads.googleads.v8.services.GetUserLocationViewRequest3.google.ads.googleads.v8.resources.UserLocationView"K���53/v8/{resource_name=customers/*/userLocationViews/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBUserLocationViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

