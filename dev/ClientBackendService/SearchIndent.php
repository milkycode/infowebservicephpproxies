<?php

class SearchIndent
{

    /**
     * @var SearchIndentParameter[] $searchIndentParameters
     * @access public
     */
    public $searchIndentParameters = null;

    /**
     * @param SearchIndentParameter[] $searchIndentParameters
     * @access public
     */
    public function __construct($searchIndentParameters)
    {
      $this->searchIndentParameters = $searchIndentParameters;
    }

}
