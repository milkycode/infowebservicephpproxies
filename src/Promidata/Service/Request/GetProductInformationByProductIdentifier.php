<?php
class Promidata_Service_Request_GetProductInformationByProductIdentifier
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
    public function __construct($productIdentifier = null)
    {
      $this->productIdentifier = $productIdentifier;
    }
}
