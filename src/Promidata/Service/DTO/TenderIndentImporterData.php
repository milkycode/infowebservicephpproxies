<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_TenderIndentImporterData
{
    /**
     * @var guid $AutomaticDeliveryConditionId
     * @access public
     */
    public $AutomaticDeliveryConditionId = null;

    /**
     * @var boolean $AvailabilityCheckEnabled
     * @access public
     */
    public $AvailabilityCheckEnabled = null;

    /**
     * @var string $Categorie
     * @access public
     */
    public $Categorie = null;

    /**
     * @var string $CustomerText
     * @access public
     */
    public $CustomerText = null;

    /**
     * @var int $DebitorNumber
     * @access public
     */
    public $DebitorNumber = null;

    /**
     * @var Promidata_Service_DTO_TenderIndentImporterAddressData $DeliveryAddress
     * @access public
     */
    public $DeliveryAddress = null;

    /**
     * @var string $DeliveryTerm
     * @access public
     */
    public $DeliveryTerm = null;

    /**
     * @var string $DispatchType
     * @access public
     */
    public $DispatchType = null;

    /**
     * @var string $FooterText
     * @access public
     */
    public $FooterText = null;

    /**
     * @var string $HeaderText
     * @access public
     */
    public $HeaderText = null;

    /**
     * @var string $ImportType
     * @access public
     */
    public $ImportType = null;

    /**
     * @var string $ImportTypePrefix
     * @access public
     */
    public $ImportTypePrefix = null;

    /**
     * @var string $ImportTypeSuffix
     * @access public
     */
    public $ImportTypeSuffix = null;

    /**
     * @var Promidata_Service_DTO_TenderIndentImporterAddressData $InvoiceAddress
     * @access public
     */
    public $InvoiceAddress = null;

    /**
     * @var string $Notice
     * @access public
     */
    public $Notice = null;

    /**
     * @var string[] $PaymentModeList
     * @access public
     */
    public $PaymentModeList = null;

    /**
     * @var Promidata_Service_DTO_TenderIndentImporterPositionData[] $PositionList
     * @access public
     */
    public $PositionList = null;

    /**
     * @var Promidata_Service_DTO_TenderIndentImporterAddressData $PostAddress
     * @access public
     */
    public $PostAddress = null;

    /**
     * @var string $StorageLocation
     * @access public
     */
    public $StorageLocation = null;

    /**
     * @var string $Warning
     * @access public
     */
    public $Warning = null;

    /**
     * @param int $DebitorNumber
     * @access public
     */
    public function __construct($DebitorNumber)
    {
        $this->DebitorNumber = $DebitorNumber;
    }
}