<?php

class Promidata_Service_DTO_ProductConfiguration
{

    /**
     * @var string $LinkedOwnArticleNumber
     * @access public
     */
    public $LinkedOwnArticleNumber = null;

    /**
     * @var string $LinkedPurchaseOrderNumber
     * @access public
     */
    public $LinkedPurchaseOrderNumber = null;

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
     * @var ProductConfigurationItem[] $ProductConfigurationItem
     * @access public
     */
    public $ProductConfigurationItem = null;

    /**
     * @access public
     */
    public function __construct()
    {

    }

}
