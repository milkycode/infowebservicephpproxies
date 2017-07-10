<?php

class GetOptionListResponse
{

    /**
     * @var OptionItem[] $GetOptionListResult
     * @access public
     */
    public $GetOptionListResult = null;

    /**
     * @param OptionItem[] $GetOptionListResult
     * @access public
     */
    public function __construct($GetOptionListResult)
    {
      $this->GetOptionListResult = $GetOptionListResult;
    }

}
