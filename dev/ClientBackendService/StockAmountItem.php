<?php

class StockAmountItem
{

    /**
     * @var boolean $HasBetterment
     * @access public
     */
    public $HasBetterment = null;

    /**
     * @var string $Option1Key
     * @access public
     */
    public $Option1Key = null;

    /**
     * @var string $Option2Key
     * @access public
     */
    public $Option2Key = null;

    /**
     * @var string $OrderNumber
     * @access public
     */
    public $OrderNumber = null;

    /**
     * @var string $OwnArticleNumber
     * @access public
     */
    public $OwnArticleNumber = null;

    /**
     * @var guid $ProductIdentifier
     * @access public
     */
    public $ProductIdentifier = null;

    /**
     * @var float $StockAmountTotalAmount
     * @access public
     */
    public $StockAmountTotalAmount = null;

    /**
     * @var string $StockAmountTotalUnit
     * @access public
     */
    public $StockAmountTotalUnit = null;

    /**
     * @var string $StorageAreaName
     * @access public
     */
    public $StorageAreaName = null;

    /**
     * @var guid $VariationIdentifier
     * @access public
     */
    public $VariationIdentifier = null;

    /**
     * @param boolean $HasBetterment
     * @param guid $ProductIdentifier
     * @param float $StockAmountTotalAmount
     * @param guid $VariationIdentifier
     * @access public
     */
    public function __construct($HasBetterment, $ProductIdentifier, $StockAmountTotalAmount, $VariationIdentifier)
    {
      $this->HasBetterment = $HasBetterment;
      $this->ProductIdentifier = $ProductIdentifier;
      $this->StockAmountTotalAmount = $StockAmountTotalAmount;
      $this->VariationIdentifier = $VariationIdentifier;
    }

}
