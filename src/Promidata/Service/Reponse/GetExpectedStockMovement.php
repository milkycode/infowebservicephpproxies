<?php

class Promidata_Service_Reponse_GetExpectedStockMovement
{

    /**
     *
     * @var Promidata_Service_DTO_ExpectedStockMovement[] $GetExpectedStockMovementResult
     * @access public
     */
    public $GetExpectedStockMovementResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ExpectedStockMovement[] $GetExpectedStockMovementResult
     * @access public
     */
    public function __construct($GetExpectedStockMovementResult)
    {
        $this->GetExpectedStockMovementResult = $GetExpectedStockMovementResult;
    }

}
