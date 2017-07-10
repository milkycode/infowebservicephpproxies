<?php

class GetSpecialPricesForCustomerResponse
{

    /**
     * @var SpecialPriceItem[] $GetSpecialPricesForCustomerResult
     * @access public
     */
    public $GetSpecialPricesForCustomerResult = null;

    /**
     * @param SpecialPriceItem[] $GetSpecialPricesForCustomerResult
     * @access public
     */
    public function __construct($GetSpecialPricesForCustomerResult)
    {
      $this->GetSpecialPricesForCustomerResult = $GetSpecialPricesForCustomerResult;
    }

}
