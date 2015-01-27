<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Used for non-Zend environments
require_once(dirname(__FILE__) . '/init.php');

try {
    $proxy = new Promidata_Service_Proxy_CustomerBackendService();

    $logon = $proxy->Logon(
        new Promidata_Service_Request_Logon(
            'CompanyName',
            'UserName',
            'Password' 
        )
    );
	
	// Get all information about a product
	$response = $proxy->GetProductInformation(new Promidata_Service_Request_GetProductInformation('Würfel'));
	
	// search for a customer
	//$searchitem = new Promidata_Service_DTO_CustomerSearchParameter();
	//$searchitem->SearchKey = 'CompanyName';
	//$searchitem->SearchValue = new SoapVar('Gmbh', XSD_ANYTYPE, 'string', 'http://www.w3.org/2001/XMLSchema', 'SearchValue');
	//$response = $proxy->SearchCustomer(new Promidata_Service_Request_SearchCustomer(array($searchitem)));

    var_dump($response);
	

} catch (Exception $e) {

    // Exception handling
    echo $e->getMessage().PHP_EOL;

}