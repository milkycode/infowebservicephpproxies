<?php
	require_once('WebserviceProxy.php');
	$url = "https://93.95.252.4:8181/PromotionalOffice/Customer/Services/Basic/ClientBackendService.svc?wsdl";
    $log = new LogonRequest("PO Test 2_5", "Support", "EB20RK25DR16!");
	$proxy = new CustomerInfoWebserviceProxy($url);		
	$productIdentifier = new ProductIdentifier(null,"01-1001",null);
	$customerIdentifier = new CustomerIdentifier(9, null);	
	$result = $proxy->Logon($log);
    /*

    */
	$result = $proxy->GetProductInformation(new GetProductInformationRequest("01-1001"));       
	print_r($result);

	$result = $proxy->GetProductPrices(new GetProductPricesRequest($customerIdentifier, $productIdentifier ));
    print_r($result);
    
    $result = $proxy->GetExpectedStockMovement(new GetExpectedStockMovementRequest($productIdentifier));
    print_r($result);
    
    $result = $proxy->GetProductPriceList(new GetProductPriceListRequest($productIdentifier));    
    print_r($result);
    
    $result = $proxy->GetCustomerInformation(new GetCustomerInformationRequest($customerIdentifier));
    print_r($result);
    
    $result = $proxy->GetCustomerInformationList(new GetCustomerInformationListRequest(date("c", strtotime('-10 month'))));      
    print_r($result);
    
    $result = $proxy->GetUserInformation(new GetUserInformationRequest());
    print_r($result);
    
    $result = $proxy->GetCustomerPriceList(new GetCustomerPriceListRequest($customerIdentifier));
    print_r($result);
    
    //$result = $proxy->GetPossibleAutomaticConditionList(new GetPossibleAutomaticConditionList(new TenderIndentImporterData()));
	//print_r($result);
	
    $result = $proxy->GetArticleNumberListByArticleGroup(new GetArticleNumberListByArticleGroupRequest("Mug (Desk)"));
    print_r($result);   
    /*    
    
    
    
    
      */      
?>