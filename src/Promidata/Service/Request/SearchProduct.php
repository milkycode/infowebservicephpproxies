<?php

class Promidata_Service_Request_SearchProduct
{

    /**
     * @var Promidata_Service_DTO_ProductSearchParameter[] $importdata
     * @access public
     */
    public $importdata = null;

    /**
     * @param Promidata_Service_DTO_ProductSearchParameter[] $importdata
     * @access public
     */
    public function __construct($importdata)
    {
      $this->importdata = $importdata;
    }

}
