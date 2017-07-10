<?php

class GetOptionTypeListResponse
{

    /**
     * @var OptionTypeItem[] $GetOptionTypeListResult
     * @access public
     */
    public $GetOptionTypeListResult = null;

    /**
     * @param OptionTypeItem[] $GetOptionTypeListResult
     * @access public
     */
    public function __construct($GetOptionTypeListResult)
    {
      $this->GetOptionTypeListResult = $GetOptionTypeListResult;
    }

}
