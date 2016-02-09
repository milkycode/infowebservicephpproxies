<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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