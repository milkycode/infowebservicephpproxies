<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
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