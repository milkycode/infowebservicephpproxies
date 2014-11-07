<?php

/**
 *
 */
class Promidata_Service_Proxy_CustomerBackendService
    extends SoapClient
    implements Promidata_Service_Interface_ICustomerBackendService
{

    /**
     *
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
        'LocalizationItem' => 'Promidata_Service_DTO_LocalizationItem',
        'LocalizedItem' => 'Promidata_Service_DTO_LocalizedItem',
        'PaymentInformation' => 'Promidata_Service_DTO_PaymentInformation',
        'ProductIdentifier' => 'Promidata_Service_DTO_ProductIdentifier',
        'ProductInformation' => 'Promidata_Service_DTO_ProductInformation',
        'ProductPriceInformation' => 'Promidata_Service_DTO_ProductPriceInformation',
        'ShowDescriptionItem' => 'Promidata_Service_DTO_ShowDescriptionItem',
        'SimpleAddress' => 'Promidata_Service_DTO_SimpleAddress',
        'TenderIndentImporterAddressData' => 'Promidata_Service_DTO_TenderIndentImporterAddressData',
        'TenderIndentImporterBettermentData' => 'Promidata_Service_DTO_TenderIndentImporterBettermentData',
        'TenderIndentImporterData' => 'Promidata_Service_DTO_TenderIndentImporterData',
        'TenderIndentImporterPositionData' => 'Promidata_Service_DTO_TenderIndentImporterPositionData',
        'TenderIndentImporterRelayData' => 'Promidata_Service_DTO_TenderIndentImporterRelayData',
        'TranslationItem' => 'Promidata_Service_DTO_TranslationItem',
        'UserInformation' => 'Promidata_Service_DTO_UserInformation',
        'CustomerSearchParameter' => 'Promidata_Service_DTO_CustomerSearchParameter',

        // Enum


        // Response
        'GetArticleNumberListByArticleGroupResponse' => 'Promidata_Service_Reponse_GetArticleNumberListByArticleGroup',
        'GetCustomerInformationResponse' => 'Promidata_Service_Reponse_GetCustomerInformation',
        'GetCustomerInformationListResponse' => 'Promidata_Service_Reponse_GetCustomerInformationList',
        'GetCustomerPriceListResponse' => 'Promidata_Service_Reponse_GetCustomerPriceList',
        'GetExpectedStockMovementResponse' => 'Promidata_Service_Reponse_GetExpectedStockMovement',
        'GetPossibleAutomaticConditionListReponse' => 'Promidata_Service_Reponse_GetPossibleAutomaticConditionList',
        'GetProductInformationResponse' => 'Promidata_Service_Reponse_GetProductInformation',
        'GetProductPriceListResponse' => 'Promidata_Service_Reponse_GetProductPriceList',
        'GetProductPricesResponse' => 'Promidata_Service_Reponse_GetProductPrices',
        'GetUserInformationResponse' => 'Promidata_Service_Reponse_GetUserInformation',
        'LogonResponse' => 'Promidata_Service_Reponse_Logon',

        // Request
        'GetArticleNumberListByArticleGroup' => 'Promidata_Service_Request_GetArticleNumberListByArticleGroup',
        'GetCustomerInformation' => 'Promidata_Service_Request_GetCustomerInformation',
        'GetCustomerInformationList' => 'Promidata_Service_Request_GetCustomerInformationList',
        'GetCustomerPriceList' => 'Promidata_Service_Request_GetCustomerPriceList',
        'GetExpectedStockMovement' => 'Promidata_Service_Request_GetExpectedStockMovement',
        'GetPossibleAutomaticConditionList' => 'Promidata_Service_Request_GetPossibleAutomaticConditionList',
        'GetProductInformation' => 'Promidata_Service_Request_GetProductInformation',
        'GetProductPriceList' => 'Promidata_Service_Request_GetProductPriceList',
        'GetProductPrices' => 'Promidata_Service_Request_GetProductPrices',
        'GetUserInformation' => 'Promidata_Service_Request_GetUserInformation',
        'Logon' => 'Promidata_Service_Request_Logon'
    );

    /**
     *
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(
        $wsdl = 'https://promotionaloffice.cloudapp.net:8181/PromotionalOffice/Services/Info/ClientBackendService.svc?wsdl',
        array $options = array()
    ) {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct($wsdl, $options);
    }

    public function __soapCall ($function_name, array $arguments, array $options = null, $input_headers = null, array &$output_headers = null)
    {
        try {
            return parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
        } catch (SoapFault $e) {

            // Custom error handling

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

                default:
					var_dump($e);
                    throw new Promidata_Service_Exception_Unknown('Unknown error', $e->getCode(), $e);
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

}
