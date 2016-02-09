<?php
/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_ChangePurchaseOrderActionResult
{
    /**
     * @var string $Error
     * @access public
     */
    public $Error = null;

    /**
     * @var Promidata_Service_DTO_PurchaseOrderIdentifier $IdentifierV1
     * @access public
     */
    public $IdentifierV1 = null;

    /**
     * @access public
     */
    public function __construct()
    {
    }
}