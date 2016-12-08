<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_ChangePurchaseOrderActionParameter
{
    /**
     * @var Promidata_Service_DTO_PurchaseOrderIdentifier $IdentifierV1
     * @access public
     */
    public $IdentifierV1 = null;

    /**
     * @var string $NewPurchaseOrderActionName
     * @access public
     */
    public $NewPurchaseOrderActionName = null;

    /**
     * @access public
     * @param Promidata_Service_DTO_PurchaseOrderIdentifier $IdentifierV1
     * @param string $NewPurchaseOrderActionName
     */
    public function __construct($IdentifierV1 = null, $NewPurchaseOrderActionName = null)
    {
        $this->IdentifierV1 = $IdentifierV1;
        $this->NewPurchaseOrderActionName = $NewPurchaseOrderActionName;
    }
}