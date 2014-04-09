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
	public  $MayBePrefered;  // boolean 

	/**
		@var dateTime
	*/
	public  $MovementDate;  // dateTime 

	/**
		@var string
	*/
	public  $ProductNumber;  // string

	/**
		@var long
	*/
	public  $Quantity;  // long
}

class  GetExpectedStockMovement  {

	/**
		@var ProductIdentifier
	*/
	public  $productIdentifier;  // ProductIdentifier

}

class  GetExpectedStockMovementResponse  {

	/**
		@var ExpectedStockMovement[]
	*/
	public  $GetExpectedStockMovementResult;  // ArrayOfExpectedStockMovement

}

class  GetUserInformationResponse  {

	/**
		@var UserInformation[]
	*/
	public  $GetUserInformationResult;  // ArrayOfUserInformation

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
	public  $Email;  // string 

	/**
		@short Fax Nummer des Users
		@var string
	*/
	public  $Fax;  // string

	/**
		@short Vorname des Users
		@var string
	*/
	public  $FirstName;  // string 

	/**
		@short Sprache des Users
		@var string
	*/
	public  $Language;  // string 

	/**
		@short Nachname des Users
		
		@var string
	*/
	public  $LastName;  // string 

	/**
		@short Telefonnummer des Users
		@var string
	*/
	public  $Phone;  // string

	/**
		@short Frei definierbar
		
		@var string
	*/
	public  $SelfDefined1;  // string 

	/**
		@short Frei definierbar
		
		@var string
	*/
	public  $SelfDefined2;  // string

	/**
		@short Frei definierbar
		
		@var string
	*/
	public  $SelfDefined3;  // string 

	/**
		@short Frei definierbar
		
		@var string
	*/
	public  $SelfDefined4;  // string 

	/**
		@short Frei definierbar
		
		@var string
	*/
	public  $SelfDefined5;  // string 

	/**
		@short Namenskurzel des Users
		
		@var string
	*/
	public  $ShortName;  // string

	/**
		@short Id des Users
		
		@var long
	*/
	public  $UserId;  // long
}


class  GetCustomerPriceList  {

	/**
		@var CustomerIdentifier
	*/
	public  $identifier;  // CustomerIdentifier
}

class  GetProductPriceListResponse  {


	/**
		@var ProductPriceInformation[]
	*/
	public  $GetProductPriceListResult;  // ArrayOfProductPriceInformation

}


class  ProductPriceInformation  { 

	/**
		@var string
	*/
	public  $ArticleNumber;  // string 

	/**
		@var string
	*/
	public  $CustomerNumber;  // string

	/**
		@var decimal
	*/
	public  $CustomerSpecificSellingPrice;  // decimal 

	/**
		@var decimal
	*/
	public  $Discount;  // decimal

	/**
		@var long
	*/
	public  $Quantity;  // long

	/**
		@var boolean
	*/
	public  $QuantityDependentPrice;  // boolean 

	/**
		@var decimal
	*/
	public  $RegularPrice;  // decimal
}

class  GetProductPrices  {

	/**
		@var CustomerIdentifier
	*/
	public  $customerIdentifier;  // CustomerIdentifier 

	/**
		@var ProductIdentifier
	*/
	public  $productIdentifier;  // ProductIdentifier

}

class  GetProductPricesResponse  {

	/**
		@var ProductPriceInformation[]
	*/
	public  $GetProductPricesResult;  // ArrayOfProductPriceInformation

}

class  ProductPriceInformation  { 

	/**
		@var string
	*/
	public  $ArticleNumber;  // string 

	/**
		@var string
	*/
	public  $CustomerNumber;  // string

	/**
		@var decimal
	*/
	public  $CustomerSpecificSellingPrice;  // decimal 

	/**
		@var decimal
	*/
	public  $Discount;  // decimal

	/**
		@var long
	*/
	public  $Quantity;  // long

	/**
		@var boolean
	*/
	public  $QuantityDependentPrice;  // boolean 

	/**
		@var decimal
	*/
	public  $RegularPrice;  // decimal
}

class  GetCustomerInformation  {

	/**
		@var CustomerIdentifier
	*/
	public  $identifierV1;  // CustomerIdentifier

}

class  GetCustomerInformationResponse  {
	/**
		@var CustomerInformation
	*/
	public  $GetCustomerInformationResult;  // CustomerInformation
}

class  GetCustomerInformationList  {

	/**
		@var dateTime
	*/
	public  $startDate;  // dateTime
}

class  GetCustomerInformationListResponse  {

