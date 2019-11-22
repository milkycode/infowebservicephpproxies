<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Request_GetCustomerPriceList
{
    /**
     * @var Promidata_Service_DTO_CustomerIdentifier $identifier
     * @access public
     */
    public $identifier = null;

    /**
     * @param Promidata_Service_DTO_CustomerIdentifier $identifier
     * @access public
     */
    public function __construct(Promidata_Service_DTO_CustomerIdentifier $identifier)
    {
        $this->identifier = $identifier;
    }
}