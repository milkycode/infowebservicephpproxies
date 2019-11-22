<?php
/**
 * PromotionalOffice Service - Test Script.
 * @author      Christian Hinz <christian@milkycode.com>
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Used for non-Zend environments.
require_once(dirname(__FILE__) . '/init.php');

try {
    /**
     * For debugging purpose you can use the 3rd parameter debug = true.
     */
    $proxy = new Promidata_Service_Proxy_UniversalImportDocumentationService();
    $importerList = $proxy->GetImporter(new Promidata_Service_Request_GetImporter());

    // Output of importers as a list.
    echo "<table border=1>";
    echo "<tr><th>Name</th><th>ImporterId</th></tr>";
    foreach ($importerList->GetImporterResult->ImporterDefinition as $importerDefinition) {
        echo "<tr><td><a href='#$importerDefinition->Name'>$importerDefinition->Name</a></td><td>$importerDefinition->ImporterId</td></tr>";
    }
    echo "</table>";

    // Output of all import fields per importer.
    foreach ($importerList->GetImporterResult->ImporterDefinition as $importerDefinition) {
        echo "<br><br><br><table border=1 width=100% id='$importerDefinition->Name'>";
        echo "<tr><th colspan=2 align=left>$importerDefinition->Name</th><th colspan=1 align=left><a href='#top'>To Top</a></th></tr>";
        echo "<tr><th width=10%>FieldName</th><th>Description</th><th width=10%>IsRequired</th></tr>";

        $fieldList = $proxy->GetImporterDetail(new Promidata_Service_Request_GetImporterDetail($importerDefinition->ImporterId));
        foreach ($fieldList->GetImporterDetailResult->FieldInfos->ImportFieldInfo as $fieldDefinition) {
            echo "<tr><td>$fieldDefinition->FieldName</td><td>" . nl2br($fieldDefinition->Description) . "</td><td>$fieldDefinition->IsRequired</td></tr>";

            if (property_exists($fieldDefinition, "CompositeFields")) {
                foreach ($fieldDefinition->CompositeFields->ImportFieldInfo as $innerFieldDefinition) {
                    echo "<tr><td>$fieldDefinition->FieldName.$innerFieldDefinition->FieldName</td><td>" . nl2br($innerFieldDefinition->Description) . "</td><td>$innerFieldDefinition->IsRequired</td></tr>";
                }
            }
        }

        echo "</table>";
    }

    //echo "<pre>";
    //var_dump($response);
    //echo "</pre>";
} catch (Exception $e) {
    // Exception handling.
    echo $e->getMessage() . PHP_EOL;
    echo PHP_EOL;
    echo var_dump($e->getTrace()) . PHP_EOL;
}