	/**
		@var CustomerInformation[]
	*/
	public  $GetCustomerInformationListResult;  // ArrayOfCustomerInformation
}


class  CustomerInformation  {

	/**
		@var SimpleAddress[]
	*/
	public  $Adresses;  // ArrayOfSimpleAddress 
	
	/**
		@var long
	*/
	public  $AgentId;  // long

	/**
		@var ContactDetail[]
	*/
	public  $ContactDetails;  // ArrayOfContactDetail
	
	/**
		@var ContactPersonInformation[]
	*/
	public  $ContactPersons;  // ArrayOfContactPersonInformation 

	/**
		@var int
	*/
	public  $CreditLimitTotal;  // int

	/**
		@var decimal
	*/
	public  $CreditLimitUsed;  // decimal 
	
	/**
		@var string
	*/
	public  $CurrencyName;  // string 

	/**
		@var long
	*/
	public  $DebitorNumber;  // long
	
	/**
		@var LocalizedItem
	*/
	public  $DeliveryTerm;  // LocalizedItem 

	/**
		@var LocalizedItem
	*/
	public  $DispatchType;  // LocalizedItem 

	/**
		@var string
	*/
	public  $EMail;  // string

	/**
		@var string
	*/
	public  $Fax;  // string 

	/**
		@var string
	*/
	public  $Homepage;  // string
	
	/**
		@var CustomerIdentifier
	*/
	public  $IdentifierV1;  // CustomerIdentifier 
	
	/**
		@var boolean
	*/
	public  $IsActive;  // boolean

	/**
		@var string
	*/
	public  $Language;  // string 

	/**
		@var string
	*/
	public  $Name;  // string 

	/**
		@var string
	*/
	public  $NameAffex;  // string 

	/**
		@var string
	*/
	public  $Notice;  // string
	
	/**
		@var PaymentInformation[]
	*/
	public  $PaymentModes;  // ArrayOfPaymentInformation 

	/**
		@var string
	*/
	public  $Phone;  // string

	/**
		@var string
	*/
	public  $SalesTaxNumber;  // string 

	/**
		@var string
	*/
	public  $SelfDefined1;  // string 

	/**
		@var string
	*/
	public  $SelfDefined2;  // string 

	/**
		@var string
	*/
	public  $SelfDefined3;  // string 

	/**
		@var string
	*/
	public  $Skype;  // string

	/**
		@var string
	*/
	public  $Warning;  // string

}


class  SimpleAddress  {

	/**
		@var string
	*/
	public  $AddressType;  // string 

	/**
		@var string
	*/
	public  $City;  // string

	/**
		@var string
	*/
	public  $CountryName;  // string 

	/**
		@var string
	*/
	public  $IsMainAdress;  // boolean 

	/**
		@var string
	*/
	public  $Line1;  // string

	/**
		@var string
	*/
	public  $Line2;  // string 

	/**
		@var string
	*/
	public  $Line3;  // string 

	/**
		@var string
	*/
	public  $Name;  // string 

	/**
		@var string
	*/
	public  $NameAffex;  // string 

	/**
		@var string
	*/
	public  $PostCode;  // string 

	/**
		@var string
	*/
	public  $Street;  // string

	/**
		@var string
	*/
	public  $StreetNumber;  // string
}


class  ContactDetail  {

	/**
		@var CustomerIdentifier
	*/
	public  $IdentifierV1;  // CustomerIdentifier
	
	/**
		@var boolean
	*/
	public  $IsMain;  // boolean 
	
	/**
		@var string
	*/
	public  $Type;  // string 
	
	/**
		@var string
	*/
	public  $Value;  // string
}


class  ContactPersonInformation  {

	
	/**
		@var ShowDescriptionItem[]
	*/
	public  $AdditionalMailingSigns;  // ArrayOfShowDescriptionItem 
	
	/**
		@var string
	*/
	public  $AlternativeSalutation;  // string
		
	/**
		@var dateTime
	*/
	public  $Birthday;  // dateTime

		
	/**
		@var ContactDetail[]
	*/
	public  $ContactDetails;  // ArrayOfContactDetail 
	
	/**
		@var string
	*/
	public  $FirstName;  // string
		
	/**
		@var GenderType
	*/
	public  $Gender;  // GenderType

		
	/**
		@var CustomerIdentifier
	*/
	public  $IdentifierV1;  // CustomerIdentifier 
	
	/**
		@var string
	*/
	public  $Initials;  // string
		
	/**
		@var boolean
	*/
	public  $IsMailRecipient;  // boolean 
		
	/**
		@var boolean
	*/
	public  $IsMain;  // boolean
	
