<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/campaign_draft_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class CampaignDraftService
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
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v8/enums/campaign_draft_status.protogoogle.ads.googleads.v8.enums"�
CampaignDraftStatusEnum"
CampaignDraftStatus
UNSPECIFIED 
UNKNOWN
PROPOSED
REMOVED
	PROMOTING
PROMOTED
PROMOTE_FAILEDB�
!com.google.ads.googleads.v8.enumsBCampaignDraftStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
9google/ads/googleads/v8/enums/response_content_type.protogoogle.ads.googleads.v8.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
!com.google.ads.googleads.v8.enumsBResponseContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/resources/campaign_draft.proto!google.ads.googleads.v8.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CampaignDraftE
resource_name (	B.�A�A(
&googleads.googleapis.com/CampaignDraft
draft_id	 (B�AH �E
base_campaign
 (	B)�A�A#
!googleads.googleapis.com/CampaignH�
name (	H�F
draft_campaign (	B)�A�A#
!googleads.googleapis.com/CampaignH�_
status (2J.google.ads.googleads.v8.enums.CampaignDraftStatusEnum.CampaignDraftStatusB�A(
has_experiment_running (B�AH�(
long_running_operation (	B�AH�:q�An
&googleads.googleapis.com/CampaignDraftDcustomers/{customer_id}/campaignDrafts/{base_campaign_id}~{draft_id}B
	_draft_idB
_base_campaignB
_nameB
_draft_campaignB
_has_experiment_runningB
_long_running_operationB�
%com.google.ads.googleads.v8.resourcesBCampaignDraftProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3
�
=google/ads/googleads/v8/services/campaign_draft_service.proto google.ads.googleads.v8.services6google/ads/googleads/v8/resources/campaign_draft.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"`
GetCampaignDraftRequestE
resource_name (	B.�A�A(
&googleads.googleapis.com/CampaignDraft"�
MutateCampaignDraftsRequest
customer_id (	B�AQ

operations (28.google.ads.googleads.v8.services.CampaignDraftOperationB�A
partial_failure (
validate_only (i
response_content_type (2J.google.ads.googleads.v8.enums.ResponseContentTypeEnum.ResponseContentType"Q
PromoteCampaignDraftRequest
campaign_draft (	B�A
validate_only ("�
CampaignDraftOperation/
update_mask (2.google.protobuf.FieldMaskB
create (20.google.ads.googleads.v8.resources.CampaignDraftH B
update (20.google.ads.googleads.v8.resources.CampaignDraftH 
remove (	H B
	operation"�
MutateCampaignDraftsResponse1
partial_failure_error (2.google.rpc.StatusL
results (2;.google.ads.googleads.v8.services.MutateCampaignDraftResult"|
MutateCampaignDraftResult
resource_name (	H
campaign_draft (20.google.ads.googleads.v8.resources.CampaignDraft"�
#ListCampaignDraftAsyncErrorsRequestE
resource_name (	B.�A�A(
&googleads.googleapis.com/CampaignDraft

page_token (	
	page_size ("c
$ListCampaignDraftAsyncErrorsResponse"
errors (2.google.rpc.Status
next_page_token (	2�
CampaignDraftService�
GetCampaignDraft9.google.ads.googleads.v8.services.GetCampaignDraftRequest0.google.ads.googleads.v8.resources.CampaignDraft"H���20/v8/{resource_name=customers/*/campaignDrafts/*}�Aresource_name�
MutateCampaignDrafts=.google.ads.googleads.v8.services.MutateCampaignDraftsRequest>.google.ads.googleads.v8.services.MutateCampaignDraftsResponse"W���8"3/v8/customers/{customer_id=*}/campaignDrafts:mutate:*�Acustomer_id,operations�
PromoteCampaignDraft=.google.ads.googleads.v8.services.PromoteCampaignDraftRequest.google.longrunning.Operation"����>"9/v8/{campaign_draft=customers/*/campaignDrafts/*}:promote:*�Acampaign_draft�A.
google.protobuf.Emptygoogle.protobuf.Empty�
ListCampaignDraftAsyncErrorsE.google.ads.googleads.v8.services.ListCampaignDraftAsyncErrorsRequestF.google.ads.googleads.v8.services.ListCampaignDraftAsyncErrorsResponse"X���B@/v8/{resource_name=customers/*/campaignDrafts/*}:listAsyncErrors�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBCampaignDraftServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

