<?php

class GetTenderInformation
{

    /**
     * @var GetTenderInformationParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param GetTenderInformationParameter $parameter
     * @access public
     */
    public function __construct($parameter)
    {
      $this->parameter = $parameter;
    }

}
