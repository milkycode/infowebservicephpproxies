<?php

class ProductConfiguration
{

    /**
     * @var string $MainOwnArticleNumber
     * @access public
     */
    public $MainOwnArticleNumber = null;

    /**
     * @var guid $MainProductIdentifier
     * @access public
     */
    public $MainProductIdentifier = null;

    /**
     * @var string $MainPurchaseOrderNumber
     * @access public
     */
    public $MainPurchaseOrderNumber = null;

    /**
     * @var ProductConfigurationItem[] $ProductConfigurationItems
     * @access public
     */
    public $ProductConfigurationItems = null;

    /**
     * @param guid $MainProductIdentifier
     * @access public
     */
    public function __construct($MainProductIdentifier)
    {
      $this->MainProductIdentifier = $MainProductIdentifier;
    }

}
