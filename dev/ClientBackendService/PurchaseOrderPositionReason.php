<?php

class PurchaseOrderPositionReason
{

    /**
     * @var string $IndentCustomerName
     * @access public
     */
    public $IndentCustomerName = null;

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
     * @var guid $IndentPositionIdentifier
     * @access public
     */
    public $IndentPositionIdentifier = null;

    /**
     * @var float $OrderedQuantityAmount
     * @access public
     */
    public $OrderedQuantityAmount = null;

    /**
     * @var float $OrderedQuantityExtraAmount
     * @access public
     */
    public $OrderedQuantityExtraAmount = null;

    /**
     * @var string $OrderedQuantityExtraUnit
     * @access public
     */
    public $OrderedQuantityExtraUnit = null;

    /**
     * @var string $OrderedQuantityUnit
     * @access public
     */
    public $OrderedQuantityUnit = null;

    /**
     * @param int $IndentNumber
     * @param float $OrderedQuantityAmount
     * @param float $OrderedQuantityExtraAmount
     * @access public
     */
    public function __construct($IndentNumber, $OrderedQuantityAmount, $OrderedQuantityExtraAmount)
    {
      $this->IndentNumber = $IndentNumber;
      $this->OrderedQuantityAmount = $OrderedQuantityAmount;
      $this->OrderedQuantityExtraAmount = $OrderedQuantityExtraAmount;
    }

}
