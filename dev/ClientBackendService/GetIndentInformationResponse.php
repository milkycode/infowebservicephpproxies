<?php

class GetIndentInformationResponse
{

    /**
     * @var IndentInformationItem $GetIndentInformationResult
     * @access public
     */
    public $GetIndentInformationResult = null;

    /**
     * @param IndentInformationItem $GetIndentInformationResult
     * @access public
     */
    public function __construct($GetIndentInformationResult)
    {
      $this->GetIndentInformationResult = $GetIndentInformationResult;
    }

}
