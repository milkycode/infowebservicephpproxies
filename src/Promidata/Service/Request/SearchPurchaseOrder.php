<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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