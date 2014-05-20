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

class ArrayOfImportInformation{
	/**
	 *
	 * @var ImportInformation[]
	 */
	public $ImportInformation;
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
	 * @brief The identifier of the customer
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
	 * @brief The language of the item. e.g. 'de' or 'nl'
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
	 * @brief The main mail address of the customer
	 * @var string
	 */
	public $EMail;

	/**
	 * @brief The main fax number of the customer
	 * @var string
	 */
	public $Fax;

	/**
	 * @brief The main website url of the customer
	 * @var string
	 */
	public $Homepage;

	/**
	 * @brief The identifier of the customer 
	 * @var CustomerIdentifier
	 */
	public $IdentifierV1;

	/**
	 * @brief The import informations where the customer is imported from
	 * @var ArrayOfImportInformation
	 */
	public $ImportInformations;

	/**
	 * @brief True if the customer is active
	 * @var boolean
	 */
	public $IsActive;

	/**
	 * @brief The language of the item. e.g. 'de' or 'nl'
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
	 * @brief The main phone number of the customer
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
	 * @brief The main skype name of the customer
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
	 * @brief The identifier for the customer
	 * @var CustomerIdentifier
	 */
	public $identifierV1;


	/**
	 *
	 * @param CustomerIdentifier $customerIdentifier The identifier for the customer
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
	 * @brief The identifier for the customer
	 * @var CustomerIdentifier The identifier for the customer
	 */
	public $identifier;

	/**
	 *
	 * @param CustomerIdentifier $customerIdentifier The identifier for the customer
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
	 * @brief The identifier for the product
	 * @var ProductIdentifier
	 */
	public $productIdentifier;

	/**
	 *
	 * @param ProductIdentifier $productIdentifier The identifier for the product
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
	 * @brief The TenderIndentImporterData for with the possible AutomaticCondition's should be requested
	 * @var TenderIndentImporterData
	 */
	public $importdata;
	/**
	 * @brief The Short names of the dispatch types the AutoamticConditions should be filtered
	 * @var ArrayOfstring
	 */
	public $possibleDispatchTypes;

	/**
	 *
	 * @param TenderIndentImporterData $importData The TenderIndentImporterData for with the possible AutomaticCondition's should be requested
	 * @param ArrayOfstring $possibleDispatchTypes The Short names of the dispatch types the AutoamticConditions should be filtered
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
	 * @brief The calucated number of packages needed
	 * @var long
	 */
	public $CalculatedNumberOfPackages;
	/**
	 * @brief The calculated volume for all products
	 * @var long
	 */
	public $CalculatedTotalVolume;
	/**
	 * @brief The calculated weight for all products
	 * @var long
	 */
	public $CalculatedTotalWeight;
	/**
	 * @brief List of possible AutomaticCondition's
	 * @var ArrayOfAutomaticCondition
	 */
	public $PossibleAutomaticConditionList;
	/**
	 * @brief True if tax is calculated
	 * @var boolean
	 */
	public $SaleTaxIsCalculated;
}

class GetProductInformationRequest{

	/**
	 * @brief The full own Articlenumber with color size specific addinal number of the Article. The number musst be foud in the activ article list from Promotional Office for a successful import. 
	 * @var string
	 */
	public $ownArticleNumber;

	/**
	 *
	 * @param string $productNumber The full own Articlenumber with color size specific addinal number of the Article. The number musst be foud in the activ article list from Promotional Office for a successful import.
	 */
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
	 * @brief The identifier for the product
	 * @var ProductIdentifier
	 */
	public $productIdentifier;

	/**
	 *
	 * @param ProductIdentifier $productIdentifier The identifier for the product
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
	 * @brief The identifier for the customer
	 * @var CustomerIdentifier
	 */
	public $customerIdentifier;
	/**
	 * @brief The identifier for the product
	 * @var ProductIdentifier
	 */
	public $productIdentifier;

	/**
	 *
	 * @param CustomerIdentifier $customerIdentifier The identifier for the customer
	 * @param ProductIdentifier $productIdentifier The identifier for the product
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

/**
 * \brief Class for the information of the import
 * 
 * @author Achim Kuntz
 */
class ImportInformation{
	/**
	 * @brief The identifier for the external system
	 * @var string
	 */
	public $ImportSource;
	
	/**
	 * @brief The if of the external system
	 * @var string
	 */
	public $ExternId;
}

/**
 * \brief Class for item with a short name and a description in a defined languages
 * 
 * @author Achim Kuntz
 */
class LocalizationItem{

