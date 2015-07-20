<?php

class SearchProductResponse
{

    /**
     * @var ProductSearchResult[] $SearchProductResult
     * @access public
     */
    public $SearchProductResult = null;

    /**
     * @param ProductSearchResult[] $SearchProductResult
     * @access public
     */
    public function __construct($SearchProductResult)
    {
      $this->SearchProductResult = $SearchProductResult;
    }

}
