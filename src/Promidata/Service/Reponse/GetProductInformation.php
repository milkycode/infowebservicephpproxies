<?php

class Promidata_Service_Reponse_GetProductInformation
{

    /**
     *
     * @var Promidata_Service_DTO_ProductInformation $GetProductInformationResult
     * @access public
     */
    public $GetProductInformationResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ProductInformation $GetProductInformationResult
     * @access public
     */
    public function __construct($GetProductInformationResult)
    {
        $this->GetProductInformationResult = $GetProductInformationResult;
    }

}
