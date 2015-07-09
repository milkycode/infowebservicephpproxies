<?php
/**
 * Proxy for Promidata PromotionalOffice CustomerImportService/CustomerImportService.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Proxy_CustomerImportService extends SoapClient implements Promidata_Service_Interface_ICustomerImportService
{
    /**
     * Importer Identification Names.
     */
    const ArticleColorSizeImporter = 'EF598DFE-EF5B-4229-B9C9-A5EAE6962DBE';
    const ArticleImporter =          '9BCB107F-6355-499D-8227-42D68346B67F';
    const CustomerImporter =         '74690240-6535-4189-989F-7421BD8226AA';
    const SpecialPriceImporter =     'C0302C42-5020-4C96-AB0E-8B5A03BF7C74';
    const SupplierImporter =         'D987F41A-77FC-414A-8211-AFAD811DC03F';
    const IndentImporter =           '60C59560-E15D-4ECF-A7E7-86E18F8347C6'; // Order
    const TenderImporter =           '6A80A184-5D49-49D5-B184-E462A3B2ADBA'; // Offer

    /**
     * Database Identifier (is not used, but must be valid).
     */
    const DatabaseIdentifier = '4A1B38CB-FFC7-499F-8F22-09565D84C6FF';

    /**
     * Classmap.
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(

        // DTO
        'AdditionalData' => 'Promidata_Service_DTO_AdditionalData',
        'AdditionalDataCollection' => 'Promidata_Service_DTO_AdditionalDataCollection',
        'ExistsArgument' => 'Promidata_Service_DTO_ExistsArgument',
        'ExistsResult' => 'Promidata_Service_DTO_ExistsResult',
        'FaultException.FaultCodeData' => 'Promidata_Service_DTO_FaultExceptionFaultCodeData',
        'FaultException.FaultReasonData' => 'Promidata_Service_DTO_FaultExceptionFaultReasonData',
        'ImportData' => 'Promidata_Service_DTO_ImportData',
        'ImportDataBase' => 'Promidata_Service_DTO_ImportDataBase',
        'ImportFieldData' => 'Promidata_Service_DTO_ImportFieldData',
        'ImportFieldDataCollection' => 'Promidata_Service_DTO_ImportFieldDataCollection',
        'ImportResult' => 'Promidata_Service_DTO_ImportResult',
        'KeyValuePairOfstringstring' => 'Promidata_Service_DTO_KeyValuePairOfstringstring',
        'KeyValueOfstringanyType' => 'Promidata_Service_DTO_KeyValueOfstringanyType',
        'DataSelector' => 'Promidata_Service_DTO_DataSelector',

        // Exception
        'CommunicationException' => 'Promidata_Service_Exception_Communication',
        'Exception' => 'Promidata_Service_Exception_Custom',
        'SystemException' => 'Promidata_Service_Exception_System',
        'FaultException' => 'Promidata_Service_Exception_Fault',

        // Request
        'Exists' => 'Promidata_Service_Request_Exists',
        'Import' => 'Promidata_Service_Request_Import',
        'Update' => 'Promidata_Service_Request_Update',

        // Response
        'ExistsResponse' => 'Promidata_Service_Response_Exists',
        'ImportResponse' => 'Promidata_Service_Response_Import',
        'UpdateResponse' => 'Promidata_Service_Response_Update'
    );

    /**
     * Constructor.
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @param array $options
     * @access public
     */
    public function __construct(
        $wsdl = 'http://promotionaloffice.cloudapp.net/PromotionalOffice/Services/UniversalImporter/CustomerImportService.svc?wsdl',
        array $options = array()
    ) {
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
//        $options['trace'] = true;
//        $options['exceptions'] = true;

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct($wsdl, $options);

        // Set new endpoint location because of php authentication problems on soap 1.2 (php only supports basic with soap).
		$basic_endpoint = str_replace(array('http:', '?wsdl'), array('https:', ''), $wsdl . '/basic');
		$this->__setLocation($basic_endpoint);
    }

    public function Logon(Promidata_Service_Request_Logon $user)
    {
		// Workaround for login (because of basic authentication).
		$securityNamespace = "http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd";
		$headerContent = "<o:Security xmlns:o=\"$securityNamespace\">
				<o:UsernameToken>
				<o:Username>$user->companyName\\$user->userName</o:Username>
				<o:Password>$user->password</o:Password>
				</o:UsernameToken>
			</o:Security>";
		$headerVar = new SoapVar($headerContent, XSD_ANYXML, null, null, null);
		$headers = array(
			new SoapHeader($securityNamespace, 'o:Security', $headerVar)
		);
		$this->__setSoapHeaders($headers);
    }

    public function __soapCall($function_name, $arguments, $options = null, $input_headers = null, &$output_headers = null)
    {
        try {
            return parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
        } catch (SoapFault $e) {
            // Custom error handling

            // Custom error handling

            $output = array();
            if (preg_match('/MyArticleNumber not found: (.*)/', $e->getMessage(), $output) && count($output)) {
                throw new Promidata_Service_Exception_Articlenotfound('Article not found: '.$output[1], $e->getCode(), $e);
            }

            switch ($e->getMessage()) {
                case 'ImportSourceNotFound':
                    throw new Promidata_Service_Exception_Importsourcenotfound('Import source not found', $e->getCode(), $e);
                    break;

                case 'ArticleWithNumberNotFound':
                    throw new Promidata_Service_Exception_Articlenotfound('Article not found', $e->getCode(), $e);
                    break;

                case 'ArticleGroupNotFound':
                    throw new Promidata_Service_Exception_Articlegroupnotfound('Article group not found', $e->getCode(), $e);;
                    break;

                default:
                    throw new Promidata_Service_Exception_Unknown($e->getMessage(), $e->getCode(), $e);
                    break;
            }
        }
    }

    public function Import(Promidata_Service_Request_Import $parameters)
    {
        return $this->__soapCall('Import', array($parameters));
    }

    public function Update(Promidata_Service_Request_Update $parameters)
    {
        return $this->__soapCall('Update', array($parameters));
    }

    public function Exists(Promidata_Service_Request_Exists $parameters)
    {
        return $this->__soapCall('Exists', array($parameters));
    }
}
