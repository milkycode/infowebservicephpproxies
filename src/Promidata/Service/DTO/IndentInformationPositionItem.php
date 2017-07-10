<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_IndentInformationPositionItem
{
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
     * @var string $CalculatedPositionStateName
     * @access public
     */
    public $CalculatedPositionStateName = null;

    /**
     * @var string $ColorName
     * @access public
     */
    public $ColorName = null;

    /**
     * @var string $DeliveredPositionStateName
     * @access public
     */
    public $DeliveredPositionStateName = null;

    /**
     * @var string $DeliveryPositionStateName
     * @access public
     */
    public $DeliveryPositionStateName = null;

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
     * @var string $IndentConfirmationText
     * @access public
     */
    public $IndentConfirmationText = null;

    /**
     * @var Promidata_Service_DTO_IndentInformationBettermentItem[] $IndentInformationBetterments
     * @access public
     */
    public $IndentInformationBetterments = null;

    /**
     * @var dateTime $LatestDeliveryDate
     * @access public
     */
    public $LatestDeliveryDate = null;

    /**
     * @var string $Option1IdName
     * @access public
     */
    public $Option1IdName = null;

    /**
     * @var string $Option2IdName
     * @access public
     */
    public $Option2IdName = null;

    /**
     * @var string $OrderPositionStateName
     * @access public
     */
    public $OrderPositionStateName = null;

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
     * @var float $QuantityCorrectedAmount
     * @access public
     */
    public $QuantityCorrectedAmount = null;

    /**
     * @var string $QuantityCorrectedUnit
     * @access public
     */
    public $QuantityCorrectedUnit = null;

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
     * @param boolean $DirectDispatch
     * @param dateTime $EarlyDeliveryDate
     * @param dateTime $LatestDeliveryDate
     * @param float $QuantityAmount
     * @param float $QuantityCorrectedAmount
     * @access public
     */
    public function __construct($DirectDispatch, $EarlyDeliveryDate, $LatestDeliveryDate, $QuantityAmount, $QuantityCorrectedAmount)
    {
        $this->DirectDispatch = $DirectDispatch;
        $this->EarlyDeliveryDate = $EarlyDeliveryDate;
        $this->LatestDeliveryDate = $LatestDeliveryDate;
        $this->QuantityAmount = $QuantityAmount;
        $this->QuantityCorrectedAmount = $QuantityCorrectedAmount;
    }
}