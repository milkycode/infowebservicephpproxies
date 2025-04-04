<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_DTO_ImportWebServiceCreationRequestResult
{
    /**
     * @var string $Error
     * @access public
     */
    public $Error = null;

    /**
     * @var guid $WebServiceCreationRequestId
     * @access public
     */
    public $WebServiceCreationRequestId = null;

    /**
     * @param guid $WebServiceCreationRequestId
     * @access public
     */
    public function __construct($WebServiceCreationRequestId = null)
    {
        $this->WebServiceCreationRequestId = $WebServiceCreationRequestId;
    }
}