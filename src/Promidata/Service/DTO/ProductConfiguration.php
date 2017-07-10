<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_ProductConfiguration
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
     * @var Promidata_Service_DTO_ProductConfigurationItem[] $ProductConfigurationItems
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