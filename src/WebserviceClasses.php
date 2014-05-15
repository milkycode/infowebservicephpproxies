<?php 

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

class ArrayOfArticleTextItem{
	/**
	 *
	 * @var ArticleTextItem[]
	 */
	public $ArticleTextItem;
}

class ArrayOfAutomaticCondition{
	/**
	 *
	 * @var AutomaticCondition[]
	 */
	public $AutomaticCondition;
}

class ArrayOfColorSizeCombination{
	/**
	 *
	 * @var ColorSizeCombination[]
	 */
	public $ColorSizeCombination;
}

class ArrayOfContactDetail{
	/**
	 *
	 * @var ContactDetail[]
	 */
	public $ContactDetail;
}

class ArrayOfContactPersonInformation{
	/**
	 *
	 * @var ContactPersonInformation[]
	 */
	public $ContactPersonInformation;
}

class ArrayOfCustomerInformation{

	/**
	 *
	 * @var CustomerInformation[]
	 */
	public $CustomerInformation;
}

class ArrayOfExpectedStockMovement{
	/**
	 *
	 * @var ExpectedStockMovement[]
	 */
	public $ExpectedStockMovement;
}

class ArrayOfLocalizationItem{
	/**
	 *
	 * @var LocalizationItem[]
	 */
	public $LocalizationItem;
}

class ArrayOfPaymentInformation{
	/**
	 *
	 * @var PaymentInformation[]
	 */
	public $PaymentInformation;
}

class ArrayOfProductPriceInformation
{
	/**
	 *
	 * @var ProductPriceInformation[]
	 */
	public $ProductPriceInformation;
}

class ArrayOfShowDescriptionItem{
	/**
	 *
	 * @var ShowDescriptionItem[]
	 */
	public $ShowDescriptionItem;
}

class ArrayOfSimpleAddress{
	/**
	 *
	 * @var SimpleAddress[]
	 */
	public $SimpleAddress;
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

class ArrayOfTenderIndentImporterPositionData{
	/**
	 *
	 * @var $TenderIndentImporterPositionData[]
	 */
	public $TenderIndentImporterPositionData;
}

class ArrayOfTenderIndentImporterRelayData{
	/**
	 *
	 * @var TenderIndentImporterRelayData[]
	 */
	public $TenderIndentImporterRelayData;
}

class ArrayOfTranslationItem{
	/**
	 * 
	 * @var TranslationItem[]
	 */
	public $TranslationItem;
}

class ArrayOfUserInformation{
	/**
	 *
	 * @var UserInformation[]
	 */
	public $UserInformation;
}

/**
 * \brief Class to represent a procuct text in a specified language
 * @author Achim Kuntz
 */
class ArticleTextItem
{
	/**
	 * @brief The type of the text. Possible values are ArticleName, ArticleDescription, SupplierText, InternText, TenderPositionText, IndentConfirmationText, PackingListInvoiceText, WebshopDescription
	 * @var string 
	 */
	public $ArticleLanguageType;
	/**
	 * @brief The language of the item. e.g. 'de' or 'nl'
	 * @var string 
	 */
	public $Language;
	/**
	 * @brief The text from the product in the specified language
	 * @var string 
	 */
	public $Value;
}

/**
 * \brief Class to represent a automatic deliverx condition
 * 
 * This condition can be set up in Promotional Office to automaticaly assign different values in a indent.
 * e.G.: Add a expense product to a indent with less than one pakage
 * @author Achim Kuntz
 */
class AutomaticCondition{

	/**
	 * @brief The Description of the AutomaticCondition
	 * @var string
	 */
	public $AutomaticDeliveryConditionDescription;
	/**
	 * @brief A Guid to identify the AutomaticCondition
	 * @var Guid
	 */
	public $AutomaticDeliveryConditionId;
	/**
	 * @brief The show value of the deliveryterm needet for this AutomaticCondition 
	 * Null if no deliveryterm is needed to select this AutomaticCondition
	 * @var string
	 */
	public $DeliveryTermShow;
	/**
	 * @brief The description value of the dispatch type used in this AutomaticCondition
	 * @var string
	 */
	public $DispatchTypeDescription;
	/**
	 * @brief The show value of the dispatch type selected by this AutomaticCondition
	 * Null if no dispatch type will be selected by this AutomaticCondition
	 * @var string
	 */
	public $DispatchTypeShow;
	/**
	 * @brief The name of the expense product added by this AutomaticCondition
	 * Null if no expense product will be added by this AutomaticCondition
	 * @var string
	 */
	public $ExpenseName;
	/**
	 * @brief The purchase order number of the expense product added by this AutomaticCondition
	 * Null if no expense product will be added by this AutomaticCondition
	 * @var string
	 */
	public $ExpenseNumber;
	/**
	 * @brief The price per unit of the expense product added by this AutomaticCondition
	 * Null if no expense product will be added by this AutomaticCondition
	 * @var string
	 */
	public $ExpensePrice;
	/**
	 * @brief The special price per unit assignedd to all products by this AutomaticCondition
	 * Null if no price is set
	 * @var decimal
	 */
	public $SpecialPriceForPositions;

}

/**
 * \brief Class to represent a color size combination of a product
 * 
 * @author Achim Kuntz
 */
class ColorSizeCombination{


