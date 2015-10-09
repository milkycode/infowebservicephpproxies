<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_ImporterDefinition
{
    /**
     * @var guid $ImporterId
     * @access public
     */
    public $ImporterId = null;

    /**
     * @var string $Name
     * @access public
     */
    public $Name = null;

    /**
     * @param guid $ImporterId
     * @access public
     */
    public function __construct($ImporterId)
    {
        $this->ImporterId = $ImporterId;
    }
}