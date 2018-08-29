<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_GetCurrentStockAmounts
{
    /**
     * @var Promidata_Service_DTO_GetCurrentStockAmountsResult $GetCurrentStockAmountsResult
     * @access public
     */
    public $GetCurrentStockAmountsResult = null;

    /**
     * @param Promidata_Service_DTO_GetCurrentStockAmountsResult $GetCurrentStockAmountsResult
     * @access public
     */
    public function __construct($GetCurrentStockAmountsResult)
    {
        $this->GetCurrentStockAmountsResult = $GetCurrentStockAmountsResult;
    }
}