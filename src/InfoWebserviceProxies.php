<?
class  CustomerIdentifier  {
	/**
		@var long
	*/
	public $CustomerId;
			
	/**
		@var string
	*/
	public  $CustomerNumber;
}

class  ExpectedStockMovement  {

	/**
		@var boolean
	*/
	public  $MayBePrefered;

	/**
		@var dateTime
	*/
	public  $MovementDate;

	/**
		@var string
	*/
	public  $ProductNumber;

	/**
		@var long
	*/
	public  $Quantity;
}

class  GetExpectedStockMovement  {

	/**
		@var ProductIdentifier
	*/
	public  $productIdentifier;

}

class  GetExpectedStockMovementResponse  {

	/**
		@var ExpectedStockMovement[]
	*/
	public  $GetExpectedStockMovementResult;

}

class  GetUserInformationResponse  {
	/**
		@var UserInformation[]
	*/
	public  $GetUserInformationResult;
}

class  ProductIdentifier  {

	/**
		Query Product by ProductId
		
		@var long			 			
	*/
	public  $ProductId;
	
	/**
		 @var string
	*/
	public  $ProductNumber;
	/**
		 @var guid
	*/
	public  $ProductUniqueId;
}

class  UserInformation  
{ 
	/**
		@short Email Adresse des Users
		
		@var string
	*/
	public  $Email; 

	/**
		@short Fax Nummer des Users
		@var string
	*/
	public  $Fax;

	/**
		@short Vorname des Users
		@var string
	*/
	public  $FirstName; 

	/**
		@short Sprache des Users
		@var string
	*/
	public  $Language; 

	/**
		@short Nachname des Users
		
		@var string
	*/
	public  $LastName; 

	/**
		@short Telefonnummer des Users
		@var string
	*/
	public  $Phone;

	/**
		@short Frei definierbar
		
		@var string
	*/
	public  $SelfDefined1; 

	/**
		@short Frei definierbar
		
		@var string
	*/
	public  $SelfDefined2;

	/**
		@short Frei definierbar
		
		@var string
	*/
	public  $SelfDefined3; 

	/**
		@short Frei definierbar
		
		@var string
	*/
	public  $SelfDefined4; 

	/**
		@short Frei definierbar
		
		@var string
	*/
	public  $SelfDefined5; 

	/**
		@short Namenskurzel des Users
		
		@var string
	*/
	public  $ShortName;

	/**
		@short Id des Users
		
		@var long
	*/
	public  $UserId;
}


class  GetCustomerPriceList  {

	/**
		@var CustomerIdentifier
	*/
	public  $identifier;
}

class  GetProductPriceListResponse  {
	
	/**
		@var ProductPriceInformation[]
	*/
	public  $GetProductPriceListResult;
}

class  ProductPriceInformation  { 

	/**
		@var string
	*/
	public  $ArticleNumber;

	/**
		@var string
	*/
	public  $CustomerNumber;

	/**
		@var decimal
	*/
	public  $CustomerSpecificSellingPrice;

	/**
		@var decimal
	*/
	public  $Discount;

	/**
		@var long
	*/
	public  $Quantity;

	/**
		@var boolean
	*/
	public  $QuantityDependentPrice;

	/**
		@var decimal
	*/
	public  $RegularPrice;
}

class  GetProductPrices  {

	/**
		@var CustomerIdentifier
	*/
	public  $customerIdentifier;

	/**
		@var ProductIdentifier
	*/
	public  $productIdentifier;
}

class  GetProductPricesResponse  {

	/**
		@var ProductPriceInformation[]
	*/
	public  $GetProductPricesResult;
}

class  ProductPriceInformation  { 
	/**
		@var string
	*/
	public  $ArticleNumber;

	/**
		@var string
	*/
	public  $CustomerNumber;

	/**
		@var decimal
	*/
	public  $CustomerSpecificSellingPrice;

	/**
		@var decimal
	*/
	public  $Discount;

	/**
		@var long
	*/
	public  $Quantity;

