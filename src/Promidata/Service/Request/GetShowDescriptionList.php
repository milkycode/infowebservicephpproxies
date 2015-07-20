<?php

class Promidata_Service_Request_GetShowDescriptionList
{

    /**
     * @var ShowDescriptionListTypeEnum $showDescriptionListTypeEnum
     * @access public
     */
    public $showDescriptionListTypeEnum = null;

    /**
     * @param ShowDescriptionListTypeEnum $showDescriptionListTypeEnum
     * @access public
     */
    public function __construct($showDescriptionListTypeEnum)
    {
      $this->showDescriptionListTypeEnum = $showDescriptionListTypeEnum;
    }

}
