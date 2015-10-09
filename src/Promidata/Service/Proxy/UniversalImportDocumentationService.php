<?php
/**
 * Proxy for Promidata PromotionalOffice UniversalImporterDocumentationService/UniversalImporterDocumentationService.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Proxy_UniversalImportDocumentationService extends Promidata_Service_Proxy_AbstractService implements Promidata_Service_Interface_IUniversalImportDocumentationService
{
    /**
     * Classmap.
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
        // DTO
        'ImporterDetails' => 'Promidata_Service_DTO_ImporterDetails',
        'ImportFieldInfo' => 'Promidata_Service_DTO_ImportFieldInfo',
        'ImporterDefinition' => 'Promidata_Service_DTO_ImporterDefinition',
        'CompositeImportFieldInfo' => 'Promidata_Service_DTO_CompositeImportFieldInfo',

        // Request
        'GetImporter' => 'Promidata_Service_Request_GetImporter',
        'GetImporterDetail' => 'Promidata_Service_Request_GetImporterDetail',

        // Response
        'GetImporterResponse' => 'Promidata_Service_Response_GetImporter',
        'GetImporterDetailResponse' => 'Promidata_Service_Response_GetImporterDetail'
    );

    /**
     * Constructor.
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     * @param bool $debug Should we enable stack tracing?
     * @access public
     */
    public function __construct(
        $wsdl = 'http://promotionaloffice.cloudapp.net:8080/PromotionalOffice/Services/UniversalImporter/UniversalImporterDocumentationService.svc?wsdl',
        array $options = array(),
        $debug = false
    ) {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        if ($debug == true) {
            $options['trace'] = true;
            $options['exceptions'] = true;
        }

        parent::__construct($wsdl, $options);
    }

    public function GetImporter(Promidata_Service_Request_GetImporter $parameters)
    {
        return $this->__soapCall('GetImporter', array($parameters));
    }

    public function GetImporterDetail(Promidata_Service_Request_GetImporterDetail $parameters)
    {
        return $this->__soapCall('GetImporterDetail', array($parameters));
    }
}