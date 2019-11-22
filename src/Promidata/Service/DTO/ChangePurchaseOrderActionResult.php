<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
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