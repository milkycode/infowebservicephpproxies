<?php

class Promidata_Service_Request_GetCustomerInformation
{

    /**
     *
     * @var Promidata_Service_DTO_CustomerIdentifier $identifierV1
     * @access public
     */
    public $identifierV1 = null;

    /**
     *
     * @param Promidata_Service_DTO_CustomerIdentifier $identifierV1
     * @access public
     */
    public function __construct($identifierV1)
    {
        $this->identifierV1 = $identifierV1;
    }

}