	/**
		@var boolean
	*/
	public  $QuantityDependentPrice;

	/**
		@var decimal
	*/
	public  $RegularPrice;
}

class  GetCustomerInformation  {

	/**
		@var CustomerIdentifier
	*/
	public  $identifierV1;

}

class  GetCustomerInformationResponse  {
	
	/**
		@var CustomerInformation
	*/
	public  $GetCustomerInformationResult;
}

class  GetCustomerInformationList  {

	/**
		@var dateTime
	*/
	public  $startDate;
}

class  GetCustomerInformationListResponse  {

	/**
		@var CustomerInformation[]
	*/
	public  $GetCustomerInformationListResult;
}


class  CustomerInformation  {

	/**
		@var SimpleAddress[]
	*/
	public  $Adresses; 
	
	/**
		@var long
	*/
	public  $AgentId;

	/**
		@var ContactDetail[]
	*/
	public  $ContactDetails;
	
	/**
		@var ContactPersonInformation[]
	*/
	public  $ContactPersons;

	/**
		@var int
	*/
	public  $CreditLimitTotal;

	/**
		@var decimal
	*/
	public  $CreditLimitUsed;
	
	/**
		@var string
	*/
	public  $CurrencyName;

	/**
		@var long
	*/
	public  $DebitorNumber;
	
	/**
		@var LocalizedItem
	*/
	public  $DeliveryTerm;

	/**
		@var LocalizedItem
	*/
	public  $DispatchType;

	/**
		@var string
	*/
	public  $EMail;

	/**
		@var string
	*/
	public  $Fax;

	/**
		@var string
	*/
	public  $Homepage;
	
	/**
		@var CustomerIdentifier
	*/
	public  $IdentifierV1;
	
	/**
		@var boolean
	*/
	public  $IsActive;

	/**
		@var string
	*/
	public  $Language;

	/**
		@var string
	*/
	public  $Name;

	/**
		@var string
	*/
	public  $NameAffex;

	/**
		@var string
	*/
	public  $Notice;
	
	/**
		@var PaymentInformation[]
	*/
	public  $PaymentModes;

	/**
		@var string
	*/
	public  $Phone;

	/**
		@var string
	*/
	public  $SalesTaxNumber;

	/**
		@var string
	*/
	public  $SelfDefined1;

	/**
		@var string
	*/
	public  $SelfDefined2;

	/**
		@var string
	*/
	public  $SelfDefined3;

	/**
		@var string
	*/
	public  $Skype;

	/**
		@var string
	*/
	public  $Warning;

}


class  SimpleAddress  {

	/**
		@var string
	*/
	public  $AddressType;

	/**
		@var string
	*/
	public  $City;

	/**
		@var string
	*/
	public  $CountryName;

	/**
		@var string
	*/
	public  $IsMainAdress;

	/**
		@var string
	*/
	public  $Line1;

	/**
		@var string
	*/
	public  $Line2;

	/**
		@var string
	*/
	public  $Line3;

	/**
		@var string
	*/
	public  $Name;

	/**
		@var string
	*/
	public  $NameAffex;

	/**
		@var string
	*/
	public  $PostCode;

	/**
		@var string
	*/
	public  $Street;

	/**
		@var string
	*/
	public  $StreetNumber;
}


class  ContactDetail  {

	/**
		@var CustomerIdentifier
	*/
	public  $IdentifierV1;
	
	/**
		@var boolean
	*/
	public  $IsMain;
	
	/**
		@var string
	*/
	public  $Type;
	
	/**
		@var string
	*/
	public  $Value;
}


class  ContactPersonInformation  {
	
	/**
		@var ShowDescriptionItem[]
	*/
	public  $AdditionalMailingSigns;
	
	/**
		@var string
	*/
	public  $AlternativeSalutation;
		
	/**
		@var dateTime
	*/
	public  $Birthday;
		
	/**
		@var ContactDetail[]
	*/
	public  $ContactDetails;
	
	/**
		@var string
	*/
	public  $FirstName;
		
