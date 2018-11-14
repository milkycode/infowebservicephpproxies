<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_SupplierSearchResult
{
    /**
     * @var int $CreditorNumber
     * @access public
     */
    public $CreditorNumber = null;

    /**
     * @var boolean $IsActive
     * @access public
     */
    public $IsActive = null;

    /**
     * @var guid $SupplierIdentifier
     * @access public
     */
    public $SupplierIdentifier = null;

    /**
     * @var string $SupplierName
     * @access public
     */
    public $SupplierName = null;

    /**
     * @param int $CreditorNumber
     * @param boolean $IsActive
     * @param guid $SupplierIdentifier
     * @access public
     */
    public function __construct($CreditorNumber = null, $IsActive = null, $SupplierIdentifier = null)
    {
        $this->CreditorNumber = $CreditorNumber;
        $this->IsActive = $IsActive;
        $this->SupplierIdentifier = $SupplierIdentifier;
    }
}