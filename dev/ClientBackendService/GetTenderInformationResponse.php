<?php

class GetTenderInformationResponse
{

    /**
     * @var TenderInformationItem $GetTenderInformationResult
     * @access public
     */
    public $GetTenderInformationResult = null;

    /**
     * @param TenderInformationItem $GetTenderInformationResult
     * @access public
     */
    public function __construct($GetTenderInformationResult)
    {
      $this->GetTenderInformationResult = $GetTenderInformationResult;
    }

}
