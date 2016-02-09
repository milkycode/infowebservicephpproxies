<?php
 /**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @author      Christian Hinz <christian@milkycode.com>
 * @package     Promidata_Service
 */
class Promidata_Service_Response_GetCurrencyList
{
    /**
     * @var Promidata_Service_DTO_CurrencyItem[] $GetCurrencyListResult
     * @access public
     */
    public $GetCurrencyListResult = null;

    /**
     * @param Promidata_Service_DTO_CurrencyItem[] $GetCurrencyListResult
     * @access public
     */
    public function __construct($GetCurrencyListResult)
    {
      $this->GetCurrencyListResult = $GetCurrencyListResult;
    }
}