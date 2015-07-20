<?php

class GetProductPrices
{

    /**
     * @var CustomerIdentifier $customerIdentifier
     * @access public
     */
    public $customerIdentifier = null;

    /**
     * @var ProductIdentifier $productIdentifier
     * @access public
     */
    public $productIdentifier = null;

    /**
     * @param CustomerIdentifier $customerIdentifier
     * @param ProductIdentifier $productIdentifier
     * @access public
     */
    public function __construct($customerIdentifier, $productIdentifier)
    {
      $this->customerIdentifier = $customerIdentifier;
      $this->productIdentifier = $productIdentifier;
    }

}
