<?php

class GetImporterResponse
{

    /**
     * @var ImporterDefinition[] $GetImporterResult
     * @access public
     */
    public $GetImporterResult = null;

    /**
     * @param ImporterDefinition[] $GetImporterResult
     * @access public
     */
    public function __construct($GetImporterResult)
    {
      $this->GetImporterResult = $GetImporterResult;
    }

}
