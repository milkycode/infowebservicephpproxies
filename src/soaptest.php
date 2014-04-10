<?php

    interface IInfoService{
		/** 
			@brief User Logon
			
			@detail Needs to be called at first access
			@returns LogonResponse
			@param[in] Logon $logon 
		*/
		public function Logon($logon);
    }

    class Logon{
		/**
			@brief Company Name
			@var string
		*/
		public $companyName;

		/**
			@brief Username
			@var string
		*/
		public $userName;

		/**
			@brief Passwort
			@var string
		*/
		public $password;

		/**
			@return Logon			
			@param[in] string $companyName
			@param[in] string $userName
			@param[in] string $password
		*/
		function __construct($companyName, $userName, $password){
			$this->companyName = $companyName;
			$this->userName = $userName;
			$this->password = $password;
		}
    }

    class LogonResponse{
		public $LogonResult;
    }
    
	

    class GetProductPrices {
	public $customerIdentifier;
	public $productIdentifier;
    }

    $url = "https://93.95.252.4:8181/PromotionalOffice/Customer/Services/Basic/ClientBackendService.svc?wsdl";
//    $client = new My_SoapClient($url, array('exceptions'=>true));
    $log = new Logon("PO Test", "Support", "EB20RK25DR16!");
//    $result = $client->Logon($log);
	$proxy = new WebserviceProxy($url);
    $result = $proxy->Logon($log);
    echo $result->LogonResult;
//    print_r($result);
?>