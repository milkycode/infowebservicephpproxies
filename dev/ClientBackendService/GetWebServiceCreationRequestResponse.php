<?php

class GetWebServiceCreationRequestResponse
{

    /**
     * @var GetWebServiceCreationRequestResult $GetWebServiceCreationRequestResult
     * @access public
     */
    public $GetWebServiceCreationRequestResult = null;

    /**
     * @param GetWebServiceCreationRequestResult $GetWebServiceCreationRequestResult
     * @access public
     */
    public function __construct($GetWebServiceCreationRequestResult)
    {
      $this->GetWebServiceCreationRequestResult = $GetWebServiceCreationRequestResult;
    }

}
