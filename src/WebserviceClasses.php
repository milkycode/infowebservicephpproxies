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

class LocalizedItem {
	/**
	 * 
	 * @var string
	 */
	public $Description;
	/**
	 * 
	 * @var string
	 */
	public $Show;
	
	/**
	 * 
	 * @var ArrayOfLocalizationItem
	 */
	public $Texts;
}

class ArrayOfLocalizationItem{
	/**
	 * 
	 * @var LocalizationItem[]
	 */
	public $LocalizationItem;	
} 

class LocalizationItem{
	
	/**
	 * 
	 * @var string
	 */	
	public $Description;
	
	/**
	 * 
	 * @var string
	 */	
	public $Language;
	
	/**
	 * 
	 * @var string
	 */	
	public $Show;
}

class GetProductPricesRequest{
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
	 * @var ArrayOfProductPriceInformation
	 */
	public $GetProductPricesResult;
}

class GetProductInformationRequest{
	
	/**
	 * 
	 * @var string
	 */	
	public $ownArticleNumber;
	
	function __construct($productNumber){
		$this->ownArticleNumber = $productNumber;
	}
}

class GetExpectedStockMovementRequest{
	/**
	 * 
	 * @var ProductIdentifier
	 */
	public $productIdentifier;

	/**
	 * 
	 * @param ProductIdentifier $productIdentifier
	 */
	function __construct($productIdentifier){
		$this->productIdentifier = $productIdentifier;
	}
}

class ExpectedStockMovementResponse{
	/**
	 * 
	 * @var ExpectedStockMovement[]
	 */
	public $GetExpectedStockMovementResult;	
}

class ExpectedStockMovement{
	/**
	 * 
	 * @var boolean
	 */
	public $MayBePrefered;
	
	/**
	 * 
	 * @var dateTime
	 */
	public $MovementDate;
	
	/**
	 * 
	 * @var string
	 */
	public $ProductNumber;
	/**
	 * 
	 * @var decimal
	 */
	public $Quantity;
	
	/**
	 * 
	 * @var string
	 */
	public $QuantityUnit;
}


class GetProductPriceListRequest{

	/**
	 * 
	 * @var ProductIdentifier
	 */
	public $productIdentifier;

	/**
	 * 
	 * @param ProductIdentifier $productIdentifier
	 */
	function __construct($productIdentifier){
		$this->productIdentifier = $productIdentifier;
	}
}

class ArrayOfProductPriceInformation
{
	/**
	 * 
	 * @var ProductPriceInformation[]
	 */
	public $ProductPriceInformation;
}

class GetProductPriceListResponse{
	/**
	 * 
	 * @var ArrayOfProductPriceInformation
	 */
	public $GetProductPriceListResult;	
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
	/**
	 * 
	 * @var string
	 */
	public $ArticleLanguageType;
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

class ShowDescriptionItem{

	/**
	 * 
	 * @var string
	 */
	public $Description;
	
	/**
	 * 
	 * @var string
	 */
	public $Show;
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
	 * @var ArrayOfProductPriceInformation
	 */
	public $BuyingRelais;
	
	/**
	 * 
	 * @var ArrayOfTranslationItem
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
	 * @var ArrayOfProductPriceInformation
	 */
	public $SellingRelays;
	
	/**
	 * 
	 * @var ArrayOfTranslationItem
	 */
	public $SizeNames;
	
}

class ArrayOfArticleTextItem{
	/**
	 * 
	 * @var ArticleTextItem
	 */
	public $ArticleTextItem;
}

class GetExpectedStockMovementResponse{
	/**
	 * 
	 * @var ArrayOfExpectedStockMovement
	 */
	public $GetExpectedStockMovementResult;
}

class ArrayOfExpectedStockMovement{
	/**
	 * 
	 * @var ExpectedStockMovement[]
	 */
	public $ExpectedStockMovement;
}
class ArrayOfTranslationItem{
	/**
	 * 
	 * @var TranslationItem[]
	 */
	public $TranslationItem;
}
class ArrayOfColorSizeCombination{
	/**
	 * 
	 * @var ColorSizeCombination[]
	 */
	public $ColorSizeCombination;
}

class anyURI{
	/**
	 * 
	 * @var string
	 */
	public $url;
}
class ArrayOfanyURI{

