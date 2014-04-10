<?php
	require_once('WebserviceProxy.php');
	$url = "https://93.95.252.4:8181/PromotionalOffice/Customer/Services/Basic/ClientBackendService.svc?wsdl";
    $log = new Logon("PO Test 2_5", "Support", "EB20RK25DR16!");
	$proxy = new WebserviceProxy($url);
    $result = $proxy->Logon($log);
    $result = $proxy->GetProductInformation(new GetProductInformation("01-1001"));
    $result = $proxy->GetProductPrices(new GetProductPrices(new CustomerIdentifier(9, null), new ProductIdentifier(null,"01-1001",null)));
    print_r($result);
    /*
    $proxy->GetExpectedStockMovement();
    $proxy->GetProductPriceList();
    $proxy->GetCustomerInformation();
    $proxy->GetCustomerInformationList();
    $proxy->GetUserInformation();
    $proxy->GetCustomerPriceList();
    $proxy->GetPossibleAutomaticConditionList();
    $proxy->GetArticleNumberListByArticleGroup();
      */      
?>