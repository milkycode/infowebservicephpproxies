<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Request_SearchSupplier
{
    /**
     * @var Promidata_Service_DTO_SupplierSearchParameter[] $importdata
     * @access public
     */
    public $importdata = null;

    /**
     * @param Promidata_Service_DTO_SupplierSearchParameter[] $importdata
     * @access public
     */
    public function __construct($importdata)
    {
      $this->importdata = $importdata;
    }
}