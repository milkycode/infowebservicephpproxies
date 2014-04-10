<?php
	require_once('WebserviceProxy.php');
	$url = "https://93.95.252.4:8181/PromotionalOffice/Customer/Services/Basic/ClientBackendService.svc?wsdl";
//    $client = new My_SoapClient($url, array('exceptions'=>true));
    $log = new Logon("PO Test 2_5", "Support", "EB20RK25DR16!");
//    $result = $client->Logon($log);
	$proxy = new WebserviceProxy($url);
    $result = $proxy->Logon($log);
    $result = $proxy->GetProductInformation(new GetProductInformation("01-1001"));
//    print_r($result);
    echo $result->GetProductInformationResult->IsActive;
?>