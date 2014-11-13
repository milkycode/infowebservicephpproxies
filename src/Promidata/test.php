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

    $response = $proxy->GetProductPrices(new Promidata_Service_Request_GetProductPrices(
        new Promidata_Service_DTO_CustomerIdentifier(123),
        new Promidata_Service_DTO_ProductIdentifier('product1')
    ));

    var_dump($response);

} catch (Exception $e) {

    // Exception handling
    echo $e->getMessage().PHP_EOL;

}