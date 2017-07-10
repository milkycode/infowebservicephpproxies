<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
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