<?php

class Promidata_Service_Reponse_GetPossibleAutomaticConditionList
{

    /**
     *
     * @var Promidata_Service_DTO_GetPossibleAutomaticConditionListResult $GetPossiblePromidata_Service_DTO_AutomaticConditionListResult
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
