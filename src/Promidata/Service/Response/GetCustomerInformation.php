<?php

class Promidata_Service_Response_GetCustomerInformation
{

    /**
     *
     * @var Promidata_Service_DTO_CustomerInformation $GetCustomerInformationResult
     * @access public
     */
    public $GetCustomerInformationResult = null;

    /**
     *
     * @param Promidata_Service_DTO_CustomerInformation $GetCustomerInformationResult
     * @access public
     */
    public function __construct($GetCustomerInformationResult)
    {
        $this->GetCustomerInformationResult = $GetCustomerInformationResult;
    }

}
