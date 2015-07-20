<?php

class GetProductPricesResponse
{

    /**
     * @var ProductPriceInformation[] $GetProductPricesResult
     * @access public
     */
    public $GetProductPricesResult = null;

    /**
     * @param ProductPriceInformation[] $GetProductPricesResult
     * @access public
     */
    public function __construct($GetProductPricesResult)
    {
      $this->GetProductPricesResult = $GetProductPricesResult;
    }

}
