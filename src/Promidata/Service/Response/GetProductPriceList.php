<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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