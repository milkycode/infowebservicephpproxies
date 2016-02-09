<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Request_GetProductInformationByProductIdentifier
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
    public function __construct(Promidata_Service_DTO_ProductIdentifier $productIdentifier = null)
    {
      $this->productIdentifier = $productIdentifier;
    }
}