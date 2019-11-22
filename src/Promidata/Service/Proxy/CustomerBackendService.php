<?php
/**
 * Proxy for Promidata PromotionalOffice ClientBackendService/CustomerbackendService.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Proxy_CustomerBackendService extends Promidata_Service_Proxy_AbstractService implements Promidata_Service_Interface_ICustomerBackendService
{
    /**
     * Classmap.
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
        // DTO
        'ArticleDynamicDataItem' => 'Promidata_Service_DTO_ArticleDynamicDataItem',
        'ArticleDynamicLanguageDataItem' => 'Promidata_Service_DTO_ArticleDynamicLanguageDataItem',
        'ArticleTextItem' => 'Promidata_Service_DTO_ArticleTextItem',
        'AutomaticCondition' => 'Promidata_Service_DTO_AutomaticCondition',
        'ChangePurchaseOrderActionParameter' => 'Promidata_Service_DTO_ChangePurchaseOrderActionParameter',
        'ChangePurchaseOrderActionResult' => 'Promidata_Service_DTO_ChangePurchaseOrderActionResult',
        'ColorSizeCombination' => 'Promidata_Service_DTO_ColorSizeCombination',
        'ComplexAddress' => 'Promidata_Service_DTO_ComplexAddress',
        'CompositeImportFieldInfo' => 'Promidata_Service_DTO_CompositeImportFieldInfo',
        'ContactDetail' => 'Promidata_Service_DTO_ContactDetail',
        'ContactPersonInformation' => 'Promidata_Service_DTO_ContactPersonInformation',
        'CurrencyItem' => 'Promidata_Service_DTO_CurrencyItem',
        'CustomerIdentifier' => 'Promidata_Service_DTO_CustomerIdentifier',
        'CustomerInformation' => 'Promidata_Service_DTO_CustomerInformation',
        'CustomerSearchParameter' => 'Promidata_Service_DTO_CustomerSearchParameter',
        'CustomerSearchParameterCollection' => 'Promidata_Service_DTO_CustomerSearchParameterCollection',
        'CustomerSearchResult' => 'Promidata_Service_DTO_CustomerSearchResult',
        'ExpectedStockMovement' => 'Promidata_Service_DTO_ExpectedStockMovement',
        'GetCurrentStockAmountsParameter' => 'Promidata_Service_DTO_GetCurrentStockAmountsParameter',
        'GetCurrentStockAmountsResult' => 'Promidata_Service_DTO_GetCurrentStockAmountsResult',
        'GetIndentInformationParameter' => 'Promidata_Service_DTO_GetIndentInformationParameter',
        'GetOptionListParameter' => 'Promidata_Service_DTO_GetOptionListParameter',
        'GetOptionListResult' => 'Promidata_Service_DTO_GetOptionListResult',
        'GetPossibleAutomaticConditionListResult' => 'Promidata_Service_DTO_GetPossibleAutomaticConditionListResult',
        'GetProductConfigurationParameter' => 'Promidata_Service_DTO_GetProductConfigurationParameter',
        'GetTenderInformationParameter' => 'Promidata_Service_DTO_GetTenderInformationParameter',
        'GetWebServiceCreationRequestParameter' => 'Promidata_Service_DTO_GetWebServiceCreationRequestParameter',
        'GetWebServiceCreationRequestResult' => 'Promidata_Service_DTO_GetWebServiceCreationRequestResult',
        'ImportInformation' => 'Promidata_Service_DTO_ImportInformation',
        'ImportWebServiceCreationRequestParameter' => 'Promidata_Service_DTO_ImportWebServiceCreationRequestParameter',
        'ImportWebServiceCreationRequestResult' => 'Promidata_Service_DTO_ImportWebServiceCreationRequestResult',
        'IndentInformationBettermentItem' => 'Promidata_Service_DTO_IndentInformationBettermentItem',
        'IndentInformationEventItem' => 'Promidata_Service_DTO_IndentInformationEventItem',
        'IndentInformationItem' => 'Promidata_Service_DTO_IndentInformationItem',
        'IndentInformationPositionItem' => 'Promidata_Service_DTO_IndentInformationPositionItem',
        'IndentSearchResult' => 'Promidata_Service_DTO_IndentSearchResult',
        'InlineCostInformationIem' => 'Promidata_Service_DTO_InlineCostInformationIem',
        'LinkItemV1' => 'Promidata_Service_DTO_LinkItemV1',
        'LocalizationItem' => 'Promidata_Service_DTO_LocalizationItem',
        'LocalizedItem' => 'Promidata_Service_DTO_LocalizedItem',
        'OptionItem' => 'Promidata_Service_DTO_OptionItem',
        'OptionTypeItem' => 'Promidata_Service_DTO_OptionTypeItem',
        'PaymentInformation' => 'Promidata_Service_DTO_PaymentInformation',
        'ProductConfiguration' => 'Promidata_Service_DTO_ProductConfiguration',
        'ProductConfigurationColorItem' => 'Promidata_Service_DTO_ProductConfigurationColorItem',
        'ProductConfigurationItem' => 'Promidata_Service_DTO_ProductConfigurationItem',
        'ProductConfigurationOptionItem' => 'Promidata_Service_DTO_ProductConfigurationOptionItem',
        'ProductConfigurationSizeItem' => 'Promidata_Service_DTO_ProductConfigurationSizeItem',
        'ProductIdentifier' => 'Promidata_Service_DTO_ProductIdentifier',
        'ProductInformation' => 'Promidata_Service_DTO_ProductInformation',
        'ProductPriceInformation' => 'Promidata_Service_DTO_ProductPriceInformation',
        'ProductSearchParameter' => 'Promidata_Service_DTO_ProductSearchParameter',
        'ProductSearchResult' => 'Promidata_Service_DTO_ProductSearchResult',
        'PurchaseOrderAction' => 'Promidata_Service_DTO_PurchaseOrderAction',
        'PurchaseOrderBettermentItem' => 'Promidata_Service_DTO_PurchaseOrderBettermentItem',
        'PurchaseOrderPositionReason' => 'Promidata_Service_DTO_PurchaseOrderPositionReason',
        'PurchaseOrderIdentifier' => 'Promidata_Service_DTO_PurchaseOrderIdentifier',
        'PurchaseOrderInformation' => 'Promidata_Service_DTO_PurchaseOrderInformation',
        'PurchaseOrderPositionItem' => 'Promidata_Service_DTO_PurchaseOrderPositionItem',
        'PurchaseOrderSearchParameter' => 'Promidata_Service_DTO_PurchaseOrderSearchParameter',
        'PurchaseOrderSearchResult' => 'Promidata_Service_DTO_PurchaseOrderSearchResult',
        'SearchIndentParameter' => 'Promidata_Service_DTO_SearchIndentParameter',
        'ShowDescriptionItem' => 'Promidata_Service_DTO_ShowDescriptionItem',
        'SimpleAddress' => 'Promidata_Service_DTO_SimpleAddress',
        'SpecialPriceItem' => 'Promidata_Service_DTO_SpecialPriceItem',
        'StockAmountItem' => 'Promidata_Service_DTO_StockAmountItem',
        'SupplierIdentifier' => 'Promidata_Service_DTO_SupplierIdentifier',
        'SupplierInformation' => 'Promidata_Service_DTO_SupplierInformation',
        'SupplierSearchParameter' => 'Promidata_Service_DTO_SupplierSearchParameter',
        'SupplierSearchResult' => 'Promidata_Service_DTO_SupplierSearchResult',
        'TenderIndentImporterAddressData' => 'Promidata_Service_DTO_TenderIndentImporterAddressData',
        'TenderIndentImporterBettermentData' => 'Promidata_Service_DTO_TenderIndentImporterBettermentData',
        'TenderIndentImporterData' => 'Promidata_Service_DTO_TenderIndentImporterData',
        'TenderIndentImporterPositionData' => 'Promidata_Service_DTO_TenderIndentImporterPositionData',
        'TenderIndentImporterRelayData' => 'Promidata_Service_DTO_TenderIndentImporterRelayData',
        'TenderInformationBettermentItem' => 'Promidata_Service_DTO_TenderInformationBettermentItem',
        'TenderInformationConvertItem' => 'Promidata_Service_DTO_TenderInformationConvertItem',
        'TenderInformationEventItem' => 'Promidata_Service_DTO_TenderInformationEventItem',
        'TenderInformationItem' => 'Promidata_Service_DTO_TenderInformationItem',
        'TenderInformationPositionItem' => 'Promidata_Service_DTO_TenderInformationPositionItem',
        'TranslationItem' => 'Promidata_Service_DTO_TranslationItem',
        'UserInformation' => 'Promidata_Service_DTO_UserInformation',
        'Variation' => 'Promidata_Service_DTO_Variation',

        // Enum
        'ArticleLanguageTypeEnum' => 'Promidata_Service_Enum_ArticleLanguageType',
        'ArticleTypeEnum' => 'Promidata_Service_Enum_ArticleType',
        'GenderTypeEnum' => 'Promidata_Service_Enum_GenderType',
        'GeneralStateEnum' => 'Promidata_Service_Enum_GeneralState',
        'IndentStateEnum' => 'Promidata_Service_Enum_IndentState',
        'ShowDescriptionListTypeEnum' => 'Promidata_Service_Enum_ShowDescriptionListType',

        // Request
        'ChangePurchaseOrderAction' => 'Promidata_Service_Request_ChangePurchaseOrderAction',
        'GetArticleNumberListByArticleGroup' => 'Promidata_Service_Request_GetArticleNumberListByArticleGroup',
        'GetCollectiveInvoiceList' => 'Promidata_Service_Request_GetCollectiveInvoiceList',
        'GetCurrencyList' => 'Promidata_Service_Request_GetCurrencyList',
        'GetCurrentStockAmounts' => 'Promidata_Service_Request_GetCurrentStockAmounts',
        'GetCustomerInformation' => 'Promidata_Service_Request_GetCustomerInformation',
        'GetCustomerInformationList' => 'Promidata_Service_Request_GetCustomerInformationList',
        'GetCustomerPriceList' => 'Promidata_Service_Request_GetCustomerPriceList',
        'GetDeliveryTermList' => 'Promidata_Service_Request_GetDeliveryTermList',
        'GetDispatchTypeList' => 'Promidata_Service_Request_GetDispatchTypeList',
        'GetExpectedStockMovement' => 'Promidata_Service_Request_GetExpectedStockMovement',
        'GetIndentInformation' => 'Promidata_Service_Request_GetIndentInformation',
        'GetOptionList' => 'Promidata_Service_Request_GetOptionList',
        'GetOptionTypeList' => 'Promidata_Service_Request_GetOptionTypeList',
        'GetPaymentInformationList' => 'Promidata_Service_Request_GetPaymentInformationList',
        'GetPossibleAutomaticConditionList' => 'Promidata_Service_Request_GetPossibleAutomaticConditionList',
        'GetProductConfiguration' => 'Promidata_Service_Request_GetProductConfiguration',
        'GetProductInformation' => 'Promidata_Service_Request_GetProductInformation',
        'GetProductInformationByProductIdentifier' => 'Promidata_Service_Request_GetProductInformationByProductIdentifier',
        'GetProductPriceList' => 'Promidata_Service_Request_GetProductPriceList',
        'GetProductPrices' => 'Promidata_Service_Request_GetProductPrices',
        'GetPurchaseOrderActionList' => 'Promidata_Service_Request_GetPurchaseOrderActionList',
        'GetPurchaseOrderInformation' => 'Promidata_Service_Request_GetPurchaseOrderInformation',
        'GetShowDescriptionList' => 'Promidata_Service_Request_GetShowDescriptionList',
        'GetSpecialPricesForCustomer' => 'Promidata_Service_Request_GetSpecialPricesForCustomer',
        'GetSpecialPricesForPriceGroups' => 'Promidata_Service_Request_GetSpecialPricesForPriceGroups',
        'GetSupplierInformation' => 'Promidata_Service_Request_GetSupplierInformation',
        'GetSupplierInformationList' => 'Promidata_Service_Request_GetSupplierInformationList',
        'GetTenderInformation' => 'Promidata_Service_Request_GetTenderInformation',
        'GetUserInformation' => 'Promidata_Service_Request_GetUserInformation',
        'GetWebServiceCreationRequest' => 'Promidata_Service_Request_GetWebServiceCreation',
        'ImportWebServiceCreationRequest' => 'Promidata_Service_Request_ImportWebServiceCreation',
        'Logon' => 'Promidata_Service_Request_Logon',
        'SearchCustomer' => 'Promidata_Service_Request_SearchCustomer',
        'SearchIndent' => 'Promidata_Service_Request_SearchIndent',
        'SearchProduct' => 'Promidata_Service_Request_SearchProduct',
        'SearchPurchaseOrder' => 'Promidata_Service_Request_SearchPurchaseOrder',
        'SearchSupplier' => 'Promidata_Service_Request_SearchSupplier',

        // Response
        'ChangePurchaseOrderActionResponse' => 'Promidata_Service_Response_ChangePurchaseOrderAction',
        'GetArticleNumberListByArticleGroupResponse' => 'Promidata_Service_Response_GetArticleNumberListByArticleGroup',
        'GetCollectiveInvoiceListResponse' => 'Promidata_Service_Response_GetCollectiveInvoiceList',
        'GetCurrencyListResponse' => 'Promidata_Service_Response_GetCurrencyList',
        'GetCurrentStockAmountsResponse' => 'Promidata_Service_Response_GetCurrentStockAmounts',
        'GetCustomerInformationResponse' => 'Promidata_Service_Response_GetCustomerInformation',
        'GetCustomerInformationListResponse' => 'Promidata_Service_Response_GetCustomerInformationList',
        'GetCustomerPriceListResponse' => 'Promidata_Service_Response_GetCustomerPriceList',
        'GetDeliveryTermListResponse' => 'Promidata_Service_Response_GetDeliveryTermList',
        'GetDispatchTypeListResponse' => 'Promidata_Service_Response_GetDispatchTypeList',
        'GetExpectedStockMovementResponse' => 'Promidata_Service_Response_GetExpectedStockMovement',
        'GetIndentInformationResponse' => 'Promidata_Service_Response_GetIndentInformation',
        'GetOptionListResponse' => 'Promidata_Service_Response_GetOptionList',
        'GetOptionTypeListResponse' => 'Promidata_Service_Response_GetOptionTypeList',
        'GetPaymentInformationListResponse' => 'Promidata_Service_Response_GetPaymentInformationList',
        'GetPossibleAutomaticConditionListReponse' => 'Promidata_Service_Response_GetPossibleAutomaticConditionList',
        'GetProductConfigurationResponse' => 'Promidata_Service_Response_GetProductConfiguration',
        'GetProductInformationResponse' => 'Promidata_Service_Response_GetProductInformation',
        'GetProductInformationByProductIdentifierResponse' => 'Promidata_Service_Response_GetProductInformationByProductIdentifier',
        'GetProductPriceListResponse' => 'Promidata_Service_Response_GetProductPriceList',
        'GetProductPricesResponse' => 'Promidata_Service_Response_GetProductPrices',
        'GetPurchaseOrderActionListResponse' => 'Promidata_Service_Response_GetPurchaseOrderActionList',
        'GetPurchaseOrderInformationResponse' => 'Promidata_Service_Response_GetPurchaseOrderInformation',
        'GetShowDescriptionListResponse' => 'Promidata_Service_Response_GetShowDescriptionList',
        'GetSpecialPricesForPriceGroupsResponse' => 'Promidata_Service_Response_GetSpecialPricesForPriceGroupsResponse',
        'GetSpecialPricesForCustomerResponse' => 'Promidata_Service_Response_GetSpecialPricesForCustomer',
        'GetSupplierInformationResponse' => 'Promidata_Service_Response_GetSupplierInformation',
        'GetSupplierInformationListResponse' => 'Promidata_Service_Response_GetSupplierInformationList',
        'GetTenderInformationResponse' => 'Promidata_Service_Response_GetTenderInformation',
        'GetUserInformationResponse' => 'Promidata_Service_Response_GetUserInformation',
        'GetWebServiceCreationRequestResponse' => 'Promidata_Service_Response_GetWebServiceCreationRequest',
        'ImportWebServiceCreationRequestResponse' => 'Promidata_Service_Response_ImportWebServiceCreationRequest',
        'LogonResponse' => 'Promidata_Service_Response_Logon',
        'SearchCustomerResponse' => 'Promidata_Service_Response_SearchCustomer',
        'SearchIndentResponse' => 'Promidata_Service_Response_SearchIndent',
        'SearchProductResponse' => 'Promidata_Service_Response_SearchProduct',
        'SearchPurchaseOrderResponse' => 'Promidata_Service_Response_SearchPurchaseOrder',
        'SearchSupplierResponse' => 'Promidata_Service_Response_SearchSupplier'
    );

    /**
     * Constructor.
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @param bool $debug Should we enable stack tracing?
     * @access public
     * @throws Exception
     */
    public function __construct(
        $wsdl = 'https://promotionaloffice.cloudapp.net/PromotionalOffice/Services/Info/ClientBackendService.svc?singleWsdl',
        array $options = array(),
        $debug = false
    )
    {
        // Create stream_context to accept unsigned certificates in PHP >= 5.6.
        $options['stream_context'] = stream_context_create(array(
            'http' => array(
                'user_agent' => 'PHPSoapClient'
            ),
            'https' => array(
                'curl_verify_ssl_peer' => false,
                'curl_verify_ssl_host' => false
            ),
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        ));
        $options['cache_wsdl'] = WSDL_CACHE_MEMORY;
        $options['compression'] = SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP;

        if ($debug == true) {
            $options['trace'] = true;
            $options['exceptions'] = true;
        }

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * @param Promidata_Service_Request_Logon $parameters
     * @access public
     * @return Promidata_Service_Response_Logon
     * @throws Promidata_Service_Exception
     */
    public function Logon(Promidata_Service_Request_Logon $parameters)
    {
        return $this->__soapCall('Logon', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetProductInformation $parameters
     * @access public
     * @return Promidata_Service_Response_GetProductInformation
     * @throws Promidata_Service_Exception
     */
    public function GetProductInformation(Promidata_Service_Request_GetProductInformation $parameters)
    {
        return $this->__soapCall('GetProductInformation', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetProductInformationByProductIdentifier $parameters
     * @access public
     * @return Promidata_Service_Response_GetProductInformationByProductIdentifier
     * @throws Promidata_Service_Exception
     */
    public function GetProductInformationByProductIdentifier(Promidata_Service_Request_GetProductInformationByProductIdentifier $parameters)
    {
        return $this->__soapCall('GetProductInformationByProductIdentifier', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetProductPrices $parameters
     * @access public
     * @return Promidata_Service_Response_GetProductPrices
     * @throws Promidata_Service_Exception
     */
    public function GetProductPrices(Promidata_Service_Request_GetProductPrices $parameters)
    {
        return $this->__soapCall('GetProductPrices', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetExpectedStockMovement $parameters
     * @access public
     * @return Promidata_Service_Response_GetExpectedStockMovement
     * @throws Promidata_Service_Exception
     */
    public function GetExpectedStockMovement(Promidata_Service_Request_GetExpectedStockMovement $parameters)
    {
        return $this->__soapCall('GetExpectedStockMovement', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetProductPriceList $parameters
     * @access public
     * @return Promidata_Service_Response_GetProductPriceList
     * @throws Promidata_Service_Exception
     */
    public function GetProductPriceList(Promidata_Service_Request_GetProductPriceList $parameters)
    {
        return $this->__soapCall('GetProductPriceList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetCustomerInformation $parameters
     * @access public
     * @return Promidata_Service_Response_GetCustomerInformation
     * @throws Promidata_Service_Exception
     */
    public function GetCustomerInformation(Promidata_Service_Request_GetCustomerInformation $parameters)
    {
        return $this->__soapCall('GetCustomerInformation', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetCustomerInformationList $parameters
     * @access public
     * @return Promidata_Service_Response_GetCustomerInformationList
     * @throws Promidata_Service_Exception
     */
    public function GetCustomerInformationList(Promidata_Service_Request_GetCustomerInformationList $parameters)
    {
        return $this->__soapCall('GetCustomerInformationList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetUserInformation $parameters
     * @access public
     * @return Promidata_Service_Response_GetUserInformation
     * @throws Promidata_Service_Exception
     */
    public function GetUserInformation(Promidata_Service_Request_GetUserInformation $parameters)
    {
        return $this->__soapCall('GetUserInformation', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetCustomerPriceList $parameters
     * @access public
     * @return Promidata_Service_Response_GetCustomerPriceList
     * @throws Promidata_Service_Exception
     */
    public function GetCustomerPriceList(Promidata_Service_Request_GetCustomerPriceList $parameters)
    {
        return $this->__soapCall('GetCustomerPriceList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetPossibleAutomaticConditionList $parameters
     * @access public
     * @return Promidata_Service_Response_GetPossibleAutomaticConditionList
     * @throws Promidata_Service_Exception
     */
    public function GetPossibleAutomaticConditionList(Promidata_Service_Request_GetPossibleAutomaticConditionList $parameters)
    {
        return $this->__soapCall('GetPossibleAutomaticConditionList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetArticleNumberListByArticleGroup $parameters
     * @access public
     * @return Promidata_Service_Response_GetArticleNumberListByArticleGroup
     * @throws Promidata_Service_Exception
     */
    public function GetArticleNumberListByArticleGroup(Promidata_Service_Request_GetArticleNumberListByArticleGroup $parameters)
    {
        return $this->__soapCall('GetArticleNumberListByArticleGroup', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_SearchCustomer $parameters
     * @access public
     * @return Promidata_Service_Response_SearchCustomer
     * @throws Promidata_Service_Exception
     */
    public function SearchCustomer(Promidata_Service_Request_SearchCustomer $parameters)
    {
        return $this->__soapCall('SearchCustomer', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_SearchSupplier $parameters
     * @access public
     * @return Promidata_Service_Response_SearchSupplier
     * @throws Promidata_Service_Exception
     */
    public function SearchSupplier(Promidata_Service_Request_SearchSupplier $parameters)
    {
        return $this->__soapCall('SearchSupplier', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_SearchProduct $parameters
     * @access public
     * @return Promidata_Service_Response_SearchProduct
     * @throws Promidata_Service_Exception
     */
    public function SearchProduct(Promidata_Service_Request_SearchProduct $parameters)
    {
        return $this->__soapCall('SearchProduct', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetShowDescriptionList $parameters
     * @access public
     * @return Promidata_Service_Response_GetShowDescriptionList
     * @throws Promidata_Service_Exception
     */
    public function GetShowDescriptionList(Promidata_Service_Request_GetShowDescriptionList $parameters)
    {
        return $this->__soapCall('GetShowDescriptionList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetCurrencyList $parameters
     * @access public
     * @return Promidata_Service_Response_GetCurrencyList
     * @throws Promidata_Service_Exception
     */
    public function GetCurrencyList(Promidata_Service_Request_GetCurrencyList $parameters)
    {
        return $this->__soapCall('GetCurrencyList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetPaymentInformationList $parameters
     * @access public
     * @return Promidata_Service_Response_GetPaymentInformationList
     * @throws Promidata_Service_Exception
     */
    public function GetPaymentInformationList(Promidata_Service_Request_GetPaymentInformationList $parameters)
    {
        return $this->__soapCall('GetPaymentInformationList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetDispatchTypeList $parameters
     * @access public
     * @return Promidata_Service_Response_GetDispatchTypeList
     * @throws Promidata_Service_Exception
     */
    public function GetDispatchTypeList(Promidata_Service_Request_GetDispatchTypeList $parameters)
    {
        return $this->__soapCall('GetDispatchTypeList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetDeliveryTermList $parameters
     * @access public
     * @return Promidata_Service_Response_GetDeliveryTermList
     * @throws Promidata_Service_Exception
     */
    public function GetDeliveryTermList(Promidata_Service_Request_GetDeliveryTermList $parameters)
    {
        return $this->__soapCall('GetDeliveryTermList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetCollectiveInvoiceList $parameters
     * @access public
     * @return Promidata_Service_Response_GetCollectiveInvoiceList
     * @throws Promidata_Service_Exception
     */
    public function GetCollectiveInvoiceList(Promidata_Service_Request_GetCollectiveInvoiceList $parameters)
    {
        return $this->__soapCall('GetCollectiveInvoiceList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetIndentInformation $parameters
     * @access public
     * @return Promidata_Service_Response_GetIndentInformation
     * @throws Promidata_Service_Exception
     */
    public function GetIndentInformation(Promidata_Service_Request_GetIndentInformation $parameters)
    {
        return $this->__soapCall('GetIndentInformation', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetProductConfiguration $parameters
     * @access public
     * @return Promidata_Service_Response_GetProductConfiguration
     * @throws Promidata_Service_Exception
     */
    public function GetProductConfiguration(Promidata_Service_Request_GetProductConfiguration $parameters)
    {
        return $this->__soapCall('GetProductConfiguration', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_SearchPurchaseOrder $parameters
     * @access public
     * @return Promidata_Service_Response_SearchPurchaseOrder
     * @throws Promidata_Service_Exception
     */
    public function SearchPurchaseOrder(Promidata_Service_Request_SearchPurchaseOrder $parameters)
    {
        return $this->__soapCall('SearchPurchaseOrder', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetPurchaseOrderInformation $parameters
     * @access public
     * @return Promidata_Service_Response_GetPurchaseOrderInformation
     * @throws Promidata_Service_Exception
     */
    public function GetPurchaseOrderInformation(Promidata_Service_Request_GetPurchaseOrderInformation $parameters)
    {
        return $this->__soapCall('GetPurchaseOrderInformation', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_ChangePurchaseOrderAction $parameters
     * @access public
     * @return Promidata_Service_Response_ChangePurchaseOrderAction
     * @throws Promidata_Service_Exception
     */
    public function ChangePurchaseOrderAction(Promidata_Service_Request_ChangePurchaseOrderAction $parameters)
    {
        return $this->__soapCall('ChangePurchaseOrderAction', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetPurchaseOrderActionList $parameters
     * @access public
     * @return Promidata_Service_Response_GetPurchaseOrderActionList
     * @throws Promidata_Service_Exception
     */
    public function GetPurchaseOrderActionList(Promidata_Service_Request_GetPurchaseOrderActionList $parameters)
    {
        return $this->__soapCall('GetPurchaseOrderActionList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetOptionList $parameters
     * @access public
     * @return Promidata_Service_Response_GetOptionList
     * @throws Promidata_Service_Exception
     */
    public function GetOptionList(Promidata_Service_Request_GetOptionList $parameters)
    {
        return $this->__soapCall('GetOptionList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetOptionTypeList $parameters
     * @access public
     * @return Promidata_Service_Response_GetOptionTypeList
     * @throws Promidata_Service_Exception
     */
    public function GetOptionTypeList(Promidata_Service_Request_GetOptionTypeList $parameters)
    {
        return $this->__soapCall('GetOptionTypeList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetSpecialPricesForPriceGroups $parameters
     * @access public
     * @return Promidata_Service_Response_GetSpecialPricesForPriceGroups
     * @throws Promidata_Service_Exception
     */
    public function GetSpecialPricesForPriceGroups(Promidata_Service_Request_GetSpecialPricesForPriceGroups $parameters)
    {
        return $this->__soapCall('GetSpecialPricesForPriceGroups', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetSpecialPricesForCustomer $parameters
     * @access public
     * @return Promidata_Service_Response_GetSpecialPricesForCustomer
     * @throws Promidata_Service_Exception
     */
    public function GetSpecialPricesForCustomer(Promidata_Service_Request_GetSpecialPricesForCustomer $parameters)
    {
        return $this->__soapCall('GetSpecialPricesForCustomer', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetTenderInformation $parameters
     * @access public
     * @return Promidata_Service_Response_GetTenderInformation
     * @throws Promidata_Service_Exception
     */
    public function GetTenderInformation(Promidata_Service_Request_GetTenderInformation $parameters)
    {
        return $this->__soapCall('GetTenderInformation', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetSupplierInformation $parameters
     * @access public
     * @return Promidata_Service_Response_GetSupplierInformation
     * @throws Promidata_Service_Exception
     */
    public function GetSupplierInformation(Promidata_Service_Request_GetSupplierInformation $parameters)
    {
        return $this->__soapCall('GetSupplierInformation', array($parameters));
    }

    /**
     * @param  $parameters
     * @access public
     * @return Promidata_Service_Response_GetSupplierInformationList
     * @throws Promidata_Service_Exception
     */
    public function GetSupplierInformationList(Promidata_Service_Request_GetSupplierInformationList $parameters)
    {
        return $this->__soapCall('GetSupplierInformationList', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_SearchIndent $parameters
     * @access public
     * @return Promidata_Service_Response_SearchIndent
     * @throws Promidata_Service_Exception
     */
    public function SearchIndent(Promidata_Service_Request_SearchIndent $parameters)
    {
        return $this->__soapCall('SearchIndent', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetCurrentStockAmounts $parameters
     * @access public
     * @return Promidata_Service_Response_GetCurrentStockAmounts
     * @throws Promidata_Service_Exception
     */
    public function GetCurrentStockAmounts(Promidata_Service_Request_GetCurrentStockAmounts $parameters)
    {
        return $this->__soapCall('GetCurrentStockAmounts', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_ImportWebServiceCreation $parameters
     * @access public
     * @return Promidata_Service_Response_ImportWebServiceCreationRequest
     * @throws Promidata_Service_Exception
     */
    public function ImportWebServiceCreationRequest(Promidata_Service_Request_ImportWebServiceCreation $parameters)
    {
        return $this->__soapCall('ImportWebServiceCreationRequest', array($parameters));
    }

    /**
     * @param Promidata_Service_Request_GetWebServiceCreation $parameters
     * @access public
     * @return Promidata_Service_Response_GetWebServiceCreationRequest
     * @throws Promidata_Service_Exception
     */
    public function GetWebServiceCreationRequest(Promidata_Service_Request_GetWebServiceCreation $parameters)
    {
        return $this->__soapCall('GetWebServiceCreationRequest', array($parameters));
    }
}