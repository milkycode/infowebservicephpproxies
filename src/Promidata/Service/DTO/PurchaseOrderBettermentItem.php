<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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