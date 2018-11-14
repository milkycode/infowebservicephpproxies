<?php

class GetWebServiceCreationRequest
{

    /**
     * @var GetWebServiceCreationRequestParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param GetWebServiceCreationRequestParameter $parameter
     * @access public
     */
    public function __construct($parameter)
    {
      $this->parameter = $parameter;
    }

}
