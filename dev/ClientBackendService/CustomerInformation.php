<?php

class CustomerInformation
{

    /**
     * @var SimpleAddress[] $Adresses
     * @access public
     */
    public $Adresses = null;

    /**
     * @var int $AgentId
     * @access public
     */
    public $AgentId = null;

    /**
     * @var string $BankAccountBIC
     * @access public
     */
    public $BankAccountBIC = null;

    /**
     * @var string $BankAccountIBAN
     * @access public
     */
    public $BankAccountIBAN = null;

    /**
     * @var string $BankAccountOwner
     * @access public
     */
    public $BankAccountOwner = null;

    /**
     * @var ContactDetail[] $ContactDetails
     * @access public
     */
    public $ContactDetails = null;

    /**
     * @var ContactPersonInformation[] $ContactPersons
     * @access public
     */
    public $ContactPersons = null;

    /**
     * @var int $CreditLimitTotal
     * @access public
     */
    public $CreditLimitTotal = null;

    /**
     * @var float $CreditLimitUsed
     * @access public
     */
    public $CreditLimitUsed = null;

    /**
     * @var string $CurrencyName
     * @access public
     */
    public $CurrencyName = null;

    /**
     * @var int $DebitorNumber
     * @access public
     */
    public $DebitorNumber = null;

    /**
     * @var LocalizedItem $DeliveryTerm
     * @access public
     */
    public $DeliveryTerm = null;

    /**
     * @var LocalizedItem $DispatchType
     * @access public
     */
    public $DispatchType = null;

    /**
     * @var string $EMail
     * @access public
     */
    public $EMail = null;

    /**
     * @var string $Fax
     * @access public
     */
    public $Fax = null;

    /**
     * @var string $Homepage
     * @access public
     */
    public $Homepage = null;

    /**
     * @var CustomerIdentifier $IdentifierV1
     * @access public
     */
    public $IdentifierV1 = null;

    /**
     * @var ImportInformation[] $ImportInformations
     * @access public
     */
    public $ImportInformations = null;

    /**
     * @var boolean $IsActive
     * @access public
     */
    public $IsActive = null;

    /**
     * @var string $Language
     * @access public
     */
    public $Language = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @var string $NameAffex
     * @access public
     */
    public $NameAffex = null;

    /**
     * @var string $Notice
     * @access public
     */
    public $Notice = null;

    /**
     * @var PaymentInformation[] $PaymentModes
     * @access public
     */
    public $PaymentModes = null;

    /**
     * @var string $Phone
     * @access public
     */
    public $Phone = null;

    /**
     * @var string $SalesTaxNumber
     * @access public
     */
    public $SalesTaxNumber = null;

    /**
     * @var string $SelfDefined1
     * @access public
     */
    public $SelfDefined1 = null;

    /**
     * @var string $SelfDefined2
     * @access public
     */
    public $SelfDefined2 = null;

    /**
     * @var string $SelfDefined3
     * @access public
     */
    public $SelfDefined3 = null;

    /**
     * @var string $Skype
     * @access public
     */
    public $Skype = null;

    /**
     * @var string $Warning
     * @access public
     */
    public $Warning = null;

    /**
     * @param int $AgentId
     * @param float $CreditLimitUsed
     * @param int $DebitorNumber
     * @param boolean $IsActive
     * @access public
     */
    public function __construct($AgentId, $CreditLimitUsed, $DebitorNumber, $IsActive)
    {
      $this->AgentId = $AgentId;
      $this->CreditLimitUsed = $CreditLimitUsed;
      $this->DebitorNumber = $DebitorNumber;
      $this->IsActive = $IsActive;
    }

}
