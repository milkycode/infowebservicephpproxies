<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
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