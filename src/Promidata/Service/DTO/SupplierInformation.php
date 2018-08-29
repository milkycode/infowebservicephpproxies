<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_SupplierInformation
{
    /**
     * @var Promidata_Service_DTO_SimpleAddress[] $Adresses
     * @access public
     */
    public $Adresses = null;

    /**
     * @var string $ArticleInfo
     * @access public
     */
    public $ArticleInfo = null;

    /**
     * @var Promidata_Service_DTO_ContactDetail[] $ContactDetails
     * @access public
     */
    public $ContactDetails = null;

    /**
     * @var Promidata_Service_DTO_ContactPersonInformation[] $ContactPersons
     * @access public
     */
    public $ContactPersons = null;

    /**
     * @var int $CreditorNumber
     * @access public
     */
    public $CreditorNumber = null;

    /**
     * @var string $CurrencyName
     * @access public
     */
    public $CurrencyName = null;

    /**
     * @var string $CustomerNumber
     * @access public
     */
    public $CustomerNumber = null;

    /**
     * @var dateTime $DateInsert
     * @access public
     */
    public $DateInsert = null;

    /**
     * @var dateTime $DateUpdate
     * @access public
     */
    public $DateUpdate = null;

    /**
     * @var int $DeliveryCorrectionDaysForOrder
     * @access public
     */
    public $DeliveryCorrectionDaysForOrder = null;

    /**
     * @var Promidata_Service_DTO_LocalizedItem $DispatchType
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
     * @var Promidata_Service_DTO_SupplierIdentifier $IdentifierV1
     * @access public
     */
    public $IdentifierV1 = null;

    /**
     * @var Promidata_Service_DTO_ImportInformation[] $ImportInformations
     * @access public
     */
    public $ImportInformations = null;

    /**
     * @var boolean $IsActive
     * @access public
     */
    public $IsActive = null;

    /**
     * @var boolean $IsProductionSupplier
     * @access public
     */
    public $IsProductionSupplier = null;

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
     * @var Promidata_Service_DTO_PaymentInformation[] $PaymentModes
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
     * @var string $SupplierSearchName
     * @access public
     */
    public $SupplierSearchName = null;

    /**
     * @var boolean $UseOwnDeliveryCorrectionDaysForOrder
     * @access public
     */
    public $UseOwnDeliveryCorrectionDaysForOrder = null;

    /**
     * @var string $Warning
     * @access public
     */
    public $Warning = null;

    /**
     * @param int $CreditorNumber
     * @param dateTime $DateInsert
     * @param dateTime $DateUpdate
     * @param int $DeliveryCorrectionDaysForOrder
     * @param boolean $IsActive
     * @param boolean $IsProductionSupplier
     * @param boolean $UseOwnDeliveryCorrectionDaysForOrder
     * @access public
     */
    public function __construct($CreditorNumber, $DateInsert, $DateUpdate, $DeliveryCorrectionDaysForOrder, $IsActive, $IsProductionSupplier, $UseOwnDeliveryCorrectionDaysForOrder)
    {
        $this->CreditorNumber = $CreditorNumber;
        $this->DateInsert = $DateInsert;
        $this->DateUpdate = $DateUpdate;
        $this->DeliveryCorrectionDaysForOrder = $DeliveryCorrectionDaysForOrder;
        $this->IsActive = $IsActive;
        $this->IsProductionSupplier = $IsProductionSupplier;
        $this->UseOwnDeliveryCorrectionDaysForOrder = $UseOwnDeliveryCorrectionDaysForOrder;
    }
}