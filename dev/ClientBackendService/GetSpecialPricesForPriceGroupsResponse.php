<?php

class GetSpecialPricesForPriceGroupsResponse
{

    /**
     * @var SpecialPriceItem[] $GetSpecialPricesForPriceGroupsResult
     * @access public
     */
    public $GetSpecialPricesForPriceGroupsResult = null;

    /**
     * @param SpecialPriceItem[] $GetSpecialPricesForPriceGroupsResult
     * @access public
     */
    public function __construct($GetSpecialPricesForPriceGroupsResult)
    {
      $this->GetSpecialPricesForPriceGroupsResult = $GetSpecialPricesForPriceGroupsResult;
    }

}