	/**
	 * @brief The available buying relays for this ColorSizeCombination 
	 * @var ArrayOfProductPriceInformation
	 */
	public $BuyingRelais;

	/**
	 * @brief The available translations for the color name
	 * @var ArrayOfTranslationItem
	 */
	public $ColorNames;

	/**
	 * @brief The current stock price
	 * @var decimal
	 */
	public $CurrentStockPrice;

	/**
	 * @brief The default purchasing costs
	 * @var decimal
	 */
	public $DefaultPurchasingCosts;

	/**
	 * @brief The EAN code for this ColorSizeCombination of the product
	 * @var string
	 */
	public $EanCode;

	/**
	 * @brief A free text field
	 * @var string
	 */
	public $FreeText1;

	/**
	 * @brief A free text field
	 * @var string
	 */
	public $FreeText2;

	/**
	 * @brief A free text field
	 * @var string
	 */
	public $FreeText3;

	/**
	 * @brief The notice for this ColorSizeCombination
	 * @var string
	 */
	public $Notice;

	/**
	 * @brief The additional purchase order number for this ColorSizeCombination appendet to the product order number when ordering the product
	 * @var string
	 */
	public $OrderNumberAddition;

	/**
	 * @brief The additional own product number for this ColorSizeCombination appendet to the product own product number when ordering the product
	 * @var string
	 */
	public $OwnArticleNumberAddition;

	/**
	 * @brief The available selling relays for this ColorSizeCombination
	 * @var ArrayOfProductPriceInformation
	 */
	public $SellingRelays;

	/**
	 * @brief The available translations for the size name
	 * @var ArrayOfTranslationItem
	 */
	public $SizeNames;

}

/**
 * \brief Class to represent a contact detail of a customer or contact person
 * 
 * @author Achim Kuntz
 */
class ContactDetail{

	/**
	 * @brief unused
	 * @var CustomerIdentifier
	 */
	public $IdentifierV1;

	/**
	 * @brief unused
	 * @var boolean
	 */
	public $IsMain;
	/**
	 * @brief The type of the ContactDetail.
	 * Possible values: Phone,Fax,Mobil,Skype,EMail,Homepage
	 * @var string
	 */
	public $Type;

	/**
	 * @brief The value of the ContactDetail
	 * @var string
	 */
	public $Value;
}

/**
 * \brief Class to represent contact person of a customer
 * 
 * @author Achim Kuntz
 */
class ContactPersonInformation{
	/**
	 * @brief The additional mailing signs assigned to the contact person 
	 * @var ArrayOfShowDescriptionItem
	 */
	public $AdditionalMailingSigns;

	/**
	 * @brief The alternative salutation
	 * @var string
	 */
	public $AlternativeSalutation;

	/**
	 * @brief The day of birth
	 * @var DateTime
	 */
	public $Birthday;
	/**
	 * @brief The ContactDetail's of the contact persons
	 * @var ArrayOfContactDetail
	 */
	public $ContactDetails;

	/**
	 * @brief The first name
	 * @var string
	 */
	public $FirstName;

	/**
	 * @brief The gender. Possible values: Male, Female
	 * @var Gender
	 */
	public $Gender;

	/**
	 * @brief unused
	 * @var CustomerIdentifier
	 */
	public $IdentifierV1;

	/**
	 * @brief The initials
	 * @var string
	 */
	public $Initials;

	/**
	 * @brief True if the contact person can receive mails via the mail system
	 * @var boolean
	 */
	public $IsMailRecipient;

	/**
	 * @brief True if this is the main contact person
	 * @var boolean
	 */
	public $IsMain;

	/**
	 * @brief The language in system code like 'de' or 'nl'
	 * @var string
	 */
	public $Language;

	/**
	 * @brief The last name
	 * @var string
	 */
	public $LastName;

	/**
	 * @brief The mailing signs assigned to the contact person 
	 * @var ArrayOfShowDescriptionItem
	 */
	public $MailingSigns;

	/**
	 * @brief The additional name
	 * @var string
	 */
	public $NameAffex;

	/**
	 * @brief The notice
	 * @var string
	 */
	public $Notice;

	/**
	 * @brief The salutaion
	 * @var string
	 */
	public $Salutation;

	/**
	 * @brief The secondary mailing signs assigned to the contact person
	 * @var ArrayOfShowDescriptionItem
	 */
	public $SecondaryMailingSigns;
}

/**
 * \brief Class to identify a customer
 * 
 * @author Achim Kuntz
 */
class CustomerIdentifier{
	/**
	 * @brief internal use only
	 * @var long
	 */
	public $CustomerId;
	/**
	 * @brief The debitornumber of the customer
	 * @var string
	 */
	public $CustomerNumber;

