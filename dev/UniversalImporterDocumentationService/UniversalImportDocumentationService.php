<?php

include_once('GetImporter.php');
include_once('GetImporterResponse.php');
include_once('ImporterDefinition.php');
include_once('GetImporterDetail.php');
include_once('GetImporterDetailResponse.php');
include_once('ImporterDetails.php');
include_once('ImportFieldInfo.php');
include_once('CompositeImportFieldInfo.php');

class UniversalImportDocumentationService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'GetImporter' => '\GetImporter',
      'GetImporterResponse' => '\GetImporterResponse',
      'ImporterDefinition' => '\ImporterDefinition',
      'GetImporterDetail' => '\GetImporterDetail',
      'GetImporterDetailResponse' => '\GetImporterDetailResponse',
      'ImporterDetails' => '\ImporterDetails',
      'ImportFieldInfo' => '\ImportFieldInfo',
      'CompositeImportFieldInfo' => '\CompositeImportFieldInfo');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'http://po-test1.promidata.com/Promidata/PromotionalOffice/Services/UniversalImporter/UniversalImporterDocumentationService.svc?singleWsdl')
    {
      foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
  
  parent::__construct($wsdl, $options);
    }

    /**
     * @param GetImporter $parameters
     * @access public
     * @return GetImporterResponse
     */
    public function GetImporter(GetImporter $parameters)
    {
      return $this->__soapCall('GetImporter', array($parameters));
    }

    /**
     * @param GetImporterDetail $parameters
     * @access public
     * @return GetImporterDetailResponse
     */
    public function GetImporterDetail(GetImporterDetail $parameters)
    {
      return $this->__soapCall('GetImporterDetail', array($parameters));
    }

}
