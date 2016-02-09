<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_Import
{
    /**
     *
     * @var Promidata_Service_DTO_ImportResult $ImportResult
     * @access public
     */
    public $ImportResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ImportResult $ImportResult
     * @access public
     */
    public function __construct($ImportResult)
    {
        $this->ImportResult = $ImportResult;
    }
}