	/**
		@var GenderType
	*/
	public  $Gender;
		
	/**
		@var CustomerIdentifier
	*/
	public  $IdentifierV1;
	
	/**
		@var string
	*/
	public  $Initials;
		
	/**
		@var boolean
	*/
	public  $IsMailRecipient;
		
	/**
		@var boolean
	*/
	public  $IsMain;
	
	/**
		@var string
	*/
	public  $Language;
	
	/**
		@var string
	*/
	public  $LastName;
		
	/**
		@var ShowDescriptionItem[]
	*/
	public  $MailingSigns;
	
	/**
		@var string
	*/
	public  $NameAffex;
	
	/**
		@var string
	*/
	public  $Notice;
	
	/**
		@var string
	*/
	public  $Salutation;
			
	/**
		@var ShowDescriptionItem[]
	*/
	public  $SecondaryMailingSigns;
}


class  ShowDescriptionItem  {		
	
	/**
		@var string
	*/
	public  $Description;
		
	/**
		@var string
	*/
	public  $Show;
}


class  PaymentInformation  {
	
	/**
		@var unsignedByte
	*/
	public  $Days;
		
	/**
		@var decimal
	*/
	public  $Deposit;
		
	/**
		@var string
	*/
	public  $Description;
		
	/**
		@var string
	*/
	public  $Show;
		
	/**
		@var unsignedByte
	*/
	public  $Skonto;
}

class  GetPossibleAutomaticConditionList  {
		
	/**
		@var TenderIndentImporterData
	*/
	public  $importdata; 
			
	/**
		@var string[]
	*/
	public  $possibleDispatchTypes;
}

class  TenderIndentImporterData  {
				
	/**
		@var guid
	*/
	public  $AutomaticDeliveryConditionId;
				
	/**
		@var boolean
	*/
	public  $AvailabilityCheckEnabled;
			
	/**
		@var string
	*/
	public  $Categorie;
				
	/**
		@var string
	*/
	public  $CustomerText;
				
	/**
		@var long
	*/
	public  $DebitorNumber;
				
	/**
		@var TenderIndentImporterAddressData
	*/
	public  $DeliveryAddress;
			
	/**
		@var string
	*/
	public  $DeliveryTerm;
			
	/**
		@var string
	*/
	public  $DispatchType;
			
	/**
		@var string
	*/
	public  $FooterText;
			
	/**
		@var string
	*/
	public  $HeaderText;
			
	/**
		@var string
	*/
	public  $ImportType;
			
	/**
		@var string
	*/
	public  $ImportTypePrefix;
			
	/**
		@var string
	*/
	public  $ImportTypeSuffix;
				
	/**
		@var TenderIndentImporterAddressData
	*/
	public  $InvoiceAddress;
			
	/**
		@var string
	*/
	public  $Notice;
			
	/**
		@var string[]
	*/
	public  $PaymentModeList;
				
	/**
		@var TenderIndentImporterPositionData[]
	*/
	public  $PositionList;
				
	/**
		@var TenderIndentImporterAddressData
	*/
	public  $PostAddress;
			
	/**
		@var string
	*/
	public  $StorageLocation;
			
	/**
		@var string
	*/
	public  $Warning;

}

class  TenderIndentImporterAddressData  { 
			
	/**
		@var string
	*/
	public  $AlternativeSalutation;
			
	/**
		@var string
	*/
	public  $City;
			
	/**
		@var string
	*/
	public  $CompanyName;
			
	/**
		@var string
	*/
	public  $CompanyNameAffex;
			
	/**
		@var string
	*/
	public  $CountryIsoCode;
			
	/**
		@var string
	*/
	public  $DispatchTip;
			
	/**
		@var string
	*/
	public  $EMail;
			
	/**
		@var string
	*/
	public  $FaxNumber;
			
	/**
		@var string
	*/
	public  $FirstName;
			
	/**
		@var GenderType
	*/
	public  $Gender;
			
	/**
		@var string
	*/
	public  $Initial;
			
	/**
		@var string
	*/
	public  $Language;
			
