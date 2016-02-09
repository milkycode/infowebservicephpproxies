<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_GetPurchaseOrderInformation
{
    /**
     * @var Promidata_Service_DTO_PurchaseOrderInformation $GetPurchaseOrderInformationResult
     * @access public
     */
    public $GetPurchaseOrderInformationResult = null;

    /**
     * @param Promidata_Service_DTO_PurchaseOrderInformation $GetPurchaseOrderInformationResult
     * @access public
     */
    public function __construct($GetPurchaseOrderInformationResult)
    {
        $this->GetPurchaseOrderInformationResult = $GetPurchaseOrderInformationResult;
    }
}