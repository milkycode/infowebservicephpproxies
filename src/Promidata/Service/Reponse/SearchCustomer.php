<?php

class Promidata_Service_Reponse_SearchCustomer
{

    /**
     *
     * @var string[] $SearchCustomerResult
     * @access public
     */
    public $SearchCustomerResult = null;

    /**
     *
     * @param string[] $SearchCustomerResult
     * @access public
     */
    public function __construct($SearchCustomerResult)
    {
        $this->SearchCustomerResult = $SearchCustomerResult;
    }

}
