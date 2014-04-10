<?php

    interface IInfoService{
		/** 
			@brief User Logon
			
			@detail Needs to be called at first access
			@returns LogonResponse
			@param[in] Logon $logon 
		*/
		public function Logon($logon);
		
		/**
			@returns GetProductInformationResponse
			@param[in] GetProductInformation $getProductInformation
		*/
		public function GetProductInformation($getProductInformation);
    }

	class ProductInformation{
	    public $ArticleType;
	    public $IsActive;
	}
	
	class GetProductInformation{
		public $ownArticleNumber;
	    public function __construct($ownArticleNumber){
		$this->ownArticleNumber = $ownArticleNumber;
	    }
	}
	
	class GetProductInformationResponse{
		/**
			@var ProductInformation
		*/
		public $GetProductInformationResult;
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

    
//    print_r($result);
?>