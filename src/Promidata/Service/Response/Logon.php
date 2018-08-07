<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_Logon
{
    /**
     *
     * @var string $LogonResult
     * @access public
     */
    public $LogonResult = null;

    /**
     *
     * @param string $LogonResult
     * @access public
     */
    public function __construct($LogonResult)
    {
        $this->LogonResult = $LogonResult;
    }
}