<?php

class GetSupplierInformationResponse
{

    /**
     * @var SupplierInformation $GetSupplierInformationResult
     * @access public
     */
    public $GetSupplierInformationResult = null;

    /**
     * @param SupplierInformation $GetSupplierInformationResult
     * @access public
     */
    public function __construct($GetSupplierInformationResult)
    {
      $this->GetSupplierInformationResult = $GetSupplierInformationResult;
    }

}
