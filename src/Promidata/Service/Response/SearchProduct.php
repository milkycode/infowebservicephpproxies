<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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