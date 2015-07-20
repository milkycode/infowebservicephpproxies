<?php

class GetProductPriceListResponse
{

    /**
     * @var ProductPriceInformation[] $GetProductPriceListResult
     * @access public
     */
    public $GetProductPriceListResult = null;

    /**
     * @param ProductPriceInformation[] $GetProductPriceListResult
     * @access public
     */
    public function __construct($GetProductPriceListResult)
    {
      $this->GetProductPriceListResult = $GetProductPriceListResult;
    }

}
