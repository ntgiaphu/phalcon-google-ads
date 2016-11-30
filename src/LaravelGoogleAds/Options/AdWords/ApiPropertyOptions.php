<?php

namespace PhalconGoogleAds\Options\AdWords;

use PhalconGoogleAds\Options\Options;

class ApiPropertyOptions extends Options
{
    /** @var array */
    protected $defaults = [
        /*
         * Library
         */
        'lib.product' => 'AdWords',
        'lib.package' => 'GoogleApiAdsAdWords',

        /*
         * WSDL2PHP
         * Optionally specify a proxy to use when processing the WSDLs in the format
         * tcp://host:port.
         */
        'wsdl2php.proxy' => '',

        /*
         * If enabled, class names (but not service names) will be prefixed with the
         * package name. Ex) Google\Api\Ads\AdWords\Campaign
         */
        'wsdl2php.enableNamespaces' => false,

        /*
         * Class map to be used if namespace support is not enabled, to work around
         * common conflicts, in JSON format.
         */
        'wsdl2php.conflictClassmap' => '{"DateTime":"AdWordsDateTime", "SoapHeader":"SoapRequestHeader"}',

        /*
         * Other class fixes.
         */
        'wsdl2php.classmap' => '{"getResponse":"${service}GetResponse", "get":"${service}Get", "mutate":"${service}Mutate", "mutateResponse":"${service}MutateResponse", "mutateCallToAction":"${service}MutateCallToAction", "search":"${service}Search", "Function":"FeedFunction"}',
        'wsdl2php.skipClassNameCheckTypes' => 'Target,Location',

        /*
         * API
         */
        'api.server' => 'https://adwords.google.com',
        'api.versions' => 'v201605,v201607,v201609',
        'api.soapClientClassNamespace' => 'Google_Api_Ads_AdWords_Lib',

        /*
         * v201605
         */
        'api.versions.v201605.namespace' => 'Google_Api_Ads_AdWords_v201605',
        'api.versions.v201605.services' => 'AdGroupAdService,AdGroupBidModifierService,AdGroupCriterionService,AdGroupFeedService,AdGroupService,AdParamService,AdwordsUserListService,BatchJobService,BiddingStrategyService,BudgetOrderService,BudgetService,CampaignCriterionService,CampaignFeedService,CampaignService,ConstantDataService,ConversionTrackerService,CustomerFeedService,CustomerService,CustomerSyncService,DataService,ExperimentService,FeedItemService,FeedMappingService,FeedService,LabelService,LocationCriterionService,ManagedCustomerService,MediaService,OfflineConversionFeedService,ReportDefinitionService,TargetingIdeaService,TrafficEstimatorService,ExpressBusinessService,ProductServiceService,BudgetSuggestionService,PromotionService,CampaignSharedSetService,SharedCriterionService,SharedSetService,CampaignExtensionSettingService,AdGroupExtensionSettingService,CustomerExtensionSettingService,AdCustomizerFeedService,AccountLabelService,DraftService,DraftAsyncErrorService,TrialService,TrialAsyncErrorService',
        'api.versions.v201605.services.AdGroupAdService.wsdl' => '${api.server}/api/adwords/cm/v201605/AdGroupAdService',
        'api.versions.v201605.services.AdGroupBidModifierService.wsdl' => '${api.server}/api/adwords/cm/v201605/AdGroupBidModifierService',
        'api.versions.v201605.services.AdGroupCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201605/AdGroupCriterionService',
        'api.versions.v201605.services.AdGroupFeedService.wsdl' => '${api.server}/api/adwords/cm/v201605/AdGroupFeedService',
        'api.versions.v201605.services.AdGroupService.wsdl' => '${api.server}/api/adwords/cm/v201605/AdGroupService',
        'api.versions.v201605.services.AdParamService.wsdl' => '${api.server}/api/adwords/cm/v201605/AdParamService',
        'api.versions.v201605.services.AdwordsUserListService.wsdl' => '${api.server}/api/adwords/rm/v201605/AdwordsUserListService',
        'api.versions.v201605.services.BatchJobService.wsdl' => '${api.server}/api/adwords/cm/v201605/BatchJobService',
        'api.versions.v201605.services.BiddingStrategyService.wsdl' => '${api.server}/api/adwords/cm/v201605/BiddingStrategyService',
        'api.versions.v201605.services.BudgetOrderService.wsdl' => '${api.server}/api/adwords/billing/v201605/BudgetOrderService',
        'api.versions.v201605.services.BudgetService.wsdl' => '${api.server}/api/adwords/cm/v201605/BudgetService',
        'api.versions.v201605.services.BudgetSuggestionService.wsdl' => '${api.server}/api/adwords/express/v201605/BudgetSuggestionService',
        'api.versions.v201605.services.CampaignCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201605/CampaignCriterionService',
        'api.versions.v201605.services.CampaignFeedService.wsdl' => '${api.server}/api/adwords/cm/v201605/CampaignFeedService',
        'api.versions.v201605.services.CampaignService.wsdl' => '${api.server}/api/adwords/cm/v201605/CampaignService',
        'api.versions.v201605.services.CampaignSharedSetService.wsdl' => '${api.server}/api/adwords/cm/v201605/CampaignSharedSetService',
        'api.versions.v201605.services.ConstantDataService.wsdl' => '${api.server}/api/adwords/cm/v201605/ConstantDataService',
        'api.versions.v201605.services.ConversionTrackerService.wsdl' => '${api.server}/api/adwords/cm/v201605/ConversionTrackerService',
        'api.versions.v201605.services.CustomerFeedService.wsdl' => '${api.server}/api/adwords/cm/v201605/CustomerFeedService',
        'api.versions.v201605.services.CustomerService.wsdl' => '${api.server}/api/adwords/mcm/v201605/CustomerService',
        'api.versions.v201605.services.CustomerSyncService.wsdl' => '${api.server}/api/adwords/ch/v201605/CustomerSyncService',
        'api.versions.v201605.services.DataService.wsdl' => '${api.server}/api/adwords/cm/v201605/DataService',
        'api.versions.v201605.services.ExperimentService.wsdl' => '${api.server}/api/adwords/cm/v201605/ExperimentService',
        'api.versions.v201605.services.ExpressBusinessService.wsdl' => '${api.server}/api/adwords/express/v201605/ExpressBusinessService',
        'api.versions.v201605.services.FeedItemService.wsdl' => '${api.server}/api/adwords/cm/v201605/FeedItemService',
        'api.versions.v201605.services.FeedMappingService.wsdl' => '${api.server}/api/adwords/cm/v201605/FeedMappingService',
        'api.versions.v201605.services.FeedService.wsdl' => '${api.server}/api/adwords/cm/v201605/FeedService',
        'api.versions.v201605.services.LabelService.wsdl' => '${api.server}/api/adwords/cm/v201605/LabelService',
        'api.versions.v201605.services.LocationCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201605/LocationCriterionService',
        'api.versions.v201605.services.ManagedCustomerService.wsdl' => '${api.server}/api/adwords/mcm/v201605/ManagedCustomerService',
        'api.versions.v201605.services.MediaService.wsdl' => '${api.server}/api/adwords/cm/v201605/MediaService',
        'api.versions.v201605.services.OfflineConversionFeedService.wsdl' => '${api.server}/api/adwords/cm/v201605/OfflineConversionFeedService',
        'api.versions.v201605.services.ProductServiceService.wsdl' => '${api.server}/api/adwords/express/v201605/ProductServiceService',
        'api.versions.v201605.services.PromotionService.wsdl' => '${api.server}/api/adwords/express/v201605/PromotionService',
        'api.versions.v201605.services.ReportDefinitionService.wsdl' => '${api.server}/api/adwords/cm/v201605/ReportDefinitionService',
        'api.versions.v201605.services.SharedCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201605/SharedCriterionService',
        'api.versions.v201605.services.SharedSetService.wsdl' => '${api.server}/api/adwords/cm/v201605/SharedSetService',
        'api.versions.v201605.services.TargetingIdeaService.wsdl' => '${api.server}/api/adwords/o/v201605/TargetingIdeaService',
        'api.versions.v201605.services.TrafficEstimatorService.wsdl' => '${api.server}/api/adwords/o/v201605/TrafficEstimatorService',
        'api.versions.v201605.services.CampaignExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201605/CampaignExtensionSettingService',
        'api.versions.v201605.services.AdGroupExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201605/AdGroupExtensionSettingService',
        'api.versions.v201605.services.CustomerExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201605/CustomerExtensionSettingService',
        'api.versions.v201605.services.AdCustomizerFeedService.wsdl' => '${api.server}/api/adwords/cm/v201605/AdCustomizerFeedService',
        'api.versions.v201605.services.AccountLabelService.wsdl' => '${api.server}/api/adwords/mcm/v201605/AccountLabelService',
        'api.versions.v201605.services.DraftService.wsdl' => '${api.server}/api/adwords/cm/v201605/DraftService',
        'api.versions.v201605.services.DraftAsyncErrorService.wsdl' => '${api.server}/api/adwords/cm/v201605/DraftAsyncErrorService',
        'api.versions.v201605.services.TrialService.wsdl' => '${api.server}/api/adwords/cm/v201605/TrialService',
        'api.versions.v201605.services.TrialAsyncErrorService.wsdl' => '${api.server}/api/adwords/cm/v201605/TrialAsyncErrorService',

        /*
         * v201607
         */
        'api.versions.v201607.namespace' => 'Google_Api_Ads_AdWords_v201607',
        'api.versions.v201607.services' => 'AdGroupAdService,AdGroupBidModifierService,AdGroupCriterionService,AdGroupFeedService,AdGroupService,AdParamService,AdwordsUserListService,BatchJobService,BiddingStrategyService,BudgetOrderService,BudgetService,CampaignCriterionService,CampaignFeedService,CampaignService,ConstantDataService,ConversionTrackerService,CustomerFeedService,CustomerService,CustomerSyncService,DataService,ExperimentService,FeedItemService,FeedMappingService,FeedService,LabelService,LocationCriterionService,ManagedCustomerService,MediaService,OfflineConversionFeedService,ReportDefinitionService,TargetingIdeaService,TrafficEstimatorService,ExpressBusinessService,ProductServiceService,BudgetSuggestionService,PromotionService,CampaignSharedSetService,SharedCriterionService,SharedSetService,CampaignExtensionSettingService,AdGroupExtensionSettingService,CustomerExtensionSettingService,AdCustomizerFeedService,AccountLabelService,DraftService,DraftAsyncErrorService,TrialService,TrialAsyncErrorService',
        'api.versions.v201607.services.AdGroupAdService.wsdl' => '${api.server}/api/adwords/cm/v201607/AdGroupAdService?wsdl',
        'api.versions.v201607.services.AdGroupBidModifierService.wsdl' => '${api.server}/api/adwords/cm/v201607/AdGroupBidModifierService?wsdl',
        'api.versions.v201607.services.AdGroupCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201607/AdGroupCriterionService?wsdl',
        'api.versions.v201607.services.AdGroupFeedService.wsdl' => '${api.server}/api/adwords/cm/v201607/AdGroupFeedService?wsdl',
        'api.versions.v201607.services.AdGroupService.wsdl' => '${api.server}/api/adwords/cm/v201607/AdGroupService?wsdl',
        'api.versions.v201607.services.AdParamService.wsdl' => '${api.server}/api/adwords/cm/v201607/AdParamService?wsdl',
        'api.versions.v201607.services.AdwordsUserListService.wsdl' => '${api.server}/api/adwords/rm/v201607/AdwordsUserListService?wsdl',
        'api.versions.v201607.services.BatchJobService.wsdl' => '${api.server}/api/adwords/cm/v201607/BatchJobService?wsdl',
        'api.versions.v201607.services.BiddingStrategyService.wsdl' => '${api.server}/api/adwords/cm/v201607/BiddingStrategyService?wsdl',
        'api.versions.v201607.services.BudgetOrderService.wsdl' => '${api.server}/api/adwords/billing/v201607/BudgetOrderService?wsdl',
        'api.versions.v201607.services.BudgetService.wsdl' => '${api.server}/api/adwords/cm/v201607/BudgetService?wsdl',
        'api.versions.v201607.services.BudgetSuggestionService.wsdl' => '${api.server}/api/adwords/express/v201607/BudgetSuggestionService?wsdl',
        'api.versions.v201607.services.CampaignCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201607/CampaignCriterionService?wsdl',
        'api.versions.v201607.services.CampaignFeedService.wsdl' => '${api.server}/api/adwords/cm/v201607/CampaignFeedService?wsdl',
        'api.versions.v201607.services.CampaignService.wsdl' => '${api.server}/api/adwords/cm/v201607/CampaignService?wsdl',
        'api.versions.v201607.services.CampaignSharedSetService.wsdl' => '${api.server}/api/adwords/cm/v201607/CampaignSharedSetService?wsdl',
        'api.versions.v201607.services.ConstantDataService.wsdl' => '${api.server}/api/adwords/cm/v201607/ConstantDataService?wsdl',
        'api.versions.v201607.services.ConversionTrackerService.wsdl' => '${api.server}/api/adwords/cm/v201607/ConversionTrackerService?wsdl',
        'api.versions.v201607.services.CustomerFeedService.wsdl' => '${api.server}/api/adwords/cm/v201607/CustomerFeedService?wsdl',
        'api.versions.v201607.services.CustomerService.wsdl' => '${api.server}/api/adwords/mcm/v201607/CustomerService?wsdl',
        'api.versions.v201607.services.CustomerSyncService.wsdl' => '${api.server}/api/adwords/ch/v201607/CustomerSyncService?wsdl',
        'api.versions.v201607.services.DataService.wsdl' => '${api.server}/api/adwords/cm/v201607/DataService?wsdl',
        'api.versions.v201607.services.ExperimentService.wsdl' => '${api.server}/api/adwords/cm/v201607/ExperimentService?wsdl',
        'api.versions.v201607.services.ExpressBusinessService.wsdl' => '${api.server}/api/adwords/express/v201607/ExpressBusinessService?wsdl',
        'api.versions.v201607.services.FeedItemService.wsdl' => '${api.server}/api/adwords/cm/v201607/FeedItemService?wsdl',
        'api.versions.v201607.services.FeedMappingService.wsdl' => '${api.server}/api/adwords/cm/v201607/FeedMappingService?wsdl',
        'api.versions.v201607.services.FeedService.wsdl' => '${api.server}/api/adwords/cm/v201607/FeedService?wsdl',
        'api.versions.v201607.services.LabelService.wsdl' => '${api.server}/api/adwords/cm/v201607/LabelService?wsdl',
        'api.versions.v201607.services.LocationCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201607/LocationCriterionService?wsdl',
        'api.versions.v201607.services.ManagedCustomerService.wsdl' => '${api.server}/api/adwords/mcm/v201607/ManagedCustomerService?wsdl',
        'api.versions.v201607.services.MediaService.wsdl' => '${api.server}/api/adwords/cm/v201607/MediaService?wsdl',
        'api.versions.v201607.services.OfflineConversionFeedService.wsdl' => '${api.server}/api/adwords/cm/v201607/OfflineConversionFeedService?wsdl',
        'api.versions.v201607.services.ProductServiceService.wsdl' => '${api.server}/api/adwords/express/v201607/ProductServiceService?wsdl',
        'api.versions.v201607.services.PromotionService.wsdl' => '${api.server}/api/adwords/express/v201607/PromotionService?wsdl',
        'api.versions.v201607.services.ReportDefinitionService.wsdl' => '${api.server}/api/adwords/cm/v201607/ReportDefinitionService?wsdl',
        'api.versions.v201607.services.SharedCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201607/SharedCriterionService?wsdl',
        'api.versions.v201607.services.SharedSetService.wsdl' => '${api.server}/api/adwords/cm/v201607/SharedSetService?wsdl',
        'api.versions.v201607.services.TargetingIdeaService.wsdl' => '${api.server}/api/adwords/o/v201607/TargetingIdeaService?wsdl',
        'api.versions.v201607.services.TrafficEstimatorService.wsdl' => '${api.server}/api/adwords/o/v201607/TrafficEstimatorService?wsdl',
        'api.versions.v201607.services.CampaignExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201607/CampaignExtensionSettingService?wsdl',
        'api.versions.v201607.services.AdGroupExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201607/AdGroupExtensionSettingService?wsdl',
        'api.versions.v201607.services.CustomerExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201607/CustomerExtensionSettingService?wsdl',
        'api.versions.v201607.services.AdCustomizerFeedService.wsdl' => '${api.server}/api/adwords/cm/v201607/AdCustomizerFeedService?wsdl',
        'api.versions.v201607.services.AccountLabelService.wsdl' => '${api.server}/api/adwords/mcm/v201607/AccountLabelService?wsdl',
        'api.versions.v201607.services.DraftService.wsdl' => '${api.server}/api/adwords/cm/v201607/DraftService?wsdl',
        'api.versions.v201607.services.DraftAsyncErrorService.wsdl' => '${api.server}/api/adwords/cm/v201607/DraftAsyncErrorService?wsdl',
        'api.versions.v201607.services.TrialService.wsdl' => '${api.server}/api/adwords/cm/v201607/TrialService?wsdl',
        'api.versions.v201607.services.TrialAsyncErrorService.wsdl' => '${api.server}/api/adwords/cm/v201607/TrialAsyncErrorService?wsdl',

        /*
         * v201609
         */
        'api.versions.v201609.namespace' => 'Google_Api_Ads_AdWords_v201609',
        'api.versions.v201609.services' => 'AdGroupAdService,AdGroupBidModifierService,AdGroupCriterionService,AdGroupFeedService,AdGroupService,AdParamService,AdwordsUserListService,BatchJobService,BiddingStrategyService,BudgetOrderService,BudgetService,CampaignCriterionService,CampaignFeedService,CampaignService,ConstantDataService,ConversionTrackerService,CustomerFeedService,CustomerService,CustomerSyncService,DataService,FeedItemService,FeedMappingService,FeedService,LabelService,LocationCriterionService,ManagedCustomerService,MediaService,OfflineConversionFeedService,ReportDefinitionService,TargetingIdeaService,TrafficEstimatorService,ExpressBusinessService,ProductServiceService,BudgetSuggestionService,PromotionService,CampaignSharedSetService,SharedCriterionService,SharedSetService,CampaignExtensionSettingService,AdGroupExtensionSettingService,CustomerExtensionSettingService,AdCustomizerFeedService,AccountLabelService,DraftService,DraftAsyncErrorService,TrialService,TrialAsyncErrorService,OfflineCallConversionFeedService',
        'api.versions.v201609.services.AdGroupAdService.wsdl' => '${api.server}/api/adwords/cm/v201609/AdGroupAdService?wsdl',
        'api.versions.v201609.services.AdGroupBidModifierService.wsdl' => '${api.server}/api/adwords/cm/v201609/AdGroupBidModifierService?wsdl',
        'api.versions.v201609.services.AdGroupCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201609/AdGroupCriterionService?wsdl',
        'api.versions.v201609.services.AdGroupFeedService.wsdl' => '${api.server}/api/adwords/cm/v201609/AdGroupFeedService?wsdl',
        'api.versions.v201609.services.AdGroupService.wsdl' => '${api.server}/api/adwords/cm/v201609/AdGroupService?wsdl',
        'api.versions.v201609.services.AdParamService.wsdl' => '${api.server}/api/adwords/cm/v201609/AdParamService?wsdl',
        'api.versions.v201609.services.AdwordsUserListService.wsdl' => '${api.server}/api/adwords/rm/v201609/AdwordsUserListService?wsdl',
        'api.versions.v201609.services.BatchJobService.wsdl' => '${api.server}/api/adwords/cm/v201609/BatchJobService?wsdl',
        'api.versions.v201609.services.BiddingStrategyService.wsdl' => '${api.server}/api/adwords/cm/v201609/BiddingStrategyService?wsdl',
        'api.versions.v201609.services.BudgetOrderService.wsdl' => '${api.server}/api/adwords/billing/v201609/BudgetOrderService?wsdl',
        'api.versions.v201609.services.BudgetService.wsdl' => '${api.server}/api/adwords/cm/v201609/BudgetService?wsdl',
        'api.versions.v201609.services.BudgetSuggestionService.wsdl' => '${api.server}/api/adwords/express/v201609/BudgetSuggestionService?wsdl',
        'api.versions.v201609.services.CampaignCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201609/CampaignCriterionService?wsdl',
        'api.versions.v201609.services.CampaignFeedService.wsdl' => '${api.server}/api/adwords/cm/v201609/CampaignFeedService?wsdl',
        'api.versions.v201609.services.CampaignService.wsdl' => '${api.server}/api/adwords/cm/v201609/CampaignService?wsdl',
        'api.versions.v201609.services.CampaignSharedSetService.wsdl' => '${api.server}/api/adwords/cm/v201609/CampaignSharedSetService?wsdl',
        'api.versions.v201609.services.ConstantDataService.wsdl' => '${api.server}/api/adwords/cm/v201609/ConstantDataService?wsdl',
        'api.versions.v201609.services.ConversionTrackerService.wsdl' => '${api.server}/api/adwords/cm/v201609/ConversionTrackerService?wsdl',
        'api.versions.v201609.services.CustomerFeedService.wsdl' => '${api.server}/api/adwords/cm/v201609/CustomerFeedService?wsdl',
        'api.versions.v201609.services.CustomerService.wsdl' => '${api.server}/api/adwords/mcm/v201609/CustomerService?wsdl',
        'api.versions.v201609.services.CustomerSyncService.wsdl' => '${api.server}/api/adwords/ch/v201609/CustomerSyncService?wsdl',
        'api.versions.v201609.services.DataService.wsdl' => '${api.server}/api/adwords/cm/v201609/DataService?wsdl',
        'api.versions.v201609.services.ExpressBusinessService.wsdl' => '${api.server}/api/adwords/express/v201609/ExpressBusinessService?wsdl',
        'api.versions.v201609.services.FeedItemService.wsdl' => '${api.server}/api/adwords/cm/v201609/FeedItemService?wsdl',
        'api.versions.v201609.services.FeedMappingService.wsdl' => '${api.server}/api/adwords/cm/v201609/FeedMappingService?wsdl',
        'api.versions.v201609.services.FeedService.wsdl' => '${api.server}/api/adwords/cm/v201609/FeedService?wsdl',
        'api.versions.v201609.services.LabelService.wsdl' => '${api.server}/api/adwords/cm/v201609/LabelService?wsdl',
        'api.versions.v201609.services.LocationCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201609/LocationCriterionService?wsdl',
        'api.versions.v201609.services.ManagedCustomerService.wsdl' => '${api.server}/api/adwords/mcm/v201609/ManagedCustomerService?wsdl',
        'api.versions.v201609.services.MediaService.wsdl' => '${api.server}/api/adwords/cm/v201609/MediaService?wsdl',
        'api.versions.v201609.services.OfflineCallConversionFeedService.wsdl' => '${api.server}/api/adwords/cm/v201609/OfflineCallConversionFeedService?wsdl',
        'api.versions.v201609.services.OfflineConversionFeedService.wsdl' => '${api.server}/api/adwords/cm/v201609/OfflineConversionFeedService?wsdl',
        'api.versions.v201609.services.ProductServiceService.wsdl' => '${api.server}/api/adwords/express/v201609/ProductServiceService?wsdl',
        'api.versions.v201609.services.PromotionService.wsdl' => '${api.server}/api/adwords/express/v201609/PromotionService?wsdl',
        'api.versions.v201609.services.ReportDefinitionService.wsdl' => '${api.server}/api/adwords/cm/v201609/ReportDefinitionService?wsdl',
        'api.versions.v201609.services.SharedCriterionService.wsdl' => '${api.server}/api/adwords/cm/v201609/SharedCriterionService?wsdl',
        'api.versions.v201609.services.SharedSetService.wsdl' => '${api.server}/api/adwords/cm/v201609/SharedSetService?wsdl',
        'api.versions.v201609.services.TargetingIdeaService.wsdl' => '${api.server}/api/adwords/o/v201609/TargetingIdeaService?wsdl',
        'api.versions.v201609.services.TrafficEstimatorService.wsdl' => '${api.server}/api/adwords/o/v201609/TrafficEstimatorService?wsdl',
        'api.versions.v201609.services.CampaignExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201609/CampaignExtensionSettingService?wsdl',
        'api.versions.v201609.services.AdGroupExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201609/AdGroupExtensionSettingService?wsdl',
        'api.versions.v201609.services.CustomerExtensionSettingService.wsdl' => '${api.server}/api/adwords/cm/v201609/CustomerExtensionSettingService?wsdl',
        'api.versions.v201609.services.AdCustomizerFeedService.wsdl' => '${api.server}/api/adwords/cm/v201609/AdCustomizerFeedService?wsdl',
        'api.versions.v201609.services.AccountLabelService.wsdl' => '${api.server}/api/adwords/mcm/v201609/AccountLabelService?wsdl',
        'api.versions.v201609.services.DraftService.wsdl' => '${api.server}/api/adwords/cm/v201609/DraftService?wsdl',
        'api.versions.v201609.services.DraftAsyncErrorService.wsdl' => '${api.server}/api/adwords/cm/v201609/DraftAsyncErrorService?wsdl',
        'api.versions.v201609.services.TrialService.wsdl' => '${api.server}/api/adwords/cm/v201609/TrialService?wsdl',
        'api.versions.v201609.services.TrialAsyncErrorService.wsdl' => '${api.server}/api/adwords/cm/v201609/TrialAsyncErrorService?wsdl',
    ];
}