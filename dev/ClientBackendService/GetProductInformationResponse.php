<?php

class GetProductInformationResponse
{

    /**
     * @var ProductInformation $GetProductInformationResult
     * @access public
     */
    public $GetProductInformationResult = null;

    /**
     * @param ProductInformation $GetProductInformationResult
     * @access public
     */
    public function __construct($GetProductInformationResult)
    {
      $this->GetProductInformationResult = $GetProductInformationResult;
    }

}
