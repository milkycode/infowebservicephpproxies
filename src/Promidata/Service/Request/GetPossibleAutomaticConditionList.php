<?php

class Promidata_Service_Request_GetPossibleAutomaticConditionList
{

    /**
     *
     * @var Promidata_Service_DTO_TenderIndentImporterData $importdata
     * @access public
     */
    public $importdata = null;

    /**
     *
     * @var string[] $possibleDispatchTypes
     * @access public
     */
    public $possibleDispatchTypes = null;

    /**
     *
     * @param Promidata_Service_DTO_TenderIndentImporterData $importdata
     * @param string[] $possibleDispatchTypes
     * @access public
     */
    public function __construct($importdata, $possibleDispatchTypes)
    {
        $this->importdata = $importdata;
        $this->possibleDispatchTypes = $possibleDispatchTypes;
    }

}
