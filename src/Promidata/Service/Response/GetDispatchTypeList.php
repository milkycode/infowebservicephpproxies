<?php

class Promidata_Service_Response_GetDispatchTypeList
{

    /**
     * @var Promidata_Service_DTO_LocalizedItem[] $GetDispatchTypeListResult
     * @access public
     */
    public $GetDispatchTypeListResult = null;

    /**
     * @param Promidata_Service_DTO_LocalizedItem[] $GetDispatchTypeListResult
     * @access public
     */
    public function __construct($GetDispatchTypeListResult)
    {
      $this->GetDispatchTypeListResult = $GetDispatchTypeListResult;
    }

}
