<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
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