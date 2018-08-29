<?php

class SearchIndent
{

    /**
     * @var Promidata_Service_DTO_SearchIndentParameter[] $searchIndentParameters
     * @access public
     */
    public $searchIndentParameters = null;

    /**
     * @param Promidata_Service_DTO_SearchIndentParameter[] $searchIndentParameters
     * @access public
     */
    public function __construct($searchIndentParameters)
    {
      $this->searchIndentParameters = $searchIndentParameters;
    }

}
