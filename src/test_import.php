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
    $proxy = new Promidata_Service_Proxy_CustomerImportService();

    $proxy->Logon(new Promidata_Service_Request_Logon(
        'CompanyName',
        'UserName',
        'Password'
    ));

    // Example with Exists Method
    $dataSelector = new Promidata_Service_DTO_DataSelector("ExternReferenceSelector");
    $dataSelector->add("ImportSource", "YourImportSource");
    $dataSelector->add("ExternId", "YourExternId");

    $existsArgument = new Promidata_Service_DTO_ExistsArgument($proxy::CustomerImporter, $dataSelector);
    $argument = new Promidata_Service_Request_Exists($existsArgument);

    $response = $proxy->Exists($argument);

    echo "<pre>";
    var_dump($response);
    echo "</pre>";
} catch (Exception $e) {
    // Exception handling.
    echo $e->getMessage() . PHP_EOL;
}