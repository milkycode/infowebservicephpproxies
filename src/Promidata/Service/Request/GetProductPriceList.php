<?php

class Promidata_Service_Request_GetProductPriceList
{

    /**
     *
     * @var Promidata_Service_DTO_ProductIdentifier $productIdentifier
     * @access public
     */
    public $productIdentifier = null;

    /**
     *
     * @param Promidata_Service_DTO_ProductIdentifier $productIdentifier
     * @access public
     */
    public function __construct($productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }

}
