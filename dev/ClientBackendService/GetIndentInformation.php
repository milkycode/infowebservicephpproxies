<?php

class GetIndentInformation
{

    /**
     * @var GetIndentInformationParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param GetIndentInformationParameter $parameter
     * @access public
     */
    public function __construct($parameter)
    {
      $this->parameter = $parameter;
    }

}
