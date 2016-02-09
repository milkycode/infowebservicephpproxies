<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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