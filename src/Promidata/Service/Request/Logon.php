<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Request_Logon
{
    /**
     *
     * @var string $companyName
     * @access public
     */
    public $companyName = null;

    /**
     *
     * @var string $userName
     * @access public
     */
    public $userName = null;

    /**
     *
     * @var string $password
     * @access public
     */
    public $password = null;

    /**
     *
     * @param string $companyName
     * @param string $userName
     * @param string $password
     * @access public
     */
    public function __construct($companyName, $userName, $password)
    {
        $this->companyName = $companyName;
        $this->userName = $userName;
        $this->password = $password;
    }
}