	/**
	 * 
	 * @var anyURI[]
	 */
	public $anyURI;
}

class ProductInformation
{
	/**
	 * 
	 * @var ArrayOfShowDescriptionItem
	 */
	public $ArticleGroups;
	/**
	 * 
	 * @var ArrayOfShowDescriptionItem
	 */
	public $ArticleTexts;
	public $ArticleType;
	/**
	 * 
	 * @var ArrayOfanyURI
	 */	
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
	 * @var ArrayOfColorSizeCombination
	 */
	public $ColorSizeCombinations;
	
	/**
	 * 
	 * @var DateTime
	 */
	
	public $DateInsert;
	
	/**
	 * 
	 * @var ArrayOfShowDescriptionItem
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

class GetCustomerInformationRequest{
	/**
	 * 
	 * @var CustomerIdentifier
	 */
	public $identifierV1;
	

	/**
	 * 
	 * @param CustomerIdentifier $customerIdentifier
	 */
	function __construct($customerIdentifier){
		$this->identifierV1 = $customerIdentifier;
	}
}

class GetCustomerInformationResponse{
	/**
	 * 
	 * @var CustomerInformation
	 */
	public $GetCustomerInformationResult;
}

class CustomerInformation{
	/**
	 * 
	 * @var ArrayOfSimpleAddress
	 */
	public $Adresses;
	
	/**
	 * 
	 * @var long
	 */
	public $AgentId;
	
	/**
	 * 
	 * @var ArrayOfContactDetail
	 */
	public $ContactDetails;

	/**
	 * 
	 * @var ArrayOfContactPersonInformation
	 */
	public $ContactPersons;
	
	/**
	 * 
	 * @var int
	 */
	public $CreditLimitTotal;
	

	/**
	 * 
	 * @var decimal
	 */
	public $CreditLimitUsed;
	
	/**
	 * 
	 * @var string
	 */
	public $CurrencyName;
	/**
	 * 
	 * @var string
	 */
	public $DebitorNumber;

	/**
	 * 
	 * @var LocalizedItem
	 */
	public $DeliveryTerm;
	
	/**
	 *
	 * @var LocalizedItem
	 */
	public $DispatchType;
	
	/**
	 * 
	 * @var string
	 */
	public $EMail;	
	
	/**
	 * 
	 * @var string
	 */
	public $Fax;
	
	/**
	 * 
	 * @var string
	 */
	public $Homepage;
	
	/**
	 * 
	 * @var CustomerIdentifier
	 */
	public $IdentifierV1;
	
	/**
	 * 
	 * @var boolean
	 */
	public $IsActive;
	
	/**
	 * 
	 * @var string
	 */
	public $Language;
	
	/**
	 * 
	 * @var string
	 */
	public $Name;
	
	/**
	 * 
	 * @var string
	 */
	public $NameAffex;
	
	/**
	 * 
	 * @var string
	 */
	public $Notice;
	
	/**
	 * 
	 * @var ArrayOfPaymentInformation
	 */
	public $PaymentModes;
	
	/**
	 * 
	 * @var string
	 */
	public $Phone;
	
	/**
	 * 
	 * @var string
	 */
	public $SalesTaxNumber;
	
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
	public $Skype;
	
	/**
	 * 
	 * @var string
	 */
	public $Warning;	
}

class ArrayOfContactPersonInformation{
	/**
	 * 
	 * @var ContactPersonInformation[]
	 */
	public $ContactPersonInformation;
}

class ContactPersonInformation{
	/** 
	 * 
	 * @var ArrayOfShowDescriptionItem
	 */
	public $AdditionalMailingSigns;
	
	/**
	 * 
	 * @var string
	 */
	public $AlternativeSalutation;
	
	/**
	 * 
	 * @var DateTime
	 */
	public $Birthday;
	/**
	 * 
	 * @var ArrayOfContactDetail
	 */
	public $ContactDetails;
	
	/**
	 * 
	 * @var string
	 */
	public $FirstName;
	
	/**
	 * 
	 * @var Gender
	 */
	public $Gender;
	
