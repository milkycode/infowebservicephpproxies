<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_GetWebServiceCreationRequest
{
    /**
     * @var Promidata_Service_DTO_GetWebServiceCreationRequestResult $GetWebServiceCreationRequestResult
     * @access public
     */
    public $GetWebServiceCreationRequestResult = null;

    /**
     * @param Promidata_Service_DTO_GetWebServiceCreationRequestResult $GetWebServiceCreationRequestResult
     * @access public
     */
    public function __construct($GetWebServiceCreationRequestResult = null)
    {
        $this->GetWebServiceCreationRequestResult = $GetWebServiceCreationRequestResult;
    }
}