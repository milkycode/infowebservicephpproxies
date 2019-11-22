<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_PurchaseOrderPositionReason
{
    /**
     * @var string $IndentCustomerName
     * @access public
     */
    public $IndentCustomerName = null;

    /**
     * @var int $IndentNumber
     * @access public
     */
    public $IndentNumber = null;

    /**
     * @var string $IndentNumberFull
     * @access public
     */
    public $IndentNumberFull = null;

    /**
     * @var guid $IndentPositionIdentifier
     * @access public
     */
    public $IndentPositionIdentifier = null;

    /**
     * @var float $OrderedQuantityAmount
     * @access public
     */
    public $OrderedQuantityAmount = null;

    /**
     * @var float $OrderedQuantityExtraAmount
     * @access public
     */
    public $OrderedQuantityExtraAmount = null;

    /**
     * @var string $OrderedQuantityExtraUnit
     * @access public
     */
    public $OrderedQuantityExtraUnit = null;

    /**
     * @var string $OrderedQuantityUnit
     * @access public
     */
    public $OrderedQuantityUnit = null;

    /**
     * @param int $IndentNumber
     * @param float $OrderedQuantityAmount
     * @param float $OrderedQuantityExtraAmount
     * @access public
     */
    public function __construct($IndentNumber, $OrderedQuantityAmount, $OrderedQuantityExtraAmount)
    {
        $this->IndentNumber = $IndentNumber;
        $this->OrderedQuantityAmount = $OrderedQuantityAmount;
        $this->OrderedQuantityExtraAmount = $OrderedQuantityExtraAmount;
    }
}