<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/common/asset_types.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Common;

class AssetTypes
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
-google/ads/googleads/v8/enums/mime_type.protogoogle.ads.googleads.v8.enums"�
MimeTypeEnum"�
MimeType
UNSPECIFIED 
UNKNOWN

IMAGE_JPEG
	IMAGE_GIF
	IMAGE_PNG	
FLASH
	TEXT_HTML
PDF

MSWORD
MSEXCEL	
RTF

	AUDIO_WAV
	AUDIO_MP3
HTML5_AD_ZIPB�
!com.google.ads.googleads.v8.enumsBMimeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Igoogle/ads/googleads/v8/enums/promotion_extension_discount_modifier.protogoogle.ads.googleads.v8.enums"w
&PromotionExtensionDiscountModifierEnum"M
"PromotionExtensionDiscountModifier
UNSPECIFIED 
UNKNOWN	
UP_TOB�
!com.google.ads.googleads.v8.enumsB\'PromotionExtensionDiscountModifierProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
<google/ads/googleads/v8/enums/lead_form_desired_intent.protogoogle.ads.googleads.v8.enums"s
LeadFormDesiredIntentEnum"V
LeadFormDesiredIntent
UNSPECIFIED 
UNKNOWN

LOW_INTENT
HIGH_INTENTB�
!com.google.ads.googleads.v8.enumsBLeadFormDesiredIntentProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Cgoogle/ads/googleads/v8/enums/lead_form_field_user_input_type.protogoogle.ads.googleads.v8.enums"�

LeadFormFieldUserInputTypeEnum"�

LeadFormFieldUserInputType
UNSPECIFIED 
UNKNOWN
	FULL_NAME	
EMAIL
PHONE_NUMBER
POSTAL_CODE
CITY	

REGION

COUNTRY

WORK_EMAIL
COMPANY_NAME

WORK_PHONE
	JOB_TITLE

FIRST_NAME
	LAST_NAME
VEHICLE_MODEL�
VEHICLE_TYPE�
PREFERRED_DEALERSHIP�
VEHICLE_PURCHASE_TIMELINE�
VEHICLE_OWNERSHIP�
VEHICLE_PAYMENT_TYPE�
VEHICLE_CONDITION�
COMPANY_SIZE�
ANNUAL_SALES�
YEARS_IN_BUSINESS�
JOB_DEPARTMENT�
JOB_ROLE�
EDUCATION_PROGRAM�
EDUCATION_COURSE�
PRODUCT�
SERVICE�

OFFER�
CATEGORY�
PREFERRED_CONTACT_METHOD�
PREFERRED_LOCATION�
PREFERRED_CONTACT_TIME�
PURCHASE_TIMELINE�
YEARS_OF_EXPERIENCE�
JOB_INDUSTRY�
LEVEL_OF_EDUCATION�
PROPERTY_TYPE�
REALTOR_HELP_GOAL�
PROPERTY_COMMUNITY�
PRICE_RANGE�
NUMBER_OF_BEDROOMS�
FURNISHED_PROPERTY�
PETS_ALLOWED_PROPERTY�
NEXT_PLANNED_PURCHASE�
EVENT_SIGNUP_INTEREST�
PREFERRED_SHOPPING_PLACES�
FAVORITE_BRAND�+
&TRANSPORTATION_COMMERCIAL_LICENSE_TYPE�
EVENT_BOOKING_INTEREST�
DESTINATION_COUNTRY�
DESTINATION_CITY�
DEPARTURE_COUNTRY�
DEPARTURE_CITY�
DEPARTURE_DATE�
RETURN_DATE�
NUMBER_OF_TRAVELERS�
TRAVEL_BUDGET�
TRAVEL_ACCOMMODATION�B�
!com.google.ads.googleads.v8.enumsBLeadFormFieldUserInputTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Agoogle/ads/googleads/v8/enums/lead_form_call_to_action_type.protogoogle.ads.googleads.v8.enums"�
LeadFormCallToActionTypeEnum"�
LeadFormCallToActionType
UNSPECIFIED 
UNKNOWN

LEARN_MORE
	GET_QUOTE
	APPLY_NOW
SIGN_UP

CONTACT_US
	SUBSCRIBE
DOWNLOAD
BOOK_NOW	
	GET_OFFER

REGISTER
GET_INFO
REQUEST_DEMO
JOIN_NOW
GET_STARTEDB�
!com.google.ads.googleads.v8.enumsBLeadFormCallToActionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
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
�
Mgoogle/ads/googleads/v8/enums/lead_form_post_submit_call_to_action_type.protogoogle.ads.googleads.v8.enums"�
&LeadFormPostSubmitCallToActionTypeEnum"~
"LeadFormPostSubmitCallToActionType
UNSPECIFIED 
UNKNOWN

