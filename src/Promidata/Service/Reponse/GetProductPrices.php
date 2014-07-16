<?php

class Promidata_Service_Reponse_GetProductPrices
{

    /**
     *
     * @var Promidata_Service_DTO_ProductPriceInformation[] $GetProductPricesResult
     * @access public
     */
    public $GetProductPricesResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ProductPriceInformation[] $GetProductPricesResult
     * @access public
     */
    public function __construct($GetProductPricesResult)
    {
        $this->GetProductPricesResult = $GetProductPricesResult;
    }

}
