<?php

class GetExpectedStockMovement
{

    /**
     * @var ProductIdentifier $productIdentifier
     * @access public
     */
    public $productIdentifier = null;

    /**
     * @param ProductIdentifier $productIdentifier
     * @access public
     */
    public function __construct($productIdentifier)
    {
      $this->productIdentifier = $productIdentifier;
    }

}
