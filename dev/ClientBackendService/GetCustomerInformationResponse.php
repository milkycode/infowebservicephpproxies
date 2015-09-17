<?php

class GetCustomerInformationResponse
{

    /**
     * @var CustomerInformation $GetCustomerInformationResult
     * @access public
     */
    public $GetCustomerInformationResult = null;

    /**
     * @param CustomerInformation $GetCustomerInformationResult
     * @access public
     */
    public function __construct($GetCustomerInformationResult)
    {
      $this->GetCustomerInformationResult = $GetCustomerInformationResult;
    }

}
