<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Request_GetExpectedStockMovement
{
    /**
     * @var Promidata_Service_DTO_ProductIdentifier $productIdentifier
     * @access public
     */
    public $productIdentifier = null;

    /**
     * @param Promidata_Service_DTO_ProductIdentifier $productIdentifier
     * @access public
     */
    public function __construct(Promidata_Service_DTO_ProductIdentifier $productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }
}