<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_TenderInformationPositionItem
{
    /**
     * @var string $ArticleDescription
     * @access public
     */
    public $ArticleDescription = null;

    /**
     * @var string $ArticleName
     * @access public
     */
    public $ArticleName = null;

    /**
     * @var string $ArticleOrderNumber
     * @access public
     */
    public $ArticleOrderNumber = null;

    /**
     * @var string $ArticleTextIntern
     * @access public
     */
    public $ArticleTextIntern = null;

    /**
     * @var string $ColorName
     * @access public
     */
    public $ColorName = null;

    /**
     * @var boolean $DirectDispatch
     * @access public
     */
    public $DirectDispatch = null;

    /**
     * @var dateTime $EarlyDeliveryDate
     * @access public
     */
    public $EarlyDeliveryDate = null;

    /**
     * @var dateTime $LatestDeliveryDate
     * @access public
     */
    public $LatestDeliveryDate = null;

    /**
     * @var string $Option1Key
     * @access public
     */
    public $Option1Key = null;

    /**
     * @var string $Option1Name
     * @access public
     */
    public $Option1Name = null;

    /**
     * @var string $Option2Key
     * @access public
     */
    public $Option2Key = null;

    /**
     * @var string $Option2Name
     * @access public
     */
    public $Option2Name = null;

    /**
     * @var string $OwnArticleNumber
     * @access public
     */
    public $OwnArticleNumber = null;

    /**
     * @var float $QuantityAmount
     * @access public
     */
    public $QuantityAmount = null;

    /**
     * @var string $QuantityUnit
     * @access public
     */
    public $QuantityUnit = null;

    /**
     * @var string $SizeName
     * @access public
     */
    public $SizeName = null;

    /**
     * @var string $SupplierName
     * @access public
     */
    public $SupplierName = null;

    /**
     * @var string $TenderConfirmationText
     * @access public
     */
    public $TenderConfirmationText = null;

    /**
     * @var Promidata_Service_DTO_TenderInformationBettermentItem[] $TenderInformationBetterments
     * @access public
     */
    public $TenderInformationBetterments = null;

    /**
     * @var Promidata_Service_DTO_InlineCostInformationIem[] $TenderInlineCostInformations
     * @access public
     */
    public $TenderInlineCostInformations = null;

    /**
     * @param boolean $DirectDispatch
     * @param dateTime $EarlyDeliveryDate
     * @param dateTime $LatestDeliveryDate
     * @param float $QuantityAmount
     * @access public
     */
    public function __construct($DirectDispatch, $EarlyDeliveryDate, $LatestDeliveryDate, $QuantityAmount)
    {
        $this->DirectDispatch = $DirectDispatch;
        $this->EarlyDeliveryDate = $EarlyDeliveryDate;
        $this->LatestDeliveryDate = $LatestDeliveryDate;
        $this->QuantityAmount = $QuantityAmount;
    }
}