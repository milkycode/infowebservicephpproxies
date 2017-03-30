<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_IndentInformationBettermentItem
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
     * @var string $BettermentDeliveredStateName
     * @access public
     */
    public $BettermentDeliveredStateName = null;

    /**
     * @var string $BettermentOrderStateName
     * @access public
     */
    public $BettermentOrderStateName = null;

    /**
     * @var string $BettermentReceivedStateName
     * @access public
     */
    public $BettermentReceivedStateName = null;

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
     * @var string $IndentConfirmationText
     * @access public
     */
    public $IndentConfirmationText = null;

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
     * @var string $SupplierNameAffex
     * @access public
     */
    public $SupplierNameAffex = null;

    /**
     * @param boolean $DirectDispatch
     * @param float $QuantityAmount
     * @access public
     */
    public function __construct($DirectDispatch, $QuantityAmount)
    {
        $this->DirectDispatch = $DirectDispatch;
        $this->QuantityAmount = $QuantityAmount;
    }
}