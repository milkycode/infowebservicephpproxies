<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Request_ChangePurchaseOrderAction
{
    /**
     * @var Promidata_Service_DTO_ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter
     * @access public
     */
    public $changePurchaseOrderActionParameter = null;

    /**
     * @param Promidata_Service_DTO_ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter
     * @access public
     */
    public function __construct(Promidata_Service_DTO_ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter)
    {
        $this->changePurchaseOrderActionParameter = $changePurchaseOrderActionParameter;
    }
}