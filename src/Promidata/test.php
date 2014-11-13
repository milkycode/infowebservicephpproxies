<?php

// Used for non-Zend environments
require_once(dirname(__FILE__) . '/init.php');

try {
    $proxy = new Promidata_Service_Proxy_CustomerBackendService();

    $logon = $proxy->Logon(
        new Promidata_Service_Request_Logon(
            'PO Test 2_5',
            'Support',
            'EB20RK25DR16!'
        )
    );
	
	// Get all information about a product
	//$response = $proxy->GetProductInformation(new Promidata_Service_Request_GetProductInformation('128-100603'));
		
	// search for a customer
	//$data = array( 'importdata' => array( 'CustomerSearchParameter' => array( 'SearchKey' => 'CompanyName', 'SearchValue' => new SoapVar('KSI', XSD_ANYTYPE, 'string', 'http://www.w3.org/2001/XMLSchema', 'Value'))));
	$response = $proxy->SearchCustomer(new Promidata_Service_Request_SearchCustomer('CompanyName', 'KSI'));

    //public function SearchCustomer(Promidata_Service_Request_SearchCustomer $searchCustomerRequest);
    var_dump($response);

} catch (Exception $e) {

    // Exception handling
    echo $e->getMessage().PHP_EOL;

}