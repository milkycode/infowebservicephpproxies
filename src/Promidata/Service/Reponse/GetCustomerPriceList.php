<?php

class Promidata_Service_Reponse_GetCustomerPriceList
{

    /**
     *
     * @var Promidata_Service_DTO_ProductPriceInformation[] $GetCustomerPriceListResult
     * @access public
     */
    public $GetCustomerPriceListResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ProductPriceInformation[] $GetCustomerPriceListResult
     * @access public
     */
    public function __construct($GetCustomerPriceListResult)
    {
        $this->GetCustomerPriceListResult = $GetCustomerPriceListResult;
    }

}
