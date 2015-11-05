<?php

class GetPurchaseOrderInformationResponse
{

    /**
     * @var PurchaseOrderInformation $GetPurchaseOrderInformationResult
     * @access public
     */
    public $GetPurchaseOrderInformationResult = null;

    /**
     * @param PurchaseOrderInformation $GetPurchaseOrderInformationResult
     * @access public
     */
    public function __construct($GetPurchaseOrderInformationResult)
    {
      $this->GetPurchaseOrderInformationResult = $GetPurchaseOrderInformationResult;
    }

}
