<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2015 milkycode UG (http://www.milkycode.com)
 */
class Promidata_Service_Response_GetPossibleAutomaticConditionList
{
    /**
     *
     * @var Promidata_Service_DTO_GetPossibleAutomaticConditionListResult $GetPossibleAutomaticConditionListResult
     * @access public
     */
    public $GetPossibleAutomaticConditionListResult = null;

    /**
     *
     * @param Promidata_Service_DTO_GetPossibleAutomaticConditionListResult $GetPossibleAutomaticConditionListResult
     * @access public
     */
    public function __construct($GetPossibleAutomaticConditionListResult)
    {
        $this->GetPossibleAutomaticConditionListResult = $GetPossibleAutomaticConditionListResult;
    }
}