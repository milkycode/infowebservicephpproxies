<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
 */
class Promidata_Service_Response_GetTenderInformation
{
    /**
     * @var Promidata_Service_DTO_TenderInformationItem $GetTenderInformationResult
     * @access public
     */
    public $GetTenderInformationResult = null;

    /**
     * @param Promidata_Service_DTO_TenderInformationItem $GetTenderInformationResult
     * @access public
     */
    public function __construct($GetTenderInformationResult)
    {
        $this->GetTenderInformationResult = $GetTenderInformationResult;
    }
}