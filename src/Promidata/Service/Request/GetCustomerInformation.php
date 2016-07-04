<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Request_GetCustomerInformation
{
    /**
     * @var Promidata_Service_DTO_CustomerIdentifier $identifierV1
     * @access public
     */
    public $identifierV1 = null;

    /**
     * @param Promidata_Service_DTO_CustomerIdentifier $identifierV1
     * @access public
     */
    public function __construct(Promidata_Service_DTO_CustomerIdentifier $identifierV1)
    {
        $this->identifierV1 = $identifierV1;
    }
}