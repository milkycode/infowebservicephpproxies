<?php

class ImportWebServiceCreationRequest
{

    /**
     * @var ImportWebServiceCreationRequestParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param ImportWebServiceCreationRequestParameter $parameter
     * @access public
     */
    public function __construct($parameter)
    {
      $this->parameter = $parameter;
    }

}
