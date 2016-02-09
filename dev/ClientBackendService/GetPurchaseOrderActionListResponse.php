<?php

class GetPurchaseOrderActionListResponse
{

    /**
     * @var PurchaseOrderAction[] $GetPurchaseOrderActionListResult
     * @access public
     */
    public $GetPurchaseOrderActionListResult = null;

    /**
     * @param PurchaseOrderAction[] $GetPurchaseOrderActionListResult
     * @access public
     */
    public function __construct($GetPurchaseOrderActionListResult)
    {
      $this->GetPurchaseOrderActionListResult = $GetPurchaseOrderActionListResult;
    }

}
