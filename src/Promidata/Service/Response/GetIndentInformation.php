<?php

class Promidata_Service_Response_GetIndentInformation
{

    /**
     * @var Promidata_Service_DTO_IndentInformationItem $GetIndentInformationResult
     * @access public
     */
    public $GetIndentInformationResult = null;

    /**
     * @param Promidata_Service_DTO_IndentInformationItem $GetIndentInformationResult
     * @access public
     */
    public function __construct($GetIndentInformationResult)
    {
      $this->GetIndentInformationResult = $GetIndentInformationResult;
    }

}
