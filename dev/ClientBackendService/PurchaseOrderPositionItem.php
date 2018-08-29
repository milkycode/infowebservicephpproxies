<?php

class PurchaseOrderPositionItem
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
     * @var string $ArticleOrderText
     * @access public
     */
    public $ArticleOrderText = null;

    /**
     * @var float $BuyingPricePosition
     * @access public
     */
    public $BuyingPricePosition = null;

    /**
     * @var float $BuyingPriceTotal
     * @access public
     */
    public $BuyingPriceTotal = null;

    /**
     * @var string $ColorName
     * @access public
     */
    public $ColorName = null;

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
     * @var string $Option1Name
     * @access public
     */
    public $Option1Name = null;

    /**
     * @var string $Option2Name
     * @access public
     */
    public $Option2Name = null;

    /**
     * @var float $OrderedQuantity
     * @access public
     */
    public $OrderedQuantity = null;

    /**
     * @var float $OrderedQuantityAmount
     * @access public
     */
    public $OrderedQuantityAmount = null;

    /**
     * @var string $OrderedQuantityUnit
     * @access public
     */
    public $OrderedQuantityUnit = null;

    /**
     * @var PurchaseOrderBettermentItem[] $PurchaseOrderBetterments
     * @access public
     */
    public $PurchaseOrderBetterments = null;

    /**
     * @var string $SizeName
     * @access public
     */
    public $SizeName = null;

    /**
     * @param float $BuyingPricePosition
     * @param float $BuyingPriceTotal
     * @param dateTime $EarlyDeliveryDate
     * @param dateTime $LatestDeliveryDate
     * @param float $OrderedQuantity
     * @param float $OrderedQuantityAmount
     * @access public
     */
    public function __construct($BuyingPricePosition, $BuyingPriceTotal, $EarlyDeliveryDate, $LatestDeliveryDate, $OrderedQuantity, $OrderedQuantityAmount)
    {
      $this->BuyingPricePosition = $BuyingPricePosition;
      $this->BuyingPriceTotal = $BuyingPriceTotal;
      $this->EarlyDeliveryDate = $EarlyDeliveryDate;
      $this->LatestDeliveryDate = $LatestDeliveryDate;
      $this->OrderedQuantity = $OrderedQuantity;
      $this->OrderedQuantityAmount = $OrderedQuantityAmount;
    }

}
