<?php
/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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