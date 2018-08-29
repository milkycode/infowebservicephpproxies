<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
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