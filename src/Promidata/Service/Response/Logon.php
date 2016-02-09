<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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