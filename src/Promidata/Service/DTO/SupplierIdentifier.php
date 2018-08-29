<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_SupplierIdentifier
{
    /**
     * @var string $CreditorNumber
     * @access public
     */
    public $CreditorNumber = null;

    /**
     * @var string $ExternId
     * @access public
     */
    public $ExternId = null;

    /**
     * @var string $ImportSource
     * @access public
     */
    public $ImportSource = null;

    /**
     * @var int $SupplierId
     * @access public
     */
    public $SupplierId = null;

    /**
     * @var guid $SupplierIdentifier
     * @access public
     */
    public $SupplierIdentifier = null;

    /**
     * @access public
     */
    public function __construct()
    {
    }
}