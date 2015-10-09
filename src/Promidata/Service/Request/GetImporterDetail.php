<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Request_GetImporterDetail
{
    /**
     * @var guid $importerId
     * @access public
     */
    public $importerId = null;

    /**
     * @param guid $importerId
     * @access public
     */
    public function __construct($importerId)
    {
        $this->importerId = $importerId;
    }
}