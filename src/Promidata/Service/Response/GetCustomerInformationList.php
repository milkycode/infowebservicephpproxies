<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_GetCustomerInformationList
{
    /**
     *
     * @var Promidata_Service_DTO_CustomerInformation[] $GetCustomerInformationListResult
     * @access public
     */
    public $GetCustomerInformationListResult = null;

    /**
     *
     * @param Promidata_Service_DTO_CustomerInformation[] $GetCustomerInformationListResult
     * @access public
     */
    public function __construct($GetCustomerInformationListResult)
    {
        $this->GetCustomerInformationListResult = $GetCustomerInformationListResult;
    }
}