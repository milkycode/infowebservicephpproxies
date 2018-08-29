<?php
/**
 * Proxy for Promidata PromotionalOffice.
 * @author      Christian Hinz <christian@milkycode.com>
 * @author      Matthias Kleine <matthias@code-x.de>
 * @category    Milkycode
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2018 milkycode GmbH (https://www.milkycode.com)
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