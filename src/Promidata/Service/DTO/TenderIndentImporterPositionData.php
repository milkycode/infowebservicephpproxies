<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_TenderIndentImporterPositionData
{
    /**
     * @var Promidata_Service_DTO_TenderIndentImporterBettermentData[] $BettermentList
     * @access public
     */
    public $BettermentList = null;

    /**
     * @var float $BuyingPricePerUnit
     * @access public
     */
    public $BuyingPricePerUnit = null;

    /**
     * @var Promidata_Service_DTO_TenderIndentImporterRelayData[] $BuyingRelayList
     * @access public
     */
    public $BuyingRelayList = null;

    /**
     * @var string $CustomerArticleDeliverynoteText
     * @access public
     */
    public $CustomerArticleDeliverynoteText = null;

    /**
     * @var string $CustomerArticleDescription
     * @access public
     */
    public $CustomerArticleDescription = null;

    /**
     * @var string $CustomerArticleIndentText
     * @access public
     */
    public $CustomerArticleIndentText = null;

    /**
     * @var string $CustomerArticleName
     * @access public
     */
    public $CustomerArticleName = null;

    /**
     * @var string $CustomerArticleTenderText
     * @access public
     */
    public $CustomerArticleTenderText = null;

    /**
     * @var string $CustomerArticleTextIntern
     * @access public
     */
    public $CustomerArticleTextIntern = null;

    /**
     * @var boolean $DirectDispatch
     * @access public
     */
    public $DirectDispatch = null;

    /**
     * @var float $Discount
     * @access public
     */
    public $Discount = null;

    /**
     *
     * @var dateTime $EarliestDeliveryDate
     * @access public
     */
    public $EarliestDeliveryDate = null;

    /**
     * @var boolean $IsStockArticle
     * @access public
     */
    public $IsStockArticle = null;

    /**
     * @var dateTime $LatestDeliveryDate
     * @access public
     */
    public $LatestDeliveryDate = null;

    /**
     * @var string $MyArticleNumber
     * @access public
     */
    public $MyArticleNumber = null;

    /**
     * @var boolean $PrintPosition
     * @access public
     */
    public $PrintPosition = null;

    /**
     * @var boolean $PrintPricePerUnit
     * @access public
     */
    public $PrintPricePerUnit = null;

    /**
     * @var float $Quantity
     * @access public
     */
    public $Quantity = null;

    /**
     * @var string $QuantityUnit
     * @access public
     */
    public $QuantityUnit = null;

    /**
     * @var float $SellingPricePerUnit
     * @access public
     */
    public $SellingPricePerUnit = null;

    /**
     * @var Promidata_Service_DTO_TenderIndentImporterRelayData[] $SellingRelayList
     * @access public
     */
    public $SellingRelayList = null;

    /**
     * @var string $SupplierName
     * @access public
     */
    public $SupplierName = null;

    /**
     * @param float $Quantity
     * @access public
     */
    public function __construct($Quantity)
    {
        $this->Quantity = $Quantity;
    }
}