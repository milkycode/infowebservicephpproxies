<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_CustomerIdentifier
{
    /**
     * @var int $CustomerId
     * @access public
     */
    public $CustomerId = null;

    /**
     * @var guid $CustomerIdentifier
     * @access public
     */
    public $CustomerIdentifier = null;

    /**
     * @var string $CustomerNumber
     * @access public
     */
    public $CustomerNumber = null;

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
     * @param guid $CustomerId
     * @param string $CustomerNumber
     * @access public
     */
    public function __construct($CustomerId = null, $CustomerNumber = null)
    {
        $this->CustomerId = null;
        $this->CustomerNumber = null;
    }
}