	/**
	 * @brief The description for the item
	 * @var string
	 */
	public $Description;

	/**
	 * @brief The language of the item. e.g. 'de' or 'nl'
	 * @var string
	 */
	public $Language;

	/**
	 * @brief The short name for the item
	 * @var string
	 */
	public $Show;
}

/**
 * \brief Class for item with a generall short name and a generall description and the same as list in different languages
 * 
 * @author Achim Kuntz
 */
class LocalizedItem {
	/**
	 * @brief The description for the item in generall language
	 * @var string
	 */
	public $Description;
	/**
	 * @brief The short name for the item in generall language
	 * @var string
	 */
	public $Show;

	/**
	 *@brief The List of translations in other languages
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
	@param[in] string $companyName Company Name
	@param[in] string $userName Username
	@param[in] string $password Passwort
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

/**
 * \brief Class for payment information
 * 
 * @author Achim Kuntz
 */
class PaymentInformation{

	/**
	 * @brief The days of the PaymentInformation
	 * @var unsignedByte
	 */
	public $Days;

	/**
	 * @brief The deposit of the PaymentInformation
	 * @var decimal
	 */
	public $Deposit;

	/**
	 * @brief The description of the PaymentInformation
	 * @var string
	 */
	public $Description;

	/**
	 * @brief short name of the PaymentInformation
	 * @var string
	 */
	public $Show;

	/**
	 * @brief The skonto value of the PaymentInformation. if 0 then it is net
	 * @var unsignedByte
	 */
	public $Skonto;
}

/**
 * \brief Class to identify a product
 * 
 * @author Achim Kuntz
 */
class ProductIdentifier {

	/**
	 * @brief for internal use
	 * @var long
	 */
	public $ProductId;

	/**
	 * @brief The full own Articlenumber with color size specific addinal number of the Article. The number musst be found in the activ article list from Promotional Office for a successful use. 
	 * @var string
	 */
	public $ProductNumber;

	/**
	 * @brief unused
	 * @var guid
	 */
	public $ProductUniqueId;

	/**
	 *
	 * @param long $productId for internal use
	 * @param string $productNumber The full own Articlenumber with color size specific addinal number of the Article. The number musst be found in the activ article list from Promotional Office for a successful use.
	 * @param guid $productUniqueId unused
	 */
	function __construct($productId, $productNumber, $productUniqueId){
		$this->ProductId = $productId;
		$this->ProductNumber = $productNumber;
		$this->ProductUniqueId = $productUniqueId;
	}
}

/**
 * \brief Class with product information
 * 
 * @author Achim Kuntz
 */
class ProductInformation
{
	/**
	 * @brief List of article groups assigned to the product 
	 * @var ArrayOfShowDescriptionItem
	 */
	public $ArticleGroups;
	/**
	 * @brief All product texts in all languages
	 * @var ArrayOfArticleTextItem
	 */
	public $ArticleTexts;
	/**
	 * @brief The type of the product
	 * @var string
	 */
	public $ArticleType;
	/**
	 * @brief List of URI's to all pictures of the product 
	 * @var ArrayOfanyURI
	 */
	public $AllPictureUrls;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField01;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField02;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField03;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField04;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField05;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField06;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField07;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField08;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField09;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField10;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField11;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField12;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField13;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField14;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField15;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField16;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField17;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField18;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField19;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField20;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField21;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField22;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField23;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField24;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField25;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField26;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField27;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField28;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField29;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $ArticleUserDefindedField30;

	/**
	 * @brief The base quantity for the buying price
	 * @var decimal
	 */
	public $BuyingPriceBaseQuantity;
	/**
	 * @brief The unit of the base quantity for the buying price
	 * @var string
	 */
	public $BuyingPriceBaseQuantityUnit;
	/**
	 * @brief List of possible color size combinations of the product
	 * @var ArrayOfColorSizeCombination
	 */
	public $ColorSizeCombinations;

	/**
	 * @brief The creation time of the product
	 * @var DateTime
	 */

	public $DateInsert;

	/**
	 * @brief List of ideas assigned to the product
	 * @var ArrayOfShowDescriptionItem
	 */
	public $Ideas;

	/**
	 * @brief The identifier for the product
	 * @var ProductIdentifier
	 */
	public $IdentifierV1;

