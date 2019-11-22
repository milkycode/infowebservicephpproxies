<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Request_GetCurrentStockAmounts
{
    /**
     * @var Promidata_Service_DTO_GetCurrentStockAmountsParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param Promidata_Service_DTO_GetCurrentStockAmountsParameter $parameter
     * @access public
     */
    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }
}