	/**
	 *
	 * @param long $customerId
	 * @param string $customerNumber The debitornumber of the customer
	 */
	function __construct($customerId, $customerNumber){
		$this->CustomerId = $customerId;
		$this->CustomerNumber = $customerNumber;
	}
}

/**
 * \brief Class to represent a customer
 * 
 * @author Achim Kuntz
 */
class CustomerInformation{
	/**
	 * @brief A list of SimpleAddress's from the customer 
	 * @var ArrayOfSimpleAddress
	 */
	public $Adresses;

	/**
	 * @brief The identifier of the agent responsible for this customer
	 * @var long
	 */
	public $AgentId;

	/**
	 * @brief The ContactDetail's of the customer 
	 * @var ArrayOfContactDetail
	 */
	public $ContactDetails;

	/**
	 * @brief The contact persons of the customer
	 * @var ArrayOfContactPersonInformation
	 */
	public $ContactPersons;

	/**
	 * @brief The credit limit the customer can use.
	 * 0 if not set
	 * @var int
	 */
	public $CreditLimitTotal;


	/**
	 * @brief The used amount of the credit limit
	 * @var decimal
	 */
	public $CreditLimitUsed;

	/**
	 * @brief The name of the currency the customer use
	 * @var string
	 */
	public $CurrencyName;
	/**
	 * @brief The debitor number
	 * @var string
	 */
	public $DebitorNumber;

	/**
	 * @brief The delivery term
	 * @var LocalizedItem
	 */
	public $DeliveryTerm;

	/**
	 * @brief The dispatch type
	 * @var LocalizedItem
	 */
	public $DispatchType;

	/**
	 * @brief unused
	 * @var string
	 */
	public $EMail;

	/**
	 * @brief unused
	 * @var string
	 */
	public $Fax;

	/**
	 * @brief unused
	 * @var string
	 */
	public $Homepage;

	/**
	 * @brief The identifier of the customer 
	 * @var CustomerIdentifier
	 */
	public $IdentifierV1;

	/**
	 * @brief True if the customer is active
	 * @var boolean
	 */
	public $IsActive;

	/**
	 * @brief The languag of the customer in system code. e.G. 'de' or 'nl'
	 * @var string
	 */
	public $Language;

	/**
	 * @brief The name
	 * @var string
	 */
	public $Name;

	/**
	 * @brief The name affex
	 * @var string
	 */
	public $NameAffex;

	/**
	 * @brief The notice
	 * @var string
	 */
	public $Notice;

	/**
	 * @brief The PaymentInformation's for the customer
	 * @var ArrayOfPaymentInformation
	 */
	public $PaymentModes;

	/**
	 * @brief unused
	 * @var string
	 */
	public $Phone;

	/**
	 * @brief The sales tax number
	 * @var string
	 */
	public $SalesTaxNumber;

	/**
	 * @brief A free field
	 * @var string
	 */
	public $SelfDefined1;

	/**
	 * @brief A free field
	 * @var string
	 */
	public $SelfDefined2;

	/**
	 * @brief A free field
	 * @var string
	 */
	public $SelfDefined3;

	/**
	 * @brief unused
	 * @var string
	 */
	public $Skype;

	/**
	 * @brief The warning
	 * @var string
	 */
	public $Warning;
}

/**
 * \brief Class to represent a stock movement
 * 
 * @author Achim Kuntz
 */
class ExpectedStockMovement{
	/**
	 * @brief True if the delivery can be made earlier
	 * @var boolean
	 */
	public $MayBePrefered;

	/**
	 * @brief The date of the stock movement. 
	 * @var dateTime
	 */
	public $MovementDate;

	/**
	 * @brief the number of the product
	 * @var string
	 */
	public $ProductNumber;
	/**
	 * @brief The quantity available on after the movement
	 * @var decimal
	 */
	public $Quantity;

	/**
	 * @brief The unit of the quantity
	 * @var string
	 */
	public $QuantityUnit;
}

class ExpectedStockMovementResponse{
	/**
	 *
	 * @var ExpectedStockMovement[]
	 */
	public $GetExpectedStockMovementResult;
}

class GetArticleNumberListByArticleGroupRequest
{

	/**
	 * @brief The show value of the product group
	 * @var string 
	 */
	public $articleGroupName;

	/**
	 *
	 * @param string $productGroupName The show value of the product group
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

class GetExpectedStockMovementResponse{
	/**
	 *
	 * @var ArrayOfExpectedStockMovement
	 */
	public $GetExpectedStockMovementResult;
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

class GetProductInformationResponse
{
	/**
	 *
	 * @var ProductInformation
	 */
	public $GetProductInformationResult;
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

class GetProductPriceListResponse{
	/**
	 *
	 * @var ArrayOfProductPriceInformation
	 */
	public $GetProductPriceListResult;
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

class GetUserInformationRequest{

}

class GetUserInformationResponse{
	/**
	 *
	 * @var ArrayOfUserInformation
	 */
	public $GetUserInformationResult;
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

class LogonRequest{
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
?>