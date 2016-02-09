<?php

class ProductConfiguration
{

    /**
     * @var string $MainOwnArticleNumber
     * @access public
     */
    public $MainOwnArticleNumber = null;

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
     * @access public
     */
    public function __construct()
    {
    
    }

}
