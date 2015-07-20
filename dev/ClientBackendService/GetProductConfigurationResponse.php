<?php

class GetProductConfigurationResponse
{

    /**
     * @var ProductConfiguration $GetProductConfigurationResult
     * @access public
     */
    public $GetProductConfigurationResult = null;

    /**
     * @param ProductConfiguration $GetProductConfigurationResult
     * @access public
     */
    public function __construct($GetProductConfigurationResult)
    {
      $this->GetProductConfigurationResult = $GetProductConfigurationResult;
    }

}
