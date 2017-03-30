<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2016 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_SearchProduct
{
    /**
     * @var Promidata_Service_DTO_ProductSearchResult[] $SearchProductResult
     * @access public
     */
    public $SearchProductResult = null;

    /**
     * @param Promidata_Service_DTO_ProductSearchResult[] $SearchProductResult
     * @access public
     */
    public function __construct($SearchProductResult)
    {
        $this->SearchProductResult = $SearchProductResult;
    }
}