<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_GetOptionListResult
{
    /**
     * @var Promidata_Service_DTO_OptionItem[] $OptionList
     * @access public
     */
    public $OptionList = null;

    /**
     * @var int $TotalOptionCount
     * @access public
     */
    public $TotalOptionCount = null;

    /**
     * @param int $TotalOptionCount
     * @access public
     */
    public function __construct($TotalOptionCount = null)
    {
        $this->TotalOptionCount = $TotalOptionCount;
    }
}