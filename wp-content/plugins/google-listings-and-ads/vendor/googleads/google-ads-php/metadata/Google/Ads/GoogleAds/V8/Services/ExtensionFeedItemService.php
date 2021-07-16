<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/extension_feed_item_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class ExtensionFeedItemService
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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v8/enums/interaction_type.protogoogle.ads.googleads.v8.enums"R
InteractionTypeEnum";
InteractionType
UNSPECIFIED 
UNKNOWN

CALLS�>B�
!com.google.ads.googleads.v8.enumsBInteractionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
5google/ads/googleads/v8/common/custom_parameter.protogoogle.ads.googleads.v8.common"I
CustomParameter
key (	H �
value (	H�B
_keyB
_valueB�
"com.google.ads.googleads.v8.commonBCustomParameterProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�
:google/ads/googleads/v8/enums/app_payment_model_type.protogoogle.ads.googleads.v8.enums"X
AppPaymentModelTypeEnum"=
AppPaymentModelType
UNSPECIFIED 
UNKNOWN
PAIDB�
!com.google.ads.googleads.v8.enumsBAppPaymentModelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/enums/listing_group_type.protogoogle.ads.googleads.v8.enums"c
ListingGroupTypeEnum"K
ListingGroupType
UNSPECIFIED 
UNKNOWN
SUBDIVISION
UNITB�
!com.google.ads.googleads.v8.enumsBListingGroupTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
?google/ads/googleads/v8/enums/product_channel_exclusivity.protogoogle.ads.googleads.v8.enums"�
ProductChannelExclusivityEnum"`
ProductChannelExclusivity
UNSPECIFIED 
UNKNOWN
SINGLE_CHANNEL
MULTI_CHANNELB�
!com.google.ads.googleads.v8.enumsBProductChannelExclusivityProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
0google/ads/googleads/v8/common/feed_common.protogoogle.ads.googleads.v8.common"c
Money
currency_code (	H �
amount_micros (H�B
_currency_codeB
_amount_microsB�
"com.google.ads.googleads.v8.commonBFeedCommonProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�
Cgoogle/ads/googleads/v8/enums/call_conversion_reporting_state.protogoogle.ads.googleads.v8.enums"�
 CallConversionReportingStateEnum"�
CallConversionReportingState
UNSPECIFIED 
UNKNOWN
DISABLED,
(USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION-
)USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTIONB�
!com.google.ads.googleads.v8.enumsB!CallConversionReportingStateProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Igoogle/ads/googleads/v8/enums/promotion_extension_discount_modifier.protogoogle.ads.googleads.v8.enums"w
&PromotionExtensionDiscountModifierEnum"M
"PromotionExtensionDiscountModifier
UNSPECIFIED 
UNKNOWN	
UP_TOB�
!com.google.ads.googleads.v8.enumsB\'PromotionExtensionDiscountModifierProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
2google/ads/googleads/v8/enums/age_range_type.protogoogle.ads.googleads.v8.enums"�
AgeRangeTypeEnum"�
AgeRangeType
UNSPECIFIED 
UNKNOWN
AGE_RANGE_18_24��
AGE_RANGE_25_34��
AGE_RANGE_35_44��
AGE_RANGE_45_54��
AGE_RANGE_55_64��
AGE_RANGE_65_UP��
AGE_RANGE_UNDETERMINED��B�
!com.google.ads.googleads.v8.enumsBAgeRangeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
5google/ads/googleads/v8/enums/product_condition.protogoogle.ads.googleads.v8.enums"l
ProductConditionEnum"T
ProductCondition
UNSPECIFIED 
UNKNOWN
NEW
REFURBISHED
USEDB�
!com.google.ads.googleads.v8.enumsBProductConditionProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
*google/ads/googleads/v8/enums/device.protogoogle.ads.googleads.v8.enums"v

DeviceEnum"h
Device
UNSPECIFIED 
UNKNOWN

MOBILE

TABLET
DESKTOP
CONNECTED_TV	
OTHERB�
!com.google.ads.googleads.v8.enumsBDeviceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
/google/ads/googleads/v8/enums/gender_type.protogoogle.ads.googleads.v8.enums"d
GenderTypeEnum"R

GenderType
UNSPECIFIED 
UNKNOWN
MALE


FEMALE
UNDETERMINEDB�
!com.google.ads.googleads.v8.enumsBGenderTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
/google/ads/googleads/v8/enums/day_of_week.protogoogle.ads.googleads.v8.enums"�
DayOfWeekEnum"�
	DayOfWeek
UNSPECIFIED 
UNKNOWN

MONDAY
TUESDAY
	WEDNESDAY
THURSDAY

FRIDAY
SATURDAY

SUNDAYB�
!com.google.ads.googleads.v8.enumsBDayOfWeekProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
?google/ads/googleads/v8/enums/location_group_radius_units.protogoogle.ads.googleads.v8.enums"�
LocationGroupRadiusUnitsEnum"`
LocationGroupRadiusUnits
UNSPECIFIED 
UNKNOWN

METERS	
MILES
MILLI_MILESB�
!com.google.ads.googleads.v8.enumsBLocationGroupRadiusUnitsProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/enums/content_label_type.protogoogle.ads.googleads.v8.enums"�
ContentLabelTypeEnum"�
ContentLabelType
UNSPECIFIED 
UNKNOWN
SEXUALLY_SUGGESTIVE
BELOW_THE_FOLD
PARKED_DOMAIN
JUVENILE
	PROFANITY
TRAGEDY	
VIDEO	
VIDEO_RATING_DV_G

VIDEO_RATING_DV_PG
VIDEO_RATING_DV_T
VIDEO_RATING_DV_MA
VIDEO_NOT_YET_RATED
EMBEDDED_VIDEO
LIVE_STREAMING_VIDEO
SOCIAL_ISSUESB�
!com.google.ads.googleads.v8.enumsBContentLabelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Cgoogle/ads/googleads/v8/enums/price_extension_price_qualifier.protogoogle.ads.googleads.v8.enums"�
 PriceExtensionPriceQualifierEnum"^
PriceExtensionPriceQualifier
UNSPECIFIED 
UNKNOWN
FROM	
UP_TO
AVERAGEB�
!com.google.ads.googleads.v8.enumsB!PriceExtensionPriceQualifierProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
8google/ads/googleads/v8/enums/price_extension_type.protogoogle.ads.googleads.v8.enums"�
PriceExtensionTypeEnum"�
PriceExtensionType
UNSPECIFIED 
UNKNOWN

BRANDS

EVENTS
	LOCATIONS
NEIGHBORHOODS
PRODUCT_CATEGORIES
PRODUCT_TIERS
SERVICES
SERVICE_CATEGORIES	
SERVICE_TIERS
B�
!com.google.ads.googleads.v8.enumsBPriceExtensionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
=google/ads/googleads/v8/enums/hotel_date_selection_type.protogoogle.ads.googleads.v8.enums"~
HotelDateSelectionTypeEnum"`
HotelDateSelectionType
UNSPECIFIED 
UNKNOWN
DEFAULT_SELECTION2
USER_SELECTED3B�
!com.google.ads.googleads.v8.enumsBHotelDateSelectionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/enums/keyword_match_type.protogoogle.ads.googleads.v8.enums"j
KeywordMatchTypeEnum"R
KeywordMatchType
UNSPECIFIED 
UNKNOWN	
EXACT

PHRASE	
BROADB�
!com.google.ads.googleads.v8.enumsBKeywordMatchTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
5google/ads/googleads/v8/enums/income_range_type.protogoogle.ads.googleads.v8.enums"�
IncomeRangeTypeEnum"�
IncomeRangeType
UNSPECIFIED 
UNKNOWN
INCOME_RANGE_0_50��
INCOME_RANGE_50_60��
INCOME_RANGE_60_70��
INCOME_RANGE_70_80��
INCOME_RANGE_80_90��
INCOME_RANGE_90_UP��
INCOME_RANGE_UNDETERMINED��B�
!com.google.ads.googleads.v8.enumsBIncomeRangeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
:google/ads/googleads/v8/enums/preferred_content_type.protogoogle.ads.googleads.v8.enums"j
PreferredContentTypeEnum"N
PreferredContentType
UNSPECIFIED 
UNKNOWN
YOUTUBE_TOP_CONTENT�B�
!com.google.ads.googleads.v8.enumsBPreferredContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
2google/ads/googleads/v8/enums/minute_of_hour.protogoogle.ads.googleads.v8.enums"s
MinuteOfHourEnum"_
MinuteOfHour
UNSPECIFIED 
UNKNOWN
ZERO
FIFTEEN

THIRTY

FORTY_FIVEB�
!com.google.ads.googleads.v8.enumsBMinuteOfHourProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
8google/ads/googleads/v8/enums/parental_status_type.protogoogle.ads.googleads.v8.enums"
ParentalStatusTypeEnum"e
ParentalStatusType
UNSPECIFIED 
UNKNOWN
PARENT�
NOT_A_PARENT�
UNDETERMINED�B�
!com.google.ads.googleads.v8.enumsBParentalStatusTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Bgoogle/ads/googleads/v8/enums/product_bidding_category_level.protogoogle.ads.googleads.v8.enums"�
ProductBiddingCategoryLevelEnum"w
ProductBiddingCategoryLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3

LEVEL4

LEVEL5B�
!com.google.ads.googleads.v8.enumsB ProductBiddingCategoryLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
3google/ads/googleads/v8/enums/product_channel.protogoogle.ads.googleads.v8.enums"[
ProductChannelEnum"E
ProductChannel
UNSPECIFIED 
UNKNOWN

ONLINE	
LOCALB�
!com.google.ads.googleads.v8.enumsBProductChannelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Bgoogle/ads/googleads/v8/enums/product_custom_attribute_index.protogoogle.ads.googleads.v8.enums"�
ProductCustomAttributeIndexEnum"w
ProductCustomAttributeIndex
UNSPECIFIED 
UNKNOWN

INDEX0

INDEX1

INDEX2	

INDEX3


INDEX4B�
!com.google.ads.googleads.v8.enumsB ProductCustomAttributeIndexProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/enums/product_type_level.protogoogle.ads.googleads.v8.enums"�
ProductTypeLevelEnum"l
ProductTypeLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3	

LEVEL4


LEVEL5B�
!com.google.ads.googleads.v8.enumsBProductTypeLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
:google/ads/googleads/v8/enums/proximity_radius_units.protogoogle.ads.googleads.v8.enums"k
ProximityRadiusUnitsEnum"O
ProximityRadiusUnits
UNSPECIFIED 
UNKNOWN	
MILES

KILOMETERSB�
!com.google.ads.googleads.v8.enumsBProximityRadiusUnitsProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
>google/ads/googleads/v8/enums/webpage_condition_operator.protogoogle.ads.googleads.v8.enums"r
WebpageConditionOperatorEnum"R
WebpageConditionOperator
UNSPECIFIED 
UNKNOWN

EQUALS
CONTAINSB�
!com.google.ads.googleads.v8.enumsBWebpageConditionOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
=google/ads/googleads/v8/enums/webpage_condition_operand.protogoogle.ads.googleads.v8.enums"�
WebpageConditionOperandEnum"�
WebpageConditionOperand
UNSPECIFIED 
UNKNOWN
URL
CATEGORY

PAGE_TITLE
PAGE_CONTENT
CUSTOM_LABELB�
!com.google.ads.googleads.v8.enumsBWebpageConditionOperandProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�H
-google/ads/googleads/v8/common/criteria.protogoogle.ads.googleads.v8.common:google/ads/googleads/v8/enums/app_payment_model_type.proto6google/ads/googleads/v8/enums/content_label_type.proto/google/ads/googleads/v8/enums/day_of_week.proto*google/ads/googleads/v8/enums/device.proto/google/ads/googleads/v8/enums/gender_type.proto=google/ads/googleads/v8/enums/hotel_date_selection_type.proto5google/ads/googleads/v8/enums/income_range_type.proto4google/ads/googleads/v8/enums/interaction_type.proto6google/ads/googleads/v8/enums/keyword_match_type.proto6google/ads/googleads/v8/enums/listing_group_type.proto?google/ads/googleads/v8/enums/location_group_radius_units.proto2google/ads/googleads/v8/enums/minute_of_hour.proto8google/ads/googleads/v8/enums/parental_status_type.proto:google/ads/googleads/v8/enums/preferred_content_type.protoBgoogle/ads/googleads/v8/enums/product_bidding_category_level.proto3google/ads/googleads/v8/enums/product_channel.proto?google/ads/googleads/v8/enums/product_channel_exclusivity.proto5google/ads/googleads/v8/enums/product_condition.protoBgoogle/ads/googleads/v8/enums/product_custom_attribute_index.proto6google/ads/googleads/v8/enums/product_type_level.proto:google/ads/googleads/v8/enums/proximity_radius_units.proto=google/ads/googleads/v8/enums/webpage_condition_operand.proto>google/ads/googleads/v8/enums/webpage_condition_operator.protogoogle/api/annotations.proto"�
KeywordInfo
text (	H �X

match_type (2D.google.ads.googleads.v8.enums.KeywordMatchTypeEnum.KeywordMatchTypeB
_text")
PlacementInfo
url (	H �B
_url"c
MobileAppCategoryInfo)
mobile_app_category_constant (	H �B
_mobile_app_category_constant"S
MobileApplicationInfo
app_id (	H �
name (	H�B	
_app_idB
_name"H
LocationInfo 
geo_target_constant (	H �B
_geo_target_constant"L

DeviceInfo>
type (20.google.ads.googleads.v8.enums.DeviceEnum.Device"r
PreferredContentInfoZ
type (2L.google.ads.googleads.v8.enums.PreferredContentTypeEnum.PreferredContentType"�
ListingGroupInfoR
type (2D.google.ads.googleads.v8.enums.ListingGroupTypeEnum.ListingGroupTypeH

case_value (24.google.ads.googleads.v8.common.ListingDimensionInfo&
parent_ad_group_criterion (	H �B
_parent_ad_group_criterion"\\
ListingScopeInfoH

dimensions (24.google.ads.googleads.v8.common.ListingDimensionInfo"�	
ListingDimensionInfo?
hotel_id (2+.google.ads.googleads.v8.common.HotelIdInfoH E
hotel_class (2..google.ads.googleads.v8.common.HotelClassInfoH V
hotel_country_region (26.google.ads.googleads.v8.common.HotelCountryRegionInfoH E
hotel_state (2..google.ads.googleads.v8.common.HotelStateInfoH C

hotel_city (2-.google.ads.googleads.v8.common.HotelCityInfoH ^
product_bidding_category (2:.google.ads.googleads.v8.common.ProductBiddingCategoryInfoH I
product_brand (20.google.ads.googleads.v8.common.ProductBrandInfoH M
product_channel (22.google.ads.googleads.v8.common.ProductChannelInfoH d
product_channel_exclusivity	 (2=.google.ads.googleads.v8.common.ProductChannelExclusivityInfoH Q
product_condition
 (24.google.ads.googleads.v8.common.ProductConditionInfoH ^
product_custom_attribute (2:.google.ads.googleads.v8.common.ProductCustomAttributeInfoH L
product_item_id (21.google.ads.googleads.v8.common.ProductItemIdInfoH G
product_type (2/.google.ads.googleads.v8.common.ProductTypeInfoH `
unknown_listing_dimension (2;.google.ads.googleads.v8.common.UnknownListingDimensionInfoH B
	dimension"+
HotelIdInfo
value (	H �B
_value".
HotelClassInfo
value (H �B
_value"\\
HotelCountryRegionInfo%
country_region_criterion (	H �B
_country_region_criterion"B
HotelStateInfo
state_criterion (	H �B
_state_criterion"?
HotelCityInfo
city_criterion (	H �B
_city_criterion"�
ProductBiddingCategoryInfo
id (H �
country_code (	H�i
level (2Z.google.ads.googleads.v8.enums.ProductBiddingCategoryLevelEnum.ProductBiddingCategoryLevelB
_idB
_country_code"0
ProductBrandInfo
value (	H �B
_value"g
ProductChannelInfoQ
channel (2@.google.ads.googleads.v8.enums.ProductChannelEnum.ProductChannel"�
ProductChannelExclusivityInfos
channel_exclusivity (2V.google.ads.googleads.v8.enums.ProductChannelExclusivityEnum.ProductChannelExclusivity"o
ProductConditionInfoW
	condition (2D.google.ads.googleads.v8.enums.ProductConditionEnum.ProductCondition"�
ProductCustomAttributeInfo
value (	H �i
index (2Z.google.ads.googleads.v8.enums.ProductCustomAttributeIndexEnum.ProductCustomAttributeIndexB
_value"1
ProductItemIdInfo
value (	H �B
_value"�
ProductTypeInfo
value (	H �S
level (2D.google.ads.googleads.v8.enums.ProductTypeLevelEnum.ProductTypeLevelB
_value"
UnknownListingDimensionInfo"|
HotelDateSelectionTypeInfo^
type (2P.google.ads.googleads.v8.enums.HotelDateSelectionTypeEnum.HotelDateSelectionType"g
HotelAdvanceBookingWindowInfo
min_days (H �
max_days (H�B
	_min_daysB
	_max_days"g
HotelLengthOfStayInfo

min_nights (H �

max_nights (H�B
_min_nightsB
_max_nights"A
HotelCheckInDateRangeInfo

start_date (	
end_date (	"b
HotelCheckInDayInfoK
day_of_week (26.google.ads.googleads.v8.enums.DayOfWeekEnum.DayOfWeek"g
InteractionTypeInfoP
type (2B.google.ads.googleads.v8.enums.InteractionTypeEnum.InteractionType"�
AdScheduleInfoR
start_minute (2<.google.ads.googleads.v8.enums.MinuteOfHourEnum.MinuteOfHourP

end_minute (2<.google.ads.googleads.v8.enums.MinuteOfHourEnum.MinuteOfHour

start_hour (H �
end_hour (H�K
day_of_week (26.google.ads.googleads.v8.enums.DayOfWeekEnum.DayOfWeekB
_start_hourB
	_end_hour"Z
AgeRangeInfoJ
type (2<.google.ads.googleads.v8.enums.AgeRangeTypeEnum.AgeRangeType"T

GenderInfoF
type (28.google.ads.googleads.v8.enums.GenderTypeEnum.GenderType"c
IncomeRangeInfoP
type (2B.google.ads.googleads.v8.enums.IncomeRangeTypeEnum.IncomeRangeType"l
ParentalStatusInfoV
type (2H.google.ads.googleads.v8.enums.ParentalStatusTypeEnum.ParentalStatusType"6
YouTubeVideoInfo
video_id (	H �B
	_video_id"<
YouTubeChannelInfo

channel_id (	H �B
_channel_id"4
UserListInfo
	user_list (	H �B

_user_list"�
ProximityInfo?
	geo_point (2,.google.ads.googleads.v8.common.GeoPointInfo
radius (H �b
radius_units (2L.google.ads.googleads.v8.enums.ProximityRadiusUnitsEnum.ProximityRadiusUnits<
address (2+.google.ads.googleads.v8.common.AddressInfoB	
_radius"�
GeoPointInfo\'
longitude_in_micro_degrees (H �&
latitude_in_micro_degrees (H�B
_longitude_in_micro_degreesB
_latitude_in_micro_degrees"�
AddressInfo
postal_code (	H �
province_code	 (	H�
country_code
 (	H�
province_name (	H�
street_address (	H�
street_address2 (	H�
	city_name (	H�B
_postal_codeB
_province_codeB
_country_codeB
_province_nameB
_street_addressB
_street_address2B

_city_name"I
	TopicInfo
topic_constant (	H �
path (	B
_topic_constant"D
LanguageInfo
language_constant (	H �B
_language_constant"5
IpBlockInfo

ip_address (	H �B
_ip_address"f
ContentLabelInfoR
type (2D.google.ads.googleads.v8.enums.ContentLabelTypeEnum.ContentLabelType"A
CarrierInfo
carrier_constant (	H �B
_carrier_constant"R
UserInterestInfo#
user_interest_category (	H �B
_user_interest_category"�
WebpageInfo
criterion_name (	H �H

conditions (24.google.ads.googleads.v8.common.WebpageConditionInfo
coverage_percentage (A
sample (21.google.ads.googleads.v8.common.WebpageSampleInfoB
_criterion_name"�
WebpageConditionInfoc
operand (2R.google.ads.googleads.v8.enums.WebpageConditionOperandEnum.WebpageConditionOperandf
operator (2T.google.ads.googleads.v8.enums.WebpageConditionOperatorEnum.WebpageConditionOperator
argument (	H �B
	_argument"(
WebpageSampleInfo
sample_urls (	"r
OperatingSystemVersionInfo.
!operating_system_version_constant (	H �B$
"_operating_system_version_constant"o
AppPaymentModelInfoX
type (2J.google.ads.googleads.v8.enums.AppPaymentModelTypeEnum.AppPaymentModelType"R
MobileDeviceInfo#
mobile_device_constant (	H �B
_mobile_device_constant"F
CustomAffinityInfo
custom_affinity (	H �B
_custom_affinity"@
CustomIntentInfo
custom_intent (	H �B
_custom_intent"�
LocationGroupInfo
feed (	H �
geo_target_constants (	
radius (H�j
radius_units (2T.google.ads.googleads.v8.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnits
feed_item_sets (	B
_feedB	
_radius"-
CustomAudienceInfo
custom_audience (	"1
CombinedAudienceInfo
combined_audience (	"h
KeywordThemeInfo 
keyword_theme_constant (	H !
free_form_keyword_theme (	H B
keyword_themeB�
"com.google.ads.googleads.v8.commonBCriteriaProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�
@google/ads/googleads/v8/enums/promotion_extension_occasion.protogoogle.ads.googleads.v8.enums"�
PromotionExtensionOccasionEnum"�
PromotionExtensionOccasion
UNSPECIFIED 
UNKNOWN
	NEW_YEARS
CHINESE_NEW_YEAR
VALENTINES_DAY

EASTER
MOTHERS_DAY
FATHERS_DAY
	LABOR_DAY
BACK_TO_SCHOOL	
	HALLOWEEN

BLACK_FRIDAY
CYBER_MONDAY
	CHRISTMAS

BOXING_DAY
INDEPENDENCE_DAY
NATIONAL_DAY
END_OF_SEASON
WINTER_SALE
SUMMER_SALE
	FALL_SALE
SPRING_SALE
RAMADAN
EID_AL_FITR
EID_AL_ADHA
SINGLES_DAY

WOMENS_DAY
HOLI
PARENTS_DAY
ST_NICHOLAS_DAY
CARNIVAL
EPIPHANY
ROSH_HASHANAH 
PASSOVER!
HANUKKAH"

DIWALI#
NAVRATRI$
SONGKRAN%
YEAR_END_GIFT&B�
!com.google.ads.googleads.v8.enumsBPromotionExtensionOccasionProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
-google/ads/googleads/v8/enums/app_store.protogoogle.ads.googleads.v8.enums"[
AppStoreEnum"K
AppStore
UNSPECIFIED 
UNKNOWN
APPLE_ITUNES
GOOGLE_PLAYB�
!com.google.ads.googleads.v8.enumsBAppStoreProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
>google/ads/googleads/v8/enums/price_extension_price_unit.protogoogle.ads.googleads.v8.enums"�
PriceExtensionPriceUnitEnum"�
PriceExtensionPriceUnit
UNSPECIFIED 
UNKNOWN
PER_HOUR
PER_DAY
PER_WEEK
	PER_MONTH
PER_YEAR
	PER_NIGHTB�
!com.google.ads.googleads.v8.enumsBPriceExtensionPriceUnitProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�(
/google/ads/googleads/v8/common/extensions.protogoogle.ads.googleads.v8.common0google/ads/googleads/v8/common/feed_common.proto-google/ads/googleads/v8/enums/app_store.protoCgoogle/ads/googleads/v8/enums/call_conversion_reporting_state.protoCgoogle/ads/googleads/v8/enums/price_extension_price_qualifier.proto>google/ads/googleads/v8/enums/price_extension_price_unit.proto8google/ads/googleads/v8/enums/price_extension_type.protoIgoogle/ads/googleads/v8/enums/promotion_extension_discount_modifier.proto@google/ads/googleads/v8/enums/promotion_extension_occasion.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
AppFeedItem
	link_text	 (	H �
app_id
 (	H�G
	app_store (24.google.ads.googleads.v8.enums.AppStoreEnum.AppStore

final_urls (	
final_mobile_urls (	"
tracking_url_template (	H�N
url_custom_parameters (2/.google.ads.googleads.v8.common.CustomParameter
final_url_suffix (	H�B

_link_textB	
_app_idB
_tracking_url_templateB
_final_url_suffix"�
CallFeedItem
phone_number (	H �
country_code (	H�"
call_tracking_enabled	 (H�#
call_conversion_action
 (	H�.
!call_conversion_tracking_disabled (H��
call_conversion_reporting_state (2\\.google.ads.googleads.v8.enums.CallConversionReportingStateEnum.CallConversionReportingStateB
_phone_numberB
_country_codeB
_call_tracking_enabledB
_call_conversion_actionB$
"_call_conversion_tracking_disabled"=
CalloutFeedItem
callout_text (	H �B
_callout_text"�
LocationFeedItem
business_name	 (	H �
address_line_1
 (	H�
address_line_2 (	H�
city (	H�
province (	H�
postal_code (	H�
country_code (	H�
phone_number (	H�B
_business_nameB
_address_line_1B
_address_line_2B
_cityB
	_provinceB
_postal_codeB
_country_codeB
_phone_number"�
AffiliateLocationFeedItem
business_name (	H �
address_line_1 (	H�
address_line_2 (	H�
city (	H�
province (	H�
postal_code (	H�
country_code (	H�
phone_number (	H�
chain_id (H�

chain_name (	H	�B
_business_nameB
_address_line_1B
_address_line_2B
_cityB
	_provinceB
_postal_codeB
_country_codeB
_phone_numberB
	_chain_idB
_chain_name"�
TextMessageFeedItem
business_name (	H �
country_code (	H�
phone_number (	H�
text	 (	H�
extension_text
 (	H�B
_business_nameB
_country_codeB
_phone_numberB
_textB
_extension_text"�
PriceFeedItemV
type (2H.google.ads.googleads.v8.enums.PriceExtensionTypeEnum.PriceExtensionTypeu
price_qualifier (2\\.google.ads.googleads.v8.enums.PriceExtensionPriceQualifierEnum.PriceExtensionPriceQualifier"
tracking_url_template (	H �
language_code (	H�C
price_offerings (2*.google.ads.googleads.v8.common.PriceOffer
final_url_suffix	 (	H�B
_tracking_url_templateB
_language_codeB
_final_url_suffix"�

PriceOffer
header (	H �
description (	H�4
price (2%.google.ads.googleads.v8.common.Money`
unit (2R.google.ads.googleads.v8.enums.PriceExtensionPriceUnitEnum.PriceExtensionPriceUnit

final_urls	 (	
final_mobile_urls
 (	B	
_headerB
_description"�
PromotionFeedItem
promotion_target (	H��
discount_modifier (2h.google.ads.googleads.v8.enums.PromotionExtensionDiscountModifierEnum.PromotionExtensionDiscountModifier!
promotion_start_date (	H�
promotion_end_date (	H�j
occasion	 (2X.google.ads.googleads.v8.enums.PromotionExtensionOccasionEnum.PromotionExtensionOccasion

final_urls (	
final_mobile_urls (	"
tracking_url_template (	H�N
url_custom_parameters (2/.google.ads.googleads.v8.common.CustomParameter
final_url_suffix (	H�
language_code (	H�
percent_off (H A
money_amount_off (2%.google.ads.googleads.v8.common.MoneyH 
promotion_code (	HC
orders_over_amount (2%.google.ads.googleads.v8.common.MoneyHB
discount_typeB
promotion_triggerB
_promotion_targetB
_promotion_start_dateB
_promotion_end_dateB
_tracking_url_templateB
_final_url_suffixB
_language_code"K
StructuredSnippetFeedItem
header (	H �
values (	B	
_header"�
SitelinkFeedItem
	link_text	 (	H �
line1
 (	H�
line2 (	H�

final_urls (	
final_mobile_urls (	"
tracking_url_template (	H�N
url_custom_parameters (2/.google.ads.googleads.v8.common.CustomParameter
final_url_suffix (	H�B

_link_textB
_line1B
_line2B
_tracking_url_templateB
_final_url_suffix"`
HotelCalloutFeedItem
text (	H �
language_code (	H�B
_textB
_language_code"L
ImageFeedItem;
image_asset (	B&�A�A 
googleads.googleapis.com/AssetB�
"com.google.ads.googleads.v8.commonBExtensionsProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�
2google/ads/googleads/v8/enums/extension_type.protogoogle.ads.googleads.v8.enums"�
ExtensionTypeEnum"�
ExtensionType
UNSPECIFIED 
UNKNOWN
NONE
APP
CALL
CALLOUT
MESSAGE	
PRICE
	PROMOTION
SITELINK

STRUCTURED_SNIPPET
LOCATION
AFFILIATE_LOCATION
HOTEL_CALLOUT	
IMAGEB�
!com.google.ads.googleads.v8.enumsBExtensionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
4google/ads/googleads/v8/enums/feed_item_status.protogoogle.ads.googleads.v8.enums"^
FeedItemStatusEnum"H
FeedItemStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v8.enumsBFeedItemStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
;google/ads/googleads/v8/enums/feed_item_target_device.protogoogle.ads.googleads.v8.enums"\\
FeedItemTargetDeviceEnum"@
FeedItemTargetDevice
UNSPECIFIED 
UNKNOWN

MOBILEB�
!com.google.ads.googleads.v8.enumsBFeedItemTargetDeviceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
9google/ads/googleads/v8/enums/response_content_type.protogoogle.ads.googleads.v8.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
!com.google.ads.googleads.v8.enumsBResponseContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
;google/ads/googleads/v8/resources/extension_feed_item.proto!google.ads.googleads.v8.resources/google/ads/googleads/v8/common/extensions.proto2google/ads/googleads/v8/enums/extension_type.proto4google/ads/googleads/v8/enums/feed_item_status.proto;google/ads/googleads/v8/enums/feed_item_target_device.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
ExtensionFeedItemI
resource_name (	B2�A�A,
*googleads.googleapis.com/ExtensionFeedItem
id (B�AH�[
extension_type (2>.google.ads.googleads.v8.enums.ExtensionTypeEnum.ExtensionTypeB�A
start_date_time (	H�
end_date_time (	H�D
ad_schedules (2..google.ads.googleads.v8.common.AdScheduleInfo\\
device (2L.google.ads.googleads.v8.enums.FeedItemTargetDeviceEnum.FeedItemTargetDeviceZ
targeted_geo_target_constant (	B/�A,
*googleads.googleapis.com/GeoTargetConstantH�E
targeted_keyword (2+.google.ads.googleads.v8.common.KeywordInfoU
status (2@.google.ads.googleads.v8.enums.FeedItemStatusEnum.FeedItemStatusB�AN
sitelink_feed_item (20.google.ads.googleads.v8.common.SitelinkFeedItemH a
structured_snippet_feed_item (29.google.ads.googleads.v8.common.StructuredSnippetFeedItemH D
app_feed_item (2+.google.ads.googleads.v8.common.AppFeedItemH F
call_feed_item (2,.google.ads.googleads.v8.common.CallFeedItemH L
callout_feed_item	 (2/.google.ads.googleads.v8.common.CalloutFeedItemH U
text_message_feed_item
 (23.google.ads.googleads.v8.common.TextMessageFeedItemH H
price_feed_item (2-.google.ads.googleads.v8.common.PriceFeedItemH P
promotion_feed_item (21.google.ads.googleads.v8.common.PromotionFeedItemH S
location_feed_item (20.google.ads.googleads.v8.common.LocationFeedItemB�AH f
affiliate_location_feed_item (29.google.ads.googleads.v8.common.AffiliateLocationFeedItemB�AH W
hotel_callout_feed_item (24.google.ads.googleads.v8.common.HotelCalloutFeedItemH M
image_feed_item (2-.google.ads.googleads.v8.common.ImageFeedItemB�AH C
targeted_campaign (	B&�A#
!googleads.googleapis.com/CampaignHB
targeted_ad_group (	B%�A"
 googleads.googleapis.com/AdGroupH:j�Ag
*googleads.googleapis.com/ExtensionFeedItem9customers/{customer_id}/extensionFeedItems/{feed_item_id}B
	extensionB
serving_resource_targetingB
_idB
_start_date_timeB
_end_date_timeB
_targeted_geo_target_constantB�
%com.google.ads.googleads.v8.resourcesBExtensionFeedItemProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3
�
Bgoogle/ads/googleads/v8/services/extension_feed_item_service.proto google.ads.googleads.v8.services;google/ads/googleads/v8/resources/extension_feed_item.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"h
GetExtensionFeedItemRequestI
resource_name (	B2�A�A,
*googleads.googleapis.com/ExtensionFeedItem"�
MutateExtensionFeedItemsRequest
customer_id (	B�AU

operations (2<.google.ads.googleads.v8.services.ExtensionFeedItemOperationB�A
partial_failure (
validate_only (i
response_content_type (2J.google.ads.googleads.v8.enums.ResponseContentTypeEnum.ResponseContentType"�
ExtensionFeedItemOperation/
update_mask (2.google.protobuf.FieldMaskF
create (24.google.ads.googleads.v8.resources.ExtensionFeedItemH F
update (24.google.ads.googleads.v8.resources.ExtensionFeedItemH 
remove (	H B
	operation"�
 MutateExtensionFeedItemsResponse1
partial_failure_error (2.google.rpc.StatusP
results (2?.google.ads.googleads.v8.services.MutateExtensionFeedItemResult"�
MutateExtensionFeedItemResult
resource_name (	Q
extension_feed_item (24.google.ads.googleads.v8.resources.ExtensionFeedItem2�
ExtensionFeedItemService�
GetExtensionFeedItem=.google.ads.googleads.v8.services.GetExtensionFeedItemRequest4.google.ads.googleads.v8.resources.ExtensionFeedItem"L���64/v8/{resource_name=customers/*/extensionFeedItems/*}�Aresource_name�
MutateExtensionFeedItemsA.google.ads.googleads.v8.services.MutateExtensionFeedItemsRequestB.google.ads.googleads.v8.services.MutateExtensionFeedItemsResponse"[���<"7/v8/customers/{customer_id=*}/extensionFeedItems:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBExtensionFeedItemServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

