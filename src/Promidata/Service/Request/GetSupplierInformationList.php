<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Request_GetSupplierInformationList
{
    /**
     * @var dateTime $startDate
     * @access public
     */
    public $startDate = null;

    /**
     * @param dateTime $startDate
     * @access public
     */
    public function __construct($startDate)
    {
        $this->startDate = $startDate;
    }
}