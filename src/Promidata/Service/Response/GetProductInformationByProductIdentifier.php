<?php

class Promidata_Service_Response_GetProductInformationByProductIdentifier
{

    /**
     * @var ProductInformation $GetProductInformationByProductIdentifierResult
     * @access public
     */
    public $GetProductInformationByProductIdentifierResult = null;

    /**
     * @param ProductInformation $GetProductInformationByProductIdentifierResult
     * @access public
     */
    public function __construct($GetProductInformationByProductIdentifierResult)
    {
      $this->GetProductInformationByProductIdentifierResult = $GetProductInformationByProductIdentifierResult;
    }

}
