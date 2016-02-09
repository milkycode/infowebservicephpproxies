<?php

class GetPurchaseOrderInformation
{

    /**
     * @var PurchaseOrderIdentifier $identifierV1
     * @access public
     */
    public $identifierV1 = null;

    /**
     * @param PurchaseOrderIdentifier $identifierV1
     * @access public
     */
    public function __construct($identifierV1)
    {
      $this->identifierV1 = $identifierV1;
    }

}
