<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2019 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Request_GetTenderInformation
{
    /**
     * @var Promidata_Service_DTO_GetTenderInformationParameter $parameter
     * @access public
     */
    public $parameter = null;

    /**
     * @param Promidata_Service_DTO_GetTenderInformationParameter $parameter
     * @access public
     */
    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }
}