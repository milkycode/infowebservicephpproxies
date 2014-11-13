<?php

class Promidata_Service_Reponse_GetImporter
{

    /**
     *
     * @var Promidata_Service_DTO_ImporterDefinition[] $GetImporterResult
     * @access public
     */
    public $GetImporterResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ImporterDefinition[] $GetImporterResult
     * @access public
     */
    public function __construct($GetImporterResult)
    {
        $this->GetImporterResult = $GetImporterResult;
    }

}
