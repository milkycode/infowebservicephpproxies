<?php

class Promidata_Service_Response_GetProductPriceList
{

    /**
     *
     * @var Promidata_Service_DTO_ProductPriceInformation[] $GetProductPriceListResult
     * @access public
     */
    public $GetProductPriceListResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ProductPriceInformation[] $GetProductPriceListResult
     * @access public
     */
    public function __construct($GetProductPriceListResult)
    {
        $this->GetProductPriceListResult = $GetProductPriceListResult;
    }

}
