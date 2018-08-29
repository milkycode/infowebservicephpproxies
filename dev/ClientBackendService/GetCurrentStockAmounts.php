<?php

class GetCurrentStockAmounts
{

    /**
     * @var GetCurrentStockAmountsParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param GetCurrentStockAmountsParameter $parameter
     * @access public
     */
    public function __construct($parameter)
    {
      $this->parameter = $parameter;
    }

}
