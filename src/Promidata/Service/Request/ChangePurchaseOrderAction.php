<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Request_ChangePurchaseOrderAction
{
    /**
     * @var Promidata_Service_DTO_ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter
     * @access public
     */
    public $changePurchaseOrderActionParameter = null;

    /**
     * @param Promidata_Service_DTO_ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter
     * @access public
     */
    public function __construct(Promidata_Service_DTO_ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter)
    {
        $this->changePurchaseOrderActionParameter = $changePurchaseOrderActionParameter;
    }
}