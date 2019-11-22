<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_PurchaseOrderBettermentItem
{
    /**
     * @var string $ArticleDescription
     * @access public
     */
    public $ArticleDescription = null;

    /**
     * @var string $ArticleName
     * @access public
     */
    public $ArticleName = null;

    /**
     * @var string $ArticleOrderNumber
     * @access public
     */
    public $ArticleOrderNumber = null;

    /**
     * @var string $ArticleOrderText
     * @access public
     */
    public $ArticleOrderText = null;

    /**
     * @var float $OrderedQuantityAmount
     * @access public
     */
    public $OrderedQuantityAmount = null;

    /**
     * @var string $OrderedQuantityUnit
     * @access public
     */
    public $OrderedQuantityUnit = null;

    /**
     * @param float $OrderedQuantityAmount
     * @access public
     */
    public function __construct($OrderedQuantityAmount)
    {
        $this->OrderedQuantityAmount = $OrderedQuantityAmount;
    }
}