<?php

class ChangePurchaseOrderActionResponse
{

    /**
     * @var ChangePurchaseOrderActionResult $ChangePurchaseOrderActionResult
     * @access public
     */
    public $ChangePurchaseOrderActionResult = null;

    /**
     * @param ChangePurchaseOrderActionResult $ChangePurchaseOrderActionResult
     * @access public
     */
    public function __construct($ChangePurchaseOrderActionResult)
    {
      $this->ChangePurchaseOrderActionResult = $ChangePurchaseOrderActionResult;
    }

}
