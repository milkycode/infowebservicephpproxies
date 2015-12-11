<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Request_GetProductPrices
{
    /**
     * @var Promidata_Service_DTO_CustomerIdentifier $customerIdentifier
     * @access public
     */
    public $customerIdentifier = null;

    /**
     * @var Promidata_Service_DTO_ProductIdentifier $productIdentifier
     * @access public
     */
    public $productIdentifier = null;

    /**
     * @param Promidata_Service_DTO_CustomerIdentifier $customerIdentifier
     * @param Promidata_Service_DTO_ProductIdentifier $productIdentifier
     * @access public
     */
    public function __construct(Promidata_Service_DTO_CustomerIdentifier $customerIdentifier, Promidata_Service_DTO_ProductIdentifier $productIdentifier)
    {
        $this->customerIdentifier = $customerIdentifier;
        $this->productIdentifier = $productIdentifier;
    }
}