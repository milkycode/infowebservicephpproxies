<?php

class GetCustomerPriceListResponse
{

    /**
     * @var ProductPriceInformation[] $GetCustomerPriceListResult
     * @access public
     */
    public $GetCustomerPriceListResult = null;

    /**
     * @param ProductPriceInformation[] $GetCustomerPriceListResult
     * @access public
     */
    public function __construct($GetCustomerPriceListResult)
    {
      $this->GetCustomerPriceListResult = $GetCustomerPriceListResult;
    }

}
