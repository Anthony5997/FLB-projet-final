<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/feed_item_set_link.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Resources;

class FeedItemSetLink
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
�
:google/ads/googleads/v8/resources/feed_item_set_link.proto!google.ads.googleads.v8.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
FeedItemSetLinkG
resource_name (	B0�A�A*
(googleads.googleapis.com/FeedItemSetLink<
	feed_item (	B)�A�A#
!googleads.googleapis.com/FeedItemC
feed_item_set (	B,�A�A&
$googleads.googleapis.com/FeedItemSet:��A�
(googleads.googleapis.com/FeedItemSetLinkTcustomers/{customer_id}/feedItemSetLinks/{feed_id}~{feed_item_set_id}~{feed_item_id}B�
%com.google.ads.googleads.v8.resourcesBFeedItemSetLinkProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

