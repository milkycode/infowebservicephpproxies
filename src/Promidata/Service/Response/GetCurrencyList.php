<?php

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