	/**
	 * 
	 * @var CustomerIdentifier
	 */
	public $IdentifierV1;
	
	/**
	 * 
	 * @var string
	 */
	public $Initials;
	
	/**
	 * 
	 * @var boolean
	 */
	public $IsMailRecipient;

	/**
	 *
	 * @var boolean
	 */	
	public $IsMain;
	
	/**
	 * 
	 * @var string
	 */
	public $Language;
	
	/**
	 * 
	 * @var string
	 */
	public $LastName;
	
	/**
	 * 
	 * @var ArrayOfShowDescriptionItem
	 */
	public $MailingSigns;
	
	/**
	 * 
	 * @var string
	 */
	public $NameAffex;
	
	/**
	 * 
	 * @var string
	 */
	public $Notice;
	
	/**
	 * 
	 * @var string
	 */
	public $Salutation;
	
	/**
	 * 
	 * @var ArrayOfShowDescriptionItem
	 */
	public $SecondaryMailingSigns;	
}

class ArrayOfShowDescriptionItem{
	/**
	 * 
	 * @var ShowDescriptionItem[]
	 */
	public $ShowDescriptionItem;
}


class ArrayOfPaymentInformation{
	/**
	 * 
	 * @var PaymentInformation[]
	 */
	public $PaymentInformation;	
}

class PaymentInformation{

	/**
	 * 
	 * @var unsignedByte
	 */
	public $Days;
	
	/**
	 * 
	 * @var decimal
	 */
	public $Deposit;
	
	/**
	 * 
	 * @var string
	 */
	public $Description;
	
	/**
	 * 
	 * @var string
	 */
	public $Show;
	
	/**
	 * 
	 * @var unsignedByte
	 */
	public $Skonto;
}

class ArrayOfContactDetail{
	/**
	 * 
	 * @var ContactDetail[]
	 */
	public $ContactDetail;
}

class ContactDetail{

	/**
	 * 
	 * @var CustomerIdentifier
	 */
	public $IdentifierV1;
	
	/**
	 * 
	 * @var boolean
	 */
	public $IsMain;
	/**
	 * 
	 * @var string
	 */
	public $Type;
	
	/**
	 * 
	 * @var string
	 */
	public $Value;	
}

class ArrayOfSimpleAddress{
	/**
	 * 
	 * @var SimpleAddress[]
	 */
	public $SimpleAddress;
}

class SimpleAddress{
	
	/**
	 * 
	 * @var string
	 */
	public $AddressType;
	
	/**
	 * 
	 * @var string
	 */
	public $City;
	
	/**
	 * 
	 * @var string
	 */
	public $CountryName;
	
	/**
	 * 
	 * @var boolean
	 */
	public $IsMainAdress;
	
	/**
	 * 
	 * @var string
	 */
	public $Line1;
	
	/**
	 * 
	 * @var string
	 */
	public $Line2;
	
	/**
	 * 
	 * @var string
	 */
	public $Line3;
	
	/**
	 * 
	 * @var string
	 */
	public $Name;
	
	/**
	 * 
	 * @var string
	 */
	public $NameAffex;
	
	/**
	 * 
	 * @var string
	 */
	public $PostCode;
	
	/**
	 * 
	 * @var string
	 */
	public $Street;
	
	/**
	 * 
	 * @var string
	 */
	public $StreetNumber;
}



class GetCustomerInformationListRequest
{
	/**
	 * 
	 * @var dateTime
	 */
	public $startDate;
	
	/**
	 * 
	 * @param dateTime $startDate
	 */
	function __construct($startDate){
		$this->startDate = $startDate;
	}
}

class GetCustomerInformationListResponse{
	/**
	 * 
	 * @var ArrayOfCustomerInformation
	 */
	public $GetCustomerInformationListResult;
}

class ArrayOfCustomerInformation{
	
