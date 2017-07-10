<?php

class PurchaseOrderIdentifier
{

    /**
     * @var int $PurchaseOrderNumber
     * @access public
     */
    public $PurchaseOrderNumber = null;

    /**
     * @param int $PurchaseOrderNumber
     * @access public
     */
    public function __construct($PurchaseOrderNumber)
    {
      $this->PurchaseOrderNumber = $PurchaseOrderNumber;
    }

}
