<?php

class SearchCustomer
{

    /**
     * @var CustomerSearchParameter[] $importdata
     * @access public
     */
    public $importdata = null;

    /**
     * @param CustomerSearchParameter[] $importdata
     * @access public
     */
    public function __construct($importdata)
    {
      $this->importdata = $importdata;
    }

}
