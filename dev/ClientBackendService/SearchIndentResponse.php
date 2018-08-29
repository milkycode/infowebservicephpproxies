<?php

class SearchIndentResponse
{

    /**
     * @var IndentSearchResult[] $SearchIndentResult
     * @access public
     */
    public $SearchIndentResult = null;

    /**
     * @param IndentSearchResult[] $SearchIndentResult
     * @access public
     */
    public function __construct($SearchIndentResult)
    {
      $this->SearchIndentResult = $SearchIndentResult;
    }

}
