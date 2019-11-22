<?php
/**
 * PromotionalOffice Service - Test Script.
 * @author      Christian Hinz <christian@milkycode.com>
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Used for non-Zend environments.
require_once(dirname(__FILE__) . '/init.php');

try {
    /**
     * For debugging purpose you can use the 3rd parameter debug = true.
     */
    $proxy = new Promidata_Service_Proxy_CustomerBackendService();

    $logon = $proxy->Logon(
        new Promidata_Service_Request_Logon(
            'CompanyName',
            'UserName',
            'Password'
        )
    );

    // Get all information about a product
    //$response = $proxy->GetProductInformation(new Promidata_Service_Request_GetProductInformation('Würfel'));

    // search for a customer possibility 1:
    $searchitem = new Promidata_Service_DTO_CustomerSearchParameter('CompanyName', 'Gmbh');

    // search for a customer possibility 2:
//    $searchitem->SearchKey = 'CompanyName';
//    $searchitem->SearchValue = new SoapVar('Gmbh', XSD_ANYTYPE, 'string', 'http://www.w3.org/2001/XMLSchema', 'SearchValue');
//    $searchitem->SearchValue = 'Gmbh';

    $response = $proxy->SearchCustomer(new Promidata_Service_Request_SearchCustomer(array($searchitem)));

    echo "<pre>";
    var_dump($response);
    echo "</pre>";
} catch (Exception $e) {
    // Exception handling.
    echo $e->getMessage() . PHP_EOL;
}