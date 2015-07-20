<?php

class SearchSupplier
{

    /**
     * @var SupplierSearchParameter[] $importdata
     * @access public
     */
    public $importdata = null;

    /**
     * @param SupplierSearchParameter[] $importdata
     * @access public
     */
    public function __construct($importdata)
    {
      $this->importdata = $importdata;
    }

}
