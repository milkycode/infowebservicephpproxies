<?php

class Promidata_Service_Request_GetProductConfiguration
{

    /**
     * @var GetProductConfigurationParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param Promidata_Service_DTO_GetProductConfigurationParameter $parameter
     * @access public
     */
    public function __construct($parameter)
    {
      $this->parameter = $parameter;
    }

}