	/**
	 * 
	 * @var CustomerInformation[]
	 */
	public $CustomerInformation;
}

class GetUserInformationRequest{
	
}

class GetUserInformationResponse{
	/**
	 * 
	 * @var ArrayOfUserInformation
	 */
	public $GetUserInformationResult;	
}

class ArrayOfUserInformation{
	/**
	 * 
	 * @var UserInformation[]
	 */
	public $UserInformation;
}

class UserInformation{
	/**
	 * 
	 * @var string
	 */
	public $Email;
	/**
	 * 
	 * @var string
	 */
	public $Fax;
	/**
	 * 
	 * @var string
	 */
	public $FirstName;
	/**
	 * 
	 * @var string
	 */
	public $Language;
	/**
	 * 
	 * @var string
	 */
	public $LastName;
	/**
	 * 
	 * @var string
	 */
	public $Phone;
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
	 * @var string
	 */
	public $ShortName;
	/**
	 * 
	 * @var long
	 */
	public $UserId;
	
}

class GetCustomerPriceListRequest{
	/**
	 * 
	 * @var CustomerIdentifier
	 */
	public $identifier;	
	
	/**
	 * 
	 * @param CustomerIdentifier $customerIdentifier
	 */
	function __construct($customerIdentifier){
		$this->identifier = $customerIdentifier;
	}
}

class GetCustomerPriceListResponse{
	/**
	 * 
	 * @var ArrayOfProductPriceInformation
	 */
	public $GetCustomerPriceListResult;
}

class GetPossibleAutomaticConditionListRequest{
	/**
	 * 
	 * @var TenderIndentImporterData
	 */
	public $importdata;
	/**
	 * 
	 * @var ArrayOfstring
	 */
	public $possibleDispatchTypes;
	
	/**
	 * 
	 * @param TenderIndentImporterData $importData
	 * @param ArrayOfstring $possibleDispatchTypes
	 */
	function __construct($importData, $possibleDispatchTypes){
		$this->importdata = $importData;
		$this->possibleDispatchTypes = $possibleDispatchTypes;
	}
}

class GetPossibleAutomaticConditionListResponse{
	/**
	 * 
	 * @var GetPossibleAutomaticConditionListResult
	 */
	public $GetPossibleAutomaticConditionListResult;
}

class GetPossibleAutomaticConditionListResult{
	/**
	 * 
	 * @var long
	 */
	public $CalculatedNumberOfPackages;
	/**
	 * 
	 * @var long
	 */
	public $CalculatedTotalVolume;
	/**
	 * 
	 * @var long
	 */
	public $CalculatedTotalWeight;
	/**
	 * 
	 * @var ArrayOfAutomaticCondition
	 */
	public $PossibleAutomaticConditionList;
	/**
	 * 
	 * @var boolean
	 */
	public $SaleTaxIsCalculated;	
}

class ArrayOfAutomaticCondition{
	/**
	 * 
	 * @var AutomaticCondition[]
	 */
	public $AutomaticCondition;
}

class AutomaticCondition{
	
