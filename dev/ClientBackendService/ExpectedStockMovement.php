<?php

class ExpectedStockMovement
{

    /**
     * @var boolean $MayBePrefered
     * @access public
     */
    public $MayBePrefered = null;

    /**
     * @var dateTime $MovementDate
     * @access public
     */
    public $MovementDate = null;

    /**
     * @var string $ProductNumber
     * @access public
     */
    public $ProductNumber = null;

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
     * @param boolean $MayBePrefered
     * @param dateTime $MovementDate
     * @param float $Quantity
     * @access public
     */
    public function __construct($MayBePrefered, $MovementDate, $Quantity)
    {
      $this->MayBePrefered = $MayBePrefered;
      $this->MovementDate = $MovementDate;
      $this->Quantity = $Quantity;
    }

}
