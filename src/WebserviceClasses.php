<?php 

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

class LogonResponse
{
	/**
	 * 
	 * @var string
	 */	
	public $LogonResult;
}

class GetProductPrices{
	/**
	 * 
	 * @var CustomerIdentifier
	 */
	public $customerIdentifier;
	/**
	 * 
	 * @var ProductIdentifier
	 */
	public $productIdentifier;

	/**
	 * 
	 * @param CustomerIdentifier $customerIdentifier
	 * @param ProductIdentifier $productIdentifier
	 */
	function __construct($customerIdentifier, $productIdentifier){
		$this->customerIdentifier = $customerIdentifier;
		$this->productIdentifier = $productIdentifier;
	}
}

class GetProductPricesResponse{
	/**
	 * 
	 * @var ProductPriceInformation[]
	 */
	public $GetProductPricesResult;
}

class GetProductInformation{
	/**
	 * 
	 * @var string
	 */	
	public $ownArticleNumber;
	
	function __construct($productNumber){
		$this->ownArticleNumber = $productNumber;
	}
}

class GetProductInformationResponse
{
	/**
	 * 
	 * @var ProductInformation
	 */
	public $GetProductInformationResult;
}

class ArticleTextItem
{
	public $ArticleLanguageType;
	public $Language;
	public $Value;
}

class ShowDescriptionItem{
}

class TranslationItem{

	/**
	 * 
	 * @var string
	 */
	public $Language;
	/**
	 * 
	 * @var string
	 */
	public $Value;
}

class ProductPriceInformation{
	
	/**
	 * 
	 * @var string
	 */
	public $ArticleNumber;
	/**
	 * 
	 * @var string
	 */
	public $CustomerNumber;
	
	/**
	 * 
	 * @var decimal
	 */
	public $CustomerSpecificSellingPrice;
	/**
	 * 
	 * @var decimal
	 */
	public $Discount;
	/**
	 * 
	 * @var long
	 */
	public $Quantity;
	/**
	 * 
	 * @var boolean
	 */
	public $QuantityDependentPrice;

	/**
	 * 
	 * @var decimal
	 */
	public $RegularPrice;		
}

class ColorSizeCombination{
	
	
	/**
	 * 
	 * @var ProductPriceInformation[]
	 */
	public $BuyingRelais;
	
	/**
	 * 
	 * @var TranslationItem[]
	 */
	public $ColorNames;
	
	/**
	 * 
	 * @var decimal
	 */
	public $CurrentStockPrice;
	
	/**
	 * 
	 * @var decimal
	 */
	public $DefaultPurchasingCosts;
	
	/**
	 * 
	 * @var string
	 */
	public $EanCode;
	
	/**
	 * 
	 * @var string
	 */
	public $FreeText1;
	
		/**
	 * 
	 * @var string
	 */
	public $FreeText2;

	/**
	 * 
	 * @var string
	 */
	public $FreeText3;

		/**
	 * 
	 * @var string
	 */
	public $Notice;

	/**
	 * 
	 * @var string
	 */
	public $OrderNumberAddition;

	/**
	 * 
	 * @var string
	 */
	public $OwnArticleNumberAddition;
	
	/**
	 * 
	 * @var ProductPriceInformation[]
	 */
	public $SellingRelays;
	
	/**
	 * 
	 * @var TranslationItem[]
	 */
	public $SizeNames;
	
}

class ProductInformation
{
	/**
	 * 
	 * @var ShowDescriptionItem[]
	 */
	public $ArticleGroups;
	/**
	 * 
	 * @var ShowDescriptionItem[]
	 */
	public $ArticleTexts;
	public $ArticleType;	
	public $AllPictureUrls;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField01;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField02;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField03;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField04;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField05;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField06;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField07;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField08;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField09;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField10;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField11;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField12;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField13;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField14;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField15;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField16;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField17;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField18;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField19;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField20;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField21;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField22;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField23;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField24;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField25;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField26;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField27;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField28;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField29;
	/**
	 * 
	 * @var string
	 */
	public $ArticleUserDefindedField30;

	/**
	 * 
	 * @var decimal
	 */
	public $BuyingPriceBaseQuantity;
	/**
	 * 
	 * @var string
	 */
	public $BuyingPriceBaseQuantityUnit;
	/**
	 * 
	 * @var ColorSizeCombination[]
	 */
	public $ColorSizeCombinations;
	
	/**
	 * 
	 * @var DateTime
	 */
	
	public $DateInsert;
	
	/**
	 * 
	 * @var ShowDescriptionItem[]
	 */
	public $Ideas;
	
	/**
	 * 
	 * @var ProductIdentifier
	 */
	public $IdentifierV1;

	/**
	 * 
	 * @var booelean
	 */
	public $IsActive;
	
	/**
	 * 
	 * @var DateTime
	 */
	public $LastChanged;
	/**
	 * 
	 * @var string
	 */
	public $Notice;
	/**
	 * 
	 * @var string
	 */
	public $OrderNumber;
	
	/**
	 * 
	 * @var string
	 */
	public $OwnArticleNumber;
	public $PictureUrl;
	/**
	 * 
	 * @var decimal
	 */
	public $PurchaseOrderBaseQuantity;
		/**
	 * 
	 * @var string
	 */
	public $PurchaseOrderBaseQuantityUnit;
		/**
	 * 
	 * @var string
	 */
	public $SelfDefined1;
		/**
	 * 
	 * @var string
	 */
	public $SelfDefined2;
		/**
	 * 
	 * @var string
	 */
	public $SelfDefined3;
		/**
	 * 
	 * @var string
	 */
	public $SelfDefined4;
		/**
	 * 
	 * @var string
	 */
	public $SelfDefined5;
		/**
	 * 
	 * @var decimal
	 */
	public $SellingPriceBaseQuantity;
		/**
	 * 
	 * @var string
	 */
	public $SellingPriceBaseQuantityUnit;
		/**
	 * 
	 * @var string
	 */
	public $SupplierCurrencyShow;
	/**
	 * 
	 * @var string
	 */
	public $SupplierName;
	/**
	 * 
	 * @var string
	 */
	public $Warning;
	
	/**
	 * 
	 * @var string
	 */
	public $WeightShow;
	
	/**
	 * 
	 * @var decimal
	 */
	public $WeightValue; 			
}

class CustomerIdentifier{
	/**
	 * 
	 * @var long
	 */
	public $CustomerId;
	/**
	 * 
	 * @var string
	 */
	public $CustomerNumber;
	
	/**
	 * 
	 * @param long $customerId
	 * @param string $customerNumber
	 */
	function __construct($customerId, $customerNumber){
		$this->CustomerId = $customerId;
		$this->CustomerNumber = $customerNumber;
	}
}

class ProductIdentifier {
	
	/**
	 * 
	 * @var long
	 */
	public $ProductId;
	
	/**
	 * 
	 * @var string
	 */
	public $ProductNumber;
	
	/**
	 * 
	 * @var guid
	 */	
	public $ProductUniqueId;
	
	/**
	 * 
	 * @param long $productId
	 * @param string $productNumber
	 * @param guid $productUniqueId
	 */
	function __construct($productId, $productNumber, $productUniqueId){
		$this->ProductId = $productId;
		$this->ProductNumber = $productNumber;
		$this->ProductUniqueId = $productUniqueId;
	}
}

?>