<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Used for non-Zend environments
require_once(dirname(__FILE__) . '/init.php');

try {
    $proxy = new Promidata_Service_Proxy_CustomerImportService('promotionaloffice.cloudapp.net/PromotionalOffice/Services/UniversalImporter/CustomerImportService.svc');

	$proxy->Logon('CompanyName', 'UserName', 'Password');

	// Example with Exists Method
	$dataSelector = new Promidata_Service_DTO_DataSelector("ExternReferenceSelector");
	$dataSelector->add("ImportSource", "MeineImportSource");
	$dataSelector->add("ExternId", "MeineExternId");

	$existsArgument = new Promidata_Service_DTO_ExistsArgument("9BCB107F-6355-499D-8227-42D68346B67F", $dataSelector);
	$argument = new Promidata_Service_Request_Exists($existsArgument);
	$response = $proxy->Exists($argument);

    var_dump($response);


} catch (Exception $e) {

    // Exception handling
    echo $e->getMessage().PHP_EOL;

}