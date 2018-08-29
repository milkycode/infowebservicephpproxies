<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_GetCurrentStockAmountsResult
{
    /**
     * @var Promidata_Service_DTO_StockAmountItem[] $StockAmounts
     * @access public
     */
    public $StockAmounts = null;

    /**
     * @access public
     */
    public function __construct()
    {
    }
}