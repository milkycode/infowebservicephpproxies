<?php

class ImportWebServiceCreationRequestResponse
{

    /**
     * @var ImportWebServiceCreationRequestResult $ImportWebServiceCreationRequestResult
     * @access public
     */
    public $ImportWebServiceCreationRequestResult = null;

    /**
     * @param ImportWebServiceCreationRequestResult $ImportWebServiceCreationRequestResult
     * @access public
     */
    public function __construct($ImportWebServiceCreationRequestResult)
    {
      $this->ImportWebServiceCreationRequestResult = $ImportWebServiceCreationRequestResult;
    }

}
