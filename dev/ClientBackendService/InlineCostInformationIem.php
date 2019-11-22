<?php

class InlineCostInformationIem
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
     * @var float $BuyingPriceBaseQuantity
     * @access public
     */
    public $BuyingPriceBaseQuantity = null;

    /**
     * @var string $BuyingPriceBaseQuantityUnit
     * @access public
     */
    public $BuyingPriceBaseQuantityUnit = null;

    /**
     * @var float $BuyingPricePosition
     * @access public
     */
    public $BuyingPricePosition = null;

    /**
     * @var string $IndentConfirmationText
     * @access public
     */
    public $IndentConfirmationText = null;

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
     * @var float $SellingPriceBaseQuantity
     * @access public
     */
    public $SellingPriceBaseQuantity = null;

    /**
     * @var string $SellingPriceBaseQuantityUnit
     * @access public
     */
    public $SellingPriceBaseQuantityUnit = null;

    /**
     * @var float $SellingPricePosition
     * @access public
     */
    public $SellingPricePosition = null;

    /**
     * @param float $BuyingPriceBaseQuantity
     * @param float $BuyingPricePosition
     * @param float $QuantityAmount
     * @param float $SellingPriceBaseQuantity
     * @param float $SellingPricePosition
     * @access public
     */
    public function __construct($BuyingPriceBaseQuantity, $BuyingPricePosition, $QuantityAmount, $SellingPriceBaseQuantity, $SellingPricePosition)
    {
      $this->BuyingPriceBaseQuantity = $BuyingPriceBaseQuantity;
      $this->BuyingPricePosition = $BuyingPricePosition;
      $this->QuantityAmount = $QuantityAmount;
      $this->SellingPriceBaseQuantity = $SellingPriceBaseQuantity;
      $this->SellingPricePosition = $SellingPricePosition;
    }

}
