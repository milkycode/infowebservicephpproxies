<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_ImportWebServiceCreationRequest
{
    /**
     * @var Promidata_Service_DTO_ImportWebServiceCreationRequestResult $ImportWebServiceCreationRequestResult
     * @access public
     */
    public $ImportWebServiceCreationRequestResult = null;

    /**
     * @param Promidata_Service_DTO_ImportWebServiceCreationRequestResult $ImportWebServiceCreationRequestResult
     * @access public
     */
    public function __construct($ImportWebServiceCreationRequestResult = null)
    {
        $this->ImportWebServiceCreationRequestResult = $ImportWebServiceCreationRequestResult;
    }
}