<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_GetPaymentInformationList
{
    /**
     * @var Promidata_Service_DTO_PaymentInformation[] $GetPaymentInformationListResult
     * @access public
     */
    public $GetPaymentInformationListResult = null;

    /**
     * @param Promidata_Service_DTO_PaymentInformation[] $GetPaymentInformationListResult
     * @access public
     */
    public function __construct($GetPaymentInformationListResult)
    {
      $this->GetPaymentInformationListResult = $GetPaymentInformationListResult;
    }
}