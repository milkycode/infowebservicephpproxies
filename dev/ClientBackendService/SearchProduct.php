<?php

class SearchProduct
{

    /**
     * @var ProductSearchParameter[] $importdata
     * @access public
     */
    public $importdata = null;

    /**
     * @param ProductSearchParameter[] $importdata
     * @access public
     */
    public function __construct($importdata)
    {
      $this->importdata = $importdata;
    }

}
