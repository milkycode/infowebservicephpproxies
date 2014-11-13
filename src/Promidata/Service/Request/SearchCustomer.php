<?php

class Promidata_Service_Request_SearchCustomer
{

    /**
     *
     * @var string $importdata
     * @access public
     */
    public $importdata = null;

    /**
     *
     * @param string $searchKey
     * @param string $searchValue
     * @access public
     */
    public function __construct($searchKey, $searchValue)
    {
        $this->importdata[0] = new Promidata_Service_DTO_CustomerSearchParameter($searchKey,$searchValue);
    }

}
