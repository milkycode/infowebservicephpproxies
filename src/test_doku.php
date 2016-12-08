<?php
/**
 * PromotionalOffice Service - Test Script.
 * @author Christian Hinz <christian@milkycode.com>
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
	
	// Ausgeben der importer als Liste
	echo "<table border=1>";
	echo "<tr><th>Name</th><th>ImporterId</th></tr>";
	foreach ($importerList->GetImporterResult->ImporterDefinition as $importerDefinition) 
	{ 
		echo "<tr><td>$importerDefinition->Name</td><td>$importerDefinition->ImporterId</td></tr>";
	}
	echo "</table>";
	
	// Ausgeben aller Importfelder pro Importer
	foreach ($importerList->GetImporterResult->ImporterDefinition as $importerDefinition) 
	{ 
		echo "<br><table border=1>";
		echo "<tr><th colspan=3 align=left>$importerDefinition->Name</th></tr>";
		echo "<tr><th>FieldName</th><th>Description</th><th>IsRequired</th></tr>";
		
		
		$fieldList = $proxy->GetImporterDetail(new Promidata_Service_Request_GetImporterDetail($importerDefinition->ImporterId));
		foreach ($fieldList->GetImporterDetailResult->FieldInfos->ImportFieldInfo as $fieldDefinition) 
		{ 
			echo "<tr><td>$fieldDefinition->FieldName</td><td>$fieldDefinition->Description</td><td>$fieldDefinition->IsRequired</td></tr>";
		}
		
		echo "</table>";
	}
	
    //echo "<pre>";
    //var_dump($response);
    //echo "</pre>";
} catch (Exception $e) {
    // Exception handling.
    echo $e->getMessage().PHP_EOL;
    echo PHP_EOL;
    echo var_dump($e->getTrace()).PHP_EOL;
}