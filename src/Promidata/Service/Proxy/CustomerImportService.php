<?php

/**
 *
 */
class Promidata_Service_Proxy_CustomerImportService
    extends SoapClient
    implements Promidata_Service_Interface_ICustomerImportService
{

    /**
     *
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

        // Exception
        'CommunicationException' => 'Promidata_Service_Exception_Communication',
        'Exception' => 'Promidata_Service_Exception_Custom',
        'SystemException' => 'Promidata_Service_Exception_System',
        'FaultException' => 'Promidata_Service_Exception_Fault',

        // Response
        'ExistsResponse' => 'Promidata_Service_Reponse_Exists',
        'ImportResponse' => 'Promidata_Service_Reponse_Import',
        'UpdateResponse' => 'Promidata_Service_Reponse_Update',

        // Request
        'Exists' => 'Promidata_Service_Request_Exists',
        'Import' => 'Promidata_Service_Request_Import',
        'Update' => 'Promidata_Service_Request_Update'
    );

    /**
     *
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(
        $wsdl = 'http://promotionaloffice.cloudapp.net:8080/PromotionalOffice/Services/UniversalImporter/CustomerImportService.svc?wsdl',
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

                case 'ImportSourceNotFound':
                    throw new Promidata_Service_Exception_Importsourcenotfound('Import source not found', $e->getCode(), $e);

                default:
                    throw new Promidata_Service_Exception_Unknown('Unknown error', $e->getCode(), $e);
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
