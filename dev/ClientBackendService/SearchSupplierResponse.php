<?php

class SearchSupplierResponse
{

    /**
     * @var SupplierSearchResult[] $SearchSupplierResult
     * @access public
     */
    public $SearchSupplierResult = null;

    /**
     * @param SupplierSearchResult[] $SearchSupplierResult
     * @access public
     */
    public function __construct($SearchSupplierResult)
    {
      $this->SearchSupplierResult = $SearchSupplierResult;
    }

}
