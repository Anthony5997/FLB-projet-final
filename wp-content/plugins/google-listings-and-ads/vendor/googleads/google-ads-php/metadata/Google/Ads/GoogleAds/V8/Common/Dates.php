<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/common/dates.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Common;

class Dates
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
1google/ads/googleads/v8/enums/month_of_year.protogoogle.ads.googleads.v8.enums"�
MonthOfYearEnum"�
MonthOfYear
UNSPECIFIED 
UNKNOWN
JANUARY
FEBRUARY	
MARCH	
APRIL
MAY
JUNE
JULY

AUGUST	
	SEPTEMBER

OCTOBER
NOVEMBER
DECEMBERB�
!com.google.ads.googleads.v8.enumsBMonthOfYearProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
*google/ads/googleads/v8/common/dates.protogoogle.ads.googleads.v8.commongoogle/api/annotations.proto"W
	DateRange

start_date (	H �
end_date (	H�B
_start_dateB
	_end_date"�
YearMonthRange8
start (2).google.ads.googleads.v8.common.YearMonth6
end (2).google.ads.googleads.v8.common.YearMonth"d
	YearMonth
year (I
month (2:.google.ads.googleads.v8.enums.MonthOfYearEnum.MonthOfYearB�
"com.google.ads.googleads.v8.commonB
DatesProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

