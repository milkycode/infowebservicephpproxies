<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Request_Exists
{
    /**
     * @var Promidata_Service_DTO_ExistsArgument $argument
     * @access public
     */
    public $argument = null;

    /**
     * @param Promidata_Service_DTO_ExistsArgument $argument
     * @access public
     */
    public function __construct($argument)
    {
        $this->argument = $argument;
    }
}