	/**
	 * @brief The import informations where the article is imported from
	 * @var ArrayOfImportInformation
	 */
	public $ImportInformations;

	/**
	 * @brief True if the prosuct is active
	 * @var booelean
	 */
	public $IsActive;

	/**
	 * @brief The date of the last product change
	 * @var DateTime
	 */
	public $LastChanged;
	/**
	 * @brief The notice
	 * @var string
	 */
	public $Notice;
	/**
	 * @brief The purchase order number
	 * @var string
	 */
	public $OrderNumber;

	/**
	 * @brief The own product number
	 * @var string
	 */
	public $OwnArticleNumber;
	/**
	 * @brief The url of the main product picture
	 * @var string
	 */
	public $PictureUrl;
	/**
	 * @brief The base quantity for stock orders
	 * @var decimal
	 */
	public $PurchaseOrderBaseQuantity;
	/**
	 * @brief The unit of the base quantity for stock orders
	 * @var string
	 */
	public $PurchaseOrderBaseQuantityUnit;
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
	 * @brief A free field
	 * @var string
	 */
	public $SelfDefined4;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $SelfDefined5;
	/**
	 * @brief The base quantity for the selling price
	 * @var decimal
	 */
	public $SellingPriceBaseQuantity;
	/**
	 * @brief The unit of the base quantity for the selling price
	 * @var string
	 */
	public $SellingPriceBaseQuantityUnit;
	/**
	 * @brief The currency name from the main supplier
	 * @var string
	 */
	public $SupplierCurrencyShow;
	/**
	 * @brief The name of the main supplier
	 * @var string
	 */
	public $SupplierName;
	/**
	 * @brief The Warning
	 * @var string
	 */
	public $Warning;

	/**
	 * @brief The short name of the assigned weight
	 * @var string
	 */
	public $WeightShow;

	/**
	 * @brief The value of the assigned weight
	 * @var decimal
	 */
	public $WeightValue;
}

/**
 * \brief Class with product price information
 * 
 * @author Achim Kuntz
 */
class ProductPriceInformation{

	/**
	 * @brief The complete own product number incl. the color size additional product number
	 * @var string
	 */
	public $ArticleNumber;
	/**
	 * @brief The customer number
	 * @var string
	 */
	public $CustomerNumber;

	/**
	 * @brief The customer specific selling price
	 * @var decimal
	 */
	public $CustomerSpecificSellingPrice;
	/**
	 * @brief The customer specific discount
	 * @var decimal
	 */
	public $Discount;
	/**
	 * @brief The quantity belongs to the price
	 * @var long
	 */
	public $Quantity;
	/**
	 * @brief True if the price depend on the quantity
	 * @var boolean
	 */
	public $QuantityDependentPrice;

	/**
	 * @brief The regular price for this product
	 * @var decimal
	 */
	public $RegularPrice;
}

/**
 * \brief Class for items with a short name and a description
 * 
 * @author Achim Kuntz
 */
class ShowDescriptionItem{

	/**
	 * @brief The description of the item
	 * @var string
	 */
	public $Description;

	/**
	 * @brief The short name of the item
	 * @var string
	 */
	public $Show;
}

/**
 * \brief Class for simple address
 * 
 * @author Achim Kuntz
 */
class SimpleAddress{

	/**
	 * @brief The type of the adsress. Possible values are PostAddress,VisitAddress,DispatchAddress,InvoiceAddress,OtherAddress
	 * @var string
	 */
	public $AddressType;

	/**
	 * @brief The city
	 * @var string
	 */
	public $City;

	/**
	 * @brief The name of the country
	 * @var string
	 */
	public $CountryName;

	/**
	 * @brief True if this is the main address of this addresstype
	 * @var boolean
	 */
	public $IsMainAdress;

	/**
	 * @brief The first line for the address
	 * @var string
	 */
	public $Line1;

	/**
	 * @brief The second line for the address
	 * @var string
	 */
	public $Line2;

	/**
	 * @brief The third line for the address
	 * @var string
	 */
	public $Line3;

	/**
	 * @brief The company name
	 * @var string
	 */
	public $Name;

	/**
	 * @brief The additional company name
	 * @var string
	 */
	public $NameAffex;

	/**
	 * @brief The postal code
	 * @var string
	 */
	public $PostCode;

	/**
	 * @brief The street
	 * @var string
	 */
	public $Street;

