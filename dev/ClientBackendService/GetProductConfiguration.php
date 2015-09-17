<?php

class GetProductConfiguration
{

    /**
     * @var GetProductConfigurationParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param GetProductConfigurationParameter $parameter
     * @access public
     */
    public function __construct($parameter)
    {
      $this->parameter = $parameter;
    }

}
