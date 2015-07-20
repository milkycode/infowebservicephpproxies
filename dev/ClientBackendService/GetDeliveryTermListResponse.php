<?php

class GetDeliveryTermListResponse
{

    /**
     * @var LocalizedItem[] $GetDeliveryTermListResult
     * @access public
     */
    public $GetDeliveryTermListResult = null;

    /**
     * @param LocalizedItem[] $GetDeliveryTermListResult
     * @access public
     */
    public function __construct($GetDeliveryTermListResult)
    {
      $this->GetDeliveryTermListResult = $GetDeliveryTermListResult;
    }

}