	/**
	 * 
	 * @var string
	 */
	public $AutomaticDeliveryConditionDescription;
	/**
	 * 
	 * @var Guid
	 */
	public $AutomaticDeliveryConditionId;
	/**
	 * 
	 * @var string
	 */
	public $DeliveryTermShow;
	/**
	 * 
	 * @var string
	 */
	public $DispatchTypeDescription;
	/**
	 * 
	 * @var string
	 */
	public $DispatchTypeShow;
	/**
	 * 
	 * @var string
	 */
	public $ExpenseName;
	/**
	 * 
	 * @var string
	 */
	public $ExpenseNumber;
	/**
	 * 
	 * @var string
	 */
	public $ExpensePrice;
	/**
	 * 
	 * @var decimal
	 */
	public $SpecialPriceForPositions;
	
}
class TenderIndentImporterData{
	/**
	 * 
	 * @var Guid
	 */
	public $AutomaticDeliveryConditionId;
	/**
	 * 
	 * @var boolean
	 */
	public $AvailabilityCheckEnabled;
	/**
	 * 
	 * @var string
	 */
	public $Categorie;
	/**
	 * 
	 * @var string
	 */
	public $CustomerText;
	/**
	 * 
	 * @var long
	 */
	public $DebitorNumber;
	/**
	 * 
	 * @var TenderIndentImporterAddressData
	 */
	public $DeliveryAddress;
	/**
	 * 
	 * @var string
	 */
	public $DeliveryTerm;
	/**
	 * 
	 * @var string
	 */
	public $DispatchType;
	/**
	 * 
	 * @var string
	 */
	public $FooterText;
	/**
	 * 
	 * @var string
	 */
	public $HeaderText;
	/**
	 * 
	 * @var string
	 */
	public $ImportType;
	/**
	 * 
	 * @var string
	 */
	public $ImportTypePrefix;
	/**
	 * 
	 * @var string
	 */
	public $ImportTypeSuffix;	
	/**
	 * 
	 * @var TenderIndentImporterAddressData
	 */
	public $InvoiceAddress;
	/**
	 * 
	 * @var string
	 */
	public $Notice;	
	/**
	 * 
	 * @var ArrayOfstring
	 */
	public $PaymentModeList;	
	/**
	 * 
	 * @var ArrayOfTenderIndentImporterPositionData
	 */
	public $PositionList;
	/**
	 * 
	 * @var TenderIndentImporterAddressData
	 */
	public $PostAddress;
	/**
	 * 
	 * @var string
	 */
	public $StorageLocation;
	/**
	 * 
	 * @var string
	 */
	public $Warning;	
}

class TenderIndentImporterAddressData{
	/**
	 * 
	 * @var string
	 */
	public $AlternativeSalutation ;
	/**
	 * 
	 * @var string
	 */
	public $City ;
	/**
	 * 
	 * @var string
	 */
	public $CompanyName ;
	/**
	 * 
	 * @var string
	 */
	public $CompanyNameAffex ;
	/**
	 * 
	 * @var string
	 */
	public $CountryIsoCode ;
	/**
	 * 
	 * @var string
	 */
	public $DispatchTip ;
	/**
	 * 
	 * @var string
	 */
	public $EMail ;
	/**
	 * 
	 * @var string
	 */
	public $FaxNumber ;
	/**
	 * 
	 * @var string
	 */
	public $FirstName ;
	/**
	 * 
	 * @var GenderType
	 */
	public $Gender ;
	/**
	 * 
	 * @var string
	 */
	public $Initial ;
	/**
	 * 
	 * @var string
	 */
	public $Language ;
	/**
	 * 
	 * @var string
	 */
	public $LastName ;
	/**
	 * 
	 * @var string
	 */
	public $Line1 ;
	/**
	 * 
	 * @var string
	 */
	public $Line2 ;
	/**
	 * 
	 * @var string
	 */
	public $Line3 ;
	/**
	 * 
	 * @var string
	 */
	public $PhoneNumber ;
	/**
	 * 
	 * @var string
	 */
	public $PostCode ;
	/**
	 * 
	 * @var string
	 */
	public $Salutation ;
	/**
	 * 
	 * @var string
	 */
	public $Street ;
	/**
	 * 
	 * @var string
	 */
	public $StreetNumber ;
	/**
	 * 
	 * @var string
	 */
	public $UstId ;	
}

class ArrayOfTenderIndentImporterPositionData{
	/**
	 * 
	 * @var $TenderIndentImporterPositionData[]
	 */
	public $TenderIndentImporterPositionData;
}

class TenderIndentImporterPositionData{
	/**
	 * 
	 * @var ArrayOfTenderIndentImporterBettermentData
	 */
	public $BettermentList;
	/**
	 * 
	 * @var decimal
	 */
	public $BuyingPricePerUnit;
	/**
	 * 
	 * @var ArrayOfTenderIndentImporterRelayData
	 */
	public $BuyingRelayList;
	/**
	 * 
	 * @var string
	 */
	public $CustomerArticleDeliverynoteText;
	/**
	 * 
	 * @var string
	 */
	public $CustomerArticleDescription;
	/**
	 * 
	 * @var string
	 */
	public $CustomerArticleIndentText;
	/**
	 * 
	 * @var string
	 */
	public $CustomerArticleName;
	/**
	 * 
	 * @var string
	 */
	public $CustomerArticleTenderText;
	/**
	 * 
	 * @var string
	 */
	public $CustomerArticleTextIntern;
	/**
	 * 
	 * @var boolean
	 */
	public $DirectDispatch;
	/**
	 * 
	 * @var decimal
	 */
	public $Discount;
	/**
	 * 
	 * @var DateTime
	 */
	public $EarliestDeliveryDate;
	/**
	 * 
	 * @var boolean
	 */
	public $IsStockArticle;
	/**
	 * 
	 * @var DateTime
	 */
	public $LatestDeliveryDate;
	/**
	 * 
	 * @var string
	 */
	public $MyArticleNumber;
	/**
	 * 
	 * @var boolean
	 */
	public $PrintPosition;
	/**
	 * 
	 * @var boolean
	 */
	public $PrintPricePerUnit;
	/**
	 * 
	 * @var decimal
	 */
	public $Quantity;
	/**
	 * 
	 * @var string
	 */
	public $QuantityUnit;
	/**
	 * 
	 * @var decimal
	 */
	public $SellingPricePerUnit;
	/**
	 * 
	 * @var ArrayOfTenderIndentImporterRelayData
	 */
	public $SellingRelayList;
	/**
	 * 
	 * @var string
	 */
	public $SupplierName;	
}

class ArrayOfstring{
	/**
	 * 
	 * @var string[]
	 */
	public $string;
}

class ArrayOfTenderIndentImporterBettermentData{
	/**
	 * 
	 * @var TenderIndentImporterBettermentData[]
	 */
	public $TenderIndentImporterBettermentData;
}
class TenderIndentImporterBettermentData{
	
