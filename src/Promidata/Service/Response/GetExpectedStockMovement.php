<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_GetExpectedStockMovement
{
    /**
     * @var Promidata_Service_DTO_ExpectedStockMovement[] $GetExpectedStockMovementResult
     * @access public
     */
    public $GetExpectedStockMovementResult = null;

    /**
     * @param Promidata_Service_DTO_ExpectedStockMovement[] $GetExpectedStockMovementResult
     * @access public
     */
    public function __construct($GetExpectedStockMovementResult)
    {
        $this->GetExpectedStockMovementResult = $GetExpectedStockMovementResult;
    }
}