<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_CustomerSearchResult
{
    /**
     * @var guid $CustomerIdentifier
     * @access public
     */
    public $CustomerIdentifier = null;

    /**
     * @var string $CustomerName
     * @access public
     */
    public $CustomerName = null;

    /**
     * @var int $CustomerNumber
     * @access public
     */
    public $CustomerNumber = null;

    /**
     * @var int $DebitorNumber
     * @access public
     */
    public $DebitorNumber = null;

    /**
     * @var boolean $IsActive
     * @access public
     */
    public $IsActive = null;

    /**
     * @param guid $CustomerIdentifier
     * @param int $CustomerNumber
     * @param int $DebitorNumber
     * @param boolean $IsActive
     * @access public
     */
    public function __construct($CustomerIdentifier, $CustomerNumber, $DebitorNumber, $IsActive)
    {
        $this->CustomerIdentifier = $CustomerIdentifier;
        $this->CustomerNumber = $CustomerNumber;
        $this->DebitorNumber = $DebitorNumber;
        $this->IsActive = $IsActive;
    }
}