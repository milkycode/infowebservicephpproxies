<?php

class GetWebServiceCreationRequestResult
{

    /**
     * @var guid $WebServiceCreationRequestId
     * @access public
     */
    public $WebServiceCreationRequestId = null;

    /**
     * @var string $WebServiceCreationRequestState
     * @access public
     */
    public $WebServiceCreationRequestState = null;

    /**
     * @var string $WebServiceCreationRequestStateText
     * @access public
     */
    public $WebServiceCreationRequestStateText = null;

    /**
     * @param guid $WebServiceCreationRequestId
     * @access public
     */
    public function __construct($WebServiceCreationRequestId)
    {
      $this->WebServiceCreationRequestId = $WebServiceCreationRequestId;
    }

}
