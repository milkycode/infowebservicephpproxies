<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
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