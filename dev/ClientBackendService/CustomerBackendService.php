<?php

include_once('Logon.php');
include_once('LogonResponse.php');
include_once('GetProductInformation.php');
include_once('GetProductInformationResponse.php');
include_once('ProductInformation.php');
include_once('ProductPriceInformation.php');
include_once('ProductIdentifier.php');
include_once('GetProductInformationByProductIdentifier.php');
include_once('GetProductInformationByProductIdentifierResponse.php');
include_once('GetProductPrices.php');
include_once('CustomerIdentifier.php');
include_once('GetProductPricesResponse.php');
include_once('GetExpectedStockMovement.php');
include_once('GetExpectedStockMovementResponse.php');
include_once('ExpectedStockMovement.php');
include_once('GetProductPriceList.php');
include_once('GetProductPriceListResponse.php');
include_once('GetCustomerInformation.php');
include_once('GetCustomerInformationResponse.php');
include_once('CustomerInformation.php');
include_once('SimpleAddress.php');
include_once('ContactDetail.php');
include_once('ContactPersonInformation.php');
include_once('LocalizedItem.php');
include_once('LocalizationItem.php');
include_once('PaymentInformation.php');
include_once('GetCustomerInformationList.php');
include_once('GetCustomerInformationListResponse.php');
include_once('GetUserInformation.php');
include_once('GetUserInformationResponse.php');
include_once('UserInformation.php');
include_once('GetCustomerPriceList.php');
include_once('GetCustomerPriceListResponse.php');
include_once('GetPossibleAutomaticConditionList.php');
include_once('GetPossibleAutomaticConditionListResponse.php');
include_once('GetPossibleAutomaticConditionListResult.php');
include_once('AutomaticCondition.php');
include_once('GetArticleNumberListByArticleGroup.php');
include_once('GetArticleNumberListByArticleGroupResponse.php');
include_once('SearchCustomer.php');
include_once('CustomerSearchParameter.php');
include_once('SearchCustomerResponse.php');
include_once('CustomerSearchResult.php');
include_once('SearchSupplier.php');
include_once('SupplierSearchParameter.php');
include_once('SearchSupplierResponse.php');
include_once('SupplierSearchResult.php');
include_once('SearchProduct.php');
include_once('ProductSearchParameter.php');
include_once('SearchProductResponse.php');
include_once('ProductSearchResult.php');
include_once('GetShowDescriptionList.php');
include_once('GetShowDescriptionListResponse.php');
include_once('GetCurrencyList.php');
include_once('GetCurrencyListResponse.php');
include_once('CurrencyItem.php');
include_once('GetPaymentInformationList.php');
include_once('GetPaymentInformationListResponse.php');
include_once('GetDispatchTypeList.php');
include_once('GetDispatchTypeListResponse.php');
include_once('GetDeliveryTermList.php');
include_once('GetDeliveryTermListResponse.php');
include_once('GetCollectiveInvoiceList.php');
include_once('GetCollectiveInvoiceListResponse.php');
include_once('GetIndentInformation.php');
include_once('GetIndentInformationParameter.php');
include_once('GetIndentInformationResponse.php');
include_once('IndentInformationItem.php');
include_once('ComplexAddress.php');
include_once('IndentInformationEventItem.php');
include_once('IndentInformationPositionItem.php');
include_once('IndentInformationBettermentItem.php');
include_once('InlineCostInformationIem.php');
include_once('GetProductConfiguration.php');
include_once('GetProductConfigurationParameter.php');
include_once('GetProductConfigurationResponse.php');
include_once('ProductConfiguration.php');
include_once('ProductConfigurationItem.php');
include_once('ProductConfigurationColorItem.php');
include_once('ProductConfigurationOptionItem.php');
include_once('ProductConfigurationSizeItem.php');
include_once('SearchPurchaseOrder.php');
include_once('PurchaseOrderSearchParameter.php');
include_once('SearchPurchaseOrderResponse.php');
include_once('PurchaseOrderSearchResult.php');
include_once('GetPurchaseOrderInformation.php');
include_once('PurchaseOrderIdentifier.php');
include_once('GetPurchaseOrderInformationResponse.php');
include_once('PurchaseOrderInformation.php');
include_once('PurchaseOrderPositionItem.php');
include_once('PurchaseOrderBettermentItem.php');
include_once('ChangePurchaseOrderAction.php');
include_once('ChangePurchaseOrderActionParameter.php');
include_once('ChangePurchaseOrderActionResponse.php');
include_once('ChangePurchaseOrderActionResult.php');
include_once('GetPurchaseOrderActionList.php');
include_once('GetPurchaseOrderActionListResponse.php');
include_once('PurchaseOrderAction.php');
include_once('GetOptionList.php');
include_once('GetOptionListParameter.php');
include_once('GetOptionListResponse.php');
include_once('GetOptionListResult.php');
include_once('GetOptionTypeList.php');
include_once('GetOptionTypeListResponse.php');
include_once('GetSpecialPricesForPriceGroups.php');
include_once('GetSpecialPricesForPriceGroupsResponse.php');
include_once('GetSpecialPricesForCustomer.php');
include_once('GetSpecialPricesForCustomerResponse.php');
include_once('GetTenderInformation.php');
include_once('GetTenderInformationParameter.php');
include_once('GetTenderInformationResponse.php');
include_once('TenderInformationItem.php');
include_once('TenderInformationConvertItem.php');
include_once('TenderInformationEventItem.php');
include_once('TenderInformationPositionItem.php');
include_once('TenderInformationBettermentItem.php');
include_once('GetSupplierInformation.php');
include_once('SupplierIdentifier.php');
include_once('GetSupplierInformationResponse.php');
include_once('SupplierInformation.php');
include_once('GetSupplierInformationList.php');
include_once('GetSupplierInformationListResponse.php');
include_once('SearchIndent.php');
include_once('SearchIndentParameter.php');
include_once('SearchIndentResponse.php');
include_once('IndentSearchResult.php');
include_once('GetCurrentStockAmounts.php');
include_once('GetCurrentStockAmountsParameter.php');
include_once('GetCurrentStockAmountsResponse.php');
include_once('GetCurrentStockAmountsResult.php');
include_once('StockAmountItem.php');
include_once('ImportWebServiceCreationRequest.php');
include_once('ImportWebServiceCreationRequestParameter.php');
include_once('ImportWebServiceCreationRequestResponse.php');
include_once('ImportWebServiceCreationRequestResult.php');
include_once('GetWebServiceCreationRequest.php');
include_once('GetWebServiceCreationRequestParameter.php');
include_once('GetWebServiceCreationRequestResponse.php');
include_once('GetWebServiceCreationRequestResult.php');
include_once('ShowDescriptionItem.php');
include_once('ImportInformation.php');
include_once('ArticleTextItem.php');
include_once('ArticleLanguageTypeEnum.php');
include_once('ArticleTypeEnum.php');
include_once('ColorSizeCombination.php');
include_once('ArticleDynamicDataItem.php');
include_once('ArticleDynamicLanguageDataItem.php');
include_once('TranslationItem.php');
include_once('LinkItemV1.php');
include_once('Variation.php');
include_once('OptionItem.php');
include_once('OptionTypeItem.php');
include_once('SpecialPriceItem.php');
include_once('IndentStateEnum.php');
include_once('GeneralStateEnum.php');
include_once('GenderType.php');
include_once('TenderIndentImporterData.php');
include_once('TenderIndentImporterAddressData.php');
include_once('TenderIndentImporterPositionData.php');
include_once('TenderIndentImporterBettermentData.php');
include_once('TenderIndentImporterRelayData.php');
include_once('ShowDescriptionListTypeEnum.php');

