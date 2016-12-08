<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_PurchaseOrderSearchResult
{
    /**
     * @var string $AssignedPurchaseOrderAction
     * @access public
     */
    public $AssignedPurchaseOrderAction = null;

    /**
     * @var boolean $IsCanceled
     * @access public
     */
    public $IsCanceled = null;

    /**
     * @var boolean $IsClosed
     * @access public
     */
    public $IsClosed = null;

    /**
     * @var int $PurchaseOrderNumber
     * @access public
     */
    public $PurchaseOrderNumber = null;

    /**
     * @var int $SupplierCreditorNumber
     * @access public
     */
    public $SupplierCreditorNumber = null;

    /**
     * @var string $SupplierName
     * @access public
     */
    public $SupplierName = null;

    /**
     * @param boolean $IsCanceled
     * @param boolean $IsClosed
     * @param int $PurchaseOrderNumber
     * @param int $SupplierCreditorNumber
     * @access public
     */
    public function __construct($IsCanceled, $IsClosed, $PurchaseOrderNumber, $SupplierCreditorNumber)
    {
        $this->IsCanceled = $IsCanceled;
        $this->IsClosed = $IsClosed;
        $this->PurchaseOrderNumber = $PurchaseOrderNumber;
        $this->SupplierCreditorNumber = $SupplierCreditorNumber;
    }
}