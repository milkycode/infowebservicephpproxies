<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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