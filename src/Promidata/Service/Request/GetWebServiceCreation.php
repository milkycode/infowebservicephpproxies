<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Request_GetWebServiceCreation
{
    /**
     * @var Promidata_Service_DTO_GetWebServiceCreationRequestParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param Promidata_Service_DTO_GetWebServiceCreationRequestParameter $parameter
     * @access public
     */
    public function __construct($parameter = null)
    {
        $this->parameter = $parameter;
    }
}