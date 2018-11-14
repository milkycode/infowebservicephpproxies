<?php

class GetWebServiceCreationRequestParameter
{

    /**
     * @var guid $WebServiceCreationRequestId
     * @access public
     */
    public $WebServiceCreationRequestId = null;

    /**
     * @param guid $WebServiceCreationRequestId
     * @access public
     */
    public function __construct($WebServiceCreationRequestId)
    {
      $this->WebServiceCreationRequestId = $WebServiceCreationRequestId;
    }

}