	/**
	 * @brief The street number
	 * @var string
	 */
	public $StreetNumber;
}

/**
 * \brief Class for address in the tender/indent importer
 * 
 * @author Achim Kuntz
 */
class TenderIndentImporterAddressData{
	/**
	 * @brief The alternative salutation
	 * @var string
	 */
	public $AlternativeSalutation ;
	/**
	 * @brief The city
	 * @var string
	 */
	public $City ;
	/**
	 * @brief The company name
	 * @var string
	 */
	public $CompanyName ;
	/**
	 * @brief The additional company name
	 * @var string
	 */
	public $CompanyNameAffex ;
	/**
	 * @brief The iso code of the country
	 * @var string
	 */
	public $CountryIsoCode ;
	/**
	 * @brief The dispatch tip. Only on dispatch addresses
	 * @var string
	 */
	public $DispatchTip ;
	/**
	 * @brief The mail address
	 * @var string
	 */
	public $EMail ;
	/**
	 * @brief The fax number
	 * @var string
	 */
	public $FaxNumber ;
	/**
	 * @brief The first name
	 * @var string
	 */
	public $FirstName ;
	/**
	 * @brief The gender type. Possible values are Male or Female
	 * @var GenderType
	 */
	public $Gender ;
	/**
	 * @brief The initials
	 * @var string
	 */
	public $Initial ;
	/**
	 * @brief The language of the item. e.g. 'de' or 'nl'
	 * @var string
	 */
	public $Language ;
	/**
	 * @brief The last name
	 * @var string
	 */
	public $LastName ;
	/**
	 * @brief The first line for the address
	 * @var string
	 */
	public $Line1 ;
	/**
	 * @brief The second line for the address
	 * @var string
	 */
	public $Line2 ;
	/**
	 * @brief The third line for the address
	 * @var string
	 */
	public $Line3 ;
	/**
	 * @brief The phone number
	 * @var string
	 */
	public $PhoneNumber ;
	/**
	 * @brief The postal code
	 * @var string
	 */
	public $PostCode ;
	/**
	 * @brief The salutation
	 * @var string
	 */
	public $Salutation ;
	/**
	 * @brief The street
	 * @var string
	 */
	public $Street ;
	/**
	 * @brief The street number
	 * @var string
	 */
	public $StreetNumber ;
	/**
	 * @brief The ustId. Only on invoice adresses
	 * @var string
	 */
	public $UstId ;
}

/**
 * \brief Class for a betterment on a product 
 * 
 * @author Achim Kuntz
 */
class TenderIndentImporterBettermentData{

	/**
	 * @brief The buying price per unit. (Optional. Ignored, when value is null.) 
	 * @var decimal
	 */
	public $BuyingPricePerUnit;
	/**
	 * @brief The article deliverynote text. (Optional. Ignored, when value is null.) 
	 * @var ArrayOfTenderIndentImporterRelayData
	 */
	public $BuyingRelayList;
	/**
	 * @brief A List of buying relays. (Optional. Ignored, when list is null.) 
	 * @var string
	 */
	public $CustomerArticleDeliverynoteText;
	/**
	 * @brief The article description. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $CustomerArticleDescription;
	/**
	 * @brief The article indent text. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $CustomerArticleIndentText;
	/**
	 * @brief The name of the article. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $CustomerArticleName;
	/**
	 * @brief The article tender text. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $CustomerArticleTenderText;
	/**
	 * @brief The article text intern. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $CustomerArticleTextIntern;

	/**
	 * @brief direct dispatch option. (Optional. Ignored, when value is null.) 
	 * @var boolean
	 */
	public $DirectDispatch;
	/**
	 * @brief The discount in percent. (Optional. Ignored, when value is null.) 
	 * @var decimal
	 */
	public $Discount;