	/**
	 * 
	 * @var decimal
	 */
	public $BuyingPricePerUnit;
	/**
	 * 
	 * @var ArrayOfTenderIndentImporterRelayData
	 */
	public $BuyingRelayList;
	/**
	 * 
	 * @var string
	 */
	public $CustomerArticleDeliverynoteText;
	/**
	 * 
	 * @var string
	 */
	public $CustomerArticleDescription;
	/**
	 * 
	 * @var string
	 */
	public $CustomerArticleIndentText;
	/**
	 * 
	 * @var string
	 */
	public $CustomerArticleName;
	/**
	 * 
	 * @var string
	 */
	public $CustomerArticleTenderText;
	/**
	 * 
	 * @var string
	 */
	public $CustomerArticleTextIntern;
	
	/**
	 * 
	 * @var boolean
	 */
	public $DirectDispatch;
	/**
	 * 
	 * @var decimal
	 */
	public $Discount;
	
	/**
	 * 
	 * @var string
	 */
	public $MyArticleNumber;
	/**
	 * 
	 * @var boolean
	 */
	public $PrintPosition;
	/**
	 * 
	 * @var boolean
	 */
	public $PrintPricePerUnit;
	/**
	 * 
	 * @var decimal
	 */
	public $SellingPricePerUnit;
	/**
	 * 
	 * @var ArrayOfTenderIndentImporterRelayData
	 */
	public $SellingRelayList;
	/**
	 * 
	 * @var decimal
	 */
	public $SetupCostBuyingPrice;
	/**
	 * 
	 * @var string
	 */
	public $SetupCostDescription;
	/**
	 * 
	 * @var decimal
	 */
	public $SetupCostSellingPrice;
	/**
	 * 
	 * @var string
	 */
	public $SupplierName;
	
}
class ArrayOfTenderIndentImporterRelayData{
	/**
	 * 
	 * @var TenderIndentImporterRelayData[]
	 */
	public $TenderIndentImporterRelayData;
}

class TenderIndentImporterRelayData{
	/**
	 * 
	 * @var boolean
	 */
	public $IsCompletePrice;
	
	/**
	 * 
	 * @var int
	 */
	public $Quantity;
	
	/**
	 * 
	 * @var decimal
	 */
	public $SellingPricePerUnit;
}

class GetArticleNumberListByArticleGroupRequest
{
	
	/**
	 * 
	 * @var string
	 */
	public $articleGroupName;
	
	/**
	 * 
	 * @param string $productGroupName
	 */
	function __construct($productGroupName){
		$this->articleGroupName = $productGroupName;
	}
}

class GetArticleNumberListByArticleGroupResponse{
	/**
	 * 
	 * @var ArrayOfstring
	 */
	public $GetArticleNumberListByArticleGroupResult;
}
?>