<?php

class GetCurrencyListResponse
{

    /**
     * @var CurrencyItem[] $GetCurrencyListResult
     * @access public
     */
    public $GetCurrencyListResult = null;

    /**
     * @param CurrencyItem[] $GetCurrencyListResult
     * @access public
     */
    public function __construct($GetCurrencyListResult)
    {
      $this->GetCurrencyListResult = $GetCurrencyListResult;
    }

}
