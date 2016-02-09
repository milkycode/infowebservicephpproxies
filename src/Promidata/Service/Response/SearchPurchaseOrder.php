<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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