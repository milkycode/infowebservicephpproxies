<?php

class SearchCustomerResponse
{

    /**
     * @var CustomerSearchResult[] $SearchCustomerResult
     * @access public
     */
    public $SearchCustomerResult = null;

    /**
     * @param CustomerSearchResult[] $SearchCustomerResult
     * @access public
     */
    public function __construct($SearchCustomerResult)
    {
      $this->SearchCustomerResult = $SearchCustomerResult;
    }

}
