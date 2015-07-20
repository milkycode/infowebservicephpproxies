<?php

class GetPossibleAutomaticConditionListResponse
{

    /**
     * @var GetPossibleAutomaticConditionListResult $GetPossibleAutomaticConditionListResult
     * @access public
     */
    public $GetPossibleAutomaticConditionListResult = null;

    /**
     * @param GetPossibleAutomaticConditionListResult $GetPossibleAutomaticConditionListResult
     * @access public
     */
    public function __construct($GetPossibleAutomaticConditionListResult)
    {
      $this->GetPossibleAutomaticConditionListResult = $GetPossibleAutomaticConditionListResult;
    }

}
