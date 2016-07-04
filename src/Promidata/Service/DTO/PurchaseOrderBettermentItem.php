<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_DTO_PurchaseOrderBettermentItem
{
    /**
     * @var string $ArticleOrderNumber
     * @access public
     */
    public $ArticleOrderNumber = null;

    /**
     * @access public
     * @var string $ArticleOrderNumber
     */
    public function __construct($ArticleOrderNumber = null)
    {
        $this->ArticleOrderNumber = $ArticleOrderNumber;
    }
}