<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_GetProductPriceList
{
    /**
     *
     * @var Promidata_Service_DTO_ProductPriceInformation[] $GetProductPriceListResult
     * @access public
     */
    public $GetProductPriceListResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ProductPriceInformation[] $GetProductPriceListResult
     * @access public
     */
    public function __construct($GetProductPriceListResult)
    {
        $this->GetProductPriceListResult = $GetProductPriceListResult;
    }
}