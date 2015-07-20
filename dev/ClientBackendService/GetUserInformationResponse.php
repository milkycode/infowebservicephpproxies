<?php

class GetUserInformationResponse
{

    /**
     * @var UserInformation[] $GetUserInformationResult
     * @access public
     */
    public $GetUserInformationResult = null;

    /**
     * @param UserInformation[] $GetUserInformationResult
     * @access public
     */
    public function __construct($GetUserInformationResult)
    {
      $this->GetUserInformationResult = $GetUserInformationResult;
    }

}