	/**
		@var string
	*/
	public  $LastName;
			
	/**
		@var string
	*/
	public  $Line1;
			
	/**
		@var string
	*/
	public  $Line2;
			
	/**
		@var string
	*/
	public  $Line3;
			
	/**
		@var string
	*/
	public  $PhoneNumber;
			
	/**
		@var string
	*/
	public  $PostCode;
			
	/**
		@var string
	*/
	public  $Salutation;
			
	/**
		@var string
	*/
	public  $Street;
			
	/**
		@var string
	*/
	public  $StreetNumber;
			
	/**
		@var string
	*/
	public  $UstId;

}

class  TenderIndentImporterPositionData  {
			
	/**
		@var TenderIndentImporterBettermentData[]
	*/
	public  $BettermentList; 
			
	/**
		@var decimal
	*/
	public  $BuyingPricePerUnit;
			
	/**
		@var TenderIndentImporterRelayData[]
	*/
	public  $BuyingRelayList;
			
	/**
		@var string
	*/
	public  $CustomerArticleDeliverynoteText;
			
	/**
		@var string
	*/
	public  $CustomerArticleDescription;
			
	/**
		@var string
	*/
	public  $CustomerArticleIndentText;
			
	/**
		@var string
	*/
	public  $CustomerArticleName;
			
	/**
		@var string
	*/
	public  $CustomerArticleTenderText;
			
	/**
		@var string
	*/
	public  $CustomerArticleTextIntern;
			
	/**
		@var boolean
	*/
	public  $DirectDispatch;
				
	/**
		@var decimal
	*/
	public  $Discount;
				
	/**
		@var dateTime
	*/
	public  $EarliestDeliveryDate;
			
	/**
		@var boolean
	*/
	public  $IsStockArticle;
				
	/**
		@var dateTime
	*/
	public  $LatestDeliveryDate;
				
	/**
		@var string
	*/
	public  $MyArticleNumber;
				
	/**
		@var boolean
	*/
	public  $PrintPosition;
				
	/**
		@var boolean
	*/
	public  $PrintPricePerUnit;
				
	/**
		@var int
	*/
	public  $Quantity;
				
	/**
		@var decimal
	*/
	public  $SellingPricePerUnit;
				
	/**
		@var TenderIndentImporterRelayData[]
	*/
	public  $SellingRelayList;
			
	/**
		@var string
	*/
	public  $SupplierName;
}

class  GetPossibleAutomaticConditionListResponse  {
	/**
		@var GetPossibleAutomaticConditionListResult
	*/
	public  $GetPossibleAutomaticConditionListResult;
}

class  GetPossibleAutomaticConditionListResult  { 

	/**
		@var long
	*/
	public  $CalculatedNumberOfPackages;

	/**
		@var long
	*/
	public  $CalculatedTotalVolume;

	/**
		@var long
	*/
	public  $CalculatedTotalWeight;

	/**
		@var AutomaticCondition[]
	*/
	public  $PossibleAutomaticConditionList;

	/**
		@var boolean
	*/
	public  $SaleTaxIsCalculated;
}

class  AutomaticCondition  {

	/**
		@var string
	*/
	public  $AutomaticDeliveryConditionDescription;

	/**
		@var guid
	*/
	public  $AutomaticDeliveryConditionId;

	/**
		@var string
	*/
	public  $DeliveryTermShow;

	/**
		@var string
	*/
	public  $DispatchTypeDescription;

	/**
		@var string
	*/
	public  $DispatchTypeShow;

	/**
		@var string
	*/
	public  $ExpenseName;

	/**
		@var string
	*/
	public  $ExpenseNumber;

	/**
		@var decimal
	*/
	public  $ExpensePrice;

	/**
		@var decimal
	*/
	public  $SpecialPriceForPositions;

}

class  ImportData  {

	/**
		@var TenderIndentImporterData
	*/
	public  $importdata;
}

class  ImportDataResponse  {

	/**
		@var string[]
	*/
	public  $ImportDataResult;

}
