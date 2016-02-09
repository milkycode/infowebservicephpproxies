<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_GetCustomerPriceList
{
    /**
     *
     * @var Promidata_Service_DTO_ProductPriceInformation[] $GetCustomerPriceListResult
     * @access public
     */
    public $GetCustomerPriceListResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ProductPriceInformation[] $GetCustomerPriceListResult
     * @access public
     */
    public function __construct($GetCustomerPriceListResult)
    {
        $this->GetCustomerPriceListResult = $GetCustomerPriceListResult;
    }
}