	/**
	 * @brief The full own Articlenumber with color size specific addinal number of the Article. The number musst be foud in the activ article list from Promotional Office for a successful import. 
	 * @var string
	 */
	public $MyArticleNumber;
	/**
	 * @brief The print position option. Selling price will be zero, if set to true. (Optional. Ignored, when value is null.) 
	 * @var boolean
	 */
	public $PrintPosition;
	/**
	 * @brief Print price per unit option. (Optional. Ignored, when value is null.) 
	 * @var boolean
	 */
	public $PrintPricePerUnit;
	/**
	 * @brief The selling price per unit. (Optional. Ignored, when value is null.) 
	 * @var decimal
	 */
	public $SellingPricePerUnit;
	/**
	 * @brief A List of selling relays. (Optional. Ignored, when list is null.) 
	 * @var ArrayOfTenderIndentImporterRelayData
	 */
	public $SellingRelayList;
	/**
	 * @brief The setup cost buying price. (Optional. Ignored, when value is null.) 
	 * @var decimal
	 */
	public $SetupCostBuyingPrice;
	/**
	 * @brief The setup cost description. (Optional. Ignored, when value is null.)
	 * @var string
	 */
	public $SetupCostDescription;
	/**
	 * @brief The setup cost selling price. (Optional. Ignored, when value is null.)
	 * @var decimal
	 */
	public $SetupCostSellingPrice;
	/**
	 * @brief The name of the alternative supplier. (Optional. Ignored, when value is null.)
	 * @var string
	 */
	public $SupplierName;

}

/**
 * \brief Main import data object 
 * 
 * @author Achim Kuntz
 */
class TenderIndentImporterData{
	/**
	 * @brief 
	 * @var Guid
	 */
	public $AutomaticDeliveryConditionId;
	/**
	 * @brief True when the availability of products should be checked. Creation is not possible when products are not free available on stock
	 * @var boolean
	 */
	public $AvailabilityCheckEnabled;
	/**
	 * @brief When the inserted string matches the short name of a Categorie in Promotional Office, this Categorie will be used for the created element. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $Categorie;
	/**
	 * @brief The customer text. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $CustomerText;
	/**
	 * @brief The DebitorNumber of the Customer to use for creating the created element. The Customer must be available and activ in Promotional Office to proceed with the import.
	 * @var long
	 */
	public $DebitorNumber;
	/**
	 * @brief The changed delivery address. (Optional. Root customer address is used, when value is null.)
	 * @var TenderIndentImporterAddressData
	 */
	public $DeliveryAddress;
	/**
	 * @brief When the inserted string matches the short name of a DeliveryTerm in Promotional Office, this DeliveryTerm will be used for the created element. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $DeliveryTerm;
	/**
	 * @brief Optional. Ignored, when value is null. When the inserted string matches the short name of a DispatchType in Promotional Office, this DispatchType will be used for the created element. 
	 * @var string
	 */
	public $DispatchType;
	/**
	 * @brief The footer text. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $FooterText;
	/**
	 * @brief The header text. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $HeaderText;
	/**
	 * @brief Defines the type of element, the Importer should create. 
	 * @var string
	 */
	public $ImportType;
	/**
	 * @brief The prefix for the created element. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $ImportTypePrefix;
	/**
	 * @brief The suffix for the created element. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $ImportTypeSuffix;	
	/**
	 * @brief The changed invoice address. (Optional. Root customer address is used, when value is null.)
	 * @var TenderIndentImporterAddressData
	 */
	public $InvoiceAddress;
	/**
	 * @brief The notice
	 * @var string
	 */
	public $Notice;	
	/**
	 * @brief A List of strings. For each item holds the following rule: When the inserted string matches the short name of a PaymentMode in Promotional Office, this PaymentMode will be used for the created element. (Optional. Ignored, when list is null.) 
	 * @var ArrayOfstring
	 */
	public $PaymentModeList;	
	/**
	 * @brief The list of Positions to use in the creadet element. Had to contain at least one element. 
	 * @var ArrayOfTenderIndentImporterPositionData
	 */
	public $PositionList;
	/**
	 * @brief The changed post address. (Optional. Root customer address is used, when value is null.)
	 * @var TenderIndentImporterAddressData
	 */
	public $PostAddress;
	/**
	 * @brief When the inserted string matches the name of a StorageLocation in Promotional Office, this StorageLocation will be used for the created element. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $StorageLocation;
	/**
	 * @brief The warning
	 * @var string
	 */
	public $Warning;	
}

/**
 * \brief Class for a articleposition
 * 
 * @author Achim Kuntz
 */
class TenderIndentImporterPositionData{
	/**
	 * @brief A list of betterments on the article (Optional. Ignored, when list is null.) 
	 * @var ArrayOfTenderIndentImporterBettermentData
	 */
	public $BettermentList;
	/**
	 * @brief The buying price per unit. (Optional. Ignored, when value is null.) 
	 * @var decimal
	 */
	public $BuyingPricePerUnit;
	/**
	 * @brief A List of buying relays. (Optional. Ignored, when list is null.) 
	 * @var ArrayOfTenderIndentImporterRelayData
	 */
	public $BuyingRelayList;
	/**
	 * @brief The article deliverynote text. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $CustomerArticleDeliverynoteText;
	/**
	 * @brief The article description. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $CustomerArticleDescription;
	/**
	 * @brief The article indent text. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $CustomerArticleIndentText;
	/**
	 * @brief The name of the article. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $CustomerArticleName;
	/**
	 * @brief The article tender text. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $CustomerArticleTenderText;
	/**
	 * @brief The article text intern. (Optional. Ignored, when value is null.) 
	 * @var string
	 */
	public $CustomerArticleTextIntern;
	/**
	 * @brief The direct dispatch option. (Optional. Ignored, when value is null.) 
	 * @var boolean
	 */
	public $DirectDispatch;
	/**
	 * @brief The discount in percent. (Optional. Ignored, when value is null.) 
	 * @var decimal
	 */
	public $Discount;
	/**
	 * @brief The earliest delivery date. (Optional. Ignored, when value is null.) 
	 * @var DateTime
	 */
	public $EarliestDeliveryDate;
	/**
	 * @brief The is stock article option. (Optional. Ignored, when value is null.)
	 * @var boolean
	 */
	public $IsStockArticle;
	/**
	 * @brief The latest delivery date. (Optional. Ignored, when value is null.) 
	 * @var DateTime
	 */
	public $LatestDeliveryDate;
	/**
	 * @brief The full own Articlenumber with color size specific addinal number of the Article. The number musst be foud in the activ article list from Promotional Office for a successful import. 
	 * @var string
	 */
	public $MyArticleNumber;
	/**
	 * @brief The print position option. Selling price will be zero, if set to true. (Optional. Ignored, when value is null.) 
	 * @var boolean
	 */
	public $PrintPosition;
	/**
	 * @brief The print price per unit option. (Optional. Ignored, when value is null.) 
	 * @var boolean
	 */
	public $PrintPricePerUnit;
	/**
	 * @brief The quantity. 
	 * @var decimal
	 */
	public $Quantity;
	/**
	 * @brief The unit of the quantity
	 * @var string
	 */
	public $QuantityUnit;
	/**
	 * @brief The selling price per unit. (Optional. Ignored, when value is null.) 
	 * @var decimal
	 */
	public $SellingPricePerUnit;
	/**
	 * @brief A List of selling relays. (Optional. Ignored, when list is null.) 
	 * @var ArrayOfTenderIndentImporterRelayData
	 */
	public $SellingRelayList;
	/**
	 * @brief The name of the alternative supplier. (Optional. Ignored, when value is null.)
	 * @var string
	 */
	public $SupplierName;	
}

/**
 * \brief Class for an relay used for positions and betterments 
 * 
 * @author Achim Kuntz
 */
class TenderIndentImporterRelayData{
	/**
	 * @brief The complete price option of the relay
	 * @var boolean
	 */
	public $IsCompletePrice;
	
