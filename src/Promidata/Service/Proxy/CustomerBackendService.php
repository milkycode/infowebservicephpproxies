<?php
/**
 * Proxy for Promidata PromotionalOffice ClientBackendService/CustomerbackendService.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Proxy_CustomerBackendService extends SoapClient implements Promidata_Service_Interface_ICustomerBackendService
{
    /**
     * Classmap.
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
        // DTO
        'ArticleTextItem' => 'Promidata_Service_DTO_ArticleTextItem',
        'AutomaticCondition' => 'Promidata_Service_DTO_AutomaticCondition',
        'ColorSizeCombination' => 'Promidata_Service_DTO_ColorSizeCombination',
        'ContactDetail' => 'Promidata_Service_DTO_ContactDetail',
        'ContactPersonInformation' => 'Promidata_Service_DTO_ContactPersonInformation',
        'CustomerIdentifier' => 'Promidata_Service_DTO_CustomerIdentifier',
        'CustomerInformation' => 'Promidata_Service_DTO_CustomerInformation',
        'ExpectedStockMovement' => 'Promidata_Service_DTO_ExpectedStockMovement',
        'GetPossibleAutomaticConditionListResult' => 'Promidata_Service_DTO_GetPossibleAutomaticConditionListResult',
        'GetProductConfigurationParameter' => 'Promidata_Service_DTO_GetProductConfigurationParameter',
        'LocalizationItem' => 'Promidata_Service_DTO_LocalizationItem',
        'LocalizedItem' => 'Promidata_Service_DTO_LocalizedItem',
        'PaymentInformation' => 'Promidata_Service_DTO_PaymentInformation',
        'ProductConfiguration' => 'Promidata_Service_DTO_ProductConfiguration',
        'ProductConfigurationItem' => 'Promidata_Service_DTO_ProductConfigurationItem',
        'ProductIdentifier' => 'Promidata_Service_DTO_ProductIdentifier',
        'ProductInformation' => 'Promidata_Service_DTO_ProductInformation',
        'ProductPriceInformation' => 'Promidata_Service_DTO_ProductPriceInformation',
        'ShowDescriptionItem' => 'Promidata_Service_DTO_ShowDescriptionItem',
        'SimpleAddress' => 'Promidata_Service_DTO_SimpleAddress',
        'SupplierSearchParameter' => 'Promidata_Service_DTO_SupplierSearchParameter',
        'SupplierSearchResult' => 'Promidata_Service_DTO_SupplierSearchResult',
        'TenderIndentImporterAddressData' => 'Promidata_Service_DTO_TenderIndentImporterAddressData',
        'TenderIndentImporterBettermentData' => 'Promidata_Service_DTO_TenderIndentImporterBettermentData',
        'TenderIndentImporterData' => 'Promidata_Service_DTO_TenderIndentImporterData',
        'TenderIndentImporterPositionData' => 'Promidata_Service_DTO_TenderIndentImporterPositionData',
        'TenderIndentImporterRelayData' => 'Promidata_Service_DTO_TenderIndentImporterRelayData',
        'TranslationItem' => 'Promidata_Service_DTO_TranslationItem',
        'UserInformation' => 'Promidata_Service_DTO_UserInformation',
        'CustomerSearchParameter' => 'Promidata_Service_DTO_CustomerSearchParameter',
        'ProductSearchParameter' => 'Promidata_Service_DTO_ProductSearchParameter',
        'CustomerSearchResult' => 'Promidata_Service_DTO_CustomerSearchResult',
        'ProductSearchResult' => 'Promidata_Service_DTO_ProductSearchResult',
        'CurrencyItem' => 'Promidata_Service_DTO_CurrencyItem',
        'GetIndentInformationParameter' => 'Promidata_Service_DTO_GetIndentInformationParameter',
        'IndentInformationItem' => 'Promidata_Service_DTO_IndentInformationItem',
        'IndentInformationEventItem' => 'Promidata_Service_DTO_IndentInformationEventItem',
        'IndentInformationPositionItem' => 'Promidata_Service_DTO_IndentInformationPositionItem',
        'IndentInformationBettermentItem' => 'Promidata_Service_DTO_IndentInformationBettermentItem',

        // Enum

        // Request
        'GetArticleNumberListByArticleGroup' => 'Promidata_Service_Request_GetArticleNumberListByArticleGroup',
        'GetCustomerInformation' => 'Promidata_Service_Request_GetCustomerInformation',
        'GetCustomerInformationList' => 'Promidata_Service_Request_GetCustomerInformationList',
        'GetCustomerPriceList' => 'Promidata_Service_Request_GetCustomerPriceList',
        'GetExpectedStockMovement' => 'Promidata_Service_Request_GetExpectedStockMovement',
        'GetPossibleAutomaticConditionList' => 'Promidata_Service_Request_GetPossibleAutomaticConditionList',
        'GetProductConfiguration' => 'Promidata_Service_Request_GetProductConfiguration',
        'GetProductInformation' => 'Promidata_Service_Request_GetProductInformation',
        'GetProductPriceList' => 'Promidata_Service_Request_GetProductPriceList',
        'GetProductPrices' => 'Promidata_Service_Request_GetProductPrices',
        'GetUserInformation' => 'Promidata_Service_Request_GetUserInformation',
        'Logon' => 'Promidata_Service_Request_Logon',
        'SearchCustomer' => 'Promidata_Service_Request_SearchCustomer',
        'SearchProduct' => 'Promidata_Service_Request_SearchProduct',
        'SearchSupplier' => 'Promidata_Service_Request_SearchSupplier',
        'GetShowDescriptionList' => 'Promidata_Service_Request_GetShowDescriptionList',
        'GetCurrencyList' => 'Promidata_Service_Request_GetCurrencyList',
        'GetPaymentInformationList' => 'Promidata_Service_Request_GetPaymentInformationList',
        'GetDispatchTypeList' => 'Promidata_Service_Request_GetDispatchTypeList',
        'GetDeliveryTermList' => 'Promidata_Service_Request_GetDeliveryTermList',
        'GetCollectiveInvoiceList' => 'Promidata_Service_Request_GetCollectiveInvoiceList',
        'GetIndentInformation' => 'Promidata_Service_Request_GetIndentInformation',

        // Response
        'GetArticleNumberListByArticleGroupResponse' => 'Promidata_Service_Response_GetArticleNumberListByArticleGroup',
        'GetCustomerInformationResponse' => 'Promidata_Service_Response_GetCustomerInformation',
        'GetCustomerInformationListResponse' => 'Promidata_Service_Response_GetCustomerInformationList',
        'GetCustomerPriceListResponse' => 'Promidata_Service_Response_GetCustomerPriceList',
        'GetExpectedStockMovementResponse' => 'Promidata_Service_Response_GetExpectedStockMovement',
        'GetPossibleAutomaticConditionListReponse' => 'Promidata_Service_Response_GetPossibleAutomaticConditionList',
        'GetProductConfigurationResponse' => 'Promidata_Service_Response_GetProductConfiguration',
        'GetProductInformationResponse' => 'Promidata_Service_Response_GetProductInformation',
        'GetProductPriceListResponse' => 'Promidata_Service_Response_GetProductPriceList',
        'GetProductPricesResponse' => 'Promidata_Service_Response_GetProductPrices',
        'GetUserInformationResponse' => 'Promidata_Service_Response_GetUserInformation',
        'LogonResponse' => 'Promidata_Service_Response_Logon',
        'SearchCustomerResponse' => 'Promidata_Service_Response_SearchCustomer',
        'SearchProductResponse' => 'Promidata_Service_Response_SearchProduct',
        'SearchSupplierResponse' => 'Promidata_Service_Response_SearchSupplier',
        'GetShowDescriptionListResponse' => 'Promidata_Service_Response_GetShowDescriptionList',
        'GetCurrencyListResponse' => 'Promidata_Service_Response_GetCurrencyList',
        'GetPaymentInformationListResponse' => 'Promidata_Service_Response_GetPaymentInformationList',
        'GetDispatchTypeListResponse' => 'Promidata_Service_Response_GetDispatchTypeList',
        'GetDeliveryTermListResponse' => 'Promidata_Service_Response_GetDeliveryTermList',
        'GetCollectiveInvoiceListResponse' => 'Promidata_Service_Response_GetCollectiveInvoiceList',
        'GetIndentInformationResponse' => 'Promidata_Service_Response_GetIndentInformation'
    );

    /**
     * Constructor.
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(
        $wsdl = 'https://promotionaloffice.cloudapp.net:8181/PromotionalOffice/Services/Info/ClientBackendService.svc?wsdl',
        array $options = array()
    )
    {
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
                'allow_self_signed' => true
            )
        ));
        $options['cache_wsdl'] = WSDL_CACHE_MEMORY;
        $options['compression'] = SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP;
//        $options['trace'] = true;
//        $options['exceptions'] = true;

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct($wsdl, $options);
    }

    public function __soapCall($function_name, $arguments, $options = null, $input_headers = null, &$output_headers = null)
    {
        try {
            return parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
        } catch (SoapFault $e) {

            // Custom error handling

            $output = array();
            if (preg_match("/DataPortal.Fetch fehlgeschlagen \(User ([a-zA-Z1-9-_ ]{1,}) does not exist.\)/", $e->getMessage(), $output) && count($output)) {
                throw new Promidata_Service_Exception_Authentication('Authentication failed: User not found', $e->getCode(), $e);
            }

            switch ($e->getMessage()) {
                case 'ArticleWithNumberNotFound':
                    throw new Promidata_Service_Exception_Articlenotfound('Article not found', $e->getCode(), $e);
                    break;

                case 'ArticleGroupNotFound':
                    throw new Promidata_Service_Exception_Articlegroupnotfound('Article group not found', $e->getCode(), $e);;
                    break;

                case 'DataPortal.Fetch fehlgeschlagen (Login_Company_0_not_found)':
                case 'DataPortal.Fetch fehlgeschlagen (Invalid credentials)':
                    throw new Promidata_Service_Exception_Authentication('Authentication failed', $e->getCode(), $e);
                    break;

                case 'CustomerNotFound':
                    throw new Promidata_Service_Exception_Customernotfound('Customer not found', $e->getCode(), $e);
                    break;
            }
        }
    }

    public function Logon(Promidata_Service_Request_Logon $parameters)
    {
        return $this->__soapCall('Logon', array($parameters));
    }

    public function GetProductInformation(Promidata_Service_Request_GetProductInformation $parameters)
    {
        return $this->__soapCall('GetProductInformation', array($parameters));
    }

    public function GetProductPrices(Promidata_Service_Request_GetProductPrices $parameters)
    {
        return $this->__soapCall('GetProductPrices', array($parameters));
    }

    public function GetExpectedStockMovement(Promidata_Service_Request_GetExpectedStockMovement $parameters)
    {
        return $this->__soapCall('GetExpectedStockMovement', array($parameters));
    }

    public function GetProductPriceList(Promidata_Service_Request_GetProductPriceList $parameters)
    {
        return $this->__soapCall('GetProductPriceList', array($parameters));
    }

    public function GetCustomerInformation(Promidata_Service_Request_GetCustomerInformation $parameters)
    {
        return $this->__soapCall('GetCustomerInformation', array($parameters));
    }

    public function GetCustomerInformationList(Promidata_Service_Request_GetCustomerInformationList $parameters)
    {
        return $this->__soapCall('GetCustomerInformationList', array($parameters));
    }

    public function GetUserInformation(Promidata_Service_Request_GetUserInformation $parameters)
    {
        return $this->__soapCall('GetUserInformation', array($parameters));
    }

    public function GetCustomerPriceList(Promidata_Service_Request_GetCustomerPriceList $parameters)
    {
        return $this->__soapCall('GetCustomerPriceList', array($parameters));
    }

    public function GetPossibleAutomaticConditionList(Promidata_Service_Request_GetPossibleAutomaticConditionList $parameters)
    {
        return $this->__soapCall('GetPossibleAutomaticConditionList', array($parameters));
    }

    public function GetArticleNumberListByArticleGroup(Promidata_Service_Request_GetArticleNumberListByArticleGroup $parameters)
    {
        return $this->__soapCall('GetArticleNumberListByArticleGroup', array($parameters));
    }

    public function SearchCustomer(Promidata_Service_Request_SearchCustomer $parameters)
    {
        return $this->__soapCall('SearchCustomer', array($parameters));
    }

    public function SearchSupplier(Promidata_Service_Request_SearchSupplier $parameters)
    {
        return $this->__soapCall('SearchSupplier', array($parameters));
    }

    public function SearchProduct(Promidata_Service_Request_SearchProduct $parameters)
    {
        return $this->__soapCall('SearchProduct', array($parameters));
    }

    public function GetShowDescriptionList(Promidata_Service_Request_GetShowDescriptionList $parameters)
    {
        return $this->__soapCall('GetShowDescriptionList', array($parameters));
    }

    public function GetCurrencyList(Promidata_Service_Request_GetCurrencyList $parameters)
    {
        return $this->__soapCall('GetCurrencyList', array($parameters));
    }

    public function GetPaymentInformationList(Promidata_Service_Request_GetPaymentInformationList $parameters)
    {
        return $this->__soapCall('GetPaymentInformationList', array($parameters));
    }

    public function GetDispatchTypeList(Promidata_Service_Request_GetDispatchTypeList $parameters)
    {
        return $this->__soapCall('GetDispatchTypeList', array($parameters));
    }

    public function GetDeliveryTermList(Promidata_Service_Request_GetDeliveryTermList $parameters)
    {
        return $this->__soapCall('GetDeliveryTermList', array($parameters));
    }

    public function GetCollectiveInvoiceList(Promidata_Service_Request_GetCollectiveInvoiceList $parameters)
    {
        return $this->__soapCall('GetCollectiveInvoiceList', array($parameters));
    }

    public function GetIndentInformation(Promidata_Service_Request_GetIndentInformation $parameters)
    {
        return $this->__soapCall('GetIndentInformation', array($parameters));
    }

    public function GetProductConfiguration(Promidata_Service_Request_GetProductConfiguration $parameters)
    {
        return $this->__soapCall('GetProductConfiguration', array($parameters));
    }
}