<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_IndentInformationItem
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
     * @var float $CalculatedSellingPrice
     * @access public
     */
    public $CalculatedSellingPrice = null;

    /**
     * @var string $ColliOfLastDeliverNoteToCustomer
     * @access public
     */
    public $ColliOfLastDeliverNoteToCustomer = null;

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
     * @var dateTime $DateOfLastDeliverNoteToCustomer
     * @access public
     */
    public $DateOfLastDeliverNoteToCustomer = null;

    /**
     * @var boolean $DepositBlocked
     * @access public
     */
    public $DepositBlocked = null;

    /**
     * @var boolean $DepositManualUnblocked
     * @access public
     */
    public $DepositManualUnblocked = null;

    /**
     * @var string $DispatchType
     * @access public
     */
    public $DispatchType = null;

    /**
     * @var string $IndentCalculatedPositionStateName
     * @access public
     */
    public $IndentCalculatedPositionStateName = null;

    /**
     * @var string $IndentCategories
     * @access public
     */
    public $IndentCategories = null;

    /**
     * @var string $IndentDeliveredPositionStateName
     * @access public
     */
    public $IndentDeliveredPositionStateName = null;

    /**
     * @var string $IndentDeliveryPositionStateName
     * @access public
     */
    public $IndentDeliveryPositionStateName = null;

    /**
     * @var string $IndentGeneralStatusName
     * @access public
     */
    public $IndentGeneralStatusName = null;

    /**
     * @var Promidata_Service_DTO_IndentInformationEventItem[] $IndentInformationEvents
     * @access public
     */
    public $IndentInformationEvents = null;

    /**
     * @var Promidata_Service_DTO_IndentInformationPositionItem[] $IndentInformationPositions
     * @access public
     */
    public $IndentInformationPositions = null;

    /**
     * @var int $IndentNumber
     * @access public
     */
    public $IndentNumber = null;

    /**
     * @var string $IndentNumberFull
     * @access public
     */
    public $IndentNumberFull = null;

    /**
     * @var string $IndentNumberPrefix
     * @access public
     */
    public $IndentNumberPrefix = null;

    /**
     * @var string $IndentNumberSuffix
     * @access public
     */
    public $IndentNumberSuffix = null;

    /**
     * @var string $IndentOrderPositionStateName
     * @access public
     */
    public $IndentOrderPositionStateName = null;

    /**
     * @var string $IndentUserEventName
     * @access public
     */
    public $IndentUserEventName = null;

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
     * @var LinkItemV1[] $LinkList
     * @access public
     */
    public $LinkList = null;

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
     * @var string $TotalWeightOfLastDeliverNoteToCustomer
     * @access public
     */
    public $TotalWeightOfLastDeliverNoteToCustomer = null;

    /**
     * @var string $TrackingNumberOfLastDeliverNoteToCustomer
     * @access public
     */
    public $TrackingNumberOfLastDeliverNoteToCustomer = null;

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
     * @param float $CalculatedSellingPrice
     * @param dateTime $DateInsert
     * @param boolean $DepositManualUnblocked
     * @param int $IndentNumber
     * @param boolean $IsClosed
     * @param float $SellingPrice
     * @param dateTime $SollEndDatum
     * @param dateTime $UpdateTime
     * @access public
     */
    public function __construct($BuyingPrice, $CalculatedSellingPrice, $DateInsert, $DepositManualUnblocked, $IndentNumber, $IsClosed, $SellingPrice, $SollEndDatum, $UpdateTime)
    {
        $this->BuyingPrice = $BuyingPrice;
        $this->CalculatedSellingPrice = $CalculatedSellingPrice;
        $this->DateInsert = $DateInsert;
        $this->DepositManualUnblocked = $DepositManualUnblocked;
        $this->IndentNumber = $IndentNumber;
        $this->IsClosed = $IsClosed;
        $this->SellingPrice = $SellingPrice;
        $this->SollEndDatum = $SollEndDatum;
        $this->UpdateTime = $UpdateTime;
    }
}