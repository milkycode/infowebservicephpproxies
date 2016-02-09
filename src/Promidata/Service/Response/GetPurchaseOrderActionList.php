<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_GetPurchaseOrderActionList
{
    /**
     * @var Promidata_Service_DTO_PurchaseOrderAction[] $GetPurchaseOrderActionListResult
     * @access public
     */
    public $GetPurchaseOrderActionListResult = null;

    /**
     * @param Promidata_Service_DTO_PurchaseOrderAction[] $GetPurchaseOrderActionListResult
     * @access public
     */
    public function __construct($GetPurchaseOrderActionListResult)
    {
        $this->GetPurchaseOrderActionListResult = $GetPurchaseOrderActionListResult;
    }
}