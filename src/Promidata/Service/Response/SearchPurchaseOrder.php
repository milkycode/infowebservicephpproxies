<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_SearchPurchaseOrder
{
    /**
     * @var Promidata_Service_DTO_PurchaseOrderSearchResult[] $SearchPurchaseOrderResult
     * @access public
     */
    public $SearchPurchaseOrderResult = null;

    /**
     * @param Promidata_Service_DTO_PurchaseOrderSearchResult[] $SearchPurchaseOrderResult
     * @access public
     */
    public function __construct($SearchPurchaseOrderResult)
    {
        $this->SearchPurchaseOrderResult = $SearchPurchaseOrderResult;
    }
}