<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_GetProductPrices
{
    /**
     *
     * @var Promidata_Service_DTO_ProductPriceInformation[] $GetProductPricesResult
     * @access public
     */
    public $GetProductPricesResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ProductPriceInformation[] $GetProductPricesResult
     * @access public
     */
    public function __construct($GetProductPricesResult)
    {
        $this->GetProductPricesResult = $GetProductPricesResult;
    }
}