	/**
		@var string
	*/
	public  $Language;  // string 
	
	/**
		@var string
	*/
	public  $LastName;  // string
	
	
	/**
		@var ShowDescriptionItem[]
	*/
	public  $MailingSigns;  // ArrayOfShowDescriptionItem 
	
	/**
		@var string
	*/
	public  $NameAffex;  // string
	
	/**
		@var string
	*/
	public  $Notice;  // string 
	
	/**
		@var string
	*/
	public  $Salutation;  // string
			
	/**
		@var ShowDescriptionItem[]
	*/
	public  $SecondaryMailingSigns;  // ArrayOfShowDescriptionItem
}


class  ShowDescriptionItem  {		
	/**
		@var string
	*/
	public  $Description;  // string 
		
	/**
		@var string
	*/
	public  $Show;  // string
}


class  PaymentInformation  {
	/**
		@var unsignedByte
	*/
	public  $Days;  // unsignedByte 
		
	/**
		@var decimal
	*/
	public  $Deposit;  // decimal 
		
	/**
		@var string
	*/
	public  $Description;  // string 
		
	/**
		@var string
	*/
	public  $Show;  // string
		
	/**
		@var unsignedByte
	*/
	public  $Skonto;  // unsignedByte
}



class  GetPossibleAutomaticConditionList  {
		
	/**
		@var TenderIndentImporterData
	*/
	public  $importdata;  // TenderIndentImporterData 
			
	/**
		@var string[]
	*/
	public  $possibleDispatchTypes;  // ArrayOfstring
}


class  TenderIndentImporterData  {
				
	/**
		@var guid
	*/
	public  $AutomaticDeliveryConditionId;  // guid 
				
	/**
		@var boolean
	*/
	public  $AvailabilityCheckEnabled;  // boolean 
			
	/**
		@var string
	*/
	public  $Categorie;  // string
				
	/**
		@var string
	*/
	public  $CustomerText;  // string 
				
	/**
		@var long
	*/
	public  $DebitorNumber;  // long
				
	/**
		@var TenderIndentImporterAddressData
	*/
	public  $DeliveryAddress;  // TenderIndentImporterAddressData 
			
	/**
		@var string
	*/
	public  $DeliveryTerm;  // string
			
	/**
		@var string
	*/
	public  $DispatchType;  // string 
			
	/**
		@var string
	*/
	public  $FooterText;  // string 
			
	/**
		@var string
	*/
	public  $HeaderText;  // string 
			
	/**
		@var string
	*/
	public  $ImportType;  // string
			
	/**
		@var string
	*/
	public  $ImportTypePrefix;  // string 
			
	/**
		@var string
	*/
	public  $ImportTypeSuffix;  // string
	
				
	/**
		@var TenderIndentImporterAddressData
	*/
	public  $InvoiceAddress;  // TenderIndentImporterAddressData 
			
	/**
		@var string
	*/
	public  $Notice;  // string
			
	/**
		@var string[]
	*/
	public  $PaymentModeList;  // ArrayOfstring
				
	/**
		@var TenderIndentImporterPositionData[]
	*/
	public  $PositionList;  // ArrayOfTenderIndentImporterPositionData 
				
	/**
		@var TenderIndentImporterAddressData
	*/
	public  $PostAddress;  // TenderIndentImporterAddressData
			
	/**
		@var string
	*/
	public  $StorageLocation;  // string
			
	/**
		@var string
	*/
	public  $Warning;  // string

}


class  TenderIndentImporterAddressData  { 
			
	/**
		@var string
	*/
	public  $AlternativeSalutation;  // string 
			
	/**
		@var string
	*/
	public  $City;  // string
			
	/**
		@var string
	*/
	public  $CompanyName;  // string 
			
	/**
		@var string
	*/
	public  $CompanyNameAffex;  // string 
			
	/**
		@var string
	*/
	public  $CountryIsoCode;  // string 
			
	/**
		@var string
	*/
	public  $DispatchTip;  // string 
			
	/**
		@var string
	*/
	public  $EMail;  // string
			
	/**
		@var string
	*/
	public  $FaxNumber;  // string 
			
	/**
		@var string
	*/
	public  $FirstName;  // string 
			
	/**
		@var GenderType
	*/
	public  $Gender;  // GenderType 
			
	/**
		@var string
	*/
	public  $Initial;  // string 
			
	/**
		@var string
	*/
	public  $Language;  // string 
			
	/**
		@var string
	*/
	public  $LastName;  // string 
			
	/**
		@var string
	*/
	public  $Line1;  // string 
			
