<?php

class SearchPurchaseOrder
{

    /**
     * @var PurchaseOrderSearchParameter[] $purchaseOrderSearchParameters
     * @access public
     */
    public $purchaseOrderSearchParameters = null;

    /**
     * @param PurchaseOrderSearchParameter[] $purchaseOrderSearchParameters
     * @access public
     */
    public function __construct($purchaseOrderSearchParameters)
    {
      $this->purchaseOrderSearchParameters = $purchaseOrderSearchParameters;
    }

}
