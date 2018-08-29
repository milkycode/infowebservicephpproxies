<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_PurchaseOrderIdentifier
{
    /**
     * @var int $PurchaseOrderNumber
     * @access public
     */
    public $PurchaseOrderNumber = null;

    /**
     * @param int $PurchaseOrderNumber
     * @access public
     */
    public function __construct($PurchaseOrderNumber = null)
    {
        $this->PurchaseOrderNumber = $PurchaseOrderNumber;
    }
}