class CustomerBackendService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'Logon' => '\Logon',
      'LogonResponse' => '\LogonResponse',
      'GetProductInformation' => '\GetProductInformation',
      'GetProductInformationResponse' => '\GetProductInformationResponse',
      'ProductInformation' => '\ProductInformation',
      'ProductPriceInformation' => '\ProductPriceInformation',
      'ProductIdentifier' => '\ProductIdentifier',
      'GetProductInformationByProductIdentifier' => '\GetProductInformationByProductIdentifier',
      'GetProductInformationByProductIdentifierResponse' => '\GetProductInformationByProductIdentifierResponse',
      'GetProductPrices' => '\GetProductPrices',
      'CustomerIdentifier' => '\CustomerIdentifier',
      'GetProductPricesResponse' => '\GetProductPricesResponse',
      'GetExpectedStockMovement' => '\GetExpectedStockMovement',
      'GetExpectedStockMovementResponse' => '\GetExpectedStockMovementResponse',
      'ExpectedStockMovement' => '\ExpectedStockMovement',
      'GetProductPriceList' => '\GetProductPriceList',
      'GetProductPriceListResponse' => '\GetProductPriceListResponse',
      'GetCustomerInformation' => '\GetCustomerInformation',
      'GetCustomerInformationResponse' => '\GetCustomerInformationResponse',
      'CustomerInformation' => '\CustomerInformation',
      'SimpleAddress' => '\SimpleAddress',
      'ContactDetail' => '\ContactDetail',
      'ContactPersonInformation' => '\ContactPersonInformation',
      'LocalizedItem' => '\LocalizedItem',
      'LocalizationItem' => '\LocalizationItem',
      'PaymentInformation' => '\PaymentInformation',
      'GetCustomerInformationList' => '\GetCustomerInformationList',
      'GetCustomerInformationListResponse' => '\GetCustomerInformationListResponse',
      'GetUserInformation' => '\GetUserInformation',
      'GetUserInformationResponse' => '\GetUserInformationResponse',
      'UserInformation' => '\UserInformation',
      'GetCustomerPriceList' => '\GetCustomerPriceList',
      'GetCustomerPriceListResponse' => '\GetCustomerPriceListResponse',
      'GetPossibleAutomaticConditionList' => '\GetPossibleAutomaticConditionList',
      'GetPossibleAutomaticConditionListResponse' => '\GetPossibleAutomaticConditionListResponse',
      'GetPossibleAutomaticConditionListResult' => '\GetPossibleAutomaticConditionListResult',
      'AutomaticCondition' => '\AutomaticCondition',
      'GetArticleNumberListByArticleGroup' => '\GetArticleNumberListByArticleGroup',
      'GetArticleNumberListByArticleGroupResponse' => '\GetArticleNumberListByArticleGroupResponse',
      'SearchCustomer' => '\SearchCustomer',
      'CustomerSearchParameter' => '\CustomerSearchParameter',
      'SearchCustomerResponse' => '\SearchCustomerResponse',
      'CustomerSearchResult' => '\CustomerSearchResult',
      'SearchSupplier' => '\SearchSupplier',
      'SupplierSearchParameter' => '\SupplierSearchParameter',
      'SearchSupplierResponse' => '\SearchSupplierResponse',
      'SupplierSearchResult' => '\SupplierSearchResult',
      'SearchProduct' => '\SearchProduct',
      'ProductSearchParameter' => '\ProductSearchParameter',
      'SearchProductResponse' => '\SearchProductResponse',
      'ProductSearchResult' => '\ProductSearchResult',
      'GetShowDescriptionList' => '\GetShowDescriptionList',
      'GetShowDescriptionListResponse' => '\GetShowDescriptionListResponse',
      'GetCurrencyList' => '\GetCurrencyList',
      'GetCurrencyListResponse' => '\GetCurrencyListResponse',
      'CurrencyItem' => '\CurrencyItem',
      'GetPaymentInformationList' => '\GetPaymentInformationList',
      'GetPaymentInformationListResponse' => '\GetPaymentInformationListResponse',
      'GetDispatchTypeList' => '\GetDispatchTypeList',
      'GetDispatchTypeListResponse' => '\GetDispatchTypeListResponse',
      'GetDeliveryTermList' => '\GetDeliveryTermList',
      'GetDeliveryTermListResponse' => '\GetDeliveryTermListResponse',
      'GetCollectiveInvoiceList' => '\GetCollectiveInvoiceList',
      'GetCollectiveInvoiceListResponse' => '\GetCollectiveInvoiceListResponse',
      'GetIndentInformation' => '\GetIndentInformation',
      'GetIndentInformationParameter' => '\GetIndentInformationParameter',
      'GetIndentInformationResponse' => '\GetIndentInformationResponse',
      'IndentInformationItem' => '\IndentInformationItem',
      'ComplexAddress' => '\ComplexAddress',
      'IndentInformationEventItem' => '\IndentInformationEventItem',
      'IndentInformationPositionItem' => '\IndentInformationPositionItem',
      'IndentInformationBettermentItem' => '\IndentInformationBettermentItem',
      'InlineCostInformationIem' => '\InlineCostInformationIem',
      'GetProductConfiguration' => '\GetProductConfiguration',
      'GetProductConfigurationParameter' => '\GetProductConfigurationParameter',
      'GetProductConfigurationResponse' => '\GetProductConfigurationResponse',
      'ProductConfiguration' => '\ProductConfiguration',
      'ProductConfigurationItem' => '\ProductConfigurationItem',
      'ProductConfigurationColorItem' => '\ProductConfigurationColorItem',
      'ProductConfigurationOptionItem' => '\ProductConfigurationOptionItem',
      'ProductConfigurationSizeItem' => '\ProductConfigurationSizeItem',
      'SearchPurchaseOrder' => '\SearchPurchaseOrder',
      'PurchaseOrderSearchParameter' => '\PurchaseOrderSearchParameter',
      'SearchPurchaseOrderResponse' => '\SearchPurchaseOrderResponse',
      'PurchaseOrderSearchResult' => '\PurchaseOrderSearchResult',
      'GetPurchaseOrderInformation' => '\GetPurchaseOrderInformation',
      'PurchaseOrderIdentifier' => '\PurchaseOrderIdentifier',
      'GetPurchaseOrderInformationResponse' => '\GetPurchaseOrderInformationResponse',
      'PurchaseOrderInformation' => '\PurchaseOrderInformation',
      'PurchaseOrderPositionItem' => '\PurchaseOrderPositionItem',
      'PurchaseOrderBettermentItem' => '\PurchaseOrderBettermentItem',
      'ChangePurchaseOrderAction' => '\ChangePurchaseOrderAction',
      'ChangePurchaseOrderActionParameter' => '\ChangePurchaseOrderActionParameter',
      'ChangePurchaseOrderActionResponse' => '\ChangePurchaseOrderActionResponse',
      'ChangePurchaseOrderActionResult' => '\ChangePurchaseOrderActionResult',
      'GetPurchaseOrderActionList' => '\GetPurchaseOrderActionList',
      'GetPurchaseOrderActionListResponse' => '\GetPurchaseOrderActionListResponse',
      'PurchaseOrderAction' => '\PurchaseOrderAction',
      'GetOptionList' => '\GetOptionList',
      'GetOptionListParameter' => '\GetOptionListParameter',
      'GetOptionListResponse' => '\GetOptionListResponse',
      'GetOptionListResult' => '\GetOptionListResult',
      'GetOptionTypeList' => '\GetOptionTypeList',
      'GetOptionTypeListResponse' => '\GetOptionTypeListResponse',
      'GetSpecialPricesForPriceGroups' => '\GetSpecialPricesForPriceGroups',
      'GetSpecialPricesForPriceGroupsResponse' => '\GetSpecialPricesForPriceGroupsResponse',
      'GetSpecialPricesForCustomer' => '\GetSpecialPricesForCustomer',
      'GetSpecialPricesForCustomerResponse' => '\GetSpecialPricesForCustomerResponse',
      'GetTenderInformation' => '\GetTenderInformation',
      'GetTenderInformationParameter' => '\GetTenderInformationParameter',
      'GetTenderInformationResponse' => '\GetTenderInformationResponse',
      'TenderInformationItem' => '\TenderInformationItem',
      'TenderInformationConvertItem' => '\TenderInformationConvertItem',
      'TenderInformationEventItem' => '\TenderInformationEventItem',
      'TenderInformationPositionItem' => '\TenderInformationPositionItem',
      'TenderInformationBettermentItem' => '\TenderInformationBettermentItem',
      'GetSupplierInformation' => '\GetSupplierInformation',
      'SupplierIdentifier' => '\SupplierIdentifier',
      'GetSupplierInformationResponse' => '\GetSupplierInformationResponse',
      'SupplierInformation' => '\SupplierInformation',
      'GetSupplierInformationList' => '\GetSupplierInformationList',
      'GetSupplierInformationListResponse' => '\GetSupplierInformationListResponse',
      'SearchIndent' => '\SearchIndent',
      'SearchIndentParameter' => '\SearchIndentParameter',
      'SearchIndentResponse' => '\SearchIndentResponse',
      'IndentSearchResult' => '\IndentSearchResult',
      'GetCurrentStockAmounts' => '\GetCurrentStockAmounts',
      'GetCurrentStockAmountsParameter' => '\GetCurrentStockAmountsParameter',
      'GetCurrentStockAmountsResponse' => '\GetCurrentStockAmountsResponse',
      'GetCurrentStockAmountsResult' => '\GetCurrentStockAmountsResult',
      'StockAmountItem' => '\StockAmountItem',
      'ImportWebServiceCreationRequest' => '\ImportWebServiceCreationRequest',
      'ImportWebServiceCreationRequestParameter' => '\ImportWebServiceCreationRequestParameter',
      'ImportWebServiceCreationRequest' => '\ImportWebServiceCreationRequest',
      'ImportWebServiceCreationRequestResult' => '\ImportWebServiceCreationRequestResult',
      'GetWebServiceCreationRequest' => '\GetWebServiceCreationRequest',
      'GetWebServiceCreationRequestParameter' => '\GetWebServiceCreationRequestParameter',
      'GetWebServiceCreationRequest' => '\GetWebServiceCreationRequest',
      'GetWebServiceCreationRequestResult' => '\GetWebServiceCreationRequestResult',
      'ShowDescriptionItem' => '\ShowDescriptionItem',
      'ImportInformation' => '\ImportInformation',
      'ArticleTextItem' => '\ArticleTextItem',
      'ColorSizeCombination' => '\ColorSizeCombination',
      'ArticleDynamicDataItem' => '\ArticleDynamicDataItem',
      'ArticleDynamicLanguageDataItem' => '\ArticleDynamicLanguageDataItem',
      'TranslationItem' => '\TranslationItem',
      'LinkItemV1' => '\LinkItemV1',
      'Variation' => '\Variation',
      'OptionItem' => '\OptionItem',
      'OptionTypeItem' => '\OptionTypeItem',
      'SpecialPriceItem' => '\SpecialPriceItem',
      'TenderIndentImporterData' => '\TenderIndentImporterData',
      'TenderIndentImporterAddressData' => '\TenderIndentImporterAddressData',
      'TenderIndentImporterPositionData' => '\TenderIndentImporterPositionData',
      'TenderIndentImporterBettermentData' => '\TenderIndentImporterBettermentData',
      'TenderIndentImporterRelayData' => '\TenderIndentImporterRelayData');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://po-test1.promidata.com/Promidata/PromotionalOffice/Services/Info/ClientBackendService.svc?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }

  parent::__construct($wsdl, $options);
    }

    /**
     * @param Logon $parameters
     * @access public
     * @return LogonResponse
     */
    public function Logon(Logon $parameters)
    {
      return $this->__soapCall('Logon', array($parameters));
    }

    /**
     * @param GetProductInformation $parameters
     * @access public
     * @return GetProductInformationResponse
     */
    public function GetProductInformation(GetProductInformation $parameters)
    {
      return $this->__soapCall('GetProductInformation', array($parameters));
    }

    /**
     * @param GetProductInformationByProductIdentifier $parameters
     * @access public
     * @return GetProductInformationByProductIdentifierResponse
     */
    public function GetProductInformationByProductIdentifier(GetProductInformationByProductIdentifier $parameters)
    {
      return $this->__soapCall('GetProductInformationByProductIdentifier', array($parameters));
    }

    /**
     * @param GetProductPrices $parameters
     * @access public
     * @return GetProductPricesResponse
     */
    public function GetProductPrices(GetProductPrices $parameters)
    {
      return $this->__soapCall('GetProductPrices', array($parameters));
    }

    /**
     * @param GetExpectedStockMovement $parameters
     * @access public
     * @return GetExpectedStockMovementResponse
     */
    public function GetExpectedStockMovement(GetExpectedStockMovement $parameters)
    {
      return $this->__soapCall('GetExpectedStockMovement', array($parameters));
    }

    /**
     * @param GetProductPriceList $parameters
     * @access public
     * @return GetProductPriceListResponse
     */
    public function GetProductPriceList(GetProductPriceList $parameters)
    {
      return $this->__soapCall('GetProductPriceList', array($parameters));
    }

    /**
     * @param GetCustomerInformation $parameters
     * @access public
     * @return GetCustomerInformationResponse
     */
    public function GetCustomerInformation(GetCustomerInformation $parameters)
    {
      return $this->__soapCall('GetCustomerInformation', array($parameters));
    }

    /**
     * @param GetCustomerInformationList $parameters
     * @access public
     * @return GetCustomerInformationListResponse
     */
    public function GetCustomerInformationList(GetCustomerInformationList $parameters)
    {
      return $this->__soapCall('GetCustomerInformationList', array($parameters));
    }

    /**
     * @param GetUserInformation $parameters
     * @access public
     * @return GetUserInformationResponse
     */
    public function GetUserInformation(GetUserInformation $parameters)
    {
      return $this->__soapCall('GetUserInformation', array($parameters));
    }

    /**
     * @param GetCustomerPriceList $parameters
     * @access public
     * @return GetCustomerPriceListResponse
     */
    public function GetCustomerPriceList(GetCustomerPriceList $parameters)
    {
      return $this->__soapCall('GetCustomerPriceList', array($parameters));
    }

    /**
     * @param GetPossibleAutomaticConditionList $parameters
     * @access public
     * @return GetPossibleAutomaticConditionListResponse
     */
    public function GetPossibleAutomaticConditionList(GetPossibleAutomaticConditionList $parameters)
    {
      return $this->__soapCall('GetPossibleAutomaticConditionList', array($parameters));
    }

    /**
     * @param GetArticleNumberListByArticleGroup $parameters
     * @access public
     * @return GetArticleNumberListByArticleGroupResponse
     */
    public function GetArticleNumberListByArticleGroup(GetArticleNumberListByArticleGroup $parameters)
    {
      return $this->__soapCall('GetArticleNumberListByArticleGroup', array($parameters));
    }

    /**
     * @param SearchCustomer $parameters
     * @access public
     * @return SearchCustomerResponse
     */
    public function SearchCustomer(SearchCustomer $parameters)
    {
      return $this->__soapCall('SearchCustomer', array($parameters));
    }

    /**
     * @param SearchSupplier $parameters
     * @access public
     * @return SearchSupplierResponse
     */
    public function SearchSupplier(SearchSupplier $parameters)
    {
      return $this->__soapCall('SearchSupplier', array($parameters));
    }

    /**
     * @param SearchProduct $parameters
     * @access public
     * @return SearchProductResponse
     */
    public function SearchProduct(SearchProduct $parameters)
    {
      return $this->__soapCall('SearchProduct', array($parameters));
    }

    /**
     * @param GetShowDescriptionList $parameters
     * @access public
     * @return GetShowDescriptionListResponse
     */
    public function GetShowDescriptionList(GetShowDescriptionList $parameters)
    {
      return $this->__soapCall('GetShowDescriptionList', array($parameters));
    }

    /**
     * @param GetCurrencyList $parameters
     * @access public
     * @return GetCurrencyListResponse
     */
    public function GetCurrencyList(GetCurrencyList $parameters)
    {
      return $this->__soapCall('GetCurrencyList', array($parameters));
    }

    /**
     * @param GetPaymentInformationList $parameters
     * @access public
     * @return GetPaymentInformationListResponse
     */
    public function GetPaymentInformationList(GetPaymentInformationList $parameters)
    {
      return $this->__soapCall('GetPaymentInformationList', array($parameters));
    }

    /**
     * @param GetDispatchTypeList $parameters
     * @access public
     * @return GetDispatchTypeListResponse
     */
    public function GetDispatchTypeList(GetDispatchTypeList $parameters)
    {
      return $this->__soapCall('GetDispatchTypeList', array($parameters));
    }

    /**
     * @param GetDeliveryTermList $parameters
     * @access public
     * @return GetDeliveryTermListResponse
     */
    public function GetDeliveryTermList(GetDeliveryTermList $parameters)
    {
      return $this->__soapCall('GetDeliveryTermList', array($parameters));
    }

    /**
     * @param GetCollectiveInvoiceList $parameters
     * @access public
     * @return GetCollectiveInvoiceListResponse
     */
    public function GetCollectiveInvoiceList(GetCollectiveInvoiceList $parameters)
    {
      return $this->__soapCall('GetCollectiveInvoiceList', array($parameters));
    }

    /**
     * @param GetIndentInformation $parameters
     * @access public
     * @return GetIndentInformationResponse
     */
    public function GetIndentInformation(GetIndentInformation $parameters)
    {
      return $this->__soapCall('GetIndentInformation', array($parameters));
    }

    /**
     * @param GetProductConfiguration $parameters
     * @access public
     * @return GetProductConfigurationResponse
     */
    public function GetProductConfiguration(GetProductConfiguration $parameters)
    {
      return $this->__soapCall('GetProductConfiguration', array($parameters));
    }

    /**
     * @param SearchPurchaseOrder $parameters
     * @access public
     * @return SearchPurchaseOrderResponse
     */
    public function SearchPurchaseOrder(SearchPurchaseOrder $parameters)
    {
      return $this->__soapCall('SearchPurchaseOrder', array($parameters));
    }

    /**
     * @param GetPurchaseOrderInformation $parameters
     * @access public
     * @return GetPurchaseOrderInformationResponse
     */
    public function GetPurchaseOrderInformation(GetPurchaseOrderInformation $parameters)
    {
      return $this->__soapCall('GetPurchaseOrderInformation', array($parameters));
    }

    /**
     * @param ChangePurchaseOrderAction $parameters
     * @access public
     * @return ChangePurchaseOrderActionResponse
     */
    public function ChangePurchaseOrderAction(ChangePurchaseOrderAction $parameters)
    {
      return $this->__soapCall('ChangePurchaseOrderAction', array($parameters));
    }

    /**
     * @param GetPurchaseOrderActionList $parameters
     * @access public
     * @return GetPurchaseOrderActionListResponse
     */
    public function GetPurchaseOrderActionList(GetPurchaseOrderActionList $parameters)
    {
      return $this->__soapCall('GetPurchaseOrderActionList', array($parameters));
    }

    /**
     * @param GetOptionList $parameters
     * @access public
     * @return GetOptionListResponse
     */
    public function GetOptionList(GetOptionList $parameters)
    {
      return $this->__soapCall('GetOptionList', array($parameters));
    }

    /**
     * @param GetOptionTypeList $parameters
     * @access public
     * @return GetOptionTypeListResponse
     */
    public function GetOptionTypeList(GetOptionTypeList $parameters)
    {
      return $this->__soapCall('GetOptionTypeList', array($parameters));
    }

    /**
     * @param GetSpecialPricesForPriceGroups $parameters
     * @access public
     * @return GetSpecialPricesForPriceGroupsResponse
     */
    public function GetSpecialPricesForPriceGroups(GetSpecialPricesForPriceGroups $parameters)
    {
      return $this->__soapCall('GetSpecialPricesForPriceGroups', array($parameters));
    }

    /**
     * @param GetSpecialPricesForCustomer $parameters
     * @access public
     * @return GetSpecialPricesForCustomerResponse
     */
    public function GetSpecialPricesForCustomer(GetSpecialPricesForCustomer $parameters)
    {
      return $this->__soapCall('GetSpecialPricesForCustomer', array($parameters));
    }

    /**
     * @param GetTenderInformation $parameters
     * @access public
     * @return GetTenderInformationResponse
     */
    public function GetTenderInformation(GetTenderInformation $parameters)
    {
      return $this->__soapCall('GetTenderInformation', array($parameters));
    }

    /**
     * @param GetSupplierInformation $parameters
     * @access public
     * @return GetSupplierInformationResponse
     */
    public function GetSupplierInformation(GetSupplierInformation $parameters)
    {
      return $this->__soapCall('GetSupplierInformation', array($parameters));
    }

    /**
     * @param GetSupplierInformationList $parameters
     * @access public
     * @return GetSupplierInformationListResponse
     */
    public function GetSupplierInformationList(GetSupplierInformationList $parameters)
    {
      return $this->__soapCall('GetSupplierInformationList', array($parameters));
    }

    /**
     * @param SearchIndent $parameters
     * @access public
     * @return SearchIndentResponse
     */
    public function SearchIndent(SearchIndent $parameters)
    {
      return $this->__soapCall('SearchIndent', array($parameters));
    }

    /**
     * @param GetCurrentStockAmounts $parameters
     * @access public
     * @return GetCurrentStockAmountsResponse
     */
    public function GetCurrentStockAmounts(GetCurrentStockAmounts $parameters)
    {
      return $this->__soapCall('GetCurrentStockAmounts', array($parameters));
    }

    /**
     * @param ImportWebServiceCreationRequest $parameters
     * @access public
     * @return ImportWebServiceCreationRequest
     */
    public function ImportWebServiceCreationRequest(ImportWebServiceCreationRequest $parameters)
    {
      return $this->__soapCall('ImportWebServiceCreationRequest', array($parameters));
    }

    /**
     * @param GetWebServiceCreationRequest $parameters
     * @access public
     * @return GetWebServiceCreationRequest
     */
    public function GetWebServiceCreationRequest(GetWebServiceCreationRequest $parameters)
    {
      return $this->__soapCall('GetWebServiceCreationRequest', array($parameters));
    }

}
