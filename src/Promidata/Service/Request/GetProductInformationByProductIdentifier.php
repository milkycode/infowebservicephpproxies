<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
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