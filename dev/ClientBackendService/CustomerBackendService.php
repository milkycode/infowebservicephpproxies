<?php

include_once('ShowDescriptionItem.php');
include_once('ImportInformation.php');
include_once('ArticleTextItem.php');
include_once('ArticleLanguageTypeEnum.php');
include_once('ArticleTypeEnum.php');
include_once('ColorSizeCombination.php');
include_once('TranslationItem.php');
include_once('GenderType.php');
include_once('TenderIndentImporterData.php');
include_once('TenderIndentImporterAddressData.php');
include_once('TenderIndentImporterPositionData.php');
include_once('TenderIndentImporterBettermentData.php');
include_once('TenderIndentImporterRelayData.php');
include_once('ShowDescriptionListTypeEnum.php');
include_once('Logon.php');
include_once('LogonResponse.php');
include_once('GetProductInformation.php');
include_once('GetProductInformationResponse.php');
include_once('ProductInformation.php');
include_once('ProductPriceInformation.php');
include_once('ProductIdentifier.php');
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

class CustomerBackendService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'ShowDescriptionItem' => '\ShowDescriptionItem',
      'ImportInformation' => '\ImportInformation',
      'ArticleTextItem' => '\ArticleTextItem',
      'ColorSizeCombination' => '\ColorSizeCombination',
      'TranslationItem' => '\TranslationItem',
      'TenderIndentImporterData' => '\TenderIndentImporterData',
      'TenderIndentImporterAddressData' => '\TenderIndentImporterAddressData',
      'TenderIndentImporterPositionData' => '\TenderIndentImporterPositionData',
      'TenderIndentImporterBettermentData' => '\TenderIndentImporterBettermentData',
      'TenderIndentImporterRelayData' => '\TenderIndentImporterRelayData',
      'Logon' => '\Logon',
      'LogonResponse' => '\LogonResponse',
      'GetProductInformation' => '\GetProductInformation',
      'GetProductInformationResponse' => '\GetProductInformationResponse',
      'ProductInformation' => '\ProductInformation',
      'ProductPriceInformation' => '\ProductPriceInformation',
      'ProductIdentifier' => '\ProductIdentifier',
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
      'GetCollectiveInvoiceListResponse' => '\GetCollectiveInvoiceListResponse');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://80.70.177.47/PromotionalOffice/Services/Info/ClientBackendService.svc?wsdl')
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

}
