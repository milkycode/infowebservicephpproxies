<?php

class ChangePurchaseOrderAction
{

    /**
     * @var ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter
     * @access public
     */
    public $changePurchaseOrderActionParameter = null;

    /**
     * @param ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter
     * @access public
     */
    public function __construct($changePurchaseOrderActionParameter)
    {
      $this->changePurchaseOrderActionParameter = $changePurchaseOrderActionParameter;
    }

}
