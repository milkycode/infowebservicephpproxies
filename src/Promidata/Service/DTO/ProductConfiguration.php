<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_DTO_ProductConfiguration
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
     * @var Promidata_Service_DTO_ProductConfigurationItem[] $ProductConfigurationItems
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