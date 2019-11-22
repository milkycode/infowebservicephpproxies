<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_GetCurrentStockAmountsParameter
{
    /**
     * @var int $Limit
     * @access public
     */
    public $Limit = null;

    /**
     * @var string $LocationName
     * @access public
     */
    public $LocationName = null;

    /**
     * @var int $Page
     * @access public
     */
    public $Page = null;

    /**
     * @param int $Limit
     * @param int $Page
     * @access public
     */
    public function __construct($Limit, $Page)
    {
        $this->Limit = $Limit;
        $this->Page = $Page;
    }
}