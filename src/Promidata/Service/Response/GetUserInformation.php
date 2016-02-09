<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_GetUserInformation
{
    /**
     *
     * @var Promidata_Service_DTO_UserInformation[] $GetUserInformationResult
     * @access public
     */
    public $GetUserInformationResult = null;

    /**
     *
     * @param Promidata_Service_DTO_UserInformation[] $GetUserInformationResult
     * @access public
     */
    public function __construct($GetUserInformationResult)
    {
        $this->GetUserInformationResult = $GetUserInformationResult;
    }
}