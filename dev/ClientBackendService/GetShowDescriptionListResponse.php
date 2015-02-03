<?php

class GetShowDescriptionListResponse
{

    /**
     * @var ShowDescriptionItem[] $GetShowDescriptionListResult
     * @access public
     */
    public $GetShowDescriptionListResult = null;

    /**
     * @param ShowDescriptionItem[] $GetShowDescriptionListResult
     * @access public
     */
    public function __construct($GetShowDescriptionListResult)
    {
      $this->GetShowDescriptionListResult = $GetShowDescriptionListResult;
    }

}
