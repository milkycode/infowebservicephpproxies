<?php

class GetCurrentStockAmountsResponse
{

    /**
     * @var GetCurrentStockAmountsResult $GetCurrentStockAmountsResult
     * @access public
     */
    public $GetCurrentStockAmountsResult = null;

    /**
     * @param GetCurrentStockAmountsResult $GetCurrentStockAmountsResult
     * @access public
     */
    public function __construct($GetCurrentStockAmountsResult)
    {
      $this->GetCurrentStockAmountsResult = $GetCurrentStockAmountsResult;
    }

}
