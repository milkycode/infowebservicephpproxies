<?php

class Promidata_Service_Response_SearchCustomer
{

    /**
     * @var Promidata_Service_DTO_CustomerSearchResult[] $SearchCustomerResult
     * @access public
     */
    public $SearchCustomerResult = null;

    /**
     * @param Promidata_Service_DTO_CustomerSearchResult[] $SearchCustomerResult
     * @access public
     */
    public function __construct($SearchCustomerResult)
    {
      $this->SearchCustomerResult = $SearchCustomerResult;
    }

}
