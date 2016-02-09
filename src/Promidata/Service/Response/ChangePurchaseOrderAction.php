<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_ChangePurchaseOrderAction
{
    /**
     * @var Promidata_Service_DTO_ChangePurchaseOrderActionResult $ChangePurchaseOrderActionResult
     * @access public
     */
    public $ChangePurchaseOrderActionResult = null;

    /**
     * @param Promidata_Service_DTO_ChangePurchaseOrderActionResult $ChangePurchaseOrderActionResult
     * @access public
     */
    public function __construct($ChangePurchaseOrderActionResult)
    {
        $this->ChangePurchaseOrderActionResult = $ChangePurchaseOrderActionResult;
    }
}