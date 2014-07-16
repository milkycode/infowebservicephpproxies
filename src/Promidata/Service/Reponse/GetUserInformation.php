<?php

class Promidata_Service_Reponse_GetUserInformation
{

    /**
     *
     * @var Promidata_Service_DTO_UserInformation[] $GetUserInformationResult
     * @access public
     */
    public $GetUserInformationResult = null;

    /**
     *
     * @param Promidata_Service_DTO_UserInformation[] $GetUserInformationResult
     * @access public
     */
    public function __construct($GetUserInformationResult)
    {
        $this->GetUserInformationResult = $GetUserInformationResult;
    }

}
