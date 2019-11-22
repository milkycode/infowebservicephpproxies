<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
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