<?php

class GetSupplierInformationListResponse
{

    /**
     * @var SupplierInformation[] $GetSupplierInformationListResult
     * @access public
     */
    public $GetSupplierInformationListResult = null;

    /**
     * @param SupplierInformation[] $GetSupplierInformationListResult
     * @access public
     */
    public function __construct($GetSupplierInformationListResult)
    {
      $this->GetSupplierInformationListResult = $GetSupplierInformationListResult;
    }

}
