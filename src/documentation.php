<?php

/**
 * \mainpage Webservice Proxy Documentation
 * 
 * Use the CustomerInfoWebserviceProxy to get access to the Promotional Office Info Webservice
 *
 The latest version of this proxies can be found here: 
 
 https://bitbucket.org/promidata/infowebservicephpproxies
 
 Git:  
 
 		git@bitbucket.org:promidata/infowebservicephpproxies.git
 *
 * \page CodeExample Code Example
 * \code{.php}
 
  	require_once('WebserviceProxy.php');
	$url = "https://93.95.252.4:8181/PromotionalOffice/Customer/Services/Basic/ClientBackendService.svc?wsdl";
    $log = new LogonRequest("PO Test 2_5", "username", "passwort");
    $proxy = new CustomerInfoWebserviceProxy($url);		
    $result = $proxy->Logon($log);

    // Retrieve product information for a given product number.     
    $productInformation = $proxy->GetProductInformation(new GetProductInformationRequest("01-1001"));
    \endcode
 * 
 * \page page1 Testpage
 */

?>