<?php

class SearchPurchaseOrderResponse
{

    /**
     * @var PurchaseOrderSearchResult[] $SearchPurchaseOrderResult
     * @access public
     */
    public $SearchPurchaseOrderResult = null;

    /**
     * @param PurchaseOrderSearchResult[] $SearchPurchaseOrderResult
     * @access public
     */
    public function __construct($SearchPurchaseOrderResult)
    {
      $this->SearchPurchaseOrderResult = $SearchPurchaseOrderResult;
    }

}
