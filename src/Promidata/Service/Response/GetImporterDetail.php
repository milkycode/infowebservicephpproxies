<?php

class Promidata_Service_Response_GetImporterDetail
{

    /**
     *
     * @var Promidata_Service_DTO_ImporterDetails $GetImporterDetailResult
     * @access public
     */
    public $GetImporterDetailResult = null;

    /**
     *
     * @param Promidata_Service_DTO_ImporterDetails $GetImporterDetailResult
     * @access public
     */
    public function __construct($GetImporterDetailResult)
    {
        $this->GetImporterDetailResult = $GetImporterDetailResult;
    }

}
