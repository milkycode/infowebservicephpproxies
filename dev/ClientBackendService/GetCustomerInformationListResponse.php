<?php

class GetCustomerInformationListResponse
{

    /**
     * @var CustomerInformation[] $GetCustomerInformationListResult
     * @access public
     */
    public $GetCustomerInformationListResult = null;

    /**
     * @param CustomerInformation[] $GetCustomerInformationListResult
     * @access public
     */
    public function __construct($GetCustomerInformationListResult)
    {
      $this->GetCustomerInformationListResult = $GetCustomerInformationListResult;
    }

}
