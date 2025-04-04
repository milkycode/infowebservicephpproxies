<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_ContactDetail
{
    /**
     * @var Promidata_Service_DTO_CustomerIdentifier $IdentifierV1
     * @access public
     */
    public $IdentifierV1 = null;

    /**
     * @var boolean $IsMain
     * @access public
     */
    public $IsMain = null;

    /**
     * @var string $Type
     * @access public
     */
    public $Type = null;

    /**
     * @var string $Value
     * @access public
     */
    public $Value = null;

    /**
     * @param boolean $IsMain
     * @access public
     */
    public function __construct($IsMain)
    {
        $this->IsMain = $IsMain;
    }
}