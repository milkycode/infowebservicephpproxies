<?php

class GetOptionListResponse
{

    /**
     * @var GetOptionListResult $GetOptionListResult
     * @access public
     */
    public $GetOptionListResult = null;

    /**
     * @param GetOptionListResult $GetOptionListResult
     * @access public
     */
    public function __construct($GetOptionListResult)
    {
      $this->GetOptionListResult = $GetOptionListResult;
    }

}
