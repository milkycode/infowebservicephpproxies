<?php

class Promidata_Service_Request_GetCustomerPriceList
{

    /**
     *
     * @var Promidata_Service_DTO_CustomerIdentifier $identifier
     * @access public
     */
    public $identifier = null;

    /**
     *
     * @param Promidata_Service_DTO_CustomerIdentifier $identifier
     * @access public
     */
    public function __construct($identifier)
    {
        $this->identifier = $identifier;
    }

}
