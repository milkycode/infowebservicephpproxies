<?php

class Promidata_Service_Reponse_GetCustomerInformationList
{

    /**
     *
     * @var Promidata_Service_DTO_CustomerInformation[] $GetCustomerInformationListResult
     * @access public
     */
    public $GetCustomerInformationListResult = null;

    /**
     *
     * @param Promidata_Service_DTO_CustomerInformation[] $GetCustomerInformationListResult
     * @access public
     */
    public function __construct($GetCustomerInformationListResult)
    {
        $this->GetCustomerInformationListResult = $GetCustomerInformationListResult;
    }

}