	/**
		@var string
	*/
	public  $Line2;  // string 
			
	/**
		@var string
	*/
	public  $Line3;  // string
			
	/**
		@var string
	*/
	public  $PhoneNumber;  // string 
			
	/**
		@var string
	*/
	public  $PostCode;  // string 
			
	/**
		@var string
	*/
	public  $Salutation;  // string 
			
	/**
		@var string
	*/
	public  $Street;  // string
			
	/**
		@var string
	*/
	public  $StreetNumber;  // string
			
	/**
		@var string
	*/
	public  $UstId;  // string

}


class  TenderIndentImporterPositionData  {
			
	/**
		@var TenderIndentImporterBettermentData[]
	*/
	public  $BettermentList;  // ArrayOfTenderIndentImporterBettermentData 
			
	/**
		@var decimal
	*/
	public  $BuyingPricePerUnit;  // decimal
			
	/**
		@var TenderIndentImporterRelayData[]
	*/
	public  $BuyingRelayList;  // ArrayOfTenderIndentImporterRelayData 
			
	/**
		@var string
	*/
	public  $CustomerArticleDeliverynoteText;  // string
			
	/**
		@var string
	*/
	public  $CustomerArticleDescription;  // string 
			
	/**
		@var string
	*/
	public  $CustomerArticleIndentText;  // string 
			
	/**
		@var string
	*/
	public  $CustomerArticleName;  // string
			
	/**
		@var string
	*/
	public  $CustomerArticleTenderText;  // string 
			
	/**
		@var string
	*/
	public  $CustomerArticleTextIntern;  // string 
			
	/**
		@var boolean
	*/
	public  $DirectDispatch;  // boolean
				
	/**
		@var decimal
	*/
	public  $Discount;  // decimal
				
	/**
		@var dateTime
	*/
	public  $EarliestDeliveryDate;  // dateTime 
			
	/**
		@var boolean
	*/
	public  $IsStockArticle;  // boolean
				
	/**
		@var dateTime
	*/
	public  $LatestDeliveryDate;  // dateTime 
				
	/**
		@var string
	*/
	public  $MyArticleNumber;  // string 
				
	/**
		@var boolean
	*/
	public  $PrintPosition;  // boolean
				
	/**
		@var boolean
	*/
	public  $PrintPricePerUnit;  // boolean 
				
	/**
		@var int
	*/
	public  $Quantity;  // int
				
	/**
		@var decimal
	*/
	public  $SellingPricePerUnit;  // decimal
				
	/**
		@var TenderIndentImporterRelayData[]
	*/
	public  $SellingRelayList;  // ArrayOfTenderIndentImporterRelayData 
			
	/**
		@var string
	*/
	public  $SupplierName;  // string
}

class  GetPossibleAutomaticConditionListResponse  {
	/**
		@var GetPossibleAutomaticConditionListResult
	*/
	public  $GetPossibleAutomaticConditionListResult;  // GetPossibleAutomaticConditionListResult
}


class  GetPossibleAutomaticConditionListResult  { 

	/**
		@var long
	*/
	public  $CalculatedNumberOfPackages;  // long 

	/**
		@var long
	*/
	public  $CalculatedTotalVolume;  // long 

	/**
		@var long
	*/
	public  $CalculatedTotalWeight;  // long

	/**
		@var AutomaticCondition[]
	*/
	public  $PossibleAutomaticConditionList;  // ArrayOfAutomaticCondition

	/**
		@var boolean
	*/
	public  $SaleTaxIsCalculated;  // boolean
}


class  AutomaticCondition  {
	/**
		@var string
	*/
	public  $AutomaticDeliveryConditionDescription;  // string 

	/**
		@var guid
	*/
	public  $AutomaticDeliveryConditionId;  // guid
	/**
		@var string
	*/
	public  $DeliveryTermShow;  // string
	/**
		@var string
	*/
	public  $DispatchTypeDescription;  // string 
	/**
		@var string
	*/
	public  $DispatchTypeShow;  // string
	/**
		@var string
	*/
	public  $ExpenseName;  // string 
	/**
		@var string
	*/
	public  $ExpenseNumber;  // string 
	/**
		@var decimal
	*/
	public  $ExpensePrice;  // decimal

	/**
		@var decimal
	*/
	public  $SpecialPriceForPositions;  // decimal

}

class  ImportData  {

	/**
		@var TenderIndentImporterData
	*/
	public  $importdata;  // TenderIndentImporterData
}

class  ImportDataResponse  {

	/**
		@var string[]
	*/
	public  $ImportDataResult;  // ArrayOfstring

}
