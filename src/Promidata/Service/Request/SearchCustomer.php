<?php

class Promidata_Service_Request_SearchCustomer
{

    /**
     * @var Promidata_Service_DTO_CustomerSearchParameter[] $importdata
     * @access public
     */
    public $importdata = null;

    /**
     * @param Promidata_Service_DTO_CustomerSearchParameter[] $importdata
     * @access public
     */
    public function __construct($importdata)
    {
      $this->importdata = $importdata;
    }

}
