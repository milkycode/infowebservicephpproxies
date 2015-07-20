<?php

class GetExpectedStockMovementResponse
{

    /**
     * @var ExpectedStockMovement[] $GetExpectedStockMovementResult
     * @access public
     */
    public $GetExpectedStockMovementResult = null;

    /**
     * @param ExpectedStockMovement[] $GetExpectedStockMovementResult
     * @access public
     */
    public function __construct($GetExpectedStockMovementResult)
    {
      $this->GetExpectedStockMovementResult = $GetExpectedStockMovementResult;
    }

}