VISIT_SITE
DOWNLOAD

LEARN_MORE
SHOP_NOWB�
!com.google.ads.googleads.v8.enumsB\'LeadFormPostSubmitCallToActionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
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
� 
0google/ads/googleads/v8/common/asset_types.protogoogle.ads.googleads.v8.common0google/ads/googleads/v8/common/feed_common.protoAgoogle/ads/googleads/v8/enums/lead_form_call_to_action_type.proto<google/ads/googleads/v8/enums/lead_form_desired_intent.protoCgoogle/ads/googleads/v8/enums/lead_form_field_user_input_type.protoMgoogle/ads/googleads/v8/enums/lead_form_post_submit_call_to_action_type.proto-google/ads/googleads/v8/enums/mime_type.protoIgoogle/ads/googleads/v8/enums/promotion_extension_discount_modifier.proto@google/ads/googleads/v8/enums/promotion_extension_occasion.protogoogle/api/field_behavior.protogoogle/api/annotations.proto"d
YoutubeVideoAsset
youtube_video_id (	H �
youtube_video_title (	B
_youtube_video_id".
MediaBundleAsset
data (H �B
_data"�

ImageAsset
data (H �
	file_size (H�G
	mime_type (24.google.ads.googleads.v8.enums.MimeTypeEnum.MimeTypeA
	full_size (2..google.ads.googleads.v8.common.ImageDimensionB
_dataB

_file_size"�
ImageDimension
height_pixels (H �
width_pixels (H�
url (	H�B
_height_pixelsB
_width_pixelsB
_url"\'
	TextAsset
text (	H �B
_text"�
LeadFormAsset
business_name
 (	B�Av
call_to_action_type (2T.google.ads.googleads.v8.enums.LeadFormCallToActionTypeEnum.LeadFormCallToActionTypeB�A\'
call_to_action_description (	B�A
headline (	B�A
description (	B�A
privacy_policy_url (	B�A!
post_submit_headline (	H �$
post_submit_description (	H�=
fields (2-.google.ads.googleads.v8.common.LeadFormFieldP
delivery_methods	 (26.google.ads.googleads.v8.common.LeadFormDeliveryMethod�
post_submit_call_to_action_type (2h.google.ads.googleads.v8.enums.LeadFormPostSubmitCallToActionTypeEnum.LeadFormPostSubmitCallToActionType#
background_image_asset (	H�f
desired_intent (2N.google.ads.googleads.v8.enums.LeadFormDesiredIntentEnum.LeadFormDesiredIntent
custom_disclosure (	H�B
_post_submit_headlineB
_post_submit_descriptionB
_background_image_assetB
_custom_disclosure"�
LeadFormFieldl

input_type (2X.google.ads.googleads.v8.enums.LeadFormFieldUserInputTypeEnum.LeadFormFieldUserInputType\\
single_choice_answers (2;.google.ads.googleads.v8.common.LeadFormSingleChoiceAnswersH B	
answers".
LeadFormSingleChoiceAnswers
answers (	"p
LeadFormDeliveryMethodB
webhook (2/.google.ads.googleads.v8.common.WebhookDeliveryH B
delivery_details"�
WebhookDelivery#
advertiser_webhook_url (	H �
google_secret (	H�#
payload_schema_version (H�B
_advertiser_webhook_urlB
_google_secretB
_payload_schema_version"
BookOnGoogleAsset"�
PromotionAsset
promotion_target (	B�A�
discount_modifier (2h.google.ads.googleads.v8.enums.PromotionExtensionDiscountModifierEnum.PromotionExtensionDiscountModifier
redemption_start_date (	
redemption_end_date (	j
occasion	 (2X.google.ads.googleads.v8.enums.PromotionExtensionOccasionEnum.PromotionExtensionOccasion
language_code
 (	

start_date (	
end_date (	K
ad_schedule_targets (2..google.ads.googleads.v8.common.AdScheduleInfo
percent_off (H A
money_amount_off (2%.google.ads.googleads.v8.common.MoneyH 
promotion_code (	HC
orders_over_amount (2%.google.ads.googleads.v8.common.MoneyHB
discount_typeB
promotion_trigger"�
CalloutAsset
callout_text (	B�A

start_date (	
end_date (	K
ad_schedule_targets (2..google.ads.googleads.v8.common.AdScheduleInfo"B
StructuredSnippetAsset
header (	B�A
values (	B�A"�
SitelinkAsset
	link_text (	B�A
description1 (	
description2 (	

start_date (	
end_date (	K
ad_schedule_targets (2..google.ads.googleads.v8.common.AdScheduleInfoB�
"com.google.ads.googleads.v8.commonBAssetTypesProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