	/**
	 * @brief The quantity. 
	 * @var int
	 */
	public $Quantity;
	
	/**
	 * @brief The selling price per unit
	 * @var decimal
	 */
	public $SellingPricePerUnit;
}

/**
 * \brief Class for items with a language and a value
 * 
 * @author Achim Kuntz
 */
class TranslationItem{

	/**
	 * @brief The language of the item. e.g. 'de' or 'nl'
	 * @var string
	 */
	public $Language;
	/**
	 * @brief The value of the item
	 * @var string
	 */
	public $Value;
}

class UserInformation{
	/**
	 * @brief The mail address
	 * @var string
	 */
	public $Email;
	/**
	 * @brief The fax number
	 * @var string
	 */
	public $Fax;
	/**
	 * @brief The first name
	 * @var string
	 */
	public $FirstName;
	/**
	 * @brief The language of the item. e.g. 'de' or 'nl'
	 * @var string
	 */
	public $Language;
	/**
	 * @brief The last name
	 * @var string
	 */
	public $LastName;
	/**
	 * @brief The phone number
	 * @var string
	 */
	public $Phone;
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
	 * @brief A free field
	 * @var string
	 */
	public $SelfDefined4;
	/**
	 * @brief A free field
	 * @var string
	 */
	public $SelfDefined5;
	/**
	 * @brief The short name
	 * @var string
	 */
	public $ShortName;
	/**
	 * @brief The user identifier
	 * @var long
	 */
	public $UserId;

}
?>