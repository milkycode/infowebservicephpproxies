<?php

class Promidata_Service_Response_GetShowDescriptionList
{

    /**
     * @var Promidata_Service_DTO_ShowDescriptionItem[] $GetShowDescriptionListResult
     * @access public
     */
    public $GetShowDescriptionListResult = null;

    /**
     * @param Promidata_Service_DTO_ShowDescriptionItem[] $GetShowDescriptionListResult
     * @access public
     */
    public function __construct($GetShowDescriptionListResult)
    {
      $this->GetShowDescriptionListResult = $GetShowDescriptionListResult;
    }

}
