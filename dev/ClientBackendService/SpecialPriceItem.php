<?php

class SpecialPriceItem
{

    /**
     * @var int $AmountOfUnits
     * @access public
     */
    public $AmountOfUnits = null;

    /**
     * @var boolean $IsCompletePrice
     * @access public
     */
    public $IsCompletePrice = null;

    /**
     * @var float $Price
     * @access public
     */
    public $Price = null;

    /**
     * @var guid $ProductIdentifier
     * @access public
     */
    public $ProductIdentifier = null;

    /**
     * @var dateTime $ValidFrom
     * @access public
     */
    public $ValidFrom = null;

    /**
     * @var dateTime $ValidTill
     * @access public
     */
    public $ValidTill = null;

    /**
     * @var guid $VariationIdentifier
     * @access public
     */
    public $VariationIdentifier = null;

    /**
     * @param int $AmountOfUnits
     * @param boolean $IsCompletePrice
     * @param float $Price
     * @param guid $ProductIdentifier
     * @param guid $VariationIdentifier
     * @access public
     */
    public function __construct($AmountOfUnits, $IsCompletePrice, $Price, $ProductIdentifier, $VariationIdentifier)
    {
      $this->AmountOfUnits = $AmountOfUnits;
      $this->IsCompletePrice = $IsCompletePrice;
      $this->Price = $Price;
      $this->ProductIdentifier = $ProductIdentifier;
      $this->VariationIdentifier = $VariationIdentifier;
    }

}
