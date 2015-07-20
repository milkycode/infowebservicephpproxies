<?php

class GetImporterDetailResponse
{

    /**
     * @var ImporterDetails $GetImporterDetailResult
     * @access public
     */
    public $GetImporterDetailResult = null;

    /**
     * @param ImporterDetails $GetImporterDetailResult
     * @access public
     */
    public function __construct($GetImporterDetailResult)
    {
      $this->GetImporterDetailResult = $GetImporterDetailResult;
    }

}
