<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_GetIndentInformation
{
    /**
     * @var Promidata_Service_DTO_IndentInformationItem $GetIndentInformationResult
     * @access public
     */
    public $GetIndentInformationResult = null;

    /**
     * @param Promidata_Service_DTO_IndentInformationItem $GetIndentInformationResult
     * @access public
     */
    public function __construct($GetIndentInformationResult)
    {
        $this->GetIndentInformationResult = $GetIndentInformationResult;
    }
}