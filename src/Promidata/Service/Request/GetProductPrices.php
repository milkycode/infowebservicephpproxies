<?php

class Promidata_Service_Request_GetProductPrices
{

    /**
     *
     * @var Promidata_Service_DTO_CustomerIdentifier $customerIdentifier
     * @access public
     */
    public $customerIdentifier = null;

    /**
     *
     * @var Promidata_Service_DTO_ProductIdentifier $productIdentifier
     * @access public
     */
    public $productIdentifier = null;

    /**
     *
     * @param Promidata_Service_DTO_CustomerIdentifier $customerIdentifier
     * @param Promidata_Service_DTO_ProductIdentifier $productIdentifier
     * @access public
     */
    public function __construct($customerIdentifier, $productIdentifier)
    {
        $this->customerIdentifier = $customerIdentifier;
        $this->productIdentifier = $productIdentifier;
    }

}
