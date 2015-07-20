<?php

class Promidata_Service_Response_SearchSupplier
{

    /**
     * @var Promidata_Service_DTO_SupplierSearchResult[] $SearchSupplierResult
     * @access public
     */
    public $SearchSupplierResult = null;

    /**
     * @param Promidata_Service_DTO_SupplierSearchResult[] $SearchSupplierResult
     * @access public
     */
    public function __construct($SearchSupplierResult)
    {
      $this->SearchSupplierResult = $SearchSupplierResult;
    }

}
