<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_TenderInformationItem
{
    /**
     * @var string $AdministrativUserFullName
     * @access public
     */
    public $AdministrativUserFullName = null;

    /**
     * @var string $AgentFullName
     * @access public
     */
    public $AgentFullName = null;

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
     * @var float $BuyingPrice
     * @access public
     */
    public $BuyingPrice = null;

    /**
     * @var Promidata_Service_DTO_TenderInformationConvertItem[] $ConvertList
     * @access public
     */
    public $ConvertList = null;

    /**
     * @var string $CreatorFullName
     * @access public
     */
    public $CreatorFullName = null;

    /**
     * @var string $CustomerText
     * @access public
     */
    public $CustomerText = null;

    /**
     * @var dateTime $DateInsert
     * @access public
     */
    public $DateInsert = null;

    /**
     * @var int $DebitorNumber
     * @access public
     */
    public $DebitorNumber = null;

    /**
     * @var Promidata_Service_DTO_ComplexAddress $DispatchAddress
     * @access public
     */
    public $DispatchAddress = null;

    /**
     * @var string $DispatchType
     * @access public
     */
    public $DispatchType = null;

    /**
     * @var float $ExpectedIndentValue
     * @access public
     */
    public $ExpectedIndentValue = null;

    /**
     * @var Promidata_Service_DTO_ComplexAddress $InvoiceAddress
     * @access public
     */
    public $InvoiceAddress = null;

    /**
     * @var boolean $IsClosed
     * @access public
     */
    public $IsClosed = null;

    /**
     * @var string $JobReference
     * @access public
     */
    public $JobReference = null;

    /**
     * @var Promidata_Service_DTO_LinkItemV1[] $LinkList
     * @access public
     */
    public $LinkList = null;

    /**
     * @var Promidata_Service_DTO_ComplexAddress $PostAddress
     * @access public
     */
    public $PostAddress = null;

    /**
     * @var string $PostAdressMail
     * @access public
     */
    public $PostAdressMail = null;

    /**
     * @var string $PostAdressPhone
     * @access public
     */
    public $PostAdressPhone = null;

    /**
     * @var float $SellingPrice
     * @access public
     */
    public $SellingPrice = null;

    /**
     * @var dateTime $SollEndDatum
     * @access public
     */
    public $SollEndDatum = null;

    /**
     * @var string $TenderCategories
     * @access public
     */
    public $TenderCategories = null;

    /**
     * @var string $TenderGeneralStatusName
     * @access public
     */
    public $TenderGeneralStatusName = null;

    /**
     * @var Promidata_Service_DTO_TenderInformationEventItem[] $TenderInformationEvents
     * @access public
     */
    public $TenderInformationEvents = null;

    /**
     * @var Promidata_Service_DTO_TenderInformationPositionItem[] $TenderInformationPositions
     * @access public
     */
    public $TenderInformationPositions = null;

    /**
     * @var int $TenderNumber
     * @access public
     */
    public $TenderNumber = null;

    /**
     * @var string $TenderNumberFull
     * @access public
     */
    public $TenderNumberFull = null;

    /**
     * @var string $TenderNumberPrefix
     * @access public
     */
    public $TenderNumberPrefix = null;

    /**
     * @var string $TenderNumberSuffix
     * @access public
     */
    public $TenderNumberSuffix = null;

    /**
     * @var string $TenderUserEventName
     * @access public
     */
    public $TenderUserEventName = null;

    /**
     * @var dateTime $UpdateTime
     * @access public
     */
    public $UpdateTime = null;

    /**
     * @var dateTime $WishDeliveryDate
     * @access public
     */
    public $WishDeliveryDate = null;

    /**
     * @param float $BuyingPrice
     * @param dateTime $DateInsert
     * @param int $DebitorNumber
     * @param float $ExpectedIndentValue
     * @param boolean $IsClosed
     * @param float $SellingPrice
     * @param dateTime $SollEndDatum
     * @param int $TenderNumber
     * @param dateTime $UpdateTime
     * @access public
     */
    public function __construct($BuyingPrice, $DateInsert, $DebitorNumber, $ExpectedIndentValue, $IsClosed, $SellingPrice, $SollEndDatum, $TenderNumber, $UpdateTime)
    {
        $this->BuyingPrice = $BuyingPrice;
        $this->DateInsert = $DateInsert;
        $this->DebitorNumber = $DebitorNumber;
        $this->ExpectedIndentValue = $ExpectedIndentValue;
        $this->IsClosed = $IsClosed;
        $this->SellingPrice = $SellingPrice;
        $this->SollEndDatum = $SollEndDatum;
        $this->TenderNumber = $TenderNumber;
        $this->UpdateTime = $UpdateTime;
    }
}