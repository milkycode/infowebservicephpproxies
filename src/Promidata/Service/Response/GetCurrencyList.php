<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
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