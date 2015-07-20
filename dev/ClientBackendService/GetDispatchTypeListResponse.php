<?php

class GetDispatchTypeListResponse
{

    /**
     * @var LocalizedItem[] $GetDispatchTypeListResult
     * @access public
     */
    public $GetDispatchTypeListResult = null;

    /**
     * @param LocalizedItem[] $GetDispatchTypeListResult
     * @access public
     */
    public function __construct($GetDispatchTypeListResult)
    {
      $this->GetDispatchTypeListResult = $GetDispatchTypeListResult;
    }

}
