<?php

class Promidata_Service_Request_GetIndentInformation
{

    /**
     * @var Promidata_Service_DTO_GetIndentInformationParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param Promidata_Service_DTO_GetIndentInformationParameter $parameter
     * @access public
     */
    public function __construct($parameter)
    {
      $this->parameter = $parameter;
    }

}
