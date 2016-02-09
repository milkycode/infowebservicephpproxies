<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_Update
{
    /**
     *
     * @var Promidata_Service_DTO_ImportResult $UpdateResult
     * @access public
     */
    public $UpdateResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ImportResult $UpdateResult
     * @access public
     */
    public function __construct($UpdateResult)
    {
        $this->UpdateResult = $UpdateResult;
    }
}