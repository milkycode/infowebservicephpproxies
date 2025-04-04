<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
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