<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Request_SearchPurchaseOrder
{
    /**
     * @var Promidata_Service_DTO_PurchaseOrderSearchParameter[] $purchaseOrderSearchParameters
     * @access public
     */
    public $purchaseOrderSearchParameters = null;

    /**
     * @param Promidata_Service_DTO_PurchaseOrderSearchParameter[] $purchaseOrderSearchParameters
     * @access public
     */
    public function __construct($purchaseOrderSearchParameters)
    {
        $this->purchaseOrderSearchParameters = $purchaseOrderSearchParameters;
    }
}